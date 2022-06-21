@extends('layout')

@section('contenido')
<div class="img-categories">

</div>

<section class="container mt-4">
	<h1 class="titulo-categoria titulo-actividades mb-4">TOURS EN CANCÚN QUE NO TE PUEDES PERDER</h1>
	<div class="row col-12">
		@foreach ($dataCategoriesTours as $dataCategorieTour)
						<div class="col-4 tour-categoria mb-3">
							<div class="col-12 sub-tour-categoria">
								<a href="{{ route('tours_categorie',['categorie' => str_replace(' ', '-', $dataCategorieTour['name'])  ,'id_categorie' => $dataCategorieTour['id']]) }}">

									<img width="100%" src="{{ $dataCategorieTour['image'] }}">
								</a>
								<div>
									<h4>{{ $dataCategorieTour["name"] }}</h4>
								</div>
							</div>
						</div>
		@endforeach
	</div>
	
</section>

@stop