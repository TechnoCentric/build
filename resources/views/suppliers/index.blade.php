@extends('layouts.app')

@section('title')
Suppliers
@endsection

@section('content')
    <div class="page-heading">
        <h1> <a href="/"><i class="fa fa-arrow-circle-o-left"></i></a> Suppliers</h1>                     
    </div>    

    <div class="row">
        <div class="col-md-12 portlets ui-sortable">
            <div class="widget">
                <div class="widget-header ">
                    <h2>List</h2>                    
                </div>                
                <div class="widget-content padding">                    
                    @if(count($suppliers) > 0)
                        <div class="table-responsive">
                            <table id="ent" class="table table-bordered table-striped datatable">
                                <thead>
                                <tr>
                                    <th>Name</th>                                    
                                    <th>Phone</th>                                    
                                    <th>Address</th>                                                               
                                </tr>
                                </thead>
                                @foreach($suppliers as $supplier)
                                <tr>
                                   <td>{{$supplier->name}} </td>                                   
                                   <td> {{$supplier->phone}} </td>                                   
                                   <td> {{$supplier->address}} </td> 
                                </tr>
                                @endforeach                          
                            </table>
                        </div>
                    @else
                        <p>No entries in table</p>
                    @endif 

                                                            
                </div>

                <p style="padding-left: 15px;">                                      
                    <a href="/suppliers/create" class="btn btn-success">New Supplier</a>                     
                </p>
            </div>
        </div> 
    </div>   
@stop
@section('javascript')
@parent
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>    
@stop