@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Users View
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
                        <div class="ibox-title">Users View</div>
                    </div>
                    <div class="ibox-body">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Plese enter firstname" value="{{ $data->firstname ?? '' }}" disabled>
                                <span class="kt-form__help error firstname"></span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Plese enter lastname" value="{{ $data->lastname ?? '' }}" disabled>
                                <span class="kt-form__help error lastname"></span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Plese enter email address" value="{{ $data->email ?? '' }}" disabled>
                                <span class="kt-form__help error email"></span>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="image">Image</label>
                                <input type="file" class="dropify" id="image" name="image" data-default-file="{{ $data->image ?? '' }}" data-show-remove="false" disabled>
                                <span class="kt-form__help error image"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <a href="{{ route('back.users') }}" class="btn btn-default">Back</a>
                        </div>
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

@endsection

