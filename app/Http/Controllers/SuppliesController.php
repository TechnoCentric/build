<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Supply as Supply;

class SuppliesController extends Controller

{
    //
     /**
     *Create a new instance of Controller
     */
    public function __construct()
    {
    	$this->middleware('auth');
    }
    
    /**
     * load a view for adding new material
     * @return 
     */
    public function create()
    {
    	
    	return view('supplies.create');

    }


    /**
     * Display all Materials
     * @return 
     */
    public function index()
    {
    	$suppliers = Supply::all();
    	return view('supplies.index', compact('supplies'));
    }
    /**
     * Save a record
     * @param  storeMaterials
     * @return 
     */
    public function store(Requests\StoreSuppliesRequest $request)
    {
    	Supply::create([
            'payment_date' => $request['payment_date'],
            'delivery_date' => $request['delivery_date'],
            'supplier_id' => $request['supplier_id'],
            'status' => $request['status']   

        ]);        
    	flash('New Supply Created', 'success');
    	return redirect()->route('supplies.index');
    }

    public function edit($id)
    {
        $supply = Supply::findOrFail($id);
        return view('supplies.edit',compact('supply'));
    }

    public function update(Requests\UpdateMaterialsRequest $request, $id)
    {
        $supply = Supply::find($id);
        $supply->update($request->all());

        flash('supply Updated', 'success');
        return redirect()->route('supplies.index');
    }

    public function destroy($id)
    {
        $supply = Supply::find($id);       
        $supply->delete();

        flash('Record Deleted', 'danger');
        return redirect()->route('supplies.index');
    }
}
