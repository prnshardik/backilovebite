@extends('front.auth.app')

@section('meta')
@endsection

@section('title')
    404 Error
@endsection

@section('styles')
@endsection

@section('content')
    <div class="sign-form">
        <div class="sign-inner">
            <div class="sign-logo" id="logo">
                <a href="{{ route('front.home') }}"><img src="{{ _logo() }}" alt="{{ _settings('SITE_TITLE') }} Logo" style="max-height: 60px; max-width: 60px;"></a>
                <a href="{{ route('front.home') }}"><img class="logo-inverse" src="{{ _logo() }}" alt="{{ _settings('SITE_TITLE') }} Logo" style="max-height: 60px; max-width: 60px;"></a>
            </div>
            <div class="form-dt">
                <div class="form-inpts checout-address-step">
                    <form>
                        <div class="form-title">
                            <h6>404 Error</h6>
                        </div>
                        <div class="form-title">
                            <h6>Page Not Found.</h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
