<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="{{ _settings('SITE_TITLE') }}">
    <meta name="author" content="{{ _settings('SITE_TITLE') }}">
    @yield('meta')

    <title>{{ _settings('SITE_TITLE') }} | @yield('title') </title>

    <link rel="icon" type="image/png" href="{{ _fevicon('FEVICON') }}">

    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('front/vendor/unicons-2.0.1/css/unicons.css') }}" rel='stylesheet'>
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/night-mode.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/step-wizard.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/semantic/semantic.min.css') }}" rel="stylesheet" type="text/css" >

    @yield('styles')
</head>

<body>
    <div class="sign-inup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    
                    @yield('content')

                    <div class="copyright-text text-center mt-3">
                        <i class="uil uil-copyright"></i>Copyright {{ date('Y') }} <b>{{ _settings('SITE_TITLE') }}</b>. All rights reserved
                        | Powered by <a href="https://cypherocean.com/" class="text-primary" target="_blank">CyoherOcean</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/vendor/OwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('front/vendor/semantic/semantic.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
    <script src="{{ asset('front/js/product.thumbnail.slider.js') }}"></script>
    <script src="{{ asset('front/js/offset_overlay.js') }}"></script>
    <script src="{{ asset('front/js/night-mode.js') }}"></script>
</body>

</html>
