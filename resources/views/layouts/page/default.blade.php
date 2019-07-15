<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Etnia</title>
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MZK39C9');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143906334-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-143906334-1');
    </script>

</head>
<body>
    @yield('content')
    <div class="position-relative w-100">
        <div class="footer-pasto">
            <img src="{{asset('images/pasto.png')}}" alt="" class="w-100">
        </div>
    </div>
    <footer class="item footer" id="footer">

        {{--<div class="container"><!-- container -->--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4 col-sm-4 col-xs-12">--}}
                    {{--<div class="footer-box text-center">--}}
                        {{--<div class="footer-icon"><i class="fa fa-map-marker"></i></div>--}}
                        {{--<div class="footer-title">--}}
                            {{--<h5>ADDRESS</h5>--}}
                        {{--</div>--}}
                        {{--<div class="footer-disc">--}}
                            {{--<p>250 Av.Sol Cusco sur plaza</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-4 col-xs-12">--}}
                    {{--<div class="footer-box text-center">--}}
                        {{--<div class="footer-icon"><i class="fa fa-map-marker"></i></div>--}}
                        {{--<div class="footer-title">--}}
                            {{--<h5>ADDRESS</h5>--}}
                        {{--</div>--}}
                        {{--<div class="footer-disc">--}}
                            {{--<p>250 Av.Sol Cusco sur plaza</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-4 col-xs-12">--}}
                    {{--<div class="footer-box text-center">--}}
                        {{--<div class="footer-icon"><i class="fa fa-map-marker"></i></div>--}}
                        {{--<div class="footer-title">--}}
                            {{--<h5>ADDRESS</h5>--}}
                        {{--</div>--}}
                        {{--<div class="footer-disc">--}}
                            {{--<p>250 Av.Sol Cusco sur plaza</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="footer-social text-center">
                <ul>
{{--                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>--}}
                    <li><a href="https://www.instagram.com/mietnia/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/Mietnia/" target="_blank"><i class="fab fa-facebook"></i></a></li>
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
@stack('scripts')
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
                    slidesToScroll: 1,
                    arrows: false,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.slider-category').slick({
        // dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: false,
        nextArrow: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false
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
                    arrows: false,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
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
    $('body').scrollspy({ target: '#navbar-scroll' });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

</script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZK39C9"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</html>
