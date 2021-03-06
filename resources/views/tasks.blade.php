@extends('layouts.app')

@section('content')

    <div class="panel-body col col-8 border-bottom border-primary">
        @include('message')

        {!! Form::open(['method'=>'POST', 'class'=>'form-horizontal', 'task.route' => 'store']) !!}
            <div class="form-group">
                {!! Form::label('task', trans('index.label_task'), ['class' => 'col-sm-3 control-label']) !!}

                <div class="col-sm-6">
                    {!! Form::text('name', '', ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::submit(trans('index.btn_add_task'), ['class' => 'btn btn-default']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>

    @if (count($tasks) > config('setting.number_default'))
        <div class="panel panel-default col col-8">
            <div class="panel-heading">
                <strong>@lang('index.panel-heading')</strong>
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                    </thead>

                    <tbody>
                    @foreach ($tasks as $task)
                        {!! Form::open(['route' => ['task.destroy', $task->id], 'method' => 'DELETE']) !!}
                            <tr>
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <td class="float-right">
                                    {!! Form::submit(trans('index.btn_del_task'), ['class' => 'btn btn-danger']) !!}
                                </td>
                            </tr>
                        {!! Form::close() !!}
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
