@extends('layout.master')

@section('title')
    Wiki
@stop

@section('css-scripts')
    <link rel="stylesheet" href="css/wiki-style.css">
@stop

@section('headers')
    @include('includes.header')
@stop


@section('content')
    <section id="intro">
        <div class="container w-75">
            <div class="row ">
                <div class="col-12">
                    <div class="row ">
                        <div class="col-lg-6  ">
                            <div class="row container  h-100 align-content-center">

                                <div class="header pt-5">
                                    <div class="pb-5">
                                        <h1>SKINCARE WIKI</h1>
                                        <h2>INTRODUCTION <br>TO PRODUCTS</h2>

                                    </div>

                                    {{--                                    <p>Skin is one of the largest organs of the body. Because of this, caring for your skin can directly affect--}}
                                    {{--                                        your--}}
                                    {{--                                        overall health. Your skin acts as a protective shield and is most vulnerable to outside elements. It’s--}}
                                    {{--                                        affected by more factors than you may think. </p>--}}
                                    {{--                                    <p>--}}
                                    {{--                                        Besides a daily skin care routine, make it a habit to examine your own skin for abnormalities,--}}
                                    {{--                                        discolorations, or any other changes on a regular basis. Have your skin examined by a doctor or--}}
                                    {{--                                        dermatologist annually for any changes.--}}
                                    {{--                                    </p>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6   ">
                            <div class="row text-center">
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <a class="wiki-link" href="wiki#cleanser">
                                                <img src="images/pictures/vector/cleanser.png">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="products">Cleanser</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <a class="wiki-link" href="wiki#toner">
                                                <img src="images/pictures/vector/toner.png">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ">
                                            <label class="products">Toner</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row ">
                                        <div class="col-12">
                                            <a class="wiki-link" href="wiki#serum">
                                                <img src="images/pictures/vector/serum.png">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12">
                                            <label class="products">Serum</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ">
                                    <div class="row ">
                                        <div class="col-12">
                                            <a class="wiki-link" href="wiki#essence">
                                                <img src="images/pictures/vector/essence.png">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12">
                                            <label class="products">Essence</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <a class="wiki-link" href="wiki#sheet-mask">
                                                <img src="images/pictures/vector/masksheet.png">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="products">Sheet mask</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ">
                                    <div class="row ">
                                        <div class="col-12">
                                            <a class="wiki-link" href="wiki#eye-cream">
                                                <img src="images/pictures/vector/eyecream.png">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12">
                                            <label class="products">Eye cream</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-3 ">
                                    <div class="row ">
                                        <div class="col-12">
                                            <a class="wiki-link" href="wiki#spot-treatment">
                                                <img src="images/pictures/vector/spot-treatment.png">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12">
                                            <label class="products">Spot treatment</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-3 ">
                                    <div class="row ">
                                        <div class="col-12">
                                            <a class="wiki-link" href="wiki#moisturizer">
                                                <img src="images/pictures/vector/moisturizer.png">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12">
                                            <label class="products">Moisturizer</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-3 ">
                                    <div class="row ">
                                        <div class="col-12">
                                            <a class="wiki-link" href="wiki#sunscreen">
                                                <img src="images/pictures/vector/sunscreen.png">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12">
                                            <label class="products">Sunscreen</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ">
                                    <div class="row ">
                                        <div class="col-12">
                                            <a class="wiki-link" href="wiki#exfoliant">
                                                <img src="images/pictures/vector/exfoliant.png">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12">
                                            <label class="products">Exfoliant</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ">
                                    <div class="row ">
                                        <div class="col-12">
                                            <a class="wiki-link" href="wiki#face-mask">
                                                <img src="images/pictures/vector/face-mask.png">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12">
                                            <label class="products">Face mask</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>
    <section id="skincare">
        <div class="container w-75">

            <section id="basics">


                <div id="basics" class="separator">
                    <div class="container">
                        <h2><span>THE BASICS</span></h2>
                    </div>
                    <div class="products container">

                        <div class="description">
                            <p>

                                5 step routine. Healthy skin. 20m.

                            </p>

                        </div>
                        <div class="row ">
                            <div class="col-12">
                                <div class="row text-center">
                                    <div class="col-lg-2 col-4">
                                        <div class="row">
                                            <div class="col-md-9 col-8">
                                                <div class="row">
                                                    <div class="col-12">


                                                        <a class="wiki-link" href="wiki#cleanser">
                                                            <img src="images/pictures/vector/cleanser.png">

                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="products">Cleanser</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-4 my-auto">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-2 col-4">
                                        <div class="row">
                                            <div class="col-md-9 col-8">
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <a class="wiki-link" href="wiki#eye-cream">
                                                            <img src="images/pictures/vector/eyecream.png">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <label class="products">Eye cream</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-4 my-auto">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4">
                                        <div class="row">
                                            <div class="col-md-9 col-8">
                                                <div class="row ">
                                                    <div class="col-12  ">

                                                        <a class="wiki-link" href="wiki#spot-treatment">
                                                            <img src="images/pictures/vector/spot-treatment.png">
                                                        </a>


                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="products">SPOT TREATMENT</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-4 my-auto">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-lg-2 col-4">
                                        <div class="row">
                                            <div class="col-md-9 col-8">
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <a class="wiki-link" href="wiki#moisturizer">
                                                            <img src="images/pictures/vector/moisturizer.png">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <label class="products">Moisturizer</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-4 my-auto">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4">
                                        <div class="row">
                                            <div class="col-md-9 col-8">
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <a class="wiki-link" href="wiki#sunscreen">
                                                            <img src="images/pictures/vector/sunscreen.png">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <label class="products">Sunscreen</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-3 col-4 my-auto">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 my-auto">
                                        <img src="images/pictures/vector/heart.png">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <article id="cleanser">

                    <div class="row center">
                        <div class="col-md-6 col-12 ">
                            <h4>01</h4>

                            <h3>CLEANSER</h3>
                            <p>
                                Oil cleansers can also be part of a multiple-step cleansing process to get the “best
                                clean”
                                you
                                can. For
                                example, makeup wearers like to cleanse with oil to remove product and dirt, followed by
                                a
                                foaming
                                cleansing
                                to soak up excess oil and remove anything left behind.
                            </p>
                            <p>
                            <h5>HOW TO APPLY</h5>
                            <ol>
                                <li>Use one pump of oil cleanser</li>
                                <li>Soak a little facial towel in warm water and then press into your face. The heat
                                    from
                                    the
                                    towel
                                    will
                                    open your pores and make easier clean your skin.
                                </li>
                                <li>Once your face is oily, use a damp towel to wipe the oil away.</li>
                                <li>Remove lipstick and eye makeup, including mascara, put a couple of drops of oil on
                                    damp
                                    cotton
                                    rounds
                                </li>
                            </ol>
                            </p>
                        </div>
                        <div class="col-md-5 offset-md-1 col-12  ">
                            <div class="row no-gutters">
                                <div class="col-lg-12 bg-pink texture-45lines">
                                    <img class="w-100" src="/images/pictures/products/wiki/cleanser.png">
                                </div>


                            </div>

                        </div>
                    </div>

                </article>
                <article id="eye-cream">
                    <div class="row center ">
                        <div class="col-md-5  col-12 order-md-first order-last ">
                            <div class="row no-gutters">
                                <div class="col-lg-12 bg-blue ">
                                    <img class="w-100" src="/images/pictures/products/wiki/eyecream.png">
                                </div>


                            </div>
                        </div>
                        <div class="col-md-6 offset-md-1 col-12 order-md-last order-first">
                            <h4>02</h4>

                            <h3>eye cream</h3>

                            <p>
                                Eye cream will reduce signs of ageing as long as you apply your product morning and
                                night.
                                Some
                                eye
                                cream
                                help shadows and bags by increasing the circulation and others are better with fine
                                lines
                                and
                                wrinkles.
                                Some
                                eye creams do both. Eye creams are generally thicker than face creams and target the
                                lack of
                                collagen
                                production and sluggish circulation.
                            </p>
                            <div>
                                <h5>HOW TO APPLY </h5>
                                <ol>
                                    <li>Pick up a dime-sized amount of eye cream on your finger</li>
                                    <li>Dot it on around the orbital bone</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </article>
                <article id="spot-treatment">
                    <div class="row center">
                        <div class="col-md-6 col-12 ">
                            <h4>03</h4>

                            <h3>spot treatment</h3>
                            <p>
                                Exfoliating is the process of removing dead skin cells from the surface of your skin
                                using a
                                chemical,
                                granular substance, or exfoliation tool
                                Exfoliating can improve the appearance of your skin in several ways.
                                There are a few abrasive materials to choose from for manual exfoliation, including:
                            <ul>
                                <li>Cleansing scrubs</li>
                                <li>Exfoliating mitts</li>
                                <li>Dry brushes</li>
                                <li>Loofahs</li>
                                <li>Pumice stones</li>
                                <li>Microneedling or micro derma rollers</li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-md-5 offset-md-1 col-12 ">
                            <div class="row no-gutters ">
                                <div class="col-lg-12 bg-green texture-tablecloth">
                                    <img class="w-100" src="/images/pictures/products/wiki//spottreatment.png">
                                </div>


                            </div>
                        </div>
                    </div>
                </article>
                <article id="moisturizer">
                    <div class="row center">
                        <div class="col-md-5 col-12  order-md-first order-last ">
                            <div class="row no-gutters">
                                <div class="col-lg-12 bg-purple texture-xlines">
                                    <img class="w-100" src="/images/pictures/products/wiki/moisturizer.png">
                                </div>


                            </div>
                        </div>
                        <div class="col-md-6 offset-md-1 col-12 order-md-last order-first">

                            <h4>04</h4>

                            <h3>Moisturizer</h3>
                            <p>
                                A face moisturizer helps to prevent dryness and moisture loss in skin. A properly
                                formulated
                                moisturiser
                                can
                                deliver long-lasting hydration to help support skin’s natural barrier for protection
                                against
                                external
                                aggressors. It is also an important step in prepping skin for makeup application. Face
                                moisturisers are
                                available in the form of serums, creams and facial masks.
                            </p>
                            <div>
                                <h5>HOW TO APPLY </h5>
                                <ol>
                                    <li> After you’ve waited 5 minutes for the serum to absorb, apply your moisturizer
                                        to
                                        your
                                        face
                                        and
                                        neck.
                                    </li>
                                    <li> Wait 5 minutes for the mousturizer to absorbe before apply another product.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                </article>
                <article id="sunscreen">
                    <div class="row center">
                        <div class="col-md-6 col-12 ">
                            <h4>05</h4>

                            <h3>sunscreen</h3>
                            <p>
                                SPF stands for Sun Protection Factor. It measures the level of protection a product will
                                give
                                you from
                                UVB.
                                The British Association of Dermatologists recommend always using a minimum of SPF 30,
                                which
                                blocks 97%
                                of
                                UVB. To put that into context, SPF 15 blocks 93% and SPF 50 blocks 98%.
                            </p>
                            <div>
                                <h5>HOW TO APPLY </h5>
                                <ol>
                                    <li>Apply sunscreen about 15 minutes before you go outside</li>
                                    <li>Apply about a nickel-sized amount every day — even when it’s cloudy.</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1 col-12 ">
                            <div class="col text-center">
                                <div class="row no-gutters">
                                    <div class="col-lg-12 bg-yellow texture-45lines">
                                        <img class="w-100" src="/images/pictures/products/wiki//sunscreen.png">
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </article>
            </section>

            <section id="extras">
                <div class="separator">
                    <div class="container">
                        <h2><span>+ EXTRA CARE</span></h2>
                    </div>
                    <div class=" container">

                        <div class="description">
                            <p>

                                8 step routine. Glowy skin. Basic 20m + 15m.

                            </p>

                        </div>
                        <div class="row products">
                            <div class="col-12">
                                <div class="row text-center">
                                    <div class="col-lg-4 col-8">
                                        <div class="row">
                                            <div class="col-md-9 col-8">
                                                <div class="row">
                                                    <div class="col-12">


                                                        <a class="wiki-link" href="wiki#basics">
                                                            <img src="images/pictures/vector/basic.png">

                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="products">BASIC ROUTINE</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-4 my-auto">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-2 col-4">
                                        <div class="row">
                                            <div class="col-md-9 col-8">
                                                <div class="row">
                                                    <div class="col-12">

                                                        <a class="wiki-link" href="wiki#toner">
                                                            <img src="images/pictures/vector/toner.png">

                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 ">
                                                        <label class="products">Toner</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-4 my-auto">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-2 col-4">
                                        <div class="row">
                                            <div class="col-md-9 col-8">
                                                <div class="row ">
                                                    <div class="col-12">

                                                        <a class="wiki-link" href="wiki#serum">
                                                            <img src="images/pictures/vector/serum.png">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <label class="products">Serum</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-4 my-auto">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-lg-2 col-4">
                                        <div class="row">
                                            <div class="col-md-9 col-8">
                                                <div class="row ">
                                                    <div class="col-12">

                                                        <a class="wiki-link" href="wiki#essence">
                                                            <img src="images/pictures/vector/essence.png">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <label class="products">Essence</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-4 my-auto">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-lg-2 col-4 my-auto">
                                        <img src="images/pictures/vector/heart.png">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <article id="toner">
                    <div class="row center ">
                        <div class="col-md-5 col-12  order-md-first order-last ">
                            <div class="row no-gutters">
                                <div class="col-lg-12 bg-green texture-dots">
                                    <img class="w-100" src="/images/pictures/products/wiki/toner.png">
                                </div>


                            </div>
                        </div>
                        <div class="col-md-6 offset-md-1 col-12 order-md-last order-first">
                            <h4>06</h4>
                            <h3>TONER</h3>
                            <p>
                                Toners are often misunderstood and most people don't know if they should use it, or how
                                to
                                use
                                it. Before
                                moisturizing and following your facial cleanser, a face toner is a quick, absorbing
                                liquid
                                that
                                helps to
                                remove excess dirt, traces of oil and makeup, correct and balance the pH of your skin,
                                and
                                control acne.
                                In
                                other words, a facial toner thoroughly cleans the skin and helps remove built up surface
                                dead
                                skin
                                cells. By
                                helping to clean and close pores, it's especially beneficial for acne-prone skin.
                            </p>
                            <div>
                                <h5>HOW TO APPLY </h5>
                                <ol>
                                    <li> After cleansing, apply a small amount of liquid, alcohol-free facial toner onto
                                        a
                                        cotton ball
                                        or
                                        pad.
                                    </li>
                                    <li>In small, gentle circles, apply the toner across your entire face.</li>
                                    <li>Pay special attention to your hairline, chin, cheeks, and nose.</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                </article>
                <article id="serum">
                    <div class="row center">
                        <div class="col-md-6 col-12 ">
                            <h4>07</h4>

                            <h3>serum</h3>
                            <p>
                                Serum is a skincare product you can apply to your skin after cleansing but before
                                moisturizing
                                with the
                                intent of delivering powerful ingredients directly into the skin. Serum is particularly
                                suited
                                to this
                                task
                                because it is made up of smaller molecules that can penetrate deeply into the skin and
                                deliver a
                                very
                                high
                                concentration of active ingredients. This makes them a great tool for targeting specific
                                skincare
                                concerns,
                                like wrinkles
                            </p>
                            <div>
                                <h5>HOW TO APPLY </h5>
                                <ol>
                                    <li> The amount you need may vary depending on your skin and the particular product
                                        you
                                        have.
                                    </li>
                                    <li> The standard application is 2 pumps or a pea-sized amount.</li>
                                    <li> If you have a dropper formula, use 3-4 drops of serum.</li>
                                    <li> You want just enough to lightly cover (not coat) your entire face and neck.
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1 col-12">
                            <div class="row no-gutters">
                                <div class="col-lg-12 bg-purple texture-tablecloth">
                                    <img class="w-100" src="/images/pictures/products/wiki//serum.png">
                                </div>


                            </div>
                        </div>
                    </div>
                </article>
                <article id="essence">
                    <div class="row center">
                        <div class=" col-md-5 col-12  order-md-first order-last ">
                            <div class="row no-gutters">
                                <div class="col-lg-12 bg-yellow texture-xlines">
                                    <img class="w-100" src="/images/pictures/products/wiki/essence.png">
                                </div>


                            </div>
                        </div>
                        <div class="col-md-6 offset-md-1 col-12 order-md-last order-first">
                            <h4>08</h4>
                            <h3>essence</h3>
                            <p>
                                Essences have similar benefits to a serum, and with a lower molecular weight than most
                                daily
                                creams,
                                they
                                work to penetrate the skin much deeper than your average moisturiser
                            </p>
                            <p>
                            <h5>HOW TO APPLY </h5>
                            <ol>
                                <li>Pour about 2-3 drops of the essence into hand</li>
                                <li>Gently pat over face and neck for even coverage</li>
                            </ol>
                            </p>
                        </div>
                    </div>
                </article>

            </section>

            <section id="weekly">
                <div class="separator">
                    <div class="container">
                        <h2><span>ONCE A WEEK</span></h2>
                    </div>


                    <div class="row products text-center">
                        <div class="col-12">
                            <div class="row text-center">
                                <div class="col-md-3 col-6">
                                    <div class="row">
                                        <div class="col-md-9 col-8">
                                            <div class="row ">
                                                <div class="col-12">

                                                    <a class="wiki-link" href="wiki#sheet-mask">
                                                        <img src="images/pictures/vector/masksheet.png">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-12">
                                                    <label class="products">Sheet mask</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-4 my-auto">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="row">
                                        <div class="col-md-9 col-8">
                                            <div class="row ">
                                                <div class="col-12">
                                                    <a class="wiki-link" href="wiki#exfoliant">
                                                        <img src="images/pictures/vector/exfoliant.png">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-12">
                                                    <label class="products">Exfoliant</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-4 my-auto">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="row">
                                        <div class="col-md-9 col-8">
                                            <div class="row ">
                                                <div class="col-12">

                                                    <a class="wiki-link" href="wiki#face-mask">
                                                        <img src="images/pictures/vector/face-mask.png">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-12">
                                                    <label class="products">Face mask</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-4 my-auto">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-3 col-6 my-auto">
                                    <img src="images/pictures/vector/heart.png">
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <article id="sheet-mask">
                    <div class="row center">
                        <div class="col-md-6 col-12 ">

                            <h4>09</h4>
                            <h3>sheet mask</h3>
                            <p>
                                Foam cleansers create a foamy lather (hence the name), and are ideal for removing oil,
                                layers of
                                makeup
                                and
                                even hard-to-wash-off sunscreen. They can be a little bit harsh since they’re made to
                                slightly
                                dry out
                                the
                                skin, though some are formulated with oils or emollients to provide a more moisturizing
                                experience.
                            </p>
                            <div>
                                <h5>HOW TO APPLY </h5>
                                <ol>
                                    <li>Wash your hands thoroughly. Put up your hair so it is out of your face.</li>
                                    <li>Wet your face with water. Pump 2 or 3 pumps of foaming cleanser into the palms
                                        of
                                        your
                                        hands.
                                    </li>
                                    <li>Rub your hands together to spread the cleanser onto your hands.</li>

                                </ol>
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1 col-12 ">
                            <div class="row no-gutters">
                                <div class="col-lg-12 bg-gray">
                                    <img class="w-100" src="/images/pictures/products/wiki//sheetmask.png">
                                </div>


                            </div>
                        </div>
                    </div>

                </article>
                <article id="exfoliant">

                    <div class="row center">
                        <div class="col-md-5 col-12  order-md-first order-last ">
                            <div class="row no-gutters">
                                <div class="col-lg-12 bg-pink texture-dots">
                                    <img class="w-100" src="/images/pictures/products/wiki/exfoliator.png">
                                </div>


                            </div>
                        </div>
                        <div class="col-md-6 offset-md-1 col-12 order-md-last order-first">

                            <h4>10</h4>

                            <h3>exfoliant</h3>
                            <p>
                                Exfoliating is the process of removing dead skin cells from the surface of your skin
                                using a
                                chemical,
                                granular substance, or exfoliation tool
                                Exfoliating can improve the appearance of your skin in several ways.
                                There are a few abrasive materials to choose from for manual exfoliation, including:
                            <ul>
                                <li>Cleansing scrubs</li>
                                <li>Exfoliating mitts</li>
                                <li>Dry brushes</li>
                                <li>Loofahs</li>
                                <li>Pumice stones</li>
                                <li>Microneedling or micro derma rollers</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </article>
                <article id="face-mask">
                    <div class="row center">
                        <div class="col-md-6 col-12 ">
                            <h4>11</h4>

                            <h3>Face mask</h3>
                            <p>
                                Exfoliating is the process of removing dead skin cells from the surface of your skin
                                using a
                                chemical,
                                granular substance, or exfoliation tool
                                Exfoliating can improve the appearance of your skin in several ways.
                                There are a few abrasive materials to choose from for manual exfoliation, including:
                            <ul>
                                <li>Cleansing scrubs</li>
                                <li>Exfoliating mitts</li>
                                <li>Dry brushes</li>
                                <li>Loofahs</li>
                                <li>Pumice stones</li>
                                <li>Microneedling or micro derma rollers</li>
                            </ul>
                            </p>

                        </div>
                        <div class="col-md-5 offset-md-1 col-12 ">
                            <div class="row no-gutters">
                                <div class="col-lg-12 bg-gray texture-tablecloth">
                                    <img class="w-100" src="/images/pictures/products/wiki/facemask.png">
                                </div>


                            </div>


                        </div>
                    </div>
                </article>
            </section>


        </div>
    </section>
    <section id="join" style="padding-top: 10%">
        <div class="h-100 row align-items-center ">
            <div class="col text-center">
                <a class="btn btn-join" href="subscription#join-now">JOIN NOW</a>
            </div>
        </div>
    </section>
@stop


