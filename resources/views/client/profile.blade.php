@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu-book')
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-3">
                @include('layouts.client.menu')
            </div>
            <div class="col-12 col-md-9">
                <div class="card">
                    <div class="card-header bg-g-red-primary text-white">
                        @lang('client.perfil')
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold text-g-grey-light">@lang('client.nombre_completo')</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su nombre completo" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputEmail1" class="font-weight-bold text-g-grey-light">@lang('client.email_address')</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold text-g-grey-light">@lang('client.nueva_contrasena')</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="">
                            </div>
                            <button type="submit" class="btn btn-primary">@lang('client.actualizar_datos')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
