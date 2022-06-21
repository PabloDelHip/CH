


 <?php
$client_data = session('client-data');
?>
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400');
</style>

<span style="font-family: 'Open Sans', sans-serif;">
<div style="width: 100%; height: 97%;">

            <div style="text-align: right;">
                <img style="float: left;  margin-top: 20px; width: 70px;" src="{{ url('/img/Logotipo.png') }}" alt="logo">
                <p style="float: right; margin-top: 20px;">
                    <b style="font-size: 18px;">Cupón</b>
                    <br>
                </p>
            </div>
            <div style="clear: both;"></div>
            <div style=" width: 100%; ">
                <p style="color: #06749f;"><span style="font-weight: bold; color: #000;">Nombre: </span>{{$client_data['name']}} {{ $client_data['last_name'] }}</p>
            </div>
            
             @foreach(Cart::content() as $tour)
                     <div style="border: solid 1px; margin-bottom: 10px;">
                <table style="width: 100%; font-size: 14px;">
                    <thead>
                        <tr>
                            <th> @if($tour->options->tipo_cupon=='transportacion') Transportación @else Servicios reservados @endif</th>
                            <th>Fecha</th>
                            <th>Lugar de cita</th>
                            @if($tour->options->tipo_cupon=='yate')
                                <th>Pago total</th>
                                <th> 30% total</th>
                            @else
                                <th>total</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody style="color: #06749f;">
                       
                        
                        <tr>
                            
                            <td>{{$tour->name}}</td>
                            <td>{{$tour->options->date}}</td>
                            <td>{{$client_data['hotel']}}</td>
                            @if($tour->options->tipo_cupon=='yate')
                                <td>${{$tour->options->pago_real}} mxn</td>
                                <td> ${{$tour->options->total_sale}} mxn</td>
                            @else
                                <td>${{$tour->options->total_sale}} mxn</td>
                            @endif
                            
                        </tr>
                    </tbody>
                </table>
            </div>       
            @endforeach

            
    <b>*SE RESPETAN PRECIOS Y DISPONIBILIDAD DE LO RESERVADO HASTA UN MÁXIMO DE 24 HORAS HÁBILES</b>
    <br>
    <p style="font-size: 1.2em; color: #003A80;">Información importante</p>
    <span style="font-size: 1.1em; color: #003A80; font-weight: 300">DEPOSITO</span>
    <p style="color: #636363; font-weight: 300; font-size: .8em;">El total de los servicios reservados deberán ser pagados en la siguiente cuenta cuando mucho un día siguiente a la generación de la
reserva correspondiente:</p>
    <span style="color: #636363; font-weight: 300; font-size: .8em;">Nombre del Beneficiario: ALTITUD 54 SA DE CV.</span>
    <br>
    <span style="color: #636363; font-weight: 300; font-size: .8em;">Banco: SANTANDER.</span>
    <br>
    <span style="color: #636363; font-weight: 300; font-size: .8em;">CUENTA: # 65-50642286-2</span>
    <br>
<span style="color: #636363; font-weight: 300; font-size: .8em;">CLABE:  014691655064228623</span>
<br>
<p style="color: #636363; font-weight: 300; font-size: .8em;">Una vez realizado el deposito correspondiente; el presente cupon y el baucher del depósito deberá ser enviado el correo
<a href="#">reservas@cancundoit.com</a>, para confirmar los sevicios.</p>
<p style="color: #636363; font-weight: 300; font-size: .8em;">En caso de que el pago lo quiera realizar con cargo a su tarjeta de crédito o débito en una terminal de la agencia, deberá notificarlo
al correo <a href="#">reservas@cancundoit.com</a> y deberá concertar una cita a la brevedad posible y antes de la realización de los servicios
solicitados.</p>
<p style="color: #636363; font-weight: 300; font-size: .8em;">Para concretar la cita referida en el punto anterior, deberá proporcionar información de contacto en el correo citado, tales como
celular, correo electrónico, telefono de hotel y habítación en su caso.</p>
<p style="color: #636363; font-weight: 300; font-size: .8em;">El pago con terminal de punto de venta, tiene las siguientes comisiones mismas que se cargarán al total de la reserva en el
momento de hacer el pago correspondiente.</p>
<span style="color: #636363; font-weight: 300; font-size: .8em;">Cargo Regular (1 solo pago). 4.36%</span>
    <br>
    <span style="color: #636363; font-weight: 300; font-size: .8em;">Cargo a 3 MESES SIN INTERESES 5.51%</span>
    <br>
    <span style="color: #636363; font-weight: 300; font-size: .8em;">Cargo a 6 MESES SIN INTERESES 9.53%</span>
    <br>
<span style="color: #636363; font-weight: 300; font-size: .8em;">Cargo a 9 MESES SIN INTERESES 12.97%</span>
<br>
<span style="color: #636363; font-weight: 300; font-size: .8em;">Cargo a 12 MESES SIN INTERESES 16.10%</span>
<br>
<div>
    <span style="font-size: 1.1em; color: #003A80; font-weight: 300">DATOS GENERALES</span>
<span  style="color: #636363; font-weight: 300; font-size: .8em;">
    <br>
    Para dudas, quejas y/o sugerencias <a href="#">enrique.o@cancundoit.com</a>
    <br>
Cambios y Cancelaciones <a href="#">reservas@cancundoit.com</a>
<br>
Telefono Oficina: (998) 500 70 93
<br>
Horario de atención a clientes:
<br>
Lunes a Viernes de 8:00 a 19:00 hrs.
<br>
Sábado de 08:00 a 14:00 hrs.
<br>
Horario en el Estado de Quintana Roo (GMT-5)
</span>
</div>
<p style="color: #000; font-weight: 300; font-size: .8em;">La agencia y sus representantes actúan únicamente como agentes intermediarios de compañías de transportación, parques,
restaurantes y otros prestadores de servicios, y no tiene responsabilidad alguna en caso de pérdidas, daños, accidentes, cambios de
horario, demoras u otras irregularidades originadas por causas ajenas a la agencia. En cuyo caso el único responsable será el prestador
final del servicio.
En caso de algún inconveniente, por favor repórtelo con nosotros de inmediato o a más tardar dentro de los 5 días posteriores del
servicio recibido para la aclaración pertinente.</p>

<div style="text-align: center;">
    <span style="color: #636363; font-weight: 300; font-size: .8em;">Saludos cordiales.
        <br>
Equipo de Cancun Do It!</span>
</div>

</span>