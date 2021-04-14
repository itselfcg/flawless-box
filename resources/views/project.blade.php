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
                            <h2> Info </h2>
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
                        <div class="col-md-4">
                            <h3>01</h3>
                            <h4>History</h4>
                            <p>Flawless Box is a personal project to challenge myself.
                            </p>
                            <p>
                                A couple of months ago I started to practice my frontend skills.
                                I made a bunch of webpages in codepen experimenting with html and css; this project is one of those webpages —if we can call it that because it is completely different—.


                            </p>

                            <p>
                                My objetive it's still improve my frontend skills
                                but to make thing more interesting I added some backend.
                            </p>
                        </div>

                        <div class="col-md-4">
                            <h3>02</h3>
                            <h4>About</h4>
                            <p>This page is the v2.?</p>
                            <p>
                                Flawless Box v1 started as a store, showing some products without any real
                                functionality.
                                After all it was born in codepen.io.
                            </p>

                            <p>
                                Flawless Box v2 took the idea above and upgraded it. Not just the design improve
                                I created a real subscription system.
                                Customers can choose a plan, pay for it and manage their subscription. — Just for functionality, I don't sell anything —
                            </p>

                        </div>
                        <div class="col-md-4">
                            <h3>03</h3>
                            <h4>Tecnologies</h4>
                            <p>
                                Flawless Box v1
                                <br>
                                <a class="link" href="https://github.com/itselfcg/flawless-box" target="_blank"><i
                                        class="fa fa-codepen "></i> Codepen</a>, Bootstrap v4.

                            </p>

                            <p>
                                Flawless Box v2
                                <br> Laravel, Bootstrap v5, PostgreSQL, Heroku, <a class="link"
                                                                                   href="https://github.com/itselfcg/flawless-box"
                                                                                   target="_blank"><i
                                        class="fa fa-github"></i> Git</a>.
                            </p>



                        </div>
                        <div class="col-md-8">
                            <h3>04</h3>
                            <h4>Sketches</h4>

                            <ul class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link active border-pink border border-dark border-bottom-0"
                                        id="version1-tab"
                                        data-bs-toggle="tab" data-bs-target="#version1"
                                        role="tab" type="button"
                                        aria-controls="version1"
                                        aria-selected="true">
                                        v1
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link border border-pink border-bottom-0"
                                            id="version2-tab"
                                            data-bs-toggle="tab" data-bs-target="#version2"
                                            role="tab" type="button"
                                            aria-controls="version2" aria-selected="false">
                                        v2
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active p-3 active border border-pink"
                                     id="version1" role="tabpanel" aria-labelledby="version1-tab">
                                    <div id="crslSketch1" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#crslSketch1" data-bs-slide-to="0"
                                                    class="active"></button>
                                            <button type="button" data-bs-target="#crslSketch1"
                                                    data-bs-slide-to="1"></button>
                                            <button type="button" data-bs-target="#crslSketch1"
                                                    data-bs-slide-to="2"></button>
                                            <button type="button" data-bs-target="#crslSketch1"
                                                    data-bs-slide-to="3"></button>
                                        </div>
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
                                        <a class="carousel-control-prev" data-bs-target="#crslSketch1" role="button"
                                           data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-bs-target="#crslSketch1" role="button"
                                           data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                </div>
                                <div class="tab-pane fade p-3 border border-pink"
                                     id="version2" role="tabpanel" aria-labelledby="version2-tab">
                                    <div id="crslSketch" class="carousel slide" data-bs-ride=="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#crslSketch" data-bs-slide-to="0"
                                                    class="active"></button>
                                            <button type="button" data-bs-target="#crslSketch"
                                                    data-bs-slide-to="1"></button>
                                            <button type="button" data-bs-target="#crslSketch"
                                                    data-bs-slide-to="2"></button>
                                            <button type="button" data-bs-target="#crslSketch"
                                                    data-bs-slide-to="3"></button>
                                            <button type="button" data-bs-target="#crslSketch"
                                                    data-bs-slide-to="4"></button>
                                            <button type="button" data-bs-target="#crslSketch"
                                                    data-bs-slide-to="5"></button>
                                            <button type="button" data-bs-target="#crslSketch"
                                                    data-bs-slide-to="6"></button>
                                            <button type="button" data-bs-target="#crslSketch"
                                                    data-bs-slide-to="7"></button>
                                            <button type="button" data-bs-target="#crslSketch"
                                                    data-bs-slide-to="8"></button>
                                            <button type="button" data-bs-target="#crslSketch"
                                                    data-bs-slide-to="9"></button>
                                            <button type="button" data-bs-target="#crslSketch"
                                                    data-bs-slide-to="10"></button>
                                        </div>
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

                                                <img class="d-block w-100" src="images/page-sketches/v2-6.jpg">
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
                                        <a class="carousel-control-prev" data-bs-target="#crslSketch" type="button"
                                           data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-bs-target="#crslSketch" type="button"
                                           data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h3>05</h3>
                            <h4>Future</h4>

                            <p>
                                Flawless Box is not finished.
                                There're still a bunch of thing that could improve —like the payment system— I'm working on it.
                            </p>

                            <p>
                                The design has been changing and might still change. I'm experimenting. :)

                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </article>

    </section>



@stop
