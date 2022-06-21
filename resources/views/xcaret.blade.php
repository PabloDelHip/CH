<?php use App\Http\Controllers\Sitio; ?>
@extends('layout')

@section('contenido')
<div class="parallax-window" id="tamano-parallax" data-parallax="scroll" data-image-src="{{ url('/img/xcaret/portada_xcaret.png') }}">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<img style="margin-top: 74px;" src="{{ url('/img/xcaret/logo-xcaret.png') }}">
			</div>
		</div>
	</div>
</div>
<div style=" background-color: #009326; ">
	<div class="container pt-3">
		<div class="row">
			<div style="    background-color: #FF0305; padding: 3px 17px; border-radius: 8px 8px 0px 0px;">
				<p class="p-0 m-0" style="color: #fff;">Entrada Xcaret</p>
			</div>
			<div class="col-12 p3" style="background-color: #017A1D; padding: 10px;">
				<div class="col-12">
	                  @if(Session::get('message'))
	                    <div class="alert alert-danger">
	                      {{ Session::get('message')  }}
	                    </div>
	                  @endif
	                </div>
				<form action="{{route("xcaret-form")}}" method="POST">
					{{csrf_field()}}
				  <div class="form-row d-flex align-items-center">
				    <div class="col-3">
				     	<label for="inputEmail4" style="font-weight:600; color: #fff; margin: 0;">Nombre</label>
      					<input type="text" style="border-radius: 17px;" name="nombre" class="form-control form-control-sm" id="inputEmail4" placeholder="Nombre">

      					<label for="inputEmail4" style="font-weight:600; color: #fff; margin: 0;" >Email</label>
      					<input type="email" style="border-radius: 17px;" name="email" class="form-control form-control-sm" id="inputEmail4" placeholder="Email">
				    </div>
				    <div class="col-2">
				     	 <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required name="parque">
					        <option selected>Parque</option>
					        <option value="Xcaret">Xcaret</option>
					        <option value="Xel-ha">Xel-ha</option>
					        <option value="Xplor">Xplor</option>
					        <option value="Xplor Fuego">Xplor Fuego</option>
					        <option value="Xenses">Xenses</option>
					        <option value="Xcaret + Xel-ha">Xcaret + Xel-ha</option>
					        <option value="Xcaret + Xplor">Xcaret + Xplor</option>
					        <option value="Xcaret + Xplor + Xel-ha">Xcaret + Xplor + Xel-ha</option>
					        <option value="Xel-ha + Xplor">Xel-ha + Xplor</option>
					        <option value="Xavage">Xavage</option>
					        <option value="Xoximilco">Xoximilco</option>
					        <option value="Xcaret Total">Xcaret Total</option>
					      </select>
				    </div>
				    <div class="col-2">
				     	 <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="numero_adultos">
					        <option selected>Numero de adultos</option>
					        <option value="1">1</option>
					        <option value="2">2</option>
					        <option value="3">3</option>
					        <option value="1">4</option>
					        <option value="2">5</option>
					        <option value="3">6</option>
					        <option value="1">7</option>
					        <option value="2">8</option>
					        <option value="3">9</option>
					        <option value="10 o mas">10 o Mas</option>
					      </select>
				    </div>

				    <div class="col-2">
				    	<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="numero_ninos">
					        <option selected>Numero de niños</option>
					        <option value="1">1</option>
					        <option value="2">2</option>
					        <option value="3">3</option>
					        <option value="1">4</option>
					        <option value="2">5</option>
					        <option value="3">6</option>
					        <option value="1">7</option>
					        <option value="2">8</option>
					        <option value="3">9</option>
					        <option value="10 o mas">10 o Mas</option>
					      </select>
				    </div>

				    <div class="col-2">
					    <input name="fecha"  type="text" class="form-control datepicker" placeholder="Fecha del servicio" required>
				    </div>
				    <div class="col-12 text-right">
				    	<div class="form-check">
						  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
						  <label class="form-check-label" for="exampleRadios1" style="color: #fff;">
						    Nacional
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
						  <label class="form-check-label" for="exampleRadios1" style="color: #fff;">
						    Quintanarroense
						  </label>
						</div>
				    	<input style="width: 130px;" type="submit" value="Enviar" class="btn btn-danger">
				    </div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12 text-center">
			<h2 class="mt-4" style="color: #038E27;">NUESTROS PARQUES</h2>
		</div>
		<div class="col-3">
			<a target="_blank" href="https://shareasale.com/r.cfm?b=665419&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="{{ url('/img/xcaret/xceret_imagen_logo.png') }}" alt="Card image cap"></a>
		</div>
		<div class="col-3">
			<a target="_blank" href="https://shareasale.com/r.cfm?b=665420&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="{{ url('/img/xcaret/xel-ha_imagen_logo.png') }}" alt="Card image cap"></a>
		</div>
		<div class="col-3">
			<a target="_blank" href="https://shareasale.com/r.cfm?b=665421&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="{{ url('/img/xcaret/xplor_imagen_logo.png') }}"></a>
		</div>
		<div class="col-3">
			<a target="_blank" href="https://shareasale.com/r.cfm?b=1123810&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="{{ url('/img/xcaret/xoximilco_imagen_logo.png') }}" alt="Card image cap"></a>
		</div>
		
		<div class="w-100 m-3"></div>

		<div class="col-6">
			<a target="_blank" href="https://shareasale.com/r.cfm?b=1125417&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="{{ url('/img/xcaret/xense_imagen_logo.png') }}" alt="Card image cap" style="height: 240px;"></a>
		</div>
		<div class="col-6">
			<a target="_blank" href="https://shareasale.com/r.cfm?b=1123786&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="{{ url('/img/xcaret/xplor_fuego_imagen_logo.png') }}" alt="Card image cap" style="height: 240px;"></a>
		</div>

		<div class="row text-center mb-4" >
			<div class="col-12">
				<h2 class="mt-4" style="color: #038E27;">CONOCE NUESTRO NUEVO PARQUE: XAVAGE</h2>
			</div>

			<div class="col-6">
				<a target="_blank" href="https://shareasale.com/r.cfm?b=1238138&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="{{ url('/img/xcaret/xavege_imagen_logo.png') }}" alt="Card image cap" style="height: 240px;"></a>


			</div>

			<div class="row col-6" style="background-color: #eee;">
				<div class="col-7 row d-flex align-items-end">
					<div class="col-12">
						¿Sabes qué tan audas eres?
					</div>
				</div>
				<div class="col-5">
					<img class="card-img-top" src="{{ url('/img/xcaret/logo-xavage_texto.png') }}" alt="Card image cap">
				</div>
				<div class="col-12 mt-3">
					<p>
						Desafia todos tus limites en Xavage, el único parque en Cancún y Riviera Maya con las actividades mas audaces por tierra, agua y aire. Libera tu lado salvaje y enfrenta la fuerza del agua, recorre caminos llenos de retos y conquista las alturas. Vive este desafio lleno de adrenalina y sigue tus instintos.
					</p>
				</div>
				
			</div>

		</div>
	</div>
</div>

<!-- fotos de los parques -->

<div style="background-color: #009326;">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-4">
				<p style="color: #fff; font-size: 2em; font-weight: 700; margin: 0;">10%, 15% y 50%</p>
				<p style="color: #fff;font-size: 1.4em;">DE DESCUENTO EN TU COMPRA</p>
			</div>
			<div class="col-2">
				<p style="color: #fff;
    font-weight: 700;
    border: solid 1px #fff;
    text-align: center;
    display: inline-block;
    padding: 6px;
    border-radius: 12px;">COMPRA ANTICIPADA</p>
			</div>

			<div class="col-6">
				<img style="width: 100%;" src="{{ url('/img/xcaret/meses_sin_interes.png') }}">
			</div>
				
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row text-center" >
		<div class="col-12">
			<h2 class="mt-4" style="color: #038E27;">NUESTROS TOURS</h2>
		</div>

		<div class="row col-6" style="background-color: #eee;">
			<div class="col-7 row d-flex align-items-end">
				<div class="col-12">
					<b>TOUR XENOTES</b>
				</div>
			</div>
			<div class="col-5">
				<a target="_blank" href="https://api.whatsapp.com/send?phone=5219982121612&text=Me interesa un paquete avion - hotel, Huatulco, me das mas información"><img class="card-img-top" src="{{ url('/img/xcaret/logo-xenotes.png') }}" alt="Card image cap"></a>
			</div>
			<div class="col-12 mt-3">
				<p style="font-size: .9em;">
					Xenotes es el unico tour en la riviera maya que lo lleva a conocer los cuatro tipos de cenotes que existen en la naturaleza: Semiabieeto, abierto, antiguo y de caverna. Divierte con actividades como rappel asistido, tirolesas, kayak, nado de exploración acuatica, o saltos de altura. Para reponer energia un delicioso picnic  te estara esperando. Adentrate al corazon de la jungla maya.
				</p>
			</div>
		</div>

		<div class="col-6">
			<a target="_blank" href="https://shareasale.com/r.cfm?b=1123807&u=1892160&m=32794&urllink=&afftrack="><img class="card-img-top" src="{{ url('/img/xcaret/xenotes_imagen_logo.png') }}" alt="Card image cap" style="height: 240px;"></a>
		</div>

	</div>
</div>

<div class="p-2 mt-3" style="background: url('{{ url('/img/xcaret/fondo_de_pie.png') }}');">
	<div class="container mt-4">
		<div class="row">
			<div class="col-2">
				<img src="{{ url('/img/logo-blanco.png') }}" alt="logo-blanco">
			</div>
			<div class="col-3" style="color: #fff; border-left: solid 1px #fff;">
				<p>Agencia de viajes:
					<br>
				<b>Autorizada y afiliada por:</b>
				</p>

			</div>
			<div class="col-3">
				<img src="{{ url('/img/xcaret/logo_Grupo_Xcaret.png') }}" alt="logo-blanco">
			</div>
			<div class="col-12">
				<p style="font-size: .8em; color: #fff;">Registro nacional de turismo No. 04230050937</p>
			</div>
		</div>
	</div>
</div>


@stop