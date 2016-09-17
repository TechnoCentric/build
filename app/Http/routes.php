<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$projects = \App\Project::all();
	$materials = \App\Material::all();
	$pending = \App\Material::where('payment_status', 'LIKE',  '%'.'Pending'.'%')->get();
	$paid = \App\Material::where('payment_status', 'LIKE' , '%'.'Paid'.'%')->get();
    return view('welcome', compact('projects', 'materials', 'pending', 'paid')) ;
});

Route::auth();
Route::resource('materials', 'MaterialsController');

Route::resource('reports', 'ReportsController');

Route::resource('projects', 'ProjectsController');

Route::get('projects/{id}/reports', 'ProjectsController@showReport');

Route::get('/home', 'HomeController@index');
Route::get('/users', function(){
	$users = \App\User::all();
	return view('users.index', compact('users'));
});

Route::get('/users/create' , function(){	
	return view('users.create');
});

Route::get('bulk', function ()
{	
	$projects = \App\Project::all();
	return view('projects.bulk', compact('projects'));
});
Route::post('bulk', function ()
{	
	$project = Request::input('project_id');
		$results = \Excel::load(Request::file('file'))->get();
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
});

Route::post('/users', 'HomeController@create');

Route::get('/report',  function(){
	$projects = \App\Project::all();
	return view('report', compact('projects'));
});

Route::post('/results', function()
{
	$date = Request::input('report_date');
	$project = Request::input('project_id');

	$matchThese = ['project_id' => $project, 'payment_date' => $date];
	$materials = \App\Material::where('project_id', '=', $project)
								->where('payment_date', '=', $date)
								->get(); 

	return $materials;
});
