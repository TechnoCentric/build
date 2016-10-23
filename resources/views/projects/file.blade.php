@extends('layouts.app')

@section('title')
{{$file->name}}
@endsection

@section('content')
    <div class="page-heading">
        <h1> <a href="/projects/{{$file->project_id}}/"><i class="fa fa-arrow-circle-o-left"></i></a> {{$file->name}} Files</h1>
        <h3>Files under the {{$file->name}} Category</h3>             
    </div>    

    <div class="row">
        <div class="col-md-12 portlets ui-sortable">
            <div class="widget">
                <div class="widget-header ">
                    <h2>Basic Styles</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    @if(count($materials) > 0)
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
                    @else
                        <p>No entries in table</p>
                    @endif                                                 
                </div>
                <p style="padding-left: 15px;">
                    <a href="/projects/{{$project->id}}/files/{{$file->id}}/bulk" class="btn btn-success">Bulk Upload</a>
                    <a href="/projects/{{$project->id}}/files/{{$file->id}}/materials/create" class="btn btn-success">Add new</a>
                </p>
            </div>
        </div> 
    </div>   
@stop