@extends('layout.master')

@section('title')
    About
@stop

@section('css-scripts')
    <link rel="stylesheet" href="{{asset('css/pages/about.css')}}">
@stop

@section('content')
    <section id="intro">

        <div class="h-100 row align-items-center">
            <div class="col">
                <div class=" container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10">
                            <div class="title ">
                               <h1>Get  <br>the skin <br> you deserve</h1>
                                <h2>
                                    About FlawlessBox
                                </h2>
                                <p>
                                    FlawlessBox is the simplest way to achive a perfect skin. When you subscribe to
                                    FlawlessBox, you'll recive a monthly package with a mix of skincare luxury samples
                                    to create your own 7-step skincare routine.
                                </p>
                            </div>

                            <p>
                                Visit our skincare wiki to learn about skincare products.<br><br>
                                <a class="btn btn-yellow " href="wiki">
                                    LEARN MORE</a>
                            </p>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </section>
    <section class="separator">
        <div class="container w-75">
            <h2><span>HOW IT WORKS</span></h2>
        </div>
    </section>
    <section id="info">
        <div class="container w-75">
            <div class="row no-gutters">
                <div class=" col-md-6">
                    <h3>01</h3>

                    <h4 class="pt-2 pb-2">JOIN</h4>
                    <p>

                        In each box, you will receive 5 full-size beauty items. Ranging from makeup and skincare, to
                        beauty tools and color cosmetics, each box has an average value over $175.
                    </p>
                </div>
                <div class="col-md-6  text-right">
                    <img class="w-75" src="/images/pictures/info3.jpg">

                </div>

            </div>
            <div class="row no-gutters">
                <div class="col-md-6 text-left">
                    <img class="w-75" src="/images/pictures/info.jpg">

                </div>
                <div class="col-md-6">
                    <h3>02</h3>

                    <h4 class="pt-2 pb-2">ENJOY</h4>
                    <p>
                        Enjoy exclusive, members-only offers from the best brands in beauty. Win free products through
                        BOXY-Giveaways and receive reward points redeemable in our exclusive Charm Shop!</p>
                </div>


            </div>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <h3>03</h3>

                    <h4 class="pt-2 pb-2">SHARE LOVE</h4>
                    <p>
                        Find new and creative ways to use the products in your BOXYCHARM by watching tutorials and looks
                        shared by our Charmer community on social media.</p>
                </div>
                <div class="col-md-6 text-right">
                    <img class="w-75" src="/images/pictures/info2.jpg">

                </div>

            </div>
        </div>
    </section>
    <section id="join" style="padding-top: 5em;">
        <div class="h-100 row align-items-center ">
            <div class="col text-center">
                <a class="btn btn-join" href="about">JOIN NOW</a>
            </div>

        </div>
    </section>
    <section class="separator">
        <div class="container w-75">
            <h2><span>OUR BRANDS</span></h2>
        </div>
    </section>
    <section id="brands">

        <div class="container w-75">
            <div class="container text-center my-3">
                <div class="row mx-auto my-auto">
                    <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item py-5 active">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4 col-6">
                                        <a href="https://www.laroche-posay.com/" target="_blank">
                                            <img class="w-100 hover" src="/images/pictures/brands/brand4.png">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-6">
                                        <a href="https://theordinary.deciem.com/" target="_blank">
                                            <img class="w-100 hover" src="/images/pictures/brands/brand5.png">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-6">
                                        <a href="https://www.clinique.com/" target="_blank">
                                            <img class="w-100 hover" src="/images/pictures/brands/brand6.png">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-6">
                                        <a href="https://www.drunkelephant.com/" target="_blank">
                                            <img class="w-100 hover" src="/images/pictures/brands/brand7.png">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-6" >
                                        <a href="https://www.cosrx.com/" target="_blank">
                                            <img class="w-100 hover" src="/images/pictures/brands/brand8.png">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-6">
                                        <a href="https://www.sk-ii.com/" target="_blank">
                                            <img class="w-100 " src="/images/pictures/brands/brand9.png">
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item py-5">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4 col-6">
                                        <a href="https://www.laroche-posay.com/" target="_blank">
                                            <img class="w-100 hover" src="/images/pictures/brands/brand9.png">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-6">
                                        <a href="https://theordinary.deciem.com/" target="_blank">
                                            <img class="w-100 hover" src="/images/pictures/brands/brand8.png">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-6">
                                        <a href="https://www.clinique.com/" target="_blank">
                                            <img class="w-100 hover" src="/images/pictures/brands/brand7.png">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-6">
                                        <a href="https://www.drunkelephant.com/" target="_blank">
                                            <img class="w-100 hover" src="/images/pictures/brands/brand6.png">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-6" >
                                        <a href="https://www.cosrx.com/" target="_blank">
                                            <img class="w-100 hover" src="/images/pictures/brands/brand5.png">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-6">
                                        <a href="https://www.sk-ii.com/" target="_blank">
                                            <img class="w-100 " src="/images/pictures/brands/brand4.png">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a class="carousel-control-prev text-dark" href="#myCarousel" role="button" data-slide="prev">
                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-dark" href="#myCarousel" role="button" data-slide="next">
                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>





        </div>
    </section>
@stop

