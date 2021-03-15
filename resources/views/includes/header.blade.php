<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">


<nav id="navbar1" class="navbar navbar-expand-lg navbar-light ">
    <div class="container bg-transparent">

        <div class="navbar-collapse collapse w-100 order-1 order-md-1 order-lg-0 dual-collapse2">
            <ul class="nav navbar-nav">
                <li>
                    <a class="nav-link" href="about">ABOUT</a>
                </li>
                <li>
                    <a class="nav-link" href="subscription">THE BOX</a>
                </li>

                <li>
                    <a class="nav-link" href="wiki">WIKI</a>
                </li>
            </ul>
        </div>

        <div class="mx-auto order-0 order-md-0 order-lg-1">

                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('images/pictures/logo3.png')}}" alt="FlawlessBox">
                    </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>

        <div class="navbar-collapse collapse w-100 order-2 order-md-2 order-lg-2 dual-collapse2">

            <ul class="nav navbar-nav ml-auto my-auto">
                <li>
                    <a class="nav-link" href="account">ACCOUNT</a>
                </li>
                <li>
                    <a class="nav-link " href="cart">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        SHOPPING CART
                    </a>

                </li>
            </ul>
        </div>
    </div>
</nav>
