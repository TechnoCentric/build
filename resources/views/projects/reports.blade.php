@extends('layouts.app')

@section('title')
{{$project->name}} Site Report
@endsection

@section('content')
    <h3 class="page-title"> {{$project->name}} Site Reports</h3>
    <p>
        <a href="{{ route('reports.create') }}" class="btn btn-success">Add new</a>
    </p>
    @if(count($reports) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                List
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped datatable">
                    <thead>
                    <tr>
                        <th>Date</th>
                    <th>Report Details</th>                                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reports as $report)
                        <tr>
                            <td>{{ $report->date->toFormattedDateString() }}</td>
                        <td>{{ $report->body }}</td>
                                                    
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <p>No entries in table</p>
    @endif
@stop