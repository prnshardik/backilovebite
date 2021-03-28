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
                    <div class="ibox-body">
                        <ul class="nav nav-tabs tabs-line">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab-7-1" data-id="general" data-toggle="tab">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-7-2" data-id="logo" data-toggle="tab">Logo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-7-3" data-id="smtp" data-toggle="tab">SMTP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-7-4" data-id="sms" data-toggle="tab">SMS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-7-5" data-id="payment" data-toggle="tab">Payment</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-7-1">
                                <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <table class="table table-bordered table-responsive data-table" id="general">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Key</th>
                                                <th>Value</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-7-2">
                                <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <table class="table table-bordered table-responsive data-table" id="logo">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Key</th>
                                                <th>Value</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-7-3">
                                <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <table class="table table-bordered table-responsive data-table" id="smtp">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Key</th>
                                                <th>Value</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-7-4">
                                <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <table class="table table-bordered table-responsive data-table" id="sms">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Key</th>
                                                <th>Value</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-7-5">
                                <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <table class="table table-bordered table-responsive data-table" id="payment">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Key</th>
                                                <th>Value</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
