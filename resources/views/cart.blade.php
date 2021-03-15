<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Flawless Box | About</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="css/cart-style.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<header>
    @include('includes.header3')
</header>

<main>
    <section id="cart">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 border ">
                    <div class="row pt-3">
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
                                    <p> $ X.XX</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p>Shipping</p>
                                </div>
                                <div class="col-6 text-right">
                                    <p> $ 7.99</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h3><b>ORDER TOTAL</b></h3>
                                </div>
                                <div class="col-6 text-right">
                                    <p> $ X.XX</p>
                                </div>
                            </div>
                        </div>
                    </div>
 <hr>
                    <div class="row">
                        <div class="col-12 ">
                            <h4># ITEMS IN CART</h4>
                            <hr class="sep1">

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

                <div class="col-md-7 offset-md-1 col-sm-12">
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
                                                           placeholder="Zipcode" required/>
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
                                           id="payment1" value="card" >
                                    <label class="form-check-label" for="payment1">
                                        Credit card / Debit card
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment2"
                                           id="payment2" value="paypal">
                                    <label class="form-check-label" for="payment2">
                                        Paypal
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="payment3"
                                           id="payment3" value="none" checked>
                                    <label class="form-check-label" for="payment3">
                                        None
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-6 offset-6">
                                <a class="btn btn-yellow w-100">PAY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<footer>
    @include('includes.footer')
</footer>

<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>


</body>

</html>
