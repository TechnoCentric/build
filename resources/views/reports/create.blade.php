@extends('layouts.app')

@section('title')
    New Report
@endsection

@section('content')
    <div class="page-heading">
        <h1> <a href="/projects/{{$project->id}}/"><i class="fa fa-arrow-circle-o-left"></i></a> <strong>Post</strong> New Report</h1>                     
    </div>  
    <div class="widget">        
        <div class="widget-content padding">                        
            <div id="horizontal-form">
                {!! Form::open(['method' => 'POST', 'route' => ['reports.store'], 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    <p class="col-sm-2" align="right">Site:</p> 
                    <p class="col-sm-10"><strong>{{$project->name}}</strong></p>
                </div>
                <div class="form-group">
                      {!! Form::token()!!}     
                     {!! Form::label('date', 'Date', ['class' => 'control-label col-sm-2']) !!}                                       
                    <div class="col-sm-10">
                        {!! Form::text('date', old('date'), ['class' => 'form-control date']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('date'))
                            <p class="help-block">
                                {{ $errors->first('date') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'Report Details', ['class' => 'col-sm-2 control-label']) !!}                    
                    <div class="col-sm-10">
                      <textarea name="body" class="form-control" rows="4"></textarea>
                            <p class="help-block"></p>
                            @if($errors->has('body'))
                                <p class="help-block">
                                    {{ $errors->first('body') }}
                                </p>
                            @endif
                    </div>
                </div>                                  
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {!!Form::hidden('project_id', $project->id)!!}
                    {!! Form::submit('Post',['class' => 'btn btn-success']) !!}
                    <a class="btn btn-danger" href="/projects/{{$project->id}}/reports"> Cancel</a>
                    {!! Form::close() !!}  
                </div>
              </div>
             
            </div>
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