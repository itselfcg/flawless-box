<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Flawless Box | Home</title>
    @include('includes.links')
    <link rel="stylesheet" href="css/intro-style.css">

</head>

<body>


<header>
    @include('includes.promo')
    @include('includes.header2')
</header>

<main id="intro">


    <section id="header">

        <div class="h-75 row align-items-end">
            <div class="col justify-content-center offset-lg-6 offset-md-5 offset-sm-4 offset-3">
                <div class="title">
                    <h1>LOVE YOURSELF,</h1>
                    <h2>love your skin.</h2>
                    <h3>Skincare boxes to fall in love</h3>
                </div>
                <a class="btn btn-yellow " href="about">GET STARTED</a>

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
                                        <div class="col-9">
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="images/pictures/vector/cleanser.png">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="products">Cleanser</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 my-auto">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="images/pictures/vector/toner.png">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 ">
                                                    <label class="products">Toner</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 my-auto">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row ">
                                                <div class="col-12">
                                                    <img src="images/pictures/vector/serum.png">
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-12">
                                                    <label class="products">Serum</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 my-auto">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row ">
                                                <div class="col-12  ">
                                                    <img src="images/pictures/vector/masksheet.png">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="products">Sheet mask</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 my-auto">
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
                                        <div class="col-9">
                                            <div class="row ">
                                                <div class="col-12">
                                                    <img src="images/pictures/vector/eyecream.png">
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-12">
                                                    <label class="products">Eye cream</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 my-auto">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row ">
                                                <div class="col-12">
                                                    <img src="images/pictures/vector/moisturizer.png">
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-12">
                                                    <label class="products">Moisturizer</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 my-auto">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row ">
                                                <div class="col-12">
                                                    <img src="images/pictures/vector/sunscreen.png">
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-12">
                                                    <label class="products">Sunscreen</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-3 my-auto">
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

<section id="media">

<div class="container">
   &nbsp;

</div>

</section>

</main>

<footer>
    @include('includes.footer')
</footer>

<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>


</body>
</html>
