@extends('layouts.app')

@section('title')
    Create File
@endsection

@section('content')    
    @section('content')
    
     <div class="page-heading">
        <h1> <a href="/projects/{{$project->id}}/"><i class="fa fa-arrow-circle-o-left"></i></a> <strong>New </strong> File</h1>                     
    </div>      
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 portlets ui-sortable">
        
            <div class="widget">               
                <div class="widget-content padding">                            
                    <div id="basic-form">
                        {!! Form::open(['method' => 'POST', 'url' => '/files', 'files' => true]) !!}
                            {!! Form::token()!!}  
                            <div class="form-group" style="padding-bottom: 5px;">                        
                                {!! Form::label('name', 'File Name', ['class' => 'col-sm-2 control-label']) !!}
                                <div class="col-sm-9 input">                                   
                                    <input type="text"  name="name[]" value="">  <a href="javascript:void(0);" class="add_button"><i class="fa fa-plus" aria-hidden="true"></i></a>                     
                                    <p class="help-block"></p>
                                    @if($errors->has('name'))
                                        <p class="help-block">
                                            {{ $errors->first('name') }}
                                        </p>
                                    @endif                                   
                                </div>                    
                            </div>
                            {!!Form::hidden('project_id', $project->id)!!}
                            {!!Form::hidden('total', 0)!!}            
                            {!! Form::submit('Create',['class' => 'btn btn-success']) !!}
                            <a class="btn btn-danger" href="/projects/{{$project->id}}"> Cancel</a>
                        {!! Form::close() !!}  
                    </div>
                </div>
            </div>
            
        </div> 
        <div class="col-sm-3"></div>     
    </div>
@endsection
@section('javascript')
    @parent
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">      
        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.input'); //Input field wrapper
            var fieldHTML = '<div style="padding-bottom:5px;"><input type="text" name="name[]" value="" /><a href="javascript:void(0);" class="remove_button" title="Remove field" style="padding-left:4px;"><i class="fa fa-minus" aria-hidden="true"></i></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                } else alert('You cannot create more than 10 fields');
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
    </script>
@endsection
