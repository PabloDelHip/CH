@extends('layout')

@section('contenido')

<div id="barra-Categoria" class=" .ocultar-movil">
</div>
<div class="parallax-window" id="tamano-parallax" data-parallax="scroll" data-image-src="{{ url('/img/sitios-arqueologicos.jpg') }}">
</div>
@include('includes.migajas', array('miVar' => 'Renta de autos'))

<!-- Button trigger modal -->


<style type="text/css">
		.easy-autocomplete {
    	width: 100% !important;
	}
	</style>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
										
										<input type="submit" class="btn btn-primary btn-sm btn-block" name="transportacion" value="Cotizar transportacón">
									</form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
				<div class="col-12 text-left titulo">
							<h2 style="font-weight: 300; font-size: 1.4em;">RENTA DE AUTOS</h2>
				</div>
				<div class="col-md-12 d-lg-flex justify-content-start">
					<div style="background-color: #37B721; height: 2px;">
								
					</div>
				</div>
				<div class="row d-lg-flex justify-content-center mt-4">


@foreach($vans as $van)
						<div class="col-md-4 mb-4">
                                                        
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="#"><img src="{{ url('/img')}}/{{ $van->image }}" class="img-fluid" alt="{{ url('/img')}}/{{ $van->image }}"></a>
                                                          
                                                 
							  <div class="card-body text-center" style="border:1px solid #ddd; border-radius: 3px;">
							    <h5 class="card-title m-0">{{ $van->model }}</h5>
							    <p class="contenedor-servicio-precio m-0" style="font-size: 1.3em;">$ @if($van->price_car!=0){{ $van->price_car}}@else{{ $price }}@endif <span>usd</span></p>
							    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
							    
							   
							    <p class="card-text m-0" style="font-size: .9em; color: #939393;">Capacidad: {{ $van->capacity }} pasajeros incluido equipaje.</p>

							    @if(Request::path()=='autos')
								     <form action="{{ route('ingresar-carrito') }}" method="POST">
				                        {!! csrf_field() !!}
				                        <input type="hidden" name="name_car" value="{{ $van->model }}">
				                        <input type="hidden" name="image" value="{{ $van->image }}">
								     	<input type="hidden" name="num_adultos" value="0">
					                    <input type="hidden" name="hotel" value="sin hotel">
					                    <input type="hidden" name="num_ninos" value="0">
					                    <input type="hidden" name="fecha_tour" value="0">
					                    <input type="hidden" name="id" value="21">
					                    <input type="hidden" name="transportacion" value="2">
					                    <input type="hidden" name="price_car" value="{{ $van->price_car}}">
								     	<div class="form-group ">
					                        	<label class="mb-0" for="FechaTour">Llegada:</label>
					                        	<input name="llegada"  type="text" class="form-control form-control-sm datepicker" readonly="readonly" required>
					                    	</div>
					                    	<div class="form-group">
					                        	<label class="mb-0" for="FechaTour">Salida:</label>
					                        	<input name="salida"  type="text" class="form-control form-control-sm datepicker" readonly="readonly" required>
					                </div>
					        		<input type="submit" value="Reservar" name="auto" class="btn btn-primary mt-2">
								     </form>

					        	@endif

							    

							    @if(isset($datos))
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
							@elseif(Request::path()!='autos' || isset($datos))
									<button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#exampleModal">
 Reservar
</button>
									<!-- <a href="#" class="btn btn-primary btn-block mt-3">Reservar</a> -->
							
							    @endif
								
							  </div>
                                                          
							</div>
                                                       
						</div>
@endforeach
				</div>
			</div>

@stop