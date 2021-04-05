<section class="footer-area pt-100">
    <div class="subscribe-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="subscribe-content">
                        <h2>
                            <i class="flaticon-email"></i>
                            Don't Miss Our Update
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <form id="subscribe_form" name="subscribe_form" action="{{ route('front.subscribe') }}" method="post" class="newsletter-form">
                        @csrf
                        @method('post')

                        <input type="email" name="email" id="subscribe_email" class="input-newsletter" placeholder="Your Email" required="" autocomplete="off">
                        <span class="kt-form__help error EMAIL text-danger"></span>

                        <button type="submit" class="disabled" style="pointer-events: all; cursor: pointer;">Subscribe Now</button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-content-item" style="max-width: 825px;" >
            <a href="{{ route('front.home') }}">
                <img src="{{ _logo() }}" alt="Love Bite Logo" style="width:100px; height:100px;">
            </a>
            <ul class="list">
                <li><a href="{{ route('front.about') }}">About Us</a></li>
                <li><a href="{{ route('front.menu') }}">Menu</a></li>
                <li><a href="{{ route('front.testimonial') }}">Testimonial</a></li>
                <li><a href="{{ route('front.gallery') }}">Gallery</a></li>
                <li><a href="{{ route('front.faq') }}">Faq</a></li>
                <li><a href="{{ route('front.contact') }}">Contact</a></li>
                <li><a href="{{ route('front.terms') }}">Terms & Conditions</a></li>
                <li><a href="{{ route('front.privacy') }}">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <p>
                <i class="far fa-copyright"></i>
                {{ date('Y') }} @ All Rights Reserved by <a href="https://ilovebite.in/" class="text-danger" target="_blank">{{ _settings('SITE_TITLE') }}</a>
                | Powered by <a href="https://cypherocean.com/" class="text-primary" target="_blank">CyoherOcean</a>
            </p>
            <ul class="social">
                <li class="facebook"><a href="https://{{ _settings('FACEBOOK') }}" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                <li class="instagram"><a href="https://{{ _settings('INSTAGRAM') }}" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                <li class="youtube"><a href="https://{{ _settings('YOUTUBE') }}" target="_blank"><i class="bx bxl-youtube"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="footer-shape">
        <img src="{{ asset('front/img/footer-shape.png') }}" alt="image">
    </div>
</section>
