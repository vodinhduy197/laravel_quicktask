@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @include('message')

                    @lang('index.check_email')
                    @lang('index.send_mail_fail'), <a href="{{ route('verification.resend') }}">@lang('index.new_request')</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
