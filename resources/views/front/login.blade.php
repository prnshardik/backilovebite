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
                <form name="form" action="{{ route('front.signin') }}" id="form" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                <span class="kt-form__help text-danger error email"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                <span class="kt-form__help text-danger error password"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-check">
                                {{-- <input type="checkbox" class="form-check-input" id="checkme">
                                <label class="form-check-label" for="checkme">Keep me Log In</label> --}}
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
