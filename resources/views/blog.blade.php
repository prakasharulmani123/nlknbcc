@extends('layouts.master')

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ \App\Banner::fetchImage('blog') ?: 'assets/phoenix/images/bg_2.jpg'}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Blog</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{ route('blog') }}" class="block-20" style="background-image: url('assets/phoenix/images/image_1.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
                                <div class="one">
                                    <span class="day mr-1">29</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">May</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{ route('blog') }}" class="block-20" style="background-image: url('assets/phoenix/images/image_2.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
                                <div class="one">
                                    <span class="day mr-1">29</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">May</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{ route('blog') }}" class="block-20" style="background-image: url('assets/phoenix/images/image_3.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center p-2 mb-4 topp">
                                <div class="one">
                                    <span class="day mr-1">29</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">May</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{ route('blog') }}" class="block-20" style="background-image: url('assets/phoenix/images/image_4.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
                                <div class="one">
                                    <span class="day mr-1">29</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">May</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{ route('blog') }}" class="block-20" style="background-image: url('assets/phoenix/images/image_5.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
                                <div class="one">
                                    <span class="day mr-1">29</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">May</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{ route('blog') }}" class="block-20" style="background-image: url('assets/phoenix/images/image_6.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
                                <div class="one">
                                    <span class="day mr-1">29</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">May</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{ route('blog') }}" class="block-20" style="background-image: url('assets/phoenix/images/image_7.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center p-2 mb-4 topp">
                                <div class="one">
                                    <span class="day mr-1">29</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">May</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{ route('blog') }}" class="block-20" style="background-image: url('assets/phoenix/images/image_8.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
                                <div class="one">
                                    <span class="day mr-1">29</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">May</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
