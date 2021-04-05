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
                                <a href="dashboard_my_addresses.html" class="item channel_item"><i class="uil uil-location-point icon__1"></i>My Address</a>
                                <a href="{{ route('front.logout') }}" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Logout</a>
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
                    <button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
                    <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                        <ul class="navbar-nav main_nav align-self-stretch">
                            <li class="nav-item"><a href="{{ route('front.home') }}" class="nav-link active" title="Home">Home</a></li>
                            <li class="nav-item">
                                <a href="{{ route('front.menu') }}" class="nav-link" title="Menu">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('front.about') }}" class="nav-link" title="About Us">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('front.contact') }}" class="nav-link" title="Contact">Contact Us</a>
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
