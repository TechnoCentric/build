<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Material;
use App\Project;

class MaterialsController extends Controller
{
    /**
     *Create a new instance of Controller
     */
    public function __construct()
    {
    	//$this->middleware('auth');
    }
    
    /**
     * load a view for adding new material
     * @return 
     */
    public function create()
    {
    	//$projects = Project::all();
    	return view('materials.create'/*, compact('projects')*/);

    }


    /**
     * Display all Materials
     * @return 
     */
    public function index()
    {
    	$materials = Material::all();
    	return view('materials.index', compact('materials'));
    }

    /**
     * Save a record
     * @param  storeMaterials
     * @return 
     */
    public function store(Requests\storeMaterials $request)
    {
    	Material::create([
            'material_type' => $request['material_type'] ,
            'amount_paid' => $request['amount_paid'] ,
            'payment_date' => $request['payment_date'] ,
            'paid_to' => $request['paid_to'] ,
            'payment_type' => $request['payment_type'] ,
            'payment_status' =>$request['payment_status'] ,
            'project_id' => $request['project_id']
            ]);

    	flash('Record Added', 'success');
        $materials = Material::all();
    	return view('materials.index', compact('materials'));
    }

    public function edit($id)
    {
        $material = Material::findOrFail($id);
        return view('materials.edit',compact('material'));
    }

    public function update(Requests\UpdateMaterialsRequest $request, $id)
    {
        $material = Material::findOrFail($id);
        $material->update($request->all());

        flash('Record Updated', 'success');
        return redirect()->route('materials.index');
    }

    public function destroy($id)
    {
        $material = Material::findOrFail($id);
        $material->delete();

        flash('Record Deleted', 'danger');
        return redirect()->route('materials.index');
    }

    public function bulkUpload(Requests\uploadRequest $request)
    {
       $project = $request->input('project_id');
        $results = \Excel::load($request->file('file'))->get();
         foreach ($results as $row) {
                
                if($row->material_type) {
                    $material = new \App\Material;
                    $material->material_type = $row->material_type;
                    $material->amount_paid = $row->amount_paid;
                    $material->payment_date = $row->payment_date;
                    $material->payment_type = $row->payment_type;
                    $material->paid_to = $row->paid_to;
                    $material->payment_status = $row->payment_status;
                    $material->project_id = $project;                                               
                    $material->save();                  
                }
                else{ 
                    \flash('Workbook does not contain the right columns. Please check the format', 'danger');
                    return redirect()->back();
                }               
            }           
                
        \flash('Bulk Upload Performed successfully', 'success');
        return redirect()->back();  
    }

    public function generateReport(Requests\reportRequest $request)
    {
        $report_name = $request->input('report_date').'_'.$request->input('end_date');
        $start       = $request->input('report_date');
        $end         = $request->input('end_date');
        $project     = $request->input('project_id'); 
        \Excel::create('report-'.$report_name, function($excel) {            
            $excel->sheet('New sheet', function($sheet) {                 

                $materials =\App\Material::where('project_id', '=', $project)
                        ->whereBetween('payment_date', [$start, $end])
                        ->get();

                $sheet->fromArray($materials);

            });

        })->download('xls');
    }

}
