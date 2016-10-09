@extends('layouts.app')

@section('title')
    {{$project->name}}
@endsection

@section('content')
   <h3 class="page-title" align="center"> {{$project->name}}</h3>
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
                <h2 align="center"><span class="animate-number" data-duration="30000'"> {{$file->name}} </span></h2>
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
                <h2 align="center"><span class="animate-number" data-duration="30000'"> ₦{{number_format($project->budget)}} </span></h2>
                <div class="clearfix"></div>
              </div>
            </div>              
        </div>
      </div>   
      <div class="col-lg-3 col-md-6 ">
          <div class="widget green-1">
            <div class="widget-content padding">                
              <div class="text-box">
                <p align="center" class="maindata">
                <b> Project Location </b></p>
                <h2 align="center"><span class="animate-number" data-duration="30000'"> {{$project->location}} </span></h2>
                <div class="clearfix"></div>
              </div>
            </div>              
        </div>
      </div>  
      <div class="col-lg-3 col-md-6 ">
          <div class="widget green-1">
            <div class="widget-content padding">                
              <div class="text-box">
                <p align="center" class="maindata">
                <b> Current Expediture </b></p>
                <h2 align="center"><span class="animate-number" data-duration="30000'"> ₦{{number_format($files->sum('total'))}} </span></h2>
                <div class="clearfix"></div>
              </div>
            </div>              
        </div>
      </div>               
  </div> 
  <div class="row">
    <div class="col-md-2 col-s-3 col-xs-3">
    <p style="margin:25px; padding:10px;"><a class="btn btn-primary" href="/projects/{{$project->id}}/reports">
                                 Site Reports
                                </a></p>  
  </div>  
  <div class="col-md-2 col-xs-3 col-s-3">
    <p style="margin:25px; padding:10px;"><a class="btn btn-primary" href="/projects/{{$project->id}}/files/create">
                                 Create File
                                </a></p>  
  </div>
  </div>

@endsection