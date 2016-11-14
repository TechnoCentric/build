@extends('layouts.app')

@section('title')
    Materials Bulk Upload
@endsection

@section('content')
    <div class="page-heading">
        <h1> <a href="/projects/{{$project->id}}/files/{{$file->id}}"><i class="fa fa-arrow-circle-o-left"></i></a> <strong>{{$file->name}}</strong> Bulk Upload</h1>                     
    </div>      
    <div class="widget">        
        <div class="widget-content padding">                        
            <div id="horizontal-form">
                 {!! Form::open(['method' => 'POST', 'url' => '/bulk', 'files' => true]) !!}                      
                    {!! Form::token()!!}            
                    {!!Form::hidden('project_id', $project->id)!!}
                    {!!Form::hidden('file_id', $file->id)!!}                    
                <div class="form-group">
                    <div class="col-sm-2"></div>
                     
                    <div class="col-sm-10">            
                        {!! Form::file('file', null, ['class' => 'form-control']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('file'))
                            <p class="help-block">
                                {{ $errors->first('file') }}
                            </p>
                        @endif
                    </div>                    
                </div>    

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {!! Form::submit('Upload',['class' => 'btn btn-success']) !!}
                        <a class="btn btn-danger" href="/projects/{{$file->project_id}}/files/{{$file->id}}">Cancel</a>
                    </div>
                </div>                
                {!! Form::close() !!}
            </div>
        </div>
    </div>   
@stop

