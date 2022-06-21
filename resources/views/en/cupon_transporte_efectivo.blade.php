
<?php
$client_data = session('client-data');
$datos_cupon = session('datos_cupon');
$datos_tour_cupon = session('datos_tour_cupon');
$efectivo = session('efectivo');
?>
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400');
</style>

<span style="font-family: 'Open Sans', sans-serif;">
    <div style="text-align: center;">

            <h3>PENDIENTE DE PAGO - VALIDAR CON AGENCIA</h3>
            
        </div>
<div style="width: 100%; height: 97%;">

            <div style="text-align: right;">
                <img style="float: left;  margin-top: 20px; width: 70px;" src="{{ url('/img/Logotipo.png') }}" alt="logo">
                <p style="float: right; margin-top: 20px;">
                    <b style="font-size: 18px;">Cupón</b>
                    <br>
                    <span style="font-size: 18px; color: red; font-weight: bold">{{$datos_cupon['num_cupon']}}-{{$datos_cupon['numGeneradoCupon']}}</span>
                    <br>
                </p>
            </div>
            <div style="clear: both;"></div>
            <div style=" width: 100%; ">
                <p style="color: #06749f;"><span style="font-weight: bold; color: #000;">Nombre: </span>{{$client_data['name']}} {{$client_data['last_name']}}</p>
                <p style="font-size: .9em;">Email: <b>{{$client_data['email']}}</b></p>
                <p style="font-size: .9em;">Num. Telefono: <b>{{$client_data['phone']}}</b></p>
            </div>
            <div style="border: solid 1px;">
                <table style="width: 100%; font-size: 14px;">
                    <thead>
                        <tr>
                            <th>Transportación</th>
                            <th>Fecha</th>
                            <th>Ad</th>
                            <th>Niñ</th>
                            <th>PICK UP</th>
                            <th>Hotel</th>
                        </tr>
                    </thead>
                    <tbody style="color: #06749f;">
                        <tr>
                            <td>{{$datos_tour_cupon['name']}}</td>
                            <td>{{$datos_tour_cupon['date']}}</td>
                            <td>{{$datos_tour_cupon['num_adult']}}</td>
                            <td>{{$datos_tour_cupon['num_child']}}</td>
                            <td>{{$client_data['vuelo']}} - {{$client_data['hora_de_llegada']}}</td>
                            <td>{{$client_data['hotel']}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

    <p style="font-size: 1.2em; color: #003A80;">Información importante para tu viaje</p>
    <span style="font-size: 1.1em; color: #003A80; font-weight: 300">CUPÓN</span>
    <p style="color: #636363; font-weight: 300; font-size: .8em;">El cupón o boucher que contiene la información de pago y los generales del servicio solicitada y que previamente fue enviado al usuario,
deberá de portarlo durante el servicio, y en caso de requerirlo deberá ser presentado ante las autoridades correspondientes para
acreditar la precontratación del servicio.</p>
    <br>
    <span style="font-size: 1.1em; color: #003A80; font-weight: 300">TRANSPORTE</span>
    @if($datos_tour_cupon['name'] == 'Sencillo - Aeropuerto al Hotel')
        <p style="color: #636363; font-weight: 300; font-size: .8em;"> <b>Favor de dirigirse a la seccion de transporte y buscar el letrero con su nombre y el logo de la Agencia CANCUN DO IT</b></p>
    @elseif($datos_tour_cupon['name'] == 'Sencillo - Hotel al Aeropuerto')
        <p style="color: #636363; font-weight: 300; font-size: .8em;"> <b>Favor de mandar un correo a <a href="#">reservas@cancundoit.com</a> almenos 24 horas antes del servicio, para confirmar la hora, día y lugar del pick up. En caso de no enviar el correo la agencia no se hace responsable de que no haga en el pick up.</b></p>
    @endif
    
                       
    
    <p style="color: #636363; font-weight: 300; font-size: .8em;">El servicio de transporte se hace en camioneta con permiso de autotransporte federal de turismo con la capacidad mínimo
requerida en su solicitud.</p>
    <p style="color: #636363; font-weight: 300; font-size: .8em;">Todo los pasajeros durante el trayecto requerido estan protegidos con una póliza de responsabilidad civil por viajero por hasta 3,160
días de salarios mínimos general vigente.</p>
    <p style="color: #636363; font-weight: 300; font-size: .8em;">Los choferes cuantan con licencia federal vigente así como un certíficado médico que avala la capacidad física y técnica para la
realización del servicio.</p>
<p style="color: #636363; font-weight: 300; font-size: .8em;">Para evitar atrasos, le aconsejamos estar en el lugar y hora indicada en su solicitud; el transporte estará en el lugar indicado 10 minutos
antes de la hora solicitada y esperará a los pasajeros hasta un màximo de 30 minutos despues de la hora indicada. En caso de no estar,
parte o la totalidad de los pasajeros, el servicio se hará con los pasajeros que se encuentren en el sitio acordado.</p>
<span style="font-size: 1.1em; color: #003A80; font-weight: 300">POLITICAS DE CANCELACIÓN</span>
<p style="color: #636363; font-weight: 300; font-size: .8em;">Las tarifas y cargos informados corresponden al TRANSPORTE solicitado y a la moneda nacional.</p>
<p style="color: #636363; font-weight: 300; font-size: .8em;">La CANCELACIÓN DEL SERVICIO puede realizarse sin costo si se da aviso al correo <a href="#">reservas@cancundoit.com</a> con 5 días de
anticipación, y en caso de que sean entre el día 04 y 01 antes del servicio se penalizará al usuario con el 50% del costo del servicio.</p>
<p style="color: #636363; font-weight: 300; font-size: .8em;">Los CAMBIOS DE FECHA Y/O  PASAJAEROS se podrán hacer sin costo si se notifican al correo <a href="#">reservas@cancundoit.com</a> con un mínimo de
05 días de anticipación, la cual estara sujeta a disponibilidad. En caso contrario, se penalizará con un 20 % del monto total del servicio
contratado, y el 80% restante será considerado y/o ajustado en otra reserva que refleje el cambio de fecha y/o pasajeros.</p>
<p style="color: #636363; font-weight: 300; font-size: .8em;">Ver condiciones del contrato anexo.</p>
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