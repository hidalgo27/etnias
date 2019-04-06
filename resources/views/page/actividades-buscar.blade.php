@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu')
    <section class="position-relative">
        <div class="form-header-bg h-25">
            <div class="container">
                <div class="row justify-content-center align-items-center h-100vh">
                    <div class="col-5 text-center">
                        <span class="text-white font-weight-bold">Resultado</span>
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

    <section class="my-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-weight-bold display-4 text-g-grey-primary"><span class="text-g-red-dark">Actividades</span></h1>
                    {{--<h4 class="text-g-grey-light">Viva la experiencia en comunidades con costumbres intactas <stong class="text-g-grey-dark">Incas.</stong></h4>--}}
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
            <form action="{{route('client_buscar_path', 'caminatas')}}" method="post" class="alert-primary p-4 rounded">
                @csrf
                {{--<div class="row">--}}
                    {{--<div class="col">--}}
                        {{--<h2 class="font-weight-bold text-g-grey-primary">Reserva de comunidades y actividades en Cusco.</h2>--}}
                        {{--<hr>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="row align-items-center">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="text-g-grey-dark small font-weight-bold">COMUNIDAD</label>
                            {{--<input type="text" class="form-control form-control-lg font-weight-bold" id="formGroupExampleInput" placeholder="Comunidad">--}}
                            <select id="inputState" class="form-control" name="slc_comunidad" required>
                                <option value="">Seleccione...</option>
                                @foreach($comunidad_all as $comunidades)
                                    <option value="{{$comunidades->nombre}}">{{ucwords(strtolower($comunidades->nombre))}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="text-g-grey-dark small font-weight-bold">LLEGADA</label>
                            <input type="date" class="form-control" name="txt_fecha" id="formGroupExampleInput" placeholder="TRAVEL DATE" required>
                        </div>
                    </div>
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
                    <div class="col">
                        <div class="d-block pt-2 mt-1">
                            <button type="submit" class="btn btn-block btn-g-green-primary "><span class="font-weight-bold">SEARCH</span></button>
                        </div>
                    </div>
                </div>

            </form>
            <div class="row mt-3">
                <div class="col events">
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
                    <table id="myTable">
                        <tbody class="small font-weight-bold text-secondary">
                        <tr class="h5 font-weight-bold text-g-grey-primary">
                            <th class="py-3">#</th>
                            <th>Nombre Actividad</th>
                            <th class="w-25 text-center">Precio</th>
                            <th class="e_h1">Lugar</th>
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
                                                <td>{{$disponibilidades->fecha}}</td>
                                                <td class="w-25 text-center">
                                                    @foreach($actividades->precios as $precio)
                                                        <sup>$</sup>{{$precio->precio}}<small>USD</small>
                                                        <small class="d-block">(precio para {{$precio->min}}-{{$precio->max}} <i class="fas fa-male"></i>)</small></td>
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
@endsection
