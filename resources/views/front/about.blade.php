@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    About
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>About</h2>
                        <ul>
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li><i class="flaticon-tea-cup"></i></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title-shape">
            <img src="{{ asset('front/img/page-title/down-shape.png') }}" alt="image">
        </div>
    </div>
    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <span>Who Are We</span>
                        <h3>We Are Amongest Best For Providing Fast Food</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        <p>Eusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

                        <div class="signature">
                            <h4>Christopher Nolan</h4>
                            <span>Manager At Handout</span>
                            <img src="{{ asset('front/img/about/signature.png') }}" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{ asset('front/img/about/image1.jpg') }}" alt="image">

                        <div class="shape">
                            <img src="{{ asset('front/img/about/shape.png') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fun-facts-area bg-color pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="340">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                        <p>Cups of Coffee</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="2678">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                        <p>Orders Everyday</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="60">00</span>
                        </h3>
                        <p>Skilled Professionals</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="130">00</span>
                        </h3>
                        <p>Burgers at Hour</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Our Team</span>
                <h2>Our Experience Team</h2>
            </div>
            <div class="team-slider owl-carousel owl-theme">
                <div class="team-item">
                    <div class="image">
                        <img src="{{ asset('front/img/team/1.png') }}" alt="image">
                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Nicholas Barnett</h3>
                        <p>Executive Chef</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="image">
                        <img src="{{ asset('front/img/team/2.png') }}" alt="image">
                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Minnesota Twins</h3>
                        <p>General Manager</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="image">
                        <img src="{{ asset('front/img/team/3.png') }}" alt="image">
                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Michel Smith</h3>
                        <p>Chief Instructor</p>
                    </div>
                </div>

                <div class="team-item">
                    <div class="image">
                        <img src="{{ asset('front/img/team/1.png') }}" alt="image">
                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Arnold Russel</h3>
                        <p>Chief Guru</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="image">
                        <img src="{{ asset('front/img/team/1.png') }}" alt="image">
                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Nicholas Barnett</h3>
                        <p>Executive Chef</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="image">
                        <img src="{{ asset('front/img/team/2.png') }}" alt="image">
                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Minnesota Twins</h3>
                        <p>General Manager</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="image">
                        <img src="{{ asset('front/img/team/3.png') }}" alt="image">
                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Michel Smith</h3>
                        <p>Chief Instructor</p>
                    </div>
                </div>

                <div class="team-item">
                    <div class="image">
                        <img src="{{ asset('front/img/team/1.png') }}" alt="image">
                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Arnold Russel</h3>
                        <p>Chief Guru</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
