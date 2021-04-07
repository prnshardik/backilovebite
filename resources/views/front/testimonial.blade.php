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
                @if(isset($data) && $data->isNotEmpty())
                    @foreach($data as $row)
                        <div class="feedback-item">
                            <div class="image">
                                <img src="{{ $row->image }}" alt="{{ $row->name }} image">
                            </div>
                            <div class="info">
                                <h3>{{ $row->name }}</h3>
                                <span>{{ $row->title }}</span>
                            </div>
                            <p>{{ $row->message }}</p>
                        </div>
                    @endforeach
                @endif
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
