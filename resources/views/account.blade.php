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
        <div class="container">
            <div class="row">
                <div id="banner" class="col-md-6 col-sm-12 order-last order-md-first">
                    <div class="row align-items-center h-100">
                        <div class="col-12 ">

                            <div class="text-center">
                                <div class="title ">

                                    <h2>
                                        CHECKOUT

                                        <div class="georgia"
                                             style="font-size: 2.5em; color: var(--mblack)">
                                            March's
                                        </div>


                                        BRAND
                                    </h2>

                                </div>
                                <a class="btn btn-orange" href="subscription">
                                    TAKE A LOOK
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="login" class="col-md-6 col-sm-12 order-first order-md-last ">
                    <div class="row align-items-center h-100">
                        <div class="col-10 offset-1 ">
                            <div>
                                <h1>Login</h1>
                                <p>
                                    To keep connected with us please
                                    login with your personal info.
                                </p>
                                <form>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="password" class="form-control" id="inputPassword"
                                                   placeholder="Password">
                                        </div>
                                    </div>
                                </form>
                                <p class="text-right">
                                    <a href="reset">Forgot password?</a>
                                </p>
                                <a class="btn btn-login" href="login">LOGIN</a> or <a href="subscription#join-now"> Join
                                    now</a>
                            </div>
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
