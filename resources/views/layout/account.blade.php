@extends('layout.master')

@section('title','Account')

@section('css-scripts')
    <link rel="stylesheet" href="{{asset('css/pages/account.css')}}">
@stop

@section('content')
    <section id="account">

        <div id="intro">
            <div class="container w-75">
                <div class="row ">
                    <div class="col-12 ">
                        <div class="title">
                            <h2>Hello, Itzel contreras!</h2>

                            <h1>Account</h1>
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
                                <a class="nav-link" href="{{ url('account')}}">Profile</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url('account/subscription')}}">Subscription</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url('account/address')}}">Address</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url('account/purchases')}}">BOXES HISTORY</a>
                            </li>

                        </ul>
                        <div class="pt-5">
                            <button class="btn btn-outline-orange">SIGN OUT</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 ">
                        @yield('account-section')
                        @yield('edit-sections')
                    </div>
                </div>

            </div>
        </div>

    </section>
@stop

@section('js-scripts')
    <script src="{{ asset('js/account.js') }}" defer type="text/javascript"></script>
@stop
