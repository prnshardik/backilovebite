@extends('front.auth.app')

@section('meta')
@endsection

@section('title')
    Log-in
@endsection

@section('styles')
@endsection

@section('content')
    <div class="sign-form">
        <div class="sign-inner">
            <div class="sign-logo" id="logo">
                <a href="{{ route('front.home') }}"><img src="{{ _logo() }}" alt="{{ _settings('SITE_TITLE') }} Logo" style="max-height: 60px; max-width: 60px;"></a>
                <a href="{{ route('front.home') }}"><img class="logo-inverse" src="{{ _logo() }}" alt="{{ _settings('SITE_TITLE') }} Logo" style="max-height: 60px; max-width: 60px;"></a>
            </div>
            <div class="form-dt">
                <div class="form-inpts checout-address-step">
                    <form name="form" id="form" action="" method="post">
                        @csrf
                        @method('post')
                    
                        <div class="form-title">
                            <h6>Sign In</h6>
                        </div>
                        <div class="form-group pos_rel">
                            <input type="text" name="email" id="email" class="form-control lgn_input" placeholder="Enter email address or phone number" />
                            <i class="uil uil-mobile-android-alt lgn_icon"></i>
                        </div>
                        <div class="form-group pos_rel">
                            <input type="password" name="password" id="password" class="form-control lgn_input" placeholder="Enter password" />
                            <i class="uil uil-padlock lgn_icon"></i>
                        </div>
                        <button class="login-btn hover-btn" type="submit">Sign In Now</button>
                    </form>
                </div>
                <div class="password-forgor">
                    <a href="{{ route('front.forget.password') }}">Forgot Password?</a>
                </div>
                <div class="signup-link">
                    <p>Don't have an account? - <a href="{{ route('front.signup') }}">Sign Up Now</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
