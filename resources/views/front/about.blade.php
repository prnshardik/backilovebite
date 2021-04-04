@extends('front.layout.app')

@section('title')
    About
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
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="life-gambo">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="default-title left-text">
                        <h2>About Gambo</h2>
                        <p>Customers Deserve Better</p>
                        <img src="{{ asset('front/line.svg') }}" alt="">
                    </div>
                    <div class="about-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac sodales sapien. Sed
                            pellentesque, quam in ornare tincidunt, magna augue placerat nunc, ut facilisis nibh ipsum
                            non ipsum. Cras ac eros non neque viverra consequat sed at est. Fusce efficitur, lacus nec
                            dignissim tincidunt, diam sapien rhoncus neque, at tristique sapien nibh sed neque. Proin in
                            neque in purus luctus facilisis. Donec viverra ligula quis lorem viverra consequat. Aliquam
                            condimentum id enim volutpat rutrum. Donec semper iaculis convallis. Praesent quis elit eget
                            ligula facilisis mattis. Praesent sed euismod dui. Suspendisse imperdiet vel quam nec
                            venenatis. Suspendisse dictum blandit quam, vitae auctor enim gravida et. Sed id dictum
                            nibh. Proin egestas massa sit amet tincidunt aliquet.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('front/images/about.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-steps-group white-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="about-step">
                        <div class="about-step-img">
                            <img src="{{ asset('front/about/icon-1.svg') }}" alt="">
                        </div>
                        <h4>400+</h4>
                        <p>People have joined the Gambo team in the past six months</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="about-step">
                        <div class="about-step-img">
                            <img src="{{ asset('front/about/icon-2.svg') }}" alt="">
                        </div>
                        <h4>2x</h4>
                        <p>Rate of growth in our monthly user base</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="about-step">
                        <div class="about-step-img">
                            <img src="{{ asset('front/about/icon-3.svg') }}" alt="">
                        </div>
                        <h4>10 days</h4>
                        <p>Time taken to launch in 8 cities across India</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="about-step">
                        <div class="about-step-img">
                            <img src="{{ asset('front/about/icon-4.svg') }}" alt="">
                        </div>
                        <h4>95k</h4>
                        <p>App downloads on iOS and Android</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="how-order-gambo mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="default-title">
                        <h2>How Do I Order?</h2>
                        <p>How Do I order on Gambo</p>
                        <img src="{{ asset('front/line.svg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="how-order-steps">
                        <div class="how-order-icon">
                            <i class="uil uil-search"></i>
                        </div>
                        <h4>Browse gambo.com for products or use the search feature</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="how-order-steps">
                        <div class="how-order-icon">
                            <i class="uil uil-shopping-basket"></i>
                        </div>
                        <h4>Add item to your shopping Basket</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="how-order-steps">
                        <div class="how-order-icon">
                            <i class="uil uil-stopwatch"></i>
                        </div>
                        <h4>Choose a convenient delivery time from our 5 Slots* a day</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="how-order-steps">
                        <div class="how-order-icon">
                            <i class="uil uil-money-bill"></i>
                        </div>
                        <h4>Select suitable payment option(Cash, Master, Credit Card, Discover)</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="how-order-steps">
                        <div class="how-order-icon">
                            <i class="uil uil-truck"></i>
                        </div>
                        <h4>Your products will be home-delivered as per your order.</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="how-order-steps">
                        <div class="how-order-icon">
                            <i class="uil uil-smile"></i>
                        </div>
                        <h4>Happy Curstomers</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
