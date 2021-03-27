@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Cart
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Cart</h2>
                        <ul>
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li><i class="flaticon-tea-cup"></i></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title-shape">
            <img src="{{ asset('front/img/page-title/down-shape.') }}png" alt="image">
        </div>
    </div>
    <section class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form>
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="{{ asset('front/img/shop/image1.jpg') }}" alt="item">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#">Burger Bistro</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="unit-amount">$455.00</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class='bx bx-minus'></i>
                                                </span>
                                                <input type="text" value="1">
                                                <span class="plus-btn">
                                                    <i class='bx bx-plus'></i>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$455.00</span>
                                            <a href="#" class="remove">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="{{ asset('front/img/shop/image2.jpg') }}" alt="item">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#">Hot Cross Buns</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="unit-amount">$541.50</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class='bx bx-minus'></i>
                                                </span>
                                                <input type="text" value="1">
                                                <span class="plus-btn">
                                                    <i class='bx bx-plus'></i>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$541.50</span>
                                            <a href="#" class="remove">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="{{ asset('front/img/shop/image3.jpg') }}" alt="item">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#">We Love Beef</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="unit-amount">$140.50</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class='bx bx-minus'></i>
                                                </span>
                                                <input type="text" value="1">
                                                <span class="plus-btn">
                                                    <i class='bx bx-plus'></i>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$140.50</span>
                                            <a href="#" class="remove">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="{{ asset('front/img/shop/image4.jpg') }}" alt="item">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#">Dungeon Burgers</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="unit-amount">$547.00</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class='bx bx-minus'></i>
                                                </span>
                                                <input type="text" value="1">
                                                <span class="plus-btn">
                                                    <i class='bx bx-plus'></i>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$547.00</span>
                                            <a href="#" class="remove">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-totals">
                            <h3>Cart Totals</h3>
                            <ul>
                                <li>Subtotal 
                                    <span>$1683.50</span>
                                </li>
                                <li>Shipping 
                                    <span>$30.00</span>
                                </li>
                                <li>Total 
                                    <span><b>$1713.50</b></span>
                                </li>
                            </ul>
                            <a href="#" class="default-btn">
                                Proceed to Checkout
                                <span></span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
