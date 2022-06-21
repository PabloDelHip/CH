<?php use App\Http\Controllers\Sitio; ?>
@extends('layout_p')

@section('contenido')

<div class="container">
	<div class="row" style="margin-top: 70px;">
		<div class="col-5">
			<div id="liquidBoxContainer"></div>
			
			<div class="col-12 mt-3 text-center" style="background-color: #F6F6F6; border-radius: 6px; padding: 10px;">
				<ul class="list-inline">
  <li class="list-inline-item"><img style="width: 30px;" src="img/icono-banamex.png"></li>
  <li class="list-inline-item"><img style="width: 30px;" src="img/icono-banorte.png"></li>
  <li class="list-inline-item"><img  style="width: 30px;" src="img/icono-bbva.png"></li>
  <li class="list-inline-item"><img style="width: 30px;" src="img/icono-hsbc.png"></li>
  <li class="list-inline-item"><img style="width: 30px;" src="img/icono-santander.png"></li>
  <li class="list-inline-item"><img  style="width: 30px;" src="img/icono-scotia.png"></li>
  <li class="list-inline-item"><img  style="width: 30px;" src="img/icono-american.png"></li>
</ul>
<p>Aceptamos todas las tarjetas de crédito o débito</p>

<p>También puedes pagar en efectivo <b>en cualquier tienda OXXO</b></p>
			</div>

		</div>

		<div class="col-7" >
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);">
			  {{-- <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol> --}}
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="img/slider_1.png" alt="First slide">
			      <div class="carousel-caption d-none d-md-block">
				    <a href="#" class="btn-primary" style="text-decoration: none; padding: 8px 20px; text-decoration: none; border-radius: 7px;">Reservar >></a>
				  </div>
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="img/slider_2.png" alt="Second slide">
			      <div class="carousel-caption d-none d-md-block">
				    <a href="#" class="btn-primary" style="text-decoration: none; padding: 8px 20px; text-decoration: none; border-radius: 7px;">Reservar >></a>
				  </div>
			    </div>
			    {{-- <div class="carousel-item">
			      <img class="d-block w-100" src="img/p3.png" alt="Third slide">
			      <div class="carousel-caption d-none d-md-block">
				    <a href="#" class="btn-primary" style="text-decoration: none; padding: 8px 20px; text-decoration: none; border-radius: 7px;">Reservar >></a>
				  </div>
			    </div> --}}
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
		</div>
	</div>
</div>

{{-- <div class="container mt-4">
	<div class="row"> --}}
		{{-- <div class="parallax-window col-12 pt-3 pb-3 justify-content-center align-items-center" style="height: 100vh;" data-parallax="scroll" data-image-src="{{ url('/img/encabezado.jpg') }}">
			
		</div> --}}

		{{-- <div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-6 mt-4">
					<a target="_blank" href="https://shareasale.com/r.cfm?b=1363239&amp;u=1892160&amp;m=32794&amp;urllink=&amp;afftrack="><img src="img/mayo-promo.jpg" border="0" alt="Visita el paraiso esta Semana Santa y disfruta de grandes descuentos en parques by Xcaret" /></a>
				</div>
			</div>
		</div> --}}

		
	{{-- </div>
</div> --}}

	{{-- <div class="mt-5 contenedor-motor">
		<div class="container" style="height: 100vh;"> --}}
			{{-- <div class="col-md-4 mt-5">
				<div class="card motor-busqueda"> --}}
				  {{-- <div class="card-header text-center">
				    <p class="h5 m-0"><b>Reserva tu transporte</b></p>
				  </div> --}}
				 {{--  <div class="card-body">

				  	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Trasportación</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tours</a>
					  </li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
					  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					  	 <form class="row" action=" {{ route('ingresar-carrito') }}" method="POST">
				                        {{ csrf_field() }}
									   <div class="form-group col-12 ">
									    <label class="mb-0" for="exampleFormControlSelect1">Tipo de servicio</label>
									    <select class="form-control form-control-sm" id="tipo_servicio" name="servicio">
											<option value="Viaje redondo">Viaje redondo</option>
											<option value="Sencillo - Aeropuerto al Hotel">Sencillo - Aeropuerto al Hotel</option>
											<option value="Sencillo - Hotel al Aeropuerto">Sencillo - Hotel al Aeropuerto</option>
										</select>
									  </div>

									   <div class="form-group col-12 ">
									    <label class="mb-0" for="exampleFormControlSelect1">Ubicación del hotel</label>
									    <select class="form-control form-control-sm" id="tipo_servicio" name="zone">
											
											@foreach ($zones as $zone)
												<option value="{{$zone->id}}">{{$zone->name}}</option>
											@endforeach
										</select>
									  </div>

									  <div class="form-group col-12 ">
									    <label class="mb-0" for="exampleFormControlSelect1">Hotel</label>
									    <div class="easy-autocomplete eac-description"><input id="template-desc" class="form-control form-control-sm" name="hotel" style="width: 100%;" placeholder="Ingresar hotel" autocomplete="off" required><div class="easy-autocomplete-container" id="eac-container-template-desc"><ul></ul></div></div>
									  </div> --}}
					                    

									  {{-- <div class="form-group col-4">
									    <label class="mb-0" for="exampleFormControlSelect1">Hotel</label>
									    <div class="easy-autocomplete eac-description"><input id="template-desc" class="form-control form-control-sm" name="hotel" style="width: 100%;" placeholder="Ingresar hotel" autocomplete="off" required><div class="easy-autocomplete-container" id="eac-container-template-desc"><ul></ul></div></div>
									  </div>

									 					    <script type="text/javascript">
					var options = {
					data: [@foreach($hotels as $hotel)
		{name: "{{$hotel->name}}", type: "{{$hotel->zone->name}}", icon: ""},
		@endforeach],

					getValue: "name",

					list: {
						match: {
							enabled: true
						}
					},

					template: {
						type: "description",
						fields: {
							description: "type"
						}
					}
				};

				$("#template-desc").easyAutocomplete(options);
				</script> --}}

									 {{--  <div class="form-group col-12 ">
									  	<label class="mb-0" for="exampleFormControlSelect1">Pasajeros</label>
									    <select class="form-control form-control-sm" id="tipo_viaje" name="num_adultos">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
									  </div>

									   <div class="form-group col-12 ">
				                        	<label class="mb-0" for="FechaTour">Llegada:</label>
				                        	<input name="llegada"  type="text" class="form-control form-control-sm datepicker" required>
				                    	</div>
				                    	<div class="form-group col-12 " id="fechaSalida">
				                        	<label class="mb-0" for="FechaTour">Salida:</label>
				                        	<input name="salida"   type="text" class="form-control form-control-sm datepicker">
				                    	</div>

				                    	<input type="hidden" name="num_ninos" value="0">
					                    <input type="hidden" name="fecha_tour" value="0">
					                    <input type="hidden" name="id" value="21">
					                    <input type="hidden" name="transportacion" value="1">

					                    
										
										<input type="submit" class="btn btn-primary btn-sm " name="transportacion" value="Cotizar transportacón">
									</form>
					  </div>
					  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					  	 <form action="{{ route('categoriaPost') }}" method="POST">
				                        {{ csrf_field() }}
									   <div class="form-group">
									    <label class="mb-0" for="exampleFormControlSelect1">Tipo de tour</label>
									    <select class="form-control form-control-sm" id="tipo_viaje" name="servicio">
											@foreach($categories as $categorie)
												<option value="{{ $categorie->url }}">{{ $categorie->name }}</option>
											@endforeach
										</select>
									  </div>

									  
										
										<input type="submit" class="btn btn-primary btn-sm btn-block" name="transportacion" value="Cotizar">
									</form>
					  </div>
					</div>

				  
				  </div>
				</div>
			</div> --}}

			{{-- z --}}
	{{-- 	</div>
	</div> --}}

			{{-- <div id="slides" style="margin-top: 87px;">
    <div class="slides-container">
      <img src="img/p1.png" alt="Cinelli">
      <img src="img/p3.png" width="1024" height="683" alt="Cinelli">
      <img src="img/p4.png" width="1024" height="685" alt="Affinity">
      <img src="img/p5.png" width="1024" height="685" alt="Affinity">
    </div>
  </div> --}}

		<section class="m-0">
{{-- 
			-webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75); --}}
{{-- <h1>HOLAAAAAAA</h1> --}}



<div>
	<div class=" mt-5" data-parallax="scroll" data-image-src="img/p2home.jpg">
				<div class="row d-flex justify-content-center">
						<div class="col-12 text-center titulo">
							<h1 class="mt-4">¡Vive increíbles aventuras con <span>CANCÚN DO IT!</span></h1>
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


			
			<div class="container mt-5">
				<div class="col-12 text-left titulo">
							<h2 style="font-weight: 300; font-size: 1.4em;">NUESTROS PAQUETES MAS POPULARES</h2>
				</div>
				<div class="col-md-12 d-lg-flex justify-content-start">
					<div style="background-color: #37B721; height: 2px; width: 100px;">
								
					</div>
				</div>
				


				<div class="row d-lg-flex justify-content-center mt-4">
						<div class="col-md-3 mb-4">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="{{ url('/transportacion') }}"><img class="card-img-top" src="img/A1.png" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Traslado Aeropuerto</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Desde $499 <span>usd</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">TRASLADO VIP redondo AEROPUERTO - CANCÚN</p>
							    <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a>
							  </div>
							</div>
						</div>
						<!-- <div class="col-md-3 mb-4">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="{{ url('autos') }}"><img class="card-img-top" src="img/C1.png" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Renta de autos</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Desde $550 <span>usd</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Renta carro entrega y devolucion en aeropuerto.</p>
							    <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#rentaDeAutos" style="border-radius: 20px;">Ver mas</a>
							  </div>
							</div>
						</div> -->

						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://shareasale.com/r.cfm?b=665419&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="img/tours/xcaret.jpg" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Xcaret</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">¡Precio especial!</p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Disfruta de Xcaret y Xplor a uno de los mejores precios.</p>
							    <a href="https://shareasale.com/r.cfm?b=665419&u=1892160&m=32794&urllink=&afftrack=" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Reservar</a>
							  </div>
							</div>
						</div>

						{{-- <div class="col-md-3 mb-4">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://www.cancundoit.com/cancun/yate-sea-ray-slx/informacion"><img class="card-img-top" src="img/B1.png" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px; height: 216px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Boat Ride Deluxe</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Desde $9,900 <span>usd</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Renta de bote por 6 horas .</p>
							    <a href="javascript:void(0)" data-toggle="modal" data-target="#boatRide" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Ver mas</a>
							  </div>
							</div>
						</div> --}}

						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://shareasale.com/r.cfm?b=1145339&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="img/tours/xcaret-xplor.jpg" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Xcaret - Xplor</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">¡Precio especial!</p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Disfruta de Xcaret y Xplor a uno de los mejores precios.</p>
							    <a href="https://shareasale.com/r.cfm?b=1145339&u=1892160&m=32794&urllink=&afftrack=" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Reservar</a>
							  </div>
							</div>
						</div>

						<div class="w-100">
							
						</div>

						{{-- <div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://shareasale.com/r.cfm?b=1145339&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="img/tours/xcaret-xplor.jpg" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Xcaret - Xplor</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Desde $3,191 <span>usd</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Disfruta de Xcaret y Xplor a uno de los mejores precios.</p>
							    <a href="https://shareasale.com/r.cfm?b=1145339&u=1892160&m=32794&urllink=&afftrack=" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Reservar</a>
							  </div>
							</div>
						</div> --}}
						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="{{route("categories",['categorie'=> 'sitios-arqueologicos'])}}"><img class="card-img-top" src="img/Pm1.png" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Tour Pueblos Magicos</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Desde $500 <span>usd</span></p> 
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Traslados Hotel-Chichen Itza - Camioneta de lujo 6 Pax a Chichen Itza y...</p>
							    <a href="javascript:void(0)" data-toggle="modal" data-target="#puebloMagicos" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Ver mas</a>
							  </div>
							</div>
						</div>

						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://shareasale.com/r.cfm?b=1238138&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="img/xavage.jpg" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px; height: 237px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">XAVAGE</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">¡Precio especial!</p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Desafía todos tus límites en Xavage, el nuevo parque de Grupo Xcaret.</p>
							    <a href="https://shareasale.com/r.cfm?b=1238138&u=1892160&m=32794&urllink=&afftrack=" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Reservar</a>
							  </div>
							</div>
						</div>

						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://www.cancundoit.com/cancun/capitan-hook-pollo-2x1/informacion"><img class="card-img-top" src="img/barco-capitan.jpg" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px; height: 237px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">CAPITAN HOOK POLLO 2x1</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Desde $1,330 <span>usd</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Disfruta de la mejor comida y bebida, abordo de un magnifico barco pirata.</p>
							    <a href="https://www.cancundoit.com/cancun/capitan-hook-pollo-2x1/informacion" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Reservar</a>
							  </div>
							</div>
						</div>




				</div>
			</div>

			<div class="modal fade" id="trasladosAeropuerto" tabindex="-1" role="dialog" aria-labelledby="trasladosAeropuertoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TRASLADO AEROPUERTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        TRASLADOS  TERRESTRE REDONDO O SENCILLOS  HOTEL - AEROPUERTO EN  CAMIONETAS  PRIVADAS CON CAPACIDAD DE DESDE 3 Y HASTA 12 PASAJEROS, CON POLIZAS DE RESPONSABILIDAD CIVIL Y DAÑOS A TERCEROS, CHOFERES CAPACITADOS QUIENES PRESTAN UN SERVICIO PERSONALIZADO.
        
      </div>
{{--       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>

								<!-- Modal -->
<div class="modal fade" id="rentaDeAutos" tabindex="-1" role="dialog" aria-labelledby="rentaDeAutosLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">RENT A CAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        RENTA CARRO PARA USO PARTICULAR, PRECIO INCLUYE POLIZA DE OBERTU AMPLIA, KILOMETRAJE LIBRE.
      </div>
{{--       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>

				<!-- Modal -->
<div class="modal fade" id="boatRide" tabindex="-1" role="dialog" aria-labelledby="boatRideLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BOAT RIDE DELUXE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        RENTA DE BOTES DE LUJO, POLIZAS DE RESPONSABILIDAD CIVIL, BEBIDAS INCLUIDAS, CAPITAN, MARINERO.
         
      </div>
{{--       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ruedayNAvega" tabindex="-1" role="dialog" aria-labelledby="ruedayNAvegaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rueda y Navega</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        RENTA DE CARRO Y RENTA DE LANCHA A ESCOGER, SEGUN DISPONIBILIDAD
        <p>Cotiza a nuestro correo: <a href="mailto:reservas@cancundoit.com">  reservas@cancundoit.com</a></p>
        <p> reserve por correo segun lo que necesite y le garantizamos mínimo un 15% de descuento de los costos individuales</p>
      </div>
{{--       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="puebloMagicos" tabindex="-1" role="dialog" aria-labelledby="puebloMagicosLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pueblos  Magicos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        TRASADOS HOTEL - CHICHEN ITZA -  CAMIONETA PRIVADA  A CHICHEN ITZA, VISITA PUEBLO MAGICOS DE VALLADOLIDA Y/O CENOTE EN EL QUE PUEDES NADAR; INCLUYE SEGURO DE RESPONSABILIDAD CIVIL EN EL TRASLADO.
        
      </div>
{{--       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="marYTierra" tabindex="-1" role="dialog" aria-labelledby="marYTierraLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Paquete Mar y Tierra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        PAQUETE INCLUYE TRASLADOS  TERRESTRE REDONDO HOTEL - AEROPUERTO, RENTA LANCHA 6 HRS Y TRASLADOS HOTEL MARINA - MARINA HOTEL.
        <p>Cotiza a nuestro correo: <a href="mailto:reservas@cancundoit.com">  reservas@cancundoit.com</a></p>
        <p> reserve por correo segunlo lo que necesite y le garantizamos mínimo un 15% de descuento de los costos individuales</p>
      </div>
{{--       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>

			<div class="pt-md-4" style="background-color: #f9f9f9;">
				<!-- Button trigger modal -->


												<!-- Modal -->

				{{-- <div class="container precentasion">
					<div class="row d-flex justify-content-center">
						<div class="col-12 text-center titulo">
							<h1>BIENVENIDO A <span>CANCÚN DO IT</span></h1>
						</div>
						<div class="col-md-5 d-lg-flex justify-content-center">
							<div style="background-color: #37B721; height: 2px; width: 100px;">
								
							</div>
						</div>
						<div class="col-8 mt-2">
							<p class="text-center">Vive increíbles aventuras en los parques más hermosos y explora impresionantes sitios arqueológicos de la cultura maya, con los mejores paquetes en Cancún, Playa del Carmen, Riviera Maya y Yucatán. Puedes elegir visitar dos, tres o cuatro parques o Tours con o sin transportación en diferentes días; ya sea que prefieras la opción sin transportación, o la comodidad de la transportación incluida, con servicios de primera clase desde la puerta de tu hotel, para que solo te preocupes por divertirte.</p>
							
						</div>
					</div> 
				</div> --}}
			</div>

			<div class="container mt-5">
				<div class="col-12 text-left titulo">
							<h2 style="font-weight: 300; font-size: 1.4em;">NUESTROS DESTINOS MAS POPULARES</h2>
				</div>
				<div class="col-md-12 d-lg-flex justify-content-start">
					<div style="background-color: #37B721; height: 2px; width: 100px;">
								
					</div>
				</div>


				<div class="row  mt-4 d-flex justify-content-center">
					<div class="col-md-6 row">
							<div class="col-md-12 row mb-3">
							<div id="card"> 
						  <div class="" style=""> 
						    <img style="width: 100%; border-radius: 8px; -webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);" src="img/Chichen.png" alt="Card image cap">
						  </div> 
						  {{-- <div class="back p-4 text-center" style="background-image: url('img/d6.png'); border-radius: 8px; min-width: 510px; max-width:510px; max-height: 225px; min-height: 225px; -webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);">
							<h3 style="text-transform: uppercase; font-size: 1.4em">Chichén Itzá</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
							<a href="#" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Ver mas</a>
						   
						  </div>  --}}
						</div>


						<script>
							$("#card").flip({
						  axis: 'y',
						  trigger: 'hover',
						  reverse: true,
						  speed:1000,
						});
						</script>
							</div>
						</div>

						<div class="col-md-3 row">
							<div class="col-md-12 row mb-3">
							<div id="card2" > 
						  <div class=""> 
						    <img style="width: 100%; border-radius: 8px; -webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);" src="img/playa-del-carmen.png" alt="Card image cap">
						    
						  </div> 
						 {{--  <div class="back p-4 text-center" style="background-image: url('img/d2.png'); min-width: 225px; max-width:225px; max-height: 225px; min-height: 225px; border-radius: 8px; -webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);">
							<h3 style="text-transform: uppercase; font-size: 1.4em">Playa del carmen</h3>
						    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
						  	<a href="#" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Ver mas</a>
						  </div>  --}}
						</div>


						<script>
							$("#card2").flip({
						  axis: 'y',
						  trigger: 'hover',
						  reverse: true,
						  speed:1000,
						});
						</script>
							</div>
						</div>

						<div class="col-md-3 row">
							<div class="col-md-12 row mb-3">
							<div id="card3" > 
						  <div class=""> 
						    <img style="width: 100%; border-radius: 8px; -webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);" src="img/Coba.png" alt="Card image cap">
						    
						  </div> 
						  {{-- <div class="back p-4 text-center" style="background-image: url('img/d3.png'); min-width: 225px; max-width:225px; max-height: 225px; min-height: 225px; border-radius: 8px; -webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);">
							<h3 style="text-transform: uppercase; font-size: 1.4em">Coba</h3>
						    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
						  	<a href="#" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Ver mas</a>
						  </div>  --}}
						</div>


						<script>
							$("#card3").flip({
						  axis: 'y',
						  trigger: 'hover',
						  reverse: true,
						  speed:1000,
						});
						</script>
							</div>
						</div>

						<div class="col-md-3 row">
							<div class="col-md-12 row mb-3">
							<div id="card4" > 
						  <div class=""> 
						    <img style="width: 100%; border-radius: 8px; -webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);" src="img/Tulum.png" alt="Card image cap">
						    
						  </div> 
						  {{-- <div class="back p-4 text-center" style="background-image: url('img/d4.png'); min-width: 225px; max-width:225px; max-height: 225px; min-height: 225px; border-radius: 8px; -webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);">
							<h3 style="text-transform: uppercase; font-size: 1.4em">Tulum</h3>
						    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
						    <a href="#" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Ver mas</a>
						  </div> --}} 
						</div>


						<script>
							$("#card4").flip({
						  axis: 'y',
						  trigger: 'hover',
						  reverse: true,
						  speed:1000,
						});
						</script>
							</div>
						</div>

						<div class="col-md-3 row">
							<div class="col-md-12 row mb-3">
							<div id="card5" > 
						  <div class=""> 
						    <img style="width: 100%; border-radius: 8px; -webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);" src="img/capitan.png" alt="Card image cap">
						    
						  </div> 
						  {{-- <div class="back p-4 text-center" style="background-image: url('img/d1.png'); min-width: 225px; max-width:225px; max-height: 225px; min-height: 225px; border-radius: 8px; -webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);">
							<h3 style="text-transform: uppercase; font-size: 1.4em">Capitan Hook</h3>
						    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
						    <a href="#" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Ver mas</a>
						  </div>  --}}
						</div>


						<script>
							$("#card5").flip({
						  axis: 'y',
						  trigger: 'hover',
						  reverse: true,
						  speed:1000,
						});
						</script>
							</div>
						</div>

						<div class="col-md-6 row">
							<div class="col-md-12 row mb-3">
							<div id="card6"> 
						  <div class=""> 
						    <img style="width: 100%; border-radius: 8px; -webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);" src="img/Xcaret.png" alt="Card image cap">
						  </div> 
						  {{-- <div class="back p-4 text-center" style="background-image: url('img/d7.png'); border-radius: 8px; -webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75); min-width: 510px; max-width:510px; max-height: 225px; min-height: 225px;">
						   <h3 style="text-transform: uppercase; font-size: 1.4em">Xcaret</h3>
						   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
						   <a href="#" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Ver mas</a>

						  </div> --}} 
						</div>


						<script>
							$("#card6").flip({
						  axis: 'y',
						  trigger: 'hover',
						  reverse: true,
						  speed:1000,
						});
						</script>
							</div>
						</div>

				</div>
			</div>

			{{-- <div class="parallax-window mt-4" data-parallax="scroll" data-image-src="img/p2home.jpg">
				<div class="row d-flex justify-content-center">
						<div class="col-12 text-center titulo">
							<h1 class="mt-4">¡Vive increíbles aventuras con <span>CANCÚN DO IT!</span></h1>
						</div>
						<div class="col-md-5 d-lg-flex justify-content-center">
							<div style="background-color: #37B721; height: 2px; width: 100px;">
								
							</div>
						</div>
						<div class="col-8 text-center mb-4">
							<p style="font-size: 1.3em;" class="mt-4">Déjanos sorprenderte con increíbles Tours en Cancún, Riviera Maya y Yucatán. Llévate a casa los recuerdos más inolvidables de unas maravillosas vacaciones en Cancún y Playa del Carmen, solo con los mejores paquetes de <b>CANCÚN DO IT</b></p>
						</div>
						
					</div>
			</div> --}}

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

if(isMobile.mobilecheck())
{
	location.href ="https://www.cancundoit.com/movil";
}

	</script>


@stop
