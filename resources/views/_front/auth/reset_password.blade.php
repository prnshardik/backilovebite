@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Reset Password
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Reset Password</h2>
                        <ul>
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li><i class="flaticon-tea-cup"></i></li>
                            <li>Reset Password</li>
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
                    <h3>Reset Password!</h3>
                </div>
                <form name="form" id="form" action="{{ route('front.recover.password') }}" method="post" >
                    @csrf
                    @method('post')
                    <input type="hidden" name="token" value="{{ $string }}">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ $email }}" readonly="readonly" />
                                <span class="kt-form__help text-danger error email"></span>
                                @error('email')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                                <span class="kt-form__help text-danger error password"></span>
                                @error('password')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
                                <span class="kt-form__help text-danger error confirm_password"></span>
                                @error('confirm_password')
                                    <div class="invalid-feedback" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-check">
                                {{-- <input type="checkbox" class="form-check-input" id="checkme">
                                <label class="form-check-label" for="checkme">Keep me Log In</label> --}}
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="send-btn">
                                <button type="submit" class="default-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('back/vendors/jquery-validation/dist/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#form").validate({
                errorElement: "div",
                errorClass: 'invalid-feedback',
                errorPlacement: function (error, element) {
                    error.insertAfter(element);
                },
                ignore: "",
                rules: {
                    email: {
                        required: true,
                        email: true,
                        normalizer: function(value) {
                            this.value = $.trim(value);
                            return this.value;
                        }
                    },
                    password: {
                        required: true,
                        minlength : 7
                    },
                    confirm_password: {
                        required: true,
                        minlength : 7,
                        equalTo : "#password"
                    }
                },
                messages: {
                    email: {
                        required: 'please enter email',
                        email: 'please enter valid email'
                    },
                    password: {
                        required: 'Please enter new password.',
                        minlength: 'Password length should be 7 character'
                    },
                    confirm_password: {
                        required: 'Please enter confirm password.',
                        minlength: 'Password length should be 7 character',
                        equalTo: "confirm password must be same as new password"
                    }
                },
                invalidHandler: function (event, validator) { //display error alert on form submit
                    // debugger;
                    //successHandler1.hide();
                    //errorHandler1.show();
                },
                highlight: function (element) {
                    // debugger;
                    $(element).closest('.help-block').removeClass('valid');
                    // display OK icon
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                    // add the Bootstrap error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    // debugger;
                    $(element).closest('.form-group').removeClass('has-error');
                    // set error class to the control group
                },

                success: function (label, element) {
                    // debugger;
                    label.addClass('help-block valid');
                    // mark the current input as valid and display OK icon
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
                }
                // submitHandler: function (frmadd) {
                //     // debugger;
                //     successHandler1.show();
                //     errorHandler1.hide();
                // }
            });
        });
    </script>
@endsection
