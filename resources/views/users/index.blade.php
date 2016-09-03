@extends('layouts.app')

@section('content')
    <h3 class="page-title">Users</h3>
    <p>
        <a href="{{ url('users/create') }}" class="btn btn-success">Add new</a>
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
                    <th>Password</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->email }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->password }}</td>
                        
                            <td>
                                <a href="{{ url('users/$user->id/edit') }}" class="btn btn-xs btn-info">Edit</a>
                                
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