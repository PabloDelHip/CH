<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Input;
use Cart;
use Barryvdh\DomPDF\Facade as PDF;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

use App\Order;
use App\OrderItem;

class OpenpayController extends Controller
{
	private $cupones=array();
    public function procesandoPago(Request $request)
    {
     	 // dd(Cart::content());
     	$client_data = session('client-data');
     	// dd($client_data['name']);
     	$openpay = \Openpay::getInstance('mhw2bq7bosqapxem4j7o', 'sk_fd87db8ed71240d0afe9c2cbead84610');
     	$amount = 0;
     	foreach(Cart::content() as $tour){
     		$amount = $tour->options->total_sale;
            // $datos_tour_cupon = array(
            //     "name"=>$tour->name,
            //     "date"=> $tour->options->date,
            //     "num_adult"=>$tour->options->num_adult,
            //     "num_child"=>$tour->options->num_child,
            //     "tarifa_diaria"=>$tour->options->tarifa_diaria,
            //     "tipo_cupon"=>$tour->options->tipo_cupon,
            //     "hora_extra"=>$tour->options->hora_extra,
            //     ,
            //     "horas_renta"=>$tour->options->num_adult,
            //     "pago_real"=>$tour->options->pago_real,
            //     "cupon_efectivo_texto"=>"",

            // );
            // $this->saveOrderItem($tour, $order->id);
            // $this->createCoupon($order->id,$contador,$datos_tour_cupon);
            // $contador++;
        }


	      $customerData = array(
            'name' => $client_data['name'],
     		'last_name' => $client_data['last_name'],
     		'phone_number' => $client_data['phone'],
     		'email' => $client_data['email'],
            'requires_account' => false);

        	$customer = $openpay->customers->add($customerData);
        	$response['customer_id'] = $customer->id;

	        $chargeData = array(
	            'method' => 'card',
	            'source_id' => $request->input("token_id"),
	            'amount' => $amount,
	            'description' => 'Pago desde sitio web', 
	            'device_session_id' => $request->input("deviceIdHiddenFieldName"),
	            'customer' => $customerData,
                "redirect_url"=>"https://www.cancundoit.com/validar-transaccion",
                "use_3d_secure"=> "true"
	        );
	       try {

	       	 	$charge = $openpay->charges->create($chargeData);
                 // dd($charge);
		        $response['charge'] = $charge;
                $url = $charge->serializableData['payment_method']->url;
                $id_cargo = $charge->authorization;
                \Session::put('cargo_id', $id_cargo);
                // \Session::get('cart');
		        $this->saveOrder();

                header('Location:'.$url);

		         // echo json_encode($response);
		  //        return \Redirect::route($url)
				// ->with('message', 'Compra realizada de forma correcta');
                
	       }
           catch (Exception $e) {
                echo $e;
                } 
           catch (\OpenpayApiTransactionError $e) {
                return \Redirect::route('confirmacion')
                    ->with('message', 'Ocurrio un problema al momento de hacer la transaccion, favor de intentarlo de nuevo');
                } catch(\OpenpayApiRequestError $e) {
                    return \Redirect::route('confirmacion')
                    ->with('message', 'Ocurrio un problema al momento de hacer la transaccion, favor de intentarlo de nuevo');
                }
                catch (\OpenpayApiConnectionError $e) {
                return \Redirect::route('confirmacion')
                    ->with('message', 'Ocurrio un problema al momento de hacer la transaccion, favor de intentarlo de nuevo');
                } catch(\OpenpayApiAuthError $e) {
                    return \Redirect::route('confirmacion')
                    ->with('message', 'Ocurrio un problema al momento de hacer la transaccion, favor de intentarlo de nuevo');
                }
                catch(\OpenpayApiError $e) {
                    return \Redirect::route('confirmacion')
                    ->with('message', 'Ocurrio un problema al momento de hacer la transaccion, favor de intentarlo de nuevo');
                }
    }

    protected function validarTransaccion()
    {
    	$openpay = \Openpay::getInstance('my6f5lnq17migajfjzfm', 'sk_70aa2e4b5ca24a7694013b143c3975c6');
    	$cargo_id = \Session::get('cargo_id');
    	$charge = $openpay->charges->get($cargo_id);
    	// dd($charge->serializableData['error_message']);
    	// $customer = $openpay->customers->get($cargo_id);
    	// $charge = $customer->charges->get($cargo_id);
    	if($charge->status=='completed')
    	{
    		return \Redirect::route('compra-exitosa')
				 ->with('message', 'Compra realizada de forma correcta');
    		
    	}
    	else
    	{
    		return \Redirect::route('confirmacion')
                    ->with('message', $charge->serializableData['error_message']);
    	}
    	
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
		foreach(Cart::content() as $tour){
            $datos_tour_cupon = array(
                "name"=>$tour->name,
                "date"=> $tour->options->date,
                "num_adult"=>$tour->options->num_adult,
                "num_child"=>$tour->options->num_child,
                "tarifa_diaria"=>$tour->options->tarifa_diaria,
                "tipo_cupon"=>$tour->options->tipo_cupon,
                "hora_extra"=>$tour->options->hora_extra,
                "total_sale"=>$tour->options->total_sale,
                "horas_renta"=>$tour->options->num_adult,
                "pago_real"=>$tour->options->pago_real,
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
