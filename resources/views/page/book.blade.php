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

        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-8 font-poppins">
                        <h2 class="font-weight-bold h1 text-g-grey-primary">Kusiruna
                            <span class="text-warning text-15">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </span>
                            <span class="text-15 badge badge-g-red-primary">4.5</span>
                        </h2>
                        <hr>
                        <div class="row my-3">
                            <div class="col font-poppins">
                                <h4 class="font-weight-bold text-g-grey-primary">Servicios Adicionales:</h4>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col font-poppins">
                                <h5 class="font-weight-bold text-g-grey-primary pb-2">Transporte
                                    <div class="custom-control custom-checkbox float-right text-primary">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1"><sup>$</sup>200<small class="font-weight-bold">USD</small></label>
                                    </div>
                                </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi culpa, ipsam rerum sit veniam? Assumenda atque cum dicta, enim explicabo ipsa maxime nulla odit, quas reprehenderit unde vel voluptatibus.</p>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col font-poppins">
                                <h5 class="font-weight-bold text-g-grey-primary pb-2">Guia (Ingles)
                                    <div class="custom-control custom-checkbox float-right text-primary">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1"><sup>$</sup>50<small class="font-weight-bold">USD</small></label>
                                    </div>
                                </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi culpa, ipsam rerum sit veniam? Assumenda atque cum dicta, enim explicabo ipsa maxime nulla odit, quas reprehenderit unde vel voluptatibus.</p>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col font-poppins">
                                <h5 class="font-weight-bold text-g-grey-primary pb-2">Haz que cada día cuente
                                    <div class="custom-control custom-checkbox float-right text-primary">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1"><sup>$</sup>7<small class="font-weight-bold">USD</small></label>
                                    </div>
                                </h5>
                                <p>Devuelve dinero mientras viajas donando $ 1 por día y ayuda a cambiar miles de vidas. El 100% de sus donaciones van directamente a donde son necesarias.</p>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col text-center">
                                <a href="{{route('payment_path')}}" class="btn btn-g-green-light btn-lg font-weight-bold">Aceptar y Continuar</a>
                            </div>
                        </div>


                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body text-center">
                                <sup>$</sup><span class="font-weight-bold display-4 h1">500</span><small>USD</small>
                                <hr>
                                <div class="row text-left align-items-center">
                                    <div class="col">
                                        <p class="m-0 d-block mb-1"><i class="fas fa-users h5 text-g-grey-light pr-2 float-left"></i> 2 Adultos . 1 Niño</p>
                                        <p class="m-0 d-block"><i class="fas fa-calendar-alt h5 text-g-grey-light pr-2"></i> 24 de abr. de 2019</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row text-left align-items-center">
                                    <div class="col">
                                        <p class="m-0 d-block mb-1"><i class="fas fa-car h5 text-g-grey-light pr-2 float-left"></i> Transporte</p>
                                    </div>
                                    <div class="col text-right">
                                        <p class="m-0 d-block mb-1"><sup>$</sup>200<small>USD</small></p>
                                    </div>
                                </div>
                                <div class="row text-left align-items-center">
                                    <div class="col">
                                        <p class="m-0 d-block mb-1"><i class="fas fa-street-view h5 text-g-grey-light pr-2 float-left"></i> Guia (Ingles)</p>
                                    </div>
                                    <div class="col text-right">
                                        <p class="m-0 d-block mb-1"><sup>$</sup>50<small>USD</small></p>
                                    </div>
                                </div>
                                <div class="row text-left align-items-center">
                                    <div class="col">
                                        <p class="m-0 d-block mb-1 font-weight-bold text-secondary">Total</p>
                                    </div>
                                    <div class="col text-right">
                                        <p class="m-0 d-block mb-1 font-weight-bold text-secondary"><sup>$</sup>750<small class="font-weight-bold text-secondary">USD</small></p>
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
    @endsection
