
<aside class="col ml-4 mt-4 p-0">

    @if(preg_match("/informacion$/",request()->path()))
    <div class="card mb-4 mt-4">
            <div class="card-header text-center tituloGuardarReserva p-0 m-0 pt-2 pb-2">
                <span>Reserve</span>
            </div>
            <div class="card-body">
                <p class="card-title tituloInfoParticipantes text-center"><i class="fas fa-users"></i> Participant info</p>
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
                    <button type="submit" class="btn btn-danger">Reserve</button>
                </form> --}}
				
				<form action="{{ route('en/ingresar-carrito') }}" method="POST">
                                        {!! csrf_field() !!}

                                        <div class="form-group">
                                        <label class="mb-0" for="exampleFormControlSelect1">Adults</label>
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
                                            <label class="mb-0" for="exampleFormControlSelect1">Children</label>
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
                                            <label class="mb-0" for="FechaTour">Date tour:</label>
                                            <input name="fecha_tour"  type="text" class="form-control form-control-sm datepicker" required>
                                        </div>
                                        <input type="hidden" name="salida" value="0">
                                        <input type="hidden" name="name_tour" value="{{$tour->name}}">
                                        <input type="hidden" name="precio_van" value="{{ $tour->adult_price }}">
                                        <input type="hidden" name="precio_adulto" value="{{ $tour->adult_discount_price }}">
                                        <input type="hidden" name="hotel" value="0">
                                        <input type="hidden" name="llegada" value="0">
                                        <input type="hidden" name="id" value="{{ $tour->id}}">
                                        <input type="hidden" name="transportacion" value="0">
                                        <input type="hidden" name="image" value="{{$tour->image}}">
                                        <button type="submit" class="btn btn-block mt-3 reservando">Reserve</button>
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
                                    </form>



            </div>
        </div>
    @else
        <div class="row p-0 m-0">
        </div>
        <!-- Buscar tour -->
    @endif

    <div class="row p-0 ml-1 mt-3 mb-3">
            <img src="{{ url('/img/pay-pal-imagen.png') }}" alt="pay-pal" style="height: 50px;">
            {{-- <img class="mt-2" src="{{ url('/img/sistema-apartado.png') }}" alt="pay-pal" style="height: 65px;"> --}}
        </div>


</aside>
