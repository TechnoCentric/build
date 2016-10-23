@extends('layouts.app')

@section('title')
    Materials Bulk Upload
@endsection

@section('content')
    <h3 class="page-title"> {{$file->name}} Bulk Upload</h3>

    {!! Form::open(['method' => 'POST', 'url' => '/bulk', 'files' => true]) !!}
      
    <div class="row">
        <div class="col-xs-4 col-md-4"></div>
        <div class="col-xs-4 col-md-4 form-group">
            {!! Form::token()!!}            
             {!!Form::hidden('project_id', $project->id)!!}
             {!!Form::hidden('file_id', $file->id)!!}
        </div>
         <div class="col-xs-4 col-md-4"></div>
    </div>    
    
    <div class="row">
         <div class="col-xs-2 col-md-2"></div>
         <div class="col-xs-2 col-md-2" ><p align="right">{!! Form::label('file', 'Excel File', ['class' => 'control-label']) !!}</p></div>
        <div class="col-xs-4 col-md-4 form-group">            
            {!! Form::file('file') !!}
            <p class="help-block"></p>
            @if($errors->has('file'))
                <p class="help-block">
                    {{ $errors->first('file') }}
                </p>
            @endif
        </div>
         <div class="col-xs-4 col-md-4"></div>
    </div>    

    <div class="col-xs-4 col-md-4"></div>
    <div class="col-xs-4 col-md-4">
        {!! Form::submit('Upload',['class' => 'btn btn-success']) !!}
        <a class="btn btn-danger" href="/projects/{{$file->project_id}}/files/{{$file->id}}">Cancel</a>
    </div>
    <div class="col-xs-4 col-md-4"></div>
    
    {!! Form::close() !!}
@stop

