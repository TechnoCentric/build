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
                  <div class="thumbnail" style="height:230px;">
                      <a href="/projects/{{$project->id}}">
                        <img src="/img/{{$project->picture}}" class="img-responsive">
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