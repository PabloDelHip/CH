<?php use App\Http\Controllers\Sitio; ?>
@extends('layout')

@section('contenido')

<div style="padding: 0px 0px; background: url(img/fondo_hotel.png) no-repeat center; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
	<div class="container">
		<div class="row" style="margin-top: 0px;">
			<div class="col-12 col-md-5" style="margin-top: 10px;">
				<div class="col-4">
					<span style="background-color: #00AB35; color: #fff; border-radius: 8px 8px 0px 0px; padding: 8px 12px;">Hotel + Avión</span>
				</div>
				<div class="col-12" style="background-color: #f9f9f9; border: solid 1px #00AB35;">
					<div class="col-12">
	                  @if(Session::get('message'))
	                    <div class="alert alert-danger">
	                      {{ Session::get('message')  }}
	                    </div>
	                  @endif
	                </div>
					<form action="{{route("nosotros-form")}}" method="POST">
						{{csrf_field()}}
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4" style="margin:0;"><b>Nombre</b></label>
					      <input type="text" class="form-control form-control-sm" name="nombre">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPassword4" style="margin:0;">Telefono</label>
					      <input type="text" class="form-control form-control-sm" name="telefono">
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4" style="margin:0;">Origen</label>
					      <input type="text" class="form-control form-control-sm" name="origen">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPassword4" style="margin:0;">Destino</label>
					      <input type="text" class="form-control form-control-sm" name="destino">
					    </div>
					  </div>
					   
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <input name="fecha_llegada"  type="text" class="form-control datepicker" placeholder="Fecha del Llegada" required>
					    </div>
					    <div class="form-group col-md-6">
					      <input name="fecha_salida"  type="text" class="form-control datepicker" placeholder="Fecha del Llegada" required>
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4" style="margin:0;">Num. Habitaciones</label>
					      <input type="number" class="form-control form-control-sm" name="num_habitaciones">
					    </div>
					    <div class="form-group col-md-6 row">
					      <div class="col-6">
					      	<label for="inputPassword4" style="margin:0;">Adultos</label>
					      	<input type="number" class="form-control form-control-sm"  name="num_adultos">
					      </div>
					      <div class="col-6">
					      	<label for="inputPassword4" style="margin:0;">Niños</label>
					      	<input type="number" class="form-control form-control-sm"  name="num_ninos">
					      </div>
					    </div>
					  </div>

					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4" style="margin:0;">Email</label>
					      <input type="email" name="email" class="form-control form-control-sm">
					    </div>
					    <div class="form-group col-md-6">
					      <button type="submit" class="btn btn-primary btn-block" style="margin-top: 21px;">Cotizar</button>
					    </div>
					  </div>

					  
					</form>
				</div>
			</div>	
			<div class="col-7 text-right ocultar-movil">
				<img src="img/logo_hotel.png">
			</div>	
		</div>
	</div>
</div>

{{-- INICIO TIPOS DE PAGO --}}

		<section class="m-0">

			<div class="container mt-5 mb-5" style="border-bottom: solid 2px #000;">
				<div class="row d-lg-flex justify-content-center mt-4">
					<div class="col-12 text-center">
						<h1 class="mt-4" style="color: #004384;">¡Nuestras Mejores <span>Ofertas!</span> Hotel + Avión</h1>
					</div>
						<div class="col-md-3 mb-4">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Holbox, me das mas información"><img class="card-img-top" src="img/holbox_destinos_255x240.png" alt="Card image cap" style="height: 240px;"></a>
							 <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							 	<h3>Holbox</h3>
							    
							    <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Holbox, me das mas información" class="btn btn-success btn-sm mt-3 btn-block">Ver mas</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a> --}}
							  </div>
							</div>
						</div>

						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Isla Mujeres, me das mas información"><img class="card-img-top" src="img/islamujeres_destinos_255x240.png" alt="Card image cap" style="height: 240px;"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h3>Isla Mujeres</h3>
							    <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Isla Mujeres, me das mas información" class="btn btn-success btn-sm mt-3 btn-block">Ver mas</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a> --}}
							  </div>
							</div>
							
						</div>

						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Playa del Carmen, me das mas información"><img class="card-img-top" src="img/playa_de_carmendestinos_255x240.png" alt="Card image cap" style="height: 240px;"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h3>Playa del Carmen</h3>
							    <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Playa del Carmen, me das mas información" class="btn btn-success btn-sm mt-3 btn-block">Ver mas</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a> --}}
							  </div>
							</div>
							
						</div>

						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Riviera Destinos, me das mas información"><img class="card-img-top" src="img/riviera_destinos_255x240.png" alt="Card image cap" style="height: 240px;"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h3>Riviera Destinos</h3>
							    <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Riviera Destinos, me das mas información" class="btn btn-success btn-sm mt-3 btn-block">Ver mas</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a> --}}
							  </div>
							</div>
							
						</div>

						<div class="w-100">
							
						</div>
				</div>
			</div>

		<div class="container mt-5 mb-5" style="border-bottom: solid 2px #000;">
				<div class="row d-lg-flex justify-content-center mt-4">
					<div class="col-12 text-center">
						<h1 class="mt-4" style="color: #004384;">Más destinos en paquete</h1>
					</div>
					
						<div class="col-md-6 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Guadalajara, me das mas información" target="_blank"><img class="card-img-top" src="img/guadalajara_mas_destinos.png" alt="Card image cap" style="height: 240px;"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    
							    <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Guadalajara,me das mas información" class="btn btn-success btn-sm mt-3 btn-block">Ver mas</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a> --}}
							  </div>
							</div>
						</div>

						<div class="col-md-6 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, México me das mas información" target="_blank"><img class="card-img-top" src="img/mexico_mas_destinos.png" alt="Card image cap" style="height: 240px;"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    
							    <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, México me das mas información" class="btn btn-success btn-sm mt-3 btn-block">Ver mas</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a> --}}
							  </div>
							</div>
						</div>
						
						<div class="col-md-6 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Guanajuato, me das mas información" target="_blank"><img class="card-img-top" src="img/guanajuato_mas_destinos.png" alt="Card image cap" style="height: 240px;"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    
							    <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Guanajuato, me das mas información" class="btn btn-success btn-sm mt-3 btn-block">Ver mas</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a> --}}
							  </div>
							</div>
						</div>

						<div class="col-md-6 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Queretaro me das mas información" target="_blank"><img class="card-img-top" src="img/queretaro_mas_destinos.png" alt="Card image cap" style="height: 240px;"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    
							    <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Queretaro me das mas información" class="btn btn-success btn-sm mt-3 btn-block">Ver mas</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">Ver mas</a> --}}
							  </div>
							</div>
						</div>

						<div class="w-100">
							
						</div>
					<div class="col-12 text-center" style="color: #737373;font-weight: 600;font-size: 1.5rem;">
						<p class="p-0 m-0">Ofertas con <span>Cancún Do It</span> que incluye, Hotel + Avión</p>
						<p class="p-0 m-0">Aprovecha Hasta 18 meses sin intereses</p>
						<p class="p-0 m-0" style="font-size: .8rem; font-weight: 400; color: #737373;">Encuentra el hotel de tu preferencia, vuelos baratos, descubre nuevos lugares para viajar.</p>
						<a class="p-0 m-0" style="font-size: .8rem; font-weight: 400; color: #737373;" href="#">Terminos y condiciones para viajar con CancunDoit</a>
					</div>
				</div>
		</div>

		<div style="background-color:  #004384; padding: 21px 0px 0px 0px;
    color: #fff;">
			<div class="row d-lg-flex justify-content-between" style="    padding: 13px 0px;">
				<div class="col-3 text-center">
					<img src="img/icono_hoterl+avion.png">
					<p class="p-0 m-0">Incluye Hotel + Avión</p>
				</div>

				<div class="col-3 text-center">
					<img src="img/icono_card.png">
					<p>18 meses sin intereses</p>
				</div>

				<div class="col-3 text-center">
					<img src="img/icono_telefono.png">
					<p>Contactanos <br> (998) 212 1612</p>
				</div>
			</div>
		</div>

		<div class="container mt-5 mb-5" style="border-bottom: solid 2px #000;">
				<div class="row d-lg-flex justify-content-center mt-4">
					<div class="col-12 text-center">
						<h1 class="mt-4" style="color: #004384;">CANCUN DO IT LO QUE NECESITAS PARA VIAJAR</h1>
					</div>
				</div>
					
				
		</div>

		<div class="p-2 mt-3" style="background: url('{{ url('/img/fondo_pie_de_pagina.png') }}');">
	<div class="container mt-4">
		<div class="row">
			<div class="col-2">
				<img src="{{ url('/img/logo-blanco.png') }}" alt="logo-blanco">
			</div>
			<div class="col-3" style="color: #fff; border-left: solid 1px #fff;">
				<p>Agencia de viajes:
				</p>

			</div>
			<div class="col-12">
				<p style="font-size: .8em; color: #fff;">Registro nacional de turismo No. 04230050937</p>
			</div>
		</div>
	</div>
</div>
	</section>


@stop
