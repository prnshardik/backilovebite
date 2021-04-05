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
                            {{-- <p>Showing 1-8 of 14 results</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6">
                        <div class="woocommerce-topbar-ordering">
                            <select id="categories" name="categories">
                                @if(isset($categories) && $categories->isNotEmpty())
                                    @foreach($categories as $row)
                                        <option value="{{ $row->id }}" @if($selected == $row->id) selected @endif>{{ $row->name }}</option>
                                    @endforeach
                                @endif
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
