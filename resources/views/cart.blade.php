@extends('layout.master')

@section('title')
    Cart
@stop

@section('css-scripts')
    <link rel="stylesheet" href="{{asset('css/pages/cart.css')}}">
@stop

@section('headers')
    @include('includes.header')
@stop

@section('content')
    <section id="intro">
        <div class="container w-75">
            <div class="row container-title ">
                <div class="col-12 align-self-end ">
                    <div class="title">
                        <h1>Checkout</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cart">
        <div class=" container w-75">
            <div class="row">
                <div id="summary" class="col-lg-5  col-md-7 col-sm-12">

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
                    if (session('cupons')) {
                        $cupons = session('cupons');
                        $discount = 0;
                        foreach ($cupons as $cupon) {
                            $discount += $cupon["discount"];
                        }
                        $total -= $discount;
                    }


                    ?>
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
                                        <div class="col-6 text-end">
                                            <p class="number"> ${{$subtotal}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Shipping</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="number"> ${{$shipping}}</p>
                                        </div>
                                    </div>
                                    @if(session('cupons'))


                                        @foreach($cupons as $cupon)

                                            <div class="row">

                                                <div class="col-9 ">
                                                    <a href="{{ url('delete-cupon/'.$cupon["code"]) }}"><i
                                                            class="fa fa-times text-yellow"></i></a>

                                                    <span>Discount code <b>{{$cupon["code"]}}</b></span>
                                                </div>
                                                <div class="col-3 text-end">
                                                    <p class="number"> {{$cupon["discount"]}}</p>
                                                </div>
                                            </div>

                                        @endforeach
                                    @endif
                                    <div class="row">
                                        <div class="col-6">
                                            <p><b>Order Total</b></p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="number"> ${{$total}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12 ">
                                    <h4>{{$items}} Items in Cart</h4>
                                    <hr class="sep1">
                                    @if($items==0)
                                        <div class="row">
                                            <div class="col text-center">
                                                Your cart is empty. <br>
                                                Checkout our box plans <a href="box#join-now"
                                                                          class="link">here.
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
                                                            Subscription Start Date:<br> <?php  date('Y-m-d')?><br>
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
                            <div class="row pt-4">
                                <div class="col-12">

                                    <form id="cupon code-form" action="{{ url('apply-cupon') }}" method="post">
                                        @csrf
                                        <div class="form-contain">
                                            <div class="form-group">
                                                <div class="row ">
                                                    <div class="col-8 ">

                                                        <div class="form-floating">

                                                            <input id="code" name="code" type="text"
                                                                   class="form-control"
                                                                   placeholder="Cupon / Referral code">
                                                            <label for="code">Cupon / Referral code</label>

                                                        </div>
                                                    </div>
                                                    <div class="col-4 ">
                                                        <button class="btn btn-yellow w-100" type="submit">APPLY
                                                        </button>
                                                    </div>
                                                </div>
                                                @if (Session::has('message'))

                                                    <div class="row ">
                                                        <div class="col">
                                                            <div class="text-danger"><i>{{Session::get('message')}}</i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif

                                            </div>


                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class=" pt-2">
                                <a href="box#join-now" class="link">
                                    <i class="fa fa-angle-left"></i>
                                    Return to Plans
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="checkout" class="col-lg-6 offset-lg-1 col-md-4  offset-md-1 col-sm-12">


                    <form action="
                            {{Auth::check()?(session('cart')?'change-subscription/'.$details["id"]:''):'payment'}}
                        " method="post">
                        @csrf

                        @guest()
                            <div class="row">
                                <div class="col-12 ">
                                    <h3>01</h3>
                                    <h4>Account</h4>
                                    <hr class="sep1">

                                    <div class="form-contain">
                                        <div class="form-group">
                                            <div class="row ">
                                                <div class="col-6 col-lg-6  col-md-12">
                                                    <div class="form-floating">

                                                        <input name="name"
                                                               class="form-control @error('name') is-invalid @enderror"
                                                               type="text"
                                                               placeholder="First name"/>
                                                        <label for="name">First name</label>
                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-6 col-md-12">
                                                    <div class="form-floating">

                                                        <input name="lastName"
                                                               class="form-control @error('lastName') is-invalid @enderror"
                                                               type="text"
                                                               placeholder="Last name"/>
                                                        <label for="lastName">Last name</label>
                                                        @error('lastName')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-floating">

                                                        <input type="email"
                                                               class="form-control @error('email') is-invalid @enderror"
                                                               name="email"
                                                               aria-describedby="emailHelp"
                                                               placeholder="Email address">
                                                        <label for="email">Email address</label>

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-floating">
                                                        <input
                                                            name="password"
                                                            type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            placeholder="Password">
                                                        <label for="password">Password</label>

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-floating">
                                                        <input
                                                            name="password_confirmation"
                                                            type="password"
                                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                                            placeholder="Confirm password">
                                                        <label for="password_confirmation">Confirm password</label>

                                                        @error('password_confirmation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <p>Do you have an account already? <a href="login" class="link">
                                            Login
                                        </a> to manage your subscription.</p>
                                </div>
                            </div>
                        @endguest


                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h3>{{Auth::check()?'01':'02'}}</h3>
                                    <h4>Shipping Address</h4>
                                    <hr class="sep1">

                                    <div class="form-contain">
                                        <div class="form-group">
                                            <div class="row ">
                                                <div class="col-6 col-lg-6 col-md-12">
                                                    <div class="form-floating">

                                                        <input name="nameAddress"
                                                               class="form-control @error('nameAddress') is-invalid @enderror"
                                                               type="text"
                                                               value="{{Auth::check()?$address->name:''}}"
                                                               placeholder="First name"/>
                                                        <label for="nameAddress">Name</label>

                                                        @error('nameAddress')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-6 col-md-12">
                                                    <div class="form-floating">

                                                        <input name="lastNameForAddress"
                                                               class="form-control @error('lastNameForAddress') is-invalid @enderror"
                                                               type="text"
                                                               value="{{Auth::check()?$address->last_name:''}}"
                                                               placeholder="Last name"/>
                                                        <label for="lastNameForAddress">Last name</label>

                                                        @error('lastNameForAddress')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-8 col-lg-8 col-md-12">
                                                    <div class="form-floating">

                                                        <input name="street"
                                                               class="form-control @error('street') is-invalid @enderror"
                                                               type="text"
                                                               value="{{Auth::check()?$address->street:''}}"
                                                               placeholder="Street"/>
                                                        <label for="street">Street</label>

                                                        @error('street')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4 col-lg-4 col-md-12">
                                                    <div class="form-floating">

                                                        <input name="zipcode"
                                                               class="form-control @error('zipcode') is-invalid @enderror"
                                                               type="text"
                                                               value="{{Auth::check()?$address->zip_code:''}}"
                                                               placeholder="Zipcode"/>
                                                        <label for="zipcode">Zipcode</label>

                                                        @error('zipcode')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-6 col-lg-6 col-md-12">
                                                    <div class="form-floating">

                                                        <input name="city"
                                                               class="form-control @error('city') is-invalid @enderror"
                                                               type="text"
                                                               value="{{Auth::check()?$address->city:''}}"
                                                               placeholder="City"/>
                                                        <label for="city">City</label>

                                                        @error('city')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-6 col-md-12">
                                                    <div class="form-floating">

                                                        <input name="state"
                                                               class="form-control @error('state') is-invalid @enderror"
                                                               type="text"
                                                               value="{{Auth::check()?$address->state:''}}"
                                                               placeholder="State / Providence"/>
                                                        <label for="state">State / Providence</label>

                                                        @error('state')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">

                                                <div class="col-12">
                                                    <div class="form-floating">

                                                        <input name="phoneNumber"
                                                               class="form-control @error('phoneNumber') is-invalid @enderror"
                                                               type="text"
                                                               value="{{Auth::check()?$address->phone_number:''}}"
                                                               placeholder="Phone number"/>
                                                        <label for="phoneNumber">Phone number</label>

                                                        @error('phoneNumber')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3>{{Auth::check()?'02':'03'}}</h3>
                                <h4>Payment Method</h4>
                                <hr class="sep1">
                                <div class="form-contain">
                                    <div class="form-group">
                                        <div class="row ">

                                            <div class="col-12">
                                                @foreach($paymentMethods as $paymentMethod)
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input"
                                                            type="radio"
                                                            id="payment{{$paymentMethod->id}}"
                                                            name="paymentMethod"
                                                            value="{{$paymentMethod->id}}"
                                                            {{$paymentMethod->id==1?'checked':''}}>
                                                        <label class="form-check-label"
                                                               for="payment{{$paymentMethod->id}}">
                                                            {{$paymentMethod->description}}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div id="info" class="row pt-3">

                                            <div class="col-8">
                                                <div class="form-floating">

                                                    <input name="cardNumber"
                                                           class="form-control @error('cardNumber') is-invalid @enderror"
                                                           type="number"
                                                           placeholder="Card number"/>
                                                    <label for="cardNumber">Card number</label>
                                                    @error('cardNumber')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-floating">
                                                    <input name="cvcCode"
                                                           class="form-control @error('cvcCode') is-invalid @enderror"
                                                           type="number"
                                                           placeholder="CVC code"/>
                                                    <label for="cvcCode">CVC code</label>
                                                    @error('cvcCode')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (session('cart'))

                            <div class="row pt-5">
                                <div class="col-6 offset-6">
                                    <button type="submit" class="btn btn-yellow w-100"
                                        {{ $items == '0' ? 'disabled' : '' }}>PAY NOW
                                    </button>
                                </div>
                            </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>

    </section>

@stop
@section('js-scripts')
    <script src="{{ asset('js/account.js') }}" defer type="text/javascript"></script>
@stop

