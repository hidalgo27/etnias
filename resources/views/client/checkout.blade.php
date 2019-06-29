@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu-book')
<div class="container">
    <div class="row justify-content-center mt-2 mb-5">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-g-green-primary text-white">{{ __('Pago finalizado correctamente') }}</div>
                <div class="card-body">
                    <p><b>Por favor imprimir estos datos</b></p>
                    <p><b>Tarjeta:</b>{{ $reservas->numero_tarjeta_habiente }}</p>
                    <p><b>Titular:</b>{{ $reservas->nombre }}</p>
                    <p><b>Fecha y hora:</b>{{ $reservas->fecha_pedido }}</p>
                    <p><b>Numero de operacion:</b>{{ $reservas->codigo }}</p>
                    <p><b>Importe:</b>{{ $reservas->importe }}</p>
                    <p><b>Moneda:</b>{{ $reservas->moneda }}</p>
                    <p><b>DETALLE</b></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
