@extends('front.layout.app')

@section('title')
    Home
@endsection

@section('meta')
@endsection

@section('styles')
@endsection

@section('content')
    <div class="main-banner-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel offers-banner owl-theme">
                        <div class="item">
                            <div class="offer-item">
                                <div class="offer-item-img">
                                    <div class="gambo-overlay"></div>
                                    <img src="{{ asset('front/images/banners/offer-1.jpg') }}" alt="">
                                </div>
                                <div class="offer-text-dt">
                                    <div class="offer-top-text-banner">
                                        <div class="top-text-1">Buy More & Save More</div>
                                        <span>Fresh Vegetables</span>
                                    </div>
                                    <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="offer-item">
                                <div class="offer-item-img">
                                    <div class="gambo-overlay"></div>
                                    <img src="{{ asset('front/images/banners/offer-2.jpg') }}" alt="">
                                </div>
                                <div class="offer-text-dt">
                                    <div class="offer-top-text-banner">
                                        <div class="top-text-1">Buy More & Save More</div>
                                        <span>Fresh Fruits</span>
                                    </div>
                                    <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="offer-item">
                                <div class="offer-item-img">
                                    <div class="gambo-overlay"></div>
                                    <img src="{{ asset('front/images/banners/offer-3.jpg') }}" alt="">
                                </div>
                                <div class="offer-text-dt">
                                    <div class="offer-top-text-banner">
                                        <div class="top-text-1">Hot Deals on New Items</div>
                                        <span>Daily Essentials Eggs & Dairy</span>
                                    </div>
                                    <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="offer-item">
                                <div class="offer-item-img">
                                    <div class="gambo-overlay"></div>
                                    <img src="{{ asset('front/images/banners/offer-4.jpg') }}" alt="">
                                </div>
                                <div class="offer-text-dt">
                                    <div class="offer-top-text-banner">
                                        <div class="top-text-1">Buy More & Save More</div>
                                        <span>Beverages</span>
                                    </div>
                                    <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="offer-item">
                                <div class="offer-item-img">
                                    <div class="gambo-overlay"></div>
                                    <img src="{{ asset('front/images/banners/offer-5.jpg') }}" alt="">
                                </div>
                                <div class="offer-text-dt">
                                    <div class="offer-top-text-banner">
                                        <div class="top-text-1">Buy More & Save More</div>
                                        <span>Nuts & Snacks</span>
                                    </div>
                                    <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section145">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title-tt">
                        <div class="main-title-left">
                            <h2>Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel cate-slider owl-theme">
                        <div class="item">
                            <a href="#" class="category-item">
                                <div class="cate-img">
                                    <img src="{{ asset('front/images/category/icon-1.svg') }}" alt="">
                                </div>
                                <h4>Vegetables & Fruits</h4>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="category-item">
                                <div class="cate-img">
                                    <img src="{{ asset('front/images/category/icon-2.svg') }}" alt="">
                                </div>
                                <h4> Grocery & Staples </h4>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="category-item">
                                <div class="cate-img">
                                    <img src="{{ asset('front/images/category/icon-3.svg') }}" alt="">
                                </div>
                                <h4> Dairy & Eggs </h4>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="category-item">
                                <div class="cate-img">
                                    <img src="{{ asset('front/images/category/icon-4.svg') }}" alt="">
                                </div>
                                <h4> Beverages </h4>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="category-item">
                                <div class="cate-img">
                                    <img src="{{ asset('front/images/category/icon-5.svg') }}" alt="">
                                </div>
                                <h4> Snacks </h4>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="category-item">
                                <div class="cate-img">
                                    <img src="{{ asset('front/images/category/icon-6.svg') }}" alt="">
                                </div>
                                <h4> Home Care </h4>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="category-item">
                                <div class="cate-img">
                                    <img src="{{ asset('front/images/category/icon-7.svg') }}" alt="">
                                </div>
                                <h4> Noodles & Sauces </h4>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="category-item">
                                <div class="cate-img">
                                    <img src="{{ asset('front/images/category/icon-8.svg') }}" alt="">
                                </div>
                                <h4> Personal Care </h4>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="category-item">
                                <div class="cate-img">
                                    <img src="{{ asset('front/images/category/icon-9.svg') }}" alt="">
                                </div>
                                <h4> Pet Care </h4>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="category-item">
                                <div class="cate-img">
                                    <img src="{{ asset('front/images/category/icon-10.svg') }}" alt="">
                                </div>
                                <h4> Meat & Seafood </h4>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="category-item">
                                <div class="cate-img">
                                    <img src="{{ asset('front/images/category/icon-11.svg') }}" alt="">
                                </div>
                                <h4> Electronics </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section145">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title-tt">
                        <div class="main-title-left">
                            <h2>Products</h2>
                        </div>
                        <a href="{{ route('front.menu') }}" class="see-more-btn">See All</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel featured-slider owl-theme">
                        <div class="item">
                            <div class="product-item">
                                <a href="{{ route('front.product-detail') }}" class="product-img">
                                    <img src="{{ asset('front/images/product/img-10.jpg') }}" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">New</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$12 <span>$15</span></div>
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
                        <div class="item">
                            <div class="product-item">
                                <a href="{{ route('front.product-detail') }}" class="product-img">
                                    <img src="{{ asset('front/images/product/img-9.jpg') }}" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">New</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
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
                        <div class="item">
                            <div class="product-item">
                                <a href="{{ route('front.product-detail') }}" class="product-img">
                                    <img src="{{ asset('front/images/product/img-15.jpg') }}" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">5% off</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
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
                        <div class="item">
                            <div class="product-item">
                                <a href="{{ route('front.product-detail') }}" class="product-img">
                                    <img src="{{ asset('front/images/product/img-11.jpg') }}" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">New</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$15 <span>$16</span></div>
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
                        <div class="item">
                            <div class="product-item">
                                <a href="{{ route('front.product-detail') }}" class="product-img">
                                    <img src="{{ asset('front/images/product/img-14.jpg') }}" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">New</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
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
                        <div class="item">
                            <div class="product-item">
                                <a href="{{ route('front.product-detail') }}" class="product-img">
                                    <img src="{{ asset('front/images/product/img-2.jpg') }}" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">New</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
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
                        <div class="item">
                            <div class="product-item">
                                <a href="{{ route('front.product-detail') }}" class="product-img">
                                    <img src="{{ asset('front/images/product/img-5.jpg') }}" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">New</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
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
                        <div class="item">
                            <div class="product-item">
                                <a href="{{ route('front.product-detail') }}" class="product-img">
                                    <img src="{{ asset('front/images/product/img-6.jpg') }}" alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">New</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4>Product Title Here</h4>
                                    <div class="product-price">$8 <span>8.75</span></div>
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
    </div>

    <div class="life-gambo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="default-title">
                        <h2>Testimonials</h2>
                        <img src="{{ asset('front/images/line.svg') }}" alt="">
                    </div>
                    <div class="dd-content">
                        <div class="owl-carousel testimonial-slider owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-2000px, 0px, 0px); transition: all 0.25s ease 0s; width: 4000px;">
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-2.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Zoena Singh</h4>
                                                        <p>Senior Manager - Training, Corporate</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-3.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Rock William</h4>
                                                        <p>Senior Manager - Finance &amp; Accounts, Corporate</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-4.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Ridhima William</h4>
                                                        <p>Head Customer Support</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-1.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Joginder Singh</h4>
                                                        <p>Senior UX Designer, Product</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-2.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Zoena Singh</h4>
                                                        <p>Senior Manager - Training, Corporate</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-3.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Rock William</h4>
                                                        <p>Senior Manager - Finance &amp; Accounts, Corporate</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-4.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Ridhima William</h4>
                                                        <p>Head Customer Support</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned active" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-1.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Joginder Singh</h4>
                                                        <p>Senior UX Designer, Product</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-2.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Zoena Singh</h4>
                                                        <p>Senior Manager - Training, Corporate</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-3.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Rock William</h4>
                                                        <p>Senior Manager - Finance &amp; Accounts, Corporate</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev">
                                    <i class="uil uil-angle-left"></i>
                                </button>
                                <button type="button" role="presentation" class="owl-next">
                                    <i class="uil uil-angle-right"></i>
                                </button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
