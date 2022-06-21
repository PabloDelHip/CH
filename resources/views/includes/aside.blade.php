
<aside id="st-content-wrapper" class="col p-0 m-0">
    <div class="col-12 p-0 m-0">
        <div class="widgets style2">
            <div class="fixed-on-mobile" id="booking-request" data-screen="992px" style="width: auto;">
                <div class="form-book-wrapper relative">
                    <div class="tour-sale-box">
                        <span class="st_sale_class box_sale sale_small">{{ $operation_tour['discount_rate'] }}% </span>
                    </div>
                   <div class="form-head">
                        <div class="price">
                            <span class="label">
                            Adulto:
                        </span>
                            <span class="value">
                                <?php
                                    $tipo_moneda = 'mxn';
                                    if(session("exchangeRate") == 1) {
                                        $tipo_moneda = 'usd';
                                    }
                                    if(session("exchangeRate") == 2) {
                                        $tipo_moneda = 'eur';
                                    }
                                ?>
                                <span class="text-small lh1em item onsale ">${{ $precio }}</span><span class="text-lg lh1em item "> ${{ $precio_final_adulto }} {{ $tipo_moneda }}</span>
                            </span>
                        </div> 
                        <div class="price">
                            <span class="label">
                            Niños:
                        </span>
                            <span class="value">
                               <span class="text-lg lh1em item "> ${{ $precio_final_nino }} {{ $tipo_moneda }}</span>
                            </span>
                        </div> 
                    </div>
                    <form id="form-booking-inpage" action="{{ route('ingresar-carrito') }}" method="post" action="#booking-request" class="tour-booking-form form-has-guest-name">

                        {!! csrf_field() !!}
                        <input type="hidden" name="adult_price" value="{{ $precio_final_adulto }}">

                        <input type="hidden" name="child_price" value="{{ $precio_final_nino }}">

                        <input type="hidden" name="adult_price" value="{{ $precio_final_adulto }}">

                        <input type="hidden" name="id" value="{{ $operation_tour['id'] }}">

                        <input type="hidden" name="name" value="{{ $tour['name'] }}">

                        <input type="hidden" name="image" value="{{ $tour['url_image'] }}">

                        <div class="form-group form-date-field form-date-search clearfix " data-format="DD/MM/YYYY" data-availability-date="05/23/2021">
                            <div class="date-wrapper clearfix">
                                <div class="check-in-wrapper">
                                    <label>Fecha Tour:</label>
                                    <input name="fecha_tour"  type="text" class="form-control datepicker" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-date-field form-date-search clearfix " data-format="DD/MM/YYYY" data-availability-date="05/23/2021">
                            <div class="date-wrapper clearfix">
                                <div class="check-in-wrapper">
                                    <label>Num. Adultos:</label>
                                    <input name="num_adultos" type="number" class="form-control" id="numAdultos" value="1" min="1" max="160">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-date-field form-date-search clearfix " data-format="DD/MM/YYYY" data-availability-date="05/23/2021">
                            <div class="date-wrapper clearfix">
                                <div class="check-in-wrapper">
                                    <label>Num. Niños: (7-11)</label>
                                    <input name="num_ninos" type="number" class="form-control" id="numNinos" value="0" min="0" max="160">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-date-field form-date-search clearfix " data-format="DD/MM/YYYY" data-availability-date="05/23/2021">
                            <div class="date-wrapper clearfix">
                                <div class="check-in-wrapper">
                                    <label>Num. Infantes:</label>
                                    <input name="num_infantes" type="number" class="form-control" id="numInfantes" value="0" min="0" max="160">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block mt-3 reservando">Reservar</button>
                </form>
                                                                                    </div>
                                        

                            </div>
                        </div>
                    </div>
</aside>

<aside class="col ml-4 mt-4 p-0" style="display: none;">

    @if(preg_match("/informacion$/",request()->path()))
    <div class="card mb-4 mt-4">
            <div class="card-header text-center tituloGuardarReserva p-0 m-0 pt-2 pb-2">
                <span>Reservar</span>
            </div>
            <div class="card-body">
                <p class="card-title tituloInfoParticipantes text-center"><i class="fas fa-users"></i> Info participantes</p>
               {{--  <form action="{{ route('ingresar-carrito') }}" method="POST">
                        {!! csrf_field() !!}
                    <div class="form-group row">
                        <label for="numAdultos" class="col-sm-7 col-form-label m-0">Num Adultos:</label>
                        <div class="col-sm-5 m-0">
                            <input name="num_adultos" type="number" class="form-control" id="numAdultos" value="1" min="1" max="160">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="numNinos" class="col-sm-7 col-form-label m-0">Num Niños <span>(7-11)</span></label>
                        <div class="col-sm-5 m-0">
                            <input name="num_ninos" type="number" class="form-control" id="numNinos" value="0" min="0" max="160">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="FechaTour">Fecha:</label>
                        <input name="fecha_tour"  type="text" class="form-control datepicker" required>
                    </div>
                    @foreach($tourInfo as $tour)
                        <input type="hidden" name="id" value="{{ $tour->id }}">
                    @endforeach</h1>
                    <button type="submit" class="btn btn-danger">Reservar</button>
                </form> --}}
				
				

                                    @if($tour['id'] < 0 )
                                        <form action="{{ route('ingresar-carrito') }}" method="POST">
                                        {{ csrf_field() }}
                                      <input type="hidden" name="id" value="21">
                                        <input type="hidden" name="servicio" value="yate">
                                        <input type="hidden" name="price" value="{{ $tour->adult_price }}">
                                        <input type="hidden" name="image" value="{{ $tour->image }}">
                                        <input type="hidden" name="name_yate" value="{{ $tour->name }}">
                                        <input type="hidden" name="hotel" value="">
                                        {{--   <div class="form-group">
                                        <label class="mb-0" for="exampleFormControlSelect1">Hotel</label>
                                        <div class="easy-autocomplete eac-description"><input class="form-control form-control-sm template-desc" name="hotel" style="width: 100%;" placeholder="Ingresar hotel" autocomplete="off" required><div class="easy-autocomplete-container" id="eac-container-template-desc"><ul></ul></div></div>
                                      </div>

                                                            <script type="text/javascript">

                                                                $('.easy-autocomplete').removeAttr('style');
                    var options = {
                    data: [@foreach($hotels as $hotel)
        {name: "{{$hotel->name}}", type: "{{$hotel->zone->name}}", icon: ""},
        @endforeach],

                    getValue: "name",

                    list: {
                        match: {
                            enabled: true
                        }
                    },

                    template: {
                        type: "description",
                        fields: {
                            description: "type"
                        }
                    }
                };

                $(".template-desc").easyAutocomplete(options);
                </script> --}}

                
                                    @if($tour['id'] == 0)
                                        <!--24-->
                                        <div class="form-group">
                                        <label class="mb-0" for="exampleFormControlSelect1">Horas de servicio</label>
                                        <select class="form-control form-control-sm" id="tipo_viaje" name="num_adultos">
                                            {{-- <option value="4">4</option>
                                            <option value="5">5</option> --}}
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                      </div>

                                    @else
                                      <div class="form-group">
                                        <label class="mb-0" for="exampleFormControlSelect1">Horas de servicio</label>
                                        <select class="form-control form-control-sm" id="tipo_viaje" name="num_adultos">
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                      </div>
                                    @endif

                                       <div class="form-group">
                                            <label class="mb-0" for="FechaTour">Fecha de servicio:</label>
                                            <input name="llegada"  type="text" class="form-control form-control-sm datepicker" required>
                                        </div>
                                        <div class="form-group" style="display: none;">
                                            <label class="mb-0" for="FechaTour">Salida:</label>
                                            <input name="salida"  type="text" class="form-control form-control-sm datepicker">
                                        </div>
                                        
                                         <button type="submit" class="btn btn-block mt-3 reservando">Reservar</button>
                                    </form>

                                    @else
                                    <form action="{{ route('ingresar-carrito') }}" method="POST">
                                        {!! csrf_field() !!}

                                        <div class="form-group">
                                        <label class="mb-0" for="exampleFormControlSelect1">Adultos</label>
                                        <select class="form-control form-control-sm" id="tipo_viaje" name="num_adultos">
                                            @if($tour['id'] == 0)
                                            <!-- 69 -->
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
                                            @else
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
                                            @endif
                                           
                                        </select>
                                      </div>

                                      @if($operation_tour['child_price']>0)
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
                                        <input type="hidden" name="precio_ninos" value="{{$operation_tour['child_price']}}">
                                    @else
                                        <input type="hidden" name="num_ninos" value="0">
                                        <input type="hidden" name="precio_ninos" value="0">
                                      @endif

                                      {{-- 
                                        <div class="form-group">
                                            <label class="mb-0" for="FechaTour">Fecha tour:</label>
                                            <input name="fecha_tour"  type="text" class="form-control form-control-sm datepicker" required>
                                        </div>
                                        <input type="hidden" name="salida" value="0">
                                        <input type="hidden" name="name_tour" value="{{$tour->name}}">
                                        <input type="hidden" name="precio_van" value="{{ $tour->adult_price }}">
                                        <input type="hidden" name="precio_adulto" value="{{ $operation_tour['child_price'] }}">
                                        <input type="hidden" name="hotel" value="0">
                                        <input type="hidden" name="llegada" value="0">
                                        <input type="hidden" name="id" value="{{ $tour->id}}">
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
                                        </style> --}}
                                    </form>
                                    @endif


                                     



            </div>
        </div>
    @else
        <div class="row p-0 m-0">
            {{--  <div class="card text-center">
                  <h5 class="card-header p-1 tituloBuscar">Busca Tour</h5>
                  <div class="card-body pt-2 m-0">
                      <select class="js-example-basic-single" name="state">
                          <optgroup label="Arqueología Maya">
                              <option value="AL">Alabama</option>
                              <option value="WY">Wyoming</option>
                          </optgroup>
                          <optgroup label="Arqueología Maya">
                              <option value="AL">Alabama</option>
                              <option value="WY">Wyoming</option>
                          </optgroup>
                          <optgroup label="Arqueología Maya">
                              <option value="AL">Alabama</option>
                              <option value="WY">Wyoming</option>
                          </optgroup>
                    </select>
                    <a href="#" class="btn btn-primary   mt-4">Ver Tour</a>
                  </div>
            </div>  --}}
        </div>
        <!-- Buscar tour -->
    @endif

    <div class="row p-0 ml-1 mt-3 mb-3">
            <img src="{{ url('/img/pay-pal-imagen.png') }}" alt="pay-pal" style="height: 50px;">
            {{-- <img class="mt-2" src="{{ url('/img/sistema-apartado.png') }}" alt="pay-pal" style="height: 65px;"> --}}
        </div>

    {{-- @if(request()->path()=='/') --}}

					{{-- <div class="row ">
						<div class=" col-12 p-0 m-0 text-center titulo-promociones">
							<h3 class="m-0 p-1 h5">Tours en promoción de Cancún</h3>
						</div>

						<div class=" col-12 p-0 m-0 mt-2 contenido-promociones">
							<a href="#">
								<div class="row p-0 m-0">
									<div class="col-4 p-0 m-0">
										<img src="http://placeimg.com/82/75/nature" alt="xcaret" class=" p-0 m-0">
									</div>
									<div class="col-8 p-0 m-0" >
										<h3 class="m-0 p-1 h6">Xplor tour</h3>
										<p class="m-0 ml-1 mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										<b class="ml-1 mt-1">
											Desde: <span>$2,300.00</span>
										</b>
									</div>
								</div>
							</a>
						</div>

						<div class=" col-12 p-0 m-0 mt-2 contenido-promociones">
							<a href="#">
								<div class="row p-0 m-0">
									<div class="col-4 p-0 m-0">
										<img src="http://placeimg.com/82/75/nature" alt="xcaret" class=" p-0 m-0">
									</div>
									<div class="col-8 p-0 m-0" >
										<h3 class="m-0 p-1 h6">Xplor tour</h3>
										<p class="m-0 ml-1 mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										<b class="ml-1 mt-1">
											Desde: <span>$2,300.00</span>
										</b>
									</div>
								</div>
							</a>
						</div>

						<div class=" col-12 p-0 m-0 mt-2 contenido-promociones">
							<a href="#">
								<div class="row p-0 m-0">
									<div class="col-4 p-0 m-0">
										<img src="http://placeimg.com/82/75/nature" alt="xcaret" class=" p-0 m-0">
									</div>
									<div class="col-8 p-0 m-0" >
										<h3 class="m-0 p-1 h6">Xplor tour</h3>
										<p class="m-0 ml-1 mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										<b class="ml-1 mt-1">
											Desde: <span>$2,300.00</span>
										</b>
									</div>
								</div>
							</a>
						</div>
					</div><!-- TOURS EN PROMOCION --> --}}

					{{-- <div class="row alojamiento">
						<div class=" col-12 p-0 m-0 ml-4 mt-3 text-center titulo-promociones">
							<h3 class="m-0 p-1 h5">Alojamiento en Cancún</h3>
						</div>

						<div class="col-12 ml-4">
							<a href="#">
								<img class="ml-5 pt-1 pb-1" src="{{ url('/img/alojamiento.png') }}" style="height: 170px;" alt="bandera de mexico">
							</a>
						</div>
					</div> --}}

</aside>
