@extends('layouts.app')

@section('title')
    Add
@endsection

@section('content')
    <div class="row">
            <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add New Item
            </div>
            <div class="panel-body">
                {!! Form::open(['method' => 'POST', 'route' => ['materials.store']]) !!}
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::token()!!}
                        {!! Form::label('material_name', 'Item Name', ['class' => 'control-label', 'align' => 'right']) !!}
                     
                     
                          {!! Form::text('material_name', old('material_name'), ['class' => 'form-control']) !!}
                     
                       
                        
                        <p class="help-block"></p>
                        @if($errors->has('material_name'))
                            <p class="help-block">
                                {{ $errors->first('material_name') }}
                            </p>
                        @endif
                    </div>       
                </div>                 
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::token()!!}
                        {!! Form::label('lpo', 'LPO Number', ['class' => 'control-label']) !!}
                        {!! Form::text('lpo', old('lpo'), ['class' => 'form-control']) !!}
                        
                        <p class="help-block"></p>
                        @if($errors->has('lpo'))
                            <p class="help-block">
                                {{ $errors->first('lpo') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('amount_paid', 'Amount Paid', ['class' => 'control-label']) !!}
                        {!! Form::text('amount_paid', old('amount_paid'), ['class' => 'form-control']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('amount_paid'))
                            <p class="help-block">
                                {{ $errors->first('amount_paid') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('payment_date', 'Payment Date', ['class' => 'control-label']) !!}
                        {!! Form::text('payment_date', old('payment_date'), ['class' => 'form-control date']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('payment_date'))
                            <p class="help-block">
                                {{ $errors->first('payment_date') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('paid_to', 'Paid To', ['class' => 'control-label']) !!}
                        {!! Form::text('paid_to', old('paid_to'), ['class' => 'form-control']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('paid_to'))
                            <p class="help-block">
                                {{ $errors->first('paid_to') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('payment_type', 'Payment Type', ['class' => 'control-label']) !!}
                        {!! Form::text('payment_type', old('payment_type'), ['class' => 'form-control']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('payment_type'))
                            <p class="help-block">
                                {{ $errors->first('payment_type') }}
                            </p>
                        @endif
                    </div>
                </div>   
          
                {!!Form::hidden('project_id', $project->id)!!}
                {!!Form::hidden('file_id', $file->id)!!}   
                {!! Form::submit('Save',['class' => 'btn btn-success']) !!}
                <a class="btn btn-danger" href="/projects/{{$project->id}}"> Cancel</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
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