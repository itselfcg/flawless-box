@extends('layout.login')

@section('title','Reset')
@section('header',__('Reset Password'))
@section('description')
    Enter your personal info to reset your password.
@endsection
@section('form')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group row">
            <div class="col-sm-12">
                <input id="email"
                       placeholder="{{ __('E-Mail Address') }}"
                       type="email"
                       class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input id="password" placeholder="{{ __('Password') }}"
                       type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-12">
                <input id="password-confirm" placeholder="{{ __('Confirm Password') }}"
                       type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>



        <div class="form-group row mb-0">
            <div class="col-md-12">

                <button type="submit" class="btn btn-green">
                    {{ __('Reset Password') }}
                </button>
                or <a
                    href="{{asset('login')}}" class="link"> Login</a>
            </div>
        </div>
    </form>
@endsection



