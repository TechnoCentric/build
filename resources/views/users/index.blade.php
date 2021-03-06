@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')
    <h3 class="page-title">Users</h3>
    <p>
        <a href="{{ url('users/create') }}" class="btn btn-success">New User</a>
    </p>
    @if(count($users) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                List
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped datatable">
                    <thead>
                    <tr>
                        <th>Email</th>
                    <th>Name</th>
                    <th>Role</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{$user->role}} </td>                                                                        
                            <td>
                                <a href="{{$user->id}}/edit" class="btn btn-xs btn-info">Edit</a>
                                
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

     {{$dataTable->table()}} 
@stop
@section('javascript')
@parent
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>
    {{$dataTable->scripts()}} 
@endsection