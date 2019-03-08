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

<header class="p-2 bg-rgba-white-7">
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

<section class="position-relative">
    <div id="home-slider-container" class="detail-slider-container">
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
    <div class="bg-header">
        <div class="container">
            <div class="row align-items-end bg-header-body pb-5">
                <div class="col text-white">
                    <h1 class="text-white">Universal luxury Grand Hotel</h1>
                    <p class="lead font-weight-normal">Location: 28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="box-header-menu bg-g-green-light text-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul>
                        <li>Comunidad: Huilloq</li>
                        <li>Precio : $500</li>
                        <li>Duracion : 3 dias</li>
                        <li class="btn-book">
                            <a href="">Reservar Ahora</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container container-shadow">

        <section class="my-5">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col">
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
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col font-poppins text-g-grey-primary">
                            <h5 class="font-weight-bold pb-2">DESCRIPCIÓN:</h5>
                            <p>Kusi Runa es una experiencia donde podrás compartir un día cotidiano
                                de la vida de los comuneros de Huilloc participando en el trabajo
                                agrícola en la chakra (campo de cultivo). Simbólicamente, será un
                                integrante de la comunidad y experimentará su modo de vida y el actuar
                                cotidiano del runa (campesino andino). Como comunero, se vestirá con
                                un poncho típico de Huilloc y utilizará herramientas tradicionales
                                durante las labores. Los hombres realizarán trabajos agrícolas y las
                                mujeres, de cocina. Finalizará su experiencia con la participación en las
                                celebraciones rituales, mediante la música y las danzas locales.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="font-weight-bold">Atractivo Complementario</h6>
                                    <p class="font-poppins"><i class="fas fa-check "></i> <b class="text-g-grey-light">Experiencia espiritual Inca:</b>
                                        Contacto con pobladores quechuohablantes
                                        Manifestaciones culturales: ropa tradicional de Huilloc, crianza de la
                                        agricultura ancestral, música y canto tradicionales / Naturaleza:
                                        montañas, valles, paisaje andino .</p>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="font-weight-bold">Atractivo Focal</h6>
                                    <p class="font-poppins"><i class="fas fa-check "></i> <b class="text-g-grey-light">Cultura Inca:</b> la experiencia de vivir como en el incanato.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col font-poppins">
                            <h5 class="font-weight-bold pb-3">Disponibilidad:</h5>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col">
                            <div  id="custom-cells"></div>
                        </div>
                        <div class="col">
                            <div  id="custom-cells-2"></div>
                        </div>
                        <div class="col-12">
                            <div id="custom-cells-events">
                                <strong></strong>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col font-poppins">
                            <h5 class="font-weight-bold pb-3">Galeria de imagenes:</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row slider-huilloq mx-4">
                                <div class="col">
                                    <a class="venobox" data-gall="myGallery" href="{{asset('images/paquetes/1.jpg')}}"><img src="{{asset('images/paquetes/1.jpg')}}" class="w-100" /></a>
                                </div>
                                <div class="col">
                                    <a class="venobox" data-gall="myGallery" href="{{asset('images/paquetes/1.jpg')}}"><img src="{{asset('images/paquetes/1.jpg')}}" class="w-100" /></a>
                                </div>
                                <div class="col">
                                    <a class="venobox" data-gall="myGallery" href="{{asset('images/paquetes/1.jpg')}}"><img src="{{asset('images/paquetes/1.jpg')}}" class="w-100" /></a>
                                </div>
                                <div class="col">
                                    <a class="venobox" data-gall="myGallery" href="{{asset('images/paquetes/1.jpg')}}"><img src="{{asset('images/paquetes/1.jpg')}}" class="w-100" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="font-poppins">
                                        <h5 class="font-weight-bold pb-2">Califique este paquete</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, eos voluptatibus? Itaque iure laudantium minus.</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row btn-group btn-group-toggle w-100 m-0 mb-3" data-toggle="buttons">
                                                <label class="col-auto btn btn-secondary">
                                                    <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                                <label class="col-auto btn btn-secondary">
                                                    <input type="radio" name="options" id="option2" autocomplete="off">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                                <label class="col-auto btn btn-secondary">
                                                    <input type="radio" name="options" id="option2" autocomplete="off">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                                <label class="col-auto btn btn-secondary">
                                                    <input type="radio" name="options" id="option2" autocomplete="off">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                                <label class="col-auto btn btn-secondary active">
                                                    <input type="radio" name="options" id="option3" autocomplete="off">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control" placeholder="Nombre">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-12 my-3">
                                            <textarea class="form-control" placeholder="Comentario"></textarea>
                                        </div>
                                        <div class="col-12 mb-4 text-center">
                                            <button class="btn btn-g-red-dark">Enviar</button>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-4">
                                                    <div class="row justify-content-center">
                                                        <div class="col-auto">
                                                            <img src="{{asset('images/paquetes/1.jpg')}}" alt="" class="rounded-circle" width="50" height="50">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col text-center">
                                                            <h5 class="m-0 mt-3 font-weight-bold text-g-grey-dark">Hidalgo Ponce</h5>
                                                            <p class="text-g-grey-light font-weight-bold small">19 enero, 2017</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <span class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <div class="d-block font-poppins pt-3">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi aspernatur aut consequuntur dolorem dolorum eaque esse exercitationem fugit hic iusto obcaecati officia pariatur quaerat, quod repellat similique ullam voluptatibus!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <sup>$</sup><span class="font-weight-bold display-4 h1">500</span><small>USD</small>
                            <a href="" class="btn btn-block btn-g-red-dark text-white font-weight-bold mt-3">Reservar Ahora</a>
                        </div>
                    </div>
                    <div class="card bg-light mt-4">
                        <div class="card-body font-poppins">
                            <h6 class="font-weight-bold">Duración y Periodo</h6>
                            <p class="font-poppins"><i class="fas fa-check "></i> La actividad es de 3 horas, durante todo el año.</p>
                            <hr>
                            <h6 class="font-weight-bold">Ubicación</h6>
                            <p class="font-poppins"><i class="fas fa-check "></i> Cusco, prov. Urubamba, dist. Ollantaytambo, comunidad de Huilloc</p>
                            <hr>
                            <h6 class="font-weight-bold">Tipo de Turismo</h6>
                            <p class="font-poppins"><i class="fas fa-check "></i> Turismo Rural Comunitario.</p>
                            <hr>
                            <h6 class="font-weight-bold">Guía Profesional</h6>
                            <p class="font-poppins"><i class="fas fa-check "></i> Idioma quechua y el idioma requerido por el visitante</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
