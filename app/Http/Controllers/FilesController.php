<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\File as File;
use Yajra\Datatables\Datatables;

class FilesController extends Controller
{
     /**
     *Create a new instance of File
     */
    public function __construct()
    {
    	$this->middleware('auth');
    }
    
    /**
     * load a view for adding new File
     * @return Response
     */
    public function create()
    {
    	$projects = \App\Project::all();    	
    	return view('files.create', compact('projects'));

    }


    /**
     * Display all files
     * @return Response
     */
    public function index()
    {
    	$files = File::all();
    	return view('files.index', compact('files'));
    }

    /**
     * Save a File
     * @param  storefiles
     * @return Response
     */
    public function store(Requests\createFile $request)
    {    	
        File::create([          
            'name'      => $request['name'] ,
            'project_id'  => $request['project_id'] ,
            'total'    => $request['total'] ,            
            ]);
        $project = \App\Project::find($request['project_id']);
    	flash('File Added', 'success');
    	return redirect()->route('projects.show', ['projects' => $project]);
    }

    /**
     * Show a Single File
     * @param  $id
     * @return Response
     */
    public function show($id)
    {
        $file = File::findOrFail($id);
        $materials = $file->materials;
        $cement = Material::where('project_id', '=', $file->id)
                            ->where('material_type', '=', 'Cement')->get();        
        return view('files.show',compact('file', 'materials', 'cement'));
    }

    /**
     * Show reports in Project
     * @param  $id
     * @return Response
     */
    public function showReport($id)
    {
        $project = Project::findOrFail($id);
        $quack = $project->reports; 
        $reports = $quack->sortByDesc('date');               
        return view('files.reports',compact('project', 'reports'));
    }

    /**
     * Load a form to edit a project
     * @return  Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);        
        return view('files.edit',compact('project'));
    }
    /**
     * Update a Project
     * @param  UpdatefilesRequest
     * @param  
     * @return Response
     */
    public function update(UpdatefilesRequest $request, $id)
    {
        $Project = Project::findOrFail($id);
        $Project->update($request->all());

        flash('Record Updated', 'success');
        return redirect()->route('files.index');
    }

    /**
     * Delete a Project
     * @param  
     * @return Response
     */
    public function destroy($id)
    {
        $Project = Project::findOrFail($id);
        $Project->delete();

        flash('Project Deleted', 'danger');
        return redirect()->route('files.index');
    }
}
