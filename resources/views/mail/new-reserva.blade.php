<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Pago</h2>
<p>Tarjeta:{{ $reserva->numero_tarjeta_habiente }}</p>
<p>Titular:{{ $reserva->nombre }}</p>
<p>Fecha y hora:{{ $reserva->fecha_pedido }}</p>
<p>Numero de operacion:{{ $reserva->codigo }}</p>
<p>Importe:{{ $reserva->importe }}</p>
<p>Moneda:{{ $reserva->moneda }}</p>
<p>Ingrese al siguiente link para ver el detalle de su reserva <a href="#!">Ver mi reserva</a></p>
<p>Usuario:{{ $email }}</p>
<p>Contraseña:{{ $pw }}</p>
</body>
</html>
