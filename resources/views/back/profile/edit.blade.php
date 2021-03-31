@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Profile Edit
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
                        <div class="ibox-title">Profile Edit</div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{ route('back.profile.update') }}" name="form" id="form" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('PATCH')

                            <input type="hidden" name="id" value="{{ $data->id ??'' }}">

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="firstname">First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Plese enter firstname" value="{{ $data->firstname ?? '' }}" />
                                    <span class="kt-form__help error firstname"></span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Plese enter lastname" value="{{ $data->lastname ?? '' }}" />
                                    <span class="kt-form__help error lastname"></span>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" class="form-control" placeholder="Plese enter lastname" value="{{ $data->email ?? '' }}" disabled="disabled" />
                                    <span class="kt-form__help error email"></span>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="image">Profile</label>
                                    <input type="file" class="form-control dropify" id="image" name="image" data-default-file="{{ $data->image ?? '' }}"  data-allowed-file-extensions="jpg png jpeg" data-max-file-size-preview="2M" data-show-remove="false" />
                                    <span class="kt-form__help error image"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('back.profile') }}" class="btn btn-secondary">Back</a>
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

