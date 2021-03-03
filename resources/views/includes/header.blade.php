<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">


<nav class="navbar navbar-expand-md navbar-light ">

    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('images/pictures/logo.png')}}"
                                                       alt="FlawlessBox"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="about">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="subscription">THE BOX</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="account">MY ACCOUNT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="wiki" target="_blank">WIKI</a>
            </li>
        </ul>
    </div>
</nav>