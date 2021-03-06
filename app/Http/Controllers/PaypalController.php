<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Input;
use Cart;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Barryvdh\DomPDF\Facade as PDF;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

use App\Order;
use App\OrderItem;

class PaypalController extends BaseController
{
	private $_api_context;
    private $cupones=array();

	public function __construct()
	{
		// setup PayPal api context
		$paypal_conf = \Config::get('paypal');
		$this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
		$this->_api_context->setConfig($paypal_conf['settings']);
	}

	public function postPayment()
	{
		 $tipoMoneda = 'MXN';
         if(!session()->has('exchangeRate')) {
            session(['exchangeRate' => 0]);
            session(['exchangeValue' => 1]);
         } else {
            $tipoCambio = session("exchangeValue");
         }
         if(session("exchangeRate") == 1) {
         	$tipoMoneda = 'USD';
         }
				 if(session("exchangeRate") == 2) {
					$tipoMoneda = 'EUR';
				}
		$payer = new Payer();
		$payer->setPaymentMethod('paypal');

		$items = array();
		$subtotal = 0;
		$cart = \Session::get('cart');
		$currency = $tipoMoneda;
		$data = Cart::getContent();
		if(count($data) > 0) {
			foreach($data as $tour){
				$item = new Item();
				$item->setName($tour->name)
				->setCurrency($currency)
				->setDescription($tour->name)
				->setQuantity(1)
				->setPrice($tour->attributes->total_sale);

				$items[] = $item;
				$subtotal += $tour->attributes->total_sale;
			}
		}
		else {
			$paquete = session('paquete');
			$item = new Item();
			$item->setName($paquete['paquetes']['name'])
			->setCurrency($currency)
			->setDescription($paquete['paquetes']['name'])
			->setQuantity(1)
			->setPrice($paquete['total']);

			$items[] = $item;
			$subtotal += $paquete['total'];
		}

		$item_list = new ItemList();
		$item_list->setItems($items);

		// $details = new Details();
		// $details->setSubtotal($subtotal)
		// ->setShipping(100);

		 $total = $subtotal;

		$amount = new Amount();
		$amount->setCurrency($currency)
			->setTotal($total);
			// ->setDetails($details);

		$transaction = new Transaction();
		$transaction->setAmount($amount)
			->setItemList($item_list)
			->setDescription('Pago de tours Xiknal');

		$redirect_urls = new RedirectUrls();
		$redirect_urls->setReturnUrl(\URL::route('payment.status'))
			->setCancelUrl(\URL::route('payment.status'));

		$payment = new Payment();
		$payment->setIntent('Sale')
			->setPayer($payer)
			->setRedirectUrls($redirect_urls)
			->setTransactions(array($transaction));

		try {
			$payment->create($this->_api_context);
		} catch (\PayPal\Exception\PPConnectionException $ex) {
			if (\Config::get('app.debug')) {
				echo "Exception: " . $ex->getMessage() . PHP_EOL;
				$err_data = json_decode($ex->getData(), true);
				exit;
			} else {
				die('Ups! Algo sali?? mal');
			}
		}

		foreach($payment->getLinks() as $link) {
			if($link->getRel() == 'approval_url') {
				$redirect_url = $link->getHref();
				break;
			}
		}

		// add payment ID to session
		\Session::put('paypal_payment_id', $payment->getId());

		if(isset($redirect_url)) {
			// redirect to paypal
			return \Redirect::away($redirect_url);
		}

		return \Redirect::route('/')
			->with('message', 'Ups! Error desconocido.');

	}

	public function getPaymentStatus()
	{
        echo \Session::get('paypal_payment_id');
		// Get the payment ID before session clear
		$payment_id = \Session::get('paypal_payment_id');

		// clear the session payment ID
		\Session::forget('paypal_payment_id');

		$payerId = \Input::get('PayerID');
		$token = \Input::get('token');

		if (empty($payerId) || empty($token)) {
			return \Redirect::route('/')
				->with('message', 'Hubo un problema al intentar pagar con Paypal');
		}

		$payment = Payment::get($payment_id, $this->_api_context);

		$execution = new PaymentExecution();
		$execution->setPayerId(\Input::get('PayerID'));

		$result = $payment->execute($execution, $this->_api_context);


		if ($result->getState() == 'approved') {

			$this->saveOrder();

			\Session::forget('cart');

			return \Redirect::route('compra-exitosa')
				->with('message', 'Compra realizada de forma correcta');
		}
		return \Redirect::route('/')
			->with('message', 'La compra fue cancelada');
	}

	protected function saveOrder()
	{
		$subtotal = 0;
		$shipping = 100;

        foreach(Cart::content() as $tour){
			$subtotal += $tour->options->total_sale;
		}

		$order = Order::create([
			'subtotal' => $subtotal,
			'shipping' => $shipping,
			'user_id' => 1
        ]);

        // foreach($cart as $producto){
		// 	$this->saveOrderItem($producto, $order->id);
		// }
        $contador = 1;
				$data = Cart::getContent();
		foreach($data as $tour){
            $datos_tour_cupon = array(
                "name"=>$tour->name,
                "date"=> $tour->attributes->date,
                "num_adult"=>$tour->attributes->num_adult,
                "num_child"=>$tour->attributes->num_child,
                "tarifa_diaria"=>$tour->attributes->tarifa_diaria,
                "tipo_cupon"=>$tour->attributes->tipo_cupon,
                "hora_extra"=>$tour->attributes->hora_extra,
                "total_sale"=>$tour->attributes->total_sale,
                "horas_renta"=>$tour->attributes->num_adult,
                "pago_real"=>$tour->attributes->pago_real,
                "cupon_efectivo_texto"=>"",

            );
            $this->saveOrderItem($tour, $order->id);
            $this->createCoupon($order->id,$contador,$datos_tour_cupon);
            $contador++;
        }
        $this->successfulPurchase();
	}

	protected function saveOrderItem($tour, $order_id)
	{
		OrderItem::create([
			'price' => $tour->options->total_sale,
			'quantity' => 1,
			'tour_id' => $tour->id,
			'order_id' => $order_id
		]);
    }

    protected function createCoupon($order_id,$num_cupon_generado,$datos_tour_cupon)
    {
        $numGeneradoCupon = $num_cupon_generado;
        if($datos_tour_cupon['tipo_cupon']=='auto')
        { 
        	session(['cupon_auto'=>'auto']);
        }
        elseif(session('cupon_auto')=='')
        {
        	session(['cupon_auto'=>'']);
        }

        $datos_cupon = array(
            'num_cupon'=>$order_id,
            'numGeneradoCupon'=>$numGeneradoCupon,
        );

        session(['datos_tour_cupon'=>$datos_tour_cupon]);
        session(['datos_cupon'=>$datos_cupon]);
        if($datos_tour_cupon['tipo_cupon']=='auto')
        {
        	$pdf = PDF::loadView('cupon_cars',compact('num_cupon','client_data','numGeneradoCupon'));
        }
        elseif($datos_tour_cupon['tipo_cupon']=='yate')
        {
        	$pdf = PDF::loadView('cupon_yate',compact('num_cupon','client_data','numGeneradoCupon'));
        }
        elseif($datos_tour_cupon['tipo_cupon']=='transportacion')
        {
        	$pdf = PDF::loadView('cupon_transporte',compact('num_cupon','client_data','numGeneradoCupon'));
        }
        else
        {
        	$pdf = PDF::loadView('cupon_tour',compact('num_cupon','client_data','numGeneradoCupon'));
        }
        
        $pdf->save('cupones/cupon-'.$order_id.'-'.$num_cupon_generado.'.pdf');
        //return $pdf->stream();
        session(['cupon'=>'/cupon-'.$order_id.'-'.$num_cupon_generado.'.pdf']);

        array_push($this->cupones,'/cupon-'.$order_id.'-'.$num_cupon_generado.'.pdf');


        // return $pdf->stream();
    }

    protected function successfulPurchase()
    {
        session(['cupones'=>$this->cupones]);
        session(['efectivo'=>'']);
        $client_data = session('client-data');
        //enviar Email
       // Cart::destroy();
       $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'SenderUserName';
        $objDemo->receiver = 'ReceiverUserName';

        Mail::to($client_data['email'])->send(new Email($objDemo));

    }
}
