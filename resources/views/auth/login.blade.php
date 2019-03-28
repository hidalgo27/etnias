@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu-book')
<div class="container">
    <div class="row justify-content-center mt-2 mb-5">
        <div class="col-md-8">
            <h5 class="font-weight-bold text-center display-4 text-g-grey-primary">Inicia <span class="text-g-red-dark">Sesión</span></h5>
            <span class="d-block mb-2 font-weight-bold text-g-grey-light text-center">Eres un usuario nuevo ? <a href="{{ route('register') }}">{{ __('Registrarse') }}</a></span>
            <div class="card shadow">
                <div class="card-header bg-g-red-primary text-white">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label font-weight-bold text-g-grey-light text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} font-weight-bold text-g-grey-light" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label font-weight-bold text-g-grey-light text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-g-red-primary text-white font-weight-bold">
                                    {{ __('Login') }} <i class="fas fa-sign-in-alt"></i>
                                </button>



                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-primary font-weight-bold" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="col text-center">
                                <div class="title-line">
                                    <div class="tl-1"></div>
                                    <div class="tl-2"></div>
                                    <div class="tl-3"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col text-center">
                                <h5 class="mb-4">Iniciar sesión usando</h5>
                                <a href="login/facebook" class="btn btn-primary btn-block font-weight-bold">
                                    <i class="fab fa-facebook font-weight-normal"></i> Facebook
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
