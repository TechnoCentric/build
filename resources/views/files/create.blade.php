@extends('layouts.app')

@section('title')
    Create File
@endsection

@section('content')    
    {!! Form::open(['method' => 'POST', 'route' => ['files.store']]) !!}
    <p>&nbsp;</p>
    <div class="row">
        <div class="col-md-3">
        
    </div>
    <div class="col-md-6">
       <div class="panel panel-default">
        <div class="panel-heading">
            New File
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::token()!!}                                                       
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'name', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            {!!Form::hidden('project_id', $project->id)!!}
            {!!Form::hidden('total', 0)!!}            
            {!! Form::submit('Create',['class' => 'btn btn-primary']) !!}
            <a class="btn btn-danger" href="/projects/{{$project->id}}"> Cancel</a>
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