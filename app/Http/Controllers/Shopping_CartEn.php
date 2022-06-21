<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DateTime;
use App\Tour;
use Cart;
use App\Hotel;
use App\Van;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class Shopping_CartEn extends Controller
{
    public function insertCart(Request $request)
    {

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

          // dd($request->all());
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
        
        $hotels = Hotel::all();
        $vans = Van::all()->where('capacity', '>=',$request->num_adultos);
        $price_zones = Hotel::all()->where('name', '=',$request->hotel);
        $price=0;
        foreach ($price_zones as $price_zone) {
                    
                     if($request->servicio == 'Round trip')
                     {
                       $price = $price_zone->zone->round_price;
                     }
                     else
                     {
                       $price = $price_zone->zone->simple_price;
                     }
                 }

        $price = number_format($price/19, 2, '.', '');
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
                                               ]]);
        return redirect()->to('en/carrito');
    }

    public function contentCart()
    {
        return view('en.carrito');
    }

    public function deleteCart($rowId = '')
    {
        Cart::remove($rowId);
        return back();
    }

    public function clientData()
    {
        $hotels = Hotel::all();
        return view('en.datosCliente',compact('hotels'));
    }


    public function saveDateClient(Request $request)
    {
      
        $data_client = array(
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
        session(['client-data'=>$data_client]);
        return redirect()->to('en/confirmacion');
    }

    public function confirmation()
    {
        $client_data = session('client-data');
        return view('en.confirmacion',compact('client_data'));
    }

    // public function successfulPurchase()
    // {

    // }
}
