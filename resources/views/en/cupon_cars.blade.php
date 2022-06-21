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
			@if($efectivo!='')
			<h3>PENDIENTE DE PAGO - VALIDAR CON AGENCIA</h3>
			@endif

		</div>
	
	<div>
		
	                <img style=" width: 70px;" src="{{ url('/img/Logotipo.png') }}" alt="logo">
	                <p style="font-size: .9em;">Nombre del condutor / titular de la reserva: <b>{{$client_data['name']}} {{$client_data['last_name']}}</b></p>
	                <p style="font-size: .9em;">Email: <b>{{$client_data['email']}}</b></p>
	                <p style="font-size: .9em;">Num. Telefono: <b>{{$client_data['phone']}}</b></p>

	</div>

	<div style="margin-top: 20px;" >
		 <b>AUTO</b>
		 <br>
		 <br>
		 <span style="font-size: .8em;">MARCA y Modelo: <b>{{$datos_tour_cupon['name']}}</b></span>
		 <br>
		 <br>
		 <span style="font-size: .8em;">TARIFA DIARIA: <b>{{$datos_tour_cupon['tarifa_diaria']}}</b> mxn</span>
		 <br>
		 <br>
		 <span style="font-size: .8em;">Fecha de entrega: <b>{{$datos_tour_cupon['date']}}</b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: .8em;"> Lugar y hora de entrega: <b>Por confirmar</b> <small>(para confirmar enviar correo a: reservas@cancundoti.com.)</small></span>
	</div>

	<p style="font-size: 1.2em; color: #003A80;">Información importante para tu viaje</p>
	<span style="font-size: 1.1em; color: #003A80; font-weight: 300">CUPÓN</span>
	<p style="color: #636363; font-weight: 300; font-size: .8em;">El cupón o boucher que contiene la información de pago y los generales del servicio solicitado y que previamente fue enviado al usuario,
	deberá de portarlo durante el servicio, y en caso de requerirlo deberá ser presentado ante las autoridades correspondientes para
	acreditar la precontratación del servicio.</p>
	<br>
	<span style="font-size: 1.1em; color: #003A80; font-weight: 300">CARRO EN RENTA</span>
	<p style="color: #636363; font-weight: 300; font-size: .8em;">La rentadora garantizará la reserva del vehículo hasta 1 hora despúes del horario previsto para retirarlo. Después de este plazo la
reserva puede ser cancelada. En caso de no presentarse, perderá el motno pre-cobrado en su tarjeta de crédito.</p>
	<p style="color: #636363; font-weight: 300; font-size: .8em;">Por favor, pasado este tiempo diríjase a la oficina de la agencia para verificar el estado de su reserva.</p>
	<p style="color: #636363; font-weight: 300; font-size: .8em;">El conductor deberá presentar una licencia de conductor válida y una tarjeta de crédito a su nombre al momento de retirar el vehículo.
Sobre la misma, se realizará el bloqueo correspondiente a modo de garantía.</p>
<span style="font-size: 1.1em; color: #003A80; font-weight: 300">POLITICAS DE CANCELACIÓN</span>
<p style="color: #636363; font-weight: 300; font-size: .8em;">Las tarifas y cargos informados corresponden al VEHICULO solicitado y a la moneda nacional.</p>
<p style="color: #636363; font-weight: 300; font-size: .8em;">La CANCELACIÓN DEL SERVICIO puede realizarse sin costo si se da aviso al correo <a href="#">reservas@cancundoit.com</a> con 5 días de
anticipación, y en caso de que sean entre el día 04 y 01 antes del servicio se penalizará al usuario con el 50% del costo del servicio.</p>
<p style="color: #636363; font-weight: 300; font-size: .8em;">Los CAMBIOS  se podrán hacer sin costo si se notifican al correo <a href="#">reservas@cancundoit.com</a> con un mínimo de
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
