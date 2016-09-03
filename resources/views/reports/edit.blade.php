@extends('layouts.app')

@section('content')
    <h3 class="page-title">Reports</h3>
    {!! Form::model($report,['method' => 'PUT', 'route' => ['reports.update', $report->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('date', 'Date', ['class' => 'control-label']) !!}
                    {!! Form::text('date', old('date'), ['class' => 'form-control date']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date'))
                        <p class="help-block">
                            {{ $errors->first('date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('body', 'Report Details', ['class' => 'control-label']) !!}
                    {!! Form::text('body', old('body'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('body'))
                        <p class="help-block">
                            {{ $errors->first('body') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Update',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "yy-mm-dd"
        });
    </script>

@stop