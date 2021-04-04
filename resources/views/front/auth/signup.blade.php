@extends('front.auth.app')

@section('meta')
@endsection

@section('title')
    Sign-Up
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
                    <form name="form" id="form" action="{{ route('front.register') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @method('post')

                        <div class="form-title"><h6>Sign Up</h6></div>
                        <div class="form-group pos_rel">
                            <input type="text" name="firstname" id="firstname" class="form-control lgn_input" placeholder="Enter firstname" />
                            <i class="uil uil-user-circle uil_position lgn_icon"></i>
                            <span class="kt-form__help text-danger ml-5 error firstname"></span>
                        </div>
                        <div class="form-group pos_rel">
                            <input type="text" name="lastname" id="lastname" class="form-control lgn_input" placeholder="Enter lastname" />
                            <i class="uil uil-user-circle uil_position lgn_icon"></i>
                            <span class="kt-form__help text-danger ml-5 error lastname"></span>
                        </div>
                        <div class="form-group pos_rel">
                            <input type="email" name="email" id="email" class="form-control lgn_input" placeholder="Enter email address" />
                            <i class="uil uil-envelope uil_position lgn_icon"></i>
                            <span class="kt-form__help text-danger ml-5 error email"></span>
                        </div>
                        <div class="form-group pos_rel">
                            <input type="text" name="phone" id="phone" class="form-control lgn_input" placeholder="Enter phone number" />
                            <i class="uil uil-mobile-android-alt uil_position lgn_icon"></i>
                            <span class="kt-form__help text-danger ml-5 error phone"></span>
                        </div>
                        <div class="form-group pos_rel">
                            <input type="password" name="password" id="password" class="form-control lgn_input" placeholder="Enter password" />
                            <i class="uil uil-padlock uil_position lgn_icon"></i>
                            <span class="kt-form__help text-danger ml-5 error password"></span>
                        </div>
                        <div class="form-group pos_rel">
                            <input type="checkbox" name="terms" id="terms" class="lgn_input" value="on">
                            <label for="terms">I have read and agree to the <a href="{{ route('front.terms') }}" target="_blank" class="text-warning"><b>Terms</b></a> and I have read and agree to the <a href="{{ route('front.privacy') }}" target="_blank" class="text-warning"><b>Privacy Policy</b></a>.</label><br>
                            <span class="kt-form__help text-danger ml-5 error terms"></span>
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
    <script>
        $(document).ready(function () {
            var form = $('#form');
            $('.kt-form__help').html('');
            form.submit(function(e) {
                $('.help-block').html('');
                $('.m-form__help').html('');
                $.ajax({
                    url : form.attr('action'),
                    type : form.attr('method'),
                    data : form.serialize(),
                    dataType: 'json',
                    async:false,
                    success : function(json){
                        return true;
                    },
                    error: function(json){
                        if(json.status === 422) {
                            e.preventDefault();
                            var errors_ = json.responseJSON;
                            $('.kt-form__help').html('');
                            $.each(errors_.errors, function (key, value) {
                                $('.'+key).html(value);
                            });
                        }
                    }
                });
            });
        });
    </script>
@endsection
