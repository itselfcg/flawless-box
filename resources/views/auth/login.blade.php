@extends('layout.master')

@section('title')
    Login
@stop

@section('css-scripts')
    <link rel="stylesheet" href="css/pages/login.css">
@stop

@section('content')
    <section id="login">
        <div class="row">
            <div id="banner" class="col-md-6 col-sm-12 order-last order-md-first">
                <div class="row align-items-center h-100">
                    <div class="col-12 ">

                        <div class="text-center">
                            <div class="title">

                                <div class="brand-title">
                                    <h2>
                                        CHECKOUT <br>
                                        SPRING'S<br>
                                        BOX<br>
                                    </h2>

                                    <a class="btn btn-orange w-100" href="subscription">
                                        TAKE A LOOK
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="login" class="col-md-6 col-sm-12 order-first order-md-last ">
                <div class="container h-100">

                    <div class="row h-100 align-items-center">
                        <div class="col-lg-8 col-md-9 col-10 offset-1 ">
                            <div>
                                <h1>Login</h1>
                                <p>
                                    To keep connected with us please
                                    login with your personal info.
                                </p>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input id="email" type="email" placeholder="Email address"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" required autocomplete="email"
                                                   autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input id="password"
                                                   type="password" placeholder="Password"
                                                   class="form-control
@                                                  @error('password') is-invalid @enderror"
                                                   name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6 col-sm-5 ">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember me') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-7 ">
                                            <p class="text-right">

                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-12">

                                            <button type="submit" class="btn btn-login">
                                                {{ __('Login') }}
                                            </button>
                                            or <a
                                                href="subscription#join-now" class="link"> Join
                                                now</a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js-scripts')
    <script src="{{ asset('js/login.js') }}" defer type="text/javascript"></script>
@stop
