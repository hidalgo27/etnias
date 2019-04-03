@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu')
        <section class="position-relative">
            <div class="form-header">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-5">
                            <form class="bg-rgba-white-8 p-4 rounded">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="font-weight-bold text-g-grey-primary">Reserva de comunidades y actividades en Cusco.</h2>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="text-g-grey-dark small font-weight-bold">COMUNIDAD</label>
                                            {{--<input type="text" class="form-control form-control-lg font-weight-bold" id="formGroupExampleInput" placeholder="Comunidad">--}}
                                            <select id="inputState" class="form-control">
                                                <option selected>Seleccione...</option>
                                                <option>Huilloq</option>
                                                <option>Taucca</option>
                                                <option>Tupac</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="text-g-grey-dark small font-weight-bold">LLEGADA</label>
                                            <input type="date" class="form-control" id="formGroupExampleInput" placeholder="TRAVEL DATE">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="text-g-grey-dark small font-weight-bold">HUÉSPEDES</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Seleccione...</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-block btn-g-green-primary"><span class="font-weight-bold">SEARCH</span></button>
                                    </div>
                                </div>
                            </form>
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

        <section class="container-fluid mt-5">
            <div class="row slider-category">
                <div class="col mb-4">
                    <div class="row no-gutters position-relative">
                        <div class="card shadow-sm">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="{{asset('images/huilloq/thumbnail/huilloq1.jpg')}}" alt="" class="w-100 rounded-left">
                                </div>
                                <div class="col-md-6 position-static p-2">
                                    <h6 class="mt-0">Tutismo</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="row no-gutters position-relative">
                        <div class="card shadow-sm">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="{{asset('images/huilloq/thumbnail/huilloq1.jpg')}}" alt="" class="w-100 rounded-left">
                                </div>
                                <div class="col-md-6 position-static p-2">
                                    <h6 class="mt-0">Tutismo vivencial</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="row no-gutters position-relative">
                        <div class="card shadow-sm">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="{{asset('images/huilloq/thumbnail/huilloq1.jpg')}}" alt="" class="w-100 rounded-left">
                                </div>
                                <div class="col-md-6 position-static p-2">
                                    <h6 class="mt-0">Tutismo vivencial</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="font-weight-bold display-4 text-g-grey-primary">TURISMO <span class="text-g-red-dark">VIVENCIAL</span></h1>
                        <h4 class="text-g-grey-light">Una experiencia inolvidable y la oportunidad de conocer el interior del <stong class="text-g-grey-dark">país de los Incas.</stong></h4>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="alert alert-g-green-light text-center">
                            <p class="lead font-weight-bold m-0">Tours y actividades vivenciales en comunidades de la region del Cusco.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col d-flex text-center">
                        <div class="card border-g-red-primary shadow">
                            <div class="bg-g-red-primary rounded-circle step-circle m-auto">
                                <span class="text-white font-weight-bold display-4">1</span>
                            </div>
                            <div class="bg-g-red-primary p-3 text-white step-body">
                                <h6 class="font-weight-bold mt-4 pt-2">ESCOGE LA ACTIVIDAD</h6>
                                <hr>
                                <p>Escoge la actividad (es) que te gustaría realizar en una comunidad nativa en una fecha disponible.</p>
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex text-center">
                        <div class="card border-g-green-primary shadow">
                            <div class="bg-g-green-primary rounded-circle step-circle m-auto">
                                <span class="text-white font-weight-bold display-4">2</span>
                            </div>
                            <div class="bg-g-green-primary p-3 text-white step-body">
                                <h6 class="font-weight-bold mt-4 pt-2">CREA TU USUARIO</h6>
                                <hr>
                                <p>Crea tu usuario en Etnias y reserva con un método de pago aceptado.</p>
                                <br>
                                <i class="fas fa-file-signature fa-2x"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex text-center">
                        <div class="card border-info shadow">
                            <div class="bg-info rounded-circle step-circle m-auto">
                                <span class="text-white font-weight-bold display-4">3</span>
                            </div>
                            <div class="bg-info p-3 text-white step-body">
                                <h6 class="font-weight-bold mt-4 pt-2">DISFRUTA DE TU EXPERIENCIA</h6>
                                <hr>
                                <p>Disfruta de tu experiencia ancestral en una comunidad nativa en el país de los incas.</p>
                                <i class="fas fa-file-alt fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sticky-top mt-5 shadow-sm">
            <nav id="navbar-scroll" class="navbar navbar-light bg-light justify-content-center">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="#comunidad-huilloq">Comunidad Huilloq</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="#comunidad-taucca">Comunidad Taucca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="#comunidad-tupac">Comunidad Tupac</a>
                    </li>
                </ul>
            </nav>
        </section>

        <section class="py-5 clearfix" id="comunidad-huilloq">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="font-weight-bold text-g-grey-primary">Comunidad <span class="text-g-red-dark">Huilloq</span></h1>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        {{--<div class="line-title"></div>--}}
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <h5 class="text-secondary m-0 font-weight-bold">Actividades en la comunidad</h5>
                    </div>
                </div>

                <div class="row slider-huilloq">
                    @foreach($comunidad as $comunidades)
                        @foreach($comunidades->asociaciones as $asociacion)
                            @foreach($asociacion->actividades as $actividad)
                                <div class="col mb-4">
                                    <div class="row">
                                        <div class="col">
                                            <div class="header-img-actividades">
                                                <img src="{{asset('images/huilloq/thumbnail/huilloq1.jpg')}}" alt="" class="w-100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-box-actividades row m-0">
                                        <div class="col-8">
                                            <h6><a href="{{route('detail_path')}}" class="text-g-grey-primary font-weight-bold">{{$actividad->titulo}} <small class="text-g-green-light">({{$asociacion->nombre}})</small></a></h6>
                                        </div>
                                        <div class="col-4 actividad_icon">
                                            <ul>
                                                <li>
                                                    <a href=""><img src="{{asset('images/icon/image.png')}}" alt="" class="w-100"></a>
                                                </li>
                                                <li>
                                                    <a href=""><img src="{{asset('images/icon/price.png')}}" alt="" class="w-100"></a>
                                                </li>
                                                <li>
                                                    <a href=""><img src="{{asset('images/icon/location.png')}}" alt="" class="w-100"></a>
                                                </li>
                                                <li>
                                                    <a href=""><img src="{{asset('images/icon/detail.png')}}" alt="" class="w-100"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        @endforeach
                    @endforeach

                </div>

                <div class="row mt-4 align-items-center">
                    <div class="col-6">
                        <h3 class="font-weight-bold text-g-red-primary">Huilloc</h3>
                        <hr>
                        <p class="mt-3 lead font-weight-normal text-secondary">Ubicado en el distrito de ollantaytambo en la ciudad del Cusco, la comunidad de Huilloc mantiene intacta sus tradiciones y cultura incaica, la comunidad de Huilloc está ubicada a 30 minutos del centro arqueológico de Ollantaytambo visita esta tradicional comunidad que ofrece una variada opción de turismo rural comunitario y vive una experiencia inolvidable.</p>
                    </div>
                    <div class="col text-center">
                        <div class="position-relative w-100">
                            <img src="{{asset('images/home/huilloq.jpg')}}" alt="" class="w-100 position-relative rounded shadow">
                            <div class="position-absolute w-100 top-50">
                                <a href="{{route('comunidad_show_path')}}" class="btn bg-rgba-dark-6 font-weight-bold text-white btn-outline-g-grey-dark shadow">Saber mas de la comunidad <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5 bg-light" id="comunidad-taucca">
            <div class="container">
                <div class="row pt-5">
                    <div class="col text-center">
                        <h1 class="font-weight-bold text-g-grey-primary">Comunidad <span class="text-g-red-dark">Taucca</span></h1>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        {{--<div class="line-title"></div>--}}
                        <p class="mt-3 lead font-weight-normal text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto eligendi, magni odit quae quos soluta tenetur? Illum laudantium molestias numquam optio possimus quaerat quibusdam! Enim qui vel vero? Architecto.</p>
                    </div>
                </div>
                <div class="row align-items-center mt-4">
                    <div class="col">
                        <h5>Comunidad Taucca titulo</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolor excepturi illum mollitia placeat porro sapiente sequi? Aspernatur natus nihil non, repellendus sunt tempora ut vero. Illum nulla sunt voluptates.</p>
                    </div>
                    <div class="col text-center">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=5HmBmdEiG0k&list=RD5HmBmdEiG0k&start_radio=1">
                            <img src="{{asset('images/queuna.jpg')}}" alt="" class="w-100 position-relative rounded shadow">
                        </a>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col">
                        <h5 class="text-secondary m-0 font-weight-bold">Actividades en la comunidad</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col">

                        <div class="row slider-huilloq">
                            <div class="col">
                                <img src="{{asset('images/sliders/slider-3.jpg')}}" alt="" class="w-100 rounded shadow">
                                <h6 class="my-3 font-weight-bold text-secondary">Actividad 1</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="" class="font-weight-bold text-info">View More</a>
                            </div>
                            <div class="col">
                                <img src="{{asset('images/sliders/slider-3.jpg')}}" alt="" class="w-100 rounded shadow">
                                <h6 class="my-3 font-weight-bold text-secondary">Actividad 1</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="" class="font-weight-bold text-info">View More</a>
                            </div>
                            <div class="col">
                                <img src="{{asset('images/sliders/slider-3.jpg')}}" alt="" class="w-100 rounded shadow">
                                <h6 class="my-3 font-weight-bold text-secondary">Actividad 1</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="" class="font-weight-bold text-info">View More</a>
                            </div>
                            <div class="col">
                                <img src="{{asset('images/sliders/slider-3.jpg')}}" alt="" class="w-100 rounded shadow">
                                <h6 class="my-3 font-weight-bold text-secondary">Actividad 1</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="" class="font-weight-bold text-info">View More</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="pt-5" id="comunidad-tupac">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="font-weight-bold text-g-grey-primary">Comunidad <span class="text-g-red-dark">Tupac</span></h1>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        {{--<div class="line-title"></div>--}}
                        <p class="mt-3 lead font-weight-normal text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto eligendi, magni odit quae quos soluta tenetur? Illum laudantium molestias numquam optio possimus quaerat quibusdam! Enim qui vel vero? Architecto.</p>
                    </div>
                </div>
                <div class="row align-items-center mt-4">
                    <div class="col text-center">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=5HmBmdEiG0k&list=RD5HmBmdEiG0k&start_radio=1">
                            <img src="{{asset('images/queuna.jpg')}}" alt="" class="w-100 position-relative rounded shadow">
                        </a>
                    </div>
                    <div class="col">
                        <h5>Comunidad Tupac titulo</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolor excepturi illum mollitia placeat porro sapiente sequi? Aspernatur natus nihil non, repellendus sunt tempora ut vero. Illum nulla sunt voluptates.</p>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col">
                        <h5 class="text-secondary m-0 font-weight-bold">Actividades en la comunidad</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col">

                        <div class="row slider-huilloq">
                            <div class="col mb-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="header-img-actividades">
                                            <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-box-actividades row m-0">
                                    <div class="col-8">
                                        <h6><a href="" class="text-g-grey-primary font-weight-bold">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                    </div>
                                    <div class="col-4 actividad_icon">
                                        <ul>
                                            <li>
                                                <a href=""><img src="{{asset('images/icon/image.png')}}" alt="" class="w-100"></a>
                                            </li>
                                            <li>
                                                <a href=""><img src="{{asset('images/icon/price.png')}}" alt="" class="w-100"></a>
                                            </li>
                                            <li>
                                                <a href=""><img src="{{asset('images/icon/location.png')}}" alt="" class="w-100"></a>
                                            </li>
                                            <li>
                                                <a href=""><img src="{{asset('images/icon/detail.png')}}" alt="" class="w-100"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="header-img-actividades">
                                            <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-box-actividades row m-0">
                                    <div class="col-8">
                                        <h6><a href="" class="text-g-grey-primary font-weight-bold">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                    </div>
                                    <div class="col-4 actividad_icon">
                                        <ul>
                                            <li>
                                                <a href=""><img src="{{asset('images/icon/image.png')}}" alt="" class="w-100"></a>
                                            </li>
                                            <li>
                                                <a href=""><img src="{{asset('images/icon/price.png')}}" alt="" class="w-100"></a>
                                            </li>
                                            <li>
                                                <a href=""><img src="{{asset('images/icon/location.png')}}" alt="" class="w-100"></a>
                                            </li>
                                            <li>
                                                <a href=""><img src="{{asset('images/icon/detail.png')}}" alt="" class="w-100"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="header-img-actividades">
                                            <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-box-actividades row m-0">
                                    <div class="col-8">
                                        <h6><a href="" class="text-g-grey-primary font-weight-bold">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                    </div>
                                    <div class="col-4 actividad_icon">
                                        <ul>
                                            <li>
                                                <a href=""><img src="{{asset('images/icon/image.png')}}" alt="" class="w-100"></a>
                                            </li>
                                            <li>
                                                <a href=""><img src="{{asset('images/icon/price.png')}}" alt="" class="w-100"></a>
                                            </li>
                                            <li>
                                                <a href=""><img src="{{asset('images/icon/location.png')}}" alt="" class="w-100"></a>
                                            </li>
                                            <li>
                                                <a href=""><img src="{{asset('images/icon/detail.png')}}" alt="" class="w-100"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section>
            <div class="offer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="offer-l">
                                <span class="ol-1"></span>
                                <span class="ol-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </span>
                                <span class="ol-4">Descuento en nuestros paquetes</span>
                                <span class="ol-3"></span>
                                <span class="ol-5">-$99</span>
                                <ul>
                                    <li>
                                        <a href="#!" class="offer-btn">
                                            <img src="{{asset('images/icon/dis1.png')}}" alt="" class="">
                                        </a>
                                        <span>Free WiFi</span>
                                    </li>
                                    <li>
                                        <a href="#!" class="offer-btn">
                                            <img src="{{asset('images/icon/dis2.png')}}" alt="">
                                        </a>
                                        <span>Breakfast</span>
                                    </li>
                                    <li>
                                        <a href="#!" class="offer-btn">
                                            <img src="{{asset('images/icon/dis3.png')}}" alt="">
                                        </a>
                                        <span>Pool</span>
                                    </li>
                                    {{--<li>--}}
                                    {{--<a href="#!" class="offer-btn">--}}
                                    {{--<img src="{{asset('images/icon/dis4.png')}}" alt="">--}}
                                    {{--</a>--}}
                                    {{--<span>Television</span>--}}
                                    {{--</li>--}}
                                    <li>
                                        <a href="#!" class="offer-btn">
                                            <img src="{{asset('images/icon/dis5.png')}}" alt="">
                                        </a>
                                        <span>GYM</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="offer-r">
                                <div class="or-1">
                                    <span class="or-11"><i class="far fa-eye"></i></span>
                                    <span class="or-12">Ojo</span>
                                </div>
                                <div class="or-2">
                                    <span class="or-21">Obten</span>
                                    <span class="or-22">70%</span>
                                    <span class="or-23">descuento</span>
                                    <span class="or-24">Codigo: RG5481WERQ</span>
                                    <span class="or-25"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="font-weight-bold text-g-grey-primary">Actividades <span class="text-g-red-dark">Popular</span></h1>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        {{--<div class="line-title"></div>--}}
                        <p class="mt-3 lead font-weight-normal text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <a href="">
                            <div class="top-actividades">
                                <img src="{{asset('images/top/home.jpg')}}" alt="" class="w-100 rounded">
                                <div class="top-actividades-footer text-white">
                                    <h4 class="font-weight-bold">Hola</h4>
                                    <p class="text-left h6 font-weight-bold m-0">12 Packages <span class="float-right font-weight-normal text-right">Starting from $2400</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-6">
                                <a href="">
                                    <div class="top-actividades">
                                        <img src="{{asset('images/top/home3.jpg')}}" alt="" class="w-100 rounded">
                                        <div class="top-actividades-footer text-white">
                                            <h4 class="font-weight-bold">Hola</h4>
                                            <p class="float-right font-weight-normal text-right m-0">Starting from $2400</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="">
                                    <div class="top-actividades">
                                        <img src="{{asset('images/top/home3.jpg')}}" alt="" class="w-100 rounded">
                                        <div class="top-actividades-footer text-white">
                                            <h4 class="font-weight-bold">Hola</h4>
                                            <p class="float-right font-weight-normal text-right m-0">Starting from $2400</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="">
                                    <div class="top-actividades">
                                        <img src="{{asset('images/top/home3.jpg')}}" alt="" class="w-100 rounded">
                                        <div class="top-actividades-footer text-white">
                                            <h4 class="font-weight-bold">Hola</h4>
                                            <p class="float-right font-weight-normal text-right m-0">Starting from $2400</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="">
                                    <div class="top-actividades">
                                        <img src="{{asset('images/top/home3.jpg')}}" alt="" class="w-100 rounded">
                                        <div class="top-actividades-footer text-white">
                                            <h4 class="font-weight-bold">Hola</h4>
                                            <p class="float-right font-weight-normal text-right m-0">Starting from $2400</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5 bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="font-weight-bold text-g-grey-primary">Reserve <span class="text-g-red-dark">Paquetes Listos Ahora!</span></h1>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        {{--<div class="line-title"></div>--}}
                        <p class="mt-3 lead font-weight-normal text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores commodi cum debitis dignissimos est eveniet iusto libero minima nam nisi nulla numquam odit.</p>
                    </div>
                </div>
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
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="font-weight-bold text-g-grey-primary">Los mejores <span class="text-g-red-dark">actividades de este mes</span></h1>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        {{--<div class="line-title"></div>--}}
                        <p class="mt-3 lead font-weight-normal text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto eligendi, magni odit quae quos soluta tenetur? Illum laudantium molestias numquam optio possimus quaerat quibusdam! Enim qui vel vero? Architecto.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col events">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
                        <table id="myTable">
                            <tbody class="small font-weight-bold text-secondary">
                            <tr class="h5 font-weight-bold text-g-grey-primary">
                                <th class="py-3">#</th>
                                <th>Nombre Actividad</th>
                                <th class="e_h1">Fecha</th>
                                <th class="e_h1">Hora</th>
                                <th class="e_h1">Lugar</th>
                                <th class="text-center">Book</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="{{asset('images/list/iplace-1.jpg')}}" alt="" />
                                    <a href="hotels-list.html" class="events-title font-weight-bold text-g-grey-primary">
                                        Tours chacra y alrededores
                                        <small class="text-g-grey-light">(Asoc. Las Hormiguitas)</small>
                                    </a>
                                </td>
                                <td class="e_h1">16.12.2016</td>
                                <td class="e_h1">10.00 PM</td>
                                <td class="e_h1">Huilloq</td>
                                <td class="text-center"><a href="booking.html" class="btn btn-sm btn-g-red-dark font-weight-bold text-center">Reservar Ahora</a> </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="{{asset('images/list/iplace-1.jpg')}}" alt="" />
                                    <a href="hotels-list.html" class="events-title font-weight-bold text-g-grey-primary">
                                        Tours chacra y alrededores
                                        <small class="text-g-grey-light">(Asoc. Las Hormiguitas)</small>
                                    </a>
                                </td>
                                <td class="e_h1">16.12.2016</td>
                                <td class="e_h1">10.00 PM</td>
                                <td class="e_h1">Huilloq</td>
                                <td class="text-center"><a href="booking.html" class="btn btn-sm btn-g-red-dark font-weight-bold text-center">Reservar Ahora</a> </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    <img src="{{asset('images/list/iplace-1.jpg')}}" alt="" />
                                    <a href="hotels-list.html" class="events-title font-weight-bold text-g-grey-primary">
                                        Tours chacra y alrededores
                                        <small class="text-g-grey-light">(Asoc. Las Hormiguitas)</small>
                                    </a>
                                </td>
                                <td class="e_h1">16.12.2016</td>
                                <td class="e_h1">10.00 PM</td>
                                <td class="e_h1">Huilloq</td>
                                <td class="text-center"><a href="booking.html" class="btn btn-sm btn-g-red-dark font-weight-bold text-center">Reservar Ahora</a> </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <div class="position-relative w-100">
            <div class="footer-pasto">
                <img src="{{asset('images/pasto.png')}}" alt="" class="w-100">
            </div>
        </div>
    @endsection
