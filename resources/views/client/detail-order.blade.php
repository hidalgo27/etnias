@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu-book')
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-3">
                @include('layouts.client.menu')
            </div>
            <div class="col-12 col-md-9">
                <div class="card">
                    <div class="card-header bg-g-red-primary text-white">
                        @lang('client.resumen')
                    </div>
                    <div class="card-body">
                        <table class="w-100 table table-responsive">
                            <tbody class="">
                            @foreach($reserva_actividad as $reserva_actividades)
                            <tr>
                                <td class="font-weight-bold">@lang('client.nombre_servicio'):</td>
                                <td class="e_h1">{{ucwords(strtolower($reserva_actividades->titulo))}}</td>
                            </tr>
                            {{--<tr>--}}
                                {{--<td class="font-weight-bold">Duración:</td>--}}
                                {{--<td class="e_h1">5 horas</td>--}}
                            {{--</tr>--}}
                            <tr>
                                <td class="font-weight-bold">@lang('client.precio'):</td>
                                <td class="e_h1">${{$reserva_actividades->precio}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">@lang('client.fecha_llegada')</td>
                                <td class="e_h1">{{$reserva_actividades->reserva->fecha_llegada}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">@lang('client.numero_personas')</td>
                                <td>{{$reserva_actividades->reserva->nro_pax}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">@lang('client.estado_pago')</td>
                                <td><span class="badge badge-success">Pagado</span></td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                @if ($reserva_comida->count()>0)
                <div class="card mt-4">
                    <div class="card-header bg-secondary text-white">
                        @lang('client.comidas')
                    </div>
                    <div class="card-body">
                        <table class="w-100 table table-responsive">
                            <tbody class="">
                            @foreach($reserva_comida as $reserva_comidas)
                                <tr>
                                    <td class="font-weight-bold">@lang('client.nombre_servicio'):</td>
                                    <td class="e_h1">{{ucwords(strtolower($reserva_comidas->titulo))}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">@lang('client.precio'):</td>
                                    <td class="e_h1">${{$reserva_comidas->precio}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
                @if ($reserva_hospedaje->count()>0)
                    <div class="card mt-4">
                        <div class="card-header bg-secondary text-white">
                            @lang('client.hospedaje')
                        </div>
                        <div class="card-body">
                            <table class="w-100 table table-responsive">
                                <tbody class="">
                                @foreach($reserva_hospedaje as $reserva_hospedajes)
                                    <tr>
                                        <td class="font-weight-bold">@lang('client.nombre_servicio'):</td>
                                        <td class="e_h1">{{ucwords(strtolower($reserva_hospedajes->titulo))}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">@lang('client.precio'):</td>
                                        <td class="e_h1">${{$reserva_hospedajes->precio}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
                @if ($reserva_transporte->count()>0)
                    <div class="card mt-4">
                        <div class="card-header bg-secondary text-white">
                            @lang('client.transporte')
                        </div>
                        <div class="card-body">
                            <table class="w-100 table table-responsive">
                                <tbody class="">
                                @foreach($reserva_transporte as $reserva_transportes)
                                    <tr>
                                        <td class="font-weight-bold">@lang('client.nombre_servicio'):</td>
                                        <td class="e_h1">{{ucwords(strtolower($reserva_transportes->nombre))}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">@lang('client.ruta_salida'):</td>
                                        <td class="e_h1">{{ucwords(strtolower($reserva_transportes->ruta_salida))}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">@lang('client.ruta_llegada'):</td>
                                        <td class="e_h1">{{ucwords(strtolower($reserva_transportes->ruta_llegada))}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">@lang('client.precio'):</td>
                                        <td class="e_h1">${{$reserva_transportes->precio}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
                @if ($reserva_guia->count()>0)
                    <div class="card mt-4">
                        <div class="card-header bg-secondary text-white">
                            @lang('client.guia')
                        </div>
                        <div class="card-body">
                            <table class="w-100 table table-responsive">
                                <tbody class="">
                                @foreach($reserva_guia as $reserva_guias)
                                    <tr>
                                        <td class="font-weight-bold">@lang('client.nombre_servicio'):</td>
                                        <td class="e_h1">{{ucwords(strtolower($reserva_guias->nombre))}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">@lang('client.precio'):</td>
                                        <td class="e_h1">${{$reserva_guias->precio}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
