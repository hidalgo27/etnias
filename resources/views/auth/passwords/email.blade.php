@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu-book')
<div class="container">
    <div class="row justify-content-center mt-2 mb-5">
        <div class="col-md-8">
            <h5 class="font-weight-bold text-center display-4 text-g-grey-primary">@lang('client.restablecer_contrasena')</h5>
            <span class="d-block mb-2 font-weight-bold text-g-grey-light text-center"><a href="{{ route('register') }}">@lang('client.registrarse')</a> | <a href="{{ route('register') }}">@lang('home.inicio_sesion')</a></span>
            <div class="card shadow mb-5">
                <div class="card-header bg-g-red-primary text-white">@lang('client.reset_password')</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 font-weight-bold text-g-grey-light col-form-label text-md-right">@lang('client.email_address')</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} font-weight-bold text-g-grey-light" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-g-red-primary text-white font-weight-bold">
                                    @lang('send_password_reset_link')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
