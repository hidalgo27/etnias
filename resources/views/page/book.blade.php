@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu-book')

        @foreach($actividad as $actividades)
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb small font-weight-bold p-0 m-0 bg-white">
                                <li class="breadcrumb-item"><a href="#">1. Detalle <small class="font-italic">(Itinerario)</small></a></li>
                                <li class="breadcrumb-item"><a href="#">2. Resumen</a></li>
                                <li class="breadcrumb-item active" aria-current="page">3. Confirmar y pagar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <form action="{{route('payment_path')}}" method="post">
            @csrf
            <input type="hidden" name="txt_actividad_id" value="{{$actividades->id}}">
            <input type="hidden" name="txt_personas" value="{{$personas}}">
            <input type="hidden" name="txt_fecha_viaje" value="{{$fecha_viaje}}">
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-8 font-poppins">
                        <h2 class="font-weight-bold h1 text-g-grey-primary">{{ucwords(strtolower($actividades->titulo))}}
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
                                <h4 class="font-weight-bold text-g-grey-primary">Servicios Adicionales:</h4>
                            </div>
                        </div>

                        @foreach($comida as $comida2)
                            @foreach($comidas->where('comida_id', $comida2->id) as $comida_d)
                                <div class="row my-3">
                                    <div class="col font-poppins">
                                        <h5 class="font-weight-bold text-g-grey-primary pb-2">{{ucwords(strtolower($comida2->titulo))}}
                                            <div class="custom-control custom-checkbox float-right text-primary">
                                                <input type="checkbox" class="custom-control-input" name="comida[]" id="comida_{{$comida_d->id}}" value="{{$comida_d->id}}-{{$comida_d->precio}}-{{$total}}" onclick="if (this.checked) sumar_comida(this.value); else restar_comida(this.value)">
                                                <label class="custom-control-label" for="comida_{{$comida_d->id}}"><sup>$</sup>{{$comida_d->precio}}<small class="font-weight-bold">USD</small></label>
                                            </div>
                                        </h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi culpa, ipsam rerum sit veniam? Assumenda atque cum dicta, enim explicabo ipsa maxime nulla odit, quas reprehenderit unde vel voluptatibus.</p>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach

                        @foreach($transporte as $transporte2)
                            @foreach($transportes->where('transporte_id', $transporte2->id) as $transportes_a)
                                <div class="row my-3">
                                    <div class="col font-poppins">
                                        <h5 class="font-weight-bold text-g-grey-primary pb-2">Transporte
                                            <div class="custom-control custom-checkbox float-right text-primary">
                                                <input type="checkbox" class="custom-control-input" name="transporte[]" id="transporte_{{$transportes_a->id}}" value="{{$transportes_a->id}}-{{$transportes_a->precio}}-{{$total}}" onclick="if (this.checked) sumar_transporte(this.value); else restar_transporte(this.value)">
                                                <label class="custom-control-label" for="transporte_{{$transportes_a->id}}"><sup>$</sup>{{$transportes_a->precio}}<small class="font-weight-bold">USD</small></label>
                                            </div>
                                        </h5>
                                        <p>Lorem sdsdsd ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi culpa, ipsam rerum sit veniam? Assumenda atque cum dicta, enim explicabo ipsa maxime nulla odit, quas reprehenderit unde vel voluptatibus.</p>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach

                        @foreach($guia as $guias)

                                <div class="row my-3">
                                    <div class="col font-poppins">
                                        <h5 class="font-weight-bold text-g-grey-primary pb-2">Guia ({{$guias->idioma}})
                                            <div class="custom-control custom-checkbox float-right text-primary">
                                                <input type="checkbox" class="custom-control-input" name="guia[]" id="guia_{{$guias->id}}" value="{{$guias->id}}-{{$guias->precio}}-{{$total}}" onclick="if (this.checked) sumar_guia(this.value); else restar_guia(this.value)">
                                                <label class="custom-control-label" for="guia_{{$guias->id}}"><sup>$</sup>{{$guias->precio}}<small class="font-weight-bold">USD</small></label>
                                            </div>
                                        </h5>
                                        <p>Lorem sdsdsd ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi culpa, ipsam rerum sit veniam? Assumenda atque cum dicta, enim explicabo ipsa maxime nulla odit, quas reprehenderit unde vel voluptatibus.</p>
                                    </div>
                                </div>

                        @endforeach


                        {{--<div class="row my-3">--}}
                            {{--<div class="col font-poppins">--}}
                                {{--<h5 class="font-weight-bold text-g-grey-primary pb-2">Guia (Ingles)--}}
                                    {{--<div class="custom-control custom-checkbox float-right text-primary">--}}
                                        {{--<input type="checkbox" class="custom-control-input" id="customCheck1" checked>--}}
                                        {{--<label class="custom-control-label" for="customCheck1"><sup>$</sup>50<small class="font-weight-bold">USD</small></label>--}}
                                    {{--</div>--}}
                                {{--</h5>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi culpa, ipsam rerum sit veniam? Assumenda atque cum dicta, enim explicabo ipsa maxime nulla odit, quas reprehenderit unde vel voluptatibus.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row my-3">--}}
                            {{--<div class="col font-poppins">--}}
                                {{--<h5 class="font-weight-bold text-g-grey-primary pb-2">Haz que cada día cuente--}}
                                    {{--<div class="custom-control custom-checkbox float-right text-primary">--}}
                                        {{--<input type="checkbox" class="custom-control-input" id="customCheck1">--}}
                                        {{--<label class="custom-control-label" for="customCheck1"><sup>$</sup>7<small class="font-weight-bold">USD</small></label>--}}
                                    {{--</div>--}}
                                {{--</h5>--}}
                                {{--<p>Devuelve dinero mientras viajas donando $ 1 por día y ayuda a cambiar miles de vidas. El 100% de sus donaciones van directamente a donde son necesarias.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="row my-3">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-g-green-light btn-lg font-weight-bold">Aceptar y Continuar</button>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body text-center">
                                <sup>$</sup><span class="font-weight-bold display-4 h1" id="d_total" value="{{round($total)}}">{{round($total)}}</span><small>USD</small>
                                <small class="d-block">precio por persona</small>
                                <hr>
                                <div class="row text-left align-items-center">
                                    <div class="col">
                                        <p class="m-0 d-block mb-1"><i class="fas fa-users h5 text-g-grey-light pr-2 float-left"></i> Numero de personas: {{$personas}}</p>
                                        <p class="m-0 d-block"><i class="fas fa-calendar-alt h5 text-g-grey-light pr-2"></i> Fecha de Viaje: {{$fecha_viaje}}</p>
                                    </div>
                                </div>
                                {{--<hr>--}}
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
                                {{--<div class="row text-left align-items-center">--}}
                                    {{--<div class="col">--}}
                                        {{--<p class="m-0 d-block mb-1 font-weight-bold text-secondary">Total</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="col text-right">--}}
                                        {{--<p class="m-0 d-block mb-1 font-weight-bold text-secondary"><sup>$</sup><span id="total_pasajeros">{{round($total*$personas, 2)}}</span><small class="font-weight-bold text-secondary">USD</small></p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
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
        @endforeach
    @endsection
@push('scripts')
    <script>
        function sumar_comida($item) {
            $pasajeros = parseFloat("{{$personas}}");
            $price_t = parseFloat(document.getElementById("d_total").innerHTML);
            $item = $item.split('-');
            $price_c = parseFloat($item[1]);
            $n_total = $price_t + $price_c;

            $t_pasajeros = $pasajeros * $n_total;

            document.getElementById('d_total').innerHTML = Math.round($n_total.toFixed(2));
            document.getElementById('total_pasajeros').innerHTML = Math.round($t_pasajeros.toFixed(2));
        }
        function restar_comida($item) {
            $pasajeros = parseFloat("{{$personas}}");
            $price_t = parseFloat(document.getElementById("d_total").innerHTML);
            $item = $item.split('-');
            $price_c = parseFloat($item[1]);
            $t_pasajeros = $pasajeros * $n_total;

            document.getElementById('d_total').innerHTML = Math.round($n_total.toFixed(2));
            document.getElementById('total_pasajeros').innerHTML = Math.round($t_pasajeros.toFixed(2));
        }
        function sumar_transporte($item) {
            $pasajeros = parseFloat("{{$personas}}");
            $price_t = parseFloat(document.getElementById("d_total").innerHTML);
            $item = $item.split('-');
            $price_c = parseFloat($item[1]);
            $n_total = $price_t + $price_c;
            document.getElementById('d_total').innerHTML = Math.round($n_total.toFixed(2));
        }
        function restar_transporte($item) {
            $pasajeros = parseFloat("{{$personas}}");
            $price_t = parseFloat(document.getElementById("d_total").innerHTML);
            $item = $item.split('-');
            $price_c = parseFloat($item[1]);
            $t_pasajeros = $pasajeros * $n_total;

            document.getElementById('d_total').innerHTML = Math.round($n_total.toFixed(2));
            document.getElementById('total_pasajeros').innerHTML = Math.round($t_pasajeros.toFixed(2));
        }

        function sumar_guia($item) {
            $pasajeros = parseFloat("{{$personas}}");
            $price_t = parseFloat(document.getElementById("d_total").innerHTML);
            $item = $item.split('-');
            $price_c = parseFloat($item[1]);
            $n_total = $price_t + $price_c;
            document.getElementById('d_total').innerHTML = Math.round($n_total.toFixed(2));
        }
        function restar_guia($item) {
            $pasajeros = parseFloat("{{$personas}}");
            $price_t = parseFloat(document.getElementById("d_total").innerHTML);
            $item = $item.split('-');
            $price_c = parseFloat($item[1]);
            $t_pasajeros = $pasajeros * $n_total;

            document.getElementById('d_total').innerHTML = Math.round($n_total.toFixed(2));
            document.getElementById('total_pasajeros').innerHTML = Math.round($t_pasajeros.toFixed(2));
        }
    </script>
@endpush
