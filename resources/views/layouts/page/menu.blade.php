<header class="">

        <div class="container-fluid">
            <div class="row justify-content-between align-items-center p-0">
                <div class="col-6 col-sm-3 col-md-3 col-lg-2 logo-img bg-rgba-white-8">
                        <a href="{{route('home_path')}}"><img src="{{asset('images/etnias-peru.png')}}" alt="" class="w-100 py-2 pink"></a>
                </div>
                <div class="col text-right d-none d-xl-inline">
                    {{--<p class="m-0 font-kalam h5 text-info">Perú & Ecuador Especialist!</p>--}}
                    <a href="{{route('comunidad_path')}}" class="font-weight-bold h5 text-white">Comunidades</a>
                    <a href="{{route('actividades_path')}}" class="font-weight-bold h5 text-white px-4">Actividades</a>
                    <a href="{{ route('login') }}" class="font-weight-bold btn btn-primary h5 m-0">Inicio de Sesión <i class="fas fa-sign-in-alt"></i></a>
                </div>
                <div class="col-auto text-right">
                    <a href="#" class="text-white" data-toggle="modal" data-target="#myModal">
                        <i class="fas fa-bars h1 m-0 p-0"></i>
                        {{--<small class="d-block small">MENU</small>--}}
                    </a>
                </div>
            </div>
        </div>

</header>
@include('layouts.page.menu-pop')
