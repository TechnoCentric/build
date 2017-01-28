<?php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Item as Item;

class ItemsController extends Controller

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
    	
    	return view('items.create');

    }


    /**
     * Display all Materials
     * @return 
     */
    public function index()
    {
    	$items = Supplier::all();
    	return view('items.index', compact('items'));
    }
    /**
     * Save a record
     * @param  storeMaterials
     * @return 
     */
    public function store(Requests\StoreItemsRequest $request)
    {
    	$amount = $request['price'] * $request['quantity']
    	Item::create([
            'description' => $request['description'],
            'quantity' => $request['quantity'],
            'price' => $request['price'],
            'amount' =>  $amount,
            'supply_id' => $request['supply_id'],         
        ]);        
    	flash('New Item Created', 'success');
    	return redirect()->route('items.index');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('items.edit',compact('item'));
    }

    public function update(Requests\UpdateMaterialsRequest $request, $id)
    {
        $item = Item::find($id);
        $item->update($request->all());

        flash('item Updated', 'success');
        return redirect()->route('items.index');
    }

    public function destroy($id)
    {
        $item = Item::find($id);       
        $item->delete();

        flash('Record Deleted', 'danger');
        return redirect()->route('items.index');
    }
}
