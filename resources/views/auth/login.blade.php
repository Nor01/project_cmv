@extends('layouts.app')

@section('content')
<div class="container">

<div class="backhome">
        <a href="{{ url('/') }}" class="avatar avatar-sm bg-primary text-white"><i class="bx bx-home-alt fs-sm"></i></a>
    </div>
    <!-- Begin Page -->
    <div class="auth-pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row justify-content-center">
                        <div class="col-md-6 pr-md-0">
                            <div class="auth-page-sidebar">
                                <div class="overlay"></div>
                                <div class="auth-user-testimonial">
                                    <div class="owl-carousel">
                                        <div class="item">
                                            <h3 class="text-white mb-1">Historial!</h3>
                                            <h5 class="text-white mb-3">"Puedes ver tu historial clinico"</h5>
                                            <p>- CMV</p>
                                        </div>
                                        <div class="item">
                                            <h3 class="text-white mb-1">Reportes!</h3>
                                            <h5 class="text-white mb-3">"Puedes crear reportes y mucho m&aacute;s"</h5>
                                            <p>- CMV</p>
                                        </div>
                                        <div class="item">
                                            <h3 class="text-white mb-1">Administra y Organiza!</h3>
                                            <h5 class="text-white mb-3">"Puedes administrar todo desde un solo lugar"
                                            </h5>
                                            <p>- CMV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-0">
                            <div class="card mb-0 p-2 p-md-3">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <img src="assets/images/logo.png" height="24" alt="CMV Admin">
                                    </div>
                                    <h5 class="mt-4 font-weight-600">Bienvenido!</h5>
                                    <p class="text-muted mb-4">Ingrese su correo y contraseña para acceder al panel de
                                        administraci&oacute;n</p>
                                    <!-- <form id="loginForm" name="loginForm" method="POST" action="{{ route('login') }}"> -->
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group floating-label">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                            <label for="email">Correo Electr&oacute;nico</label>
                                            <div class="validation-error d-none font-size-13">
                                                <p>El correo debe ser un correo v&aacute;lido</p>
                                            </div>
                                        </div>
                                        <div class="form-group floating-label">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                                            <label for="password">Contraseña</label>
                                            <div class="validation-error d-none font-size-13">
                                                <p>&Eacute;ste campo es requerido </p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signin"
                                                {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label"
                                                    for="checkbox-signin">Recordarme</label>
                                            </div>
                                        </div>

                                        <div class="form-group text-center">
                                            <button class="btn btn-primary btn-block" data-effect="wave" type="submit">
                                                Ingresar
                                            </button>
                                        </div>
                                        <div class="clearfix text-center">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-primary">Olvid&oacute; su contraseña?</a>
                                        @endif    
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection
