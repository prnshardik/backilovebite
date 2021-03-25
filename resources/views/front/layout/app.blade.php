<!doctype html>
<html lang="en">
<head>
    <title>{{ _site_title() }} | @yield('title') </title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    @include('front.layout.meta')

    @include('front.layout.styles')
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    @include('front.layout.navbar')

    @yield('content')

    @include('front.layout.footer')

    <div class="go-top">
        <i class="bx bx-chevron-up"></i>
        <i class="bx bx-chevron-up"></i>
    </div>

    @include('front.layout.scripts')
</body>
</html>
