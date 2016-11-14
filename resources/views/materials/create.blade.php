@extends('layouts.app')

@section('title')
    Add
@endsection

@section('content')
    
     <div class="page-heading">
        <h1> <a href="/projects/{{$project->id}}/files/{{$file->id}}"><i class="fa fa-arrow-circle-o-left"></i></a> <strong>Add</strong> New Item</h1>                     
    </div>  
    <div class="widget">        
        <div class="widget-content padding">                        
            <div id="horizontal-form">
                {!! Form::open(['method' => 'POST', 'route' => ['materials.store'], 'class' => 'form-horizontal']) !!}
                 {!! Form::token()!!}  
                <div class="form-group">
                    {!! Form::label('material_name', 'Item Name', ['class' => ' col-sm-2 control-label']) !!}
                     <div class="col-sm-8">
                         {!! Form::text('material_name', old('material_name'), ['class' => 'form-control']) !!}                                                                
                        <p class="help-block"></p>
                        @if($errors->has('material_name'))
                            <p class="help-block">
                                {{ $errors->first('material_name') }}
                            </p>
                        @endif
                     </div>                                               
                </div>
                <div class="form-group">                        
                    {!! Form::label('lpo', 'LPO Number', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('lpo', old('lpo'), ['class' => 'form-control']) !!}                        
                        <p class="help-block"></p>
                        @if($errors->has('lpo'))
                            <p class="help-block">
                                {{ $errors->first('lpo') }}
                            </p>
                        @endif  
                    </div>                    
                </div>
                <div class="form-group">
                    {!! Form::label('amount_paid', 'Amount Paid', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('amount_paid', old('amount_paid'), ['class' => 'form-control']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('amount_paid'))
                            <p class="help-block">
                                {{ $errors->first('amount_paid') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('payment_date', 'Payment Date', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('payment_date', old('payment_date'), ['class' => 'form-control date']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('payment_date'))
                            <p class="help-block">
                                {{ $errors->first('payment_date') }}
                            </p>
                        @endif
                    </div>
                </div> 
                <div class="form-group">
                    {!! Form::label('paid_to', 'Paid To', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('paid_to', old('paid_to'), ['class' => 'form-control']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('paid_to'))
                            <p class="help-block">
                                {{ $errors->first('paid_to') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('payment_type', 'Payment Type', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('payment_type', old('payment_type'), ['class' => 'form-control']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('payment_type'))
                            <p class="help-block">
                                {{ $errors->first('payment_type') }}
                            </p>
                        @endif
                    </div>
                </div>   
                <div class="form-group">
                    {!! Form::label('contractor', 'Contractor', ['class' => ' col-sm-2 control-label']) !!}
                     <div class="col-sm-8">
                         {!!Form::checkbox('contractor', 'value', ['class' => 'form-control']) !!}                                                                
                        <p class="help-block"></p>
                        @if($errors->has('contractor'))
                            <p class="help-block">
                                {{ $errors->first('contractor') }}
                            </p>
                        @endif
                     </div>                                               
                </div>                              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    {!!Form::hidden('project_id', $project->id)!!}
                    {!!Form::hidden('file_id', $file->id)!!}   
                    {!! Form::submit('Save',['class' => 'btn btn-success']) !!}
                    <a class="btn btn-danger" href="/projects/{{$project->id}}/files/{{$file->id}}"> Cancel</a>
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