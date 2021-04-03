@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Sign-up
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Sign Up</h2>
                        <ul>
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li><i class="flaticon-tea-cup"></i></li>
                            <li>Sign Up</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title-shape">
            <img src="{{ asset('front/img/page-title/down-shape.png') }}" alt="image">
        </div>
    </div>
    <div class="signup-area ptb-100">
        <div class="container">
            <div class="signup-form">
                <h3>Create your Account</h3>
                <form name="form" action="{{ route('front.register') }}" id="form" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname">
                                <span class="kt-form__help text-danger error firstname"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname">
                                <span class="kt-form__help text-danger error lastname"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                                <span class="kt-form__help text-danger error phone"></span>
                            </div>
                        </div>
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
                                <label class="form-check-label" for="checkme">Keep Me Sign Up</label> --}}
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-check">
                                <input type="checkbox" name="terms" id="terms" class="form-check-input" value="on">
                                <label for="terms">I have read and agree to the <a href="{{ route('front.terms') }}" target="_blank" class="text-warning">"Terms"</a> and I have read and agree to the <a href="{{ route('front.privacy') }}" target="_blank" class="text-warning">"Privacy Policy"</a>.</label><br>
                                <span class="kt-form__help text-danger error terms"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="send-btn">
                                <button type="submit" class="default-btn">Sign Up Now<span></span></button>
                            </div>
                            <br>
                            <span>Already a registered user? <a href="{{ route('front.login') }}">Signin!</a></span>
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
