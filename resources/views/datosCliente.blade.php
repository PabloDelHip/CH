@extends('layout')

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12 m-0">
            <div class="col-12 formulario-datos-cliente mt-4" style="background-color: #fff;">
                <div class="text-center">
                    <p class="h3 pt-3 pb-2">INFORMACIÓN DEL VIAJERO TITULAR</p>
                </div>
                <form action="{{ route('save-date-client') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="nombre">* Nombre(s):</label>
                            <input name="name" type="text" class="form-control form-control-sm" id="nombre" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="apellidos">* Apellidos:</label>
                            <input name="last_name" type="text" class="form-control form-control-sm" id="apellidos" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="email">* Email</label>
                            <input name="email" type="email" class="form-control form-control-sm" id="email" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="confirmar-email">* Confirmar email</label>
                            <input type="email" class="form-control form-control-sm" id="confirmar-email" required>
                          </div>
                          <div class="form-group col-md-6">
                                <label for="ciudad">Ciudad</label>
                                <input name="city" type="text" class="form-control form-control-sm" id="ciudad">
                           </div>
                           <div class="form-group col-md-6">
                                <label for="estado-region">Estado o región</label>
                                <input name="state" type="text" class="form-control form-control-sm" id="estado-region">
                           </div>
                          <div class="form-group col-md-6">
                            <label for="pais">Pais</label>
                            <select name="country" id="pais" class="form-control form-control-sm">
                                <option value="" ></option>
                                @foreach ($paises as $pais)
                                    <option value="{{$pais['id']}}">{{$pais['country']}}</option>
                                @endforeach

                            </select>
                          </div>
                          <div class="form-group col-md-6">
                                <label for="numero-telefono">Numero de teléfono</label>
                                <input name="phone" type="text" class="form-control form-control-sm" id="numero-telefono" required>
                           </div>
                           <div class="form-group col-md-6">
                                <label for="start">Fecha de nacimiento:</label>
                                <input type="date" required id="start" class="form-control form-control-sm" name="fecha_namicimiento">
                           </div>
                            <div class="form-group col-md-6">
                                <label for="genero">Genero</label>
                                <select name="genero" id="pais" class="form-control form-control-sm">
                                    <option value="" ></option>}
                                    <option value="1" >Masculino</option>
                                    <option value="2" >Femenino</option>
                                </select>
                            </div>
                            <!-- <div class="form-group col-md-6">
                                        <label class="mb-0" for="exampleFormControlSelect1">Hotel</label>
                                        <div class="easy-autocomplete eac-description"><input id="template-desc" class="form-control form-control-sm" name="hotel" style="width: 100%;" placeholder="Ingresar hotel" autocomplete="off" required><div class="easy-autocomplete-container" id="eac-container-template-desc"><ul></ul></div></div>
                                      </div> -->

                                                            <script type="text/javascript">
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

                $("#template-desc").easyAutocomplete(options);
                </script>
                           {{-- <div class="form-group col-md-6">
                                <label for="hoteles">Hotel donde planea hospedarse:</label>
                                <select name="hotel" id="hoteles" class="form-control form-control-sm">
                                        <option value=""></option>
                                        @foreach ($hotels as $hotel)
                                            <option value="{{ $hotel->name }}">{{ $hotel->name }}</option>
                                        @endforeach
                                
                                </select>
                            </div> --}}
                            @php
    $data = Cart::getContent();
@endphp
                            @foreach($data as $tour)
                                
                                @if($tour->attributes->tipo_cupon=='transportacion')
                                    <div class="form-group col-md-6">
                                        <label for="hoteles">Vuelo:</label>
                                        <input name="vuelo" type="text" class="form-control form-control-sm" id="ciudad">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="hoteles">Hora de llegada:</label>
                                        <input name="hora de llegada" type="text" class="form-control form-control-sm" id="ciudad">
                                    </div>
                                    @break
                                @endif

                            @endforeach
                            
                        </div>

                        <div class="form-group">
                                <label for="comentarios">Comentarios adicionales</label>
                                <textarea name="comments" class="form-control form-control-sm" id="comentarios" rows="5"></textarea>
                            </div>
                        <div class="form-row">

                        </div>

            </div>
        </div>
        {{-- FINAL FORMULARIO --}}
        @include('includes.detalles-venta')
    </form>
    </div>
</div>
@stop
