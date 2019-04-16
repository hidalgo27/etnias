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

                        @foreach($comida as $comidas)
                            @php
                                $comidad_id = explode('-',$comidas);
                            @endphp
                            @foreach($comida_precio->where('id', $comidad_id[0]) as $comida_precios)
                                <div class="row text-left align-items-center">
                                    <div class="col">
                                        <p class="m-0 d-block mb-1">
                                            <i class="fas fa-utensils h5 text-g-grey-light pr-2 float-left"></i>
                                            {{$comida_precios->comida->titulo}}
                                        </p>
                                    </div>
                                    <div class="col text-right">
                                        <p class="m-0 d-block mb-1"><sup>$</sup>{{$comida_precios->precio}}<small>USD</small></p>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach

                        {{--@foreach($transporte as $transportes)--}}
                            {{--@php--}}
                                {{--$transporte_id = explode('-',$transportes);--}}
                            {{--@endphp--}}
                            {{--@foreach($transporte_precio->where('id', $transporte_id[0]) as $transporte_precios)--}}
                                {{--<div class="row text-left align-items-center">--}}
                                    {{--<div class="col">--}}
                                        {{--<p class="m-0 d-block mb-1">--}}
                                            {{--<i class="fas fa-car h5 text-g-grey-light pr-2 float-left"></i>--}}
                                            {{--{{$transporte_precios->transporte->titulo}}--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="col text-right">--}}
                                        {{--<p class="m-0 d-block mb-1"><sup>$</sup>{{$transporte_precios->precio}}<small>USD</small></p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endforeach--}}
                        {{--@endforeach--}}

                        @foreach($guias as $guia2)
                            @php
                                $guia_id = explode('-',$guia2);
                            @endphp
                            @foreach($guia->where('id', $guia_id[0]) as $guia_precios)
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
                            @endforeach
                        @endforeach

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
                                <p class="m-0 d-block mb-1 font-weight-bold text-secondary"><sup>$</sup>750<small class="font-weight-bold text-secondary">USD</small></p>
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
                                    <div class="card-body p-5">
                                        <div class="row justify-content-center">
                                            <div class="col-6">
                                                <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
                                                            <i class="fa fa-credit-card"></i> Credit Card</a></li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
                                                            <i class="fab fa-paypal"></i>  Paypal</a></li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="nav-tab-card">
                                                        {{--<p class="alert alert-success">Some text success or error</p>--}}
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label for="username">Full name (on the card)</label>
                                                                <input type="text" class="form-control" name="username" placeholder="" required="">
                                                            </div> <!-- form-group.// -->

                                                            <div class="form-group">
                                                                <label for="cardNumber">Card number</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="cardNumber" placeholder="">
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
                                                                            <input type="number" class="form-control" placeholder="MM" name="">
                                                                            <input type="number" class="form-control" placeholder="YY" name="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                                                        <input type="number" class="form-control" required="">
                                                                    </div> <!-- form-group.// -->
                                                                </div>
                                                            </div> <!-- row.// -->
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group form-check">
                                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                        <label class="form-check-label" for="exampleCheck1"><sup class="text-danger">*</sup>Acepto los términos y condiciones anteriores:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="subscribe btn btn-primary" type="button">Confirmar</button>
                                                        </form>
                                                    </div> <!-- tab-pane.// -->
                                                    <div class="tab-pane fade" id="nav-tab-paypal">
                                                        <p>Paypal is easiest way to pay online</p>
                                                        <p>
                                                            <button type="button" class="btn btn-primary"> <i class="fab fa-paypal"></i> Log in my Paypal </button>
                                                        </p>
                                                        <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. </p>
                                                    </div>
                                                </div> <!-- tab-content .// -->
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
