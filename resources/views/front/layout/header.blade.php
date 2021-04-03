<header class="header clearfix">
    <div class="top-header-group">
        <div class="top-header">
            <div class="res_main_logo">
                <a href="{{ route('front.home') }}"><img src="{{ _logo() }}" alt="{{ _settings('SITE_TITLE') }} Logo" style="max-height: 60px; max-width: 60px;"></a>
            </div>
            <div class="main_logo" id="logo">
                <a href="{{ route('front.home') }}"><img src="{{ _logo() }}" alt="{{ _settings('SITE_TITLE') }} Logo" style="max-height: 60px; max-width: 60px;"></a>
                <a href="{{ route('front.home') }}"><img class="logo-inverse" src="{{ _logo() }}" alt="{{ _settings('SITE_TITLE') }} Logo" style="max-height: 60px; max-width: 60px;"></a>
            </div>
            <div class="header_right">
                <ul>
                    <li>
                        <a href="#" class="offer-link"><i class="uil uil-phone-alt"></i>{{ _settings('CONTACT_NUMBER') }}</a>
                    </li>
                    <li class="ui dropdown">
                        @if(!auth()->guest())
                            <a href="#" class="opts_account">
                                <img src="{{ asset('front/images/avatar/img-5.jpg') }}" alt="">
                                <span class="user__name">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</span>
                                <i class="uil uil-angle-down"></i>
                            </a>
                            <div class="menu dropdown_account">
                                <a href="dashboard_overview.html" class="item channel_item"><i class="uil uil-apps icon__1"></i>Dashbaord</a>
                                <a href="dashboard_my_orders.html" class="item channel_item"><i class="uil uil-box icon__1"></i>My Orders</a>
                                <a href="dashboard_my_wishlist.html" class="item channel_item"><i class="uil uil-heart icon__1"></i>My Wishlist</a>
                                <a href="dashboard_my_wallet.html" class="item channel_item"><i class="uil uil-usd-circle icon__1"></i>My Wallet</a>
                                <a href="dashboard_my_addresses.html" class="item channel_item"><i class="uil uil-location-point icon__1"></i>My Address</a>
                                <a href="offers.html" class="item channel_item"><i class="uil uil-gift icon__1"></i>Offers</a>
                                <a href="faq.html" class="item channel_item"><i class="uil uil-info-circle icon__1"></i>Faq</a>
                                <a href="sign_in.html" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Logout</a>
                            </div>
                        @else
                            <a href="{{ route('front.login') }}" class="offer-link">Login</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sub-header-group">
        <div class="sub-header">
            <nav class="navbar navbar-expand-lg navbar-light py-3">
                <div class="container-fluid">
                    <button class="navbar-toggler menu_toggle_btn" type="button"
                        data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
                    <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav main_nav align-self-stretch">
                            <li class="nav-item"><a href="{{ route('front.home') }}" class="nav-link active" title="Home">Home</a></li>
                            <li class="nav-item"><a href="shop_grid.html" class="nav-link new_item" title="New Products">New Products</a></li>
                            <li class="nav-item"><a href="shop_grid.html" class="nav-link" title="Featured Products">Featured Products</a></li>
                            <li class="nav-item">
                                <div class="ui icon top left dropdown nav__menu">
                                    <a class="nav-link" title="Pages">Pages <i class="uil uil-angle-down"></i></a>
                                    <div class="menu dropdown_page">
                                        <a href="dashboard_overview.html" class="item channel_item page__links">Account</a>
                                        <a href="about_us.html" class="item channel_item page__links">About Us</a>
                                        <a href="shop_grid.html" class="item channel_item page__links">Shop Grid</a>
                                        <a href="single_product_view.html" class="item channel_item page__links">Single Product View</a>
                                        <a href="checkout.html" class="item channel_item page__links">Checkout</a>
                                        <a href="request_product.html" class="item channel_item page__links">Product Request</a>
                                        <a href="order_placed.html" class="item channel_item page__links">Order Placed</a>
                                        <a href="bill.html" class="item channel_item page__links">Bill Slip</a>
                                        <a href="sign_in.html" class="item channel_item page__links">Sign In</a>
                                        <a href="sign_up.html" class="item channel_item page__links">Sign Up</a>
                                        <a href="forgot_password.html" class="item channel_item page__links">Forgot Password</a>
                                        <a href="contact_us.html" class="item channel_item page__links">Contact Us</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="ui icon top left dropdown nav__menu">
                                    <a class="nav-link" title="Blog">Blog <i class="uil uil-angle-down"></i></a>
                                    <div class="menu dropdown_page">
                                        <a href="our_blog.html" class="item channel_item page__links">Our Blog</a>
                                        <a href="blog_no_sidebar.html" class="item channel_item page__links">Our Blog Two No Sidebar</a>
                                        <a href="blog_left_sidebar.html" class="item channel_item page__links">Our Blog with Left Sidebar</a>
                                        <a href="blog_right_sidebar.html" class="item channel_item page__links">Our Blog with Right Sidebar</a>
                                        <a href="blog_detail_view.html" class="item channel_item page__links">Blog Detail View</a>
                                        <a href="blog_left_sidebar_single_view.html" class="item channel_item page__links">Blog Detail View with Sidebar</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="contact_us.html" class="nav-link" title="Contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="catey__icon">
                <a href="#" class="cate__btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i></a>
            </div>
            <div class="header_cart order-1">
                <a href="#" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart">
                    <i class="uil uil-shopping-cart-alt"></i>
                    <span>Cart</span><ins>2</ins>
                    <i class="uil uil-angle-down"></i>
                </a>
            </div>
            <div class="search__icon order-1">
                <a href="#" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model" title="Search"><i class="uil uil-search"></i></a>
            </div>
        </div>
    </div>
</header>
