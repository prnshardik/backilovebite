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
                    <form class="newsletter-form" novalidate="true">
                        <input type="email" class="input-newsletter" placeholder="Your Email" name="EMAIL" required="" autocomplete="off">
                        <button type="submit" class="disabled" style="pointer-events: all; cursor: pointer;">
                            Subscribe Now
                        </button>              
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-content-item">
            <a href="#">
                <img src="{{ asset('front/img/logo.png') }}" alt="image">
            </a>
            <ul class="list">
                <li>
                    <a href="{{ route('front.about') }}">About Us</a>
                </li>
                <li>
                    <a href="{{ route('front.menu') }}">Menu</a>
                </li>
                <li>
                    <a href="{{ route('front.testimonial') }}">Testimonial</a>
                </li>
                <li>
                    <a href="{{ route('front.gallery') }}Gallery</a>
                </li>
                <li>
                    <a href="{{ route('front.faq') }}">Faq</a>
                </li>
                <li>
                    <a href="{{ route('front.contact') }}">Contact</a>
                </li>
            </ul>
            <p>Piorem ipsum dolor sit amet, consectetur adipiscing elit sed do eusmod tempor incdunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <p>
                <i class="far fa-copyright"></i>
                {{ date('Y') }} {{ _site_title() }}. All Rights Reserved by
                <a href="https://cypherocean.com/" target="_blank">CyoherOcean</a>
            </p>
            <ul class="social">
                <li class="facebook">
                    <a href="#" target="_blank">
                        <i class="bx bxl-facebook"></i>
                    </a>
                </li>
                <li class="twitter">
                    <a href="#" target="_blank">
                        <i class="bx bxl-twitter"></i>
                    </a>
                </li>
                <li class="instagram">
                    <a href="#" target="_blank">
                        <i class="bx bxl-instagram"></i>
                    </a>
                </li>
                <li class="pinterest">
                    <a href="#" target="_blank">
                        <i class="bx bxl-pinterest-alt"></i>
                    </a>
                </li>
                <li class="youtube">
                    <a href="#" target="_blank">
                        <i class="bx bxl-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-shape">
        <img src="{{ asset('front/img/footer-shape.png') }}" alt="image">
    </div>
</section>
{{-- <div class="copyright-area">
    <div class="container">
        <div class="copyright-area-content">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p>
                        <i class="far fa-copyright"></i>
                        {{ date('Y') }} {{ _site_title() }}. All Rights Reserved by
                        <a href="https://cypherocean.com/" target="_blank">CyoherOcean</a>
                    </p>
                </div>

                <div class="col-lg-6 col-md-6">
                    <ul>
                        <li>
                            <a href="{{ route('front.terms') }}">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="{{ route('front.privacy') }}">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
