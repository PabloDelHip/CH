<?php

namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;
use DateTime;
use App\Tour;
use Cart;
use App\Hotel;
use App\Van;
use App\Zone;
use App\Mail\Email;
use App\Mail\Email_datos;
use Illuminate\Support\Facades\Mail;

class Shopping_Cart extends Controller
{
  public function __construct() {
        $this->API_HOST = env('API_HOST');
  }

  public function insertCartPaquete(Request $request)
  {
    Cart::destroy();
    $totalAdulto = $request->num_adultos * $request->adult_price;
    $totalNinos = $request->num_ninos * $request->child_price;
    $total = $totalAdulto + $totalNinos;
    $toursData = $request->all();
    $toursName = $toursData['name'];
    $toursId = $toursData['id'];
    $toursDate = $toursData['dateTours'];
    
    $paquete = array(
      "id" => $request->id_paquete,
      "package_id" => $request->id_paquete,
      "name" => $request->name_paquete,
      "num_adults" => $request->num_adultos,
      "num_childrens" => $request->num_ninos,
      "num_infants" => $request->num_infantes,
      "amount" => 0,
      "quantity" => $total,
      "index" => 1
    );

    $tours = array();

    for ($i=0; $i < count($toursName) ; $i++) { 
      array_push($tours, array(
        "tour_id" => $toursId[$i],
        "actividad" => $toursName[$i], 
        "reservation_date" => $toursDate[$i],
        "num_adults" => $request->num_adultos,
        "num_childrens" => $request->num_ninos,
        "num_infants" => $request->num_infantes,
        "amount" => 0,
        "total" => 0,
        "package_id" => $request->id_paquete,
        "index" => 1
      ));
    }

    $data = array(
      "total" => $total,
      "amount" => 0,
      "expected_date" => $toursDate[0],
      "type" => "tour",
      "user_id" => 1,
      "status" => "cotizacion",
      "descuento" => 0, 
      "paquetes" => $paquete,
      "tours" => $tours,
    );
    session(['paquete' => $data]);
    return redirect()->to('/datos-del-cliente');
  }
    public function insertCart(Request $request)
    {
      session()->forget('paquete');
      $request->adult_price = str_replace(",", "", $request->adult_price);
      $request->child_price = str_replace(",", "", $request->child_price);
      $total_adult_precio =  floatval($request->adult_price) * intval($request->num_adultos);
      $total_child_precio =  floatval($request->child_price) * intval($request->num_ninos);
      $total_sale = $total_adult_precio + $total_child_precio;
      $salida='';
      $hotel='';
      $transportacion = 0;
      $tipo_cupon ='tour';
      $tarifa_diaria ='';
      $pago_real = '';
      $muelle_total = '';
      $hora_extra = '';
      Cart::add(['id' => $request->id,
                   'name' => $request->name,
                   'quantity' => 1,
                   'price' => 0,
                   'attributes' => ['num_adult' => $request->num_adultos,
                                               'adult_price' => $request->adult_price,
                                               'total_adult_price' => $total_adult_precio,
                                               'num_child' => $request->num_ninos,
                                               'child_price' => $request->child_price,
                                               'total_child_price' => $total_child_precio,
                                               'num_infantes' => $request->num_infantes,
                                               'total_sale' => $total_sale,
                                               'image' => $request->image,
                                               'date' => $request->fecha_tour,
                                               'salida' => $salida,
                                               'hotel' => $hotel,
                                               'transportacion'=>$transportacion,
                                               'tipo_cupon'=>$tipo_cupon,
                                               'tarifa_diaria'=>$tarifa_diaria,
                                               'hora_extra'=>$hora_extra,
                                               'pago_real'=>$pago_real,
                                               'muelle_total'=>$muelle_total,
                                               ]]);
      return redirect()->to('/carrito');

      // dd($request->all());
      $name='';
      $transportacion=false; 
      $adult_price;
      $total_adult_preci;
      $num_ninos;
      $child_price;
      $total_child_preci;
      $total_sale;
      $image;
      $date;
      $salida='';
      $hotel='';
      $servicio='';
      $tarifa_diaria ='';
      $hora_extra ='';
      $pago_real='';
      $muelle_total=0;
      if(isset($request->auto))
      {
        $date1 = new DateTime(str_replace('/', '-', $request->llegada));
        $date2 = new DateTime(str_replace('/', '-', $request->salida));
        $diff = $date1->diff($date2);
        $name = $request->name_car;
        $transportacion = true;
        $adult_price = 0;
        $total_adult_preci= 0;
        $num_ninos=0;
        $child_price =0;
        $total_child_preci=0;
        $image=$request->image;
        $date = $request->llegada;
        $salida = $request->salida;
        $hotel = 'sin hotel';
        $servicio = 'renta auto';
        $total_sale = $diff->days * $request->price_car;
        $tipo_cupon='auto';
        $tarifa_diaria = $request->price_car;
      }

      elseif(isset($request->name_yate))
      {
        echo "yateee";
         //dd($request->all());
        $name = $request->name_yate;
        $transportacion = true;
        $adult_price = 0;
        $total_adult_preci= 0;
        $num_ninos=0;
        $child_price =0;
        $total_child_preci=0;
        $image=$request->image;
        $date = $request->llegada;
        $salida = $request->salida;
        $hotel = 'sin hotel';
        $servicio = 'renta auto';
        $total_sale = $request->price;
        $tipo_cupon = 'yate';
        if($name=='SUNSEEKER')
        {
          $total_sale = ($request->price * $request->num_adultos);
        }
        elseif($request->num_adultos>6)
        {
          switch ($name) {
              case 'SEA RAY SLX':
                    $suma_total = ($request->num_adultos-6)*1600;
                    $total_sale+=$suma_total;
                    $hora_extra=1600;
                  break;
              case 'SESSA MARINE':
                   $suma_total = ($request->num_adultos-6)*2500;
                    $total_sale+=$suma_total;
                    $hora_extra=2500;
                  break;
              case 'MAXUM':
                   $suma_total = ($request->num_adultos-6)*2100;
                    $total_sale+=$suma_total;
                    $hora_extra=2100;
                  break;
              
          }
        }

        switch ($name) {
              case 'SEA RAY SLX':
                    $hora_extra=1600;
                  break;
              case 'SESSA MARINE':
                    $hora_extra=2500;
                  break;
              case 'MAXUM':
                    $hora_extra=2100;
                  break;
                  case 'SUNSEEKER':
                  $hora_extra=5400;
                break;
          }
          $pago_real = $total_sale;
          $total_sale = $total_sale*0.30;
        
        
      }

      elseif($request->transportacion=='0')
      {

         

        $tour = Tour::find($request->id);
        $num_adultos=0;
        $num_ninos=0;
        $total_adult_preci = 0;
        $total_child_preci = 0;
        $muelle = 270;
        $muelle_ninos = 100;

         if($tour->dosxuno)
         {
          
            if ($request->num_adultos%2==0){
            
                 $num_adultos = $request->num_adultos / 2;
                 $total_sale = ($num_adultos*$request->precio_adulto);

              }else{
                $num_adultos = $request->num_adultos - 1;
                $num_adultos = $num_adultos / 2;
              
                $total_sale = ($num_adultos*$request->precio_adulto) + $request->precio_adulto;
              }

            if ($request->num_ninos%2==0){
                $num_ninos = $request->num_ninos / 2;
                $total_sale = ($num_ninos*$request->precio_ninos) + $total_sale;
            }else{

              
              $num_ninos = $request->num_ninos - 1;
              $num_ninos = $num_ninos / 2;
              
              $total_sale = ($num_ninos*$request->precio_ninos) + ($total_sale + $request->precio_ninos );
             
            }

          dd($request->all());
          //  $total_sale = ($request->num_adultos*$request->precio_adulto) + ($request->num_ninos*$request->precio_ninos);
          // dd($tour);
         }
         else
         {
            if($request->precio_ninos>0)
            {
              $total_sale = ($request->num_adultos*$request->precio_adulto) + ($request->num_ninos*$request->precio_ninos);
            }
            else
            {
              $total_sale = ($request->num_adultos*$request->precio_adulto) + $request->precio_van ;
            }

            if($request->id==67 || $request->id==69)
            {
              $total_sale=$request->precio_adulto;
            }
            
         }

         if($tour->porcentaje >0)
         {
          $muelle_total = ($muelle* $request->num_adultos) + ($muelle_ninos* $request->num_ninos);
          // dd($muelle);
          // dd($request->all());
          $pago_real = $total_sale;
          $total_sale = $pago_real * $tour->porcentaje; 
         }
         
        $totalShoping = 0;
        $image = $request->image;
        $date = $request->fecha_tour;
        $name = $request->name_tour;
        $adult_price = $tour->adult_price;
        $num_ninos = $request->num_ninos;
        $child_price=$tour->child_price;
        $tipo_cupon ='tour';
        

      }

      else if(isset($request->transportacion))
      {
        echo "transpooooooor";
         // dd($request->all());
         $price=Zone::find($request->zone);
        // dd();

        $hotels = Hotel::all();
        $vans = Van::all()->where('capacity', '>=',$request->num_adultos);
        $price_zones = Hotel::all()->where('name', '=',$request->hotel);
        
        if($request->servicio == 'Viaje redondo')
        {
          $price = $price->round_price;
        }
        else
        {
          $price = $price->simple_price;
        }

        // $price=;
        // foreach ($price_zones as $price_zone) {
                    
        //              if($request->servicio == 'Viaje redondo')
        //              {
        //                $price = $price_zone->zone->round_price;
        //              }
        //              else
        //              {
        //                $price = $price_zone->zone->simple_price;
        //              }
        //          }


        $name=$request->servicio;
        $transportacion = true;
        $adult_price = $price;
        $total_adult_preci= $price;
        $num_ninos=0;
        $child_price =0;
        $total_child_preci=0;
        $total_sale = $price;
        $image='1.jpg';
        $date = $request->llegada;
        $salida = $request->salida;
        $hotel = $request->hotel;
        $servicio = $request->servicio;
        $tipo_cupon='transportacion'; 

      }


        Cart::add(['id' => $request->id,
                   'name' => $name,
                   'qty' => 1,
                   'price' => 0,
                   'options' => ['num_adult' => $request->num_adultos,
                                               'adult_price' => $adult_price,
                                               'total_adult_price' => $total_adult_preci,
                                               'num_child' => $num_ninos,
                                               'child_price' => $child_price,
                                               'total_child_price' => $total_child_preci,
                                               'total_sale' => $total_sale,
                                               'image' => $image,
                                               'date' => $date,
                                               'salida' => $salida,
                                               'hotel' => $hotel,
                                               'transportacion'=>$transportacion,
                                               'tipo_cupon'=>$tipo_cupon,
                                               'tarifa_diaria'=>$tarifa_diaria,
                                               'hora_extra'=>$hora_extra,
                                               'pago_real'=>$pago_real,
                                               'muelle_total'=>$muelle_total,
                                               ]]);
        return redirect()->to('/carrito');
    }

    public function contentCart()
    {
      // dd(Cart::content());
        return view('carrito');
    }

    public function deleteCart($rowId = '')
    {
        Cart::remove($rowId);
        return back();
    }

    public function clientData()
    {
      $paquete = session('paquete');
      // dd($paquete);
      $hotels = Hotel::all();
      $paises = json_decode( file_get_contents($this->API_HOST.'/api/v1/countries/get'), true );
      $paises = $paises['data'];
      return view('datosCliente',compact('hotels', 'paises', 'paquete'));
    }

    function build_post_fields( $data,$existingKeys='',&$returnArray=[]){
        if(($data instanceof CURLFile) or !(is_array($data) or is_object($data))){
            $returnArray[$existingKeys]=$data;
            return $returnArray;
        }
        else{
            foreach ($data as $key => $item) {
                $this->build_post_fields($item,$existingKeys?$existingKeys."[$key]":$key,$returnArray);
            }
            return $returnArray;
        }
    }


    public function saveDateClient(Request $request)
    {

      $datos_tour_cupon="";

      $data_client_web = array(
            "name"=>$request->name,
            "last_name"=>$request->last_name,
            "email"=>$request->email,
            "city"=>$request->city,
            "state"=>$request->state,
            "country"=>$request->country,
            "phone"=>$request->phone,
            "hotel"=>$request->hotel,
            "comments"=>$request->comments,
            "vuelo"=>$request->vuelo,
            "hora_de_llegada"=>$request->hora_de_llegada
        );
        $data = Cart::getContent();
      if(count($data) === 0) {
        $paquete = session('paquete');
        $data_client = array(
          "id"=> 0,
          "name"=>$request->name,
          "last_name"=>$request->last_name,
          "email"=>$request->email,
          "city_id"=> null,
          "state"=>$request->state,
          "country_id"=>$request->country,
          "phone"=>$request->phone,
          "additional_information"=>$request->comments,
          "birth_date" => $request->fecha_namicimiento,
          "sex"=> $request->genero,
          "state_id"=> null,
        );
        $paqueteData = $paquete['paquetes'];
        $paquete['paquetes'] = array($paquete['paquetes']);
        $paquete['customer'] = $data_client;
        $ch = curl_init($this->API_HOST.'/api/v1/purchase_order/create');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->build_post_fields($paquete));
        // execute!
        $response = curl_exec($ch);
        // close the connection, release resources used
        curl_close($ch);
        $paquete['paquetes'] = $paqueteData;
        // dd($paquete['paquetes']);
        dd($response);
      }
      else {
        $data_client = (object) array(
          "id"=> 0,
          "name"=>$request->name,
          "last_name"=>$request->last_name,
          "email"=>$request->email,
          "city_id"=> null,
          "state"=>$request->state,
          "country_id"=>$request->country,
          "phone"=>$request->phone,
          "additional_information"=>$request->comments,
          "birth_date" => $request->fecha_namicimiento,
          "sex"=> $request->genero,
          "state_id"=> null,
        );

        // $data = Cart::content();
        

        // dd($request->all());
        $tours = array();
        $total = 0;
        $expected_date = '';
        foreach($data as $tour){
            if($expected_date === '') {
              $expected_date = $tour->attributes->date;
            }
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

            $date = $tour->attributes->date; 
            $date = explode("/", $date);
            $date = $date[2].'-'.$date[1].'-'.$date[0];

            $newTour = (object) array(
            "id" => null,
            "actividad" => $tour->name,
            "amount" => 0,
            "num_adults" => $tour->attributes->num_adult,
            "num_childrens" => $tour->attributes->num_child,
            "num_infants" => $tour->attributes->infantes,
            "reservation_date" => $date,
            "total" => $tour->attributes->total_sale,
            "tour_id" => $tour->id,
          );
          $total += $tour->attributes->total_sale;
          array_push($tours,$newTour);

            // dd($datos_tour_cupon);
            // $this->saveOrderItem($tour, $order->id);
            // $this->createCoupon($order->id,$contador,$datos_tour_cupon);
            // $contador++;
        }
        $expected_date = explode("/", $expected_date);
        $expected_date = $expected_date[2].'-'.$expected_date[1].'-'.$expected_date[0];
        $data = [
            "amount" => 0,
            "customer"=> $data_client,
            "status" => "Cotizacion",
            "type" => "tours",
            "user_id" => 2,
            "tours" => $tours,
            "total" => $total,
            "expected_date" => $expected_date
         ];
        $ch = curl_init($this->API_HOST.'/api/v1/purchase_order/create');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->build_post_fields($data));

        // execute!
        $response = curl_exec($ch);
        // dd($response);
        // close the connection, release resources used
        curl_close($ch);

        // do anything you want with your response
        // var_dump($response);
      }
        // Mail::to('reservas@cancundoit.com')->send(new Email_datos($request->all(),$datos_tour_cupon));
        //Mail::to('reservas@cancundoit.com')->send(new Email_datos($request->all(),Cart::content()));
        session(['client-data'=>$data_client_web]);
        $_SESSION["datos_cliente"]=$data_client_web;
        $_SESSION["carrito"]=$datos_tour_cupon;
        return redirect()->to('confirmacion');
        //return redirect()->to('/pago-con-tarjeta');
    }

    public function confirmation()
    {
        $client_data = session('client-data');
        $paquete = session('paquete');
        // dd($client_data);
        return view('confirmacion',compact('client_data', 'paquete'));
    }

    // public function successfulPurchase()
    // {

    // }
}
