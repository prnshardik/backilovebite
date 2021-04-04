@extends('front.layout.app')

@section('title')
    Testimonial
@endsection

@section('meta')
@endsection

@section('styles')
@endsection

@section('content')
    <div class="life-gambo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="default-title">
                        <h2>Testimonials</h2>
                        <p>Our Team Says about us!</p>
                        <img src="{{ asset('front/images/line.svg') }}" alt="">
                    </div>
                    <div class="dd-content">
                        <div class="owl-carousel testimonial-slider owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-2000px, 0px, 0px); transition: all 0.25s ease 0s; width: 4000px;">
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-2.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Zoena Singh</h4>
                                                        <p>Senior Manager - Training, Corporate</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-3.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Rock William</h4>
                                                        <p>Senior Manager - Finance &amp; Accounts, Corporate</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-4.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Ridhima William</h4>
                                                        <p>Head Customer Support</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-1.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Joginder Singh</h4>
                                                        <p>Senior UX Designer, Product</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-2.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Zoena Singh</h4>
                                                        <p>Senior Manager - Training, Corporate</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-3.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Rock William</h4>
                                                        <p>Senior Manager - Finance &amp; Accounts, Corporate</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-4.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Ridhima William</h4>
                                                        <p>Head Customer Support</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned active" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-1.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Joginder Singh</h4>
                                                        <p>Senior UX Designer, Product</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-2.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Zoena Singh</h4>
                                                        <p>Senior Manager - Training, Corporate</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testi-item">
                                                <div class="testi-text">
                                                    <div class="qoute-icon"><i class="fas fa-quote-left"></i></div>
                                                    <div class="testo-text">Sed ut mattis enim. Nunc id semper eros. Donec luctus venenatis quam at tincidunt. In tristique nibh eget porta cursus. Integer volutpat tincidunt nibh et mattis.</div>
                                                </div>
                                                <div class="team-dt">
                                                    <div class="team-avatar">
                                                        <img src="{{ asset('front/images/avatar/img-3.jpg') }}" alt="">
                                                    </div>
                                                    <div class="team-emp-dt">
                                                        <h4>Rock William</h4>
                                                        <p>Senior Manager - Finance &amp; Accounts, Corporate</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev">
                                    <i class="uil uil-angle-left"></i>
                                </button>
                                <button type="button" role="presentation" class="owl-next">
                                    <i class="uil uil-angle-right"></i>
                                </button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
