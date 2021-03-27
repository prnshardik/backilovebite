@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Shop
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Shop List</h2>
                        <ul>
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li><i class="flaticon-tea-cup"></i></li>
                            <li>Shop List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title-shape">
            <img src="{{ asset('front/img/page-title/down-shape.png') }}" alt="image">
        </div>
    </div>
    <section class="shop-area pt-100 pb-100">
        <div class="container">
            <div class="woocommerce-topbar">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <div class="woocommerce-result-count">
                            <p>Showing 1-8 of 14 results</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6">
                        <div class="woocommerce-topbar-ordering">
                            <select>
                                <option value="1">Default sorting</option>
                                <option value="2">Toasty Buns Burgers</option>
                                <option value="0">Burger Ferguson</option>
                                <option value="3">We Know Burgers</option>
                                <option value="4">The Burger House</option>
                                <option value="5">Beefcakes Burgers</option>
                                <option value="6">Bullseye Burgers</option>
                                <option value="6">Burger Boulevard</option>
                                <option value="6">Rockin' Burgers</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-image">
                            <a href="{{ route('front.product-detail') }}">
                                <img src="{{ asset('front/img/shop/image1.jpg') }}" alt="image">
                            </a>
                            <a href="{{ route('front.cart') }}" class="add-to-cart-btn">
                                Add To Cart 
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="product-content">
                            <h3>
                                <a href="{{ route('front.product-detail') }}">
                                    Burger Bistro
                                </a>
                            </h3>
                            <div class="price">
                                <span class="new">$45.50</span>
                                <span class="old">$60.50</span>
                            </div>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-image">
                            <a href="{{ route('front.product-detail') }}">
                                <img src="{{ asset('front/img/shop/image2.jpg') }}" alt="image">
                            </a>
                            <a href="{{ route('front.cart') }}" class="add-to-cart-btn">
                                Add To Cart 
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="product-content">
                            <h3>
                                <a href="{{ route('front.product-detail') }}">
                                    Burger Bros
                                </a>
                            </h3>
                            <div class="price">
                                <span class="new">$95.50</span>
                                <span class="old">$160.50</span>
                            </div>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-image">
                            <a href="{{ route('front.product-detail') }}">
                                <img src="{{ asset('front/img/shop/image3.jpg') }}" alt="image">
                            </a>
                            <a href="{{ route('front.cart') }}" class="add-to-cart-btn">
                                Add To Cart 
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="product-content">
                            <h3>
                                <a href="{{ route('front.product-detail') }}">
                                    Rockin' Burgers
                                </a>
                            </h3>
                            <div class="price">
                                <span class="new">$65.50</span>
                                <span class="old">$80.50</span>
                            </div>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-image">
                            <a href="{{ route('front.product-detail') }}">
                                <img src="{{ asset('front/img/shop/image4.jpg') }}" alt="image">
                            </a>
                            <a href="{{ route('front.cart') }}" class="add-to-cart-btn">
                                Add To Cart 
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="product-content">
                            <h3>
                                <a href="{{ route('front.product-detail') }}">
                                    Bruce's Burgers
                                </a>
                            </h3>
                            <div class="price">
                                <span class="new">$235.50</span>
                                <span class="old">$260.50</span>
                            </div>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-image">
                            <a href="{{ route('front.product-detail') }}">
                                <img src="{{ asset('front/img/shop/image5.jpg') }}" alt="image">
                            </a>
                            <a href="{{ route('front.cart') }}" class="add-to-cart-btn">
                                Add To Cart 
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="product-content">
                            <h3>
                                <a href="{{ route('front.product-detail') }}">
                                    Varsity Pizza
                                </a>
                            </h3>
                            <div class="price">
                                <span class="new">$125.50</span>
                                <span class="old">$160.50</span>
                            </div>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-image">
                            <a href="{{ route('front.product-detail') }}">
                                <img src="{{ asset('front/img/shop/image6.jpg') }}" alt="image">
                            </a>
                            <a href="{{ route('front.cart') }}" class="add-to-cart-btn">
                                Add To Cart 
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="product-content">
                            <h3>
                                <a href="{{ route('front.product-detail') }}">
                                    Twisted Toppings
                                </a>
                            </h3>
                            <div class="price">
                                <span class="new">$145.50</span>
                                <span class="old">$160.50</span>
                            </div>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-image">
                            <a href="{{ route('front.product-detail') }}">
                                <img src="{{ asset('front/img/shop/image7.jpg') }}" alt="image">
                            </a>
                            <a href="{{ route('front.cart') }}" class="add-to-cart-btn">
                                Add To Cart 
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="product-content">
                            <h3>
                                <a href="{{ route('front.product-detail') }}">
                                    Flyer's Pizza
                                </a>
                            </h3>
                            <div class="price">
                                <span class="new">$128.50</span>
                                <span class="old">$165.50</span>
                            </div>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-image">
                            <a href="{{ route('front.product-detail') }}">
                                <img src="{{ asset('front/img/shop/image8.jpg') }}" alt="image">
                            </a>
                            <a href="{{ route('front.cart') }}" class="add-to-cart-btn">
                                Add To Cart 
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="product-content">
                            <h3>
                                <a href="{{ route('front.product-detail') }}">
                                    Pizza Express
                                </a>
                            </h3>
                            <div class="price">
                                <span class="new">$146.50</span>
                                <span class="old">$162.50</span>
                            </div>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        <a href="#" class="prev page-numbers">
                            <i class="flaticon-left-arrow-1"></i>
                        </a>
                        <a href="#" class="page-numbers">1</a>
                        <span class="page-numbers current" aria-current="page">2</span>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="next page-numbers">
                            <i class="flaticon-right-arrow-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
