@extends('layouts.app')

@section('title')
{{$file->name}}
@endsection

@section('content')
    <div class="page-heading">
        <h1> <a href="/projects/{{$file->project_id}}/"><i class="fa fa-arrow-circle-o-left"></i></a> {{$file->name}} Files</h1>                     
    </div>    

    <div class="row">
        <div class="col-md-12 portlets ui-sortable">
            <div class="widget">
                <div class="widget-header " style="margin-top: 20px;">
                  {!! Form::open(['method' => 'GET']) !!}                                 
                   <div class="col-md-5">
                    </div>
                     <div class="input-group add-on col-md-3">
                        {!! Form::input('search', 'q', null, ['placeholder' => 'search', 'class' => 'form-control']) !!}
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                      </div>                  
                  {!! Form::close()!!}  
                </div>                
                <div class="widget-content padding">                    
                    @if(count($materials) > 0)
                        <div class="table-responsive">
                            <table id="ent" class="table table-bordered table-striped datatable">
                                <thead>
                                <tr>
                                    <th>Item Name</th>                                    
                                    <th>Payment Date</th>
                                    <th class="hidden-sm hidden-xs">Paid To</th>
                                    <th class="hidden-sm hidden-xs">Payment Type</th>
                                    <th>Amount Paid</th>                                                               
                                </tr>
                                </thead>
                                @foreach($materials as $material)
                                <tr>
                                   <td>{{$material->material_name}} </td>                                   
                                   <td> {{$material->payment_date->toFormattedDateString()}} </td>
                                   <td class="hidden-sm hidden-xs"> {{$material->paid_to}} </td>
                                   <td class="hidden-sm hidden-xs"> {{$material->payment_type}} </td>
                                   <td> {{number_format($material->amount_paid)}} </td> 
                                </tr>
                                @endforeach   
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td style="text-align: right;"> <strong>Total</strong> </td>
                                  <td><strong>{{number_format($file->total)}} </strong></td>
                                </tr>                       
                            </table>
                        </div>
                    @else
                        <p>No entries in table</p>
                    @endif 

                                                            
                </div>

                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="padding-bottom: 10px;">
                    <a href="/projects/{{$project->id}}/files/{{$file->id}}/bulk" class="btn btn-success">Bulk Upload</a>                   
                    <a href="/projects/{{$project->id}}/files/{{$file->id}}/materials/create" class="btn btn-success">Add new</a>
                     <a class="btn btn-success" href="/projects/{{$project->id}}/files/{{$file->id}}/pdf" target="_blank">Export (PDF)</a>
                     @if(Auth::user()->role = 'Admin')
                     <a href="/files/{{$file->id}}/edit" class="btn btn-info">Edit File</a>
                     {{ Form::open(['route' => ['files.destroy', $file->id], 'method' => 'delete', 'style' => 'display:inline-block']) }}
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this File?')"> Delete</button>               
                      {{ Form::close() }}
                     @endif
               </div>
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