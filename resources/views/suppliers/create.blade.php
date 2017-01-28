@extends('layouts.app')

@section('title')
    New Supplier
@endsection

@section('content')
    <div class="page-heading">
        <h1> <a href="/suppliers/"><i class="fa fa-arrow-circle-o-left"></i></a> <strong>Create</strong> New Supplier</h1>                     
    </div>  
    <div class="widget">        
        <div class="widget-content padding">                        
            <div id="horizontal-form">
                {!! Form::open(['method' => 'POST', 'route' => ['suppliers.store'], 'class' => 'form-horizontal']) !!}                
                <div class="form-group">
                      {!! Form::token()!!}     
                     {!! Form::label('name', 'Name', ['class' => 'control-label col-sm-2']) !!}                                       
                    <div class="col-sm-10">
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('name'))
                            <p class="help-block" style="color: red">
                                {{ $errors->first('name') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group">                         
                     {!! Form::label('phone', 'Phone Number', ['class' => 'control-label col-sm-2']) !!}                                       
                    <div class="col-sm-10">
                        {!! Form::text('phone', old('phone'), ['class' => 'form-control']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('phone'))
                            <p class="help-block" style="color: red">
                                {{ $errors->first('phone') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('address', 'Address', ['class' => 'col-sm-2 control-label']) !!}                    
                    <div class="col-sm-10">
                      <textarea name="address" class="form-control" rows="4"></textarea>
                            <p class="help-block"></p>
                            @if($errors->has('address'))
                                <p class="help-block" style="color: red">
                                    {{ $errors->first('address') }}
                                </p>
                            @endif
                    </div>
                </div>                                  
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">                    
                    {!! Form::submit('Create',['class' => 'btn btn-success']) !!}
                    <a class="btn btn-danger" href="/suppliers"> Cancel</a>
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