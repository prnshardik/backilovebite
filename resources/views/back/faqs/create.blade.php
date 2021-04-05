@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Create FAQs
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Create FAQs</div>
                    </div>
                    <div class="ibox-body">
                        <form name="form" action="{{ route('back.FAQs.insert') }}" id="form" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">                                
                                <div class="form-group col-sm-6">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Plese enter title" />
                                    <span class="kt-form__help error title"></span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="discription">Discription</label>
                                    <textarea name="discription" id="discription" class="form-control" placeholder="Plese enter discription" rows="3" cols="10"></textarea>
                                    <span class="kt-form__help error discription"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('back.FAQs') }}" class="btn btn-default">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function () {
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

