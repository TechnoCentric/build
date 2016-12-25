@extends('layouts.app')

@section('title')
{{$project->name}} Site Report
@endsection

@section('content')
    <div class="page-heading">
        <h1> <a href="/projects/{{$project->id}}/"><i class="fa fa-arrow-circle-o-left"></i></a> {{$project->name}} Site Reports</h1>                     
    </div>    

    <div class="row">
    @if(count($reports) > 0)                        
            @foreach($reports as $report) 
                <div class="col-sm-12 portlets ui-sortable">
                    <div class="widget">                                    
                        <div class="widget-header" style="background: rgba(0,0,0,0.03);border-bottom: 1px solid rgba(0,0,0,0.1);">
                            <h2>{{$report->date->format('l jS \\of F, Y ')}}</h2>                    
                        </div>
                        <div class="widget-content padding">                                                            
                            {{ $report->body }}                                        
                        </div>
                        <div class="widget-footer">
                            <div class="pull-left" style="padding: 10px !important;">
                                @unless(Auth::user()->role = 'Admin')
                                 <a href="/reports/{{$report->id}}/edit" class="btn btn-info">Edit Report</a>
                                 <a class="btn btn-danger" href="/reports/{{$report->id}}/delete" onclick="return confirm('Are you sure you want to delete this File?');">Delete Report</a>                                 
                                 @endunless    
                            </div>
                        </div>   
                                                                    
                    </div>                    
                </div>                                                               
            @endforeach                        
    @else
        <p>No entries</p>
    @endif           
    </div>
    <p style="padding-left: 15px;">                    
        <a href="/projects/{{$project->id}}/reports/create" class="btn btn-success">New Report</a>
    </p>    
@stop