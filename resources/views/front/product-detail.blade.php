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
                        <img src="{{ $product->image }}" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-desc">
                        <h3>{{ $product->name }}</h3>
                        <div class="price">
                            <span class="new-price">&#8377; {{ sprintf("%.2f",$product->price) }}</span>
                        </div>
                        
                        <p>{{ $product->description }}</p>
                        <div class="product-add-to-cart">
                            <div class="col-md-12">
                                <div class="input-counter">
                                    <span class="minus-btn">
                                        <i class='bx bx-minus'></i>
                                    </span>
                                    <input type="text" min="1" value="1">
                                    <span class="plus-btn">
                                        <i class='bx bx-plus'></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12">
                            </div>
                            <div class="col-md-12">
                            </div>
                            <br>
                            <div class="col-md-12">
                                <button type="submit" class="default-btn">
                                    Add to cart
                                    <span></span>
                                </button>
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
                    @if(isset($releted_product) && $releted_product->isNotEmpty())
                        @foreach($releted_product AS $row)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="{{ route('front.product-detail') }}">
                                            <img src="{{ asset('back/uploads/products/'.$row->image) }}" alt="image">
                                        </a>
                                        <a href="{{ route('front.cart') }}" class="add-to-cart-btn">
                                            Add To Cart 
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3>
                                            <a href="{{ route('front.product-detail') }}">{{ $row->name }}</a>
                                        </h3>
                                        <div class="price">
                                            <span class="new">&#8377; {{ sprintf("%.2f",$row->price) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
