@extends('layouts.app')

@section('title')
    {{$project->name}}
@endsection

@section('content')

    <div tabindex="-1" class="modal fade bs-example-modal-sm" role="dialog" aria-hidden="true" aria-labelledby="mySmallModalLabel" style="display: none;">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">

                                    <div class="modal-header">
                                      <button class="close" aria-hidden="true" type="button" data-dismiss="modal">×</button>
                                      <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                    </div>
                                    <div class="modal-body">
                                      ...
                                    </div>
                                  </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                              </div>
	<div class=" row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<img src="/img/{{$project->picture}}">
		</div>


        <p><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                  Standard Modal
                                </button></p>

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