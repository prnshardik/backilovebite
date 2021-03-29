@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    View Setting
@endsection

@section('styles')
    <link href="{{ asset('back/css/dropify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back/css/sweetalert2.bundle.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">View Setting</div>
                    </div>
                    <div class="ibox-body">
                        <form name="form" id="form" method="post" enctype="multipart/form-data">
                            
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="key">Key</label>
                                    <input type="text" name="key" id="key" class="form-control" placeholder="Plese enter key" value="{{ $data->key ?? '' }}" readonly>
                                    <span class="kt-form__help error key"></span>
                                </div>
                                
                                @if($data->type == 'logo')
                                    <div class="form-group col-sm-12">
                                        <label for="image">Image</label>
                                        <input type="file" class="dropify" id="value" name="value" data-show-remove="false" data-height="200" data-default-file="{{ $data->value }}" data-max-file-size="3M" data-show-errors="true"  data-allowed-file-extensions="jpg png jpeg JPG PNG JPEG"  data-max-file-size-preview="3M" disabled>
                                        <span class="kt-form__help error value"></span>
                                    </div>
                                @else
                                    <div class="form-group col-sm-6">
                                        <label for="value">Value</label>
                                        <input type="text" name="value" id="value" class="form-control" placeholder="Plese enter value" value="{{ $data->value ?? '' }}"  disabled>
                                        <span class="kt-form__help error value"></span>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <a href="{{ route('back.settings') }}" class="btn btn-default">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('back/js/dropify.min.js') }}"></script>
    <script src="{{ asset('back/js/promise.min.js') }}"></script>
    <script src="{{ asset('back/js/sweetalert2.bundle.js') }}"></script>
    <script>
        $(document).ready(function(){

            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop profile image here or click',
                    'remove':  'Remove',
                    'error':   'Ooops, something wrong happended.'
                }
            });

            var drEvent = $('.dropify').dropify();
        });
    </script>
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

