<footer class="footer">
    <div class="footer-first-row">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <ul class="call-email-alt">
                        <li><a href="#" class="callemail"><i class="uil uil-dialpad-alt"></i>{{ _settings('CONTACT_NUMBER') }}</a></li>
                        <li><a href="#" class="callemail"><i class="uil uil-envelope-alt"></i>{{ _settings('CONTACT_EMAIL') }}</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="social-links-footer">
                        <ul>
                            <li><a href="https://{{ _settings('FACEBOOK') }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://{{ _settings('INSTAGRAM') }}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://{{ _settings('YOUTUBE') }}"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-second-row">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="second-row-item">
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="#">Fruits and Vegetables</a></li>
                            <li><a href="#">Grocery & Staples</a></li>
                            <li><a href="#">Dairy & Eggs</a></li>
                            <li><a href="#">Beverages</a></li>
                            <li><a href="#">Snacks</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="second-row-item">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="{{ route('front.about') }}">About</a></li>
                            <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
                            <li><a href="{{ route('front.privacy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('front.terms') }}">Terms & Conditions</a></li>
                            <li><a href="{{ route('front.faq') }}">Faq</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="second-row-item">
                        <h4>Contact Us</h4>
                        <ul>
                            <li>{{ _settings('CONTACT_NUMBER') }}</li>
                            <li>{{ _settings('CONTACT_EMAIL') }}</li>
                            <li>{!! _settings('CONTACT_ADDRESS') !!}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="second-row-item-payment">
                        <h4>Newsletter</h4>
                        <div class="newsletter-input">
                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control input-md" required="">
                            <button class="newsletter-btn hover-btn" type="submit"><i class="uil uil-telegram-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-last-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-links">
                        <ul>
                            <li><a href="{{ route('front.about') }}">About</a></li>
                            <li><a href="{{ route('front.contact') }}">Contact</a></li>
                            <li><a href="{{ route('front.privacy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('front.terms') }}">Term & Conditions</a></li>
                        </ul>
                    </div>
                    <div class="copyright-text">
                        <i class="uil uil-copyright"></i>Copyright {{ date('Y') }} <b>{{ _settings('SITE_TITLE') }}</b>. All rights reserved
                        | Powered by <a href="https://cypherocean.com/" class="text-primary" target="_blank">CyoherOcean</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
