@extends('layouts.app')

@section('title')
	Users
@endsection

@section('content')

{!!$dataTable->table()!!} 
 <a href="{{ url('users/create') }}" class="btn btn-success">New User</a>
@endsection

@section('javascript')
@parent
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!!$dataTable->scripts()!!} 
@endsection