@extends('layouts.app')

@section('title')
    Materials
@endsection

@section('content')
    <h3 class="page-title">Materials</h3>
    <p>
        <a href="{{ route('materials.create') }}" class="btn btn-success">Add new</a>
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
                        <th>Material Type</th>
                    <th>Amount Paid</th>
                    <th>Payment Date</th>
                    <th>Paid To</th>
                    <th>Payment Type</th>
                    <th>Payment Status</th>
                    
                        <th>&nbsp;</th>
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
                        
                            <td>
                                <a href="{{ route('materials.edit',[$material->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                {!! Form::open(array(
            'style' => 'display: inline-block;',
            'method' => 'DELETE',
            'onsubmit' => "return confirm('".trans("Are you sure?")."');",
            'route' => ['materials.destroy', $material->id])) !!}
{!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
{!! Form::close() !!}
                            </td>
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