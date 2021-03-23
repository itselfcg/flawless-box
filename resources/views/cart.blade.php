@extends('layout.master')

@section('title')
    Cart
@stop

@section('css-scripts')
    <link rel="stylesheet" href="css/pages/cart.css">
@stop

@section('headers')
    @include('includes.header')
@stop

@section('content')
    <section id="cart">
        <div class="container">
            <div class="row">
                <div id="summary" class="col-md-4 col-sm-12 border ">

                    <?php
                    $items = 0;
                    $subtotal = 0;
                    $shipping = 0;
                    $total = 0;
                    if (session('cart')) {
                        $details = session('cart');
                        $shipping = $details["shipping"];
                        $subtotal = $details["duration"] * $details["price"];
                        $total = $subtotal + $shipping;
                        $items = 1;
                    }
                    ?>
                    <div class="row">
                        <div class="col-12 ">
                            <h2>ORDER SUMMARY</h2>
                            <hr class="sep1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <p>Cart Subtotal</p>
                                </div>
                                <div class="col-6 text-right">
                                    <p>
                                        ${{$subtotal}}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p>Shipping</p>
                                </div>
                                <div class="col-6 text-right">
                                    <p> ${{$shipping}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h3><b>ORDER TOTAL</b></h3>
                                </div>
                                <div class="col-6 text-right">
                                    <p> $ {{$total}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 ">
                            <h2>{{$items}} ITEMS IN CART</h2>
                            <hr class="sep1">
                            @if($items==0)
                                <div class="row">
                                    <div class="col text-center">
                                        Your cart is empty. <br>
                                        Checkout our box subscriptions <a href="subscription#join-now">here.
                                        </a>

                                    </div>
                                </div>
                            @endif
                            <div class="row pb-5">
                                @if(session('cart'))
                                    <div class="col-4 text-center">
                                        <img src="{{ $details['photo'] }}" width="100" height="100"
                                             class="img-responsive"/>
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="row">

                                                    <div class="col">
                                                        Flawlessbox subscription ({{$details['duration']}}
                                                        months)
                                                    </div>

                                                </div>
                                                <div class="row">

                                                    <div class="col">
                                                        Qty: 1
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-4">
                                                ${{ $details['price']*$details['duration'] }}

                                            </div>
                                        </div>
                                        <div class="row w-100">

                                            <div class="col">
                                                <a data-toggle="collapse" href="#collapseExample"
                                                   role="button" aria-expanded="false"
                                                   aria-controls="collapseExample">
                                                    Description <i class="fa fa-angle-down"> </i>
                                                </a>
                                                <div class="collapse" id="collapseExample">
                                                    Subscription Start Date:<br> 2021-03-18<br>
                                                    Billing Period: {{ $details['duration'] }} Month
                                                    Prepay<br>
                                                    Repeats until failed or canceled
                                                </div>


                                            </div>
                                        </div>
                                    </div>



                                @endif

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form>
                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-lg-8 col-12">
                                            <input type="text" class="form-control" id="cupon"
                                                   placeholder="Cupon code">
                                        </div>
                                        <div class="col-lg-4 offset-lg-0 col-5 offset-7">
                                            <a class="btn btn-yellow w-100">APPLY</a>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="referral"
                                               placeholder="Referral code">
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

                <div id="information" class="col-md-7 offset-md-1 col-sm-12">
                    <div class="row">
                        <div class="col-12 ">
                            <h2>CREATE ACCOUNT</h2>
                            <hr class="sep1">

                            <form>
                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="inputPassword"
                                               placeholder="Password">
                                    </div>
                                </div>
                            </form>
<p>Do you have an account already?    <a href="login">
        Login
    </a> to manage your subscription.</p>

                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            <div>
                                <h2>SHIPPING ADDRESS</h2>
                                <hr class="sep1">

                                <form id="survey-form">
                                    <div class="form-contain">
                                        <div class="form-group">
                                            <div class="row pt-2">
                                                <div class="col">
                                                    <input id="name" class="form-control" type="text" name="name-label"
                                                           placeholder="First name" required/>
                                                </div>
                                                <div class="col">
                                                    <input id="lastname" class="form-control" type="text"
                                                           name="lastname-label"
                                                           placeholder="Last name" required/>
                                                </div>
                                            </div>
                                            <div class="row pt-2">
                                                <div class="col">
                                                    <input id="address" class="form-control" type="text"
                                                           name="address-label"
                                                           placeholder="Street Address" required/>
                                                </div>
                                            </div>
                                            <div class="row pt-2">
                                                <div class="col">
                                                    <input id="city" class="form-control" type="text" name="city-label"
                                                           placeholder="City" required/>
                                                </div>
                                                <div class="col">
                                                    <input id="state" class="form-control" type="text"
                                                           name="state-label"
                                                           placeholder="State/Providence" required/>
                                                </div>
                                                <div class="col">
                                                    <input id="zipcode" class="form-control" type="text"
                                                           name="zipcode-label"
                                                           placeholder="Zip code" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2>PAYMENT METHOD</h2>
                            <hr class="sep1">

                            <form>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment1"
                                           id="payment1" value="card" checked>
                                    <label class="form-check-label" for="payment1">
                                        None
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-6 offset-6">
                            <button class="btn btn-yellow w-100"
                                {{ $items == '0' ? 'disabled' : '' }}>PAY NOW</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-5">
                <a href="subscription#join-now">
                    <i class="fa fa-arrow-left"></i>
                    Go back
                </a>
            </div>
        </div>
    </section>

@stop



