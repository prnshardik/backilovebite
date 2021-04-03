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
                <div class="col-lg-4 col-md-4 col-sm-6">
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
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="second-row-item">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="about_us.html">About US</a></li>
                            <li><a href="shop_grid.html">Featured Products</a></li>
                            <li><a href="offers.html">Offers</a></li>
                            <li><a href="our_blog.html">Blog</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="contact_us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="second-row-item">
                        <h4>Top Cities</h4>
                        <ul>
                            <li><a href="#">Gurugram</a></li>
                            <li><a href="#">New Delhi</a></li>
                            <li><a href="#">Bangaluru</a></li>
                            <li><a href="#">Mumbai</a></li>
                            <li><a href="#">Hyderabad</a></li>
                        </ul>
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
                            <li><a href="about_us.html">About</a></li>
                            <li><a href="contact_us.html">Contact</a></li>
                            <li><a href="privacy_policy.html">Privacy Policy</a></li>
                            <li><a href="term_and_conditions.html">Term & Conditions</a></li>
                            <li><a href="refund_and_return_policy.html">Refund & Return Policy</a></li>
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
