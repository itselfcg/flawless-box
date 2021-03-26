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
                                <form>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="password" class="form-control" id="inputPassword"
                                                   placeholder="Password">
                                        </div>
                                    </div>
                                </form>
                                <p class="text-right">
                                    <a href="reset">Forgot password?</a>
                                </p>
                                <a class="btn btn-login" href="login">LOGIN</a> or <a href="subscription#join-now" class="link"> Join
                                    now</a>
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
