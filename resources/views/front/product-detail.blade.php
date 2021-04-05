@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Product Detail
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Products Details</h2>
                        <ul>
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li><i class="flaticon-tea-cup"></i></li>
                            <li>Products Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title-shape">
            <img src="{{ asset('front/img/page-title/down-shape.png') }}" alt="image">
        </div>
    </div>
    <section class="product-details-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-image">
                        <img src="{{ asset('front/img/shop/details-image.jpg') }}" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-desc">
                        <h3>Burger Smokehouse</h3>
                        <div class="price">
                            <span class="new-price">$541.00</span>
                            <span class="old-price">$652.00</span>
                        </div>
                        <div class="product-review">
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="rating-count">3 reviews</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        <div class="product-add-to-cart">
                            <div class="input-counter">
                                <span class="minus-btn">
                                    <i class='bx bx-minus'></i>
                                </span>
                                <input type="text" min="1" value="1">
                                <span class="plus-btn">
                                    <i class='bx bx-plus'></i>
                                </span>
                            </div>
                            <button type="submit" class="default-btn">
                                Add to cart
                                <span></span>
                            </button>
                        </div>
                        <div class="buy-checkbox-btn">
                            <div class="item">
                                <input class="inp-cbx" id="cbx" type="checkbox">
                                <label class="cbx" for="cbx">
                                    <span>
                                        <svg width="12px" height="10px" viewbox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg>
                                    </span>
                                    <span>I agree with the terms and conditions</span>
                                </label>
                            </div>
                            <div class="item">
                                <a href="#" class="btn btn-light">Buy it now!</a>
                            </div>
                        </div>
                        <div class="custom-payment-options">
                            <span>Guaranteed safe checkout:</span>
                            <div class="payment-methods">
                                <a href="#">
                                    <img src="{{ asset('front/img/payment/1.svg') }}" alt="image">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('front/img/payment/2.svg') }}" alt="image">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('front/img/payment/3.svg') }}" alt="image">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('front/img/payment/4.svg') }}" alt="image">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('front/img/payment/5.svg') }}" alt="image">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('front/img/payment/6.svg') }}" alt="image">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('front/img/payment/7.svg') }}" alt="image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="tab products-details-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs">
                                    <li>
                                        <a href="#">
                                            <div class="dot"></div> 
                                            Description
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="dot"></div> 
                                            Additional information
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="dot"></div> 
                                            Reviews
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content">
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <p>DeSign Inspiration lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum.  Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nulla libero. Vivamus pharetra posuere sapien.</p>
                                        </div>
                                    </div>
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <ul class="additional-information">
                                                <li>
                                                    <span>Brand:</span> 
                                                    ThemeForest
                                                </li>
                                                <li>
                                                    <span>Color:</span> 
                                                    Brown
                                                </li>
                                                <li>
                                                    <span>Size:</span> 
                                                    Large, Medium
                                                </li>
                                                <li>
                                                    <span>Weight:</span> 
                                                    27 kg
                                                </li>
                                                <li>
                                                    <span>Dimensions:</span> 
                                                    22 x 123 cm
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <div class="product-review-form">
                                                <h3>Customer Reviews</h3>
                                                <div class="review-title">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <p>Based on 3 reviews</p>
                                                    <a href="#" class="default-btn">
                                                        Write a Review
                                                        <span></span>
                                                    </a>
                                                </div>
                                                <div class="review-comments">
                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <h3>Good</h3>
                                                        <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                        <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                    </div>
                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <h3>Good</h3>
                                                        <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                        <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                    </div>
                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <h3>Good</h3>
                                                        <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                        <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                    </div>
                                                </div>
                                                <div class="review-form">
                                                    <h3>Write a Review</h3>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <input type="text" id="review-title" name="review-title" placeholder="Enter your review a title" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <textarea name="review-body" id="review-body" cols="30" rows="7" placeholder="Write your comments here" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <button type="submit" class="default-btn">
                                                                    Submit Review
                                                                    <span></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
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
        <div class="related-products">
            <div class="container">
                <div class="products-title">
                    <span class="sub-title">Our Shop</span>
                    <h2>Related Products</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
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
                                    <a href="{{ route('front.product-detail') }}">Dungeon Burgers</a>
                                </h3>
                                <div class="price">
                                    <span class="new">$455.50</span>
                                    <span class="old">$460.50</span>
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
                    <div class="col-lg-4 col-md-6 col-sm-6">
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
                                    <a href="{{ route('front.product-detail') }}">Bugout Burgers</a>
                                </h3>
                                <div class="price">
                                    <span class="new">$541.50</span>
                                    <span class="old">$652.50</span>
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
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3">
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
                                    <a href="{{ route('front.product-detail') }}">Bullhorn Burgers</a>
                                </h3>
                                <div class="price">
                                    <span class="new">$140.50</span>
                                    <span class="old">$150.50</span>
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
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
