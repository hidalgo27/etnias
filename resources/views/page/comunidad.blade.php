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
                <div class="col-5 text-center">
                    <h1 class="font-weight-bold display-4 text-white">Comunidades</h1>
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
                <h1 class="font-weight-bold display-4 text-g-grey-primary">Comunidades <span class="text-g-red-dark">Región Cusco</span></h1>
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
            <div class="col-4 text-center">
                <img src="{{asset('images/taucca1.jpg')}}" alt="" class="w-100 rounded shadow">
                <a href="{{route('comunidad_show_path')}}" class="m-0 d-block mt-3 h3 font-weight-bold text-g-green-light stretched-link">Taucca</a>
                <div class="box-comunidad-arrow text-center m-auto"></div>
                <div class="card bg-light shadow">
                    <div class="card-body">
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi assumenda earum ex fugit nihil nobis optio rem sed velit. Blanditiis deleniti eius est harum ipsa praesentium qui unde veniam.</p>
                    </div>
                </div>
            </div>
            <div class="col-4 text-center">
                <img src="{{asset('images/taucca2.jpg')}}" alt="" class="w-100 rounded shadow">
                <a href="{{route('comunidad_show_path')}}" class="m-0 d-block mt-3 h3 font-weight-bold text-g-green-light stretched-link">Huilloq</a>
                <div class="box-comunidad-arrow text-center m-auto"></div>
                <div class="card bg-light shadow">
                    <div class="card-body">
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi assumenda earum ex fugit nihil nobis optio rem sed velit. Blanditiis deleniti eius est harum ipsa praesentium qui unde veniam.</p>
                    </div>
                </div>
            </div>
            <div class="col-4 text-center">
                <img src="{{asset('images/taucca3.jpg')}}" alt="" class="w-100 rounded shadow">
                <a href="{{route('comunidad_show_path')}}" class="m-0 d-block mt-3 h3 font-weight-bold text-g-green-light stretched-link">Tupac</a>
                <div class="box-comunidad-arrow text-center m-auto"></div>
                <div class="card bg-light shadow">
                    <div class="card-body">
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi assumenda earum ex fugit nihil nobis optio rem sed velit. Blanditiis deleniti eius est harum ipsa praesentium qui unde veniam.</p>
                    </div>
                </div>
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
