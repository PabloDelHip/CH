<?php use App\Http\Controllers\Sitio; ?>
@extends('en.layout')

@section('contenido')

<div style="padding: 0px 0px; background: url({{ url('img/fondo_hotel.png') }}) no-repeat center; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
	<div class="container">
		<div class="row" style="margin-top: 0px;">
			<div class="col-12 col-md-5">
				<div id="liquidBoxContainer" style="margin-top: 25px;"></div>
				
				

			</div>	
			<div class="col-7 text-right ocultar-movil">
				<img src="{{ url('img/logo_hotel.png') }}">
			</div>	
		</div>
	</div>
</div>

{{-- INICIO TIPOS DE PAGO --}}

		<section class="m-0">

			<div class="col-12 row d-flex justify-content-center mt-5">

					<div class="col-12">
	                  @if(Session::get('message'))
	                    <div class="alert alert-danger">
	                      {{ Session::get('message')  }}
	                    </div>
	                  @endif
	                </div>
					
					<div class="col-12 col-md-6 p-3 mb-3" style="background-color: #f9f9f9;">
						<div class="col-12 text-center titulo mb-2">
							<h2 style="font-weight: 300; font-size: 1.4em;"><b>Contact us</b></h2>
						</div>
						<form action="{{route("nosotros-form")}}" method="POST">
							{{csrf_field()}}
							<div class="form-group">
						    	<label for="exampleInputEmail1">Name</label>
						    	<input type="text" class="form-control" placeholder="Name" name="nombre">
						  	</div>
						  	<div class="form-group">
						    	<label for="exampleInputEmail1">Email</label>
						    	<input type="email" class="form-control" placeholder="Email" name="correo">
						  	</div>
						  	<div class="form-group">
						    	<label for="exampleInputEmail1">Asunto</label>
						    	<input type="text" class="form-control" placeholder="Asunto" name="asunto">
						  	</div>
						  	<div class="form-group">
								<label for="exampleFormControlTextarea1">Reason for contact or doubt</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motivo"></textarea>
							</div>						  
						  	<button type="submit" class="btn btn-primary">send message</button>
						</form>
					</div>
		</div>

			<div class="container mt-5 mb-5" style="border-bottom: solid 2px #000;">
				<div class="row d-lg-flex justify-content-center mt-4">
					<div class="col-12 text-center">
						<h1 class="mt-4" style="color: #004384;">¡Our Best <span>Offers!</span> Hotel + Flight</h1>
					</div>
						<div class="col-md-3 mb-4">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Huatulco, me das mas información"><img class="card-img-top" src="{{ url('img/huatulco_hotel.png') }}" alt="Card image cap" style="height: 240px;"></a>
							 <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							 	<h3>Huatulco</h3>
							    
							    <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Huatulco, me das mas información" class="btn btn-success btn-sm mt-3 btn-block">see more</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">see more</a> --}}
							  </div>
							</div>
						</div>

						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Mazatlan, me das mas información"><img class="card-img-top" src="{{ url('img/mazatlan_hotel.png') }}" alt="Card image cap" style="height: 240px;"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h3>Mazatlan</h3>
							    <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Mazatlan, me das mas información" class="btn btn-success btn-sm mt-3 btn-block">see more</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">see more</a> --}}
							  </div>
							</div>
							
						</div>

						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Tulum, me das mas información"><img class="card-img-top" src="{{ url('img/tulum_hotel.png') }}" alt="Card image cap" style="height: 240px;"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h3>Tulum</h3>
							    <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Tulum, me das mas información" class="btn btn-success btn-sm mt-3 btn-block">see more</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">see more</a> --}}
							  </div>
							</div>
							
						</div>

						<div class="col-md-3 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Veracruz, me das mas información"><img class="card-img-top" src="{{ url('img/veracruz_hotel.png') }}" alt="Card image cap" style="height: 240px;"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    <h3>Veracruz</h3>
							    <a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Veracruz, me das mas información" class="btn btn-success btn-sm mt-3 btn-block">see more</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">see more</a> --}}
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
						<h1 class="mt-4" style="color: #004384;">More destinations in package</h1>
					</div>
					
						<div class="col-md-6 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Las Vegas, me das mas información" target="_blank"><img class="card-img-top" src="{{ url('img/las_vegas_hotel.png') }}" alt="Card image cap" style="height: 240px;"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    
							    <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Las Vegas,me das mas información" class="btn btn-success btn-sm mt-3 btn-block">see more</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">see more</a> --}}
							  </div>
							</div>
						</div>

						<div class="col-md-6 mb-3">
							<div class="card contenedor-servicio" style="border: none; ">
							  <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, México me das mas información" target="_blank"><img class="card-img-top" src="{{ url('img/mexico_hotel.png') }}" alt="Card image cap" style="height: 240px;"></a>

							  <div class="card-body" style="border:1px solid #ddd; border-radius: 3px;">
							    
							    <a href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, México me das mas información" class="btn btn-success btn-sm mt-3 btn-block">see more</a>
							    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm  mt-3" data-toggle="modal" data-target="#trasladosAeropuerto" style="border-radius: 20px;">see more</a> --}}
							  </div>
							</div>
						</div>

						<div class="w-100">
							
						</div>
					<div class="col-12 text-center" style="color: #737373;font-weight: 600;font-size: 1.5rem;">
						<p class="p-0 m-0">Offers with <span>Cancun Do It</span> that includes, Hotel + Flight</p>
						<p class="p-0 m-0">Take advantage of up to 18 months interest free</p>
						<p class="p-0 m-0" style="font-size: .8rem; font-weight: 400; color: #737373;">Find the hotel of your choice, cheap flights, discover new places to travel.</p>
						<a class="p-0 m-0" style="font-size: .8rem; font-weight: 400; color: #737373;" href="#">Terms and conditions for traveling with CancunDoit</a>
					</div>
				</div>
		</div>

		<div style="background-color:  #004384; padding: 21px 0px 0px 0px;
    color: #fff;">
			<div class="row d-lg-flex justify-content-between" style="    padding: 13px 0px;">
				<div class="col-3 text-center">
					<img src="{{ url('img/icono_hoterl+avion.png') }}">
					<p class="p-0 m-0">Incluye Hotel + Avión</p>
				</div>

				<div class="col-3 text-center">
					<img src="{{ url('img/icono_card.png') }}">
					<p>18 meses sin intereses</p>
				</div>

				<div class="col-3 text-center">
					<img src="{{ url('img/icono_telefono.png') }}">
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
	</section>


@stop
