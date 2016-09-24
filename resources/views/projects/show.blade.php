@extends('layouts.app')

@section('title')
    {{$project->name}}
@endsection

@section('content')
    
	<div class=" row" style="margin-bottom:10px;">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<img src="/img/{{$project->picture}}">
		</div>


        <p style="margin:25px; padding:10px;"><a class="btn btn-primary" href="/projects/{{$project->id}}/reports">
                                 Site Reports
                                </a></p>

		<div class="col-md-12 col-sm-12 col-xs-12">
			<table class="table table-bordered table-striped datatable">
                    <thead>
                    <tr>
                    <th>Material Type</th>
                    <th>Amount Paid</th>
                    <th>Payment Date</th>
                    <th>Paid To</th>
                    <th>Payment Type</th>
                    <th>Payment Status</th>
                                            
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($materials as $material)
                        <tr>
                            <td>{{ $material->material_type }}</td>
                        <td>&#8358;{{ number_format($material->amount_paid, 2) }}</td>
                        <td>{{ $material->payment_date->format('d-m-Y')}}</td>
                        <td>{{ $material->paid_to }}</td>
                        <td>{{ $material->payment_type }}</td>
                        <td>{{ $material->payment_status }}</td>
                        
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
		</div>
	</div>

@endsection