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
                <div class="widget-header ">
                    <h2>File Entries</h2>                    
                </div>
                <div class="widget-content padding">                    
                    @if(count($materials) > 0)
                        <table id="ent" class="table table-bordered table-striped datatable">
                            <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Amount Paid</th>
                                <th>Payment Date</th>
                                <th class="hidden-sm hidden-xs">Paid To</th>
                                <th class="hidden-sm hidden-xs">Payment Type</th>                                                               
                            </tr>
                            </thead>                           
                        </table>
                    @else
                        <p>No entries in table</p>
                    @endif                                                 
                </div>
                <p style="padding-left: 15px;">
                    <a href="/projects/{{$project->id}}/files/{{$file->id}}/bulk" class="btn btn-success">Bulk Upload</a>
                    <a href="/projects/{{$project->id}}/files/{{$file->id}}/materials/create" class="btn btn-success">Add new</a>
                     <a class="btn btn-success" href="/projects/{{$project->id}}/files/{{$file->id}}/pdf" target="_blank">Export (PDF)</a>
                </p>
            </div>
        </div> 
    </div>   
@stop
@section('javascript')
@parent
    <script>
        $(function() {
            $('#ent').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('projects.file') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' }
                ]
            });
        });     
    </script>
@stop