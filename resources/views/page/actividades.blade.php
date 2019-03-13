@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu')
        <section class="position-relative">
            <div class="form-header-bg h-25">
                <div class="container">
                    <div class="row justify-content-center align-items-center h-100vh">
                        <div class="col-5 text-center">
                            <h1 class="font-weight-bold display-4 text-white">Actividades</h1>
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
                        <h1 class="font-weight-bold display-4 text-g-grey-primary">Todas nuestras <span class="text-g-red-dark">Actividades</span></h1>
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
                    <div class="col events">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
                        <table id="myTable">
                            <tbody class="small font-weight-bold text-secondary">
                            <tr class="h5 font-weight-bold text-g-grey-primary">
                                <th class="py-3">#</th>
                                <th>Nombre Actividad</th>
                                <th class="e_h1">Fecha</th>
                                <th class="e_h1">Hora</th>
                                <th class="e_h1">Lugar</th>
                                <th class="text-center">Book</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="{{asset('images/list/iplace-1.jpg')}}" alt="" />
                                    <a href="hotels-list.html" class="events-title font-weight-bold text-g-grey-primary">
                                        Tours chacra y alrededores
                                        <small class="text-g-grey-light">(Asoc. Las Hormiguitas)</small>
                                    </a>
                                </td>
                                <td class="e_h1">16.12.2016</td>
                                <td class="e_h1">10.00 PM</td>
                                <td class="e_h1">Huilloq</td>
                                <td class="text-center"><a href="booking.html" class="btn btn-sm btn-g-red-dark font-weight-bold text-center">Reservar Ahora</a> </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="{{asset('images/list/iplace-1.jpg')}}" alt="" />
                                    <a href="hotels-list.html" class="events-title font-weight-bold text-g-grey-primary">
                                        Tours chacra y alrededores
                                        <small class="text-g-grey-light">(Asoc. Las Hormiguitas)</small>
                                    </a>
                                </td>
                                <td class="e_h1">16.12.2016</td>
                                <td class="e_h1">10.00 PM</td>
                                <td class="e_h1">Huilloq</td>
                                <td class="text-center"><a href="booking.html" class="btn btn-sm btn-g-red-dark font-weight-bold text-center">Reservar Ahora</a> </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    <img src="{{asset('images/list/iplace-1.jpg')}}" alt="" />
                                    <a href="hotels-list.html" class="events-title font-weight-bold text-g-grey-primary">
                                        Tours chacra y alrededores
                                        <small class="text-g-grey-light">(Asoc. Las Hormiguitas)</small>
                                    </a>
                                </td>
                                <td class="e_h1">16.12.2016</td>
                                <td class="e_h1">10.00 PM</td>
                                <td class="e_h1">Huilloq</td>
                                <td class="text-center"><a href="booking.html" class="btn btn-sm btn-g-red-dark font-weight-bold text-center">Reservar Ahora</a> </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @endsection
