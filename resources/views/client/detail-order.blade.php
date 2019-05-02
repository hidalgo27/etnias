@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu-book')
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-3">
                @include('layouts.client.menu')
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header bg-g-red-primary text-white">
                        Resumen
                    </div>
                    <div class="card-body">
                        <table class="w-100 table">
                            <tbody class="">
                            @foreach($reserva_actividad as $reserva_actividades)
                            <tr>
                                <td class="font-weight-bold">Nombre de Servicio:</td>
                                <td class="e_h1">{{ucwords(strtolower($reserva_actividades->titulo))}}</td>
                            </tr>
                            {{--<tr>--}}
                                {{--<td class="font-weight-bold">Duración:</td>--}}
                                {{--<td class="e_h1">5 horas</td>--}}
                            {{--</tr>--}}
                            <tr>
                                <td class="font-weight-bold">Precio:</td>
                                <td class="e_h1">${{$reserva_actividades->precio}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Fecha de llegada</td>
                                <td class="e_h1">{{$reserva_actividades->reserva->fecha_llegada}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Numero de Personas</td>
                                <td>{{$reserva_actividades->reserva->nro_pax}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Estado de pago</td>
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
                        Comidas
                    </div>
                    <div class="card-body">
                        <table class="w-100 table">
                            <tbody class="">
                            @foreach($reserva_comida as $reserva_comidas)
                                <tr>
                                    <td class="font-weight-bold">Nombre de Servicio:</td>
                                    <td class="e_h1">{{ucwords(strtolower($reserva_comidas->titulo))}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Precio:</td>
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
                            Hospedaje
                        </div>
                        <div class="card-body">
                            <table class="w-100 table">
                                <tbody class="">
                                @foreach($reserva_hospedaje as $reserva_hospedajes)
                                    <tr>
                                        <td class="font-weight-bold">Nombre de Servicio:</td>
                                        <td class="e_h1">{{ucwords(strtolower($reserva_hospedajes->titulo))}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Precio:</td>
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
                            Transporte
                        </div>
                        <div class="card-body">
                            <table class="w-100 table">
                                <tbody class="">
                                @foreach($reserva_transporte as $reserva_transportes)
                                    <tr>
                                        <td class="font-weight-bold">Nombre de Servicio:</td>
                                        <td class="e_h1">{{ucwords(strtolower($reserva_transportes->nombre))}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Ruta Salida:</td>
                                        <td class="e_h1">{{ucwords(strtolower($reserva_transportes->ruta_salida))}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Ruta LLegada:</td>
                                        <td class="e_h1">{{ucwords(strtolower($reserva_transportes->ruta_llegada))}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Precio:</td>
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
                            Guia
                        </div>
                        <div class="card-body">
                            <table class="w-100 table">
                                <tbody class="">
                                @foreach($reserva_guia as $reserva_guias)
                                    <tr>
                                        <td class="font-weight-bold">Nombre de Servicio:</td>
                                        <td class="e_h1">{{ucwords(strtolower($reserva_guias->nombre))}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Precio:</td>
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
