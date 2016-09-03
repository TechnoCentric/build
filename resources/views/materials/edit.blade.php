@extends('layouts.app')

@section('content')
    <h3 class="page-title">Materials</h3>
    {!! Form::model($material,['method' => 'PUT', 'route' => ['materials.update', $material->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('material_type', 'Material Type', ['class' => 'control-label']) !!}
                    {!! Form::text('material_type', old('material_type'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('material_type'))
                        <p class="help-block">
                            {{ $errors->first('material_type') }}
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
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('payment_status', 'Payment Status', ['class' => 'control-label']) !!}
                    {!! Form::text('payment_status', old('payment_status'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('payment_status'))
                        <p class="help-block">
                            {{ $errors->first('payment_status') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Update',['class' => 'btn btn-danger']) !!}
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