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
                  <div class="thumbnail" style="height:230px !important;">
                      <a href="/projects/{{$project->id}}">
                        <img src="/img/{{$project->picture}}" height="300" width="300">
                      </a>
                      <div class="caption" align="center">
                        <h3>{{$project->name}}</h3>                                                     
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