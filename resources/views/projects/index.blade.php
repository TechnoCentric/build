@extends('layouts.app')

@section('title')
    Projects
@endsection

@section('content')

  <div id="website-statistics1" class="widget">
    <div class="widget-header transparent">
      <h2><i class="icon-chart-line"></i> <strong>Projects</strong> </h2>                
    </div>
    <div class="widget-content">
      @if(count($projects) > 0)
         <div class="row">
              <div class="col-md-12">         
             @foreach($projects as $project)
              <div class="col-sm-4 col-xs-4 col-md-4">
                <div class="thumbnail" style="height:100%">
                    <a href="/projects/{{$project->id}}">
                      <img src="/img/{{$project->picture}}" style="position: relative;float: center;width:  300px;height: 300px;
    background-position: 50% 50%;background-repeat:no-repeat;background-size:cover;" >
                    </a>
                    <div class="caption" align="center">
                      <h4>{{$project->name}}</h4>                                                     
                    </div>
                </div>
              </div>
            @endforeach
        </div>
        <div class="col-sm-12 col-xs-12 hidden-md hidden-lg">
          @foreach($projects as $project)
              <div class="col-sm-12 col-xs-12">
                <div class="thumbnail" style="height:100%">
                    <a href="/projects/{{$project->id}}">
                      <img src="/img/{{$project->picture}} " style="position: relative;float: center;width:  300px;height: 300px;
    background-position: 50% 50%;background-repeat:no-repeat;background-size:cover;" >
                    </a>
                    <div class="caption" align="center">
                      <h4>{{$project->name}}</h4>                                                     
                    </div>
                </div>
              </div>
            @endforeach
          </div>
         </div>
      @else
          <p>No Projects </p>
      @endif                   
    </div>
  </div> 
  <p>
    <a href="{{ route('projects.create') }}" class="btn btn-success">Create Project</a>
  </p>            
@endsection