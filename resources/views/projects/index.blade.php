@extends('layouts.app')

@section('title')
    Projects
@endsection

@section('content')
    <h3 class="page-title">Projects</h3>
    <p>
        <a href="{{ route('projects.create') }}" class="btn btn-success">Add new</a>
    </p>
    @if(count($projects) > 0)
       <div class="row">
            <div class="col-md-12">         
            @foreach($projects as $project)
              <div class="col-sm-4 col-xs-4 col-md-4">
                <div class="thumbnail" style="height:100%">
                    <a href="/projects/{{$project->id}}">
                      <img src="/img/{{$project->picture}} " width="200" >
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
@endsection