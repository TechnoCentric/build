@extends('layouts.app')

@section('title')
    {{$project->name}}
@endsection

@section('content')
  <div class="page-heading">
    <h1><a href="/projects/"><i class="fa fa-arrow-circle-o-left"></i></a> {{$project->name}}</h1>
    <h3>{{$project->location}}</h3>             
  </div>  
   <div class="divider" style="border-top: 1px solid grey"></div>
   <h4 align="center"> Project Files </h4>
  <div class="container top-summary">   
	@foreach($files as $file)       
      <div class="col-lg-3 col-md-6 ">
          <div class="widget green-1">
            <div class="widget-content padding">                
              <div class="text-box">
                <p align="center" class="maindata"><a href="/projects/{{$project->id}}/files/{{$file->id}}">
                <b> ₦{{number_format($file->total)}} </b></a></p>
                <h4 align="center"><span class="animate-number" data-duration="30000'"> {{$file->name}} </span></h4>
                <div class="clearfix"></div>
              </div>
            </div>              
        </div>
      </div>            
  @endforeach
  </div> 
  <div class="divider" style="border-top: 1px solid grey"></div>
  <h4 class="page-title" align="center"> Project Details</h4>
  <div class="container top-summary">          
      <div class="col-lg-3 col-md-6 ">
          <div class="widget green-1">
            <div class="widget-content padding">                
              <div class="text-box">
                <p align="center" class="maindata">
                <b> Project Budget </b></p>
                <h4 align="center"><span class="animate-number" data-duration="30000'"> ₦{{number_format($project->budget)}} </span></h4>
                <div class="clearfix"></div>
              </div>
            </div>              
        </div>
      </div>   
      <div class="col-lg-3 col-md-6 ">
          <div class="widget orange-4">
            <div class="widget-content padding">                
              <div class="text-box">
                <p align="center" class="maindata">
                <b> Project Location </b></p>
                <h4 align="center"><span class="animate-number" data-duration="30000'"> {{$project->location}} </span></h4>
                <div class="clearfix"></div>
              </div>
            </div>              
        </div>
      </div>  
      <div class="col-lg-3 col-md-6 ">
          <div class="widget lightblue-1">
            <div class="widget-content padding">                
              <div class="text-box">
                <p align="center" class="maindata">
                <b> Current Expediture </b></p>
                <h4 align="center"><span class="animate-number" data-duration="{{number_format($files->sum('total'))}}"> ₦{{number_format($files->sum('total'))}} </span></h4>
                <div class="clearfix"></div>
              </div>
            </div>              
        </div>
      </div>               
  </div> 
  
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <p>
          <a class="btn btn-success" href="/projects/{{$project->id}}/reports">Site Reports</a>
          <a class="btn btn-info" href="/projects/{{$project->id}}/files/create">Create File</a>
          <a class="btn btn-success" href="/projects/{{$project->id}}/pdf" target="_blank">Export (PDF)</a>
          @if(Auth::user()->role = 'Admin')
            <a class="btn btn-info" href="/projects/{{$project->id}}/edit">Edit Project</a>
            <a class="btn btn-danger" href="/projects/{{$project->id}}/delete" onclick="return confirm('Are you sure you want to delete this project?');">Delete Project</a>
          @endif
        </p>
      </div>      
    </div>  
 

@endsection