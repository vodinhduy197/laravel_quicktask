@extends('layouts.app')

@section('content')

    <div class="panel-body">
        {!! Form::open(['method'=>'POST',  'class'=>'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('task', trans('index.label_task'), ['class' => 'col-sm-3 control-label']) !!}

                <div class="col-sm-6">
                    {!! Form::text('name', '', ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::submit(trans('index.btn_addTask'), ['class' => 'btn btn-default']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>

@endsection
