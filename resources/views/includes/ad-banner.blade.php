@section('css-scripts')
    <link rel="stylesheet" href="{{asset('css/pages/ad.css')}}">
@endsection
<div id="carouselAd" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselAd" data-slide-to="0" class="active"></li>
        <li data-target="#carouselAd" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-container">
                <img src="/images/pictures/info4.jpg" alt="First slide">
            </div>
            <div class="centered">
                <div class="ad">
                    <div class="centered">
                        <h2 >
                          NEW SPRING BOX
                        </h2>

                        <a class="link" href="{{asset('wiki')}}">
                            Check out
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-container">

                <img src="/images/pictures/info5.jpg" alt="Second slide">
            </div>

            <div class="centered">
                <div class="ad">
                    <div class=" centered">
                        <h2>
                            THE SKINCARE WIKI<br>
                        </h2>

                        <a class="link" href="{{asset('wiki')}}">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
