<?php use App\Http\Controllers\Sitio; ?>
@extends('en.layout')

@section('contenido')

<div id="barra-Categoria" class=" .ocultar-movil">
    
</div>
<div class="parallax-window" id="tamano-parallax" data-parallax="scroll" data-image-src="{{ url('/img/'.$image) }}">
</div>
@include('includes.migajas', array('miVar' => 'Tours > Cancún'))

<div class="container">
    <div class="row">
        <div class="col-md-12 p-md-0">
                <span>
						<div class="row p-0 m-0">
                            <div class="col-12 text-left titulo mt-4">
                            {{-- <h2 style="font-weight: 300; font-size: 1.4em;">NUESTROS DESTINOS MAS POPULARES</h2> --}}
                            <h1 class="titulo pb-1 mb-2" style="font-family: 'Open Sans Condensed', sans-serif !important;">{{ $categorie_name }}</h1>
                        </div>
                        <div class="col-md-12 d-lg-flex justify-content-start">
                            <div style="background-color: #37B721; height: 2px; width: 100px;">
                                        
                            </div>
                        </div>
							<article class="col-12 mt-4">
								
								{{-- <h3 class="text-capitalize">Los mejores tours en cancún a precio de descuento</h3> --}}
								{{-- <div class="contenido text-justify">
									<p>
                                            {!! $description !!}
									</p></div> --}}
							</article>
						</div>
						<!-- FINAL DESCRIPCION -->
					</span>
                <div class="row d-lg-flex justify-content-center mt-4">
                @foreach($tours as $tour)

                <div class="col-md-3 mb-4">
                    <div class="card contenedor-servicio" style="border: none; ">
                        
                         @if($tour->xperiencias)
                           <a href="{{ $tour->url }}">
                         @else
    
                          <a href="{{route('en/infoTour',['tour'=> $tour->url])}}">
                        @endif 

                        <img class="card-img-top" src="{{ url('img/tours/') }}/{{$tour->image}}" alt="Card image cap"></a>
                            <div class="card-body" style="border:1px solid #ddd; border-radius: 3px; min-height: 169px;">
                                <h5 class="card-title m-0" style="font-family: 'Open Sans Condensed', sans-serif !important; font-size: 1.5em;">{{$tour->name}}</h5>
                                {{-- <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Por persona: ${{ $tour->adult_discount_price }} <span>mxn</span></p> --}}
                                @if(!$tour->xperiencias)
                                    <p class="contenedor-servicio-precio m-0" style="font-family: 'Open Sans Condensed', sans-serif !important;">Tour From: ${{ $tour->adult_price }} <span>usd</span></p>
                                    <p class="m-0" style="font-size: 1.4em; color: #FFDE00">★ ★ ★ ★ ★</p>
                                @endif
                                
                               <!--  <p class="card-text m-0" style="font-size: .9em; color: #939393;">camioneta de lujo, comidas y entradas incluidas</p> -->
                               {{--  <form action="{{ route('ingresar-carrito') }}" method="POST">
                                        {!! csrf_field() !!}

                                        <div class="form-group">
                                        <label class="mb-0" for="exampleFormControlSelect1">Adultos</label>
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

                                      @if($tour->child_price>0)
                                        <div class="form-group">
                                            <label class="mb-0" for="exampleFormControlSelect1">Niños</label>
                                            <select class="form-control form-control-sm"  name="num_ninos">
                                                 <option value="0">0</option>
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
                                        <input type="hidden" name="precio_ninos" value="{{$tour->child_price}}">
                                    @else
                                        <input type="hidden" name="num_ninos" value="0">
                                        <input type="hidden" name="precio_ninos" value="0">
                                      @endif

                                      
                                        <div class="form-group">
                                            <label class="mb-0" for="FechaTour">Fecha tour:</label>
                                            <input name="fecha_tour"  type="text" class="form-control form-control-sm datepicker" required>
                                        </div>
                                        <input type="hidden" name="salida" value="0">
                                        <input type="hidden" name="name_tour" value="{{$tour->name}}">
                                        <input type="hidden" name="precio_van" value="{{ $tour->adult_price }}">
                                        <input type="hidden" name="precio_adulto" value="{{ $tour->adult_discount_price }}">
                                        <input type="hidden" name="hotel" value="0">
                                        <input type="hidden" name="llegada" value="0">
                                        <input type="hidden" name="id" value="21">
                                        <input type="hidden" name="transportacion" value="0">
                                        <input type="hidden" name="image" value="{{$tour->image}}">
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
                                    </form> --}}
                            </div>
                    </div>
                </div>



                {{-- <div class="row p-0 m-0 pt-2 pb-2 mb-3 descripcion-tour">
                    <div class="col-md-3 col-sm-12 p-0 m-0 ml-2">
                        <img src="{{ url('img/tours/') }}/{{$tour->image}}" alt="xcaret" class="img-fluid p-0 m-0" style="max-width: 190px;">
                    </div>
                    <div class="col-md-5 col-sm-12 p-0 m-0">
                        <h3 class="nombre-tours p-0">
                            {{$tour->name}}
                        </h3>
                        <p class="contenido">
                            {{$tour->description_information}}
                        </p>
                    </div>

                    <div class="col-md col-sm-12 precio-tour text-right pt-2">
                        <p class="m-0">
                                <span>Adulto: </span>
                                <del>${{ $tour->adult_discount_price }}</del>
                                <span class="precio-publico ml-1">${{ $tour->adult_price }} </span>
                                <span>USD</span>
                            </p>
                            <p class="m-0">
                                !AHORRA {{ Sitio::porcentajeDosNumeros($tour->adult_discount_price,$tour->adult_price) }}%!
                            </p>
                            <p class="m-0">
                                <span>Duracion: </span>
                                <span class="ml-1 dato-extra-tour">{{ $tour->duration }} </span>
                            </p>


                            <p class="m-0">
                                <span>Categoria: </span>
                                <span class="ml-1 dato-extra-tour">{{ $categorie_name }}</span>
                            </p>
                            <a style="bottom: 0;" href='{{route("infoTour",['tour'=> $tour->url])}}' class="btn btn-warning boton-ver-tour mt-2"> Ver tour</a>
                    </div>
                </div> --}}

                @endforeach
            </div> 
        </div>
        {{--  FINAL LISTA TOURS  --}}

        

       {{--  @include('includes.aside') --}}

    </div>

    @if(Request::path()=='en/capitan-hook/categoria')
        <div class="d-flex row justify-content-center">
            <div class="col-12 col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/8Lv0aXBdq3w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    @else

    @endif
    
</div>



@stop
