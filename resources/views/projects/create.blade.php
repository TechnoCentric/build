@extends('layouts.app')

@section('title')
    Create Project
@endsection

@section('content')
    <h3 class="page-title">Create a Project</h3>
    {!! Form::open(['method' => 'POST', 'url' => '/projects', 'files' => true]) !!}
      
    <div class="row">
        <div class="col-xs-12 form-group">
            {!! Form::token()!!}
            {!! Form::label('type', 'Project Type', ['class' => 'control-label']) !!}
            {!! Form::select('type', array('Residential' => 'Residential', 'Commercial' => 'Commercial', 'Mix Development' => 'Mix Development'), null, ['placeholder' => 'Project Type', 'class' => 'form-control']) !!}            
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
            {!! Form::label('name', 'Project Name', ['class' => 'control-label']) !!}
            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
            <p class="help-block"></p>
            @if($errors->has('name'))
                <p class="help-block">
                    {{ $errors->first('name') }}
                </p>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 form-group">
            {!! Form::label('location', 'Project Location', ['class' => 'control-label']) !!}
            {!! Form::text('location', old('location'), ['class' => 'form-control']) !!}
            <p class="help-block"></p>
            @if($errors->has('location'))
                <p class="help-block">
                    {{ $errors->first('location') }}
                </p>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 form-group">
            {!! Form::label('supervisor', 'Project Supervisor', ['class' => 'control-label']) !!}
            {!! Form::text('supervisor', old('supervisor'), ['class' => 'form-control']) !!}
            <p class="help-block"></p>
            @if($errors->has('supervisor'))
                <p class="help-block">
                    {{ $errors->first('supervisor') }}
                </p>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 form-group">
            {!! Form::label('picture', 'Project Picture', ['class' => 'control-label']) !!}
            {!! Form::file('picture') !!}
            <p class="help-block"></p>
            @if($errors->has('picture'))
                <p class="help-block">
                    {{ $errors->first('picture') }}
                </p>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 form-group">
            {!! Form::label('budget', 'Set Budget', ['class' => 'control-label']) !!}
            {!! Form::text('budget', old('budget'), ['class' => 'form-control']) !!}
            <p class="help-block"></p>
            @if($errors->has('budget'))
                <p class="help-block">
                    {{ $errors->first('budget') }}
                </p>
            @endif
        </div>
    </div>
      


    {!! Form::submit('Save',['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@stop

