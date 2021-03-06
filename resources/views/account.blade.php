<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Flawless Box | About</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="css/account-style.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>


<header>
    @include('includes.header')
</header>

<main>
    <section id="header">

        <div class="row">
            <div id="banner" class="col-md-6 col-sm-12 order-last order-md-first">

                <div class="h-50 row align-items-center">
                    <div class="col">
                        <div class=" container">

                            <div class="row text-center">
                                <div class="col-lg-12 ">

                                    <div class="title ">

                                        <h2>
                                            CHECKOUT

                                            <div class="georgia"
                                                 style="font-size: 2.5em; color: var(--lightblack)">
                                                March's
                                            </div>


                                            BRAND
                                        </h2>

                                    </div>

                                    <a class="btn btn-orange text-light " href="wiki">
                                        TAKE A LOOK
                                    </a>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>


            </div>
            <div class="col-md-6 col-sm-12 order-first order-md-last pt-5 pb-5 ">
                <div class="h-100 row align-items-center">
                    <div class=" container">

                    <div class="col-md-12 col-lg-10 col-xl-7 offset-lg-1">

                            <h1>Login</h1>
                            <p>
                               To keep connected with us please
                                login with your personal info.
                            </p>


                            <form>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                    </div>
                                </div>
                            </form>
                            <p class="text-right">
                                <a href="reset">Forgot password?</a>
                            </p>
                            <a class="btn btn-green" href="login">LOGIN</a> or <a href="subscription#packages"> Join now</a>
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
