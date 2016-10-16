@extends('layouts.app')

@section('title')
    New Report
@endsection

@section('content')
    <h3 class="page-title">Reports</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['reports.store']]) !!}
    <p>&nbsp;</p>
    <div class="row">
        <div class="col-md-3">
        
    </div>
    <div class="col-md-6">
       <div class="panel panel-default">
        <div class="panel-heading">
            New Report
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::token()!!}
                    {!! Form::label('type', 'Site', ['class' => 'control-label']) !!}
                    
                    <select class="selectpicker form-control" name="project_id">
                        <option selected="selected" value="">Select Site</option>
                        @foreach($projects as $project)
                            <option value="{{$project->id}}">{{$project->name}}</option>
                        @endforeach                       
                    </select>           
                    <p class="help-block"></p>
                    @if($errors->has('type'))
                        <p class="help-block">
                            {{ $errors->first('type') }}
                        </p>
                    @endif
                </div>
            </div>
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
                    <textarea name="body" class="form-control" rows="4"></textarea>
                    <p class="help-block"></p>
                    @if($errors->has('body'))
                        <p class="help-block">
                            {{ $errors->first('body') }}
                        </p>
                    @endif
                </div>
            </div>
            {!! Form::submit('Post',['class' => 'btn btn-primary']) !!}
            <a class="btn btn-danger" href="/projects/{{$project->id}}/reports"> Cancel</a>
            {!! Form::close() !!}  
        </div>
    </div>    
    </div>   
    <div class="col-md-3">
        
    </div> 
    </div>
@endsection


@section('javascript')
    @parent
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "yy-mm-dd"
        });
    </script>

@stop