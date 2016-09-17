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
        $materials = $project->materials;        
        return view('projects.show',compact('project', 'materials'));
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
        $Project = Project::findOrFail($id);
        $Project->delete();

        flash('Project Deleted', 'danger');
        return redirect()->route('projects.index');
    }

}
