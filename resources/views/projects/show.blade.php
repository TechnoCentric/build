@extends('layouts.app')

@section('title')
    {{$project->name}}
@endsection

@section('content')
  <div class="container top-summary"> 
	@foreach($materials as $material)       
      <div class="col-lg-3 col-md-6">
          <div class="widget green-1">
            <div class="widget-content padding">                
              <div class="text-box">
                <p align="center" class="maindata" href="/projects/{{$project->id}}/materials"><b>{{$material->material_type}}</b></p>
                <h2 > ₦<span class="animate-number" data-duration="'{{number_format($cement->sum('amount_paid'))}}'"> {{number_format($cement->sum('amount_paid'))}} </span></h2>
                <div class="clearfix"></div>
              </div>
            </div>              
        </div>
      </div>            
  @endforeach
  </div>  
<p style="margin:25px; padding:10px;"><a class="btn btn-primary" href="/projects/{{$project->id}}/reports">
                                 Site Reports
                                </a></p>		

@endsection