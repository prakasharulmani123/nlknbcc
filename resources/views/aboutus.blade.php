@extends('layouts.master')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ \App\Banner::fetchImage('aboutus') ?: 'assets/phoenix/images/bg_3.jpg'}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">About Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section img ftco-about ftco-no-pt ftco-no-pb" style="background-image: url(assets/phoenix/images/bg_2.jpg);"  data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 py-md-5">
                    <div class="row justify-content-start py-md-5">
                        <div class="col-md-12 heading-section heading-section-white ftco-animate">
                            <h2 class="mb-4">About the Phoenix</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                            <p><a href="#" class="btn btn-secondary py-3 px-4">Watch Game</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-self-stretch" style="background-image:url(assets/phoenix/images/about.jpg);"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section intro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1>Life is about timing</h1>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar</p>
                </div>
            </div>
        </div>
    </section>


    @include('partials._team_squad')


    <section class="ftco-section services-section bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex">
                        <div class="icon"><span class="flaticon-baseball-ball"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Baseball Training</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex">
                        <div class="icon"><span class="flaticon-helmet"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Softball Training</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex">
                        <div class="icon"><span class="flaticon-helmet-1"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Basic Defense</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex">
                        <div class="icon"><span class="flaticon-baseball-bat"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Basic Tactics</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section slash">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-4">Happy Viewers</h2>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-4" style="background-image: url(assets/phoenix/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Jason Smith</p>
                                    <span class="position">Viewer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-4" style="background-image: url(assets/phoenix/images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Jason Smith</p>
                                    <span class="position">Viewer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-4" style="background-image: url(assets/phoenix/images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Jason Smith</p>
                                    <span class="position">Viewer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-4" style="background-image: url(assets/phoenix/images/person_4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Jason Smith</p>
                                    <span class="position">Viewer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-4" style="background-image: url(assets/phoenix/images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Jason Smith</p>
                                    <span class="position">Viewer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter bg-light" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="20">0</strong>
                            <span>Game Played</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="3">0</strong>
                            <span>Coaches</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="24">0</strong>
                            <span>Trophies</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="18">0</strong>
                            <span>Members</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
