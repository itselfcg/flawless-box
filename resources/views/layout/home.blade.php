@extends('layout.master')

@section('title','Account')

@section('css-scripts')
    <link rel="stylesheet" href="{{asset('css/pages/account.css')}}">
@stop

@section('content')
    <section id="account">

        <div id="intro">
            <div class="container w-75">
                <div class="row container-title ">
                    <div class="col-12 align-self-end ">
                        <div class="title">
                            <h1>Account</h1>
                            <h2>Hello, {{$name}} {{$lastname}}</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="user-info">

            <div class="container w-75">
                <div class="row">

                    <div class="col-12 col-md-4">
                        <ul class="navbar-nav">

                            <li>
                                <a class="nav-link" href="{{ url('profile')}}">Profile</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url('subscription')}}">Subscription</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url('address')}}">Address</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url('purchases')}}">BOXES HISTORY</a>
                            </li>

                        </ul>
                        <div class="pt-5">


                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-orange">SIGN OUT</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 ">
                        @yield('section-content')
                    </div>
                </div>

            </div>
        </div>

    </section>
@stop

@section('js-scripts')
    <script src="{{ asset('js/account.js') }}" defer type="text/javascript"></script>
@stop
