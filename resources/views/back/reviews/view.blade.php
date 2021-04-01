@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    View Review
@endsection

@section('styles')
    <link href="{{ asset('back/css/dropify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back/css/sweetalert2.bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('back/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">View Review</div>
                    </div>
                    <div class="ibox-body">
                        <form name="form" id="form" method="post" enctype="multipart/form-data">
                            
                            <div class="row">                                
                                <div class="form-group col-sm-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Plese enter name" value="{{ $data->name ??'' }}"  disabled />
                                    <span class="kt-form__help error name"></span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Plese enter title" value="{{ $data->title ?? ''}}" disabled/>
                                    <span class="kt-form__help error title"></span>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" class="form-control" placeholder="Plese enter message" rows="3" cols="10" disabled>{{ $data->message ?? '' }}</textarea>
                                    <span class="kt-form__help error message"></span>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="image">Image</label>
                                    <input type="file" class="dropify" id="image" name="image" data-show-remove="false" data-height="200" data-max-file-size="3M" data-show-errors="true"  data-allowed-file-extensions="jpg png jpeg JPG PNG JPEG"  data-max-file-size-preview="3M" data-default-file="{{ $data->image }}"  disabled/>
                                    <span class="kt-form__help error image"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('back.reviews') }}" class="btn btn-default">Back</a>
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
    <script src="{{ asset('back/js/select2.min.js') }}"></script>

    <script>
        $(document).ready(function(){

            $('.select2').select2();

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

