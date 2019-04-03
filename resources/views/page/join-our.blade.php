@extends('layouts.page.default')
@section('content')
@include('layouts.page.menu')
<section class="position-relative">
    <div class="form-header-bg h-25">
        <div class="container">
            <div class="row justify-content-center align-items-center h-100vh">
                <div class="col-5 text-center">
                    <h1 class="font-weight-bold display-4 text-white">Trabaja con Nosotros</h1>
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
                <h1 class="font-weight-bold display-4 text-g-grey-primary">Únete a nuestro <span class="text-g-red-dark">Equipo</span></h1>
                <h4 class="text-g-grey-light">Trabaja con nosotros</h4>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p class="lead font-weight-normal mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias amet assumenda doloremque earum fugit impedit inventore iste nemo nostrum obcaecati odit perferendis quasi quia ratione recusandae, reiciendis? Nobis, ut.</p>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center mb-3">
                            <div class="col-5">
                                <img src="{{asset('images/join/comunidad.png')}}" alt="" width=" 100%">
                            </div>
                        </div>
                        <a href="{{route('join_comunidad_path')}}" class="font-weight-bold stretched-link">Soy una Comunidad</a>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center mb-3">
                            <div class="col-5">
                                <img src="{{asset('images/join/transporte.png')}}" alt="" width=" 100%">
                            </div>
                        </div>
                        <a href="{{route('join_transportista_path')}}" class="font-weight-bold stretched-link">Soy un transportista</a>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center mb-3">
                            <div class="col-5">
                                <img src="{{asset('images/join/guia.png')}}" alt="" width=" 100%">
                            </div>
                        </div>
                        <a href="{{route('join_guia_path')}}" class="font-weight-bold stretched-link">Soy un Guía</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
