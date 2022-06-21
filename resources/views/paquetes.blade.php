@extends('layout')

@section('contenido')

<div class="img-categories"></div>

<section class="container mt-4">
	<h1 class="titulo-categoria titulo-actividades mb-4">PAQUETES INCREIBLES EN CANCÚN</h1>
	<div class="row col-12">
		@foreach ($dataPaquetes as $dataPaquete)
			@if(count($dataPaquete['info']) > 0)
				<div class="col-4 tour-categoria mb-3">
					<div class="col-12 row form-book-wrapper p-3">
						<div class="col-12 sub-tour-categoria">
							<h3 class="titulo">
								{{ $dataPaquete['name'] }}
							</h3>
						</div>
						<form action="{{ route('ingresar-carrito-paquete') }}" method="post">
							<input type="hidden" name="id_paquete" value="{{ $dataPaquete['id'] }}">
							<input type="hidden" name="name_paquete" value="{{ $dataPaquete['name'] }}">
							<label class="wrapper-label">Adultos</label>
							<input class="form-control" type="number" name="num_adultos">
							
							<label class="wrapper-label">Niños</label>
							<input class="form-control" type="number" name="num_ninos">
							
							<label class="wrapper-label">Infantes</label>
							<input class="form-control" type="number" name="num_infantes">
							<hr>
							{!! csrf_field() !!}
							<div class="tours-paquetes mb-3">
								<h4>Actividades</h4>
								@foreach($dataPaquete['info'] as $tour)
									<input type="hidden" name="id[]" value="{{ $tour['tour']['id'] }}">
									<input type="hidden" name="name[]" value="{{ $tour['tour']['name'] }}">
									<label class="wrapper-label mt-3">
										{{ $tour['tour']['name'] }}
									</label>
									<input type="date" name="dateTours[]" class="form-control" required>
								@endforeach
							</div>
							<input type="hidden" name="paquete" value="true">
							<input type="hidden" name="adult_price" value="{{ $dataPaquete['adult_price'] }}">
							<input type="hidden" name="child_price" value="{{ $dataPaquete['child_price'] }}">
							<input type="hidden" name="image" value="0">
							<div class="precio-paquete row">
								<div class="col-12" style="width: 100%">
									<span class="price-label">
										Adulto:
									</span>
									<span class="value-text-lg">
										${{ number_format($dataPaquete['adult_price'], 2, '.', ',') }} mxn
									</span>
								</div>
								<br>
								<div class="col-12" style="width: 100%">
									<span class="price-label">
										Niño:
									</span>
									<span class="value-text-lg">
										${{ number_format($dataPaquete['child_price'], 2, '.', ',') }} mxn
									</span>
								</div>
							</div>
							<input type="submit" class="btn btn-block btn-primary mt-3" value="Reservar">
						</form>
					</div>
				</div>
			@endif
		@endforeach
	</div>
	
</section>

@stop

<!--<form id="form-booking-inpage" action="{{ route('ingresar-carrito') }}" method="post" action="#booking-request" class="tour-booking-form form-has-guest-name"> -->