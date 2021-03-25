@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Menu
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Menu</h2>
                        <ul>
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li><i class="flaticon-tea-cup"></i></li>
                            <li>Menu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title-shape">
            <img src="{{ asset('front/img/page-title/down-shape.png') }}" alt="image">
        </div>
    </div>
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
@endsection

@section('scripts')

@endsection
