<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;
use App\Material;

class ProjectsController extends Controller
{
    /**
     *Create a new instance of Project
     */
    public function __construct()
    {
    	//$this->middleware('auth');
    }
    
    /**
     * load a view for adding new Project
     * @return Response
     */
    public function create()
    {
    	
    	return view('projects.create');

    }


    /**
     * Display all Projects
     * @return Response
     */
    public function index()
    {
    	$projects = Project::all();
    	return view('projects.index', compact('projects'));
    }

    /**
     * Save a Project
     * @param  storeProjects
     * @return Response
     */
    public function store(Requests\storeProjects $request)
    {
    	$fileName = str_random(16). '.' . $request->file('picture')->getClientOriginalExtension();        
        if ($request->hasFile('picture')){
                    $file = $request->file('picture');                         
                     $file->move(public_path().'/img', $fileName);                  

            }
            else flash( 'File not Uploaded', 'danger');
        Project::create([
            'type'      => $request['type'] ,
            'name'      => $request['name'] ,
            'location'  => $request['location'] ,
            'budget'    => $request['budget'] ,
            'picture'   => $fileName ,
            'supervisor'=> $request['supervisor']
            ]);
        $projects = Project::all();
    	flash('Project Added', 'success');
    	return view('projects.index', compact('projects'));
    }

    /**
     * Show a Single Project
     * @param  $id
     * @return Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        $files = $project->files;       
        return view('projects.show',compact('project', 'files'));
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
        return view('projects.reports',compact('project', 'reports'));
    }

    public function showFile($id, $file)
    {
        $project = Project::findOrFail($id);
        $file = \App\File::find($file);
        $quack = \App\Material::where('file_id', '=', $file->id)->get(); 
        $materials = $quack->sortByDesc('date');               
        return view('projects.file',compact('project', 'file', 'materials'));
    }

    public function getBulk($id, $file)
    {
        $project = Project::findOrFail($id);
        $file = \App\File::find($file);

        return view('projects.bulk', compact('project', 'file'));
    }

    public function createFile($id)
    {
        $project = Project::findOrFail($id);                        
        return view('files.create',compact('project'));
    }

    public function createReport($id)
    {
        $project = Project::findOrFail($id);                        
        return view('reports.create',compact('project'));
    }

     public function createMaterial($id, $file)
    {
        $project = Project::findOrFail($id);
        $file = \App\File::find($file);                      
        return view('materials.create',compact('project', 'file'));
    }

    /**
     * Load a form to edit a project
     * @return  Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);        
        return view('projects.edit',compact('project'));
    }
    /**
     * Update a Project
     * @param  UpdateProjectsRequest
     * @param  
     * @return Response
     */
    public function update(UpdateProjectsRequest $request, $id)
    {
        $Project = Project::findOrFail($id);
        $Project->update($request->all());

        flash('Record Updated', 'success');
        return redirect()->route('projects.index');
    }

    /**
     * Delete a Project
     * @param  
     * @return Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        File::delete(public_path('/img/').$project->logo); 
        $project->delete();

        flash('Project Deleted', 'danger');
        return redirect()->route('projects.index');
    }

    /**
     * Export a Project to PDF
     * @param  
     * @return Response
     */
    public function pdf($id)
    {
        $project = Project::findOrFail($id);
        $files = $project->files;
        $pdf = \PDF::loadView('layouts.pdf', [ 'project' => $project, 'files' => $files]);
        return $pdf->stream($project->name.'.pdf');
    }

}
