@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu')
        <section class="position-relative">
            <div class="form-header mb-4">
                <div class="container">
                    <div class="row">
                        <div class="col d-none d-sm-block text-center">
                            <h5 class="font-weight-bold h2 text-white">@lang('home.title_search')</h5>
                        </div>
                    </div>
                    <div class="row mt-2 justify-content-center">
                        <div class="col-9">
                            <form action="{{route('client_buscar_path', 'caminatas')}}" method="post" class="bg-rgba-dark-3 px-4 py-2 rounded">
                                @csrf
                                {{--<div class="row">--}}
                                    {{--<div class="col">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="" class="text-g-grey-dark small font-weight-bold">COMUNIDAD</label>--}}
                                            {{--<select id="inputState" class="form-control" name="slc_comunidad" required>--}}
                                                {{--<option value="">Seleccione...</option>--}}
                                                {{--@foreach($comunidad as $comunidades)--}}
                                                    {{--<option value="{{$comunidades->nombre}}">{{ucwords(strtolower($comunidades->nombre))}}</option>--}}
                                                {{--@endforeach--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg">
                                        <div class="form-group">
                                            <label for="" class="text-white small font-weight-bold">@lang('home.fecha_viaje')</label>
                                            <input type="date" class="form-control" name="txt_fecha" id="formGroupExampleInput" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg">
                                        <div class="form-group">
                                            <label for="slc_huesped" class="text-white small font-weight-bold">@lang('home.nro_pasajeros')</label>
                                            <input type="number" min="1" class="form-control" name="slc_huesped" id="slc_huesped" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-block pt-2 mt-1">
                                            <button type="submit" class="btn btn-block btn-g-green-primary "><span class="font-weight-bold">@lang('home.buscar')</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <i class="fas fa-angle-down fa-3x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div id="home-slider-container" class="home-slider-container">
                <div id="home-slider">
                    <div class="slider-item">
                        <img src="{{asset('images/sliders/slider-9.jpg')}}"/>
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
                                    @if (App::isLocale('en'))
                                        <img src="{{asset('http://admin.mietnia.com/admin/categoria/editar/imagen/'.$categorias->imagen.'')}}" alt="{{$categorias->nombre}}" class="w-100 rounded-left">
                                    @else
                                        <img src="{{asset('http://admin.mietnia.pe/admin/categoria/editar/imagen/'.$categorias->imagen.'')}}" alt="{{$categorias->nombre}}" class="w-100 rounded-left">
                                    @endif
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
                        <h1 class="font-weight-bold display-4 text-g-grey-primary">@lang('home.turismo_vivencial') </h1>
                        <h4 class="text-g-grey-light">@lang('home.h1_p')</h4>
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
                            <p class="lead font-weight-bold m-0">@lang('home.h1_alert')</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4 mb-md-0 col-md d-flex text-center">
                        <div class="card border-g-red-primary shadow">
                            <div class="bg-g-red-primary rounded-circle step-circle m-auto">
                                <span class="text-white font-weight-bold display-4">1</span>
                            </div>
                            <div class="bg-g-red-primary p-3 text-white step-body">
                                <h6 class="font-weight-bold mt-4 pt-2">@lang('home.escoge_actividad')</h6>
                                <hr>
                                <p>@lang('home.escoge_actividad_p')</p>
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4 mb-md-0 col-md d-flex text-center">
                        <div class="card border-g-green-primary shadow">
                            <div class="bg-g-green-primary rounded-circle step-circle m-auto">
                                <span class="text-white font-weight-bold display-4">2</span>
                            </div>
                            <div class="bg-g-green-primary p-3 text-white step-body">
                                <h6 class="font-weight-bold mt-4 pt-2">@lang('home.crea_usuario')</h6>
                                <hr>
                                <p>@lang('home.crea_usuario_p')</p>
                                <br>
                                <i class="fas fa-file-signature fa-2x"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4 mb-md-0 col-md d-flex text-center">
                        <div class="card border-info shadow">
                            <div class="bg-info rounded-circle step-circle m-auto">
                                <span class="text-white font-weight-bold display-4">3</span>
                            </div>
                            <div class="bg-info p-3 text-white step-body">
                                <h6 class="font-weight-bold mt-4 pt-2">@lang('home.disfruta_experiencia')</h6>
                                <hr>
                                <p>@lang('home.disfruta_experiencia_p')</p>
                                <i class="fas fa-file-alt fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="position-relative">
            <div class="sticky-top mt-sm-5 shadow-sm d-none d-sm-block mt-0">
                <nav id="navbar-scroll" class="navbar navbar-light bg-light justify-content-center">
                    <ul class="nav nav-pills">
                        @foreach($comunidad_huilloc as $comunidades_sticky)
                        <li class="nav-item">
                            @if (App::isLocale('en'))
                                <a class="nav-link font-weight-bold" href="#comunidad-{{str_replace(' ','-', strtolower($comunidades_sticky->nombre))}}">{{ucwords(strtolower($comunidades_sticky->nombre))}} @lang('home.comunidad')</a>
                            @else
                                <a class="nav-link font-weight-bold" href="#comunidad-{{str_replace(' ','-', strtolower($comunidades_sticky->nombre))}}">@lang('home.comunidad') {{ucwords(strtolower($comunidades_sticky->nombre))}}</a>
                            @endif
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link font-weight-bold" href="#comunidad-taucca">Comunidad Taucca</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link font-weight-bold" href="#comunidad-amaru">Comunidad Amaru</a>--}}
{{--                        </li>--}}
                        @endforeach
                    </ul>
                </nav>
            </div>
            @foreach($comunidad_huilloc as $comunidades_huilloc)
            <section class="p-0 py-sm-5 clearfix" id="comunidad-{{str_replace(' ','-', strtolower($comunidades_huilloc->nombre))}}">
                <div class="container">
                    <div class="row">
                        <div class="col  text-center">
                            @if (App::isLocale('en'))
                                <h2 class="h1 font-weight-bold text-g-grey-primary"><span class="text-g-red-dark">{{ucwords(strtolower($comunidades_huilloc->nombre))}}</span> @lang('home.comunidad')</h2>
                            @else
                                <h2 class="h1 font-weight-bold text-g-grey-primary">@lang('home.comunidad') <span class="text-g-red-dark">{{ucwords(strtolower($comunidades_huilloc->nombre))}}</span></h2>
                            @endif
                            <div class="title-line">
                                <div class="tl-1"></div>
                                <div class="tl-2"></div>
                                <div class="tl-3"></div>
                            </div>
                            {{--<div class="line-title"></div>--}}
{{--                            <p class="mt-3 lead font-weight-normal text-secondary">Asociación de turismo vivencial willuq ayllu inka</p>--}}
                            {{--<div class="line-title"></div>--}}
                        </div>
                    </div>

                    <div class="row mt-4 align-items-center">
                        <div class="col-12 mb-3 col-sm-12 mb-md-0 col-md text-center">
                            <div class="position-relative w-100">
                                @if (App::isLocale('en'))
                                    @foreach($comunidades_huilloc->fotos->where('estado',2)->take(1) as $fotos)
                                        <img src="http://admin.mietnia.com/admin/comunidad/editar/imagen/{{$fotos->imagen}}" alt="" class="w-100 position-relative rounded shadow">
                                    @endforeach
                                @else
                                    @foreach($comunidades_huilloc->fotos->where('estado',2)->take(1) as $fotos)
                                        <img src="http://admin.mietnia.pe/admin/comunidad/editar/imagen/{{$fotos->imagen}}" alt="" class="w-100 position-relative rounded shadow">
                                    @endforeach
                                @endif
                                <div class="position-absolute w-100 top-50">
                                    <a href="{{route('comunidad_show_path', str_replace(' ','-', strtolower($comunidades_huilloc->nombre)))}}" class="btn bg-rgba-dark-6 font-weight-bold text-white btn-outline-g-grey-dark shadow">@lang('home.saber_mas_comunidad ') <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3 col-sm-12 mb-md-0 col-md">
                            <h5>{{ucwords(strtolower($comunidades_huilloc->nombre))}}</h5>
                            @php echo $comunidades_huilloc->descripcion; @endphp
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                            <h5 class="text-secondary m-0 font-weight-bold">@lang('home.actividades_comunidad')</h5>
                        </div>
                    </div>

                    <div class="row slider-huilloq">

                            @foreach($comunidades_huilloc->asociaciones as $asociaciones_huilloc)
                                @foreach($asociaciones_huilloc->actividades->where('estado', 1) as $actividades_huilloc)
                                    @foreach($disponibilidad->where('actividad_id', $actividades_huilloc->id) as $disponibilidades)
                                        @if ($disponibilidades->actividad_id == $actividades_huilloc->id)
                                        <div class="col mb-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="header-img-actividades">
                                                        @if (App::isLocale('en'))
                                                            @foreach($actividades_huilloc->fotos->where('estado',2) as $fotos_huilloc)
                                                                <a href="{{route('detail_path', str_replace(' ', '-', strtolower($actividades_huilloc->titulo)))}}"><img src="http://admin.mietnia.com/admin/mostar/imagen/{{$fotos_huilloc->imagen}}/actividades" alt="" class="w-100"></a>
                                                            @endforeach
                                                        @else
                                                            @foreach($actividades_huilloc->fotos->where('estado',2) as $fotos_huilloc)
                                                                <a href="{{route('detail_path', str_replace(' ', '-', strtolower($actividades_huilloc->titulo)))}}"><img src="http://admin.mietnia.pe/admin/mostar/imagen/{{$fotos_huilloc->imagen}}/actividades" alt="" class="w-100"></a>
                                                            @endforeach
                                                        @endif
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
                                                            <span class="font-weight-bold text-primary"><sup>$</sup>{{round($precio->precio+($precio->precio*$asociaciones_huilloc->comision)/100)}}<small class="p-0">USD</small><small data-toggle="tooltip" data-placement="top" title="@lang('home.pp_persona')"><i class="fas fa-user-friends"></i></small></span>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach


                    </div>
                </div>
            </section>
            @endforeach

        </section>
        <section>
            <div class="offer">
                <div class="container">
                    <div class="row align-items-center">
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
                                <span class="ol-4">@lang('home.visite_perú_descubra')</span>
                                {{--<span class="ol-3"></span>--}}
                                {{--<span class="ol-5">-$99</span>--}}
                                {{--<ul>--}}
                                    {{--<li>--}}
                                        {{--<a href="#!" class="offer-btn">--}}
                                            {{--<img src="{{asset('images/icon/dis1.png')}}" alt="" class="">--}}
                                        {{--</a>--}}
                                        {{--<span>Free WiFi</span>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#!" class="offer-btn">--}}
                                            {{--<img src="{{asset('images/icon/dis2.png')}}" alt="">--}}
                                        {{--</a>--}}
                                        {{--<span>Breakfast</span>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#!" class="offer-btn">--}}
                                            {{--<img src="{{asset('images/icon/dis3.png')}}" alt="">--}}
                                        {{--</a>--}}
                                        {{--<span>Pool</span>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                    {{--<a href="#!" class="offer-btn">--}}
                                    {{--<img src="{{asset('images/icon/dis4.png')}}" alt="">--}}
                                    {{--</a>--}}
                                    {{--<span>Television</span>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#!" class="offer-btn">--}}
                                            {{--<img src="{{asset('images/icon/dis5.png')}}" alt="">--}}
                                        {{--</a>--}}
                                        {{--<span>GYM</span>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            </div>
                        </div>
                        <div class="col-md-6 text-center mb-5 mb-md-0">
                            {{--<div class="offer-r">--}}
                                {{--<div class="or-1">--}}
                                    {{--<span class="or-11"><i class="far fa-eye"></i></span>--}}
                                    {{--<span class="or-12">Ojo</span>--}}
                                {{--</div>--}}
                                {{--<div class="or-2">--}}
                                    {{--<span class="or-21">Obten</span>--}}
                                    {{--<span class="or-22">70%</span>--}}
                                    {{--<span class="or-23">descuento</span>--}}
                                    {{--<span class="or-24">Codigo: RG5481WERQ</span>--}}
                                    {{--<span class="or-25"></span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <a href="{{route('actividades_path')}}" class="btn btn-lg btn-g-red-primary font-weight-bold">@lang('home.ver_actividades')</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="font-weight-bold text-g-grey-primary">@lang('home.comunidades_populares')</h1>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        {{--<div class="line-title"></div>--}}
{{--                        <p class="mt-3 lead font-weight-normal text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <a href="{{route('comunidad_show_path', 'taucca')}}">
                            <div class="top-actividades">
                                <img src="{{asset('images/comunidad/a.jpg')}}" alt="" class="w-100 rounded">
                                <div class="top-actividades-footer text-white">
                                    <h4 class="font-weight-bold">Taucca</h4>
                                    {{--<p class="text-left h6 font-weight-bold m-0">12 Packages <span class="float-right font-weight-normal text-right">Starting from $2400</span></p>--}}
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{route('comunidad_show_path', 'huilloc')}}">
                                    <div class="top-actividades">
                                        <img src="{{asset('images/comunidad/c.jpg')}}" alt="" class="w-100 rounded">
                                        <div class="top-actividades-footer text-white">
                                            <h5 class="font-weight-bold">Huilloc</h5>
                                            {{--<p class="float-right font-weight-normal text-right m-0">Starting from $2400</p>--}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{route('comunidad_show_path', 'amaru')}}">
                                    <div class="top-actividades">
                                        <img src="{{asset('images/comunidad/b.jpg')}}" alt="" class="w-100 rounded">
                                        <div class="top-actividades-footer text-white">
                                            <h5 class="font-weight-bold">Amaru</h5>
                                            {{--<p class="float-right font-weight-normal text-right m-0">Starting from $2400</p>--}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{route('comunidad_show_path', 'rumira-sondormayo')}}">
                                    <div class="top-actividades">
                                        <img src="{{asset('images/comunidad/d.jpg')}}" alt="" class="w-100 rounded">
                                        <div class="top-actividades-footer text-white">
                                            <h5 class="font-weight-bold">Rumira Sondormayo</h5>
                                            {{--<p class="float-right font-weight-normal text-right m-0">Starting from $2400</p>--}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{route('comunidad_show_path', 'chacan')}}">
                                    <div class="top-actividades">
                                        <img src="{{asset('images/comunidad/e.jpg')}}" alt="" class="w-100 rounded">
                                        <div class="top-actividades-footer text-white">
                                            <h5 class="font-weight-bold">Chacan</h5>
                                            {{--<p class="float-right font-weight-normal text-right m-0">Starting from $2400</p>--}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col text-center">
                        <a href="{{route('comunidad_path')}}" class="btn btn-g-red-primary font-weight-bold btn-lg">@lang('home.ver_mas_comunidades')</a>
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
                        <h1 class="font-weight-bold text-g-grey-primary">@lang('home.mejores_actividades')</h1>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        {{--<div class="line-title"></div>--}}
                        {{--<p class="mt-3 lead font-weight-normal text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto eligendi, magni odit quae quos soluta tenetur? Illum laudantium molestias numquam optio possimus quaerat quibusdam! Enim qui vel vero? Architecto.</p>--}}
                    </div>
                </div>
                <div class="row">
                    <div class="col events">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
                        <table id="myTable" class="table-responsive">
                            <tbody class="small font-weight-bold text-secondary">
                            @foreach($comunidad as $comunidades)
                                @foreach($comunidades->asociaciones as $asociaciones)
                                    @foreach($asociaciones->actividades->unique('titulo') as $actividades)
                                        @foreach($disponibilidad_mes->where('actividad_id', $actividades->id) as $disponibilidades_mes)
                                            @if ($disponibilidades_mes->actividad_id == $actividades->id)
                                                @foreach($actividades->precios as $precio)
                                                    <tr>
                                                        <td class="">
                                                            <div class="row align-items-center p-3">
                                                                <div class="col text-truncate">
                                                                    <a href="{{route('detail_path', str_replace(' ', '-', strtolower($actividades->titulo)))}}" class="events-title font-weight-bold text-g-grey-primary stretched-link">
                                                                        {{ucwords(strtolower($actividades->titulo))}}
                                                                        <small class="d-block text-primary font-weight-bold">{{ucwords(strtolower($actividades->categoria))}}</small>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class=" d-none d-md-table-cell">{{$disponibilidades_mes->fecha}}</td>
                                                        <td class="w-25 text-center d-none d-md-table-cell">

                                                                <sup>$</sup>{{round($precio->precio+($precio->precio*$asociaciones->comision)/100)}}<small>USD</small>
                                                                <small class="d-block">@lang('home.pp_persona')</small></td>

                                                        <td class="e_h1 d-none d-md-table-cell">{{ucwords(strtolower($comunidades->nombre))}}</td>
                                                        <td class="text-center"><a href="{{route('detail_path', str_replace(' ', '-', strtolower($actividades->titulo)))}}" class="btn btn-sm btn-g-red-dark font-weight-bold text-center">@lang('home.reservar')</a> </td>
                                                    </tr>
                                                @endforeach
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


                <!-- Modal -->
                <div class="modal fade" id="subscri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close position-absolute-top" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="row my-4">
                                    <div class="col text-center">
                                        <span class="display-4 font-weight-bold text-g-red-primary">@lang('contact.subscr_h1')</span>
                                        <p class="font-weight-bold h3 text-muted">@lang('contact.subscr_p')</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">

                                        <form class="card bg-light mb-4" id="s_form" role="form">
                                            {{csrf_field()}}
                                            <div class="card-body">
                                                <div class="row">

                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h2 class="text-secondary h5"><strong>@lang('contact.email') <span class="text-primary">*</span></strong></h2>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="input-group input-group-lg">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                                                    </div>
                                                                    <input type="email" class="form-control" id="s_email" name="s_email" placeholder="@lang('client.email_address')" aria-label="Phone" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mt-4">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h2 class="text-secondary h5"><strong>@lang('contact.name') <span class="text-primary">*</span></strong></h2>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="input-group input-group-lg">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="s_name" name="s_name" placeholder="@lang('contact.name')" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row justify-content-center py-4">
                                                    <div class="col-12 text-center">
                                                        <button type="button" class="btn btn-primary btn-block btn-lg" onclick="subscribir()" id="c_submit">@lang('contact.Signup')</button>
                                                        <i class="fas fa-spinner fa-pulse fa-2x text-primary d-none" id="c_load"></i>
                                                        <p>@lang('contact.dont_worry')</p>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="footer-social text-center">
                                                            <ul>
                                                                {{--                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>--}}
                                                                <li><a href="https://www.instagram.com/mietnia/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                                <li><a href="https://www.facebook.com/Mietnia/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                                                <li><a href="https://api.whatsapp.com/send?phone=51917474233" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3 justify-content-center d-none" id="c_alert">
                                                    <div class="col-10">
                                                        <div class="alert alert-success alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <b><strong>@lang('contact.thank')</strong></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    @endsection

@push('scripts')
    <script>
        //formulario design
        function subscribir(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').val()
                }
            });
            $("#c_submit").attr("disabled", true);
            var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;
            var s_name = $("#s_name").val();
            var s_email = $("#s_email").val();
            if (filter.test(s_email)){
                sendMail = "true";
            } else{
                $('#s_email').css("border-bottom", "2px solid #FF0000");
                sendMail = "false";
            }
            if (s_name.length == 0 ){
                $('#s_name').css("border-bottom", "2px solid #FF0000");
                var sendMail = "false";
            }
            if(sendMail == "true"){
                var dataString = $('#s_form').serialize();
                $.ajax({
                    data:  dataString,
                    url:   "{{route('subscribir_s_path')}}",
                    type:  'post',
                    beforeSend: function () {
                        // $('#de_send').removeClass('show');
                        $("#c_submit").addClass('d-none');
                        $("#c_load").removeClass('d-none');
                    },
                    success:  function (response) {
                        $('#s_form')[0].reset();
                        $('#c_submit').removeClass('d-none');
                        $("#c_load").addClass('d-none');
                        $('#c_alert').removeClass('d-none');
                        // $("#h_alert b").html(response);
                        $("#c_alert").fadeIn('slow');
                        $("#c_submit").removeAttr("disabled");
                    }
                });
            } else{
                $("#c_submit").removeAttr("disabled");
            }
        }
    </script>
    <script !src="">
        setTimeout(function() {
            $('#subscri').modal();
        }, 5000);
    </script>
@endpush
