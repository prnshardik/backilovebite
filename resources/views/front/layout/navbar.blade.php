<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ route('front.home') }}">
                        <h1>{{ _site_title() }}</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('front.home') }}">
                    <h1>{{ _site_title() }}</h1>
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav"> 
                        <li class="nav-item">
                            <a href="{{ route('front.home') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('front.menu') }}" class="nav-link {{ Request::is('menu') ? 'active' : '' }} ">Menu</a>
                        </li>
                    </ul>

                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="cart.html">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>

                        <div class="option-item">
                            <a href="shop.html" class="default-btn">
                                Order Online
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>