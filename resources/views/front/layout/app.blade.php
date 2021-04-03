<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.layout.meta')

    <title>{{ _settings('SITE_TITLE') }} | @yield('title') </title>

    <link rel="icon" type="image/png" href="{{ _fevicon('FEVICON') }}">

    @include('front.layout.styles')
</head>

<body>
    @include('front.layout.search-model')

    @include('front.layout.cart')

    @include('front.layout.header')

    <div class="wrapper">
        @yield('content')
    </div>

    @include('front.layout.footer')

    @include('front.layout.scripts')
</body>
</html>
