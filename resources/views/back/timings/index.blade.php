@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Timings
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Shop Timing</div>
                        </div>
                        <div class="ibox-body">
                            <form id="form" name="form" action="{{ route('back.timings.update') }}" method="post" class="form-horizontal">
                                @csrf
                                @method('post')

                                <div class="form-group row">
                                    <div class="col-sm-3 font-weight-bold">Day</div>
                                    <div class="col-sm-3 font-weight-bold">Open/Close</div>
                                    <div class="col-sm-3 font-weight-bold">Start Time</div>
                                    <div class="col-sm-3 font-weight-bold">End Time</div>
                                </div>
                                <hr/>
                                <div class="form-group row">
                                    @if(isset($data) && $data->isNotEmpty())
                                        @foreach($data as $row)
                                            <label class="col-sm-3 col-form-label">{{ $row->days }}</label>
                                            <div class="col-sm-3">
                                                <label class="ui-checkbox ui-checkbox-success">
                                                    <input type="checkbox" name="{{ $row->id }}[status]" @if($row->status == 'active') checked @endif>
                                                    <span class="input-span"></span>Open
                                                </label>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="time" name="{{ $row->id }}[start_time]" class="form-control" value="{{ $row->start_time }}" placeholder="Start Time">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="time" name="{{ $row->id }}[end_time]" class="form-control" value="{{ $row->end_time }}" placeholder="End Time">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-sm-12">
                                        <button class="btn btn-info" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
