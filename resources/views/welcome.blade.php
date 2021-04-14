@extends('layout.master')

@section('title')
    Home
@stop

@section('css-scripts')
    <link rel="stylesheet" href="{{asset('css/pages/welcome.css')}}">
@stop

@section('content')


    <section id="intro">

        <div class="h-75 row align-content-end">
            <div class=" col-md-4 offset-md-7 justify-content-center
            offset-1 col-11 ">
                <div class="title">
                    <h1>Skincare to fall in love</h1>
                    <p>Chekout our new March's box. free shipping in your first box.</p>
                    <a class="link" href="subscription">More info</a>

                </div>

            </div>
        </div>
    </section>
    <section id="products">

        <div class="container ">
            <div class="row ">
                <div class="col-12">
                    <div class="row ">
                        <div class="col-lg-6 ">
                            <div class="row text-center">
                                <div class="col-3">
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
                                <div class="col-3">
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
                                <div class="col-3">
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
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-md-9 col-8">
                                            <div class="row ">
                                                <div class="col-12  ">

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
                                        <div class="col-md-3 col-4 my-auto">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="row text-center">
                                <div class="col-3 ">
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
                                <div class="col-3 ">
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
                                <div class="col-3 ">
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
                                <div class="col-3 my-auto">
                                    <img src="images/pictures/vector/heart.png">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>


@stop

