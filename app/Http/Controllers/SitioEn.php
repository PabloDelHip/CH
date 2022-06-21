<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tour;
use App\Categorie;
use App\Imagetour;
use App\Zone;
use App\Hotel;
use App\Van;
use App\Order;
use Cart;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
use Barryvdh\DomPDF\Facade as PDF;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\OrderItem;

class SitioEn extends Controller
{
     private $cupones=array();
    public function home()
    {
      

        $hotels = Hotel::all();

        // foreach ($variable as $key => $value) {
        //     echo $hotel->zone->name.'<br>';
        // }
        // $valores = session('sesion');
        // dd($valores);
        $title ="Mejores tours en Cancun | Actividades y atracciones";
        $meta_description ="En Go Cancun Tours encontraras los mejores tours y atracciones en Cancún y la Riviera Maya y tours a Chichén Itzá";
        $categories = Categorie::all()->where('active', '=',true);
        $keywords = "tours en cancun, riviera maya, tours economicos,chichen itza, ruinas mayas, actividades en cancun";
        return view('en.home',compact('categories','title','meta_description','keywords','hotels'));
    }

    public function transporte(Request $request)
    {
       
        $hotels = Hotel::all();
        //$hotels = Hotel::all()->where('capacity', '>=',$request->num_adultos);
        //foreach ($hotels as $hotel) {
                  //   echo $hotel->zone->name.'<br>';
                // }
        $vans = Van::all()->where('capacity', '>=',$request->num_adultos)->where('type','=',0);
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

         // $price = ;
         $price = number_format($price/19, 2, '.', '');
//echo $price_zone['zone']['simple_price']; 
//dd($price_zone);
        $datos= $request->all();
        $tipo_servicio = $request->servicio;
        //echo $datos['servicio'];
        //dd($request->all());
         return view('en.transporte',compact('datos','vans','tipo_servicio','price','hotels'));
    }

    public function categoriaPost(Request $request)
    {
        //dd($request->all());
        return redirect()->route("categories",['categorie'=> $request->servicio]);
        //route("categories",['categorie'=> 'sitios-arqueologicos'])
    }


    public function transportacionGet()
    {
        $hotels = Hotel::all();
        $price='';
        $vans = Van::all()->where('type','=',false);
        return view('transporte',compact('vans','price','hotels'));
    }

    public function cars()
    {
         $hotels = Hotel::all();
         $price='';
 

         $vans = Van::all()->where('type','=',1)->where('idioma','=','en');
        
        return view('en.cars',compact('vans','price','hotels'));
    }

    public function yates()
    {
         $hotels = Hotel::all();
         $price='';
         $vans = Van::all()->where('type','=',2)->where('idioma','=','en');
        return view('en.yates',compact('vans','price','hotels'));
    }

    public function nosotros()
    {
        return view('en.nosotros');
    }

    
    public function categoria($url)
    {
        $Categorias = Categorie::all()->where('url', '=',$url);
        foreach($Categorias as $Categoria)
        {
            $categorie_name=$Categoria->name;
            $description = $Categoria->description;
            $image = $Categoria->image;
            $idCategoria =  Categorie::find($Categoria->id);
            $title =$Categoria->tittle;
            $meta_description =$Categoria->meta_description;
            $keywords = $Categoria->keyword;

        }
        $tours = $idCategoria->tours;
         return view('en.categorias',compact('tours','categorie_name','description','image','title','meta_description','keywords'));
    }

    public static  function toursHome($id_categorie)
    {
        $categories = Categorie::find($id_categorie);
        return $categories->tours;
        //dd($categories->tours);

    }

    public static  function toursOferta()
    {
        return view('ofertas.chichen');
    }

    public static  function toursOfertaIngles()
    {
        return view('en.oferta-ingles');
    }
    public static  function hotel_flight()
    {
        return view('en.hotel_avion');
    }

    public static function porcentajeDosNumeros($numero_menor,$numero_mayor)
    {
        $porcentaje = (($numero_mayor - $numero_menor)/$numero_menor) * 100;
        $porcentaje *=-1;
        $porcentaje = round($porcentaje);
        return number_format($porcentaje, 2, '.', ',');
    }

    public function ubicacion($ubicacion = '')
    {

        //con compact hacemos ya no tenemos que poner esto 'nombre' => $nombre... con el echo de poner el nombre del parametro, va a crear una variable con el mismo nombre para poder utilizarla en la vista
        return view('cancun.tours-actividades');
    }

    public function infoTour($tour = '')
    {

        // echo "hola";
        $tourInfo = Tour::all()->where('url', '=',$tour);
       // dd($tourInfo);
        $dias_activo_tour="";
        foreach($tourInfo as $dias)
        {
            if($dias->mon==0)
            {
                $dias_activo_tour.="day != 1 && ";
            }
            if($dias->tue==0)
            {
                $dias_activo_tour.="day != 2 && ";
            }
            if($dias->wed==0)
            {
                $dias_activo_tour.="day != 3 && ";
            }
            if($dias->thu==0)
            {
                $dias_activo_tour.="day != 4 && ";
            }
            if($dias->fri==0)
            {
                $dias_activo_tour.="day != 5 && ";
            }
            if($dias->sat==0)
            {
                $dias_activo_tour.="day != 6 && ";
            }
            if($dias->sun==0)
            {
                $dias_activo_tour.="day != 0 && ";
            }
        }
        $dias_activo_tour = trim($dias_activo_tour, '&& ');
        $numTour = count($tourInfo);
        if($numTour==0)
        {
            return abort(404);
        }
        else
        {
            foreach($tourInfo as $tourIn){
                $image = Tour::find($tourIn->id);
                $title =$tourIn->tittle;
                $meta_description =$tourIn->meta_description;
                $keywords = $tourIn->keyword;
            }
            return view('en.infoTour',compact('tourInfo','image','dias_activo_tour','title','meta_description','keywords'));
        }

    }

    public function compraExitosa()
    {
        return view('compra-exitosa');
    }

    public function contactanos()
    {
        return view('contactanos');
    }

    public function cupon_efectivo()
    {
        $order_id=Order::max('id') + 1;
        
        session(['efectivo'=>'true']);
        $client_data = session('client-data');
        //enviar Email
       // Cart::destroy();
       $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'SenderUserName';
        $objDemo->receiver = 'ReceiverUserName';
        $pdf = PDF::loadView('cupon_efectivo',compact('order_id'));
        $pdf->save('cupones/cupon-efectivo.pdf');

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
        //  $this->saveOrderItem($producto, $order->id);
        // }
        $contador = 1;
        // dd(Cart::content());

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
                "cupon_efectivo_texto"=>"PENDIENTE DE PAGO - VALIDAR CON AGENCIA",

            );

            $this->saveOrderItem($tour, $order->id);
            $this->createCoupon($order->id,$contador,$datos_tour_cupon);
            $contador++;
        }
       session(['cupones'=>$this->cupones]);
        Mail::to($client_data['email'])->send(new Email($objDemo));
        Cart::destroy(); 
        return view('compra-exitosa');
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

        // echo "<pre>".print_r($datos_tour_cupon)."</pre>";
        // dd($datos_tour_cupon);
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
            $pdf = PDF::loadView('cupon_cars_efectivo',compact('num_cupon','client_data','numGeneradoCupon'));
        }
        elseif($datos_tour_cupon['tipo_cupon']=='yate')
        {
            $pdf = PDF::loadView('cupon_yate_efectivo',compact('num_cupon','client_data','numGeneradoCupon'));
        }
        elseif($datos_tour_cupon['tipo_cupon']=='transportacion')
        {
            $pdf = PDF::loadView('cupon_transporte_efectivo',compact('num_cupon','client_data','numGeneradoCupon'));
        }
        else
        {
            $pdf = PDF::loadView('cupon_tour_efectivo',compact('num_cupon','client_data','numGeneradoCupon'));
        }
        
        $pdf->save('cupones/cupon-'.$order_id.'-'.$num_cupon_generado.'.pdf');
        //return $pdf->stream();
        session(['cupon'=>'/cupon-'.$order_id.'-'.$num_cupon_generado.'.pdf']);

        array_push($this->cupones,'/cupon-'.$order_id.'-'.$num_cupon_generado.'.pdf');


        // return $pdf->stream();
    }
}
