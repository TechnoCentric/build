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
    return view('welcome', compact('projects', 'materials')) ;
});

Route::auth();
Route::resource('files', 'FilesController');
Route::resource('materials', 'MaterialsController');

Route::resource('reports', 'ReportsController');

Route::resource('projects', 'ProjectsController');

Route::get('projects/{id}/reports', 'ProjectsController@showReport');

Route::get('projects/{id}/reports/create', 'ProjectsController@createReport');

Route::get('projects/{id}/files/create', 'ProjectsController@createFile');

Route::get('projects/{id}/files/{file}', [ 'as' => 'projects.file', 'uses' => 'ProjectsController@showFile']);

Route::get('projects/{id}/files/{file}/bulk', [ 'as' => 'projects.bulk', 'uses' => 'ProjectsController@getBulk']);

Route::get('projects/{id}/files/{file}/materials/create', 'ProjectsController@createMaterial');


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
Route::post('bulk', 'MaterialsController@bulkUpload');

Route::post('/users', 'HomeController@create');

Route::get('/report',  function(){
	$projects = \App\Project::all();
	return view('report', compact('projects'));
});

Route::post('/results', function()
{	
	$report_name = Request::input('report_date').'_'.Request::input('end_date');
	Excel::create('report-'.$report_name, function($excel) {

		    		$excel->sheet('New sheet', function($sheet) { 
		    			$start = Request::input('report_date');
						$end   = Request::input('end_date');
						$project = Request::input('project_id'); 

		    			$materials =\App\Material::where('project_id', '=', $project)
								->whereBetween('payment_date', [$start, $end])
								->get(); 	 
		        		$sheet->fromArray($materials);

		    		});

				})->download('xls');	
});

/*Route::get('/blob', function ()
{
	$materials = DB::table('materials')->select('material_type', 'amount_paid', 'payment_date', 'payment_type', 'paid_to', 'payment_status', 'project_id')
		->where('project_id', '=', 1)		
		->get();

		return $materials;
});*/

Route::get('/bob', function ()
{
	$files =\App\File::all(); 	 

		return $files;
});
