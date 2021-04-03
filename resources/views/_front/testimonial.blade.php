@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Testimonial
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Testimonial</h2>
                        <ul>
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li><i class="flaticon-tea-cup"></i></li>
                            <li>Testimonial</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title-shape">
            <img src="{{ asset('front/img/page-title/down-shape.png') }}" alt="image">
        </div>
    </div>
    <section class="feedback-area ptb-100">
        <div class="container">
            <div class="feedback-slider owl-carousel owl-theme">
                <div class="feedback-item">
                    <div class="image">
                        <img src="{{ asset('front//img/feedback/image.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h3>David McLean</h3>
                        <span>CEO, Foodplanet</span>
                    </div>
                    <p>I chose Handout because of their value And incredible superior customer Service they really awesome Food with quality service Ha of their value And incredible sup with quality</p>
                </div>
                <div class="feedback-item">
                    <div class="image">
                        <img src="{{ asset('front//img/feedback/image.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h3>David McLean</h3>
                        <span>CEO, Foodplanet</span>
                    </div>
                    <p>I chose Handout because of their value And incredible superior customer Service they really awesome Food with quality service Ha of their value And incredible sup with quality</p>
                </div>
            </div>
        </div>
        <div class="feedback-shape">
            <div class="shape1">
                <img src="{{ asset('front//img/image-icon/5.png') }}" alt="image">
            </div>
            <div class="shape2">
                <img src="{{ asset('front//img/image-icon/3.png') }}" alt="image">
            </div>
            <div class="shape3">
                <img src="{{ asset('front//img/image-icon/6.png') }}" alt="image">
            </div>
            <div class="shape4">
                <img src="{{ asset('front//img/image-icon/2.png') }}" alt="image">
            </div>
            <div class="shape5">
                <img src="{{ asset('front//img/image-icon/6.png') }}" alt="image">
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
