@extends('layout')

@section('contenido')


@php
    $data = Cart::getContent();
@endphp
{{-- {{ dd(Cart::content()) }} --}}
<?php /**/ $total = 0 /**/ ?>
<div class="container mt-5" >
    <div class="row">
        <div class="col-12 col-md-9 m-0 mr-md-3 p-0 p-md-2">
            {{-- {{dd(Cart::content())}} --}}
        @forelse($data as $tour)
        <?php /**/ $total += $tour->attributes->total_sale /**/ ?>
        <div class="row col-12 contenedor-carrito m-0 mr-md-2">
            <div class="col-md-3 col-sm-12 pt-3">
                <img style="width: 100%;" src="{{ 'http://crm.caribbeanhollidays.com/api/v1/tours/images/'.$tour->attributes->image}}" alt="tour" class="img-fluid">
            </div>
             @if($tour->attributes->transportacion=='0')
                <div class="col-md-5 col-sm-12 info-tour-pasos pt-3">
                    <p class="h4">{{ $tour->name }}</p>
                    <p class=" m-0 mb-1">Numero de adultos: {{$tour->attributes->num_adult }} </p>
                    <p class=" m-0 mb-1">Numero de niños: {{$tour->attributes->num_child }} </p>
                    <p class=" m-0 mb-1">Numero de infantes: {{$tour->attributes->num_infantes }} </p>
                    <p class=" m-0 mt-2 mb-1">Fecha del tour: {{$tour->attributes->date }} </p>
                    
                </div>
            @elseif($tour->attributes->salida=='' && $tour->attributes->transportacion != 'transportacion')
                <div class="col-md-5 col-sm-12 info-tour-pasos pt-3">
                    <p class="h4">Yate: {{ $tour->name }}</p>
                    <p class=" m-0 mt-2 mb-1">Dia del servicio: {{$tour->attributes->date }} </p>
                    {{-- <p class=" m-0 mt-2 mb-1">Fecha final de renta: {{$tour->attributes->salida }} </p> --}}
                </div>
            @elseif($tour->attributes->hotel=='sin hotel')

                <div class="col-md-5 col-sm-12 info-tour-pasos pt-3">
                    <p class="h4">Renta de auto: {{ $tour->name }}</p>
                    <p class=" m-0 mt-2 mb-1">Fecha incio de renta: {{$tour->attributes->date }} </p>
                    <p class=" m-0 mt-2 mb-1">Fecha final de renta: {{$tour->attributes->salida }} </p>
                </div>
           
            
            @elseif($tour->attributes->transportacion)

                <div class="col-md-5 col-sm-12 info-tour-pasos pt-3">
                    <p class="h4">{{ $tour->name }}</p>
                    <p class=" m-0 mb-1">Numero de personas: {{$tour->attributes->num_adult }} </p>
                    <p class=" m-0 mb-1">Destino: {{$tour->attributes->hotel }} </p>
                    <p class=" m-0 mt-2 mb-1">Llegada: {{$tour->attributes->date }} </p>
                    @if ($tour->attributes->salida!='')
                        <p class=" m-0 mt-2 mb-1">Salida: {{$tour->attributes->salida }} </p>
                    @endif



                </div>

            @else

                <div class="col-md-5 col-sm-12 info-tour-pasos pt-3">
                    <p class="h4">{{ $tour->name }}</p>
                    <p class=" m-0 mt-2 mb-1">Fecha del tour: {{$tour->attributes->date }} </p>
                    <p class=" m-0 mb-1">Numero de Adulto: {{$tour->attributes->num_adult }} </p>

                    {{-- <p class="m-0 mb-1">Precio tour: <b>$ {{$tour->attributes->adult_price }}</b> <span>USD</span> </p>
                    <p>Total a pagar: <b>$ {{$tour->attributes->total_adult_price }}</b> <span>USD</span> </p> --}}

                    <p class=" m-0 mb-1">Numero de Niños: {{$tour->attributes->num_child }}</p>
                   {{--  <p class="m-0 mb-1">Precio tour: <b>$ {{$tour->attributes->child_price }}</b> <span>USD</span> </p>
                    <p>Total a pagar: <b>$ {{$tour->attributes->total_child_price }}</b> <span>USD</span> </p> --}}


                </div>

            @endif

            <?php
                $tipo_moneda = 'mxn';
                if(session("exchangeRate") == 1) {
                    $tipo_moneda = 'usd';
                }
                if(session("exchangeRate") == 2) {
                    $tipo_moneda = 'eur';
                }
            ?>
            <div class="col-md-4 col-sm-12 text-right pasos-total-pagar pt-3 text-center" >
                @if($tour->attributes->tipo_cupon=='yate')
                    <p>Pago Total: $ {{$tour->attributes->pago_real }} {{ $tipo_moneda }}</p>
                    <p>Pendiente a pagar al momento del servicio: $ @php
                        echo ($tour->attributes->pago_real-$tour->attributes->total_sale);
                    @endphp </p>
                    <p style="font-family: 'Open Sans Condensed', sans-serif; font-size: 1.2em;"><span>Deposito: </span><b>$ {{$tour->attributes->total_sale }}</b> <span>usd</span>
                            <a class="ocultar ver-movil basura-movil" href="{{ url("{$tour->rowId}", "eliminar-tour") }}">
                                <p  class="p-0"><i class="far fa-trash-alt"></i></p>
                            </a>
                    </p>

                @else
                    @if($tour->id > 28 && $tour->id < 33 )
                        <p style="font-size: .5em; color: #666;"><b>PAGO POR MUELLE: 14 usd <br>
                        MENORES DE 2 A 12 AÑOS: 10 usd</b></p>
                        <p class="m-0">Adultos: <span style="color: red;">{{$tour->attributes->num_adult}}</span></p>
                        <p class="m-0">Niños: <span style="color: red;">{{$tour->attributes->num_child}}</span></p>
                        <p class="mt-1" >Sub Total boletos: <span style="color: red;">$ {{$tour->attributes->pago_real }}</span>.usd</p>
                        <p class="mt-1" >Sub Total Muelle: <span style="color: red;">$ {{$tour->attributes->muelle_total }}</span>.usd</p>
                         <p class="mt-1" style="border-top: 1px solid #dbdbdb;" >Total de la reserva: <span style="color: red;">$ @php
                             echo ($tour->attributes->pago_real + $tour->attributes->muelle_total);
                         @endphp</span>.usd</p>
                         <p class="mt-1" style="border-top: 1px solid #dbdbdb;" >Deposito: <span style="color: red;">$ {{$tour->attributes->total_sale }}</span>.usd</p>
                        <p class="mt-1" >Pago en taquilla:
                            <span style="color: red;">
                                $ 
                                @php
                                     $pago_taquilla = ($tour->attributes->muelle_total + $tour->attributes->pago_real) - $tour->attributes->total_sale; 
                                     echo $pago_taquilla;
                                 @endphp 
                               
                            </span>.usd
                        </p>
                        {{-- <p style="font-family: 'Open Sans Condensed', sans-serif; font-size: 1.2em;"><span>Pagar en linea:</span><b>$ {{$tour->attributes->total_sale }}</b> <span>usd</span> --}}

                    @else
                        <h4>Pago Total: $ {{$tour->attributes->total_sale }} {{ $tipo_moneda }}</h4>
                    @endif


                           {{--  <a class="ocultar ver-movil basura-movil" href="{{ url("{$tour->rowId}", "eliminar-tour") }}">
                                <p  class="p-0"><i class="far fa-trash-alt"></i></p>
                            </a> --}}
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
                <p class="h2">Carrito de compras vacio</p>
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
                    <p class="h4 m-0 p-0 pt-1 pb-1" style="background-color: #dbdbdb; color: #004384;">Total a pagar</p>
                    <p class="mt-2" style="font-family: 'Open Sans Condensed', sans-serif; font-size: 1.8em;" >${{ number_format($total, 2, '.', ',') }} <span style="font-size: .6em;">{{ $tipo_moneda }}</span> </p>
                    <a class="btn btn-primary btn-sm mb-2" style="width: 90%;" href="{{ url('/datos-del-cliente')}}" role="button">CONTINUAR <i class="fas fa-arrow-right"></i></a>
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
                    <p class="mt-2" style="font-family: 'Open Sans Condensed', sans-serif; font-size: 1.8em;" >${{ number_format($total, 2, '.', ',') }} <span style="font-size: .6em;">{{ $tipo_moneda }}</span> </p>
                    <a class="btn btn-primary btn-sm mb-2" style="width: 90%;" href="{{ url('/datos-del-cliente')}}" role="button">CONTINUAR <i class="fas fa-arrow-right"></i></a>
                </div>
        </div>
    </div>
    </div>
</div>




@stop
