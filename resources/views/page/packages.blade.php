@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu')
        <section class="position-relative">
            <div class="form-header-bg h-25">
                <div class="container">
                    <div class="row justify-content-center align-items-center h-100vh">
                        <div class="col-5 text-center">
                            <h1 class="font-weight-bold display-4 text-white">Paquetes</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div id="home-slider-container">
                <div id="home-slider">
                    <div class="slider-item">
                        <img src="{{asset('images/sliders/slider-4.jpg')}}"/>
                        {{--<div class="container">--}}
                        {{--<div class="slider-content row align-items-center">--}}
                        {{--<div class="container">--}}
                        {{--<div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>--}}
                        {{--</div>--}}
                        {{--<div class="col">--}}
                        {{--<h2 class="display-4 font-weight-bold text-white">Auf mystischen <span class="d-block">Wegen</span></h2>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="slider-item">
                        <img src="{{asset('images/sliders/slider-7.jpg')}}"/>
                        {{--<div class="container">--}}
                        {{--<div class="slider-content row align-items-center">--}}
                        {{--<div class="container">--}}
                        {{--<div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>--}}
                        {{--</div>--}}
                        {{--<div class="col">--}}
                        {{--<h2 class="display-4 font-weight-bold text-white">Auf mystischen <span class="d-block">Wegen</span></h2>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="font-weight-bold display-4 text-g-grey-primary">Todas Nuestros <span class="text-g-red-dark">Paquetes</span></h1>
                        <h4 class="text-g-grey-light">Viva la experiencia en comunidades con costumbres intactas <stong class="text-g-grey-dark">Incas.</stong></h4>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="paquete-box">
                            <div class="paquete-box-header">
                                <div class="paquete-box-header-ico">
                                    <img src="{{asset('images/paquetes/hci1.png')}}" alt="">
                                </div>
                                <div class="paquete-box-header-bottom">
                                    Paquetes disponibles: 42
                                </div>
                                <img src="{{asset('images/paquetes/1.jpg')}}" alt="">
                            </div>
                            <div class="paquete-box-footer">
                                <div class="row">
                                    <div class="col">
                                        <a href="hotel-details.html">
                                            <h5 class="font-weight-bold text-g-grey-primary">Taucca de ensueño</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="paquete-box-foote-descr">
                                            Comunidad:  Taucca <br>
                                            Asociación: Las hormiguitas <br>
                                            Raiting:
                                            <span class="text-warning">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <span class="h1 font-weight-bold text-g-red-dark">$420</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="paquete-box">
                            <div class="paquete-box-header">
                                <div class="paquete-box-header-ico">
                                    <img src="{{asset('images/paquetes/hci1.png')}}" alt="">
                                </div>
                                <div class="paquete-box-header-bottom">
                                    Paquetes disponibles: 42
                                </div>
                                <img src="{{asset('images/paquetes/1.jpg')}}" alt="">
                            </div>
                            <div class="paquete-box-footer">
                                <div class="row">
                                    <div class="col">
                                        <a href="hotel-details.html">
                                            <h5 class="font-weight-bold text-g-grey-primary">Taucca de ensueño</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="paquete-box-foote-descr">
                                            Comunidad:  Taucca <br>
                                            Asociación: Las hormiguitas <br>
                                            Raiting:
                                            <span class="text-warning">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <span class="h1 font-weight-bold text-g-red-dark">$420</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="paquete-box">
                            <div class="paquete-box-header">
                                <div class="paquete-box-header-ico">
                                    <img src="{{asset('images/paquetes/hci1.png')}}" alt="">
                                </div>
                                <div class="paquete-box-header-bottom">
                                    Paquetes disponibles: 42
                                </div>
                                <img src="{{asset('images/paquetes/1.jpg')}}" alt="">
                            </div>
                            <div class="paquete-box-footer">
                                <div class="row">
                                    <div class="col">
                                        <a href="hotel-details.html">
                                            <h5 class="font-weight-bold text-g-grey-primary">Taucca de ensueño</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="paquete-box-foote-descr">
                                            Comunidad:  Taucca <br>
                                            Asociación: Las hormiguitas <br>
                                            Raiting:
                                            <span class="text-warning">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <span class="h1 font-weight-bold text-g-red-dark">$420</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="paquete-box">
                            <div class="paquete-box-header">
                                <div class="paquete-box-header-ico">
                                    <img src="{{asset('images/paquetes/hci1.png')}}" alt="">
                                </div>
                                <div class="paquete-box-header-bottom">
                                    Paquetes disponibles: 42
                                </div>
                                <img src="{{asset('images/paquetes/1.jpg')}}" alt="">
                            </div>
                            <div class="paquete-box-footer">
                                <div class="row">
                                    <div class="col">
                                        <a href="hotel-details.html">
                                            <h5 class="font-weight-bold text-g-grey-primary">Taucca de ensueño</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="paquete-box-foote-descr">
                                            Comunidad:  Taucca <br>
                                            Asociación: Las hormiguitas <br>
                                            Raiting:
                                            <span class="text-warning">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <span class="h1 font-weight-bold text-g-red-dark">$420</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="paquete-box">
                            <div class="paquete-box-header">
                                <div class="paquete-box-header-ico">
                                    <img src="{{asset('images/paquetes/hci1.png')}}" alt="">
                                </div>
                                <div class="paquete-box-header-bottom">
                                    Paquetes disponibles: 42
                                </div>
                                <img src="{{asset('images/paquetes/1.jpg')}}" alt="">
                            </div>
                            <div class="paquete-box-footer">
                                <div class="row">
                                    <div class="col">
                                        <a href="hotel-details.html">
                                            <h5 class="font-weight-bold text-g-grey-primary">Taucca de ensueño</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="paquete-box-foote-descr">
                                            Comunidad:  Taucca <br>
                                            Asociación: Las hormiguitas <br>
                                            Raiting:
                                            <span class="text-warning">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <span class="h1 font-weight-bold text-g-red-dark">$420</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="paquete-box">
                            <div class="paquete-box-header">
                                <div class="paquete-box-header-ico">
                                    <img src="{{asset('images/paquetes/hci1.png')}}" alt="">
                                </div>
                                <div class="paquete-box-header-bottom">
                                    Paquetes disponibles: 42
                                </div>
                                <img src="{{asset('images/paquetes/1.jpg')}}" alt="">
                            </div>
                            <div class="paquete-box-footer">
                                <div class="row">
                                    <div class="col">
                                        <a href="hotel-details.html">
                                            <h5 class="font-weight-bold text-g-grey-primary">Taucca de ensueño</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="paquete-box-foote-descr">
                                            Comunidad:  Taucca <br>
                                            Asociación: Las hormiguitas <br>
                                            Raiting:
                                            <span class="text-warning">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <span class="h1 font-weight-bold text-g-red-dark">$420</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
