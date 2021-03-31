@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Edit Product
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
                        <div class="ibox-title">Edit Product</div>
                    </div>
                    <div class="ibox-body">
                        <form name="form" action="{{ route('back.products.update') }}" id="form" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Plese enter name" value="{{ $data->name ?? '' }}" />
                                    <span class="kt-form__help error name"></span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="category_id">Category Name</label>
                                    <select name="category_id" class="form-control select2">
                                        <option value="" disabled>Select Category</option>
                                        @if(isset($categories) && $categories != '')
                                            @foreach($categories AS $row)
                                                <option value="{{ $row->id }}" <?=(isset($data->category_id) && $row->id == $data->category_id ? 'selected' :'')?>>{{ $row->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <span class="kt-form__help error category_id"></span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" id="price" class="form-control" placeholder="Plese enter price" value="{{ $data->price ?? '' }}" />
                                    <span class="kt-form__help error price"></span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control" placeholder="Plese enter description" rows="3" cols="10">{{ $data->description ?? '' }}</textarea>
                                    <span class="kt-form__help error description"></span>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control dropify" id="image" name="image" data-show-remove="false" data-height="200" data-default-file="{{ $data->image ??'' }}" data-max-file-size="3M" data-show-errors="true"  data-allowed-file-extensions="jpg png jpeg JPG PNG JPEG"  data-max-file-size-preview="3M" />
                                    <span class="kt-form__help error image"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('back.products') }}" class="btn btn-default">Back</a>
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

