@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    View Timings
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
                        <div class="ibox-title">View Timings</div>
                    </div>
                    <div class="ibox-body">
                        <form name="form"  id="form" method="post" enctype="multipart/form-data">
                            
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <div class="check-list">
                                        <label for="day">Day</label>
                                        <label class="ui-radio ui-radio-info">
                                            <input type="radio" name="days" value="Sunday" <?= (isset($data) && $data->days == "Sunday" ?'checked':'') ?> disabled>
                                            <span class="input-span"></span>Sunday
                                        </label>

                                        <label class="ui-radio ui-radio-info">
                                            <input type="radio" name="days" value="Monday" <?= (isset($data) && $data->days == "Monday" ?'checked':'') ?> disabled>
                                            <span class="input-span"></span>Monday
                                        </label>

                                        <label class="ui-radio ui-radio-info">
                                            <input type="radio" name="days" value="Tuesday" <?= (isset($data) && $data->days == "Tuesday" ?'checked':'') ?> disabled>
                                            <span class="input-span"></span>Tuesday
                                        </label>

                                        <label class="ui-radio ui-radio-info">
                                            <input type="radio" name="days" value="Wedesday" <?= (isset($data) && $data->days == "Wedesday" ?'checked':'') ?> disabled>
                                            <span class="input-span"></span>Wedesday
                                        </label>

                                        <label class="ui-radio ui-radio-info">
                                            <input type="radio" name="days" value="Thrusday" <?= (isset($data) && $data->days == "Thrusday" ?'checked':'') ?> disabled>
                                            <span class="input-span"></span>Thrusday
                                        </label>

                                        <label class="ui-radio ui-radio-info">
                                            <input type="radio" name="days" value="Friday" <?= (isset($data) && $data->days == "Friday" ?'checked':'') ?> disabled>
                                            <span class="input-span"></span>Friday
                                        </label>

                                        <label class="ui-radio ui-radio-info">
                                            <input type="radio" name="days" value="Saturday" <?= (isset($data) && $data->days == "Saturday" ?'checked':'') ?> disabled>
                                            <span class="input-span"></span>Saturday
                                        </label>
                                    </div>
                                    <span class="kt-form__help error days"></span>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="start_time">Start Time</label>
                                    <input type="time" class="form-control" name="start_time" id="start_time" placeholder="Plese Select Time" value="<?=($data->start_time !=null ?date('H:i',strtotime($data->start_time)):'--:-- --' )?>" disabled/>
                                    <span class="kt-form__help error start_time"></span>
                                    <br>
                                    <label for="end_time">End Time</label>
                                    <input type="time" class="form-control" name="end_time" id="end_time" placeholder="Plese Select Time" value="<?=($data->end_time !=null ?date('H:i',strtotime($data->end_time)):'--:-- --' )?>" disabled/>
                                    <span class="kt-form__help error end_time"></span>
                                </div>
                                
                            </div>
                            <div class="form-group">
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
@endsection

