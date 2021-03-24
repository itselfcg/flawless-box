<nav class="actions-navbar navbar navbar-expand-md navbar-light">

    <button class="navbar-toggler" data-toggle="collapse" data-target=".dual-collapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav order-0 brand ">

        <a href="{{ url('/') }}">
            <img src="{{asset('images/pictures/logo1.png')}}" alt="FlawlessBox">
        </a>


    </div>
    <div class="navbar-nav w-50 order-md-1 order-2 w-100 ">

        <div class="container">
            <div class="w-100">
                <div id="carouselContent" class="carousel slide w-100 text-center" data-ride="carousel">
                    <div class="carousel-inner " role="listbox">
                        <div class="carousel-item active">
                            <p>Free shipping in your anual subscription.</p>
                        </div>
                        <div class="carousel-item">

                            <p>Checkout our guide for more info about products.</p>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                        <span class="carousel-control-next-icon " aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <ul class="navbar-nav ml-auto visible-md order-md-2 order-1 ">
        <li class="nav-item">
            <a class="nav-link" href="cart"><i class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i><sup> 0</sup></a>
        </li>
    </ul>
    <div class="collapse navbar-collapse dual-collapse  w-25 order-sm-1 order-2" id="collapse_target1">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item hide-sm">
                <a class="nav-link" href="login"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item hide-sm" style="width: 60px;">
                <a class="nav-link" href="cart"><i class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i><sup> 0</sup></a>
            </li>
        </ul>
    </div>
</nav>

<nav class="navbar navbar-expand-md secondary-navbar">

    <div class="collapse navbar-collapse w-100 dual-collapse" id="collapse_target2">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item visible-sm">
                <a class="nav-link" href="login">Account</a>
            </li>
            <li>
                <a class="nav-link" href="/">Home</a>
            </li>
            <li>
                <a class="nav-link" href="about">About</a>
            </li>
            <li>
                <a class="nav-link" href="subscription">The Box</a>
            </li>
            <li>
                <a class="nav-link" href="wiki">Guide</a>
            </li>
            <li>
                <a class="nav-link" href="dev">Developer</a>
            </li>
        </ul>

    </div>
</nav>
