@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu')
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
    @endsection