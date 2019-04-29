<div class="card shadow-sm text-center">
    <div class="pt-4">
        @if (Auth::user()->avatar)
            <img src="{{ Auth::user()->avatar }}" id="blah" class="rounded-circle m-auto d-block" alt="{{ Auth::user()->name }}" width="128" height="128" >
        @else
            <img src="{{asset('images/avatar.png')}}" id="blah" class="rounded-circle m-auto d-block" alt="avatar" width="128" height="128" >
        @endif
        <input type="file" onchange="readURL(this);" >
        <span class="d-block font-weight-bold"><a href="{{route('client_perfil_path')}}" data-toggle="tooltip" data-placement="top" title="Ver perfil">{{ Auth::user()->name }}</a></span>
        <label class="custom-file-upload mt-2">
            <input type="file" onchange="readURL(this);">
            Subir Avatar
        </label>
    </div>
    <div class="card-body pt-0">
        <div class="row">
            <div class="col text-center">
                {{--<span class="d-block h1 m-0 p-0 font-weight-bold text-g-grey-primary">100%</span>--}}
                <small><a href="{{route('client_perfil_path')}}" class="text-dark">100% Perfil completado</a></small>
                <a class="text-primary small d-block font-weight-bold" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Cerrar Sesión') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
<div class="card shadow-sm my-3">
    <div class="card-body">
        <div class="row text-center">
            <div class="col">
                <a href="{{route('client_home_path')}}" class="font-weight-bold text-primary my-2 d-block"><i class="fas fa-chevron-right"></i> Hisotrial de pedido</a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endpush
