<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
</head>
<body data-spy="scroll" data-target="#navbar-scroll" data-offset="0">

<header class="p-2">
    <div class="">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">
                <div class="col-3 align-items-center">
                    <a href="{{route('home_path')}}"><img src="{{asset('images/etnias-peru.png')}}" alt="" class="w-100 pink"></a>
                </div>
                <div class="col">
                    {{--<p class="m-0 font-kalam h5 text-info">Perú & Ecuador Especialist!</p>--}}
                </div>
                <div class="col-auto text-right">
                    <a href="#" class="text-g-red-dark" data-toggle="modal" data-target="#myModal">
                        <i class="fas fa-bars h1 m-0 p-0"></i>
                        <small class="d-block">MENU</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Modal -->
<div class="modal left fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body pb-0">
                <div class="row">
                    <div class="col">
                        <img src="{{asset('images/logo-etnias-2.png')}}" alt="" class="w-100">
                    </div>
                    <div class="col-auto">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row">
                    <div class="col text-right">
                        <a href="" class="font-weight-bold h5 d-block text-g-grey-dark">Comunidades</a>
                        <a href="" class="font-weight-bold h5 d-block text-g-grey-dark">Actividades</a>
                        <a href="" class="font-weight-bold h5 d-block text-g-grey-dark">Paquetes</a>
                        <a href="" class="font-weight-bold h5 d-block text-g-grey-dark">Sobre Nosotros</a>
                        <a href="" class="font-weight-bold h5 d-block text-g-grey-dark">Nuestro Blog</a>
                        <a href="" class="font-weight-bold h5 d-block text-g-grey-dark">Contáctenos</a>
                        <hr>
                        <a href="" class="font-weight-bold h5 d-block text-primary m-0">Inicio de Sesión <i class="fas fa-sign-in-alt"></i></a>
                    </div>
                </div>
                <hr class="my-3">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="row">
                            <div class="col">
                                <i class="fab fa-facebook fa-2x text-primary"></i>
                            </div>
                            <div class="col">
                                <i class="fab fa-twitter fa-2x text-info"></i>
                            </div>
                            <div class="col">
                                <i class="fab fa-instagram fa-2x text-g-grey-light"></i>
                            </div>
                            <div class="col">
                                <i class="fab fa-youtube fa-2x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-4">
                    <div class="col text-center">
                        <a href="" class="font-weight-normal h6 d-block text-g-grey-light">Términos y condiciones</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="text-g-grey-dark small font-weight-bold">LLEGADA</label>
                                    <input type="date" class="form-control" id="formGroupExampleInput" placeholder="TRAVEL DATE">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="text-g-grey-dark small font-weight-bold">SALIDA</label>
                                    <input type="date" class="form-control" id="formGroupExampleInput" placeholder="To*">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="" class="text-g-grey-dark small font-weight-bold">HUÉSPEDES</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Seleccione...</option>
                                        <option>...</option>
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

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="font-weight-bold display-4 text-g-grey-primary">TURISMO <span class="text-g-red-dark">VIVENCIAL</span></h1>
                <h4 class="text-g-grey-light">Una experiencia inolbidable y la oportunidad de conocer el interior del <stong class="text-g-grey-dark">país de los Incas.</stong></h4>
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
                    <p class="lead font-weight-bold m-0">Ofrecemos tours y actividades vivenciales en comunidades de la region del Cusco.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sticky-top mt-4 shadow-sm">
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
                <p class="mt-3 lead font-weight-normal text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto eligendi, magni odit quae quos soluta tenetur? Illum laudantium molestias numquam optio possimus quaerat quibusdam! Enim qui vel vero? Architecto.</p>
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                <h5 class="text-secondary m-0 font-weight-bold">Actividades en la comunidad</h5>
            </div>
        </div>

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
            {{--http://rn53themes.net/themes/demo/travelz/main.html#--}}
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

        <div class="row mt-4">
            <div class="col text-center">
                <div class="position-relative w-100">
                    <img src="{{asset('images/home/huilloq.jpg')}}" alt="" class="w-100 position-relative rounded shadow">
                    <div class="position-absolute w-100 top-50">
                        <a href="" class="btn bg-rgba-dark-6 font-weight-bold text-white btn-outline-g-grey-dark shadow">Saber mas de la comunidad <i class="fas fa-angle-right"></i></a>
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

<div>
    <img src="{{asset('images/pasto.png')}}" alt="" class="w-100">
</div>
<footer class="item footer" id="footer">

        <div class="container"><!-- container -->
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box text-center">
                        <div class="footer-icon"><i class="fa fa-map-marker"></i></div>
                        <div class="footer-title">
                            <h5>ADDRESS</h5>
                        </div>
                        <div class="footer-disc">
                            <p>250 Av.Sol Cusco sur plaza</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box text-center">
                        <div class="footer-icon"><i class="fa fa-map-marker"></i></div>
                        <div class="footer-title">
                            <h5>ADDRESS</h5>
                        </div>
                        <div class="footer-disc">
                            <p>250 Av.Sol Cusco sur plaza</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box text-center">
                        <div class="footer-icon"><i class="fa fa-map-marker"></i></div>
                        <div class="footer-title">
                            <h5>ADDRESS</h5>
                        </div>
                        <div class="footer-disc">
                            <p>250 Av.Sol Cusco sur plaza</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-social text-center">
                <ul>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                </ul>
            </div>
            <div class="copyright-text text-center">
                <p>© Travel 2019, All Rights Reserved, Developed by pandaninja</p>
            </div>
        </div><!-- /.container -->

</footer><!-- /.item -->
</body>
{{--script--}}
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/plugins.js")}}"></script>

<script>
    var $slider = $('#home-slider');
    $(document).ready(function(){
        $slider.slick({
            autoplay: true,
            autoplaySpeed: 5000,
            // dots: true,
            infinite: true,
            fade: true,
            arrows: false
        });
        $("#home-slider-container .slider-controls .slider-prev").on("click",function(){
            $slider.slick('slickPrev');
        });
        $("#home-slider-container .slider-controls .slider-next").on("click",function(){
            $slider.slick('slickNext');
        });

        $slider.find(".slider-content").css({"height":$(window).height(),"eidth":$(window).width()});

    });

    $(window).resize(function(){
        $slider.find(".slider-content").css({"height":$(window).height(),"eidth":$(window).width()});
    });

    //venobox
    $(document).ready(function(){
        $('.venobox').venobox();
    });

    //slick

    $('.slider-huilloq').slick({
        // dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        // dots: true,
        centerMode: true,
        focusOnSelect: true,

        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    asNavFor: '.slider-for',
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    asNavFor: '.slider-for',
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    asNavFor: '.slider-for',
                }
            }
        ]
    });

    function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    $('body').scrollspy({ target: '#navbar-scroll' })
</script>
</html>
