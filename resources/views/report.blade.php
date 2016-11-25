@extends('layouts.app')

@section('title')
   Reports Generation
@endsection

@section('content')
     <div class="page-heading">
        <h1> <a href="/"><i class="fa fa-arrow-circle-o-left"></i></a> <strong>Reports</strong> Generation</h1>                     
    </div>  
    <div class="widget">        
        <div class="widget-content padding">                        
            <div id="horizontal-form">
                {!! Form::open(['method' => 'POST', 'url' => '/results', 'class' => 'form-horizontal']) !!}                
                <div class="form-group">
                      {!! Form::token()!!}
                      {!! Form::label('site', 'Select Site', ['class' => 'col-sm-2 control-label']) !!}   
                     <div class="col-sm-10">
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
                </div>                                                          
                <div class="form-group">
                    {!! Form::label('report_date', 'From', ['class' => ' col-sm-2 control-label']) !!}                                        
                    <div class="col-sm-10">
                      {!! Form::text('report_date', old('report_date'), ['class' => 'form-control date']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('report_date'))
                            <p class="help-block">
                                {{ $errors->first('report_date') }}
                            </p>
                        @endif     
                    </div>
                </div> 
                <div class="form-group">
                    {!! Form::label('end_date', 'To', ['class' => 'col-sm-2 control-label']) !!}                                        
                    <div class="col-sm-10">
                        {!! Form::text('end_date', old('end_date'), ['class' => 'form-control date']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('end_date'))
                            <p class="help-block">
                                {{ $errors->first('end_date') }}
                            </p>
                        @endif       
                    </div>
                </div>                                  
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">                    
                    {!! Form::submit('Generate',['class' => 'btn btn-success']) !!}
                    <a class="btn btn-danger" href="/"> Cancel</a>
                    {!! Form::close() !!}  
                </div>
              </div>
             
            </div>
        </div>
    </div>
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

