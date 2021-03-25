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

    <section class="food-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="food-item">
                        <img src="{{ asset('front/img/food/1.png') }}" alt="image">
                        <h3>Hamburger</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="food-item">
                        <img src="{{ asset('front/img/food/2.png') }}" alt="image">
                        <h3>Yummy Donuts</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="food-item">
                        <img src="{{ asset('front/img/food/3.png') }}" alt="image">
                        <h3>Craft Pizza</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="food-item">
                        <img src="{{ asset('front/img/food/4.png') }}" alt="image">
                        <h3>Ice Cream</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="welcome-area pb-100">
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
                            <a href="#" class="default-btn">
                                Explore History
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

    <section class="others-area ptb-100">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="others-item">
                        <div class="number">
                            <span>01</span>
                        </div>

                        <h3>Mild Butter</h3>
                        <p>Learning do amet contur diiscivt suia non nuameius velit modi</p>
                    </div>

                    <div class="others-item main-item">
                        <div class="number">
                            <span>02</span>
                        </div>

                        <h3>Slices Beef</h3>
                        <p>Learning do amet contur diiscivt suia non nuameius velit modi</p>
                    </div>

                    <div class="others-item bottom-0">
                        <div class="number">
                            <span>03</span>
                        </div>

                        <h3>Sleek Onion</h3>
                        <p>Learning do amet contur diiscivt suia non nuameius velit modi</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="others-item two main-item-two">
                        <div class="number">
                            <span>04</span>
                        </div>

                        <h3>Fresh Bread</h3>
                        <p>Learning do amet contur diiscivt suia non nuameius velit modi</p>
                    </div>

                    <div class="others-item two">
                        <div class="number">
                            <span>05</span>
                        </div>

                        <h3>Lettuce Leaf</h3>
                        <p>Learning do amet contur diiscivt suia non nuameius velit modi</p>
                    </div>

                    <div class="others-item two main-item-two bottom-0">
                        <div class="number">
                            <span>06</span>
                        </div>

                        <h3>Glow Cheese</h3>
                        <p>Learning do amet contur diiscivt suia non nuameius velit modi</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="others-shape">
            <div class="shape1">
                <img src="{{ asset('front/img/shape/shape1.png') }}" alt="image">
            </div>
            <div class="shape2">
                <img src="{{ asset('front/img/shape/shape2.png') }}" alt="image">
            </div>
        </div>
    </section>

    <section class="burger-shop-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Quality Products</span>
                <h2>Burgers As Expected Dilicious One</h2>
            </div>

            <div class="burger-shop-slider owl-carousel owl-theme">
                <div class="burger-shop-item">
                    <div class="image">
                        <img src="{{ asset('front/img/burger-shop/1.png') }}" alt="image">

                        <div class="burger-btn">
                            <a href="shop.html" class="default-btn">
                                Order Online
                                <i class="flaticon-play-button"></i>
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="content">
                        <h3>The Crispy Bun</h3>
                        <p>Learning do amet contur dicivt suia non nuameius velit</p>
                        <span>$56.00</span>
                    </div>
                </div>

                <div class="burger-shop-item">
                    <div class="image">
                        <img src="{{ asset('front/img/burger-shop/2.png') }}" alt="image">

                        <div class="burger-btn">
                            <a href="shop.html" class="default-btn">
                                Order Online
                                <i class="flaticon-play-button"></i>
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="content">
                        <h3>Beefcakes Burgers</h3>
                        <p>Buarning do amet contur dicivt suia non nuameius velit</p>
                        <span>$30.00</span>
                    </div>
                </div>

                <div class="burger-shop-item">
                    <div class="image">
                        <img src="{{ asset('front/img/burger-shop/3.png') }}" alt="image">

                        <div class="burger-btn">
                            <a href="shop.html" class="default-btn">
                                Order Online
                                <i class="flaticon-play-button"></i>
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="content">
                        <h3>Bugout Burgers</h3>
                        <p>Rearning do amet contur dicivt suia non nuameius velit</p>
                        <span>$35.00</span>
                    </div>
                </div>

                <div class="burger-shop-item">
                    <div class="image">
                        <img src="{{ asset('front/img/burger-shop/4.png') }}" alt="image">

                        <div class="burger-btn">
                            <a href="shop.html" class="default-btn">
                                Order Online
                                <i class="flaticon-play-button"></i>
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="content">
                        <h3>Crazy Burger</h3>
                        <p>Rearning do amet contur dicivt suia non nuameius velit</p>
                        <span>$20.00</span>
                    </div>
                </div>

                <div class="burger-shop-item">
                    <div class="image">
                        <img src="{{ asset('front/img/burger-shop/1.png') }}" alt="image">

                        <div class="burger-btn">
                            <a href="shop.html" class="default-btn">
                                Order Online
                                <i class="flaticon-play-button"></i>
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="content">
                        <h3>The Crispy Bun</h3>
                        <p>Learning do amet contur dicivt suia non nuameius velit</p>
                        <span>$56.00</span>
                    </div>
                </div>

                <div class="burger-shop-item">
                    <div class="image">
                        <img src="{{ asset('front/img/burger-shop/2.png') }}" alt="image">

                        <div class="burger-btn">
                            <a href="shop.html" class="default-btn">
                                Order Online
                                <i class="flaticon-play-button"></i>
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="content">
                        <h3>Beefcakes Burgers</h3>
                        <p>Buarning do amet contur dicivt suia non nuameius velit</p>
                        <span>$30.00</span>
                    </div>
                </div>

                <div class="burger-shop-item">
                    <div class="image">
                        <img src="{{ asset('front/img/burger-shop/3.png') }}" alt="image">

                        <div class="burger-btn">
                            <a href="shop.html" class="default-btn">
                                Order Online
                                <i class="flaticon-play-button"></i>
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="content">
                        <h3>Bugout Burgers</h3>
                        <p>Rearning do amet contur dicivt suia non nuameius velit</p>
                        <span>$35.00</span>
                    </div>
                </div>

                <div class="burger-shop-item">
                    <div class="image">
                        <img src="{{ asset('front/img/burger-shop/4.png') }}" alt="image">

                        <div class="burger-btn">
                            <a href="shop.html" class="default-btn">
                                Order Online
                                <i class="flaticon-play-button"></i>
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="content">
                        <h3>Crazy Burger</h3>
                        <p>Rearning do amet contur dicivt suia non nuameius velit</p>
                        <span>$20.00</span>
                    </div>
                </div>
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

    <div class="video-area">
        <div class="container">
            <div class="video-content">
                <div class="image">
                    <div class="dollar">
                        <div class="text">
                            <span>Burger</span>
                            <h3>$45</h3>
                        </div>
                    </div>

                    <a href="https://www.youtube.com/watch?v=qaHWDmFtBl0" class="video-btn popup-youtube">
                        <i class="flaticon-play-button"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="fun-facts-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="340">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                        <p>Cups of Coffee</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="2678">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                        <p>Orders Everyday</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="60">00</span>
                        </h3>
                        <p>Skilled Professionals</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="130">00</span>
                        </h3>
                        <p>Burgers at Hour</p>
                    </div>
                </div>
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
                    <li>
                        <a href="#">
                            <i class="flaticon-hamburger"></i>
                            <span>Burgers</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="flaticon-boiled"></i>
                            <span>Chickhen</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="flaticon-frappe"></i>
                            <span>Beverage</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="flaticon-tea-cup"></i>
                            <span>Coffee</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="flaticon-pizza-slice"></i>
                            <span>Pizzas</span>
                        </a>
                    </li>
                </ul>

                <div class="tab_content">
                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="menu-bar">
                                    <div class="menu-list-content">
                                        <h3>
                                            London Dry Ginger Kai
                                            <b>....................</b>
                                            <span>$30</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Magninil's Apple Juice
                                            <b>....................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            6 Piece Sostikno Sticks
                                            <b>....................</b>
                                            <span>$45</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Dilso Chicken Sandwich
                                            <b>....................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="menu-bar">
                                    <div class="menu-list-content">
                                        <h3>
                                            Ocean Spray Swits Juice
                                            <b>................</b>
                                            <span>$60</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Smoked Brisket Sandwich
                                            <b>..............</b>
                                            <span>$45</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Japanies Dilicious Burger
                                            <b>..............</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Fotboy Combo Packs
                                            <b>.......................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="menu-bar">
                                    <div class="menu-list-content">
                                        <h3>
                                            London Dry Ginger Kai
                                            <b>....................</b>
                                            <span>$30</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Magninil's Apple Juice
                                            <b>....................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            6 Piece Sostikno Sticks
                                            <b>....................</b>
                                            <span>$45</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Dilso Chicken Sandwich
                                            <b>....................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="menu-bar">
                                    <div class="menu-list-content">
                                        <h3>
                                            Ocean Spray Swits Juice
                                            <b>................</b>
                                            <span>$60</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Smoked Brisket Sandwich
                                            <b>..............</b>
                                            <span>$45</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Japanies Dilicious Burger
                                            <b>..............</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Fotboy Combo Packs
                                            <b>.......................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="menu-bar">
                                    <div class="menu-list-content">
                                        <h3>
                                            London Dry Ginger Kai
                                            <b>....................</b>
                                            <span>$30</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Magninil's Apple Juice
                                            <b>....................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            6 Piece Sostikno Sticks
                                            <b>....................</b>
                                            <span>$45</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Dilso Chicken Sandwich
                                            <b>....................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="menu-bar">
                                    <div class="menu-list-content">
                                        <h3>
                                            Ocean Spray Swits Juice
                                            <b>................</b>
                                            <span>$60</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Smoked Brisket Sandwich
                                            <b>..............</b>
                                            <span>$45</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Japanies Dilicious Burger
                                            <b>..............</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Fotboy Combo Packs
                                            <b>.......................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="menu-bar">
                                    <div class="menu-list-content">
                                        <h3>
                                            London Dry Ginger Kai
                                            <b>....................</b>
                                            <span>$30</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Magninil's Apple Juice
                                            <b>....................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            6 Piece Sostikno Sticks
                                            <b>....................</b>
                                            <span>$45</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Dilso Chicken Sandwich
                                            <b>....................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="menu-bar">
                                    <div class="menu-list-content">
                                        <h3>
                                            Ocean Spray Swits Juice
                                            <b>................</b>
                                            <span>$60</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Smoked Brisket Sandwich
                                            <b>..............</b>
                                            <span>$45</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Japanies Dilicious Burger
                                            <b>..............</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Fotboy Combo Packs
                                            <b>.......................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="menu-bar">
                                    <div class="menu-list-content">
                                        <h3>
                                            London Dry Ginger Kai
                                            <b>....................</b>
                                            <span>$30</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Magninil's Apple Juice
                                            <b>....................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            6 Piece Sostikno Sticks
                                            <b>....................</b>
                                            <span>$45</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Dilso Chicken Sandwich
                                            <b>....................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="menu-bar">
                                    <div class="menu-list-content">
                                        <h3>
                                            Ocean Spray Swits Juice
                                            <b>................</b>
                                            <span>$60</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Smoked Brisket Sandwich
                                            <b>..............</b>
                                            <span>$45</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Japanies Dilicious Burger
                                            <b>..............</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>

                                    <div class="menu-list-content">
                                        <h3>
                                            Fotboy Combo Packs
                                            <b>.......................</b>
                                            <span>$12</span>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing  ipsum suspendisse ultrices gravida.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <section class="gallery-area pb-100">
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

        <div class="gallery-shape">
            <div class="shape1">
                <img src="{{ asset('front/img/image-icon/3.png') }}" alt="image">
            </div>
            <div class="shape2">
                <img src="{{ asset('front/img/image-icon/4.png') }}" alt="image">
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
                            <a href="#" class="default-btn">
                                Order Now
                                <span></span>
                                <i class="flaticon-play-button"></i>
                            </a>

                            <a href="#" class="default-btn-two">
                                Earn Coin
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
                <div class="col-lg-6">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <div class="testimonial-item">
                            <div class="info">
                                <h3>David McLean</h3>
                                <span>CEO, Foodplanet</span>
                            </div>
                            <p>I chose Handout because of their value And incredible superior customer Service they really awesome Food with quality service</p>
                        </div>

                        <div class="testimonial-item">
                            <div class="info">
                                <h3>David McLean</h3>
                                <span>CEO, Foodplanet</span>
                            </div>
                            <p>I chose Handout because of their value And incredible superior customer Service they really awesome Food with quality service</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="testimonial-image">
                        <img src="{{ asset('front/img/feedback/image.png') }}" alt="image">
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

    <section class="overview-area pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="overview-item">
                        <img src="{{ asset('front/img/overview/image1.jpg') }}" alt="image">

                        <div class="content">
                            <strong>Pangolin Burger</strong>
                            <h3>
                                <a href="#">Festive Special Burger</a>
                            </h3>
                            <a href="#" class="default-btn">
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
                                <a href="#">Burger King Special</a>
                            </h3>
                            <a href="#" class="default-btn">
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
                                <a href="#">Festive Burger</a>
                            </h3>
                            <a href="#" class="default-btn">
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
                                <a href="#">Jurik Burger</a>
                            </h3>
                            <a href="#" class="default-btn">
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
                                <a href="#">Burger Vulso Special</a>
                            </h3>
                            <a href="#" class="default-btn">
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

    <section class="blog-area pb-70">
        <div class="container">
            <div class="section-title">
                <span>News</span>
                <h2>Read Burger News</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="image">
                            <a href="blog-details.html">
                                <img src="{{ asset('front/img/blog/1.jpg') }}" alt="image">
                            </a>

                            <ul class="post-meta d-flex justify-content-between align-items-center">
                                <li>
                                    <div class="post-author d-flex align-items-center">
                                        <img src="{{ asset('front/img/user/user1.jpg') }}" class="rounded-circle" alt="image">
                                        <span>Adam Smith</span>
                                    </div>
                                </li>
                                <li>
                                    <i class='flaticon-calendar'></i> 2020-23-06
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="blog-details.html">
                                    Burgers Of Melbourne Is Helping
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscingum suspendisse ultrices gravida.</p>
                            <a href="blog-details.html">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="image">
                            <a href="blog-details.html">
                                <img src="{{ asset('front/img/blog/2.jpg') }}" alt="image">
                            </a>

                            <ul class="post-meta d-flex justify-content-between align-items-center">
                                <li>
                                    <div class="post-author d-flex align-items-center">
                                        <img src="{{ asset('front/img/user/user2.jpg') }}" class="rounded-circle" alt="image">
                                        <span>Julfikar Don</span>
                                    </div>
                                </li>
                                <li>
                                    <i class='flaticon-calendar'></i> 2020-23-06
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="blog-details.html">
                                    Savoir Faire Is Everywhere
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscingum suspendisse ultrices gravida.</p>
                            <a href="blog-details.html">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="image">
                            <a href="#">
                                <img src="{{ asset('front/img/blog/3.jpg') }}" alt="image">
                            </a>

                            <ul class="post-meta d-flex justify-content-between align-items-center">
                                <li>
                                    <div class="post-author d-flex align-items-center">
                                        <img src="{{ asset('front/img/user/user3.jpg') }}" class="rounded-circle" alt="image">
                                        <span>Adam Smith</span>
                                    </div>
                                </li>
                                <li>
                                    <i class='flaticon-calendar'></i> 2020-12-6
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="blog-details.html">
                                    Brie Burger served with curly
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscingum suspendisse ultrices gravida.</p>
                            <a href="blog-details.html">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing eltsed do eiusmod tempor incididunt ut labore et dolore</p>
                            <div class="book-table-btn">
                                <a href="tel:+123775984753">
                                    +123 775 (984) 753
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
                            <li>Sunday<span>Closed</span></li>
                            <li>Monday<span>8.00 - 20.00</span></li>
                            <li>Tuesday<span>10:00-5.00</span></li>
                            <li>Wednesday<span>12:00-9:00</span></li>
                            <li>Friday<span>3:00-1:00</span></li>
                            <li>Saturday<span>9:00-12:00</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Address</h3>
                        <ul class="contact-info">
                            <li>
                                <i class="flaticon-phone-ringing"></i>
                                <a href="tel:4498886660000">+449 888 666 0000</a>
                            </li>
                            <li>
                                <i class="flaticon-chat"></i>
                                <a href="mailto:hello@handout.com">hello@handout.com</a>
                            </li>
                            <li>
                                <i class="flaticon-aim"></i>
                                855 Road, Brooklyn Street <br> New York 600
                            </li>
                        </ul>

                        <ul class="social">
                            <li class="facebook">
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li class="instagram">
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li class="pinterest">
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li class="youtube">
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3015.5025244860035!2d-73.89913308434032!3d40.904726233738984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f253c171734f%3A0xc8a19bda0b5e9a9d!2sBronx%20Burger%20House!5e0!3m2!1sen!2sbd!4v1594031943935!5m2!1sen!2sbd"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection
