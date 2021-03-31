<script src="{{ asset('front/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/popper.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('front/js/odometer.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.appear.js') }}"></script>
<script src="{{ asset('front/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('front/js/form-validator.min.js') }}"></script>
<script src="{{ asset('front/js/contact-form-script.js') }}"></script>
<script src="{{ asset('front/js/wow.min.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>

<script>
    $(document).ready(function () {
        var form = $('#subscribe_form');
        $('.kt-form__help').html('');
        form.submit(function(e) {
            $('.help-block').html('');
            $('.m-form__help').html('');
            $.ajax({
                url : form.attr('action'),
                type : form.attr('method'),
                data : form.serialize(),
                dataType: 'json',
                async:false,
                success : function(json){
                    e.preventDefault();
                    if(json.code == 200){
                            $('.kt-form__help').html('');
                            $('.EMAIL').html();
                            $('.form-result').html();
                            $('.form-result').html(json.message);
                            $('.form-result').html(json.message);
                            $('#subscribe_email').html();
                    }else{
                        $('.kt-form__help').html('');
                        $('.EMAIL').html();
                        $('.form-result').html();
                        $('.EMAIL').html(json.message);
                        $('#subscribe_email').html();
                        // alert(json.message);
                    }
                },
                error: function(json){
                    if(json.status === 422) {
                        e.preventDefault();
                        var errors_ = json.responseJSON;
                        $('.kt-form__help').html('');
                        $.each(errors_.errors, function (key, value) {
                            $('.'+key).html(value);
                        });
                    }
                }
            });
        });
    });
</script>

@yield('scripts')
