<?php use App\Http\Controllers\Sitio; ?>
@extends('layout')

@section('contenido')

<div style="padding: 30px 0px; background: url(img/FONDO_-copia.jpg); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
	<div class="container">
		<div class="row d-flex justify-content-center align-items-center" style="margin-top: 96px; height: 320px;">
			<div class="col-md-7 col-12 text-center" >
				<img src="img/Vintage-Logo-1.png" alt="logo" style="width: 40%;">
			</div>
			<!--<div class="col-md-7 col-12" >
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75); box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);">
				  {{-- <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol> --}}
				  <div class="carousel-inner">


				    <div class="carousel-item active">
				      <img class="d-block w-100" src="img/slider-3.png" alt="Promo cancun do it">
				      <div class="carousel-caption d-none d-md-block">
					    <a href="http://caribbeanhollidays.com/cancun/buceo-barco-hundido-cancun/informacion" class="btn-primary" style="text-decoration: none; padding: 8px 20px; text-decoration: none; border-radius: 7px;" target="_blank">Reservar >></a>
					  </div>
				    </div>

				  	<div class="carousel-item">
				      <img class="d-block w-100" src="img/slider-1.png" alt="Promo cancun do it">
				      <div class="carousel-caption d-none d-md-block">
					    <a href="http://caribbeanhollidays.com/veleros" class="btn-primary" style="text-decoration: none; padding: 8px 20px; text-decoration: none; border-radius: 7px;" target="_blank">Reservar >></a>
					  </div>
				    </div>

				    <div class="carousel-item">
				      <img class="d-block w-100" src="img/slider-2.png" alt="Promo cancun do it">
				      <div class="carousel-caption d-none d-md-block">
					    <a href="http://caribbeanhollidays.com/transportacion" class="btn-primary" style="text-decoration: none; padding: 8px 20px; text-decoration: none; border-radius: 7px;" target="_blank">Reservar >></a>
					  </div>
				    </div>
	
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>	-->
		</div>
	</div>
</div>

<section style="background-color: #eaeaea">
	<div class="container">
		<div class="row col-12 pt-5 pb-5">
			<div class="col-4 titulo-home text-center">
				<h1 class="text-center">
					XIKNAL
				</h1>
				<p class="mt-3">
					Quieres tener una de las mejores experiencias de tu vida? Xiknal Tours te ayuda a reservar tu visita en los mejores lugares de la Peninsula de Yucatan.
				</p>
			</div>
			<div class="col-8 row">
				<div class="col-4 text-center">
					<img src="img/snorkel-copia-100x100.png" alt="snorkel">
				</div>
				<div class="col-4 text-center">
					<img src="img/sportwather-copia-100x100.png" alt="snorkel">
				</div>
				<div class="col-4 text-center">
					<img src="img/nature-copia-100x100.png" alt="snorkel">
				</div>

				<div class="col-4 mt-4 text-center">
					<img src="img/boat-copia-100x100.png" alt="snorkel">
				</div>
				<div class="col-4 mt-4 text-center">
					<img src="img/chichen-copia-1-100x100.png" alt="snorkel">
				</div>
				<div class="col-4 mt-4 text-center">
					<img src="img/beach-copia-100x100.png" alt="snorkel">
				</div>
			</div>
		</div>
	</div>
</section>

{{-- INICIO TIPOS DE PAGO --}}
<div class="container mt-5">
	<div class="row d-flex justify-content-center" style=" padding: 0 11px 0px 15px;">

			<div class="col-md-2 col-6" style="    padding: 50px 0 0 0;"><img style=" width: 100%;" src="img/PayPal.png" alt="Card image cap"></div>
						
			<div class="col-md-6 col-12 mt-3 text-center" style="background-color: #F6F6F6; border-radius: 6px; padding: 10px;">
					<ul class="list-inline">
	  <li class="list-inline-item"><img style="width: 30px;" src="img/icono-banamex.png" alt="icono banamex"></li>
	  <li class="list-inline-item"><img style="width: 30px;" src="img/icono-banorte.png" alt="icono banorte"></li>
	  <li class="list-inline-item"><img  style="width: 30px;" src="img/icono-bbva.png" alt="icono bbva"></li>
	  <li class="list-inline-item"><img style="width: 30px;" src="img/icono-hsbc.png" alt="icono hsbc"></li>
	  <li class="list-inline-item"><img style="width: 30px;" src="img/icono-santander.png" alt="icono santander"></li>
	  <li class="list-inline-item"><img  style="width: 30px;" src="img/icono-scotia.png" alt="icono scotia"></li>
	  <li class="list-inline-item"><img  style="width: 30px;" src="img/icono-american.png" alt="icono american xpress"></li>
	</ul>
	<p>Aceptamos todas las tarjetas de crédito o débito</p>

	<p>También puedes pagar en efectivo <b>en cualquier tienda OXXO</b></p>
				</div>

				<div class="col-md-2 col-6" style="    padding: 50px 0 0 0;"><img style=" width: 100%;" src="img/logo-sitio-seguro.png" alt="Card image cap"></div>
		</div>
</div>

<section class="container">
	<div class="row col-12">
		@foreach ($dataCategoriesTours as $dataCategorieTour)
			@if($dataCategorieTour["categorie_see_home"] == 1)
				<div class="col-12">
					<h3 class="titulo-categoria">{{ $dataCategorieTour["categorie_name"] }}</h3>
					<p class="description-categorie"> {{ $dataCategorieTour["categorie_description"] }} </p>
				</div>

				
				@foreach( $dataCategorieTour["tours"] as $tour)
					@if($tour["tours"]["status"] == 1)

						<div class="col-4 row tour-categoria-elementor text-center">
							<div class="elementor-widget-wrap">
								<div class="elementor-element">
									<div class="elementor-widget-container">
										<div class="elementor-image">
											<a href="{{route('infoTour',['tour'=> str_replace(' ', '-', $tour['tours']['name'])  ])}}">
												<img width="300" height="300" src="{{ 'http://crm.caribbeanhollidays.com/api/v1/tours/images/'.$tour['tours']['url_image']}}" class="elementor-animation-hang attachment-medium size-medium" alt="" loading="lazy" srcset="{{ 'http://crm.caribbeanhollidays.com/api/v1/tours/images/'.$tour['tours']['url_image']}}" sizes="(max-width: 300px) 100vw, 300px">
												<!-- -->
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 text-center">
								<a href="{{route('infoTour',['tour'=> str_replace(' ', '-', $tour['tours']['name'])  ])}}" class="elementor-button-link">
									INFORMACIÓN
									<i aria-hidden="true" class="fas fa-arrow-circle-right"></i>
								</a>
							</div>
							<div class="elementor-widget-container-tabla col-12 text-center mt-3">
								<h3>
									<span>
										{{ $tour["tours"]["name"] }}
									</span>
								</h3>
								<!--<p>
									Zona Arqueológica ubicada a la orilla del mar, pueblo magico de la Riviera Maya.
								</p> -->
							</div>
							
						</div>
						<!--<div class="col-4 tour-categoria">
							<div class="col-12 sub-tour-categoria">
								<a href="{{route('infoTour',['tour'=> str_replace(' ', '-', $tour['tours']['name'])  ])}}">
									<img width="100%" src=" {{ $tour['tours']['url_image'] }} ">
								</a>
								<div class="content">
									<h4>{{ $tour["tours"]["name"] }}</h4>
								</div>
							</div>
						</div> -->
					@endif
				@endforeach

				
			@endif
		@endforeach
	</div>
	
</section>

		<section class="m-0">
{{-- 
			-webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75); --}}
{{-- <h1>HOLAAAAAAA</h1> --}}

{{-- <div class="container mt-5">
				<div class="row d-flex justify-content-center">
					<div class="col-2">
						<img src="img/paso_1.png" alt="paso 1" style="width: 100%;">
					</div>
					<div class="col-2">
						<img src="img/paso_2.png" alt="paso 2" style="width: 100%;">
					</div>
					<div class="col-2">
						<img src="img/paso_3.png" alt="paso 3" style="width: 100%;">
					</div>
					<div class="col-2">
						<img src="img/paso_4.png" alt="paso 4" style="width: 100%;">
					</div>
					<div class="col-2">
						<img src="img/paso_5.png" alt="paso 5" style="width: 100%;">
					</div>
				</div>
			</div> --}}

<div class="container mt-5">
				<div class="row d-lg-flex justify-content-center mt-4">
						{{--<div class="col-md-6 mb-4">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="http://caribbeanhollidays.com/veleros"><img class="card-img-top" src="img/velero-home-1.png" alt="Card image cap"></a>
							 <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    
							    <a href="https://www.cancundoit.com/experiencias-xcaret/categoria" class="btn btn-success btn-sm mt-3 btn-block boton-azul">Ver mas</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a> 
							  </div>
							</div>
						</div> --}}

						{{--<div class="col-md-4 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="http://caribbeanhollidays.com/aquaword/categoria"><img class="card-img-top" src="img/SCOOTER-SUBMARINO-HOME.png" alt="Card image cap"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    
							    <a href="http://caribbeanhollidays.com/aquaword/categoria" class="btn btn-success btn-sm mt-3 btn-block boton-azul">Ver mas</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a> 
							  </div>
							</div>
							
						</div>--}}
				</div>
			</div>


<div>
	<div class=" mt-5" data-parallax="scroll" data-image-src="img/p2home.jpg" alt="imagen fondo">
				<div class="row col-12 d-flex justify-content-center">
						<div class="col-12 text-center titulo">
							<h1 class="mt-4">¡Vive increíbles aventuras con <span>CARIBBEAN HOLLIDAYS!</span></h1>
						</div>
						<div class="col-md-5 d-lg-flex justify-content-center">
							<div style="background-color: #37B721; height: 2px; width: 100px;">
								
							</div>
						</div>
						<div class="col-8 text-center mb-4">
							<p style="font-size: 1.3em;" class="mt-4">Déjanos sorprenderte con increíbles Tours en Cancún, Riviera Maya y Yucatán. Llévate a casa los recuerdos más inolvidables de unas maravillosas vacaciones</p>
						</div>
						
					</div>
			</div>
</div>

			<div class="pt-md-4" style="background-color: #f9f9f9;">
				
			</div>

			<div class="container mt-5">
				<div class="col-12 text-left titulo">
					<h2 style="font-weight: 300; font-size: 1.4em;">NUESTROS COLABORADORES</h2>
				</div>
				<div class="col-md-12 d-lg-flex justify-content-start">
					<div style="background-color: #37B721; height: 2px; width: 100px;">
								
					</div>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="col-md-2 col-4"><img style=" width: 100%;" src="img/1.png" alt="Card image cap"></div>
					<div class="col-md-2 col-4"><img style=" width: 100%;" src="img/2.png" alt="Card image cap"></div>
					<div class="col-md-2 col-4"><img style=" width: 100%;" src="img/3.png" alt="Card image cap"></div>
					<div class="col-md-2 col-4"><img style=" width: 100%;" src="img/4.png" alt="Card image cap"></div>
					<div class="col-md-2 col-4"><img style=" width: 100%;" src="img/5.png" alt="Card image cap"></div>
					<div class="w-100 mt-4"></div>
					<div class="col-md-2 col-4"><img style=" width: 100%;" src="img/6.png" alt="Card image cap"></div>
					<div class="col-md-2 col-4"><img style=" width: 100%;" src="img/7.png" alt="Card image cap"></div>
					<div class="col-md-2 col-4"><img style=" width: 100%;" src="img/8.png" alt="Card image cap"></div>
					<div class="col-md-2 col-4"><img style=" width: 100%;" src="img/9.png" alt="Card image cap"></div>
					<div class="col-md-2 col-4"><img style=" width: 100%;" src="img/10.png" alt="Card image cap"></div>
					<div class="w-100 mt-4"></div>
					<div class="col-md-2 col-4"><img style=" width: 100%;" src="img/PayPal.png" alt="Card image cap"></div>
					<div class="col-md-2 col-4"><img style=" width: 100%;" src="img/logo-sitio-seguro.png" alt="Card image cap"></div>
				</div>
			</div>
	</section>

	<script type="text/javascript">
		var isMobile = {
mobilecheck : function() {
return (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|android|ipad|playbook|silk/i.test(navigator.userAgent||navigator.vendor||window.opera)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test((navigator.userAgent||navigator.vendor||window.opera).substr(0,4)))
}
}

// if(isMobile.mobilecheck())
// {
// 	location.href ="http://www.caribbeanhollidays.com/movil";
// }

	</script>


@stop
