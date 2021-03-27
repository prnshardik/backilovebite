@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Log-in
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Sign In</h2>
                        <ul>
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li><i class="flaticon-tea-cup"></i></li>
                            <li>Sign In</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title-shape">
            <img src="{{ asset('front/img/page-title/down-shape.png') }}" alt="image">
        </div>
    </div>
    <div class="sign-in-area ptb-100">
        <div class="container">
            <div class="sign-in-form">
                <div class="sign-in-title">
                    <h3>Welcome Back!</h3>
                    <p>Please Sign In to your account.</p>
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkme">
                                <label class="form-check-label" for="checkme">Keep me Log In</label>
                            </div>
                        </div>
                        <div class="col-lg-12 text-right">
                            <p class="forgot-password"><a href="{{ route('front.forgot-password') }}">Forgot Password?</a></p>
                        </div>
                        <div class="col-lg-12">
                            <div class="send-btn">
                                <button type="submit" class="default-btn">
                                    Sign In Now
                                    <span></span>
                                </button>
                            </div>
                            <br>
                            <span>Don't have account? <a href="{{ route('front.signup') }}">Signup!</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="footer-area pt-100">
        <div class="subscribe-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="subscribe-content">
                            <h2>
                                <i class="flaticon-email"></i>
                                Don't Miss Our Update
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form class="newsletter-form">
                            <input type="email" class="input-newsletter" placeholder="Your Email" name="EMAIL" required autocomplete="off">
                            <button type="submit">
                                Subscribe Now
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
