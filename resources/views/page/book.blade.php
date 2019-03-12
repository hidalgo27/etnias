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

<header class="p-2 bg-rgba-white-7 position-relative">
    <div class="">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-2 align-items-center">
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
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 10000,
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
    $('body').scrollspy({ target: '#navbar-scroll' });

    var disabledDates = ['2019.3.1', '2019.3.17', '2019.3.20', '2019.3.23'];

    $('#dp').datepicker({
        language: 'en',
        onRenderCell: function(d, type) {
            if (type == 'day') {
                var disabled = false,
                    formatted = getFormattedDate(d);
                disabled = disabledDates.filter(function(date){
                    return date == formatted;
                    //     return {html: '<span class="dp-note"></span>'}
                }).length;
                return {
                    disabled: disabled
                }
            }
        }
    });

    function getFormattedDate(date) {
        var year = date.getFullYear(),
            month = date.getMonth() + 1,
            date = date.getDate();

        return year + '.' + month + '.' + date;
    }

    // What dates should be disabled - year.month.date


    // var eventDates = [1, 18, 12, 31],
    var eventDates = ['2019.3.1', '2019.3.17', '2019.3.20', '2019.4.23'];
    $picker = $('#custom-cells'),
        $picker2 = $('#custom-cells-2'),
        $content = $('#custom-cells-events'),
        sentences = [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ita prorsus, inquam; Si enim ad populum me vocas, eum. Ita prorsus, inquam; Nonne igitur tibi videntur, inquit, mala? Hunc vos beatum; Idemne, quod iucunde? ',
            'Ratio quidem vestra sic cogit. Illi enim inter se dissentiunt. Tu vero, inquam, ducas licet, si sequetur; Non semper, inquam; ',
            'Duo Reges: constructio interrete. A mene tu? Ea possunt paria non esse. Est, ut dicis, inquam. Scaevolam M. Quid iudicant sensus? ',
            'Poterat autem inpune; Qui est in parvis malis. Prave, nequiter, turpiter cenabat; Ita credo. '
        ];

    $picker.datepicker({
        language: 'en',
        onRenderCell: function (date, cellType) {
            var currentDate = date.getDate();
            formatted = getFormattedDate(date);
            // Add extra element, if `eventDates` contains `currentDate`
            if (cellType == 'day' && eventDates.indexOf(formatted) != -1) {
                return {
                    html: currentDate + '<span class="dp-note"></span>'
                }
            }else{
                return {
                    disabled: true
                }
            }
        },
        onSelect: function onSelect(fd, date) {
            var title = '', content = '';
            // If date with event is selected, show it
            formatted = getFormattedDate(date);
            if (date && eventDates.indexOf(formatted) != -1) {
                title = fd;
                content = sentences[Math.floor(Math.random() * eventDates.length)];
            }
            $('strong', $content).html(title);
            $('p', $content).html(content);
        }
    });
    $picker2.datepicker({
        language: 'en',
        startDate: new Date('2019.4.1'),
        onRenderCell: function (date, cellType) {
            var currentDate = date.getDate();
            formatted = getFormattedDate(date);
            // Add extra element, if `eventDates` contains `currentDate`
            if (cellType == 'day' && eventDates.indexOf(formatted) != -1) {
                return {
                    html: currentDate + '<span class="dp-note"></span>'
                }
            }else{
                return {
                    disabled: true
                }
            }
        },
        onSelect: function onSelect(fd, date) {
            var title = '', content = '';
            // If date with event is selected, show it
            formatted = getFormattedDate(date);
            if (date && eventDates.indexOf(formatted) != -1) {
                title = fd;
                content = sentences[Math.floor(Math.random() * eventDates.length)];
            }
            $('strong', $content).html(title);
            $('p', $content).html(content);
        }
    });

    // Select initial date from `eventDates`
    // var currentDate = currentDate = new Date();
    // $picker.data('datepicker').selectDate(new Date(currentDate.getFullYear(), currentDate.getMonth(), 10));



    // What dates should be disabled - year.month.date

</script>
</html>
