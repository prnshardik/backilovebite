@extends('front.auth.app')

@section('meta')
@endsection

@section('title')
    Forgot Password
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
                    <form name="form" id="form" action="{{ route('front.password.forget') }}" method="post">
                        @csrf
                        @method('post')

                        <div class="form-title"><h6>Request a Password Reset</h6></div>
                        <div class="form-group pos_rel">
                            <input type="email" name="email" id="email" class="form-control lgn_input" placeholder="Enter email address" />
                            <i class="uil uil-envelope uil_position lgn_icon"></i>
                            <span class="kt-form__help text-danger ml-5 error email"></span>
                        </div>
                        <button class="login-btn hover-btn" type="submit">Request</button>
                    </form>
                </div>
                <div class="signup-link">
                    <p>Go Back - <a href="{{ route('front.login') }}">Sign In Now</a></p>
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
