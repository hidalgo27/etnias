@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu')
    <section class="position-relative">
        <div class="form-header-bg h-25">
            <div class="container">
                <div class="row justify-content-center align-items-center h-100vh">
                    <div class="col-12 text-center text-truncate">
                        <span class="text-white font-weight-bold">Activities</span>
                        <h1 class="font-weight-bold display-4 text-white">{{ucwords(strtolower($category))}}</h1>
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

    <section class="my-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-weight-bold display-4 text-g-grey-primary">Category: <span class="text-g-red-dark">{{ucwords(strtolower($category))}}</span></h1>
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

    {{--<section class="my-3">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col">--}}
    {{--<div class="">--}}
    {{--<ul class="nav justify-content-center font-weight-bold">--}}
    {{--@foreach($categoria as $categorias)--}}
    {{--<li class="nav-item">--}}
    {{--<a class="nav-link" href="#">--}}
    {{--<img src="{{asset('images/home/taucca.jpg')}}" alt="" width="30" height="30" class="t-1 rounded-circle m-auto">--}}
    {{--{{ucwords(strtolower($categorias->nombre))}}--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--@endforeach--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}

    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3 col-sm-12 mb-md-0 col-md-3">

                    <ul class="list-group list-group-flush shadow-sm sticky-top">
                        @foreach($categoria as $categorias)
                            <a href="{{route('actividades_category_show_path', str_replace(' ', '-', strtolower($categorias->nombre)))}}" class="list-group-item list-group-item-action font-weight-bold text-g-grey-light">
                                <img src="{{asset('images/categoria/'.$categorias->imagen.'')}}" alt="" width="30" height="30" class="t-1 rounded-circle m-auto">
                                {{ucwords(strtolower($categorias->nombre))}}
                            </a>
                        @endforeach
                    </ul>

                </div>
                <div class="col-12 mb-3 col-sm-12 mb-md-0 col-md-9 events">
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
                    <table id="myTable">
                        <tbody class="small font-weight-bold text-secondary">
                        <tr class="h5 font-weight-bold text-g-grey-primary">
                            <th class="p-3">Name Activity</th>
                            <th class="w-25 text-center">Price</th>
                            <th class="e_h1 d-none d-sm-table-cell">Location</th>
                            <th class="text-center">Book</th>
                        </tr>
                        @foreach($comunidad as $comunidades)
                            @foreach($comunidades->asociaciones as $asociaciones)
                                @foreach($asociaciones->actividades as $actividades)
                                    @foreach($disponibilidad->where('actividad_id', $actividades->id) as $disponibilidades)
                                        @if ($disponibilidades->actividad_id == $actividades->id)
                                            <tr>
                                                <td class="">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            @foreach($actividades->fotos->where('estado',2)->take(1) as $fotos)
                                                                <img src="https://admin.mietnia.com/admin/mostar/imagen/{{$fotos->imagen}}/actividades" alt="">
                                                            @endforeach
                                                        </div>
                                                        <div class="col text-truncate">
                                                            <a href="{{route('detail_path', str_replace(' ', '-', strtolower($actividades->titulo)))}}" class="events-title font-weight-bold text-g-grey-primary stretched-link">
                                                                {{ucwords(strtolower($actividades->titulo))}}
                                                                <small class="d-block text-primary font-weight-bold">{{ucwords(strtolower($actividades->categoria))}}</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="w-25 text-center">
                                                    @foreach($actividades->precios as $precio)
                                                        <sup>$</sup>{{round($precio->precio+($precio->precio*$asociaciones->comision)/100)}}<small>USD</small>
                                                        <small class="d-block">(Price per person)</small></td>
                                                @endforeach
                                                <td class="e_h1 d-none d-sm-table-cell">{{ucwords(strtolower($comunidades->nombre))}}</td>
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
@endsection
