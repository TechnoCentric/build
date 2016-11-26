@extends('layouts.app')

@section('title')
    New User
@endsection
@section('content')
    <h3 class="page-title">New User</h3>    

    <div class="widget">        
        <div class="widget-content padding">           
            <div id="horizontal-form">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <h4> <strong>Requirements</strong></h4>
                    <p>Only BOL Email Accounts can be used</p>
                    <p>First Name and Last names should provided in the Name field</p>
                    <p>Password should not be less than 6 Characters and should contain one number, one uppercase and one Special Character</p>
                </div>
                {!! Form::open(['method' => 'POST', 'url' => '/users', 'class' => 'form-horizontal']) !!}                
                <div class="form-group">
                      {!! Form::token()!!}
                      {!! Form::label('site', 'Role', ['class' => 'col-sm-2 control-label']) !!}   
                     <div class="col-sm-10">
                        <select class="selectpicker form-control" name="role">
                        <option selected="selected" value="">Select Role</option>
                        <option value="Admin">Admin</option>
                        <option value="Procurement">Procurement</option>  
                        <option value="Human Resources">Human Resources</option> 
                        <option value="Marketing">Marketing</option>
                        <option value="Director">Director</option>                                           
                        </select> 
                        <p class="help-block"></p>
                        @if($errors->has('role'))
                            <p class="help-block" style="color: red;">
                                {{ $errors->first('role') }}
                            </p>
                        @endif 
                    </div>                               
                </div>                                                          
                <div class="form-group">
                    {!! Form::label('email', 'Email Address', ['class' => ' col-sm-2 control-label']) !!}                                        
                    <div class="col-sm-10">
                      {!! Form::text('email', old('email'), ['class' => 'form-control date', 'placeholder' => 'BOL Email Address' ]) !!}
                        <p class="help-block"></p>
                        @if($errors->has('email'))
                            <p class="help-block" style="color: red;">
                                {{ $errors->first('email') }}
                            </p>
                        @endif     
                    </div>
                </div> 
                <div class="form-group">
                    {!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}                                        
                    <div class="col-sm-10">
                        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'First and Last Name']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('name'))
                            <p class="help-block" style="color: red;">
                                {{ $errors->first('name') }}
                            </p>
                        @endif       
                    </div>
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
                    {!! Form::submit('Create User',['class' => 'btn btn-success']) !!}
                    <a class="btn btn-danger" href="/users"> Cancel</a>
                    {!! Form::close() !!}  
                </div>
              </div>
             
            </div>
        </div>
    </div>   
@stop

