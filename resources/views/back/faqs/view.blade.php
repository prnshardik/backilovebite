@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Edit FAQs
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit FAQs</div>
                    </div>
                    <div class="ibox-body">
                        <div class="row">                                
                            <div class="form-group col-sm-6">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Plese enter title" value="{{ $data->title ??'' }}" disabled />
                                <span class="kt-form__help error title"></span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="discription">Discription</label>
                                <textarea name="discription" id="discription" class="form-control" placeholder="Plese enter discription" rows="3" cols="10" disabled>{{ $data->discription ??'' }}</textarea>
                                <span class="kt-form__help error discription"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('back.FAQs') }}" class="btn btn-default">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection

