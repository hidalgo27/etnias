@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu-book')

        @foreach($actividad as $actividades)
            <section class="my-4">
                <div class="container">
                    <div class="row no-gutters text-center align-items-center">
                        <div class="col p-3 bg-light text-truncate">
                            @php $fecha_viaje_r = str_replace('/', '-', $fecha_viaje); @endphp
                            <a class="font-weight-bold" href="{{route('detail_date_path', [str_replace(' ', '-', strtolower($actividades->titulo)), $fecha_viaje_r, $personas])}}">1. @lang('book.detail_program') <small class="font-italic">(@lang('book.itinerary')</small></a></div>
                        <div class="col p-3 bg-light text-truncate">
                            <form action="{{route('book_path')}}" method="post" enctype="multipart/form-data" class="text-truncate">
                                @csrf
                                <input type="hidden" name="id_actividad" value="{{$actividades->id}}">
                                <input type="hidden" name="fecha_viaje" value="{{$fecha_viaje_r}}">
                                <input  type="hidden" name="txt_personas"value="{{$personas}}">
                                <input type="submit" value="2. @lang('book.servicios_adicionales')" class="btn btn-link font-weight-bold p-0 m-0 text-truncate">
                            </form>
                        </div>
                        <div class="col p-3 bg-g-red-dark text-white shadow-sm font-weight-bold text-truncate">
                            3. @lang('book.confirmar_pagar')
                        </div>
                    </div>
                </div>
            </section>
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8 font-poppins">
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
                                <h4 class="font-weight-bold text-g-grey-primary">@lang('book.ya_terminamos')</h4>
                                <p>@lang('book.revisa_inf_ac')</p>
                            </div>
                        </div>

                        {{--<div class="row my-3">--}}
                            {{--<div class="col font-poppins">--}}
                                {{--<h5 class="font-weight-bold text-g-grey-primary">REVISA TU AVENTURA</h5>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                       {{----}}

                        <div class="row my-3">
                            <div class="col-12 font-poppins">
                                <h5 class="font-weight-bold text-g-grey-primary">@lang('book.condiciones_generales')</h5>
                                <p>
                                    @lang('book.condiciones_generales_p')
                                </p>
                            </div>
                            <div class="col-12">
                                {{--<div class="card terminos-payment overflow-auto">--}}
                                    {{--<div class="card-body">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iure labore nemo quae quis ratione sequi suscipit. Amet atque blanditiis iure natus quas quidem similique, tenetur. Alias facilis quo veniam.--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iure labore nemo quae quis ratione sequi suscipit. Amet atque blanditiis iure natus quas quidem similique, tenetur. Alias facilis quo veniam.--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iure labore nemo quae quis ratione sequi suscipit. Amet atque blanditiis iure natus quas quidem similique, tenetur. Alias facilis quo veniam.--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iure labore nemo quae quis ratione sequi suscipit. Amet atque blanditiis iure natus quas quidem similique, tenetur. Alias facilis quo veniam.--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iure labore nemo quae quis ratione sequi suscipit. Amet atque blanditiis iure natus quas quidem similique, tenetur. Alias facilis quo veniam.--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iure labore nemo quae quis ratione sequi suscipit. Amet atque blanditiis iure natus quas quidem similique, tenetur. Alias facilis quo veniam.--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iure labore nemo quae quis ratione sequi suscipit. Amet atque blanditiis iure natus quas quidem similique, tenetur. Alias facilis quo veniam.--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iure labore nemo quae quis ratione sequi suscipit. Amet atque blanditiis iure natus quas quidem similique, tenetur. Alias facilis quo veniam.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <a href="{{asset('doc/terminos-y-condiciones.pdf')}}" target="_blank" class="btn btn-link font-weight-bold small p-0 mt-2">@lang('book.ver_ventana_distinta') <i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col was-validated">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="terminos" id="terminos" required>
                                    <label class="custom-control-label" for="terminos">@lang('book.acepto_terminos'):</label>
                                </div>
                            </div>
                        </div>

                        {{--<div class="row my-3">--}}
                            {{--<div class="col font-poppins">--}}
                                {{--<h5 class="font-weight-bold text-g-grey-primary">CONFIRMAR EL PAGO</h5>--}}
                                {{--<p>Se efectuará un cargo en tu tarjeta en la moneda del país donde se haya realizado la compra. Ten en cuenta que el pago puede tener lugar en otro país y estar sujeto a comisiones adicionales por parte del emisor de la tarjeta.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="sticky-top">
                            <div class="row">
                                <div class="col font-poppins">
                                    <div class="card">
                                        <div class="card-header bg-primary">
                                            <h6 class="text-white m-0"><i class="fas fa-lock"></i> @lang('book.pago_seguro')</h6>
                                        </div>
                                        <div class="card-body">


                                            <div class="row text-left align-items-center">
                                                <div class="col">
                                                    <p class="m-0 d-block mb-1"><i class="fas fa-users h5 text-g-grey-light pr-2 float-left"></i> @lang('book.numero_personas'): {{$personas}}</p>
                                                    <p class="m-0 d-block"><i class="fas fa-calendar-alt h5 text-g-grey-light pr-2"></i> @lang('home.fecha_viaje'): {{$fecha_viaje}}</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row text-left align-items-center">
                                                <div class="col">
                                                    <p class="m-0 d-block mb-1">
                                                        <i class="fas fa-flag h5 text-g-grey-light pr-2 float-left"></i>
                                                        {{ucwords(strtolower($actividades->titulo))}}
                                                    </p>
                                                </div>
                                                <div class="col text-right">
                                                    <p class="m-0 d-block mb-1"><sup>$</sup>{{round($total)}}<small>USD</small></p>
                                                </div>
                                            </div>

                                            @php $pc = 0; @endphp
                                            @if (isset($comida_precio))
                                                @foreach($comida_precio as $comida_precios)
                                                    <div class="row text-left align-items-center">
                                                        <div class="col">
                                                            <p class="m-0 d-block mb-1">
                                                                <i class="fas fa-utensils h5 text-g-grey-light pr-2 float-left"></i>
                                                                {{$comida_precios->comida->titulo}}
                                                            </p>
                                                        </div>
                                                        <div class="col text-right">
                                                            <p class="m-0 d-block mb-1"><sup>$</sup>{{round($comida_precios->precio)}}<small>USD</small></p>
                                                        </div>
                                                    </div>
                                                    @php $pc = $pc + round($comida_precios->precio);@endphp
                                                @endforeach
                                            @endif
                                            @php $ph = 0; @endphp
                                            @if (isset($hospedaje_precio))
                                                @foreach($hospedaje_precio as $hospedaje_precios)
                                                    <div class="row text-left align-items-center">
                                                        <div class="col">
                                                            <p class="m-0 d-block mb-1">
                                                                <i class="fas fa-home h5 text-g-grey-light pr-2 float-left"></i>
                                                                {{$hospedaje_precios->hospedaje->titulo}}
                                                            </p>
                                                        </div>
                                                        <div class="col text-right">
                                                            <p class="m-0 d-block mb-1"><sup>$</sup>{{round($hospedaje_precios->precio)}}<small>USD</small></p>
                                                        </div>
                                                    </div>
                                                    @php $ph = $ph + round($hospedaje_precios->precio);@endphp
                                                @endforeach
                                            @endif

                                            @php $pt = 0; @endphp
                                            @if (isset($transporte_precio))
                                                @foreach($transporte_precio as $transporte_precios)
                                                    <div class="row text-left align-items-center">
                                                        <div class="col">
                                                            <p class="m-0 d-block mb-1">
                                                                <i class="fas fa-car h5 text-g-grey-light pr-2 float-left"></i>
                                                                Transporte
                                                            </p>
                                                        </div>
                                                        <div class="col text-right">
                                                            <p class="m-0 d-block mb-1"><sup>$</sup>{{$transporte_precios->precio}}<small>USD</small></p>
                                                        </div>
                                                    </div>
                                                    @php $pt = $pt + round($transporte_precios->precio);@endphp
                                                @endforeach
                                            @endif


                                            @php $pg = 0; @endphp
                                            @if (isset($guia_precio))
                                                @foreach($guia_precio as $guia_precios)
                                                    <div class="row text-left align-items-center">
                                                        <div class="col">
                                                            <p class="m-0 d-block mb-1">
                                                                <i class="fas fa-male h5 text-g-grey-light pr-2 float-left"></i>
                                                                Guia: {{$guia_precios->nombre}}
                                                            </p>
                                                        </div>
                                                        <div class="col text-right">
                                                            <p class="m-0 d-block mb-1"><sup>$</sup>{{$guia_precios->precio}}<small>USD</small></p>
                                                        </div>
                                                    </div>
                                                    @php $pg = $pg + round($guia_precios->precio);@endphp
                                                @endforeach
                                            @endif
                                            {{--<div class="row text-left align-items-center">--}}
                                            {{--<div class="col">--}}
                                            {{--<p class="m-0 d-block mb-1"><i class="fas fa-street-view h5 text-g-grey-light pr-2 float-left"></i> Guia (Ingles)</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="col text-right">--}}
                                            {{--<p class="m-0 d-block mb-1"><sup>$</sup>50<small>USD</small></p>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            <hr>
                                            <div class="row text-left align-items-center">
                                                <div class="col">
                                                    <p class="m-0 d-block mb-1 text-g-grey-light">@lang('actividades.precio_persona')</p>
                                                </div>
                                                <div class="col-auto text-right">
                                                    <p class="m-0 d-block mb-1 text-g-grey-light"><sup>$</sup>{{(round($total + $pc + $ph + $pt + $pg))}}<small class="font-weight-bold text-secondary">USD</small></p>
                                                </div>
                                            </div>
                                            <div class="row text-left align-items-center bg-light">
                                                <div class="col">
                                                    <p class="m-0 d-block mb-1 font-weight-bold text-secondary">@lang('book.total_para') {{$personas}} @lang('book.personas')</p>
                                                </div>
                                                <div class="col-auto text-right">
                                                    <p class="m-0 d-block mb-1 font-weight-bold text-secondary"><sup>$</sup>{{(round($total + $pc + $ph + $pt + $pg))*$personas}}<small class="font-weight-bold text-secondary">USD</small></p>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row justify-content-center">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col">
                                                            @php
                                                                $token=csrf_token();
                                                            @endphp
                                                            <form role="form" class="text-center" id="form_login12" method="post" action="{{route('payment_check_path',[$entorno,$numorden,$amount,$actividades->titulo,$fecha_viaje,$personas])}}">
                                                                <input type="hidden" name="entorno" value="{{$entorno}}">
                                                                @csrf
                                                                <script src="{{$urljs}}"
                                                                        data-sessiontoken="{{$sessionToken}}"
                                                                        data-merchantid="{{$merchantId}}"
                                                                        data-channel="web"
                                                                        data-buttonsize=""
                                                                        data-buttoncolor=""
                                                                        data-merchantlogo ="{{asset('images/etnias-peru.png')}}"
                                                                        data-merchantname=""
                                                                        data-formbuttoncolor="#007bff"
                                                                        data-showamount="TRUE"
                                                                        data-purchasenumber="{{$numorden}}"
                                                                        data-amount="{{$amount}}"
                                                                        data-cardholdername="{{$nombre}}"
                                                                        data-cardholderlastname="{{$apellido}}"
                                                                        data-cardholderemail="{{$email}}"
                                                                        data-usertoken="{{$userTokenId}}"
                                                                        data-recurrence="FALSE"
                                                                        data-frequency=""
                                                                        data-recurrencetype=""
                                                                        data-recurrenceamount=""
                                                                        data-documenttype="0"
                                                                        data-documentid=""
                                                                        data-beneficiaryid="TEST1123"
                                                                        data-productid=""
                                                                        data-phone=""
                                                                        data-timeouturl="http://localhost:8080/dashboard/demo_boton/"
                                                                ></script>
                                                            </form>
                                                            {{--<p class="alert alert-success">Some text success or error</p>--}}
                                                            {{--  <form role="form" class="bg-light p-3 rounded-bottom" id="form_login" method="post">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="username">Full name (on the card)</label>
                                                                    <input type="text" class="form-control" name="username" placeholder="" required="" id="username" value="">
                                                                </div> <!-- form-group.// -->

                                                                <div class="form-group">
                                                                    <label for="cardNumber">Card number</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" name="cardNumber" placeholder="" id="cardNumber">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text text-muted">
                                                                                <i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>  
                                                                                <i class="fab fa-cc-mastercard"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- form-group.// -->
                                                                <div class="row">
                                                                    <div class="col-sm-8">
                                                                        <div class="form-group">
                                                                            <label><span class="hidden-xs">Expiration</span> </label>
                                                                            <div class="input-group">
                                                                                <input type="number" class="form-control" placeholder="MM" name="expiration_m" id="expiration_m">
                                                                                <input type="number" class="form-control" placeholder="YY" name="expiration_y" id="expiration_y">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                                                            <input type="number" class="form-control" required="" name="cvv" id="cvv">
                                                                        </div> <!-- form-group.// -->
                                                                    </div>
                                                                </div> <!-- row.// -->
                                                                @if (!Auth::user())
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label for="username">Email</label>
                                                                                <input type="text" class="form-control" name="email" placeholder="" required="" id="email">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label for="username">Email</label>
                                                                                <input type="text" class="form-control" name="email" placeholder="" required="" id="email" value="{{Auth::user()->email}}" readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                <div class="row">
                                                                    <div class="col was-validated">
                                                                        <div class="custom-control custom-checkbox mb-3">
                                                                            <input type="checkbox" class="custom-control-input" name="terminos" id="terminos" required>
                                                                            <label class="custom-control-label" for="terminos">Acepto los términos y condiciones anteriores:</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button class="subscribe btn btn-primary" type="button" onclick="form_login()">Confirmar</button>
                                                                <input type="hidden" name="actividad" value="{{$actividades->id}}">
                                                                <input type="hidden" name="personas" value="{{$personas}}">
                                                                <input type="hidden" name="fecha_viaje" value="{{$fecha_viaje}}">
                                                                @if (isset($comida_precio))
                                                                    @foreach($comida_precio as $comida_precios)
                                                                        <input type="hidden" name="comida[]" value="{{$comida_precios->id}}">
                                                                    @endforeach
                                                                @endif
                                                                @if (isset($hospedaje_precio))
                                                                    @foreach($hospedaje_precio as $hospedaje_precios)
                                                                        <input type="hidden" name="hospedaje[]" value="{{$hospedaje_precios->id}}">
                                                                    @endforeach
                                                                @endif

                                                                @if (isset($transporte_precio))
                                                                    @foreach($transporte_precio as $transporte_precios)
                                                                        <input type="hidden" name="transporte[]" value="{{$transporte_precios->id}}">
                                                                    @endforeach
                                                                @endif
                                                                @if (isset($guia_precio))
                                                                    @foreach($guia_precio as $guia_precios)
                                                                        <input type="hidden" name="guia[]" value="{{$guia_precios->id}}">
                                                                    @endforeach
                                                                @endif
                                                            </form>  --}}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
    @endsection
