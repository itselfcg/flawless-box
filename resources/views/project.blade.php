@extends('layout/master')
@section('title','Inspiration')

@section('css-scripts')
    <link rel="stylesheet" href="{{asset('css/pages/project.css')}}">

@stop

@section('content')
    <section id="intro">
        <div>
            <div class="container w-75">
                <div class="row container-title ">
                    <div class="col-12 align-self-end ">
                        <div class="title">
                            <h1>Project</h1>
                            <h2> Info / Resources</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="content">
        <section class="separator pb-3">
            <div class="container w-75">
                <h2><span> info</span></h2>

            </div>

        </section>
        <article id="project-info" class="container w-75">
            <div class="row">
                <div class="col-12">
                    <div class="row text-justify">
                        <div class="col-md-6">
                            <h3>01</h3>
                            <h4>History</h4>
                            <p>Flawless Box is a personal project to challenge myself.</p>
                            <p>
                                A couple of months ago I started to practice my frontend skills.
                                I made a bunch of webpages in codepen experimenting with html and css; this project is
                                one of
                                those webpages.
                            </p>

                            <p>

                                The hardest part of starting a personal project is finding a topic.
                                I remember that when I decided to started this project I wanted to practice but also
                                make
                                something that made me proud.
                                So I chose a topic that I love; It make learning/experimenting a incredible experience.
                            </p>
                        </div>

                        <div class="col-md-6">
                            <h3>02</h3>
                            <h4>About</h4>
                            <p>This page is the V2.5.? of Flawless Box.</p>
                            <p>
                                Flawless Box V1 started as a store, showing some products without any real functionality.
                                After all it was born in codepen.io.
                            </p>

                            <p>
                                Flawless Box V2 took that idea. Create a real subscription system, and let the user do almost all thing you can do in a real page.
                                The design has been change and might still change. I'm still learning. :)
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h3>03</h3>
                            <h4>Tecnologies</h4>
                            <p>
                                Flawless Box v1
                                <br>
                                <a class="link" href="https://github.com/itselfcg/flawless-box" target="_blank"><i
                                        class="fa fa-codepen "></i>  Codepen</a>, Bootstrap v4.

                            </p>

                            <p>
                                Flawless Box v2
                                <br> Laravel, Bootstrap v4.5, <a class="link"  href="https://github.com/itselfcg/flawless-box" target="_blank"><i
                                        class="fa fa-github"></i> Git</a> , Heroku.
                            </p>

                        </div>
                        <div class="col-md-6">
                            <h3>04</h3>
                            <h4>Sketches</h4>

                            <nav>
                                <div class="nav nav-tabs border-0 " id="nav-tab" role="tablist">
                                    <a class="nav-link active border-pink border border-dark border-bottom-0"
                                       id="nav-sketch1-tab" data-toggle="tab"
                                       href="#nav-sketch1" role="tab" aria-controls="nav-sketch1"
                                       aria-selected="true">
                                        v1</a>
                                    <a class="nav-link border border-pink border-bottom-0"
                                       id="nav-sketch2-tab" data-toggle="tab"
                                       href="#nav-sketch2" role="tab"
                                       aria-controls="nav-sketch2" aria-selected="false">
                                        v2</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active p-3 active border border-pink"
                                     id="nav-sketch1" role="tabpanel" aria-labelledby="nav-sketch1-tab">
                                    <div id="crslSketch1" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#crslSketch1" data-slide-to="0" class="active"></li>
                                            <li data-target="#crslSketch1" data-slide-to="1"></li>
                                            <li data-target="#crslSketch1" data-slide-to="2"></li>
                                            <li data-target="#crslSketch1" data-slide-to="3"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="images/page-sketches/v1-1.jpg">

                                            </div>
                                            <div class="carousel-item ">
                                                <img class="d-block w-100" src="images/page-sketches/v1-2.jpg">

                                            </div>
                                            <div class="carousel-item ">
                                                <img class="d-block w-100" src="images/page-sketches/v1-3.jpg">

                                            </div>
                                            <div class="carousel-item ">
                                                <img class="d-block w-100" src="images/page-sketches/v1-4.jpg">

                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#crslSketch1" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#crslSketch1" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                </div>
                                <div class="tab-pane fade p-3 border border-pink"
                                     id="nav-sketch2" role="tabpanel" aria-labelledby="nav-sketch2-tab">
                                    <div id="crslSketch" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#crslSketch" data-slide-to="0" class="active"></li>
                                            <li data-target="#crslSketch" data-slide-to="1"></li>
                                            <li data-target="#crslSketch" data-slide-to="2"></li>
                                            <li data-target="#crslSketch" data-slide-to="3"></li>
                                            <li data-target="#crslSketch" data-slide-to="4"></li>
                                            <li data-target="#crslSketch" data-slide-to="5"></li>
                                            <li data-target="#crslSketch" data-slide-to="6"></li>
                                            <li data-target="#crslSketch" data-slide-to="7"></li>
                                            <li data-target="#crslSketch" data-slide-to="8"></li>
                                            <li data-target="#crslSketch" data-slide-to="9"></li>
                                            <li data-target="#crslSketch" data-slide-to="10"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="images/page-sketches/v2-1.jpg">
                                            </div>
                                            <div class="carousel-item ">

                                                <img class="d-block w-100" src="images/page-sketches/v2-2.jpg">
                                            </div>
                                            <div class="carousel-item ">
                                                <img class="d-block w-100" src="images/page-sketches/v2-3.jpg">
                                            </div>
                                            <div class="carousel-item ">
                                                <img class="d-block w-100" src="images/page-sketches/v2-4.jpg">
                                            </div>
                                            <div class="carousel-item ">

                                                <img class="d-block w-100" src="images/page-sketches/v2-5.jpg">
                                            </div>
                                            <div class="carousel-item ">

                                                <img class="d-block w-100" src="images/page-sketches/6v2-.jpg">
                                            </div>
                                            <div class="carousel-item ">
                                                <img class="d-block w-100" src="images/page-sketches/v2-7.jpg">
                                            </div>
                                            <div class="carousel-item ">
                                                <img class="d-block w-100" src="images/page-sketches/v2-8.jpg">
                                            </div>
                                            <div class="carousel-item ">
                                                <img class="d-block w-100" src="images/page-sketches/v2-9.jpg">
                                            </div>
                                            <div class="carousel-item ">
                                                <img class="d-block w-100" src="images/page-sketches/v2-10.jpg">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#crslSketch" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#crslSketch" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            </p>


                        </div>
                    </div>

                </div>
            </div>
        </article>

    </section>



@stop
