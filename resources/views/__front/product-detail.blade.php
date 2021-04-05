@extends('front.layout.app')

@section('title')
    Product Detail
@endsection

@section('meta')
@endsection

@section('styles')
@endsection

@section('content')
    <div class="default-dt">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="title129">
                        <h2>Product Detail</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="all-product-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-dt-view">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div id="sync1" class="owl-carousel owl-theme owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(-700px, 0px, 0px); transition: all 0s ease 0s; width: 2800px;">
                                            <div class="owl-item cloned" style="width: 350px;">
                                                <div class="item">
                                                    <img src="{{ asset('front/images/product/big-3.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 350px;">
                                                <div class="item">
                                                    <img src="{{ asset('front/images/product/big-4.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 350px;">
                                                <div class="item">
                                                    <img src="{{ asset('front/images/product/big-1.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 350px;">
                                                <div class="item">
                                                    <img src="{{ asset('front/images/product/big-2.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 350px;">
                                                <div class="item">
                                                    <img src="{{ asset('front/images/product/big-3.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 350px;">
                                                <div class="item">
                                                    <img src="{{ asset('front/images/product/big-4.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 350px;">
                                                <div class="item">
                                                    <img src="{{ asset('front/images/product/big-1.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 350px;">
                                                <div class="item">
                                                    <img src="{{ asset('front/images/product/big-2.jpg') }}" alt="">
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
                                <div id="sync2" class="owl-carousel owl-theme owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 350px;">
                                            <div class="owl-item active current" style="width: 87.5px;">
                                                <div class="item">
                                                    <img src="{{ asset('front/images/product/big-1.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 87.5px;">
                                                <div class="item">
                                                    <img src="{{ asset('front/images/product/big-2.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 87.5px;">
                                                <div class="item">
                                                    <img src="{{ asset('front/images/product/big-3.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 87.5px;">
                                                <div class="item">
                                                    <img src="{{ asset('front/images/product/big-4.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav disabled">
                                        <button type="button" role="presentation" class="owl-prev disabled">
                                            <span aria-label="Previous">←</span>
                                        </button>
                                        <button type="button" role="presentation" class="owl-next disabled">
                                            <span aria-label="Next">→</span>
                                        </button>
                                    </div>
                                    <div class="owl-dots disabled">
                                        <button role="button" class="owl-dot active"><span></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="product-dt-right">
                                    <h2>Grape Fruit Turkey</h2>
                                    <div class="no-stock">
                                        <p class="pd-no">Product No.<span>12345</span></p>
                                        <p class="stock-qty">Available<span>(Instock)</span></p>
                                    </div>
                                    <p class="pp-descp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                        vulputate, purus at tempor blandit, nulla felis dictum eros, sed volutpat odio
                                        sapien id lectus. Cras mollis massa ac congue posuere. Fusce viverra mauris vel
                                        magna pretium aliquet. Nunc tincidunt, velit id tempus tristique, velit dolor
                                        hendrerit nibh, at scelerisque neque mauris sed ex.</p>
                                    <div class="product-group-dt">
                                        <ul>
                                            <li>
                                                <div class="main-price color-discount">MRP Price<span>$15</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="gty-wish-share">
                                            <li>
                                                <div class="qty-product">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" value="-" class="minus minus-btn">
                                                        <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                        <input type="button" value="+" class="plus plus-btn">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="ordr-crt-share">
                                            <li><button class="add-cart-btn hover-btn"><i class="uil uil-shopping-cart-alt"></i>Add to Cart</button></li>
                                            <li><button class="order-btn hover-btn">Order Now</button></li>
                                        </ul>
                                    </div>
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
                            <h2>Top Featured Products</h2>
                        </div>
                        <a href="{{ route('front.menu') }}" class="see-more-btn">See All</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel featured-slider owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2360px;">
                                <div class="owl-item active" style="width: 285px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="product-item">
                                            <a href="{{ route('front.product-detail') }}" class="product-img">
                                                <img src="{{ asset('front/images/product/img-1.jpg') }}" alt="">
                                                <div class="product-absolute-options">
                                                    <span class="offer-badge-1">6% off</span>
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
                                                    <span class="cart-icon"><i
                                                            class="uil uil-shopping-cart-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 285px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="product-item">
                                            <a href="{{ route('front.product-detail') }}" class="product-img">
                                                <img src="{{ asset('front/images/product/img-2.jpg') }}" alt="">
                                                <div class="product-absolute-options">
                                                    <span class="offer-badge-1">2% off</span>
                                                    <span class="like-icon" title="wishlist"></span>
                                                </div>
                                            </a>
                                            <div class="product-text-dt">
                                                <p>Available<span>(In Stock)</span></p>
                                                <h4>Product Title Here</h4>
                                                <div class="product-price">$10 <span>$13</span></div>
                                                <div class="qty-cart">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" value="-" class="minus minus-btn">
                                                        <input type="number" step="1" name="quantity" value="1"
                                                            class="input-text qty text">
                                                        <input type="button" value="+" class="plus plus-btn">
                                                    </div>
                                                    <span class="cart-icon"><i
                                                            class="uil uil-shopping-cart-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 285px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="product-item">
                                            <a href="{{ route('front.product-detail') }}" class="product-img">
                                                <img src="{{ asset('front/images/product/img-3.jpg') }}" alt="">
                                                <div class="product-absolute-options">
                                                    <span class="offer-badge-1">5% off</span>
                                                    <span class="like-icon" title="wishlist"></span>
                                                </div>
                                            </a>
                                            <div class="product-text-dt">
                                                <p>Available<span>(In Stock)</span></p>
                                                <h4>Product Title Here</h4>
                                                <div class="product-price">$5 <span>$8</span></div>
                                                <div class="qty-cart">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" value="-" class="minus minus-btn">
                                                        <input type="number" step="1" name="quantity" value="1"
                                                            class="input-text qty text">
                                                        <input type="button" value="+" class="plus plus-btn">
                                                    </div>
                                                    <span class="cart-icon"><i
                                                            class="uil uil-shopping-cart-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 285px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="product-item">
                                            <a href="{{ route('front.product-detail') }}" class="product-img">
                                                <img src="{{ asset('front/images/product/img-4.jpg') }}" alt="">
                                                <div class="product-absolute-options">
                                                    <span class="offer-badge-1">3% off</span>
                                                    <span class="like-icon" title="wishlist"></span>
                                                </div>
                                            </a>
                                            <div class="product-text-dt">
                                                <p>Available<span>(In Stock)</span></p>
                                                <h4>Product Title Here</h4>
                                                <div class="product-price">$15 <span>$20</span></div>
                                                <div class="qty-cart">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" value="-" class="minus minus-btn">
                                                        <input type="number" step="1" name="quantity" value="1"
                                                            class="input-text qty text">
                                                        <input type="button" value="+" class="plus plus-btn">
                                                    </div>
                                                    <span class="cart-icon"><i
                                                            class="uil uil-shopping-cart-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 285px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="product-item">
                                            <a href="{{ route('front.product-detail') }}" class="product-img">
                                                <img src="{{ asset('front/images/product/img-5.jpg') }}" alt="">
                                                <div class="product-absolute-options">
                                                    <span class="offer-badge-1">2% off</span>
                                                    <span class="like-icon" title="wishlist"></span>
                                                </div>
                                            </a>
                                            <div class="product-text-dt">
                                                <p>Available<span>(In Stock)</span></p>
                                                <h4>Product Title Here</h4>
                                                <div class="product-price">$9 <span>$10</span></div>
                                                <div class="qty-cart">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" value="-" class="minus minus-btn">
                                                        <input type="number" step="1" name="quantity" value="1"
                                                            class="input-text qty text">
                                                        <input type="button" value="+" class="plus plus-btn">
                                                    </div>
                                                    <span class="cart-icon"><i
                                                            class="uil uil-shopping-cart-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 285px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="product-item">
                                            <a href="{{ route('front.product-detail') }}" class="product-img">
                                                <img src="{{ asset('front/images/product/img-6.jpg') }}" alt="">
                                                <div class="product-absolute-options">
                                                    <span class="offer-badge-1">2% off</span>
                                                    <span class="like-icon" title="wishlist"></span>
                                                </div>
                                            </a>
                                            <div class="product-text-dt">
                                                <p>Available<span>(In Stock)</span></p>
                                                <h4>Product Title Here</h4>
                                                <div class="product-price">$7 <span>$8</span></div>
                                                <div class="qty-cart">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" value="-" class="minus minus-btn">
                                                        <input type="number" step="1" name="quantity" value="1"
                                                            class="input-text qty text">
                                                        <input type="button" value="+" class="plus plus-btn">
                                                    </div>
                                                    <span class="cart-icon"><i
                                                            class="uil uil-shopping-cart-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 285px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="product-item">
                                            <a href="{{ route('front.product-detail') }}" class="product-img">
                                                <img src="{{ asset('front/images/product/img-7.jpg') }}" alt="">
                                                <div class="product-absolute-options">
                                                    <span class="offer-badge-1">1% off</span>
                                                    <span class="like-icon" title="wishlist"></span>
                                                </div>
                                            </a>
                                            <div class="product-text-dt">
                                                <p>Available<span>(In Stock)</span></p>
                                                <h4>Product Title Here</h4>
                                                <div class="product-price">$6.95 <span>$7</span></div>
                                                <div class="qty-cart">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" value="-" class="minus minus-btn">
                                                        <input type="number" step="1" name="quantity" value="1"
                                                            class="input-text qty text">
                                                        <input type="button" value="+" class="plus plus-btn">
                                                    </div>
                                                    <span class="cart-icon"><i
                                                            class="uil uil-shopping-cart-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 285px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="product-item">
                                            <a href="{{ route('front.product-detail') }}" class="product-img">
                                                <img src="{{ asset('front/images/product/img-8.jpg') }}" alt="">
                                                <div class="product-absolute-options">
                                                    <span class="offer-badge-1">3% off</span>
                                                    <span class="like-icon" title="wishlist"></span>
                                                </div>
                                            </a>
                                            <div class="product-text-dt">
                                                <p>Available<span>(In Stock)</span></p>
                                                <h4>Product Title Here</h4>
                                                <div class="product-price">$8 <span>$10</span></div>
                                                <div class="qty-cart">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" value="-" class="minus minus-btn">
                                                        <input type="number" step="1" name="quantity" value="1"
                                                            class="input-text qty text">
                                                        <input type="button" value="+" class="plus plus-btn">
                                                    </div>
                                                    <span class="cart-icon"><i
                                                            class="uil uil-shopping-cart-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i
                                    class="uil uil-angle-left"></i></button><button type="button" role="presentation"
                                class="owl-next"><i class="uil uil-angle-right"></i></button></div>
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
