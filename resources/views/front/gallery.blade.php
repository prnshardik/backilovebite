@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Gallery
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Gallery</h2>
                        <ul>
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li><i class="flaticon-tea-cup"></i></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title-shape">
            <img src="{{ asset('front/img/page-title/down-shape.png') }}" alt="image">
        </div>
    </div>
    <section class="gallery-area ptb-100">
        <div class="container-fluid">
            <div class="section-title">
                <span>Photos</span>
                <h2>Our Food Gallery</h2>
            </div>
            <div class="gallery-slider owl-carousel owl-theme">
                <div class="gallery-item">
                    <div class="image">
                        <img src="{{ asset('front/img/gallery/image1.jpg') }}" alt="image">
                        <div class="content">
                            <span>Burger</span>
                            <h3>Dilicious Burger</h3>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="image">
                        <img src="{{ asset('front/img/gallery/image2.jpg') }}" alt="image">
                        <div class="content">
                            <span>Burger</span>
                            <h3>Buzz Burgers</h3>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="image">
                        <img src="{{ asset('front/img/gallery/image3.jpg') }}" alt="image">
                        <div class="content">
                            <span>Burger</span>
                            <h3>Smokin' Burger</h3>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="image">
                        <img src="{{ asset('front/img/gallery/image4.jpg') }}" alt="image">
                        <div class="content">
                            <span>Burger</span>
                            <h3>Bugout Burgers</h3>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="image">
                        <img src="{{ asset('front/img/gallery/image5.jpg') }}" alt="image">
                        <div class="content">
                            <span>Burger</span>
                            <h3>Backyard Burgers</h3>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="image">
                        <img src="{{ asset('front/img/gallery/image6.jpg') }}" alt="image">
                        <div class="content">
                            <span>Burger</span>
                            <h3>Beefcakes Burgers</h3>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="image">
                        <img src="{{ asset('front/img/gallery/image7.jpg') }}" alt="image">
                        <div class="content">
                            <span>Burger</span>
                            <h3>Dungeon Burgers</h3>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="image">
                        <img src="{{ asset('front/img/gallery/image8.jpg') }}" alt="image">
                        <div class="content">
                            <span>Burger</span>
                            <h3>Master Burgers</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="overview-area pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="overview-item">
                        <img src="{{ asset('front/img/overview/image1.jpg') }}" alt="image">
                        <div class="content">
                            <strong>Pangolin Burger</strong>
                            <h3>
                                <a href="{{ route('front.menu') }}">Festive Special Burger</a>
                            </h3>
                            <a href="{{ route('front.menu') }}" class="default-btn">
                                Order Now
                                <i class="flaticon-play-button"></i>
                                <span></span>
                            </a>
                        </div>
                        <div class="dollar">
                            <span>Burger</span>
                            <h4>$12</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="overview-item">
                        <img src="{{ asset('front/img/overview/image2.jpg') }}" alt="image">
                        <div class="content">
                            <strong>Flat 30% Off</strong>
                            <h3>
                                <a href="{{ route('front.menu') }}">Burger King Special</a>
                            </h3>
                            <a href="{{ route('front.menu') }}" class="default-btn">
                                Order Now
                                <i class="flaticon-play-button"></i>
                                <span></span>
                            </a>
                        </div>
                        <div class="dollar">
                            <span>Burger</span>
                            <h4>$45</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="overview-item">
                        <img src="{{ asset('front/img/overview/image3.jpg') }}" alt="image">
                        <div class="content">
                            <strong>Pangolin Burger</strong>
                            <h3>
                                <a href="{{ route('front.menu') }}">Festive Burger</a>
                            </h3>
                            <a href="{{ route('front.menu') }}" class="default-btn">
                                Order Now
                                <i class="flaticon-play-button"></i>
                                <span></span>
                            </a>
                        </div>
                        <div class="dollar">
                            <span>Burger</span>
                            <h4>$65</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="overview-item">
                        <img src="{{ asset('front/img/overview/image4.jpg') }}" alt="image">
                        <div class="content">
                            <strong>CrazyBurger</strong>
                            <h3>
                                <a href="{{ route('front.menu') }}">Jurik Burger</a>
                            </h3>
                            <a href="{{ route('front.menu') }}" class="default-btn">
                                Order Now
                                <i class="flaticon-play-button"></i>
                                <span></span>
                            </a>
                        </div>
                        <div class="dollar">
                            <span>Burger</span>
                            <h4>$09</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="overview-item">
                        <img src="{{ asset('front/img/overview/image5.jpg') }}" alt="image">
                        <div class="content">
                            <strong>Summer 30% Off</strong>
                            <h3>
                                <a href="{{ route('front.menu') }}">Burger Vulso Special</a>
                            </h3>
                            <a href="{{ route('front.menu') }}" class="default-btn">
                                Order Now
                                <i class="flaticon-play-button"></i>
                                <span></span>
                            </a>
                        </div>
                        <div class="dollar">
                            <span>Burger</span>
                            <h4>$10</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
