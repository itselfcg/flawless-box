@extends('layout.login')

@section('title','Login')
@section('header','Login')
@section('description')
    To keep connected with us please
    login with your personal info.
@endsection
@section('form')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group row">
            <div class="col-sm-12">
                <div class="form-floating mb-2">
                    <input id="email" type="email" placeholder="Email address"
                           class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email"
                           autofocus>
                    <label for="email">Email address</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <div class="form-floating mb-2">
                    <input id="password"
                           type="password" placeholder="Password"
                           class="form-control
        @                                                  @error('password') is-invalid @enderror"
                           name="password" required autocomplete="current-password">
                    <label for="password">Password</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
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
                <p class="text-end">

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
                    href="box#join-now" class="link"> Join
                    now</a>
            </div>
        </div>
    </form>
@endsection
