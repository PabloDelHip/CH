@extends('layout')

@section('contenido')

@include('includes.migajas', array('miVar' => 'Tours > Cancún'))

<div class="container">
        <div class="row mt-2">
            <div class="col-md-9 col-sm-12 p-0 m-0">
                <div class="col-12">
                    <div class="carousel slide" id="principal-carousel" data-ride="carousel">

                        <div class="carousel-inner">
                            @foreach($image_tour as $key => $img)
                                <div  class="carousel-item @if($key==0) active @endif" >
                                    <img src="{{ 'http://crm.caribbeanhollidays.com/api/v1/tours/images/'.$img['url_image']}}" width="100%" class="img-fluid" alt="img_tour">
                                </div>
                            @endforeach
                        </div>

                        <a href="#principal-carousel" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>

                        <a href="#principal-carousel" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>{{-- FINAL CAROUSEL --}}


                <div class="col-12 mt-3">
                    <h1 class="titulo pb-1 mb-2 mt-2">
                        {{ $tour['name'] }}
                    </h1>
                </div>
                <div class="col-12  row info-adicional-tour">
                    <div class="col-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="info">
                                <h4 class="name">Duration</h4>
                                <p class="value">
                                    {{ $general_information['duration'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="info">
                                <h4 class="name">Dias de tour</h4>
                                <p class="value"> 
                                    @if($operation_tour['mon'])
                                        Lu,
                                    @endif
                                    @if($operation_tour['tue'])
                                        Ma,
                                    @endif
                                    @if($operation_tour['wed'])
                                        Mi,
                                    @endif
                                    @if($operation_tour['thu'])
                                        Ju,
                                    @endif
                                    @if($operation_tour['fri'])
                                        Vi,
                                    @endif
                                    @if($operation_tour['sat'])
                                        Sa,
                                    @endif
                                    @if($operation_tour['sun'])
                                        Do,
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="info">
                                <h4 class="name">Costo</h4>
                                <p class="value">
                                    ${{ $operation_tour['adult_price'] }} mxn
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div class="info">
                                <h4 class="name">Idiomas</h4>
                                <p class="value">
                                    ___
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 description mt-4 border-bottom">
                    <h3 class="sub-titulos-info-tour  mb-4">Descripción</h3>
                    {!! $general_information['description'] !!}
                </div>

                <div class="col-12 description mt-4 border-bottom">
                    <h3 class="sub-titulos-info-tour  mb-4">Itinerario</h3>
                    {!! $general_information['itinerary'] !!}
                </div>

                <div class="col-12 description mt-4 border-bottom">
                    <h3 class="sub-titulos-info-tour  mb-4">Incluye</h3>
                    {!! $general_information['includes'] !!}
                </div>

                <div class="col-12 description mt-4 border-bottom">
                    <h3 class="sub-titulos-info-tour  mb-4">Recomendacion</h3>
                    {!! $general_information['recommendation'] !!}
                </div>
            </div>
            @include('includes.aside')

            {{-- <div class="col-3">
                <div class="card">
                  <div class="card-header">
                    Quote
                  </div>
                  <div class="card-body">
                    <blockquote class="blockquote mb-0">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                  </div>
                </div>
            </div> --}}


        </div>


    </div>




@stop
