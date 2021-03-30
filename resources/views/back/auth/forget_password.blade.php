@extends('back.auth.layout')

@section('meta')
@endsection

@section('title')
    Forgot Password
@endsection

@section('content')
    <div class="brand" style="margin-top:150px;">
        <a class="link" href="{{ route('back.home') }}">{{ _site_title() }}</a>
    </div>
    <form action="{{ route('back.password.forget') }}" name="form" id="form" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <h3 class="m-t-10 m-b-10">Forgot password</h3>
        <p class="m-b-20">Enter your email address below and we'll send you password reset instructions.</p>
        <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" autocomplete="off">
            <span class="kt-form__help error email"></span>
        </div>
        <div class="form-group">
            <button class="btn btn-info btn-block" type="submit">Submit</button>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function (e) {
            var form = $('#form');
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
                        return true;
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
@endsection
