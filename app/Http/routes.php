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

Route::post('/users', 'HomeController@create');
