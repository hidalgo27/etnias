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
                        <a href="{{route('comunidad_path')}}" class="font-weight-bold h5 d-block text-g-grey-dark">Comunidades</a>
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
    <div class="form-header-bg h-25">
        <div class="container">
            <div class="row justify-content-center align-items-center h-100vh">
                <div class="col text-center">
                    <h1 class="font-weight-bold display-4 text-white">Comunidad de Taucca</h1>
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

<section class="bg-light">
    <div class="container container-shadow">
        <div class="row pt-5">
            <div class="col-9">
                <div class="row" id="explore">
                    <div class="col">
                        <h1 class="font-weight-bold display-4 text-g-grey-primary"><span class="text-g-red-dark">Taucca</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolor excepturi illum mollitia placeat porro sapiente sequi? Aspernatur natus nihil non, repellendus sunt tempora ut vero. Illum nulla sunt voluptates.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid assumenda commodi dolore doloremque dolores error facilis illo, ipsam magnam nulla numquam omnis, quisquam repellat reprehenderit similique vitae voluptas. Quidem, recusandae.</p>
                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <h5 class="font-weight-bold">Comunidad Taucca titulo</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolor excepturi illum mollitia placeat porro sapiente sequi? Aspernatur natus nihil non, repellendus sunt tempora ut vero. Illum nulla sunt voluptates.</p>
                            </div>
                            <div class="col text-center">
                                <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=5HmBmdEiG0k&list=RD5HmBmdEiG0k&start_radio=1">
                                    <img src="{{asset('images/queuna.jpg')}}" alt="" class="w-100 position-relative rounded shadow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4" id="actividades">
                    <div class="col">
                        <h4 class="font-weight-bold text-g-grey-primary mt-5 mb-4">Elija una actividad en Taucca</h4>
                        <div class="row">
                            <div class="col-4 mb-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="header-img-actividades">
                                            <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-box-actividades row m-0">
                                    <div class="col">
                                        <h6><a href="" class="text-g-grey-primary font-weight-bold stretched-link">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="header-img-actividades">
                                            <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-box-actividades row m-0">
                                    <div class="col">
                                        <h6><a href="" class="text-g-grey-primary font-weight-bold">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="header-img-actividades">
                                            <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-box-actividades row m-0">
                                    <div class="col">
                                        <h6><a href="" class="text-g-grey-primary font-weight-bold">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="header-img-actividades">
                                            <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-box-actividades row m-0">
                                    <div class="col">
                                        <h6><a href="" class="text-g-grey-primary font-weight-bold">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="header-img-actividades">
                                            <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-box-actividades row m-0">
                                    <div class="col">
                                        <h6><a href="" class="text-g-grey-primary font-weight-bold">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="header-img-actividades">
                                            <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-box-actividades row m-0">
                                    <div class="col">
                                        <h6><a href="" class="text-g-grey-primary font-weight-bold">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mb-4" id="asociaciones">
                    <div class="col">
                        <h4 class="font-weight-bold text-g-grey-primary  mb-4">Asociaciones en la comunidad</h4>
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="{{asset('images/taucca3.jpg')}}" alt="" width="150" height="150" class="rounded-circle shadow">
                                <h6 class="d-block my-2 font-weight-bold text-g-grey-primary cursor-pointer stretched-link" data-toggle="modal" data-target="#comunidad-hormiguitas">Asociacion las Hormiguitas</h6>
                                <!-- Modal -->
                                <div class="modal fade" id="comunidad-hormiguitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
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
                            </div>
                            <div class="col-4 text-center">
                                <img src="{{asset('images/taucca3.jpg')}}" alt="" width="150" height="150" class="rounded-circle shadow">
                                <h6 class="d-block my-2 font-weight-bold text-g-grey-primary cursor-pointer stretched-link" data-toggle="modal" data-target="#comunidad-hormiguitas">Asociacion las Hormiguitas</h6>
                                <!-- Modal -->
                                <div class="modal fade" id="comunidad-hormiguitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
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
                            </div>
                            <div class="col-4 text-center">
                                <img src="{{asset('images/taucca3.jpg')}}" alt="" width="150" height="150" class="rounded-circle shadow">
                                <h6 class="d-block my-2 font-weight-bold text-g-grey-primary cursor-pointer stretched-link" data-toggle="modal" data-target="#comunidad-hormiguitas">Asociacion las Hormiguitas</h6>
                                <!-- Modal -->
                                <div class="modal fade" id="comunidad-hormiguitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-5" id="historia">
                    <div class="col">
                        <h4 class="font-weight-bold text-g-grey-primary  mb-4">Historia</h4>
                        <div class="row">
                            <div class="col">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi exercitationem facere in iusto maiores nesciunt, quam. At consectetur corporis laudantium maiores modi nihil obcaecati quam, quas reprehenderit repudiandae sunt.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <nav id="navbar-scroll" class="navbar navbar-light bg-light sticky-top">
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link font-weight-bold" href="#explore">Explore la comunidad de Taucca</a>
                        <a class="nav-link font-weight-bold" href="#actividades">Elija una actividad en Taucca</a>
                        <a class="nav-link font-weight-bold" href="#asociaciones">Asociaciones en la comunidad</a>
                        <a class="nav-link font-weight-bold" href="#historia">Historia</a>
                    </nav>
                </nav>
            </div>
        </div>
    </div>
</section>

<div class="position-relative w-100">
    <div class="footer-pasto">
        <img src="{{asset('images/pasto.png')}}" alt="" class="w-100">
    </div>
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
