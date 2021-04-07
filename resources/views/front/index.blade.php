@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Home
@endsection

@section('styles')
@endsection

@section('content')
    <div class="main-slider-area">
        <div class="home-slider owl-carousel owl-theme">
            <div class="home-item item-bg1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="slider-content">
                                        <img src="{{ asset('front/img/slider/burger.png') }}" alt="image">
                                        <span>Updated Menu's Item</span>
                                        <h1>Chickensup  Burger</h1>
                                        <ul class="list">
                                            <li>
                                                <i class="flaticon-share"></i>
                                                Integrated With Mushroom
                                            </li>
                                            <li>
                                                <i class="flaticon-share"></i>
                                                Cheese Integrated
                                            </li>
                                            <li>
                                                <i class="flaticon-share"></i>
                                                Bacon Flavour
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="slider-image">
                                        <img src="{{ asset('front/img/slider/image1.png') }}" alt="image">

                                        <div class="shape">
                                            <img src="{{ asset('front/img/slider/shape.png') }}" alt="image">
                                            <div class="dollar">
                                                <span>Only</span>
                                                <h3>$45.88</h3>
                                                <i class="flaticon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-item item-bg1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="slider-content">
                                        <img src="{{ asset('front/img/slider/burger.png') }}" alt="image">
                                        <span>Updated Menu's Item</span>
                                        <h1>Chickensup  Burger</h1>
                                        <ul class="list">
                                            <li>
                                                <i class="flaticon-share"></i>
                                                Integrated With Mushroom
                                            </li>
                                            <li>
                                                <i class="flaticon-share"></i>
                                                Cheese Integrated
                                            </li>
                                            <li>
                                                <i class="flaticon-share"></i>
                                                Bacon Flavour
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="slider-image">
                                        <img src="{{ asset('front/img/slider/image2.png') }}" alt="image">
                                        <div class="shape">
                                            <img src="{{ asset('front/img/slider/shape.png') }}" alt="image">
                                            <div class="dollar">
                                                <span>Only</span>
                                                <h3>$45.88</h3>
                                                <i class="flaticon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-item item-bg1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="slider-content">
                                        <img src="{{ asset('front/img/slider/burger.png') }}" alt="image">
                                        <span>Updated Menu's Item</span>
                                        <h1>Chickensup  Burger</h1>
                                        <ul class="list">
                                            <li>
                                                <i class="flaticon-share"></i>
                                                Integrated With Mushroom
                                            </li>
                                            <li>
                                                <i class="flaticon-share"></i>
                                                Cheese Integrated
                                            </li>
                                            <li>
                                                <i class="flaticon-share"></i>
                                                Bacon Flavour
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="slider-image">
                                        <img src="{{ asset('front/img/slider/image3.png') }}" alt="image">
                                        <div class="shape">
                                            <img src="{{ asset('front/img/slider/shape.png') }}" alt="image">
                                            <div class="dollar">
                                                <span>Only</span>
                                                <h3>$45.88</h3>
                                                <i class="flaticon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="welcome-area pb-100 pt-100">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="welcome-image">
                        <img src="{{ asset('front/img/welcome.png') }}" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="welcome-content">
                        <span>Welcome</span>
                        <h3>Burger With Yummy Test Real Love</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        <div class="welcome-btn">
                            <a href="{{ route('front.menu') }}" class="default-btn">
                                Menu
                                <i class="flaticon-play-button"></i>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-shape">
            <div class="shape1">
                <img src="{{ asset('front/img/image-icon/1.png') }}" alt="image">
            </div>
            <div class="shape2">
                <img src="{{ asset('front/img/image-icon/2.png') }}" alt="image">
            </div>
        </div>
    </section>
    <section class="burger-shop-area">
        <div class="container">
            <div class="section-title">
                <span>Quality Products</span>
                <h2>Select Expected Dilicious One</h2>
            </div>
            <div class="burger-shop-slider owl-carousel owl-theme">
                @if(isset($categories) && !empty($categories))
                    @foreach($categories as $row)
                        <div class="burger-shop-item">
                            <div class="image">
                                <img src="{{ $row->image }}" alt="{{ $row->name ?? '' }} image" style="max-width: 60px; max-height: 60px;">
                                <div class="burger-btn">
                                    <a href="{{ route('front.shop') }}" class="default-btn">
                                        Order Online
                                        <i class="flaticon-play-button"></i>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>{{ $row->name ?? '' }}</h3>
                                <p>{{ $row->description ?? '' }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="burger-shop-shape">
            <div class="shape1">
                <img src="{{ asset('front/img/image-icon/3.png') }}" alt="image">
            </div>
            <div class="shape2">
                <img src="{{ asset('front/img/image-icon/4.png') }}" alt="image">
            </div>
            <div class="shape3">
                <img src="{{ asset('front/img/image-icon/6.png') }}" alt="image">
            </div>
        </div>
    </section>
    <section class="menu-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Pricing Lists</span>
                <h2>Choose & order now!</h2>
            </div>
            <div class="tab menu-list-tab">
                <ul class="tabs">
                    @if(isset($menu) && $menu->isNotEmpty())
                        @foreach($menu as $row)
                            <li>
                                <a href="#">
                                    <img src="{{ $row->image }}" alt="{{ $row->name }} image" style="max-height: 50px; max-width: 50px;">
                                    <span>{{ $row->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
                <div class="tab_content">
                    @if(isset($menu) && $menu->isNotEmpty())
                        @foreach($menu as $row)
                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="menu-bar">
                                            @if(isset($row->products) && !empty($row->products))
                                                @foreach($row->products as $pRow)
                                                    <div class="menu-list-content" style="margin-bottom: 20px;">
                                                        <h3>
                                                            {{ $pRow->name ?? '' }}
                                                            <b>....................</b>
                                                            <span>${{ $pRow->price ?? '' }}</span>
                                                        </h3>
                                                        <p>{{ $pRow->description ?? '' }}</p>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="menu-shape">
            <div class="shape1">
                <img src="{{ asset('front/img/image-icon/7.png') }}" alt="image">
            </div>
            <div class="shape2">
                <img src="{{ asset('front/img/image-icon/4.png') }}" alt="image">
            </div>
            <div class="shape3">
                <img src="{{ asset('front/img/image-icon/5.png') }}" alt="image">
            </div>
            <div class="shape4">
                <img src="{{ asset('front/img/image-icon/6.png') }}" alt="image">
            </div>
        </div>
    </section>
    <section class="delivery-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="delivery-content">
                        <span>Delivery</span>
                        <h3>What You Want to Select A Pick Up Through Online</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        <p>Eusmod tempor incididunt ut labore et dolore magna aliqua. Quis suspendisse ultrices gravida.</p>
                        <div class="delivery-btn">
                            <a href="{{ route('front.menu') }}" class="default-btn">
                                Order Now
                                <span></span>
                                <i class="flaticon-play-button"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="delivery-image">
                        <img src="{{ asset('front/img/delivery.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="global-shape">
            <img src="{{ asset('front/img/global.png') }}" alt="image">
        </div>
    </section>
    <section class="testimonial-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Testimonial</span>
                <h2>Our Clients Review</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        @if(isset($reviews) && $reviews->isNotEmpty())
                            @foreach($reviews as $row)
                                <div class="row testimonial-item">
                                    <div class="col-sm-8">
                                        <div class="info">
                                            <h3>{{ $row->name }}</h3>
                                            <span>{{ $row->title }}</span>
                                        </div>
                                        <p style="font-size: 12px;">{{ $row->message }}</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="testimonial-image">
                                            <img src="{{ $row->image }}" alt="{{ $row->image }} image" class="rounded mx-auto d-block" style="max-height: 200px; max-width:200px;">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-shape">
            <div class="shape1">
                <img src="{{ asset('front/img/image-icon/5.png') }}" alt="image">
            </div>
            <div class="shape2">
                <img src="{{ asset('front/img/image-icon/3.png') }}" alt="image">
            </div>
            <div class="shape3">
                <img src="{{ asset('front/img/image-icon/6.png') }}" alt="image">
            </div>
            <div class="shape4">
                <img src="{{ asset('front/img/image-icon/2.png') }}" alt="image">
            </div>
            <div class="shape5">
                <img src="{{ asset('front/img/image-icon/6.png') }}" alt="image">
            </div>
        </div>
    </section>
    <section class="footer-area pt-100 pb-70">
        <div class="book-table-area pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="book-table-content">
                            <h3>Book A Table Now!</h3>
                            <p>Book table as per your requirment with between 9 AM to 11 PM.</p>
                            <div class="book-table-btn">
                                <a href="tel:{{ _settings('CONTACT_NUMBER') }}">
                                    {{ _settings('CONTACT_NUMBER') }}
                                    <i class="flaticon-play-button"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="book-table-image">
                            <img src="{{ asset('front/img/book-table.jpg') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <ul class="table">
                            @if(isset($timing) && $timing->isNotEmpty())
                                @foreach($timing as $row)
                                    <li>
                                        {{ $row->days }}
                                        <span>
                                            @if($row->status == 'inactive')
                                                Closed
                                            @else
                                                {{ $row->start_time }} - {{ $row->end_time }}                                     
                                            @endif
                                        </span>
                                    </li>
                                @endforeach
                            @endif                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Address</h3>
                        <ul class="contact-info">
                            <li>
                                <i class="flaticon-phone-ringing"></i>
                                <a href="tel:{{ _settings('CONTACT_NUMBER') }}">{{ _settings('CONTACT_NUMBER') }}</a>
                            </li>
                            <li>
                                <i class="flaticon-chat"></i>
                                <a href="mailto:{{ _settings('CONTACT_EMAIL') }}">{{ _settings('CONTACT_EMAIL') }}</a>
                            </li>
                            <li>
                                <i class="flaticon-aim"></i>
                                {!! _settings('CONTACT_ADDRESS') !!}
                            </li>
                        </ul>
                        <ul class="social">
                            <li class="facebook"><a href="https://{{ _settings('FACEBOOK') }}" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                            <li class="instagram"><a href="https://{{ _settings('INSTAGRAM') }}" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                            <li class="youtube"><a href="https://{{ _settings('YOUTUBE') }}" target="_blank"><i class="bx bxl-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <div class="map">
                            <iframe src="{{ _settings('MAP_LINK') }}"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
