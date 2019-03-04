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
<body>

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
                    <a href="#" class="text-g-red-light" data-toggle="modal" data-target="#myModal">
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
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
                                <h2 class="font-weight-bold text-g-grey-light">Reserva de comunidades y actividades en Cusco.</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="" class="text-secondary small font-weight-bold">COMUNIDAD</label>
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
                                    <label for="" class="text-secondary small font-weight-bold">LLEGADA</label>
                                    <input type="date" class="form-control" id="formGroupExampleInput" placeholder="TRAVEL DATE">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="text-secondary small font-weight-bold">SALIDA</label>
                                    <input type="date" class="form-control" id="formGroupExampleInput" placeholder="To*">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="" class="text-secondary small font-weight-bold">HUÉSPEDES</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Seleccione...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-block btn-g-green-light"><span class="font-weight-bold">SEARCH</span></button>
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
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="font-weight-bold text-g-grey-light">WHAT IT CAN DO FOR YOU</h1>
                <div class="line-title"></div>
                <p class="mt-3 lead font-weight-normal text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto eligendi, magni odit quae quos soluta tenetur? Illum laudantium molestias numquam optio possimus quaerat quibusdam! Enim qui vel vero? Architecto.</p>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="font-weight-bold text-g-grey-light"><i class="fas fa-angle-right text-g-red-light"></i> Comunidad Huilloq</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus fugiat laboriosam maiores obcaecati perferendis quis.</p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="position-relative w-100">
                    <img src="{{asset('images/home/huilloq.jpg')}}" alt="" class="w-100 position-relative rounded shadow">
                    <div class="position-absolute w-100 top-50">
                        <a href="" class="btn bg-rgba-dark-6 font-weight-bold text-white btn-outline-g-grey-dark shadow">Saber mas de la comunidad <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
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
                    <div class="col d-flex">
                        <div class="card">
                            <img src="{{asset('images/sliders/slider-3.jpg')}}" alt="" class="w-100 rounded-top shadow">
                            <div class="card-body">
                                <h6 class="my-3 font-weight-bold text-secondary">Actividad 1</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="font-weight-bold text-info">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card">
                            <img src="{{asset('images/sliders/slider-3.jpg')}}" alt="" class="w-100 rounded-top shadow">
                            <div class="card-body">
                                <h6 class="my-3 font-weight-bold text-secondary">Actividad 1</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="font-weight-bold text-info">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card">
                            <img src="{{asset('images/sliders/slider-3.jpg')}}" alt="" class="w-100 rounded-top shadow">
                            <div class="card-body">
                                <h6 class="my-3 font-weight-bold text-secondary">Actividad 1</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="font-weight-bold text-info">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card">
                            <img src="{{asset('images/sliders/slider-3.jpg')}}" alt="" class="w-100 rounded-top shadow">
                            <div class="card-body">
                                <h6 class="my-3 font-weight-bold text-secondary">Actividad 1</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="font-weight-bold text-info">View More</a>
                            </div>
                        </div>
                    </div>
              

                </div>

            </div>
        </div>
    </div>
</section>


<section class="my-5 bg-light py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h3 class="font-weight-bold text-g-grey-light"><i class="fas fa-angle-right text-g-red-light"></i> Comunidad Taucca</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus fugiat laboriosam maiores obcaecati perferendis quis.</p>
            </div>
        </div>
        <div class="row align-items-center">
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
        slidesToShow: 4,
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

</script>
</html>
