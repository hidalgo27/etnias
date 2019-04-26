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
                    @foreach($comunidades as $comunidads)
                            @foreach($comunidads->fotos->where('estado',1)->take(3) as $foto_portada)
                                <div class="slider-item">
                                    <img src="http://admin.mietnia.com/admin/comunidad/editar/imagen/{{$foto_portada->imagen}}"/>
                                </div>
                            @endforeach
                    @endforeach
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
                    @foreach($comunidades as $comunidad)

                        <div class="col-4 text-center mb-4">
                            @foreach($comunidad->fotos->where('estado',2)->take(1) as $fotos)
                                <img src="http://admin.mietnia.com/admin/comunidad/editar/imagen/{{$fotos->imagen}}" alt="" class="w-100 rounded shadow">
                            @endforeach
                            <a href="{{route('comunidad_show_path', str_replace(' ','-', strtolower($comunidad->nombre)))}}" class="m-0 d-block mt-3 h3 font-weight-bold text-g-green-light stretched-link">{{ucwords(strtolower($comunidad->nombre))}}</a>
                            <div class="box-comunidad-arrow text-center m-auto"></div>
                            <div class="card bg-light shadow">
                                <div class="card-body">
                                    @php echo $comunidad->descripcion; @endphp
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endsection
