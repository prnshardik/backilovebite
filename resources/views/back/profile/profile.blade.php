@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Profile
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="ibox">
                    <div class="ibox-body text-center">
                        <div class="m-t-20">
                            <img src="{{ url('back/uploads/users').'/'.auth()->guard('admin')->user()->image }}" alt="{{ auth()->guard('admin')->user()->firstname }} {{ auth()->guard('admin')->user()->lastname }}" class="img-circle" height="80px" width="80px" />
                        </div>
                        <h5 class="font-strong m-b-10 m-t-10">{{ auth()->guard('admin')->user()->firstname }} {{ auth()->guard('admin')->user()->lastname }}</h5>
                        <div class="m-b-20 text-muted"> </div>
                        <div>
                            <a href="{{ route('back.profile.edit') }}" class="btn btn-info btn-rounded m-b-5">Edit Profile</a>
                            <a href="{{ route('back.home') }}" class="btn btn-default btn-rounded m-b-5">Back</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
@endsection
