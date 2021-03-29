@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Temp Settings
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Settings</div>
                    </div>
                    <ul class="nav nav-tabs nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" href="#general" data-toggle="tab" aria-expanded="true">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#smtp" data-toggle="tab" aria-expanded="false">SMTP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sms" data-toggle="tab" aria-expanded="false">SMS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#payment" data-toggle="tab" aria-expanded="false">Payment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#logo" data-toggle="tab" aria-expanded="false">Logo</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="general" aria-expanded="true">
                            <div class="row m-2">
                                <div class="col-sm-12">
                                    <form action="{{ route('temp.settings.update') }}" method="post">
                                        @if(isset($general) && $general->isNotEmpty())
                                            @foreach($general as $row)
                                                <div class="form-group">
                                                    <label>{{ ucwords(strtolower(str_replace('_', ' ', $row->key))) }}</label>
                                                    <input type="text" name="{{ $row->id }}" class="form-control" value="{{ $row->value }}" placeholder="Email address">
                                                </div>
                                            @endforeach
                                        @endif
                                        <input type="submit" value="Save" class="btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="smtp" aria-expanded="false">
                            SMTP
                        </div>
                        <div class="tab-pane fade" id="sms" aria-expanded="false">
                            SMS
                        </div>
                        <div class="tab-pane fade" id="payment" aria-expanded="false">
                            Payment
                        </div>
                        <div class="tab-pane fade" id="logo" aria-expanded="false">
                            Logo
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
