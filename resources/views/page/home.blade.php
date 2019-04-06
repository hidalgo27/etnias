@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu')
        <section class="position-relative">
            <div class="form-header">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-5">
                            <form action="{{route('client_buscar_path', 'caminatas')}}" method="post" class="bg-rgba-white-8 p-4 rounded">
                                @csrf
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
                                            <select id="inputState" class="form-control" name="slc_comunidad" required>
                                                <option value="">Seleccione...</option>
                                                @foreach($comunidad as $comunidades)
                                                    <option value="{{$comunidades->nombre}}">{{ucwords(strtolower($comunidades->nombre))}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="text-g-grey-dark small font-weight-bold">LLEGADA</label>
                                            <input type="date" class="form-control" name="txt_fecha" id="formGroupExampleInput" placeholder="TRAVEL DATE" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="text-g-grey-dark small font-weight-bold">HUÉSPEDES</label>
                                            <select id="inputState" class="form-control" name="slc_huesped" required>
                                                <option value="">Seleccione...</option>
                                                <option value="1-1">1</option>
                                                <option value="2-2">2</option>
                                                <option value="3-3">3</option>
                                                <option value="4-4">4</option>
                                                <option value="5-9">5 - 9</option>
                                                <option value="10-14">10 - 14</option>
                                                <option value="15-19">15 - 19</option>
                                                <option value="20-29">20 - 29</option>
                                                <option value="30-49">30 - 49</option>
                                                <option value="50-79">50 - 79</option>
                                                <option value="80">80+</option>
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
                @foreach($categoria as $categorias)
                <div class="col mb-4">
                    <div class="row no-gutters position-relative">
                        <div class="card shadow-sm">
                            <div class="row align-items-center no-gutters">
                                <div class="col-md-4">
                                    <img src="{{asset('images/categoria/'.$categorias->imagen.'')}}" alt="" class="w-100 rounded-left">
                                </div>
                                <div class="col-md position-static p-2">
                                    <a href="{{route('actividades_category_show_path', str_replace(' ', '-', strtolower($categorias->nombre)))}}" class="p-0 m-0 text-decoration-none font-weight-bold text-secondary stretched-link">{{ucwords(strtolower($categorias->nombre))}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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

        <section class="position-relative">
            <div class="sticky-top mt-5 shadow-sm">
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
            </div>

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
                        @foreach($comunidad_huilloc as $comunidades_huilloc)
                            @foreach($comunidades_huilloc->asociaciones as $asociaciones_huilloc)
                                @foreach($asociaciones_huilloc->actividades as $actividades_huilloc)
                                    @foreach($disponibilidad->where('actividad_id', $actividades_huilloc->id) as $disponibilidades)
                                        @if ($disponibilidades->actividad_id == $actividades_huilloc->id)
                                        <div class="col mb-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="header-img-actividades">
                                                        @foreach($actividades_huilloc->fotos->where('estado',2) as $fotos_huilloc)
                                                            <img src="https://admin.etniasperu.travel/admin/mostar/imagen/{{$fotos_huilloc->imagen}}/actividades" alt="" class="w-100">
                                                        @endforeach
                                                        <div class="position-absolute-top">
                                                            <span class="badge badge-g-red-primary small">{{ucwords(strtolower($actividades_huilloc->categoria))}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer-box-actividades row m-0 align-items-center">
                                                <div class="col-7">
                                                    <h6><a href="{{route('detail_path', str_replace(' ', '-', strtolower($actividades_huilloc->titulo)))}}" class="text-g-grey-primary font-weight-bold">{{$actividades_huilloc->titulo}}</a></h6>
                                                </div>
                                                <div class="col-5 text-right">
                                                    @foreach($actividades_huilloc->precios as $precio)
                                                        @if (isset($precio))
                                                            <span class="font-weight-bold text-primary"><sup>$</sup>{{$precio->precio}}<small class="p-0">USD</small><small data-toggle="tooltip" data-placement="top" title="Precio para 2 personas."><i class="fas fa-user-friends"></i></small></span>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
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
                                    <a href="{{route('comunidad_show_path', 'huilloc')}}" class="btn bg-rgba-dark-6 font-weight-bold text-white btn-outline-g-grey-dark shadow">Saber más de la comunidad <i class="fas fa-angle-right"></i></a>
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
                            <p class="mt-3 lead font-weight-normal text-secondary"><b>Distancia de la ciudad más cercana:</b> 1 hora 30 minutos de la ciudad del Cusco.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mt-4">
                        <div class="col">
                            <h5>ASOCIACIÓN HORMIGUITAS DE TAUCCA</h5>
                            <p>Ubicado en el distrito de Chincheros en la ciudad del Cusco, la comunidad de Taucca es más
                                conocida por su actividad agrícola: cosecha de papa, maíz, habas, cebada y trigo ubicada a 20
                                minutos del centro arqueológico de Chincheros ofrece diversas actividades de turismo rural
                                comunitario entre ellas el sembrado y/o cosecha de sus productos, elaboración de artesanías,
                                entre otros. Visita la comunidad de Taucca y vive inolvidables experiencias.</p>
                            <a href="" class="text-primary font-weight-bold">Saber más de la comunidad <i class="fas fa-chevron-right"></i></a>
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
                                @foreach($comunidad_taucca as $comunidades_taucca)
                                    @foreach($comunidades_taucca->asociaciones as $asociacion_taucca)
                                        @foreach($asociacion_taucca->actividades as $actividades_taucca)
                                            @foreach($disponibilidad->where('actividad_id', $actividades_taucca->id) as $disponibilidades)
                                                @if ($disponibilidades->actividad_id == $actividades_taucca->id)
                                                    <div class="col">
                                                        <img src="{{asset('images/sliders/slider-3.jpg')}}" alt="" class="w-100 rounded shadow">
                                                        <h6 class="my-3 font-weight-bold text-secondary">{{$actividades_taucca->titulo}}</h6>
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elidfdft.</p>--}}
                                                        <div class="d-block"><i class="fas fa-check "></i> <b class="text-g-grey-light">Duración:</b> {{ucwords(strtolower($actividades_taucca->duracion))}}</div>
                                                        @foreach($actividades_taucca->precios as $precio)
                                                            @if (isset($precio))
                                                                <div class="d-block"><i class="fas fa-check "></i> <b class="text-g-grey-light">Precio:</b> {{ucwords(strtolower($precio->precio))}}</div>
                                                            @endif
                                                        @endforeach
                                                        <a href="{{route('detail_path', str_replace(' ', '-', strtolower($actividades_taucca->titulo)))}}" class="font-weight-bold text-info pt-3 d-block stretched-link">View More</a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                @endforeach

                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <section class="pt-5" id="comunidad-tupac">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="font-weight-bold text-g-grey-primary">Comunidad <span class="text-g-red-dark">Amaru</span></h1>
                            <div class="title-line">
                                <div class="tl-1"></div>
                                <div class="tl-2"></div>
                                <div class="tl-3"></div>
                            </div>
                            {{--<div class="line-title"></div>--}}
                            <p class="mt-3 lead font-weight-normal text-secondary">Asociación de Tejedores Tradicionales Laraypas Indígenas de Amaru.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mt-4">
                        <div class="col text-center">
                            <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=5HmBmdEiG0k&list=RD5HmBmdEiG0k&start_radio=1">
                                <img src="{{asset('images/queuna.jpg')}}" alt="" class="w-100 position-relative rounded shadow">
                            </a>
                        </div>
                        <div class="col">
                            <h5>Laraypas Indígenas de Amaru</h5>
                            <p>Ubicado en el distrito de Pisac en la ciudad del Cusco, la comunidad de Amaru está conformada
                                por 200 familias, su actividad principal es la textileria, está ubicado a 20 minutos del centro
                                arqueológico de Pisac, ofrece diversas actividades de turismo comunitario como la siembra y/o
                                cosecha de productos, pago a la tierra, proceso de elaboración de textiles, enseñanza de plantas
                                medicinales. Visita la comunidad de Amaru y vive una experiencia ancestral en la ciudad de los
                                Incas.</p>
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
                                @foreach($comunidad_amaru as $comunidades_amaru)
                                    @foreach($comunidades_amaru->asociaciones as $asociacion_amaru)
                                        @foreach($asociacion_amaru->actividades as $actividades_amaru)
                                            @foreach($disponibilidad->where('actividad_id', $actividades_amaru->id) as $disponibilidades)
                                                @if ($disponibilidades->actividad_id == $actividades_amaru->id)
                                                    <div class="col mb-4">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="header-img-actividades">
                                                                    <img src="{{asset('images/huilloq/thumbnail/huilloq1.jpg')}}" alt="" class="w-100">
                                                                    <div class="position-absolute-top">
                                                                        <span class="badge badge-g-red-primary small">{{ucwords(strtolower($actividades_amaru->categoria))}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="footer-box-actividades row m-0 align-items-center">
                                                            <div class="col-7">
                                                                <h6><a href="{{route('detail_path', str_replace(' ', '-', strtolower($actividades_amaru->titulo)))}}" class="text-g-grey-primary font-weight-bold">{{$actividades_amaru->titulo}}</a></h6>
                                                            </div>
                                                            <div class="col-5 text-right">
                                                                @foreach($actividades_amaru->precios as $precio)
                                                                    @if (isset($precio))
                                                                        <span class="font-weight-bold text-primary"><sup>$</sup>{{$precio->precio}}<small class="p-0">USD</small><small data-toggle="tooltip" data-placement="top" title="Precio para 2 personas."><i class="fas fa-user-friends"></i></small></span>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div>
            </section>

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

        {{--<section class="mt-5 bg-light py-5">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col text-center">--}}
                        {{--<h1 class="font-weight-bold text-g-grey-primary">Reserve <span class="text-g-red-dark">Paquetes Listos Ahora!</span></h1>--}}
                        {{--<div class="title-line">--}}
                            {{--<div class="tl-1"></div>--}}
                            {{--<div class="tl-2"></div>--}}
                            {{--<div class="tl-3"></div>--}}
                        {{--</div>--}}
                        {{--<div class="line-title"></div>--}}
                        {{--<p class="mt-3 lead font-weight-normal text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores commodi cum debitis dignissimos est eveniet iusto libero minima nam nisi nulla numquam odit.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="paquete-box">--}}
                            {{--<div class="paquete-box-header">--}}
                                {{--<div class="paquete-box-header-ico">--}}
                                    {{--<img src="{{asset('images/paquetes/hci1.png')}}" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="paquete-box-header-bottom">--}}
                                    {{--Paquetes disponibles: 42--}}
                                {{--</div>--}}
                                {{--<img src="{{asset('images/paquetes/1.jpg')}}" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="paquete-box-footer">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col">--}}
                                        {{--<a href="hotel-details.html">--}}
                                            {{--<h5 class="font-weight-bold text-g-grey-primary">Taucca de ensueño</h5>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row align-items-center">--}}
                                    {{--<div class="col-8">--}}
                                        {{--<div class="paquete-box-foote-descr">--}}
                                            {{--Comunidad:  Taucca <br>--}}
                                            {{--Asociación: Las hormiguitas <br>--}}
                                            {{--Raiting:--}}
                                            {{--<span class="text-warning">--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star-o" aria-hidden="true"></i>--}}
                                    {{--</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-4">--}}
                                        {{--<span class="h1 font-weight-bold text-g-red-dark">$420</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="paquete-box">--}}
                            {{--<div class="paquete-box-header">--}}
                                {{--<div class="paquete-box-header-ico">--}}
                                    {{--<img src="{{asset('images/paquetes/hci1.png')}}" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="paquete-box-header-bottom">--}}
                                    {{--Paquetes disponibles: 42--}}
                                {{--</div>--}}
                                {{--<img src="{{asset('images/paquetes/1.jpg')}}" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="paquete-box-footer">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col">--}}
                                        {{--<a href="hotel-details.html">--}}
                                            {{--<h5 class="font-weight-bold text-g-grey-primary">Taucca de ensueño</h5>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row align-items-center">--}}
                                    {{--<div class="col-8">--}}
                                        {{--<div class="paquete-box-foote-descr">--}}
                                            {{--Comunidad:  Taucca <br>--}}
                                            {{--Asociación: Las hormiguitas <br>--}}
                                            {{--Raiting:--}}
                                            {{--<span class="text-warning">--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star-o" aria-hidden="true"></i>--}}
                                    {{--</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-4">--}}
                                        {{--<span class="h1 font-weight-bold text-g-red-dark">$420</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="paquete-box">--}}
                            {{--<div class="paquete-box-header">--}}
                                {{--<div class="paquete-box-header-ico">--}}
                                    {{--<img src="{{asset('images/paquetes/hci1.png')}}" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="paquete-box-header-bottom">--}}
                                    {{--Paquetes disponibles: 42--}}
                                {{--</div>--}}
                                {{--<img src="{{asset('images/paquetes/1.jpg')}}" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="paquete-box-footer">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col">--}}
                                        {{--<a href="hotel-details.html">--}}
                                            {{--<h5 class="font-weight-bold text-g-grey-primary">Taucca de ensueño</h5>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row align-items-center">--}}
                                    {{--<div class="col-8">--}}
                                        {{--<div class="paquete-box-foote-descr">--}}
                                            {{--Comunidad:  Taucca <br>--}}
                                            {{--Asociación: Las hormiguitas <br>--}}
                                            {{--Raiting:--}}
                                            {{--<span class="text-warning">--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                        {{--<i class="fa fa-star-o" aria-hidden="true"></i>--}}
                                    {{--</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-4">--}}
                                        {{--<span class="h1 font-weight-bold text-g-red-dark">$420</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}

        <section class="mt-5 bg-light py-5">
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
                            @foreach($comunidad as $comunidades)
                                @foreach($comunidades->asociaciones as $asociaciones)
                                    @foreach($asociaciones->actividades as $actividades)
                                        @foreach($disponibilidad_mes->where('actividad_id', $actividades->id) as $disponibilidades_mes)
                                            @if ($disponibilidades_mes->actividad_id == $actividades->id)
                                                <tr>

                                                    <td class="">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <img src="{{asset('images/list/iplace-1.jpg')}}" alt="" />
                                                            </div>
                                                            <div class="col text-truncate">
                                                                <a href="{{route('detail_path', str_replace(' ', '-', strtolower($actividades->titulo)))}}" class="events-title font-weight-bold text-g-grey-primary stretched-link">
                                                                    {{ucwords(strtolower($actividades->titulo))}}
                                                                    <small class="d-block text-primary font-weight-bold">{{ucwords(strtolower($actividades->categoria))}}</small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$disponibilidades_mes->fecha}}</td>
                                                    <td class="w-25 text-center">
                                                        @foreach($actividades->precios as $precio)
                                                            <sup>$</sup>{{$precio->precio}}<small>USD</small>
                                                            <small class="d-block">(precio para 2 <i class="fas fa-male"></i>)</small></td>
                                                    @endforeach
                                                    <td class="e_h1">{{ucwords(strtolower($comunidades->nombre))}}</td>
                                                    <td class="text-center"><a href="{{route('detail_path', str_replace(' ', '-', strtolower($actividades->titulo)))}}" class="btn btn-sm btn-g-red-dark font-weight-bold text-center">Reservar Ahora</a> </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @endforeach
                                @endforeach
                            @endforeach
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
