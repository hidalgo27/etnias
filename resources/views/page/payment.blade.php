@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu-book')
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
        @foreach($actividad as $actividades)
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col font-poppins">
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
                                <h4 class="font-weight-bold text-g-grey-primary">Ya casi terminamos</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi culpa, ipsam rerum sit veniam? Assumenda atque cum dicta, enim explicabo ipsa maxime nulla odit, quas reprehenderit unde vel voluptatibus.</p>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col font-poppins">
                                <h5 class="font-weight-bold text-g-grey-primary">REVISA TU AVENTURA</h5>
                            </div>
                        </div>

                        <div class="row text-left align-items-center">
                            <div class="col">
                                <p class="m-0 d-block mb-1"><i class="fas fa-users h5 text-g-grey-light pr-2 float-left"></i> Numero de personas: {{$personas}}</p>
                                <p class="m-0 d-block"><i class="fas fa-calendar-alt h5 text-g-grey-light pr-2"></i> Fecha de viaje: {{$fecha_viaje}}</p>
                            </div>
                        </div>
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
                        <div class="row text-left align-items-center">
                            <div class="col">
                                <p class="m-0 d-block mb-1 font-weight-bold text-secondary">Total</p>
                            </div>
                            <div class="col text-right">
                                <p class="m-0 d-block mb-1 font-weight-bold text-secondary"><sup>$</sup>{{round($total + $pc + $ph + $pt + $pg)}}<small class="font-weight-bold text-secondary">USD</small></p>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-12 font-poppins">
                                <h5 class="font-weight-bold text-g-grey-primary">CONDICIONES GENERALES</h5>
                                <p>Estas son las condiciones generales que se aplicarán a tu reserva. Léelas detenidamente, dado que tendrás la obligación de respetarlas.
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="card terminos-payment overflow-auto h-75">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iure labore nemo quae quis ratione sequi suscipit. Amet atque blanditiis iure natus quas quidem similique, tenetur. Alias facilis quo veniam.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iure labore nemo quae quis ratione sequi suscipit. Amet atque blanditiis iure natus quas quidem similique, tenetur. Alias facilis quo veniam.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iure labore nemo quae quis ratione sequi suscipit. Amet atque blanditiis iure natus quas quidem similique, tenetur. Alias facilis quo veniam.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iure labore nemo quae quis ratione sequi suscipit. Amet atque blanditiis iure natus quas quidem similique, tenetur. Alias facilis quo veniam.
                                    </div>
                                </div>
                                <a href="" class="btn btn-link font-weight-bold small p-0 mt-2">Ver en una ventana distinta</a>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col font-poppins">
                                <h5 class="font-weight-bold text-g-grey-primary">CONFIRMAR EL PAGO</h5>
                                <p>Se efectuará un cargo en tu tarjeta en la moneda del país donde se haya realizado la compra. Ten en cuenta que el pago puede tener lugar en otro país y estar sujeto a comisiones adicionales por parte del emisor de la tarjeta.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col font-poppins">
                                <div class="card">
                                    <div class="card-header bg-primary">
                                        <h6 class="text-white m-0"><i class="fas fa-lock"></i> Pago seguro</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="font-weight-bold text-center bg-secondary text-white p-2 rounded-top">
                                                            <i class="fa fa-credit-card"></i> Credit Card</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        {{--<p class="alert alert-success">Some text success or error</p>--}}
                                                        <form role="form" class="bg-light p-3 rounded-bottom" id="form_login" method="post">
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
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- card-body.// -->
                                </div> <!-- card.// -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
    @endsection
@push("scripts")
    <script>
        function form_login() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').val()
                }
            });
            var dataString = $('#form_login').serialize();

            // alert('Datos serializados: '+dataString);

            $.ajax({
                type: "POST",
                url: "{{route('payment_check_path')}}",
                data: dataString,
                success: function(data) {
                    // alert(data.success);
                    location.href="../client/home";
                },
                error: function (request, status, error) {
                    json = $.parseJSON(request.responseText);
                    $.each(json.errors, function(key, value){
                        // $('.alert-danger').show();
                        // $('.alert-danger').append('<p><i class="fas fa-chevron-right"></i> '+value+'</p>');
                        $('#'+key+'').addClass('is-invalid');
                    });
                }
            });
        }
    </script>
@endpush
