@extends('en.layout')

@section('contenido')



{{-- {{ dd(Cart::content()) }} --}}
<?php /**/ $total = 0 /**/ ?>
<div class="container mt-5" >
    <div class="row">
        <div class="col-12 col-md-9 m-0 mr-md-3 p-0 p-md-2">
          {{--   {{dd(Cart::content())}} --}}
        @forelse(Cart::content() as $tour)
        <?php /**/ $total += $tour->options->total_sale /**/ ?>
        <div class="row col-12 contenedor-carrito m-0 mr-md-2">
            <div class="col-md-3 col-sm-12 pt-3">
                <img style="width: 100%;" src="{{ url('/img/tours')}}/{{ $tour->options->image }}" alt="tour" class="img-fluid">
            </div>
             @if($tour->options->transportacion=='0')
                
                <div class="col-md-6 col-sm-12 info-tour-pasos pt-3">
                    <p class="h4">{{ $tour->name }}</p>
                    <p class=" m-0 mb-1">Number of people: {{$tour->options->num_adult }} </p>
                    <p class=" m-0 mt-2 mb-1">Tour date: {{$tour->options->date }} </p>
                </div>
            @elseif($tour->options->salida=='')
                <div class="col-md-6 col-sm-12 info-tour-pasos pt-3">
                    <p class="h4">Yate: {{ $tour->name }}</p>
                    <p class=" m-0 mt-2 mb-1">Service day: {{$tour->options->date }} </p>
                    {{-- <p class=" m-0 mt-2 mb-1">Fecha final de renta: {{$tour->options->salida }} </p> --}}
                </div>
            @elseif($tour->options->hotel=='sin hotel')

                <div class="col-md-6 col-sm-12 info-tour-pasos pt-3">
                    <p class="h4">Car rent: {{ $tour->name }}</p>
                    <p class=" m-0 mt-2 mb-1">Rent start date: {{$tour->options->date }} </p>
                    <p class=" m-0 mt-2 mb-1">Final rental date: {{$tour->options->salida }} </p>
                </div>
           
            
            @elseif($tour->options->transportacion)

                <div class="col-md-6 col-sm-12 info-tour-pasos pt-3">
                    <p class="h4">{{ $tour->name }}</p>
                    <p class=" m-0 mb-1">Number of people: {{$tour->options->num_adult }} </p>
                    <p class=" m-0 mb-1">Destination: {{$tour->options->hotel }} </p>
                    <p class=" m-0 mt-2 mb-1">Arrival: {{$tour->options->date }} </p>
                    <p class=" m-0 mt-2 mb-1">return: {{$tour->options->salida }} </p>



                </div>

            @else

                <div class="col-md-6 col-sm-12 info-tour-pasos pt-3">
                    <p class="h4">{{ $tour->name }}</p>
                    <p class=" m-0 mt-2 mb-1">Tour date: {{$tour->options->date }} </p>
                    <p class=" m-0 mb-1">Adult number: {{$tour->options->num_adult }} </p>

                    {{-- <p class="m-0 mb-1">Precio tour: <b>$ {{$tour->options->adult_price }}</b> <span>USD</span> </p>
                    <p>Total a pagar: <b>$ {{$tour->options->total_adult_price }}</b> <span>USD</span> </p> --}}

                    <p class=" m-0 mb-1">Number of children: {{$tour->options->num_child }}</p>
                   {{--  <p class="m-0 mb-1">Precio tour: <b>$ {{$tour->options->child_price }}</b> <span>USD</span> </p>
                    <p>Total a pagar: <b>$ {{$tour->options->total_child_price }}</b> <span>USD</span> </p> --}}


                </div>

            @endif

            
            <div class="col-md-3 col-sm-12 text-right pasos-total-pagar pt-3 text-center" >
                @if($tour->options->tipo_cupon=='yate')
                    <p>Total: $ {{$tour->options->pago_real }}</p>
                    <p style="font-family: 'Open Sans Condensed', sans-serif; font-size: 1.2em;"><span>Pay online:</span><b>$ {{$tour->options->total_sale }}</b> <span>usd</span>
                            <a class="ocultar ver-movil basura-movil" href="{{ url("{$tour->rowId}", "eliminar-tour") }}">
                                <p  class="p-0"><i class="far fa-trash-alt"></i></p>
                            </a>
                    </p>
                @else
                 <p style="font-family: 'Open Sans Condensed', sans-serif; font-size: 1.2em;"><b>$ {{$tour->options->total_sale }}</b> <span>usd</span>
                        <a class="ocultar ver-movil basura-movil" href="{{ url("{$tour->rowId}", "eliminar-tour") }}">
                            <p  class="p-0"><i class="far fa-trash-alt"></i></p>
                        </a>
                </p>
                @endif
               
                <a class="ocultar-movil ver" href="{{ url("{$tour->rowId}", "eliminar-tour") }}">
                    <p  class="p-0"><i class="icon-trash-empty"></i></p>
                </a>
            </div>
        </div>

    @empty
    
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{ url('/img/carrito.png')}}" alt="carrito-vacio">
                <p class="h2">Empty shopping cart</p>
            </div>
        </div>
    @endforelse
    </div>
    <div class="row col-12 col-md-3 col-auto p-0 m-0 ocultar ver-movil">
{{--         <div class="col-9 text-center">
                <a href="{{ url('/')}}" class="btn btn-warning btn-lg">
                    Seguir Comprando
                </a>
        </div> --}}
        <div class="col-12 p-0">
                <div class="col-auto text-center p-0" style="border: solid 1px #dbdbdb;">
                    <p class="h4 m-0 p-0 pt-1 pb-1" style="background-color: #dbdbdb; color: #004384;">Total to pay</p>
                    <p class="mt-2" style="font-family: 'Open Sans Condensed', sans-serif; font-size: 1.8em;" >${{ number_format($total, 2, '.', ',') }} <span style="font-size: .6em;">usd</span> </p>
                    <a class="btn btn-primary btn-sm mb-2" style="width: 90%;" href="{{ url('en/datos-del-cliente')}}" role="button">CONTINUE <i class="fas fa-arrow-right"></i></a>
                </div>
        </div>
    </div>

    <div class="row col-12 col-md-3 col-auto p-0 ocultar-movil">
{{--         <div class="col-9 text-center">
                <a href="{{ url('/')}}" class="btn btn-warning btn-lg">
                    Seguir Comprando
                </a>
        </div> --}}
        <div class="col-12 p-0">
                <div class="col-auto text-center p-0" style="border: solid 1px #dbdbdb;">
                    <p class="h4 m-0 p-0 pt-1 pb-1" style="background-color: #dbdbdb; color: #004384;">Total a pagar</p>
                    <p class="mt-2" style="font-family: 'Open Sans Condensed', sans-serif; font-size: 1.8em;" >${{ number_format($total, 2, '.', ',') }} <span style="font-size: .6em;">usd</span> </p>
                    <a class="btn btn-primary btn-sm mb-2" style="width: 90%;" href="{{ url('en/datos-del-cliente')}}" role="button">CONTINUE <i class="fas fa-arrow-right"></i></a>
                </div>
        </div>
    </div>
    </div>
</div>




@stop
