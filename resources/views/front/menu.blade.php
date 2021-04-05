@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Menu
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Menu</h2>
                        <ul>
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li><i class="flaticon-tea-cup"></i></li>
                            <li>Menu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title-shape">
            <img src="{{ asset('front/img/page-title/down-shape.png') }}" alt="image">
        </div>
    </div>
    <section class="menu-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Pricing Lists</span>
                <h2>Choose & order now!</h2>
            </div>

            <div class="tab menu-list-tab">
                <ul class="tabs">
                    @if(isset($data) && $data->isNotEmpty())
                        @foreach($data as $row)
                            <li>
                                <a href="#">
                                    <img src="{{ $row->image }}" alt="{{ $row->name }} image" style="max-height: 50px; max-width: 50px;">
                                    <span>{{ $row->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
                <div class="tab_content">
                    @if(isset($data) && $data->isNotEmpty())
                        @foreach($data as $row)
                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="menu-bar">
                                            @if(isset($row->products) && !empty($row->products))
                                                @foreach($row->products as $pRow)
                                                    <div class="menu-list-content" style="margin-bottom: 20px;">
                                                        <h3>
                                                            {{ $pRow['name'] ?? '' }}
                                                            <b>....................</b>
                                                            <span>${{ $pRow['price'] ?? '' }}</span>
                                                        </h3>
                                                        <p>{{ $pRow['description'] ?? '' }}</p>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

            </div>
        </div>

        <div class="menu-shape">
            <div class="shape1">
                <img src="{{ asset('front/img/image-icon/7.png') }}" alt="image">
            </div>
            <div class="shape2">
                <img src="{{ asset('front/img/image-icon/4.png') }}" alt="image">
            </div>
            <div class="shape3">
                <img src="{{ asset('front/img/image-icon/5.png') }}" alt="image">
            </div>
            <div class="shape4">
                <img src="{{ asset('front/img/image-icon/6.png') }}" alt="image">
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:5,
                    nav:true,
                    loop:false
                }
            }
        })
    </script>
@endsection
