@extends('layouts.app')

@section('title')
    Edit Project
@endsection

@section('content')
    
     <div class="page-heading">
        <h1> <a href="/projects"><i class="fa fa-arrow-circle-o-left"></i></a> <strong>Edit </strong> Project</h1>                     
    </div>  
    <div class="widget">        
        <div class="widget-content padding">                        
            <div id="horizontal-form">
                {!! Form::model($project,['method' => 'PUT', 'route' => ['projects.update', $project->id]])!!}
                 {!! Form::token()!!}  
                <div class="form-group">
                    {!! Form::label('type', 'Project Type', ['class' => ' col-sm-2 control-label']) !!}
                     <div class="col-sm-10">
                        <select class="selectpicker form-control" name="type">
                        <option selected="selected" value="">Select type</option>
                        <option value="Commercial">Commercial</option>
                        <option value="Mix Development">Mix Development</option>  
                        <option value="Residential">Residential</option>                                                                  
                        </select> 
                        <p class="help-block"></p>
                        @if($errors->has('type'))
                            <p class="help-block" style="color: red;">
                                {{ $errors->first('type') }}
                            </p>
                        @endif 
                    </div>                                                   
                </div>
                <div class="form-group">                        
                    {!! Form::label('name', 'Site Name', ['class' => 'col-sm-2 control-label']) !!}
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
                <div class="form-group">
                    {!! Form::label('location', 'Site Location', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('location', old('location'), ['class' => 'form-control']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('location'))
                            <p class="help-block">
                                {{ $errors->first('location') }}
                            </p>
                        @endif
                    </div>
                </div>    
                <div class="form-group">
                    {!! Form::label('supervisor', 'Site Supervisor', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('supervisor', old('supervisor'), ['class' => 'form-control']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('supervisor'))
                            <p class="help-block">
                                {{ $errors->first('supervisor') }}
                            </p>
                        @endif
                    </div>
                </div>   
                <div class="form-group">
                    {!! Form::label('picture', 'Site picture', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::file('picture') !!}
                        <p class="help-block"></p>
                        @if($errors->has('picture'))
                            <p class="help-block">
                                {{ $errors->first('picture') }}
                            </p>
                        @endif
                    </div>
                </div> 
                <div class="form-group">
                    {!! Form::label('budget', 'Estimated Budget', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('budget', old('budget'), ['class' => 'form-control']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('budget'))
                            <p class="help-block">
                                {{ $errors->first('budget') }}
                            </p>
                        @endif
                    </div>
                </div> 
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">                    
                    {!! Form::submit('Save',['class' => 'btn btn-success']) !!}
                    <a class="btn btn-danger" href="/projects"> Cancel</a>
                    {!! Form::close() !!}  
                </div>
              </div>  
            </div>
        </div>
    </div>                                                                          
@stop
