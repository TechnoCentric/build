@extends('layouts.app')

@section('title')
{{$project->name}} Site Report
@endsection

@section('content')
    <div class="page-heading">
        <h1> <a href="/projects/{{$project->id}}/"><i class="fa fa-arrow-circle-o-left"></i></a> {{$project->name}} Site Reports</h1>                     
    </div>    

    <div class="row">
        <div class="col-md-12 portlets ui-sortable">
            <div class="widget">
                <div class="widget-header ">
                    <h2>Report Entries</h2>                    
                </div>
                <div class="widget-content padding">
                    @if(count($reports) > 0)
                        <table class="table table-bordered table-striped datatable">
                            <thead>
                            <tr>
                                <th>Date</th>
                            <th>Body</th>                                                   
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reports as $report)
                                <tr>
                                    <td>{{ $report->date->toFormattedDateString()}}</td>
                                    <td>{{ $report->body }}</td>                                
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No entries in table</p>
                    @endif                                                 
                </div>
                <p style="padding-left: 15px;">                    
                    <a href="/projects/{{$project->id}}/reports/create" class="btn btn-success">New Report</a>
                </p>
            </div>
        </div> 
    </div>   
@stop