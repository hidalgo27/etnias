@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu')

        @foreach($comunidad as $comunidades)
        <section class="position-relative">
            <div class="form-header-bg h-25">
                <div class="container">
                    <div class="row justify-content-center align-items-center h-100vh">
                        <div class="col text-center">
                            <h1 class="font-weight-bold display-4 text-white">Comunidad de {{ucwords(strtolower($comunidades->nombre))}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div id="home-slider-container">
                <div id="home-slider">
                    <div class="slider-item">
                        @foreach($comunidades->fotos->where('estado',1)->take(1) as $foto_portada)
                            <img src="http://admin.mietnia.com/admin/comunidad/editar/imagen/{{$foto_portada->imagen}}"/>
                        @endforeach
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

        <section class="bg-light">
            <div class="container container-shadow">
                <div class="row pt-5">
                    <div class="col-9">
                        <div class="row" id="explore">
                            <div class="col">
                                <h1 class="font-weight-bold display-4 text-g-grey-primary"><span class="text-g-red-dark">{{ucwords(strtolower($comunidades->nombre))}}</span></h1>
                                <div class="row align-items-center mt-4">
                                    <div class="col">
                                        @php echo $comunidades->descripcion; @endphp
                                    </div>
                                    {{--<div class="col text-center">--}}
                                        {{--<a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=5HmBmdEiG0k&list=RD5HmBmdEiG0k&start_radio=1">--}}
                                            {{--<img src="{{asset('images/queuna.jpg')}}" alt="" class="w-100 position-relative rounded shadow">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4" id="actividades">
                            <div class="col">
                                <h4 class="font-weight-bold text-g-grey-primary mt-1 mb-4">Elija una actividad en {{ucwords(strtolower($comunidades->nombre))}}</h4>
                                <div class="row">
                                    @foreach($comunidad_pack as $comunidades_pack)
                                        @foreach($comunidades_pack->asociaciones as $asociaciones)
                                            @foreach($asociaciones->actividades as $actividades)
                                                @foreach($disponibilidad->where('actividad_id', $actividades->id) as $disponibilidades)
                                                    @if ($disponibilidades->actividad_id == $actividades->id)
                                                        <div class="col-6 mb-4">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="header-img-actividades">
                                                                        @foreach($actividades->fotos->where('estado',2)->take(1) as $fotos)
                                                                            <img src="https://admin.mietnia.com/admin/mostar/imagen/{{$fotos->imagen}}/actividades" alt="" class="w-100">
                                                                        @endforeach
                                                                        <div class="position-absolute-top">
                                                                            <span class="badge badge-g-red-primary small">{{ucwords(strtolower($actividades->categoria))}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="footer-box-actividades row m-0 align-items-center">
                                                                <div class="col-7">
                                                                    <h6><a href="{{route('detail_path', str_replace(' ', '-', strtolower($actividades->titulo)))}}" class="text-g-grey-primary font-weight-bold">{{$actividades->titulo}}</a></h6>
                                                                </div>
                                                                <div class="col-5 text-right">
                                                                    @foreach($actividades->precios as $precio)
                                                                        @if (isset($precio))
                                                                            <span class="font-weight-bold text-primary"><sup>$</sup>{{round($precio->precio+($precio->precio*$asociaciones->comision)/100)}}<small class="p-0">USD</small><small data-toggle="tooltip" data-placement="top" title="Precio para 2 personas."><i class="fas fa-user-friends"></i></small></span>
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

                        <div class="row mb-4" id="asociaciones">
                            <div class="col">
                                <h4 class="font-weight-bold text-g-grey-primary  mb-4">Asociaciones en la comunidad de {{ucwords(strtolower($comunidades->nombre))}}</h4>
                                <div class="row">
                                    @foreach($comunidades->asociaciones as $asociaciones)
                                    <div class="col-4 text-center">
                                        @foreach($asociaciones->fotos->where('estado',2)->take(1) as $foto_asociacion)
                                        <img src="http://admin.mietnia.com/admin/asociacion/editar/imagen/{{$foto_asociacion->imagen}}" alt="" width="150" height="150" class="rounded-circle shadow">
                                        @endforeach
                                        <h6 class="d-block my-2 font-weight-bold text-g-grey-primary cursor-pointer stretched-link" data-toggle="modal" data-target="#comunidad-{{$asociaciones->id}}">{{$asociaciones->nombre}}</h6>
                                        <!-- Modal -->
                                        <div class="modal fade" id="comunidad-{{$asociaciones->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{$asociaciones->nombre}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @php echo $asociaciones->descripcion; @endphp
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5" id="historia">
                            <div class="col">
                                <h4 class="font-weight-bold text-g-grey-primary  mb-4">Historia</h4>
                                <div class="row">
                                    <div class="col">
                                        @php echo $comunidades->historia; @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <nav id="navbar-scroll" class="navbar navbar-light bg-light sticky-top">
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link font-weight-bold" href="#explore">Explore la comunidad de {{ucwords(strtolower($comunidades->nombre))}}</a>
                                <a class="nav-link font-weight-bold" href="#actividades">Elija una actividad en {{ucwords(strtolower($comunidades->nombre))}}</a>
                                <a class="nav-link font-weight-bold" href="#asociaciones">Asociaciones en la comunidad</a>
                                <a class="nav-link font-weight-bold" href="#historia">Historia</a>
                            </nav>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        @endforeach


    @endsection
