@extends('layout.login')

@section('title','Forgot password')
@section('header','Reset')
@section('description')
    Forgot your password? We'll send you a link to reset your password.

@endsection
@section('form')
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group row">
            <div class="col-sm-12">
                <input id="email" type="email"
                       class="form-control @error('email') is-invalid @enderror"
                       name="email"
                       placeholder="{{ __('E-Mail Address') }}"
                       value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-12">
                <button type="submit" class="btn btn-green">
                    {{ __('Send Password Reset Link') }}
                </button>
                or <a
                    href="{{asset('login')}}" class="link"> Login</a>
            </div>
        </div>
    </form>
@endsection

