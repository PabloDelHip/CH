@extends('layout')

@section('contenido')

	<div class="container">
		<div class="row d-flex justify-content-center">

				
				<div class="row col-md-6 col-12 mt-3">
					<div class="col-12 text-center titulo mt-5">
							<h2 style="font-weight: 300; font-size: 1.4em;"><b>NOSOTROS</b></h2>
					</div>
					<div class="col-md-12 d-lg-flex justify-content-center">
						<div style="background-color: #37B721; height: 2px; width: 100px;">
									
						</div>
					</div>
					<p>Somos una agencia de viajes, cuya misión es ofrecerle a nuestros clientes, exclusivos y personalizados planes de diversión en los mejores destinos de la región sureste de nuestro amado México.</p>
					<p>¡Tú decides! por tierra o por mar, seguro te llevas contigo una gran experiencia vacacional con lo mejor de nuestra gastronomía, cultura, paisajes, calidez humana y más.</p>

					<div class="col-12 text-center titulo mt-5">
							<h2 style="font-weight: 300; font-size: 1.4em;"><b>CONTACTANOS</b></h2>
					</div>
					<div class="col-md-12 d-lg-flex justify-content-center">
						<div style="background-color: #37B721; height: 2px; width: 100px;">
									
						</div>
					</div>
					<div class="col-12 text-center mt-2">
						<p><a href="mailto:reservas@caribbeanhollidays.com">reservas@caribbeanhollidays.com</a></p>
						<p class="mb-0"><b>OFICINA</b> 998-210-91-56</p>
						<p class="mb-0"><b>WHATSAPP</b> 998-210-91-56</p>
						<p class="m-0"><b>DIRECCIÓN</b>  Avenida Huayacan Km 4.5 Sm 330 Mza 20 Lote 8 Interior Master Plaza Local 28</p>
					</div>
				</div>

				{{-- <div class="row col-md-6 col-12 mt-3">
					<div class="col-12 text-center titulo mt-5">
							<h2 style="font-weight: 300; font-size: 1.4em;"><b>CONTACTANOS</b></h2>
					</div>
					<div class="col-md-12 d-lg-flex justify-content-center">
						<div style="background-color: #37B721; height: 2px; width: 100px;">
									
						</div>
					</div>
					<div class="col-12 text-center mt-2">
						<p><a href="mailto:reservas@cancundoit.com"> reservas@cancundoit.com</a></p>
						<p><a href="mailto:enrique.ocampo@cancundoit.com">enrique.o@cancundoit.com</a></p>
						<p class="mb-0">(998) 500 70 93</p>
						<p class="m-0">Altitud 54 SA de CV</p>
						<p class="m-0">Azuna Corporate Center Piso 11</p>
						<p class="m-0">Av. Sayil esquina Av. Savignac,</p>
						<p class="m-0">Malecon Tajamar, Cancún</p>
						<p class="m-0">C.P. 77500</p>
					</div>
				</div> --}}

				<div class="col-12 col-md-6 mt-5">

					<div class="col-12">
	                  @if(Session::get('message'))
	                    <div class="alert alert-danger">
	                      {{ Session::get('message')  }}
	                    </div>
	                  @endif
	                </div>
					
					<div class="col-12 p-3 mb-3" style="background-color: #f9f9f9;">
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
								<label for="exampleFormControlTextarea1">Motivo de contacto o duda</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motivo"></textarea>
							</div>						  
						  	<button type="submit" class="btn btn-primary">Enviar mensaje</button>
						</form>
					</div>

					<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.21347093371!2d-86.8619376850661!3d21.104053885957633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2ba1dc631ab3%3A0x49962773788b092e!2sMASTER%20PLAZA!5e0!3m2!1ses-419!2smx!4v1645035607431!5m2!1ses-419!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>

				{{-- <div class="row col-12 col-md-4">
					<div class="col-12 text-center titulo mt-5">
							<h2 style="font-weight: 300; font-size: 1.4em;"><b>NOSOTROS</b></h2>
					</div>
					<div class="col-md-12 d-lg-flex justify-content-center">
						<div style="background-color: #37B721; height: 2px; width: 100px;">
									
						</div>
					</div>
					<a href="#">reservas@cancundoit.com</a>
					<a href="#">enrique.ocampo@cancundoit.com</a>

				</div> --}}

		</div>
	</div>


@stop
