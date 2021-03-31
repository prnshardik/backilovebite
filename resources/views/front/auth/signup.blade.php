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
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-check">
                                {{-- <input type="checkbox" class="form-check-input" id="checkme">
                                <label class="form-check-label" for="checkme">Keep Me Sign Up</label> --}}
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="send-btn">
                                <button type="#" class="default-btn">
                                    Sign Up Now
                                    <span></span>
                                </button>
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
@endsection
