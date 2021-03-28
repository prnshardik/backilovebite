@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Settings
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
    <script type="text/javascript">
        var datatable;
        $(document).ready(function(){
            $('.nav-item').on('click', function(){
                var type = $(this).children().data('id');
                    $('.tab-pane').removeClass(' active show');
                    $('#'+type).addClass(' active show');
                    if($('#'+type).length > 0){
                    datatable = $('#'+type).DataTable({
                        processing: true,
                        serverSide: true,
                        destroy:true,

                        // "pageLength": 10,
                        // "iDisplayLength": 10,
                        "responsive": true,
                        "aaSorting": [],
                        // "order": [], //Initial no order.
                        //     "aLengthMenu": [
                        //     [5, 10, 25, 50, 100, -1],
                        //     [5, 10, 25, 50, 100, "All"]
                        // ],

                        // "scrollX": true,
                        // "scrollY": '',
                        // "scrollCollapse": false,
                        // scrollCollapse: true,

                        // lengthChange: false,

                        "ajax":{
                            "url": "{{ route('back.settings') }}",
                            "type": "POST",
                            "dataType": "json",
                            "data":{
                                _token: "{{csrf_token()}}",
                                flag:type

                            }
                        },
                        "columnDefs": [{
                                //"targets": [0, 5], //first column / numbering column
                                "orderable": true, //set not orderable
                            },
                        ],
                        columns: [
                            {
                                data: 'DT_RowIndex',
                                name: 'DT_RowIndex'
                            },
                            {
                                data: 'key',
                                name: 'key'
                            },
                            {
                                data: 'value',
                                name: 'value'
                            },
                            {
                                data: 'status',
                                name: 'status'
                            },
                            {
                                data: 'action',
                                name: 'action',
                                orderable: false,
                            },
                        ]
                    });
                }
            })

            if($('#general').length > 0){
                datatable = $('#general').DataTable({
                    processing: true,
                    serverSide: true,
                    destroy:true,

                    // "pageLength": 10,
                    // "iDisplayLength": 10,
                    "responsive": true,
                    "aaSorting": [],
                    // "order": [], //Initial no order.
                    //     "aLengthMenu": [
                    //     [5, 10, 25, 50, 100, -1],
                    //     [5, 10, 25, 50, 100, "All"]
                    // ],

                    // "scrollX": true,
                    // "scrollY": '',
                    // "scrollCollapse": false,
                    // scrollCollapse: true,

                    // lengthChange: false,

                    "ajax":{
                        "url": "{{ route('back.settings') }}",
                        "type": "POST",
                        "dataType": "json",
                        "data":{
                            _token: "{{csrf_token()}}",
                            flag:'general'

                        }
                    },
                    "columnDefs": [{
                            //"targets": [0, 5], //first column / numbering column
                            "orderable": true, //set not orderable
                        },
                    ],
                    columns: [
                        {
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'key',
                            name: 'key'
                        },
                        {
                            data: 'value',
                            name: 'value'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                        },
                    ]
                });
            }
        });

        function change_status(object){
            var id = $(object).data("id");
            var status = $(object).data("status");
            var old_status = $(object).data("old_status");
            var msg = "Are you Sure?";

            if (confirm(msg)) {
                $.ajax({
                    "url": "{!! route('back.settings.change.status') !!}",
                    "dataType": "json",
                    "type": "POST",
                    "data":{
                        id: id,
                        status: status,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (response){
                        if (response.code == 200){
                            datatable.ajax.reload();
                            toastr.success('Record status changed successfully.', 'Success');
                        }else{
                            toastr.error('Failed to delete record.', 'Error');
                        }
                    }
                });
            }
        }
    </script>
@endsection
