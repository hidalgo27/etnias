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
                <div class="col-2 align-items-center">
                    <a href="{{route('home_path')}}"><img src="{{asset('images/logo-etnias.png')}}" alt="" class="w-100"></a>
                </div>
                <div class="col">
                    {{--<p class="m-0 font-kalam h5 text-info">Perú & Ecuador Especialist!</p>--}}
                </div>
                <div class="col-auto text-right">
                    <a href="#" class="text-secondary" data-toggle="modal" data-target="#myModal">
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
                                <h2 class="font-weight-bold text-secondary">Reserva de comunidades y actividades.</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="" class="text-secondary small font-weight-bold">COMUNIDAD</label>
                                    {{--<input type="text" class="form-control form-control-lg font-weight-bold" id="formGroupExampleInput" placeholder="Comunidad">--}}
                                    <select id="inputState" class="form-control font-weight-bold">
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
                                    <input type="date" class="form-control font-weight-bold" id="formGroupExampleInput" placeholder="TRAVEL DATE">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="text-secondary small font-weight-bold">SALIDA</label>
                                    <input type="date" class="form-control font-weight-bold" id="formGroupExampleInput" placeholder="To*">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="" class="text-secondary small font-weight-bold">HUÉSPEDES</label>
                                    <select id="inputState" class="form-control font-weight-bold">
                                        <option selected>Seleccione...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-block btn-info"><span class="font-weight-bold text-white">SEARCH</span></button>
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

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="font-weight-bold text-secondary">WHAT IT CAN DO FOR YOU</h1>
                <div class="line-title"></div>
                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto eligendi, magni odit quae quos soluta tenetur? Illum laudantium molestias numquam optio possimus quaerat quibusdam! Enim qui vel vero? Architecto.</p>
            </div>
        </div>
    </div>
</section>

</body>
{{--script--}}
<script src="{{asset("js/app.js")}}"></script>
{{--<script src="{{asset("js/plugins.js")}}"></script>--}}

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
    })
</script>
</html>
