<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User as User;

class UsersController extends Controller
{
    //
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
    	$materials = Material::paginate();
    	return view('materials.index', compact('materials'));
    }

    /**
     * Save a record
     * @param  storeMaterials
     * @return 
     */
    public function store(Requests\storeMaterials $request)
    {
    	$file = \App\File::find($request['file_id']);
        $file->total += $request['amount_paid'];
        $file->save();    
        Material::create([
            'material_name' => $request['material_name'] ,
            'material_type' => $request['material_type'] ,
            'amount_paid' => $request['amount_paid'] ,
            'payment_date' => $request['payment_date'] ,
            'lpo' => $request['lpo'],
            'paid_to' => $request['paid_to'] ,
            'payment_type' => $request['payment_type'] ,
            'file_id' => $request['file_id'] ,
            'project_id' => $request['project_id']
            ]);       

    	flash('Record Added', 'success');
        $project = \App\Project::find($request['project_id']);
    	return redirect()->route('projects.show', ['projects' => $project ]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit',compact('user'));
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
        $num = $material->file_id;
        $file = \App\File::find($num);
        $file->total -= $material->amount_paid;
        $file->save();    
        $material->delete();

        flash('Record Deleted', 'danger');
        return redirect()->route('materials.index');
    }

    public function bulkUpload(Requests\uploadRequest $request)
    {
        $project = $request->input('project_id');
        $file = $request->input('file_id');
        $results = \Excel::load($request->file('file'))->get();
         foreach ($results as $row) {
                
                if($row->name) {
                    $material = new \App\Material;                    
                    $material->material_name = $row->name;
                    $material->lpo = $row->lpo;
                    $material->amount_paid = $row->amount_paid;
                    $material->payment_date = $row->payment_date;
                    $material->payment_type = $row->payment_type;
                    $material->paid_to = $row->paid_to;                    
                    $material->project_id = $project; 
                    $material->file_id = $file;                                              
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
        \Excel::create('Report '.$report_name, function($excel) {            
            $excel->sheet('New sheet', function($sheet) {                 

                $materials =\App\Material::where('project_id', '=', $project)
                        ->whereBetween('payment_date', [$start, $end])
                        ->get();

                $sheet->fromArray($materials);

            });

        })->download('xls');
    }
}
