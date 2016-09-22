@extends('layouts.app')

@section('title')
   Reports Generation
@endsection

@section('content')
    <h3 class="page-title"> Reports Generation</h3>

    {!! Form::open(['method' => 'POST', 'url' => '/results']) !!}
      {{ csrf_field() }}
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
         <div class="col-xs-2 col-md-2" ><p align="right"> {!! Form::label('report_date', 'From', ['class' => 'control-label']) !!}</p></div>
        <div class="col-xs-4 col-md-4 form-group">                       
            {!! Form::text('report_date', old('report_date'), ['class' => 'form-control date']) !!}
            <p class="help-block"></p>
            @if($errors->has('report_date'))
                <p class="help-block">
                    {{ $errors->first('report_date') }}
                </p>
            @endif            
        </div>
         <div class="col-xs-4 col-md-4"></div>
    </div>    

    <div class="row">
         <div class="col-xs-2 col-md-2"></div>
         <div class="col-xs-2 col-md-2" ><p align="right"> {!! Form::label('end_date', 'To', ['class' => 'control-label']) !!}</p></div>
        <div class="col-xs-4 col-md-4 form-group">                       
            {!! Form::text('end_date', old('end_date'), ['class' => 'form-control date']) !!}
            <p class="help-block"></p>
            @if($errors->has('end_date'))
                <p class="help-block">
                    {{ $errors->first('end_date') }}
                </p>
            @endif            
        </div>
         <div class="col-xs-4 col-md-4"></div>
    </div>    

    <div class="col-xs-4 col-md-4"></div>
    <div class="col-xs-4 col-md-4">
        {!! Form::submit('Generate',['class' => 'btn btn-success']) !!}
    </div>
    <div class="col-xs-4 col-md-4"></div>
    
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

