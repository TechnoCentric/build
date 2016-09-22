@extends('layouts.app')

@section('title')
    Materials Bulk Upload
@endsection

@section('content')
    <h3 class="page-title"> Materials Bulk Upload</h3>

    {!! Form::open(['method' => 'POST', 'url' => '/bulk', 'files' => true]) !!}
      
    <div class="row">
        <div class="col-xs-4 col-md-4"></div>
        <div class="col-xs-4 col-md-4 form-group">
            {!! Form::token()!!}            
             <select class="selectpicker form-control" name="project_id">
                        <option selected="selected" value="">Select Site</option>
                        @foreach($projects as $project)
                            <option value="{{$project->id}}">{{$project->name}}</option>
                        @endforeach                       
                    </select>             
            <p class="help-block"></p>
            @if($errors->has('project_id'))
                <p class="help-block">
                    {{ $errors->first('project_id') }}
                </p>
            @endif
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
    </div>
    <div class="col-xs-4 col-md-4"></div>
    
    {!! Form::close() !!}
@stop

