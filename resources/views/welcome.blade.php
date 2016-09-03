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
                  <p class="maindata">TOTAL <b>PROCUREMENT AMOUNT</b></p>
                  <h2> ₦<span class="animate-number" data-duration="3000"> {{number_format($materials->sum('amount_paid'))}} </span></h2>
                  <div class="clearfix"></div>
                </div>
              </div>              
          </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="widget orange-4">
              <div class="widget-content padding">
                <div class="widget-icon">

                </div>
                <div class="text-box">
                  <p class="maindata">TOTAL <b>PENDING PAYMENTS</b></p>
                  <h2> ₦<span class="animate-number" data-value=" 384044840 " data-duration="3000"> {{number_format($pending->sum('amount_paid'))}} </span></h2>
                  <div class="clearfix"></div>
                </div>
              </div>              
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="widget darkblue-2">
              <div class="widget-content padding">
                <div class="widget-icon">

                </div>
                <div class="text-box">
                  <p class="maindata">TOTAL <b>PAID</b></p>
                  <h2><span class="animate-number" data-value=" 13 " data-duration="3000"> {{number_format($paid->sum('amount_paid'))}} </span></h2>
                  <div class="clearfix"></div>
                </div>
              </div>              
          </div>
        </div>
  </div>

  <div class="container">
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
@endsection
