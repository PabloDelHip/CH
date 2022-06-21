<?php use App\Http\Controllers\Sitio; ?>
@extends('en.layout')

@section('contenido')

<div style="padding: 30px 0px; background: url(img/fodon_cancundoit.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
	<div class="container">
		<div class="row" style="margin-top: 96px;">
			<div class="col-5">
				<div id="liquidBoxContainer"></div>
				
				

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
				      <img class="d-block w-100" src="img/slider_web_cancundoit_fragata.png" alt="First slide">
				      <div class="carousel-caption d-none d-md-block">
					    <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa el tour fragata, me das mas información" class="btn-primary" style="text-decoration: none; padding: 8px 20px; text-decoration: none; border-radius: 7px;" target="_blank">Reservar >></a>
					  </div>
				    </div>

				    <div class="carousel-item">
				      <img class="d-block w-100" src="img/slider_web_cancundoit_ventura.png" alt="First slide">
				      <div class="carousel-caption d-none d-md-block">
					    <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa ventura park, me das mas información" class="btn-primary" style="text-decoration: none; padding: 8px 20px; text-decoration: none; border-radius: 7px;" target="_blank">Reservar >></a>
					  </div>
				    </div>

				  	<div class="carousel-item ">
				      <img class="d-block w-100" src="img/slider_delfines.png" alt="cuatro slide">
				      <div class="carousel-caption d-none d-md-block">
					    <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa el tour de Delfines, me das mas información" target="_blank" class="btn-primary" style="text-decoration: none; padding: 8px 20px; text-decoration: none; border-radius: 7px;">Reservar >></a>
					  </div>
				    </div>
				    
				    <div class="carousel-item">
				      <img class="d-block w-100" src="img/slider_3.png" alt="Third slide">
				      <div class="carousel-caption d-none d-md-block">
					    <a href="http://www.ofertadeviajesultimahora.com/?af=AF-TWVX" class="btn-primary" target="_blank" style="text-decoration: none; padding: 8px 20px; text-decoration: none; border-radius: 7px;">Reservar >></a>
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
			</div>	
		</div>
	</div>
</div>

<div class="container">
	<div class="row d-flex justify-content-center" style=" padding: 0 11px 0px 15px;">

			<div class="col-md-2 col-4" style="    padding: 50px 0 0 0;"><img style=" width: 100%;" src="img/PayPal.png" alt="Card image cap"></div>
						
			<div class="col-6 mt-3 text-center" style="background-color: #F6F6F6; border-radius: 6px; padding: 10px;">
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

				<div class="col-md-2 col-4" style="    padding: 50px 0 0 0;"><img style=" width: 100%;" src="img/logo-sitio-seguro.png" alt="Card image cap"></div>
		</div>
</div>

<div class="container mt-5">
				<div class="row d-lg-flex justify-content-center mt-4">
						<div class="col-md-4 mb-4">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://www.cancundoit.com/experiencias-xcaret/categoria"><img class="card-img-top" src="img/xcaret_web.png" alt="Card image cap"></a>
							 <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    
							    <a href="https://www.cancundoit.com/experiencias-xcaret/categoria" class="btn btn-success btn-sm mt-3 btn-block">Ver mas</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a> --}}
							  </div>
							</div>
						</div>

						<div class="col-md-4 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="{{ url('/transportacion') }}"><img class="card-img-top" src="img/transportacion_web.png" alt="Card image cap"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    
							    <a href="{{ url('/transportacion') }}" class="btn btn-success btn-sm mt-3 btn-block">Ver mas</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a> --}}
							  </div>
							</div>
							
						</div>

						<div class="col-md-4 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, me das mas información" target="_blank"><img class="card-img-top" src="img/hotel_avios_web.png" alt="Card image cap"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    
							    <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, me das mas información" class="btn btn-success btn-sm mt-3 btn-block">Ver mas</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a> --}}
							  </div>
							</div>
						</div>

						<div class="w-100">
							
						</div>
				</div>
			</div>


		<section class="m-0">

			<div class="mt-3" style="background: url(img/p2home.jpg);">
				<div class="row d-flex justify-content-center">
						<div class="col-12 text-center titulo">
							<h1 class="mt-4">¡Live incredible adventures with <span>CANCÚN DO IT!</span></h1>
						</div>
						<div class="col-md-5 d-lg-flex justify-content-center">
							<div style="background-color: #37B721; height: 2px; width: 100px;">
								
							</div>
						</div>
						<div class="col-8 text-center mb-4">
							<p style="font-size: 1.3em;" class="mt-4">
Let us surprise you with incredible Tours in Cancun, Riviera Maya and Yucatan. Take home the most unforgettable memories of a wonderful vacation in Cancun and Playa del Carmen, only with the best <b>CANCÚN DO IT</b> packages</p>
						</div>
						
					</div>
			</div>
{{-- 
			-webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75); --}}
			{{-- <div style="background: url(img/p2home.jpg);" class="mt-5">
				<div class="row d-flex justify-content-center">
						<div class="col-12 text-center titulo">
							<h1 class="mt-4">¡Live incredible adventures with <span>CANCÚN DO IT!</span></h1>
						</div>
						<div class="col-md-5 d-lg-flex justify-content-center">
							<div style="background-color: #37B721; height: 2px; width: 100px;">
								
							</div>
						</div>
						<div class="col-8 text-center mb-4">
							<p style="font-size: 1.3em;" class="mt-4">
Let us surprise you with incredible Tours in Cancun, Riviera Maya and Yucatan. Take home the most unforgettable memories of a wonderful vacation in Cancun and Playa del Carmen, only with the best <b>CANCÚN DO IT</b> packages</p>
						</div>
						
					</div>
			</div> --}}
			<div class="container mt-5">
				<div class="col-12 text-left titulo">
							<h2 style="font-weight: 300; font-size: 1.4em;">OUR MOST POPULAR PACKAGES</h2>
				</div>
				<div class="col-md-12 d-lg-flex justify-content-start">
					<div style="background-color: #37B721; height: 2px; width: 100px;">
								
					</div>
				</div>
				


				<div class="row d-lg-flex justify-content-center mt-4">
						<div class="col-md-3 mb-4">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="javascript:void(0)"><img class="card-img-top" src="img/A1.png" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Airport transportation</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">from $499 <span>mxn</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Transfers Hotel-Airport</p>
							    <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">See more</a>
							  </div>
							</div>
						</div>

						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://shareasale.com/r.cfm?b=665419&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="img/tours/xcaret.jpg" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Xcaret</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Desde $1,799 <span>mxn</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Enjoy Xcaret and Xplor at one of the best prices..</p>
							    <a href="https://shareasale.com/r.cfm?b=665419&u=1892160&m=32794&urllink=&afftrack=" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Reservar</a>
							  </div>
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://shareasale.com/r.cfm?b=1145340&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="img/tours/xcaret-xplor.jpg" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Xcaret - Xplor</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">from $3,191 <span>mxn</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Enjoy Xcaret and Xplor at one of the best prices.</p>
							    <a href="https://shareasale.com/r.cfm?b=1145340&u=1892160&m=32794&urllink=&afftrack=" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">See more</a>
							  </div>
							</div>
						</div>

						{{-- <div class="col-md-3 mb-4">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="javascript:void(0)"><img class="card-img-top" src="img/B1.png" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px; height: 216px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Boat Ride Deluxe</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">from $9,900 <span>mxn</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Boat rent for 6 hours.</p>
							    <a href="javascript:void(0)" data-toggle="modal" data-target="#boatRide" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">See more</a>
							  </div>
							</div>
						</div> --}}

						<div class="w-100">
							
						</div>

						{{-- <div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://shareasale.com/r.cfm?b=1145340&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="img/tours/xcaret-xplor.jpg" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Xcaret - Xplor</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">from $3,191 <span>mxn</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Enjoy Xcaret and Xplor at one of the best prices.</p>
							    <a href="https://shareasale.com/r.cfm?b=1145340&u=1892160&m=32794&urllink=&afftrack=" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">See more</a>
							  </div>
							</div>
						</div> --}}
						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://shareasale.com/r.cfm?b=1238138&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="img/xavage.jpg" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px; height: 237px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">XAVAGE</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Desde $2,106 <span>mxn</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Challenge all your limits in Xavage, the new park of Grupo Xcaret...</p>
							    <a href="https://shareasale.com/r.cfm?b=1238138&u=1892160&m=32794&urllink=&afftrack=" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">See more</a>
							  </div>
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="javascript:void(0)"><img class="card-img-top" src="img/Pm1.png" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Magic Towns Tour</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">from $500 <span>mxn</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Transfers Hotel-Chichen Itza - 6 Pax luxury van to Chichen Itza and...</p>
							    <a href="javascript:void(0)" data-toggle="modal" data-target="#puebloMagicos" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">See more</a>
							  </div>
							</div>
						</div>

						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://www.cancundoit.com/cancun/capitan-hook-pollo-2x1/informacion"><img class="card-img-top" src="img/barco-capitan.jpg" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px; height: 237px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">CAPTAIN HOOK CHICKEN 2x1</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">from $1,330 <span>mxn</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Enjoy the best food and drink, aboard a magnificent pirate ship.</p>
							    <a href="https://www.cancundoit.com/cancun/capitan-hook-pollo-2x1/informacion" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Reserve</a>
							  </div>
							</div>
						</div>




				</div>
			</div>

			<div class="pt-md-4" style="background-color: #f9f9f9;">
				<!-- Button trigger modal -->


												<!-- Modal -->
<div class="modal fade" id="trasladosAeropuerto" tabindex="-1" role="dialog" aria-labelledby="trasladosAeropuertoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AIRPORT TRANSPORTATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ROUND LAND TRANSFERS OR SIMPLE HOTELS - AIRPORT IN PRIVATE TRUCKS WITH CAPACITY FROM 3 AND UP TO 12 PASSENGERS, WITH CIVIL RESPONSIBILITY POLICIES AND DAMAGES TO THIRD PARTIES, TRAINED CHOFERS WHO PROVIDE A PERSONALIZED SERVICE.
        
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
        CAR RENTAL FOR PARTICULAR USE, PRICE INCLUDES BROAD COVERAGE POLICY, FREE MILEAGE.
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
        RENT OF LUXURY BOATS, CIVIL RESPONSIBILITY POLICIES, INCLUDED BEVERAGES, CAPTAIN, SAILOR.
         
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
        <h5 class="modal-title" id="exampleModalLabel">Wheel and Navigate</h5>
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
        <h5 class="modal-title" id="exampleModalLabel">Magic towns</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        TRANSFERS HOTEL - CHICHEN ITZA - PRIVATE TRUCK TO CHICHEN ITZA, VISIT PEOPLE MAGICOS DE VALLADOLIDA AND / OR CENOTE WHERE YOU CAN SWIM; INCLUDES CIVIL LIABILITY INSURANCE ON TRANSFER.
        
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
				{{-- <div class="container precentasion">
					<div class="row d-flex justify-content-center">
						<div class="col-12 text-center titulo">
							<h1>WELCOME TO <span>CANCÚN DO IT</span></h1>
						</div>
						<div class="col-md-5 d-lg-flex justify-content-center">
							<div style="background-color: #37B721; height: 2px; width: 100px;">
								
							</div>
						</div>
						<div class="col-8 mt-2">
							<p class="text-center">Live incredible adventures in the most beautiful parks and explore impressive archaeological sites of the Mayan culture, with the best packages in Cancun, Playa del Carmen, Riviera Maya and Yucatan. You can choose to visit two, three or four parks or Tours with or without transportation on different days; whether you prefer the option without transportation, or the convenience of transportation included, with first class services from the door of your hotel, so you only worry about having fun.</p>
							
						</div>
					</div> 
				</div> --}}
			</div>

			<div class="container mt-5">
				<div class="col-12 text-left titulo">
							<h2 style="font-weight: 300; font-size: 1.4em;">OUR MOST POPULAR DESTINATIONS</h2>
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
							<a href="#" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">See more</a>
						   
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
						  	<a href="#" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">See more</a>
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
						  	<a href="#" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">See more</a>
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
						    <a href="#" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">See more</a>
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
						    <a href="#" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">See more</a>
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
						   <a href="#" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">See more</a>

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

			

			<div class="container mt-5">
				<div class="col-12 text-left titulo">
					<h2 style="font-weight: 300; font-size: 1.4em;">OURS CONTRIBUTORS</h2>
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


@stop
