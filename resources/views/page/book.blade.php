@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu-book')

        {{--@foreach($actividad as $actividad)--}}
        <section class="my-4">
            <div class="container">
                <div class="row no-gutters text-center">
                    <div class="col p-3 bg-light text-truncate">
                        @php $fecha_viaje_r = str_replace('/', '-', $fecha_viaje); @endphp
                        <a class="font-weight-bold" href="{{route('detail_date_path', [str_replace(' ', '-', strtolower($actividad->titulo)), $fecha_viaje_r, $personas])}}">1. @lang('book.detail_program') <small class="font-italic">(@lang('book.itinerary'))</small></a>
                    </div>
                    <div class="col p-3 bg-g-red-dark text-white shadow-sm font-weight-bold text-truncate">
                        2. @lang('book.servicios_adicionales')
                    </div>
                    <div class="col p-3 bg-light text-truncate">
                        3. @lang('book.confirmar_pagar')
                    </div>
                </div>
            </div>
        </section>
        <form action="{{route('payment_path')}}" method="post">
            @csrf
            <input type="hidden" name="txt_actividad_id" value="{{$actividad->id}}">
            <input type="hidden" name="txt_personas" value="{{$personas}}">
            <input type="hidden" name="txt_fecha_viaje" value="{{$fecha_viaje}}">
        <section class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 font-poppins">
                        <h2 class="font-weight-bold h1 text-g-grey-primary">{{ucwords(strtolower($actividad->titulo))}}
                            {{--<span class="text-warning text-15">--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star-half-o" aria-hidden="true"></i>--}}
                                    {{--</span>--}}
                            {{--<span class="text-15 badge badge-g-red-primary">4.5</span>--}}
                        </h2>
                        <hr>
                        <div class="row my-3">
                            <div class="col font-poppins">
                                <h4 class="font-weight-bold text-g-grey-primary">@lang('book.servicios_adicionales'):</h4>
                            </div>
                        </div>
                        @if ($actividad->in_comida == 0)
                            @foreach($comidas_precio as $comida)
                                @if (isset($comida->comida))
                                    <div class="row my-3">
                                        <div class="col font-poppins">
                                            <h5 class="font-weight-bold text-g-grey-primary pb-2"><i class="fas fa-chevron-right text-g-red-primary"></i> {{ucwords(strtolower($comida->comida->titulo))}}
                                                <div class="custom-control custom-checkbox float-right text-primary">
                                                    <input type="checkbox" class="custom-control-input" name="comida[]" id="comida_{{$comida->id}}" value="{{$comida->id}}-{{round($comida->precio+($comida->precio*$comision)/100)}}-{{round($total)}}" onclick="if (this.checked) sumar_comida(this.value); else restar_comida(this.value)">
                                                    <label class="custom-control-label cursor-pointer" for="comida_{{$comida->id}}"><sup>$</sup>{{round($comida->precio+($comida->precio*$comision)/100)}}<small class="font-weight-bold">USD</small></label>
                                                </div>
                                            </h5>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif

                        @if ($actividad->in_hospedaje == 0)
                            @foreach($hospedaje_precio as $hospedaje_precios)
                                @if (isset($hospedaje_precios->hospedaje))
                                    <div class="row my-3">
                                        <div class="col font-poppins">
                                            <h5 class="font-weight-bold text-g-grey-primary pb-2"><i class="fas fa-chevron-right text-g-red-primary"></i> {{ucwords(strtolower($hospedaje_precios->hospedaje->titulo))}}

                                                <div class="custom-control custom-checkbox float-right text-primary">
                                                    <input type="checkbox" class="custom-control-input" name="hospedaje[]" id="hospedaje_{{$hospedaje_precios->id}}" value="{{$hospedaje_precios->id}}-{{round($hospedaje_precios->precio+($hospedaje_precios->precio*$comision)/100)}}-{{round($total)}}" onclick="if (this.checked) sumar_hospedaje({{round($hospedaje_precios->precio+($hospedaje_precios->precio*$comision)/100)}}); else restar_hospedaje({{round($hospedaje_precios->precio+($hospedaje_precios->precio*$comision)/100)}})">
                                                    <label class="custom-control-label cursor-pointer" for="hospedaje_{{$hospedaje_precios->id}}"><sup>$</sup>{{round($hospedaje_precios->precio+($hospedaje_precios->precio*$comision)/100)}}<small class="font-weight-bold">USD</small></label>
                                                </div>
                                            </h5>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif

                        @if ($actividad->in_transporte == 0)
                            @foreach($transportes as $transporte)
                                <div class="row my-3">
                                    <div class="col font-poppins">
                                        <h5 class="font-weight-bold text-g-grey-primary pb-2"><i class="fas fa-chevron-right text-g-red-primary"></i> @lang('join.transporte')
                                            <div class="custom-control custom-checkbox float-right text-primary">
                                                <input type="checkbox" class="custom-control-input" name="transporte[]" id="transporte_{{$transporte->id}}" value="{{$transporte->id}}-{{round($transporte->precio+($transporte->precio*$comision)/100)}}-{{$total}}" onclick="if (this.checked) sumar_transporte(this.value); else restar_transporte(this.value)">
                                                <label class="custom-control-label cursor-pointer" for="transporte_{{$transporte->id}}"><sup>$</sup>{{round($transporte->precio+($transporte->precio*$comision)/100)}}<small class="font-weight-bold">USD</small></label>
                                            </div>
                                        </h5>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @foreach($guia as $guias)
                            <div class="row my-3">
                                <div class="col font-poppins">
                                    <h5 class="font-weight-bold text-g-grey-primary pb-2"><i class="fas fa-chevron-right text-g-red-primary"></i> @lang('client.guia') ({{$guias->idioma}})
                                        <div class="custom-control custom-checkbox float-right text-primary">
                                            <input type="checkbox" class="custom-control-input" name="guia[]" id="guia_{{$guias->id}}" value="{{$guias->id}}-{{round($guias->precio+($guias->precio*$comision)/100)}}-{{$total}}" onclick="if (this.checked) sumar_guia(this.value); else restar_guia(this.value)" required>
                                            <label class="custom-control-label cursor-pointer" for="guia_{{$guias->id}}"><sup>$</sup>{{round($guias->precio+($guias->precio*$comision)/100)}}<small class="font-weight-bold">USD</small></label>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        @endforeach


                        {{--<div class="row my-3">--}}
                            {{--<div class="col font-poppins">--}}
                                {{--<h5 class="font-weight-bold text-g-grey-primary pb-2">Guia (Ingles)--}}
                                    {{--<div class="custom-control custom-checkbox float-right text-primary">--}}
                                        {{--<input type="checkbox" class="custom-control-input" id="customCheck1" checked>--}}
                                        {{--<label class="custom-control-label cursor-pointer" for="customCheck1"><sup>$</sup>50<small class="font-weight-bold">USD</small></label>--}}
                                    {{--</div>--}}
                                {{--</h5>--}}
                                {{---}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row my-3">--}}
                            {{--<div class="col font-poppins">--}}
                                {{--<h5 class="font-weight-bold text-g-grey-primary pb-2">Haz que cada día cuente--}}
                                    {{--<div class="custom-control custom-checkbox float-right text-primary">--}}
                                        {{--<input type="checkbox" class="custom-control-input" id="customCheck1">--}}
                                        {{--<label class="custom-control-label cursor-pointer" for="customCheck1"><sup>$</sup>7<small class="font-weight-bold">USD</small></label>--}}
                                    {{--</div>--}}
                                {{--</h5>--}}
                                {{--<p>Devuelve dinero mientras viajas donando $ 1 por día y ayuda a cambiar miles de vidas. El 100% de sus donaciones van directamente a donde son necesarias.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="row my-3">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-g-green-light btn-lg font-weight-bold">@lang('book.aceptar_continuar')</button>
                            </div>
                        </div>

                    </div>
                    <div class="col col-md">
                        <div class="card">
                            <div class="card-body text-center">
                                <sup>$</sup><span class="font-weight-bold display-4 h1" id="d_total_text" value="{{round($total)}}">{{round($total)}}</span><small>USD</small>
                                <input type="hidden" id="d_total" value="{{round($total)}}">
                                <small class="d-block">@lang('actividades.precio_persona')</small>
                                <hr>
                                <div class="row text-left align-items-center">
                                    <div class="col">
                                        <p class="m-0 d-block mb-1"><i class="fas fa-users h5 text-g-grey-light pr-2 float-left"></i> @lang('book.numero_personas'): {{$personas}}</p>
                                        <p class="m-0 d-block"><i class="fas fa-calendar-alt h5 text-g-grey-light pr-2"></i> @lang('home.fecha_viaje'): {{$fecha_viaje}}</p>
                                    </div>
                                </div>
                                <hr>
                                {{--<div class="row text-left align-items-center">--}}
                                    {{--<div class="col">--}}
                                        {{--<p class="m-0 d-block mb-1"><i class="fas fa-car h5 text-g-grey-light pr-2 float-left"></i> Actividad</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="col text-right">--}}
                                        {{--<p class="m-0 d-block mb-1"><sup>$</sup>{{round($total)}}<small>USD</small></p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row text-left align-items-center">--}}
                                    {{--<div class="col">--}}
                                        {{--<p class="m-0 d-block mb-1"><i class="fas fa-car h5 text-g-grey-light pr-2 float-left"></i> Transporte</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="col text-right">--}}
                                        {{--<p class="m-0 d-block mb-1"><sup>$</sup>200<small>USD</small></p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row text-left align-items-center">--}}
                                    {{--<div class="col">--}}
                                        {{--<p class="m-0 d-block mb-1"><i class="fas fa-street-view h5 text-g-grey-light pr-2 float-left"></i> Guia (Ingles)</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="col text-right">--}}
                                        {{--<p class="m-0 d-block mb-1"><sup>$</sup>50<small>USD</small></p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="row text-left align-items-center">
                                    <div class="col">
                                        <p class="m-0 d-block mb-1 font-weight-bold text-secondary">@lang('book.total_para') {{$personas}} <i class="fas fa-user" data-toggle="tooltip" data-placement="top" title="Numero de personas"></i></p>
                                    </div>
                                    <div class="col text-right">
                                        <p class="m-0 d-block mb-1 font-weight-bold text-secondary"><sup>$</sup><span id="total_pasajeros">{{round(round($total)*$personas)}}</span><small class="font-weight-bold text-secondary">USD</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </form>
        {{--@endforeach--}}
    @endsection
@push('scripts')
    <script>
        function sumar_comida($item) {
            $pasajeros = parseFloat("{{$personas}}");
            $price_t = parseFloat($('#d_total').val());
            $item = $item.split('-');
            $price_c = parseFloat($item[1]);
            $n_total = $price_t + $price_c;

            $t_pasajeros = $pasajeros * $n_total;

            document.getElementById('d_total_text').innerHTML = Math.round($n_total);
            document.getElementById('total_pasajeros').innerHTML = Math.round($t_pasajeros);
            $('#d_total').val(Math.round($n_total));
        }
        function restar_comida($item) {
            $pasajeros = parseFloat("{{$personas}}");
            $price_t = parseFloat($('#d_total').val());
            $item = $item.split('-');
            $price_c = parseFloat($item[1]);
            $n_total = $price_t - $price_c;
            $t_pasajeros = $pasajeros * $n_total;

            document.getElementById('d_total_text').innerHTML = Math.round($n_total.toFixed(2));
            document.getElementById('total_pasajeros').innerHTML = Math.round($t_pasajeros.toFixed(2));
            $('#d_total').val(Math.round($n_total));
        }

        function sumar_hospedaje($item) {
            $pasajeros = parseFloat("{{$personas}}");
            $price_t = parseFloat($('#d_total').val());
            $price_c = parseFloat($item);
            $n_total = $price_t + $price_c;

            $t_pasajeros = $pasajeros * $n_total;
            document.getElementById('d_total_text').innerHTML = Math.round($n_total);
            document.getElementById('total_pasajeros').innerHTML = Math.round($t_pasajeros);
            $('#d_total').val(Math.round($n_total));
        }
        function restar_hospedaje($item) {
            $pasajeros = parseFloat("{{$personas}}");
            $price_t = parseFloat($('#d_total').val());
            $price_c = parseFloat($item);
            $n_total = $price_t - $price_c;
            $t_pasajeros = $pasajeros * $n_total;

            document.getElementById('d_total_text').innerHTML = Math.round($n_total.toFixed(2));
            document.getElementById('total_pasajeros').innerHTML = Math.round($t_pasajeros.toFixed(2));
            $('#d_total').val(Math.round($n_total));
        }

        function sumar_transporte($item) {
            $pasajeros = parseFloat("{{$personas}}");
            $price_t = parseFloat($('#d_total').val());
            $item = $item.split('-');
            $price_c = parseFloat($item[1]);
            $n_total = $price_t + $price_c;
            $t_pasajeros = $pasajeros * $n_total;
            document.getElementById('d_total_text').innerHTML = Math.round($n_total.toFixed(2));
            document.getElementById('total_pasajeros').innerHTML = Math.round($t_pasajeros.toFixed(2));
            $('#d_total').val(Math.round($n_total));
        }
        function restar_transporte($item) {
            $pasajeros = parseFloat("{{$personas}}");
            $price_t = parseFloat($('#d_total').val());
            $item = $item.split('-');
            $price_c = parseFloat($item[1]);
            $n_total = $price_t - $price_c;
            $t_pasajeros = $pasajeros * $n_total;

            document.getElementById('d_total_text').innerHTML = Math.round($n_total.toFixed(2));
            document.getElementById('total_pasajeros').innerHTML = Math.round($t_pasajeros.toFixed(2));
            $('#d_total').val(Math.round($n_total));
        }

        function sumar_guia($item) {
            $pasajeros = parseFloat("{{$personas}}");
            $price_t = parseFloat($('#d_total').val());
            $item = $item.split('-');
            $price_c = parseFloat($item[1]);
            $n_total = $price_t + $price_c;
            $t_pasajeros = $pasajeros * $n_total;
            document.getElementById('d_total_text').innerHTML = Math.round($n_total.toFixed(2));
            document.getElementById('total_pasajeros').innerHTML = Math.round($t_pasajeros.toFixed(2));
            $('#d_total').val(Math.round($n_total));
        }
        function restar_guia($item) {
            $pasajeros = parseFloat("{{$personas}}");
            $price_t = parseFloat($('#d_total').val());
            $item = $item.split('-');
            $price_c = parseFloat($item[1]);
            $n_total = $price_t - $price_c;
            $t_pasajeros = $pasajeros * $n_total;
            document.getElementById('d_total_text').innerHTML = Math.round($n_total.toFixed(2));
            document.getElementById('total_pasajeros').innerHTML = Math.round($t_pasajeros.toFixed(2));
            $('#d_total').val(Math.round($n_total));
        }
    </script>
@endpush
