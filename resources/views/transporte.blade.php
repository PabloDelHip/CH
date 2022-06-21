@extends('layout')

@section('contenido')

<div id="barra-Categoria" class=" .ocultar-movil">
</div>
{{-- <div class="parallax-window" id="tamano-parallax" data-parallax="scroll" data-image-src="{{ url('/img/sitios-arqueologicos.jpg') }}">
</div> --}}
@include('includes.migajas', array('miVar' => 'Transportacion'))

<!-- Button trigger modal -->


<style type="text/css">
		.easy-autocomplete {
    	width: 100% !important;
	}
	</style>

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('ingresar-carrito') }}" method="POST">
				                        {{ csrf_field() }}
				                        <input type="hidden" name="id" value="21">
				                        
									   <div class="form-group">
									    <label class="mb-0" for="exampleFormControlSelect1">Tipo de servicio</label>
									    <select class="form-control form-control-sm" id="tipo_viaje" name="servicio">
											<option value="Viaje redondo">Viaje redondo</option>
											<option value="Sencillo - Aeropuerto al Hotel">Sencillo - Aeropuerto al Hotel</option>
											<option value="Sencillo - Hotel al Aeropuerto">Sencillo - Hotel al Aeropuerto</option>
										</select>
									  </div>

									  <div class="form-group">
									    <label class="mb-0" for="exampleFormControlSelect1">Tipo de servicio</label>
									    <div class="easy-autocomplete eac-description"><input id="template-desc" class="form-control form-control-sm" name="hotel" style="width: 100%;" placeholder="Ingresar hotel" autocomplete="off" required><div class="easy-autocomplete-container" id="eac-container-template-desc"><ul></ul></div></div>
									  </div>

									 					    <script type="text/javascript">

									 					    	$('.easy-autocomplete').removeAttr('style');
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
										
										<div class="col-12 col-md-4">
											<input type="submit" class="btn btn-primary btn-sm btn-block" name="transportacion" value="Cotizar transportacón">
										</div>
									</form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div> -->
{{-- MODAL --}}

<div class="contenedor-transporte">

	{{-- <div style="    position: absolute;
    z-index: 300;
    width: 100%;">
		<div class="container">
			<div class="row d-lg-flex align-items-center">
				<div class="col-4 mt-3">
					<div class="card">
					  <h5 class="card-header text-center" style="background-color: #064983; color: #fff;"><span style="font-weight: 600;">Traslados</span> <i class="fas fa-bus"></i></h5>
					  <div class="card-body">
					    <h5 class="card-title">Special title treatment</h5>
					    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="{{ url('/img/fondo_trans.png')}}" alt="First slide">
	    </div>
	  </div>
	</div>

	<div class="form-transportacion"> {{-- 176 --}}
		<div class="container">
			<div class="row d-lg-flex justify-content-center">
				<div class="col-12 col-md-9 mt-3">
					<div class="card" style="background-color: rgba(255, 255, 255, 0.8);">
					  <h5 class="card-header text-center" style="background-color: #064983; color: #fff;"><span style="font-weight: 600;">Traslados</span> <i class="fas fa-bus"></i></h5>
					  <div class="card-body">
					    <form class="row" action="{{ route('ingresar-carrito') }}" method="POST">
				                        {{ csrf_field() }}
									   <div class="form-group col-12 col-md-4">
									    <label class="mb-0" for="exampleFormControlSelect1">Tipo de servicio</label>
									    <select class="form-control form-control-sm" id="tipo_servicio" name="servicio">
											<option value="Viaje redondo">Viaje redondo</option>
											<option value="Sencillo - Aeropuerto al Hotel">Sencillo - Aeropuerto al Hotel</option>
											<option value="Sencillo - Hotel al Aeropuerto">Sencillo - Hotel al Aeropuerto</option>
										</select>
									  </div>

									   <div class="form-group col-12 col-md-4">
									    <label class="mb-0" for="exampleFormControlSelect1">Ubicación del hotel</label>
									    <select class="form-control form-control-sm" id="tipo_servicio" name="zone">
											
											@foreach ($zones as $zone)
												<option value="{{$zone->id}}">{{$zone->name}}</option>
											@endforeach
										</select>
									  </div>

									  <div class="form-group col-12 col-md-4">
									    <label class="mb-0" for="exampleFormControlSelect1">Hotel</label>
									    <div class="easy-autocomplete eac-description"><input id="template-desc" class="form-control form-control-sm" name="hotel" style="width: 100%;" placeholder="Ingresar hotel" autocomplete="off" required><div class="easy-autocomplete-container" id="eac-container-template-desc"><ul></ul></div></div>
									  </div>
					                    

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

									  <div class="form-group col-12 col-md-4">
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

									   <div class="form-group col-12 col-md-4">
				                        	<label class="mb-0" for="FechaTour">Llegada:</label>
				                        	<input name="llegada"  type="text" class="form-control form-control-sm datepicker" required>
				                    	</div>
				                    	<div class="form-group col-12 col-md-4" id="fechaSalida">
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container mt-5">
				<div class="row">
					<div class="col-md-5 col-12 text-left titulo">
							{{-- <h2 style="font-weight: 300; font-size: 1.4em;">TRANSPORTACIÓN</h2> --}}
							<h3 style="font-weight: bold;">Realizamos traslados en Cancún y Riviera Maya desde aeropuerto, tu hotel o destino particular.</h3>
							<p style="font-size: 1.2em;">En Transfer Caribbean Hollidays ofrecemos transportación a Cancún y la Riviera Maya en tours privados para los turistas. Nuestra prioridad es ofrecer un servicio de calidad y un trato excelente para que los visitantes se sientan como en casa.</p>
							<ul class="nav flex-column">
							  <li class="nav-item">
							  	<img src="{{ url('/img/money.png') }}"> Precios más económicos
							  </li>
							   <li class="nav-item">
							   		<img src="{{ url('/img/seguro.png') }}"> Facil de reservar
							  </li>
							   <li class="nav-item">
							   		<img src="{{ url('/img/Experiencia.png') }}"> Años de experiencia
							  </li>
							   <li class="nav-item">
							   		<img src="{{ url('/img/Bilingue.png') }}"> Hablamos tu idioma
							  </li>
							   <li class="nav-item">
							   		<img src="{{ url('/img/atencion-clientes.png') }}"> Servicio al cliente 24/7
							  </li>
							   <li class="nav-item">
							   		<img src="{{ url('/img/Seguridad.png') }}"> Servicio 100% privado
							  </li>
							</ul>
					</div>
					<div class="col-md-7 col-12 d-lg-flex justify-content-start">
						<img src="{{ url('/img/van-logo.png')}}" class="img-fluid" alt="vans cancun doit">
					</div>
				</div>
				<div class="row d-lg-flex justify-content-center mt-4">
<h3 style="font-weight: bold;">Cualquiera de estas camionetas puede ir por usted <span style="color: #a7a7a7; font-size: 15px;">(bajo disponibilidad)</span></h3>
{{-- @if(isset($datos)) --}}
@foreach($vans as $van)
						<div class="col-md-4 mb-4">
                                                        
							<div class="card contenedor-servicio" style="border: none; ">
							  <img src="{{ url('/img')}}/{{ $van->image }}" class="img-fluid" alt="{{ url('/img')}}/{{ $van->image }}">
                                                          
                                                          
							  <div class="card-body text-center" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0">{{ $van->model }}</h5>
							    {{-- <p class="contenedor-servicio-precio m-0" style="font-size: 1.3em;">${{ $price }} <span>mxn</span></p> --}}
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    
							    
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Capacidad: {{ $van->capacity }} pasajeros incluido equipaje.</p>

							   {{--  @if(isset($datos))
									<form action="{{ route('ingresar-carrito') }}" method="POST">
				                        {!! csrf_field() !!}

					                    <input type="hidden" name="num_adultos" value="{{ $datos['num_adultos'] }}">
					                    <input type="hidden" name="llegada" value="{{ $datos['llegada'] }}">
					                    <input type="hidden" name="salida" value="{{ $datos['salida'] }}">
					                    <input type="hidden" name="hotel" value="{{ $datos['hotel'] }}">
					                    <input type="hidden" name="num_ninos" value="0">
					                    <input type="hidden" name="fecha_tour" value="0">
					                    <input type="hidden" name="id" value="21">
					                    <input type="hidden" name="transportacion" value="1">
					                    <input type="hidden" name="servicio" value="{{ $tipo_servicio }}">
					                    <button type="submit" class="btn btn-block mt-3 reservando">Reservar</button>
					                    <style>
					                    	.reservando
					                    	{
					                    		transition: all .5s ease-out;
					                    	}
					                    	.reservando:hover
					                    	{
												background-color: #007BFF;
												color: #fff;
					                    	}
					                    </style>
					                </form>
							    @else
									<button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#exampleModal">
 Reservar
</button>
									<!-- <a href="#" class="btn btn-primary btn-block mt-3">Reservar</a> -->
							
							    @endif --}}
								
							  </div>
                                                          
							</div>
                                                       
						</div>
@endforeach

				</div>
			</div>

@stop