@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('index.card-header')</div>

                <div class="card-body">
                    @include('message')

                    @lang('index.login-message')
                    <a href="{{ route('task.index') }}" class="btn btn-success text-white">@lang('index.label_task')</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
