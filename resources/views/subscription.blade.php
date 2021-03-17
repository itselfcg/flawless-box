@extends('layout.master')

@section('title')
    Subscription
@stop

@section('css-scripts')
    <link rel="stylesheet" href="css/pages/subscripion.css">
@stop

@section('headers')
    @include('includes.header')
@stop

@section('content')
    <section id="intro">
        <div class="h-100 row align-items-center">
            <div class="col">
                <div class=" container">

                    <div class="row">
                        <div class="col-lg-8 col-md-10">

                            <div class="title ">
                                <h1>
                                    MARCH 2020
                                </h1>

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
                    <h4>Dr. Jart+</h4>

                    <h3>THE FUSION OF SKINCARE, SCIENCE<br> & ART</h3>

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
                            <h5>01</h5>

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
                            <h5>02</h5>

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
                    <h5>03</h5>

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
                <div class="col-lg-4 col-6">

                    <div id="wrapper">
                        <img class="w-100 hover" SRC="images/pictures/products/2.jpg">
                        <p class="text">

                            <b>Cryo Rubber™ Masks</b>

                            <br>

                            This innovative mask set packs the renewing effect of cryo-therapy in an at-home treatment.
                            This collection includes the Cryo Rubber™ with Soothing Allantoin to support skin's natural
                            healing process and protect from environmental irritants, while tiger grass addresses
                            visible redness and irritation.

                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-6">

                    <div id="wrapper">
                        <img class="w-100 hover" SRC="images/pictures/products/2a.jpg">
                        <p class="text">

                            <b>Cicapair™ Tiger Grass Camo Drops SPF 35</b>

                            <br>

                            A lightweight revitalizing serum and color corrector that neutralize the look of redness and
                            turn on skin's glow.

                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div id="wrapper">
                        <img class="w-100 hover" SRC="images/pictures/products/2b.jpg">
                        <p class="text">

                            <b>V7™ Antioxidant Serum</b>

                            <br>

                            This daily serum uses a vitamin E infused bubble burst combined with an essential vitamin
                            and antioxidant-rich complex to help brighten and smoothen skin. This serum is also
                            clinically tested to balance natural melanin production, improve skin brightness, and
                            deliver antioxidant effects.

                        </p>
                    </div>

                </div>
                <div class="col-lg-4 col-6">
                    <div id="wrapper">
                        <img class="w-100 hover" SRC="images/pictures/products/7.jpg">
                        <p class="text">

                            <b>Cicapair™ Tiger Grass Color Correcting Treatment SPF 30
                            </b>

                            <br>

                            This all-in-one treatment includes a color-changing capsule to cover blemishes and
                            neutralize redness, restoring fatigued skin for a vibrant appearance. The formula features
                            Tiger Grass (Centella Asiatica) to help heal sensitive skin exhibiting inflammation,
                            irritation or discomfort.

                        </p>
                    </div>

                </div>
                <div class="col-lg-4 col-6">
                    <div id="wrapper">
                        <img class="w-100 hover" SRC="images/pictures/products/3.jpg">
                        <p class="text">

                            <b>Focuspot™ Micro Tip™ Patches
                            </b>

                            <br>

                            Inspired by micro-needling procedures, Focuspot’s innovative adhesive patches contain small
                            micro tips made of hyaluronic acid that melt in contact with the skin. As they
                            self-dissolve, they deliver actives deep into the skin surface to target and treat stubborn
                            concerns—without the pain and recovery like similar in-office procedures.

                        </p>
                    </div>

                </div>
                <div class="col-lg-4 col-6">
                    <div id="wrapper">
                        <img class="w-100 hover" SRC="images/pictures/products/4.jpg">
                        <p class="text">

                            <b>Every Sun Day™ Sun Fluid SPF 50+
                            </b>

                            <br>

                            This formula forms a barrier against UVA and UVB rays and environmental aggressors and has a
                            glide-on texture and an invisible finish. It is moisturizing and refreshing while it cools,
                            hydrates, and guards against future UV damage and dryness.


                        </p>
                    </div>

                </div>
                <div class="col-lg-4 col-6">

                    <div id="wrapper">
                        <img class="w-100 hover" SRC="images/pictures/products/4A.jpg">
                        <p class="text">

                            <b>Cicapair™ Tiger Grass Cream
                            </b>

                            <br>

                            This soft cream moisturizes and soothes dry, sensitive skin. It is formulated with
                            Jartbiome, Dr. Jart’s proprietary microbiome complex to help strengthen and balance while
                            improving skin’s defenses against dryness. Centella Rx soothes and protects sensitive skin,
                            as Cicabond helps repair dry skin caused by external stressors.

                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-6">

                    <div class="h-100 row no-gutters align-items-center">
                        <div class="col text-center">

                            <div class="georgia pb-4"> FIND THESE<br> PRODUCTS AT<br>

                                <img class="w-50" src="images/pictures/logo3.png">

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
                <div class="col-md-4 pb-5">
                    <div class="package">

                        <img class="w-75" src="images/pictures/carton-box.jpg">

                        <p>
                        <h6>Monthly</h6>
                        <h7>$25/Month</h7>

                        </p>
                        <p>
                            <a class="btn btn-yellow" href="cart">
                                SELECT
                            </a>
                        </p>
                        <p>
                            $25 billed monthly<br><br>

                            <b>Non-Refundable</b><br><br>

                            Renews Automatically<br>
                            Cancel Anytime<br>

                        </p>
                    </div>
                </div>
                <div class="col-md-4 pb-5">
                    <div class="package">

                        <img class="w-75" src="images/pictures/carton-box2.jpg">
                        <p>
                        <h6>3 MONTHS</h6>
                        <h7>$23.33/Month</h7>

                        </p>
                        <p>
                            <a class="btn btn-yellow" href="cart">
                                SELECT
                            </a>
                        </p>
                        <p>
                            Prepay $70 for 3 months<br>
                            Save $5 compared to monthly!<br><br>
                            <b>Non-Refundable</b><br><br>
                            Renews Automatically<br>
                            Cancel Anytime<br>

                        </p>
                    </div>

                </div>
                <div class="col-md-4 pb-5">
                    <div class="package">

                        <img class="w-75" src="images/pictures/carton-box3.jpg">
                        <p>
                        <h6>6 MONTHS</h6>
                        <h7>$23/Month</h7>

                        </p>
                        <p>
                            <a class="btn btn-yellow" href="cart">
                                SELECT
                            </a>
                        </p>
                        <p>
                            Prepay $138 for 6 months<br>
                            Save $12 compared to monthly!<br><br>
                            <b>Non-Refundable</b><br><br>
                            Renews Automatically<br>
                            Cancel Anytime<br>

                        </p>
                    </div>


                </div>
            </div>
        </div>
    </section>
@stop


