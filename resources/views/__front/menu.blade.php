@extends('front.layout.app')

@section('title')
    Menu
@endsection

@section('meta')
@endsection

@section('styles')
@endsection

@section('content')
    <div class="all-product-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-top-dt">
                        <div class="product-left-title">
                            <h2>Vegetables &amp; Fruits</h2>
                        </div>
                        <button class="filter-btn ">Filters</button>
                        <div class="product-sort">
                            <div class="ui selection dropdown vchrt-dropdown" tabindex="0">
                                <input name="gender" type="hidden" value="default">
                                <i class="dropdown icon d-icon" tabindex="0">
                                    <div class="menu" tabindex="-1"></div>
                                </i>
                                <div class="text">Popularity</div>
                                <div class="menu" tabindex="-1">
                                    <div class="item" data-value="0">Popularity</div>
                                    <div class="item" data-value="1">Price - Low to High</div>
                                    <div class="item" data-value="2">Price - High to Low</div>
                                    <div class="item" data-value="3">Alphabetical</div>
                                    <div class="item" data-value="4">Saving - High to Low</div>
                                    <div class="item" data-value="5">Saving - Low to High</div>
                                    <div class="item" data-value="6">% Off - High to Low</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-list-view">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item mb-30">
                            <a href="single_product_view.html" class="product-img">
                                <img src="{{ asset('front/images/product/img-1.jpg') }}" alt="">
                            </a>
                            <div class="product-text-dt">
                                <p>Available<span>(In Stock)</span></p>
                                <h4>Product Title Here</h4>
                                <div class="product-price">$12</div>
                                <div class="qty-cart">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus minus-btn">
                                        <input type="number" step="1" name="quantity" value="1"
                                            class="input-text qty text">
                                        <input type="button" value="+" class="plus plus-btn">
                                    </div>
                                    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item mb-30">
                            <a href="single_product_view.html" class="product-img">
                                <img src="{{ asset('front/images/product/img-2.jpg') }}" alt="">
                            </a>
                            <div class="product-text-dt">
                                <p>Available<span>(In Stock)</span></p>
                                <h4>Product Title Here</h4>
                                <div class="product-price">$10</div>
                                <div class="qty-cart">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus minus-btn">
                                        <input type="number" step="1" name="quantity" value="1"
                                            class="input-text qty text">
                                        <input type="button" value="+" class="plus plus-btn">
                                    </div>
                                    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item mb-30">
                            <a href="single_product_view.html" class="product-img">
                                <img src="{{ asset('front/images/product/img-3.jpg') }}" alt="">
                            </a>
                            <div class="product-text-dt">
                                <p>Available<span>(In Stock)</span></p>
                                <h4>Product Title Here</h4>
                                <div class="product-price">$5</div>
                                <div class="qty-cart">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus minus-btn">
                                        <input type="number" step="1" name="quantity" value="1"
                                            class="input-text qty text">
                                        <input type="button" value="+" class="plus plus-btn">
                                    </div>
                                    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item mb-30">
                            <a href="single_product_view.html" class="product-img">
                                <img src="{{ asset('front/images/product/img-4.jpg') }}" alt="">
                            </a>
                            <div class="product-text-dt">
                                <p>Available<span>(In Stock)</span></p>
                                <h4>Product Title Here</h4>
                                <div class="product-price">$15</div>
                                <div class="qty-cart">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus minus-btn">
                                        <input type="number" step="1" name="quantity" value="1"
                                            class="input-text qty text">
                                        <input type="button" value="+" class="plus plus-btn">
                                    </div>
                                    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item mb-30">
                            <a href="single_product_view.html" class="product-img">
                                <img src="{{ asset('front/images/product/img-5.jpg') }}" alt="">
                            </a>
                            <div class="product-text-dt">
                                <p>Available<span>(In Stock)</span></p>
                                <h4>Product Title Here</h4>
                                <div class="product-price">$9</div>
                                <div class="qty-cart">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus minus-btn">
                                        <input type="number" step="1" name="quantity" value="1"
                                            class="input-text qty text">
                                        <input type="button" value="+" class="plus plus-btn">
                                    </div>
                                    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item mb-30">
                            <a href="single_product_view.html" class="product-img">
                                <img src="{{ asset('front/images/product/img-6.jpg') }}" alt="">
                            </a>
                            <div class="product-text-dt">
                                <p>Available<span>(In Stock)</span></p>
                                <h4>Product Title Here</h4>
                                <div class="product-price">$7</div>
                                <div class="qty-cart">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus minus-btn">
                                        <input type="number" step="1" name="quantity" value="1"
                                            class="input-text qty text">
                                        <input type="button" value="+" class="plus plus-btn">
                                    </div>
                                    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item mb-30">
                            <a href="single_product_view.html" class="product-img">
                                <img src="{{ asset('front/images/product/img-7.jpg') }}" alt="">
                            </a>
                            <div class="product-text-dt">
                                <p>Available<span>(In Stock)</span></p>
                                <h4>Product Title Here</h4>
                                <div class="product-price">$6.95</div>
                                <div class="qty-cart">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus minus-btn">
                                        <input type="number" step="1" name="quantity" value="1"
                                            class="input-text qty text">
                                        <input type="button" value="+" class="plus plus-btn">
                                    </div>
                                    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item mb-30">
                            <a href="single_product_view.html" class="product-img">
                                <img src="{{ asset('front/images/product/img-11.jpg') }}" alt="">
                            </a>
                            <div class="product-text-dt">
                                <p>Available<span>(In Stock)</span></p>
                                <h4>Product Title Here</h4>
                                <div class="product-price">$12</div>
                                <div class="qty-cart">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus minus-btn">
                                        <input type="number" step="1" name="quantity" value="1"
                                            class="input-text qty text">
                                        <input type="button" value="+" class="plus plus-btn">
                                    </div>
                                    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item mb-30">
                            <a href="single_product_view.html" class="product-img">
                                <img src="{{ asset('front/images/product/img-12.jpg') }}" alt="">
                            </a>
                            <div class="product-text-dt">
                                <p>Available<span>(In Stock)</span></p>
                                <h4>Product Title Here</h4>
                                <div class="product-price">$10</div>
                                <div class="qty-cart">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus minus-btn">
                                        <input type="number" step="1" name="quantity" value="1"
                                            class="input-text qty text">
                                        <input type="button" value="+" class="plus plus-btn">
                                    </div>
                                    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item mb-30">
                            <a href="single_product_view.html" class="product-img">
                                <img src="{{ asset('front/images/product/img-13.jpg') }}" alt="">
                            </a>
                            <div class="product-text-dt">
                                <p>Available<span>(In Stock)</span></p>
                                <h4>Product Title Here</h4>
                                <div class="product-price">$5</div>
                                <div class="qty-cart">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus minus-btn">
                                        <input type="number" step="1" name="quantity" value="1"
                                            class="input-text qty text">
                                        <input type="button" value="+" class="plus plus-btn">
                                    </div>
                                    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item mb-30">
                            <a href="single_product_view.html" class="product-img">
                                <img src="{{ asset('front/images/product/img-14.jpg') }}" alt="">
                            </a>
                            <div class="product-text-dt">
                                <p>Available<span>(In Stock)</span></p>
                                <h4>Product Title Here</h4>
                                <div class="product-price">$6.95</div>
                                <div class="qty-cart">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus minus-btn">
                                        <input type="number" step="1" name="quantity" value="1"
                                            class="input-text qty text">
                                        <input type="button" value="+" class="plus plus-btn">
                                    </div>
                                    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item mb-30">
                            <a href="single_product_view.html" class="product-img">
                                <img src="{{ asset('front/images/product/img-8.jpg') }}" alt="">
                            </a>
                            <div class="product-text-dt">
                                <p>Available<span>(In Stock)</span></p>
                                <h4>Product Title Here</h4>
                                <div class="product-price">$8</div>
                                <div class="qty-cart">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus minus-btn">
                                        <input type="number" step="1" name="quantity" value="1"
                                            class="input-text qty text">
                                        <input type="button" value="+" class="plus plus-btn">
                                    </div>
                                    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
