@extends('layout')

@section('contenido')

<div id="barra-Categoria" class=" .ocultar-movil">
</div>
<div class="parallax-window" id="tamano-parallax" data-parallax="scroll" data-image-src="{{ url('/img/sitios-arqueologicos.jpg') }}">
</div>
@include('includes.migajas', array('miVar' => 'Renta de veleros'))

<!-- Button trigger modal -->


<style type="text/css">
		.easy-autocomplete {
    	width: 100% !important;
	}
	</style>



<div class="container mt-5">
				<div class="col-12 text-left titulo">
							<h2 style="font-weight: 300; font-size: 1.4em;">RENTA DE VELEROS</h2>
				</div>
				<div class="col-md-12 d-lg-flex justify-content-start">
					<div style="background-color: #37B721; height: 2px;">
								
					</div>
				</div>

	<div class="row d-flex justify-content-center" style=" padding: 0 11px 0px 15px;">
					
			<div class="col-md-6 col-12">
				<div class="col-md-12  mt-3" style="background-color: #F6F6F6; border-radius: 6px;">
					
				<b>Reserva por telefono o por correo y resibe un precio especial</b>
				<ul>
					<li><b>EMAIL</b> reservas@caribbeanhollidays.com</li>
					<li><b>OFICINA</b> (998) 241 5804</li>
					<li><b>WHATSAPP</b> (998) 241 5804</li>
					<li><b>DIRECCIÓN</b> Sm 76 Mza 11 Lote 12</li>
				</ul>
			</div>
			</div>

			<div class="col-md-6 col-12 p-3 mb-3" style="background-color: #f9f9f9;">
						<div class="col-12 text-center titulo mb-2">
							<h2 style="font-weight: 300; font-size: 1.4em;"><b>Contactate con nosotros</b></h2>
						</div>
						<form action="{{route("nosotros-form")}}" method="POST">
							{{csrf_field()}}
							<div class="form-group">
						    	<label for="exampleInputEmail1">Nombre</label>
						    	<input type="text" class="form-control" placeholder="Nombre" name="nombre">
						  	</div>
						  	<div class="form-group">
						    	<label for="exampleInputEmail1">Correo</label>
						    	<input type="email" class="form-control" placeholder="Correo" name="correo">
						  	</div>
						  	<div class="form-group">
						    	<label for="exampleInputEmail1">Asunto</label>
						    	<input type="text" class="form-control" placeholder="Asunto" name="asunto">
							  </div>
							  
							<div class="form-group">
								<label class="mb-0" for="exampleFormControlSelect1">Velero</label>
							  <select class="form-control form-control-sm" id="tipo_viaje" name="num_adultos">
								  <option value="Zafiro">Zafiro</option>
								  <option value="Good Karma">Good Karma</option>
								  <option value="Xanadú">Xanadú</option>
							  </select>
							</div>

						  	<div class="form-group">
								<label for="exampleFormControlTextarea1">Motivo de contacto o duda</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motivo"></textarea>
							</div>						  
						  	<button type="submit" class="btn btn-primary">Enviar mensaje</button>
						</form>
					</div>	
	</div>
				<div class="row d-lg-flex justify-content-center mt-4">


@foreach($vans as $van)

<!-- Modal -->
<div class="modal fade" id="{{ $van->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $van->model }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('ingresar-carrito') }}" method="POST">
				                        {{ csrf_field() }}
				                      <input type="hidden" name="id" value="21">
									  	<input type="hidden" name="servicio" value="yate">
									  	<input type="hidden" name="price" value="{{ $van->price_car }}">
									 	<input type="hidden" name="image" value="{{ $van->image }}">
									 	<input type="hidden" name="name_yate" value="{{ $van->model }}">
									 	<input type="hidden" name="hotel" value="">
									 	{{--   <div class="form-group">
									    <label class="mb-0" for="exampleFormControlSelect1">Hotel</label>
									    <div class="easy-autocomplete eac-description"><input class="form-control form-control-sm template-desc" name="hotel" style="width: 100%;" placeholder="Ingresar hotel" autocomplete="off" required><div class="easy-autocomplete-container" id="eac-container-template-desc"><ul></ul></div></div>
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

				$(".template-desc").easyAutocomplete(options);
				</script> --}}

				
									@if($van->id == 24)
										
										<div class="form-group">
									  	<label class="mb-0" for="exampleFormControlSelect1">Horas de servicio</label>
									    <select class="form-control form-control-sm" id="tipo_viaje" name="num_adultos">
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

									@else
									  <div class="form-group">
									  	<label class="mb-0" for="exampleFormControlSelect1">Horas de servicio</label>
									    <select class="form-control form-control-sm" id="tipo_viaje" name="num_adultos">
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
									  </div>
									@endif

									   <div class="form-group">
				                        	<label class="mb-0" for="FechaTour">Fecha de servicio:</label>
				                        	<input name="llegada"  type="text" class="form-control form-control-sm datepicker" required>
				                    	</div>
				                    	<div class="form-group" style="display: none;">
				                        	<label class="mb-0" for="FechaTour">Salida:</label>
				                        	<input name="salida"  type="text" class="form-control form-control-sm datepicker">
				                    	</div>
										
										{{-- <input type="submit" class="btn btn-primary btn-sm btn-block" name="transportacion" value="Reservar"> --}}
									</form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
						<div class="col-md-4 mb-4">
                                                        
							<div class="card contenedor-servicio" style="border: none; ">
							  <img src="{{ url('/img')}}/{{ $van->image }}" class="img-fluid" alt="{{ url('/img')}}/{{ $van->image }}">
                                                          
                                                          
							  <div class="card-body text-center" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0">{{ $van->model }}</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-size: 1.3em;">Precio especial</p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    
							    
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Capacidad: {{ $van->capacity }} pasajeros.</p>

							    @if(isset($datos))
									<form action="{{ route('ingresar-carrito') }}" method="POST">
				                        {!! csrf_field() !!}

					                    <input type="hidden" name="num_adultos" value="{{ $datos['num_adultos'] }}">
					                    <input type="hidden" name="llegada" value="{{ $datos['llegada'] }}">
					                    <input type="hidden" name="salida" value="{{ $datos['salida'] }}">
					                    <input type="hidden" name="hotel" value="{{ $datos['hotel'] }}">
					                    <input type="hidden" name="num_ninos" value="0">
					                    <input type="hidden" name="fecha_tour" value="0">
					                    <input type="hidden" name="id" value="8">
					                    <input type="hidden" name="transportacion" value="1">
					                   {{--  <button type="submit" class="btn btn-block mt-3 reservando">Reservar</button> --}}
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
{{-- 									<button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#{{ $van->id }}">
 Reservar
</button> --}}
									<!-- <a href="#" class="btn btn-primary btn-block mt-3">Reservar</a> -->
							
							    @endif
								
							  </div>
                                                          
							</div>
                                                       
						</div>
@endforeach
				</div>
			</div>

@stop