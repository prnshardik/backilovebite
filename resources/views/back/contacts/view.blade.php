@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    View Contacts
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
                        <div class="ibox-title">View Contacts</div>
                    </div>
                    <div class="ibox-body">
                        <div class="row">                                
                            <div class="form-group col-sm-6">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Plese enter name" value="{{ $data->name ?? '' }}" disabled="disabled" />
                                <span class="kt-form__help error name"></span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="category_id">Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Plese enter email" value="{{ $data->email ?? '' }}" disabled="disabled" />
                                <span class="kt-form__help error email"></span>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Plese enter phone" value="{{ $data->phone ?? '' }}" disabled="disabled" />
                                <span class="kt-form__help error phone"></span>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Plese enter subject" value="{{ $data->subject ?? '' }}" disabled="disabled" />
                                <span class="kt-form__help error subject"></span>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="subject">Subject</label>
                                <textarea name="message" class="form-control" disabled> {{ $data->message }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('back.contacts') }}" class="btn btn-default">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection

