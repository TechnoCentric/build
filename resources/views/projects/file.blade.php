@extends('layouts.app')

@section('title')
{{$file->name}}
@endsection

@section('content')
    <h3 class="page-title"> {{$file->name}} </h3>
    <p>
        <a href="/projects/{{$project->id}}/files/{{$file->id}}/materials/create" class="btn btn-success">Add new</a>
    </p>
    @if(count($materials) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                List
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped datatable">
                    <thead>
                    <tr>
                        <th>Item Name</th>
                    <th>Amount Paid</th>
                    <th>Payment Date</th>
                    <th>Paid To</th>
                    <th>Payment Type</th>                                                               
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($materials as $material)
                        <tr>
                            <td>{{ $material->material_name }}</td>
                        <td>&#8358;{{ number_format($material->amount_paid, 2) }}</td>
                        <td>{{ $material->payment_date->toFormattedDateString()}}</td>
                        <td>{{ $material->paid_to }}</td>
                        <td>{{ $material->payment_type }}</td>                                                                           
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