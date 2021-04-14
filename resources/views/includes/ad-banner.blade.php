@section('css-scripts')
    <link rel="stylesheet" href="{{asset('css/pages/ad.css')}}">
@append
<div id="carouselAd" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselAd" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselAd" data-bs-slide-to="1" ></button>
    </div>
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
