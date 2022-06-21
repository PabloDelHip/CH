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
	<div>
		
	                <img style=" width: 70px;" src="{{ url('/img/Logotipo.png') }}" alt="logo">
	                <p style="font-size: .9em;">Nombre del condutor / titular de la reserva: <b>{{$client_data['name']}} {{$client_data['last_name']}}</b></p>
	                <p style="font-size: .9em;">Email: <b>{{$client_data['email']}}</b></p>
	                <p style="font-size: .9em;">Num. Telefono: <b>{{$client_data['phone']}}</b></p>

	</div>

	<div style="margin-top: 20px;" >
		 <b>YATE</b>
		 <br>
		 <br>
		 <span style="font-size: .8em;">MARCA y Modelo: <b>{{$datos_tour_cupon['name']}}</b>
		 <br>
		 <br>
		 <span style="font-size: .8em;">TARIFA CONTRATADA: <b>${{$datos_tour_cupon['total_sale']}}</b> usd</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: .8em;">Pago del 70% restante al abordar: <b> $@php echo $datos_tour_cupon['pago_real'] - $datos_tour_cupon['total_sale'] @endphp</b> <small>La agencia se comunicará usted al celular que dejó registrado, para agendar y coordinar el pago del 70% restando y el muelle en el que será el servicio.</small></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: .8em;">COSTO HR. EXTRA: <b>${{$datos_tour_cupon['hora_extra']}}</b></span>
		 <br>
		 <br>
		 <span style="font-size: .8em;">Fecha del servicio: <b>{{$datos_tour_cupon['date']}}</b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: .8em;">Hora de pickup:"Muelle por definir" (costos de muelle no incluidos)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size: .8em;">Horas de renta: <b>{{$datos_tour_cupon['horas_renta']}}</b></span>
	</div>

	<p style="font-size: 1.2em; color: #003A80;">Información importante para tu viaje</p>
	<span style="font-size: 1.1em; color: #003A80; font-weight: 300">CUPÓN</span>
	<p style="color: #636363; font-weight: 300; font-size: .8em;">El cupón o boucher que contiene la información de pago y los generales del servicio solicitado y que previamente fue enviado al usuario,
	deberá de portarlo durante el servicio, y en caso de requerirlo deberá ser presentado ante las autoridades correspondientes para
	acreditar la precontratación del servicio.</p>
	<br>
	<span style="font-size: 1.1em; color: #003A80; font-weight: 300">YATE</span>
	<p style="color: #636363; font-weight: 300; font-size: .8em;">El Yate en renta cuenta con póliza de cobertura amplia</p>
	<p style="color: #636363; font-weight: 300; font-size: .8em;">El tiempo de renta del yate empieza a la hora contratada; de tal manera que se le sugiere ser puntaul para que disfrute las horas de su
	servicios.</p>
	<p style="color: #636363; font-weight: 300; font-size: .8em;">La capacidad máxima de pasajeros no esta sujeto a cambios o ajustes por parte del usuarios. El capitan se reserva el derecho de
regresar con anticipación siempre y cuando haya causa justificada.
Destrozos o daños a la embarcación será notificadas y en su caso se cargara el triple sel monto total del servicio contratado.</p>
<span style="font-size: 1.1em; color: #003A80; font-weight: 300">POLITICAS DE CANCELACIÓN</span>
<p style="color: #636363; font-weight: 300; font-size: .8em;">Las tarifas y cargos informados corresponden al YATE solicitado y a la moneda nacional.</p>
<p style="color: #636363; font-weight: 300; font-size: .8em;">La CANCELACIÓN DEL SERVICIO puede realizarse sin costo si se da aviso al correo <a href="#">reservas@cancundoit.com</a> con 5 días de
anticipación, y en caso de que sean entre el día 04 y 01 antes del servicio se penalizará al usuario con el 50% del costo del servicio.</p>
<p style="color: #636363; font-weight: 300; font-size: .8em;">Los CAMBIOS DE FECHA Y/O YATE se podrán hacer sin costo si se notifican al correo <a href="#">reservas@cancundoit.com</a> con un mínimo de
05 días de anticipación, la cual estara sujeta a disponibilidad. En caso contrario, se penalizará con un 20 % del monto total del servicio
contratado, y el 80% restante será considerado y/o ajustado en otra reserva que refleje el cambio de fecha y/o pasajeros.</p>
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
