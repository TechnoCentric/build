<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Supplier as Supplier;

class SuppliersController extends Controller

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
    	
    	return view('suppliers.create');

    }


    /**
     * Display all Materials
     * @return 
     */
    public function index()
    {
    	$suppliers = Supplier::all();
    	return view('suppliers.index', compact('suppliers'));
    }
    /**
     * Save a record
     * @param  storeMaterials
     * @return 
     */
    public function store(Requests\StoreSuppliersRequest $request)
    {
    	Supplier::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'phone' => $request['phone'],

        ]);        
    	flash('New Supplier Created', 'success');
    	return redirect()->route('suppliers.index');
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.edit',compact('supplier'));
    }

    public function update(Requests\UpdateMaterialsRequest $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->update($request->all());

        flash('supplier Updated', 'success');
        return redirect()->route('suppliers.index');
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id);       
        $supplier->delete();

        flash('Record Deleted', 'danger');
        return redirect()->route('suppliers.index');
    }
}
