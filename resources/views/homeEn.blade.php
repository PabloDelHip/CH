<?php use App\Http\Controllers\Sitio; ?>
@extends('layoutEn')

@section('contenido')

	<div class="mt-5 contenedor-motor">
		<div class="container" style="height: 100vh;">
			<div class="col-md-4 mt-5">
				<div class="card motor-busqueda">
				  {{-- <div class="card-header text-center">
				    <p class="h5 m-0"><b>Reserva tu transporte</b></p>
				  </div> --}}
				  <div class="card-body">

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
					  	 <form action="{{ route('transportacion') }}" method="POST">
				                        {{ csrf_field() }}
									   <div class="form-group">
									    <label class="mb-0" for="exampleFormControlSelect1">Tipo de servicio</label>
									    <select class="form-control form-control-sm" id="tipo_viaje" name="servicio">
											<option value="Viaje redondo">Viaje redondo</option>
											<option value="Sencillo - Aeropuerto al Hotel">Sencillo - Aeropuerto al Hotel</option>
											<option value="Sencillo - Hotel al Aeropuerto">Sencillo - Hotel al Aeropuerto</option>
										</select>
									  </div>

									  <div class="form-group">
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
				</script>

									  <div class="form-group">
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

									   <div class="form-group">
				                        	<label class="mb-0" for="FechaTour">Llegada:</label>
				                        	<input name="llegada"  type="text" class="form-control form-control-sm datepicker" required>
				                    	</div>
				                    	<div class="form-group">
				                        	<label class="mb-0" for="FechaTour">Salida:</label>
				                        	<input name="salida"  type="text" class="form-control form-control-sm datepicker" required>
				                    	</div>
										
										<input type="submit" class="btn btn-primary btn-sm btn-block" name="transportacion" value="Cotizar transportacón">
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
			</div>
		</div>
	</div>

			<div id="slides" style="margin-top: 87px;">
    <div class="slides-container">
      <img src="img/p1.png" alt="Cinelli">
      <img src="img/p2.png" width="1024" height="682" alt="Surly">
      <img src="img/p3.png" width="1024" height="683" alt="Cinelli">
      <img src="img/p4.png" width="1024" height="685" alt="Affinity">
      <img src="img/p5.png" width="1024" height="685" alt="Affinity">
    </div>
  </div>

		<section class="m-0">
{{-- 
			-webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75); --}}
			
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
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Desde $1000 <span>mxn</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Traslados Terrerestre Redondo Hotel-Aeropuerto</p>
							    <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a>
							  </div>
							</div>
						</div>
						<div class="col-md-3 mb-4">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="{{ url('autos') }}"><img class="card-img-top" src="img/C1.png" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Renta de autos</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Desde $550 <span>mxn</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Renta carro entrega y devolucion en aeropuerto.</p>
							    <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#rentaDeAutos" style="border-radius: 20px;">Ver mas</a>
							  </div>
							</div>
						</div>

						<div class="col-md-3 mb-4">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="javascript:void(0)"><img class="card-img-top" src="img/B1.png" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px; height: 216px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Boat Ride Deluxe</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Desde $9,900 <span>mxn</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Renta de 6 horas .</p>
							    <a href="javascript:void(0)" data-toggle="modal" data-target="#boatRide" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Ver mas</a>
							  </div>
							</div>
						</div>

						<div class="w-100">
							
						</div>

						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://shareasale.com/r.cfm?b=1145340&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="img/tours/xcaret-xplor.jpg" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Xcaret - Xplor</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Desde $3,191 <span>mxn</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Disfruta de Xcaret y Xplor a uno de los mejores precios.</p>
							    <a href="https://shareasale.com/r.cfm?b=1145340&u=1892160&m=32794&urllink=&afftrack=" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Reservar</a>
							  </div>
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="javascript:void(0)"><img class="card-img-top" src="img/Pm1.png" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">Tour Pueblos Magicos</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Desde $500 <span>mxn</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Traslados Hotel-Chichen Itza - Camioneta de lujo 6 Pax a Chichen Itza y...</p>
							    <a href="javascript:void(0)" data-toggle="modal" data-target="#puebloMagicos" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Ver mas</a>
							  </div>
							</div>
						</div>

						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://www.cancundoit.com/cancun/capitan-hook-pollo-2x1/informacion"><img class="card-img-top" src="img/barco-capitan.jpg" alt="Card image cap"></a>
							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px; height: 237px;">
							    <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">CAPITAN HOOK POLLO 2x1</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Desde $1,330 <span>mxn</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Disfruta de la mejor comida y bebida, abordo de un magnifico barco pirata.</p>
							    <a href="https://www.cancundoit.com/cancun/capitan-hook-pollo-2x1/informacion" class="btn btn-primary btn-sm  mt-3" style="border-radius: 20px;">Reservar</a>
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
				<div class="container precentasion">
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
					</div> {{-- entrada --}}
				</div>
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

			<div class="parallax-window mt-4" data-parallax="scroll" data-image-src="img/p2home.jpg">
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


@stop
