<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\File as File;
use Yajra\Datatables\Datatables;
use Auth;
use App\Project;

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
        if (count($request->input('name'))>0) {
            $replicator = $request->input('name');
            $dataSet = [];
            foreach ($replicator as $name) {
                $dataSet[] = [
                    'name'  => $name,
                    'project_id'    => $request['project_id'] ,
                    'total'       => $request['total'] ,
                ];
            }

            \DB::table('files')->insert($dataSet);
            $project = \App\Project::find($request['project_id']);
            flash('Files Created', 'success');
            return redirect()->route('projects.show', ['projects' => $project]);
        }
        else{
            File::create([          
                'name'      => $request['name'] ,
                'project_id'  => $request['project_id'] ,
                'total'    => $request['total'] ,            
                ]);
            $project = \App\Project::find($request['project_id']);
        	flash('File Added', 'success');
        	return redirect()->route('projects.show', ['projects' => $project]);
        }
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
        
        if (Auth::user()->role = 'Admin') {
            $file = File::find($id); 
            $project = Project::where('id', '=', $file->project_id);                   
            return view('files.edit',compact('file', 'project'));
            
        }
        else {
            flash('You are not authorized to perform this function', 'danger');
            return redirect()->back();
            
        }

            
    }
    /**
     * Update a Project
     * @param  UpdatefilesRequest
     * @param  
     * @return Response
     */
    public function update(Requests\updateFile $request, $id)
    {
        $file = File::findOrFail($id);
        $file->update($request->all());
        $project = $file->project_id;

        flash('Record Updated', 'success');
        return redirect()->back();
    }

    /**
     * Delete a Project
     * @param  
     * @return Response
     */
    public function destroy($id)
    {
        $file = File::findOrFail($id);
        $project = $file->project_id;
        $file->delete();

        flash('Project Deleted', 'danger');
        return redirect()->to('/projects/'.$project.'/');
    }
}
