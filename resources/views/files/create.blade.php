@extends('layouts.app')

@section('title')
    Create File
@endsection

@section('content')    
    @section('content')
    
     <div class="page-heading">
        <h1> <a href="/projects/{{$project->id}}/"><i class="fa fa-arrow-circle-o-left"></i></a> <strong>New </strong> File</h1>                     
    </div>      
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 portlets ui-sortable">
        
            <div class="widget">               
                <div class="widget-content padding">                            
                    <div id="basic-form">
                        {!! Form::open(['method' => 'POST', 'url' => '/files', 'files' => true]) !!}
                            {!! Form::token()!!}  
                            <div class="form-group">                        
                                {!! Form::label('name', 'File Name', ['class' => 'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
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
                            {!! Form::submit('Create',['class' => 'btn btn-success']) !!}
                            <a class="btn btn-danger" href="/projects/{{$project->id}}"> Cancel</a>
                        {!! Form::close() !!}  
                    </div>
                </div>
            </div>
            
        </div> 
        <div class="col-sm-3"></div>     
    </div>
@endsection

