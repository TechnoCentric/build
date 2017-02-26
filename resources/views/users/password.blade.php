@extends('layouts.app')

@section('title')
    Change Password
@endsection
@section('content')
    <h3 class="page-title">Change Password</h3>    

    <div class="widget">        
        <div class="widget-content padding">           
            <div id="horizontal-form">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <h4> <strong>Requirements</strong></h4>                    
                    <p>Password should not be less than 6 Characters and should contain one number, one uppercase and one Special Character</p>
                </div>
                {!! Form::open(['method' => 'POST', 'url' => '/user/password', 'class' => 'form-horizontal']) !!}                
                <div class="form-group">
                      {!! Form::token()!!}                                      
                </div>                                                                                          
                <div class="form-group">
                    {!! Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) !!}                                        
                    <div class="col-sm-10">
                        {!! Form::password('password',  ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('password'))
                            <p class="help-block" style="color: red;">
                                {{ $errors->first('password') }}
                            </p>
                        @endif       
                    </div>
                </div>    
                 <div class="form-group">
                    {!! Form::label('password_confirm', 'Confirm Password', ['class' => 'col-sm-2 control-label']) !!}                                        
                    <div class="col-sm-10">
                        {!! Form::password('password_confirmation',  ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('password_confirmation'))
                            <p class="help-block" style="color: red;">
                                {{ $errors->first('password_confirmation') }}
                            </p>
                        @endif       
                    </div>
                </div>                                    
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">                    
                    {!! Form::submit('Change',['class' => 'btn btn-success']) !!}
                    <a class="btn btn-danger" href="/"> Cancel</a>
                    {!! Form::close() !!}  
                </div>
              </div>
             
            </div>
        </div>
    </div>   
@stop

