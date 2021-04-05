<script data-cfasync="false" src="{{ asset('front/js/email-decode.min.js') }}"></script>
<script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/vendor/OwlCarousel/owl.carousel.js') }}"></script>
<script src="{{ asset('front/vendor/semantic/semantic.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('front/js/custom.js') }}"></script>
<script src="{{ asset('front/js/offset_overlay.js') }}"></script>
<script src="{{ asset('front/js/night-mode.js') }}"></script>
<script src="{{ asset('back/vendors/toastr/toastr.min.js') }}" type="text/javascript"></script>

<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-left",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "1000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    @php
        $success = '';
        if(\Session::has('success'))
            $success = \Session::get('success');

        $error = '';
        if(\Session::has('error'))
            $error = \Session::get('error');
    @endphp

    var success = "{{ $success }}";
    var error = "{{ $error }}";

    if(success != ''){ toastr.success(success, 'Success'); }

    if(error != ''){ toastr.error(error, 'error'); }
</script>

@yield('scripts')
