@extends('layouts.app')

@section('title')
Dashboard
@endsection



@section('content')
<div class="container top-summary">
    <div class="col-lg-3 col-md-6">
            <div class="widget lightblue-1">
              <div class="widget-content padding">
                <div class="widget-icon">

                </div>
                <div class="text-box">
                  <p class="maindata">TOTAL <b>PROCUREMENTS</b></p>
                  <h2> <span class="animate-number" data-value=" {{count($materials)}} " data-duration="3000">{{count($materials)}}</span></h2>
                  <div class="clearfix"></div>
                </div>
              </div>              
          </div>
    </div>
  <div class="col-lg-3 col-md-6">
            <div class="widget green-1">
              <div class="widget-content padding">
                <div class="widget-icon">

                </div>
                <div class="text-box">
                  <p class="maindata">TOTAL <b> EXPENSES </b></p>
                  <h2> ₦<span class="animate-number" data-duration="3000"> {{number_format($materials->sum('amount_paid'))}} </span></h2>
                  <div class="clearfix"></div>
                </div>
              </div>              
          </div>
  </div>

  <div class="col-lg-3 col-md-6">
            <div class="widget green-1">
              <div class="widget-content padding">
                <div class="widget-icon">

                </div>
                <div class="text-box">
                  <p class="maindata"> <b> PROJECT SITES </b></p>
                  <h2> <span class="animate-number" data-duration="3000"> {{number_format($projects->count())}} </span></h2>
                  <div class="clearfix"></div>
                </div>
              </div>              
          </div>
  </div>
                   
  </div>

  <div class="container">
      <div class="col-md-12 hidden-sm hidden-xs">         
            @foreach($projects as $project)
              <div class="col-sm-4 col-xs-4 col-md-4">
                <div class="thumbnail" style="height:100%">
                    <a href="/projects/{{$project->id}}">
                      <img src="/img/{{$project->picture}}" style="position: relative;float: left;width:  600px;height: 300px;
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
                      <img src="/img/{{$project->picture}} " style="position: relative;float: left;width:  600px;height: 300px;
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
@endsection
