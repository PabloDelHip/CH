<div class="col-md-4 col-sm-12 mt-4 resumen-compra" style="background-color: #fff;">
        <div class="col-12 mt-4">
            <div class="text-center">
                <p class="h3">Resumen de compra</p>
            </div>
        </div>
        <div class="col-12 tours-compra">
            
            <?php
            $tipo_moneda = 'mxn';
            if(session("exchangeRate") == 1) {
                $tipo_moneda = 'usd';
            }
            if(session("exchangeRate") == 2) {
                $tipo_moneda = 'eur';
            }
        ?>
            @php
            $data = Cart::getContent();
        @endphp
            @if(count($data) > 0)
                <div>
                    <?php /**/ $total = 0 /**/ ?>
                    @foreach($data as $tour)
                    <div class="row datos-tour-resumen pb-3 mb-2">
                        <?php /**/ $total += $tour->attributes->total_sale /**/ ?>
                        <div class="col-5">
                            <img style="width: 100%;" src="{{ 'http://crm.caribbeanhollidays.com/api/v1/tours/images/'.$tour->attributes->image}}" alt="tour" class="img-fluid">
                        </div>
                        <div class="col-7">
                            <p>{{$tour->name}}</p>
                            <p class="text-right">${{number_format($tour->attributes->total_sale,2,".",",")}} {{ $tipo_moneda }}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-12 text-right total-resumen mt-3 p-0">
                        <p>Su Pago: ${{number_format($total,2,".",",")}} {{ $tipo_moneda }}</p>

                        @if(Request::path()=='confirmacion')
                           {{--  <a href="{{ route('payment') }}" class="btn btn-primary btn-lg btn-block mb-3">
                               Realizar pago por Pay Pal <i class="fab fa-paypal"></i>
                            </a>
                            <a href="{{ url('cupon-efectivo') }}" class="btn btn-warning btn-lg mb-3" style="width: 100%;">
                               <span style="width: 100%;" >Realizar pago Deposito Bancario <i class="fab fa-paypal"></i></span>
                               <br>
                                 <small class=" mb-3">Terminal punto de venta (físicamente en la oficina o su hotel)</small>
                            </a> --}}
                           
                        @else
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Continuar</button>
                        @endif
                    </div>

                </div>
            @else 
                <div class="row datos-tour-resumen pb-3 mb-2 mt-4">
                    <div class="col-12">
                        <h4>
                            Paquete: <span style="font-weight: 600; color: #007bff;"> {{$paquete['paquetes']['name']}} </span>
                        </h4>
                    </div>
                    <?php
                        // dd($paquete['total']);
                    ?>
                </div>
                <div class="col-12 text-right total-resumen mt-3 p-0">
                    <p>Su Pago: ${{number_format($paquete['total'],2,".",",")}} {{ $tipo_moneda }}</p>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Continuar</button>
                </div>
            @endif
        </div>
    </div>
