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
        <div class="row">
            <div id="summary" class="col-lg-6 col-md-7 col-sm-12  w-100">
                <div class="container w-75">

                <div class="row">
                    <div class="col-12  h-100">
                        <div class="row pt-4">
                            <div class="col-12 ">

                                <h4>Order Summary</h4>
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
                                        <p class="number"> $ X.XX</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p>Shipping</p>
                                    </div>
                                    <div class="col-6 text-right">
                                        <p class="number"> $ 7.99</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p>Code Discount</p>
                                    </div>
                                    <div class="col-6 text-right">
                                        <p class="number"> $ X.XX</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p><b>Order Total</b></p>
                                    </div>
                                    <div class="col-6 text-right">
                                        <p class="number"> $ X.XX</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-12 ">
                                <h4># Items in Cart</h4>
                                <hr class="sep1">
                                <div class="row">
                                    <div class="col text-center">
                                        Your cart is empty. <br>
                                        Checkout our box subscriptions <a href="subscription#join-now">here.
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-12">

                                <form id="cupon code-form">
                                    <div class="form-contain">
                                        <div class="form-group">
                                            <div class="row ">
                                                <div class="col-8 ">
                                                    <input type="text" class="form-control" id="cupon"
                                                           placeholder="Cupon / Referral code">
                                                </div>
                                                <div class="col-4 ">
                                                    <a class="btn btn-yellow w-100">APPLY</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class=" pt-2">
                            <a href="subscription#join-now">
                                <i class="fa fa-arrow-left"></i>
                                Go back
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div id="checkout" class="col-lg-6  col-md-5 col-sm-12">
                <div class="container w-75">

                <form id="create-account">
                    <div class="row">
                        <div class="col-12 ">
                            <h3>01</h3>
                            <h4>Account</h4>
                            <hr class="sep1">

                            <div class="form-contain">
                                <div class="form-group">
                                    <div class="row ">
                                        <div class="col-6 col-lg-6  col-md-12">
                                            <input id="name" class="form-control" type="text" name="name-label"
                                                   placeholder="First name" required/>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-12">
                                            <input id="lastname" class="form-control" type="text"
                                                   name="lastname-label"
                                                   placeholder="Last name" required/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="password" class="form-control" id="inputPassword"
                                                   placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <p>Do you have an account already? <a href="login">
                                    Login
                                </a> to manage your subscription.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div>
                                <h3>02</h3>
                                <h4>Shipping Address</h4>
                                <hr class="sep1">

                                <div class="form-contain">
                                    <div class="form-group">
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <input id="name" class="form-control" type="text"
                                                       name="name-label"
                                                       placeholder="First name" required/>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <input id="lastname" class="form-control" type="text"
                                                       name="lastname-label"
                                                       placeholder="Last name" required/>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-8 col-lg-8 col-md-12">
                                                <input id="address" class="form-control" type="text"
                                                       name="address-label"
                                                       placeholder="Street Address" required/>
                                            </div>
                                            <div class="col-4 col-lg-4 col-md-12">
                                                <input id="zipcode" class="form-control" type="text"
                                                       name="zipcode-label"
                                                       placeholder="Zipcode" required/>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <input id="city" class="form-control" type="text"
                                                       name="city-label"
                                                       placeholder="City" required/>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <input id="state" class="form-control" type="text"
                                                       name="state-label"
                                                       placeholder="State / Providence" required/>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3>03</h3>
                            <h4>Payment Method</h4>
                            <hr class="sep1">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentmethod"
                                       id="payment1" value="card" checked>
                                <label class="form-check-label" for="payment1">
                                    Credit card / Debit card
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentmethod"
                                       id="payment2" value="paypal">
                                <label class="form-check-label" for="payment2">
                                    Paypal
                                </label>
                            </div>


                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-6 offset-6">
                            <a class="btn btn-yellow w-100">PAY NOW</a>
                        </div>
                    </div>


                </form>
                </div>
            </div>

        </div>

    </section>

@stop



