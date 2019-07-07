@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu-book')
<div class="container">
    <div class="row justify-content-center mt-2 mb-5">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-g-green-primary text-white">@lang('client.pago_finalizado_correctamente')</div>
                <div class="card-body">
                    <p><b>@lang('client.imprimir_datos')</b></p>
                    <p><b>@lang('client.tarjeta'):</b>{{ $reservas->numero_tarjeta_habiente }}</p>
                    <p><b>@lang('client.titular'):</b>{{ $reservas->nombre }}</p>
                    <p><b>@lang('client.titular'):</b>{{ $reservas->fecha_pedido }}</p>
                    <p><b>@lang('client.numero_operacion'):</b>{{ $reservas->codigo }}</p>
                    <p><b>@lang('client.importe'):</b>{{ $reservas->importe }}</p>
                    <p><b>@lang('client.moneda'):</b>{{ $reservas->moneda }}</p>
                    <hr>
                    <p><b>@lang('client.actividad'):</b> {{$reserva_actividad->titulo}}</p>
                    <hr>
                    <p>@lang('client.revise_acceda') <a href="{{ route('login') }}">MiEtnia.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
