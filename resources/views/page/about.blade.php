@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu')
        <section class="position-relative">
            <div class="form-header-bg h-25">
                <div class="container">
                    <div class="row justify-content-center align-items-center h-100vh">
                        <div class="col-12 text-center text-truncate">
                            <h1 class="font-weight-bold display-4 text-white">@lang('about.quienes_somos')</h1>
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

        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        {{--<h6 class="text-g-grey-light">Conoce</h6>--}}
                        <h1 class="font-weight-bold display-4 text-g-grey-primary">@lang('about.quienes_somos')</h1>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        {{--<h4 class="text-g-grey-light mt-4">Viva la experiencia en comunidades con costumbres intactas <stong class="text-g-grey-dark">Incas.</stong></h4>--}}
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <div class="row align-items-center">
                    {{--<div class="col-12 mb-4 col-lg mb-lg-0">--}}
                        {{--<img src="{{asset('images/taucca3.jpg')}}" alt="" class="w-100 rounded shadow">--}}
                    {{--</div>--}}
                    <div class="col-12 mb-4 col-lg mb-lg-0">
                        {{--<h3 class="font-weight-bold text-g-grey-primary mb-3">Misión y Visión</h3>--}}
                        <p class="lead font-weight-normal text-g-grey-light">
                            @lang('about.p_1')
                        </p>
                        <p class="lead font-weight-normal text-g-grey-light">
                            @lang('about.p_2')
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-light mt-5 py-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        {{--<h6 class="text-g-grey-light">Producción</h6>--}}
                        <h2 class="font-weight-bold h1 text-g-grey-primary"><span class="text-g-red-dark">@lang('about.h2')</span></h2>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mt-4">
                    <div class="col-12 mb-4 col-lg mb-lg-0">
                        <img src="{{asset('images/team-etnias.jpg')}}" alt="" class="w-100 rounded shadow">
                    </div>
                    <div class="col">
                        <p class="font-weight-normal text-g-grey-light">@lang('about.p_1')</p>
                        <p class="font-weight-normal text-g-grey-light">@lang('about.p_2')</p>
                    </div>
                </div>
                {{--<div class="row mt-5">--}}
                    {{--<div class="col-12 mb-3 col-md">--}}
                        {{--<div class="bg-white py-4 px-5 text-center">--}}
                            {{--<img src="{{asset('images/team.jpg')}}" alt="" class="w-100">--}}
                            {{--<h4 class="mt-4">Liseth</h4>--}}
                            {{--<small class="text-secondary mb-4 font-weight-bold d-block">CEO</small>--}}
                            {{--<p class="font-weight-normal text-g-grey-light">Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>--}}
                            {{--<div class="row justify-content-center mt-4">--}}
                                {{--<div class="col-12">--}}
                                    {{--<div class="row text-g-grey-light">--}}
                                        {{--<div class="col">--}}
                                            {{--<i class="fab fa-facebook fa-2x"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="col">--}}
                                            {{--<i class="fab fa-twitter fa-2x"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="col">--}}
                                            {{--<i class="fab fa-instagram fa-2x"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="col">--}}
                                            {{--<i class="fab fa-youtube fa-2x"></i>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-12 mb-3 col-md">--}}
                        {{--<div class="bg-white py-4 px-5 text-center">--}}
                            {{--<img src="{{asset('images/team.jpg')}}" alt="" class="w-100">--}}
                            {{--<h4 class="mt-4">Liseth</h4>--}}
                            {{--<small class="text-secondary mb-4 font-weight-bold d-block">CEO</small>--}}
                            {{--<p class="font-weight-normal text-g-grey-light">Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>--}}
                            {{--<div class="row justify-content-center mt-4">--}}
                                {{--<div class="col-12">--}}
                                    {{--<div class="row text-g-grey-light">--}}
                                        {{--<div class="col">--}}
                                            {{--<i class="fab fa-facebook fa-2x"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="col">--}}
                                            {{--<i class="fab fa-twitter fa-2x"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="col">--}}
                                            {{--<i class="fab fa-instagram fa-2x"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="col">--}}
                                            {{--<i class="fab fa-youtube fa-2x"></i>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-12 mb-3 col-md">--}}
                        {{--<div class="bg-white py-4 px-5 text-center">--}}
                            {{--<img src="{{asset('images/team.jpg')}}" alt="" class="w-100">--}}
                            {{--<h4 class="mt-4">Liseth</h4>--}}
                            {{--<small class="text-secondary mb-4 font-weight-bold d-block">CEO</small>--}}
                            {{--<p class="font-weight-normal text-g-grey-light">Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>--}}
                            {{--<div class="row justify-content-center mt-4">--}}
                                {{--<div class="col-12">--}}
                                    {{--<div class="row text-g-grey-light">--}}
                                        {{--<div class="col">--}}
                                            {{--<i class="fab fa-facebook fa-2x"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="col">--}}
                                            {{--<i class="fab fa-twitter fa-2x"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="col">--}}
                                            {{--<i class="fab fa-instagram fa-2x"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="col">--}}
                                            {{--<i class="fab fa-youtube fa-2x"></i>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </section>
    @endsection
