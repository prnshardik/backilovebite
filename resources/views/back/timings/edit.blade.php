@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Edit Timings
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
                        <div class="ibox-title">Edit Timings</div>
                    </div>
                    <div class="ibox-body">
                        <form name="form" action="{{ route('back.Timings.update') }}" id="form" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <div class="check-list">
                                        <label for="day">Day</label>
                                        <label class="ui-radio ui-radio-info">
                                            <input type="radio" name="days" value="Sunday" <?= (isset($data) && $data->days == "Sunday" ?'checked':'') ?>>
                                            <span class="input-span"></span>Sunday
                                        </label>

                                        <label class="ui-radio ui-radio-info">
                                            <input type="radio" name="days" value="Monday" <?= (isset($data) && $data->days == "Monday" ?'checked':'') ?>>
                                            <span class="input-span"></span>Monday
                                        </label>

                                        <label class="ui-radio ui-radio-info">
                                            <input type="radio" name="days" value="Tuesday" <?= (isset($data) && $data->days == "Tuesday" ?'checked':'') ?>>
                                            <span class="input-span"></span>Tuesday
                                        </label>

                                        <label class="ui-radio ui-radio-info">
                                            <input type="radio" name="days" value="Wedesday" <?= (isset($data) && $data->days == "Wedesday" ?'checked':'') ?>>
                                            <span class="input-span"></span>Wedesday
                                        </label>

                                        <label class="ui-radio ui-radio-info">
                                            <input type="radio" name="days" value="Thrusday" <?= (isset($data) && $data->days == "Thrusday" ?'checked':'') ?>>
                                            <span class="input-span"></span>Thrusday
                                        </label>

                                        <label class="ui-radio ui-radio-info">
                                            <input type="radio" name="days" value="Friday" <?= (isset($data) && $data->days == "Friday" ?'checked':'') ?>>
                                            <span class="input-span"></span>Friday
                                        </label>

                                        <label class="ui-radio ui-radio-info">
                                            <input type="radio" name="days" value="Saturday" <?= (isset($data) && $data->days == "Saturday" ?'checked':'') ?>>
                                            <span class="input-span"></span>Saturday
                                        </label>
                                    </div>
                                    <span class="kt-form__help error days"></span>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="start_time">Start Time</label>
                                    <input type="time" class="form-control" name="start_time" id="start_time" placeholder="Plese Select Time" value="<?=($data->start_time !=null ?date('H:i',strtotime($data->start_time)):'--:-- --' )?>" />
                                    <span class="kt-form__help error start_time"></span>
                                    <br>
                                    <label for="end_time">End Time</label>
                                    <input type="time" class="form-control" name="end_time" id="end_time" placeholder="Plese Select Time" value="<?=($data->end_time !=null ?date('H:i',strtotime($data->end_time)):'--:-- --' )?>" />
                                    <span class="kt-form__help error end_time"></span>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('back.Timings') }}" class="btn btn-default">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            var start_time = $('#start_time').val();
            if(start_time === null || start_time === ''){
                $('#end_time').removeAttr('required');
            }else{
                $('#end_time').attr('required',true);
            }
        });

        $('#start_time').on('click',function(){
            var start_time = $('#start_time').val();
            if(start_time != null || start_time != ''){
                $('#end_time').attr('required',true);
            }else{
                $('#end_time').removeAttr('required');
            }
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

