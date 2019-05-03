@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu')
        <section class="position-relative">
            <div class="form-header-bg h-25">
                <div class="container">
                    <div class="row justify-content-center align-items-center h-100vh">
                        <div class="col-12 text-center text-truncate">
                            <h1 class="font-weight-bold display-4 text-white">Contáctenos</h1>
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
                        <h1 class="font-weight-bold display-4 text-g-red-dark">MI ETNIA</h1>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        <p class="lead font-weight-normal text-g-grey-light  my-4">
                            Mi etnia es una plataforma que incentiva el turismo vivencial poniendo en contacto comunidades andinas y turistas que deseen conocer el Perú profundo.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="contact-map map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987868.4034060312!2d-73.28427844863587!3d-13.315685432385974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916c52f4fed09ecd%3A0x623b0247474a0643!2zQ3V6Y28sIFBlcsO6!5e0!3m2!1ses-419!2sin!4v1552495016009" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row font-poppins">
                    <div class="col">
                        <h4 class="font-weight-bold text-g-grey-light">Etnias Perú <span>Travel</span></h4>
                        <p>Somos una plataforma para reservas de turismo vivenvial.</p>
                    </div>
                    <div class="col">
                        <h4 class="font-weight-bold text-g-grey-light">Dirección</h4>
                        <p>AHH Pillcohuasi F-17 Ollantaytambo – cusco</p>
                    </div>
                    <div class="col">
                        <h4 class="font-weight-bold text-g-grey-light">CONTACTO:</h4>
                        <a href="tel://51978365487" class="d-block">Reservas: +51978365487</a>
                        <a href="tel://0099999999" class="d-block">Atención al Cliente: +51949586825</a>
                        <a href="mailto:mytestmail@gmail.com" class="d-block">Email: misreservas@mietnia.com</a>
                        <a href="mailto:mytestmail@gmail.com" class="d-block">Email: atencionalcliente@mietnia.com</a>
                    </div>
                    <div class="col">
                        <h4 class="font-weight-bold text-g-grey-light">Website</h4>
                        <a href="#" class="d-block">Website: www.mietnia.com</a>
                        <a href="#" class="d-block">Facebook: https://www.facebook.com/Mietnia/</a>
                        <a href="#" class="d-block">Instagram: https://www.instagram.com/mietnia/</a>
                    </div>
                </div>
            </div>
        </section>
    @endsection
