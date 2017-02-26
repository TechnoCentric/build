<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DataTables\UsersDataTable;
use App\User as User;
use Auth;

class UsersController extends Controller
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
    	
    	return view('users.create');

    }


    /**
     * Display all Materials
     * @return 
     */
    /*public function index()
    {
    	$users = User::all();
    	return view('users.index', compact('users'));
    }*/

     public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('users');
    }
    /**
     * Save a record
     * @param  storeMaterials
     * @return 
     */
    public function store(Requests\StoreUsersRequest $request)
    {
    	User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'role' => $request['role'],
        ]);        
    	flash('New User Created', 'success');
    	return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit',compact('user'));
    }

    public function update(Requests\UpdateMaterialsRequest $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());

        flash('User Updated', 'success');
        return redirect()->route('users.index');
    }

     public function changePassword()
    {
        $user = Auth::User();
        return view('users.password',compact('user'));
    }

    public function updatePassword(Requests\UpdatePasswordRequest $request)
    {
        $user = Auth::User();       
        $user->password = bcrypt($request['password']);
        $user->save();
        flash('Password Changed Successfully');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $user = User::find($id);       
        $user->delete();

        flash('Record Deleted', 'danger');
        return redirect()->route('users.index');
    }    
}
