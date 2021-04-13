@extends('layout.master')



@section('content')
    <section id="login">
        <div class="row">
            <div id="banner" class="col-md-6 col-sm-12 order-last order-md-first">
                @include('includes/ad-banner')
            </div>

            <div id="info" class="col-md-6 col-sm-12 order-first order-md-last pt-5 pb-5">
                <div class="container h-100">

                    <div class="row h-100 align-items-center">
                        <div class="col-lg-8 col-md-9 col-10 offset-1 ">
                            <div>
                                <h1 style="font-size: 3.5em;">@yield('header')</h1>
                                <p>
                                    @yield('description')
                                </p>
                                    @yield('form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

