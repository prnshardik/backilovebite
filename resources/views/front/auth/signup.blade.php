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

                        <div class="form-title"><h6>Sign Up</h6></div>
                        <div class="form-group pos_rel">
                            <input type="text" name="firstname" id="firstname" class="form-control lgn_input" placeholder="Enter firstname" />
                            <i class="uil uil-user-circle lgn_icon"></i>
                        </div>
                        <div class="form-group pos_rel">
                            <input type="text" name="lastname" id="lastname" class="form-control lgn_input" placeholder="Enter lastname" />
                            <i class="uil uil-user-circle lgn_icon"></i>
                        </div>
                        <div class="form-group pos_rel">
                            <input type="email" name="email" id="email" class="form-control lgn_input" placeholder="Enter email address" />
                            <i class="uil uil-envelope lgn_icon"></i>
                        </div>
                        <div class="form-group pos_rel">
                            <input type="text" name="phone" id="phone" class="form-control lgn_input" placeholder="Enter phone number" />
                            <i class="uil uil-mobile-android-alt lgn_icon"></i>
                        </div>
                        <div class="form-group pos_rel">
                            <input type="password" name="password" id="password" class="form-control lgn_input" placeholder="Enter password" />
                            <i class="uil uil-padlock lgn_icon"></i>
                        </div>
                        <button class="login-btn hover-btn" type="submit">Sign Up Now</button>
                    </form>
                </div>
                <div class="signup-link">
                    <p>I have an account? - <a href="{{ route('front.login') }}">Sign In Now</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
