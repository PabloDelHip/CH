@extends('layout')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="col-12">
                  @if(Session::get('message'))
                    <div class="alert alert-danger">
                      {{ Session::get('message')  }}
                    </div>
                  @endif
                </div>
              </div>
            <div class="col-md-8 col-sm-12 mt-4">
                <div class="card">
                    <div class="card-header">
    
                        

                        Datos del titular
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-sm">
                            <tbody>
                                <tr>
                                    <th scope="row">Nombre:</th>
                                    <td>{{$client_data['name']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Apellido:</th>
                                    <td>{{$client_data['last_name']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email:</th>
                                    <td>{{$client_data['email']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Pais:</th>
                                    <td>Mexico</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ciudad:</th>
                                    <td>{{$client_data['city']}} {{$client_data['state']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Num. Telefono:</th>
                                    <td>{{$client_data['phone']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Hotel:</th>
                                    <td>{{$client_data['hotel']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Comentarios:</th>
                                    <td>{{$client_data['comments']}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 row">
                    <div class="col-md-3 col-12">
                        <a href="{{ route('payment') }}" style="font-size: 1em;" class="btn btn-primary btn-lg btn-block mb-3">
                          Pago por Pay Pal <i class="fab fa-paypal"></i>
                        </a>    
                    </div>

                    <div class="col-md-6 col-12">
                        <a href="{{ url('cupon-efectivo') }}" style="font-size: 1em;" class="btn btn-warning btn-lg mb-3" style="width: 100%;">
                           <span style="width: 100%;" > Pago Efectivo - Terminal Punto de Venta </span>
                           {{-- <br>
                             <small class=" mb-3">Terminal punto de venta (físicamente en la oficina o su hotel)</small> --}}
                        </a>
                    </div>
{{--                     <div class="col-md-3 col-12">
                        <a href="javascript: void(0)" id="pago_online" style="font-size: 1em;" class="btn btn-success btn-lg btn-block mb-3">
                          Pago Online
                        </a>    
                    </div> --}}

                </div>
            </div>
            @include('includes.detalles-venta')

             <div class="bkng-tb-cntnt" style="display:none;">
        <div class="pymnts">
            <form action="{{url('open_pay')}}" method="POST" id="payment-form">
                 {{ csrf_field() }}
                <input type="hidden" name="token_id" id="token_id">
                <div class="pymnt-itm card active">
                    <h2>Tarjeta de crédito o débito</h2>
                    <div class="pymnt-cntnt">
                        <div class="card-expl">
                            <div class="credit"><h4>Tarjetas de crédito</h4></div>
                            <div class="debit"><h4>Tarjetas de débito</h4></div>
                        </div>
                        <div class="sctn-row">
                            <div class="sctn-col l">
                                <label>Nombre del titular</label><input type="text" placeholder="Como aparece en la tarjeta" autocomplete="off" data-openpay-card="holder_name">
                            </div>
                            <div class="sctn-col">
                                <label>Número de tarjeta</label><input type="text" autocomplete="off" data-openpay-card="card_number" maxlength="16"></div>
                            </div>
                            <div class="sctn-row">
                                <div class="sctn-col l">
                                    <label>Fecha de expiración</label>
                                    <div class="sctn-col half l"><input type="text" placeholder="Mes" data-openpay-card="expiration_month" maxlength="2"></div>
                                    <div class="sctn-col half l"><input type="text" placeholder="Año" data-openpay-card="expiration_year" maxlength="2"></div>
                                </div>
                                <div class="sctn-col cvv"><label>Código de seguridad</label>
                                    <div class="sctn-col half l"><input type="text" placeholder="3 dígitos" autocomplete="off" data-openpay-card="cvv2" maxlength="4"></div>
                                </div>
                            </div>
                            <div class="openpay"><div class="logo">Transacciones realizadas vía:</div>
                            <div class="shield">Tus pagos se realizan de forma segura con encriptación de 256 bits</div>
                        </div>
                        <div class="sctn-row">
                                <a class="button rght" id="pay-button">Pagar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
            </div>
        </div>
    </div>


@stop
