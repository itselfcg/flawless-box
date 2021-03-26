@extends('layout.master')

@section('title','Subscription')

@section('css-scripts')
    <link rel="stylesheet" href="css/pages/subscripion.css">
@stop

@section('content')
    <section id="intro">
        <div class="h-100 row align-items-center">
            <div class="col">
                <div class=" container">

                    <div class="row">
                        <div class="col-lg-8 col-md-10">

                            <div class="title ">
                                <h3 style="font-size: 2.5em; color: white;">
                                    MARCH 2021
                                </h3>

                                <img class="w-50" SRC="/images/pictures/brands/brand3.png"><br>

                                <label style="font-family:'Trebuchet MS';font-size: 1em;font-weight: bold;">
                                    UP TO $210 VALUE FOR $25*
                                </label>

                            </div>

                            <a class="btn btn-join " href="#join-now">
                                JOIN NOW
                            </a>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
    <section id="info">
        <div class="container w-75">
            <div class="row pt-4">
                <div class="col-lg-5 offset-lg-1 col-md-6 text-left my-auto ">

                    <h1 style="font-size: 2.5em;">THE FUSION OF SKINCARE, SCIENCE<br> & ART</h1>
                    <h2>Dr. Jart+</h2>

                </div>
                <div class="col-lg-5 col-md-6  text-center">
                    <img class="w-100" src="images/pictures/drjart1.jpeg">

                </div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-1 d-none d-lg-block  my-auto  text-center">
                    <img class="w-100" src="images/pictures/drjart2A.jpg">

                </div>
                <div class="col-lg-5 col-md-6 d-none d-md-block  my-auto  text-center">
                    <img class="w-100" src="images/pictures/drjart2.jpg">

                </div>
                <div class="col-lg-5 col-md-6 d-none d-md-block my-auto  text-center">
                    <img class="w-100" src="images/pictures/drjart3.jpg">

                </div>
                <div class="col-lg-1 d-none d-lg-block  my-auto  text-center">
                    <img class="w-100" src="images/pictures/drjart3B.jpg">

                </div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-4 ">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <h3>01</h3>

                            <h4 class="pt-2 pb-3">BORN IN KOREA</h4>
                            <p>
                                Launched online in 2005, Dr.Jart was founded by dermatologist, Dr. Sung Jae Jung and
                                architect,
                                Chin Wook Lee. The fusion of dermatological science and art has developed into what the
                                brand
                                represents today through its quality formulas and loudpackaging..</p>

                        </div>
                    </div>
                    <div class="row">
                        <div class=" d-md-none d-sm-block  my-auto  text-center">
                            <img class="w-100" src="images/pictures/drjart2.jpg">


                        </div>
                    </div>


                </div>
                <div class="col-lg-4 ">

                    <div class="row">
                        <div class="col-lg-12 ">
                            <h3>02</h3>

                            <h4 class="pt-2 pb-3">RESULTS DRIVEN</h4>
                            <p>
                                Our goal is to create effective skin care solutions that give you real results..</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" d-md-none d-sm-block  my-auto  text-center">
                            <img class="w-100" src="images/pictures/drjart3.jpg">


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <h3>03</h3>

                    <h4 class="pt-2 pb-3">INNOVATION</h4>
                    <p>
                        With Korea's most advanced skin care technology, Dr.Jart uses safe ingredients to create
                        breakthrough formulas.</p>
                </div>

            </div>
        </div>
    </section>
    <section class="separator">
        <div class="container w-75 pb-5">
            <h2><span>OUR BOX</span></h2>
        </div>
    </section>
    <section id="products">
        <div class="container w-75">
            <div class="row w-100 no-gutters">
                <div class="col-lg-4 col-12">


                    <div class="h-100 row no-gutters align-items-center bg-green">
                        <div class="col text-center pt-4 pb-4">
                            <h4 style="color: black; line-height: 2.25em;">
                                checkout

                                <div class="georgia" style="font-size: 2.5em; ">
                                    March's
                                </div>
                                <span>PRODUCTS</span>

                            </h4>
                        </div>
                    </div>
                </div>
                @foreach($products as $product)

                <div class="col-lg-4 col-6">

                    <div id="wrapper">
                        <img class="w-100 hover" SRC="{{$product->photo}}">
                        <p class="text">

                            <b>{{$product->name}}</b>

                            <br>

                            {{$product->description}}

                        </p>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-4 col-6">

                    <div class="h-100 row no-gutters align-items-center">
                        <div class="col text-center">

                            <div class="georgia pb-4"> FIND THESE<br> PRODUCTS AT<br>

                                <img class="w-50" src="images/pictures/logo1.png">

                            </div>
                            <a class="btn btn-join w-75" href="#join-now">JOIN NOW</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <section id="join-now" class="separator">
        <div class="container w-75">
            <h2><span>PACKAGES</span></h2>
            <div class="description">
                <p>

                    Receive 7 full size, brand name beauty products.<br> Choose a monthly, 3 or 6 month option
                    below.

                </p>

            </div>
        </div>

    </section>
    <section id="packages">

        <div class="container w-75">


            <div class="row text-center no-gutters pt-5 pb-5">
                @foreach($plans as $plan)

                <div class="col-md-4 pb-5">
                    <div class="package">

                        <img class="w-75" src="{{ $plan->photo }}">

                        <p>
                        <h6>{{ $plan->name }}</h6>
                        <h7>{{ $plan->monthly_price }}/Month</h7>

                        </p>
                        <p>
                            <a class="btn btn-yellow" href="{{ url('add-to-cart/'.$plan->id) }}">
                                SELECT
                            </a>
                        </p>
                        <p>
                            {{ $plan->description }}<br><br>

                            <b>Non-Refundable</b><br><br>

                            Renews Automatically<br>
                            Cancel Anytime<br>

                        </p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@stop


