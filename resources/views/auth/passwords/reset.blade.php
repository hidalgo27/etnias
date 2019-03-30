@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu-book')
<div class="container">
    <div class="row justify-content-center mt-2 mb-5">
        <div class="col-md-8">
            <h5 class="font-weight-bold text-center display-4 text-g-grey-primary">Restablecer <span class="text-g-red-dark">Contraseña </span></h5>
            {{--<span class="d-block mb-2 font-weight-bold text-g-grey-light text-center">Ya tienes cuenta ? <a href="{{ route('login') }}">{{ __('Login') }}</a></span>--}}
            <div class="card shadow">
                <div class="card-header bg-g-red-primary text-white">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right font-weight-bold text-g-grey-light">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} font-weight-bold text-g-grey-light" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 font-weight-bold text-g-grey-light col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} font-weight-bold text-g-grey-light" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right font-weight-bold text-g-grey-light">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control font-weight-bold text-g-grey-light" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-g-red-primary text-white font-weight-bold">
                                    {{ __('Reset Password') }}
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
