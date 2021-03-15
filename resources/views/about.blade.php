<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Flawless Box | About</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="css/about-style.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>


<header>
    @include('includes.header')
</header>

<main>
    <section id="header">

        <div class="h-100 row align-items-center">
            <div class="col">
                <div class=" container">

                    <div class="row">
                        <div class="col-lg-8 col-md-10">

                            <div class="title ">
                                <h1>
                                    Get<br> the skin<br> you deserve
                                </h1>
                                <h2>
                                    Your skincare routine has never been this easy.
                                </h2>
                                <p class="pt-3">
                                    FlawlessBox is the simplest way to achive a perfect skin. When you subscribe to
                                    FlawlessBox, you'll recive a monthly package with a mix of skincare luxury samples
                                    to create our own 7-step skincare routine.
                                </p>
                            </div>

                            <div class="text-light">
                                Visit our skincare wiki to learn about 7-step skincare routine.<br>
                                <a class="btn btn-pink " href="wiki">
                                    LEARN MORE</a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </section>
    <section id="brands ">


                <div class="row no-gutters ">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div id="wrapper">
                            <img class="w-100 hover" src="/images/pictures/info4.jpg">
                            <p class="text">La Poche-Posay</p>


                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div id="wrapper">
                            <img class="w-100 hover" src="/images/pictures/info5.jpg">
                            <p class="text">The ordinary</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div id="wrapper">
                            <img class="w-100 hover" src="/images/pictures/info6.jpg">
                            <p class="text">Clinique</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div id="wrapper">
                            <img class="w-100 hover" src="/images/pictures/info7.jpg">
                            <p class="text">Drunk Elephant</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div id="wrapper">
                            <img class="w-100 hover" src="/images/pictures/info8.jpg">
                            <p class="text">Cosrx</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div id="wrapper">
                            <img class="w-100 " src="/images/pictures/info9.jpg">
                            <p class="text">SK-II</p>
                        </div>
                    </div>
                </div>


    </section>
    <section id="info">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-5 offset-lg-2 col-md-6">
                    <h3>01</h3>

                    <h4 class="pt-2 pb-2">JOIN</h4>
                    <p>

                        In each box, you will receive 5 full-size beauty items. Ranging from makeup and skincare, to
                        beauty tools and color cosmetics, each box has an average value over $175.
                    </p>
                </div>
                <div class="col-lg-5 col-md-6  text-center">
                    <img class="w-75" src="/images/pictures/info3.jpg">

                </div>
                <div class="col-lg-1">
                </div>
            </div>
            <div class="row">

                <div class="col-lg-5 offset-lg-2 col-md-6  text-center order-md-first order-last">
                    <img class="w-75" src="/images/pictures/info.jpg">

                </div>
                <div class="col-lg-5  col-md-6 order-md-last  order-first">
                    <h3>02</h3>

                    <h4 class="pt-2 pb-2">ENJOY</h4>
                    <p>
                        Enjoy exclusive, members-only offers from the best brands in beauty. Win free products through
                        BOXY-Giveaways and receive reward points redeemable in our exclusive Charm Shop!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 offset-lg-2 col-md-6">
                    <h3>03</h3>

                    <h4 class="pt-2 pb-2">SHARE LOVE</h4>
                    <p>
                        Find new and creative ways to use the products in your BOXYCHARM by watching tutorials and looks
                        shared by our Charmer community on social media.</p>
                </div>
                <div class="col-lg-5  col-md-6 text-center">
                    <img class="w-75" src="/images/pictures/info2.jpg">

                </div>

            </div>
        </div>
    </section>
    <section id="join">
        <div class="h-100 row align-items-center ">
            <div class="col text-center">
                <a class="btn btn-join" href="about">JOIN NOW</a>


            </div>

        </div>
    </section>
</main>

<footer>
    @include('includes.footer')
</footer>

<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>


</body>

<script src="{{ asset('/js/script.js') }}"></script>

</html>
