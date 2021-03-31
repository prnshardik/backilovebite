@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    View Category
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
                        <div class="ibox-title">View Category</div>
                    </div>
                    <div class="ibox-body">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Plese enter name" value="{{ $data->name ?? '' }}" disabled="disabled" />
                                <span class="kt-form__help error name"></span>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" placeholder="Plese enter description" rows="3" cols="10" disabled="disabled">{{ $data->description ?? '' }}</textarea>
                                <span class="kt-form__help error description"></span>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="image">Image</label>
                                <input type="file" class="dropify" id="image" name="image" data-show-remove="false" data-height="200" data-default-file="{{ $data->image ?? '' }}" data-max-file-size="3M" data-show-errors="true"  data-allowed-file-extensions="jpg png jpeg JPG PNG JPEG"  data-max-file-size-preview="3M" disabled="disabled" />
                                <span class="kt-form__help error image"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('back.categories') }}" class="btn btn-default">Back</a>
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

