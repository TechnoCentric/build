<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Report;

class ReportsController extends Controller
{
    //
    /**
     *Create a new instance of Project
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index()
    {
        $pre = Report::all();

        $reports = $pre->SortByDesc('date');

        return view('reports.index', compact('reports'));
    }
    
    public function create()
    {
        $projects = \App\Project::all();
        return view('reports.create', compact('projects'));
    }

    public function store(Requests\StoreReportsRequest $request)
    {
        
        Report::create($request->all());
        $project = \App\Project::find($request['project_id']);
        flash('Report Posted', 'success');
        return redirect()->route('projects.show', ['projects' => $project ]);
    }

    public function edit($id)
    {
        if (\Auth::user()->role = 'Admin') {
            $report = Report::findOrFail($id);
            return view('reports.edit',compact('report'));
        } else {
            flash('You are not Authorized to perform this action', 'danger');
            return redirect()->back();
        }
    }

    public function update(Requests\UpdateReportsRequest $request, $id)
    {
        $report = Report::findOrFail($id);
        $report->update($request->all());
         flash('Report Posted', 'success');
        return redirect()->route('reports.index');
    }

    public function destroy($id)
    {
        if (\Auth::user()->role = 'Admin') {
            $report = Report::findOrFail($id);
            $report->delete();
            flash('File Deleted', 'danger');
            return redirect()->route('reports.index');
        } else {
            flash('You are not Authorized to perform this action', 'danger');
            return redirect()->back();
        }    
    }
}
