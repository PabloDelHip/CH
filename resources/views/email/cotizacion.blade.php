<!DOCTYPE html>
<html>
<head>
	<title>Email usuario</title>
</head>
<body>
	<strong>Email formulario nosotros</strong>
	<p><b>Nombre: {{$datos['name']}}</b></p>
	<p><b>Apellidos: {{$datos['last_name']}}</b></p>
	<p><b>Email: {{$datos['email']}}</b></p>
	<p><b>Ciudad: {{$datos['city']}}</b></p>
	<p><b>Estado: {{$datos['state']}}</b></p>
	<p><b>Telefono: {{$datos['phone']}}</b></p>
	<p><b>Hotel: {{$datos['hotel']}}</b></p>
	<p><b>Comentarios: {{$datos['comments']}}</b></p>

	<hr>
	
	@foreach ($tours as $tour)
		<p><b>Tour:</b>{{$tour->name}}</p>
		<p><b>Fecha:</b>{{$tour->options->date}}</p>
		<p><b>Numero Adultos:</b>{{$tour->options->num_adult}}</p>
		<p><b>Numero Niños:</b>{{$tour->options->num_child}}</p>
		<p><b>Total:</b>{{$tour->options->total_sale}}</p>
		<hr>
	@endforeach

</body>
</html>