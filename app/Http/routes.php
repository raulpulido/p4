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

# Show login form
Route::get('/login', 'Auth\AuthController@getLogin');

# Process login form
Route::post('/login', 'Auth\AuthController@postLogin');

# Process logout
Route::get('/logout', 'Auth\AuthController@getLogout');

# Show registration form
Route::get('/register', 'Auth\AuthController@getRegister');

# Process registration form
Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('/', function()
{
    return view('auth.login');
 });

Route::get('/home', function()
{
    return view('pages.home');
 });
Route::get('/project_year/edit/{id?}/{id2?}', array('as'=>'annualreport', 'uses'=> 'ProjectYearController@edit'));
//Route::get('','ProjectYearController@edit');
Route::get('/project_year/show/{id?}','ProjectYearController@show');

Route::resource('/project_year','ProjectYearController');
/*----------------------------------------------------
/Companies
-----------------------------------------------------*/
Route::group(['middleware' => 'auth'], function() {
	//Route::get('/companies/show/{id?}','CompanyController@show');
	Route::get('/companies/confirm-delete/{id?}', 'CompanyController@ConfirmDelete');
	Route::get('/companies/delete/{id?}', 'CompanyController@delete');
	Route::resource('/companies','CompanyController');
});

/*----------------------------------------------------
/Officers
-----------------------------------------------------*/
Route::group(['middleware' => 'auth'], function() {	
	Route::get('/officers/confirm-delete/{id?}', 'OfficerController@ConfirmDelete');
	Route::get('/officers/delete/{id?}', 'OfficerController@delete');
	Route::resource('/officers','OfficerController');
});
/*----------------------------------------------------
/Projects
-----------------------------------------------------*/
Route::group(['middleware' => 'auth'], function() {	
	Route::get('/projects/create/{id?}','ProjectController@create');
	Route::get('/projects/edit/{id?}','ProjectController@edit');
	Route::get('/projects/confirm-delete/{id?}', 'ProjectController@ConfirmDelete');
	Route::get('/projects/delete/{id?}', 'ProjectController@delete');
	Route::get('/projects/show/{id?}','ProjectController@show');
	Route::resource('/projects','ProjectController');
});
/*----------------------------------------------------
/Years
-----------------------------------------------------*/
Route::group(['middleware' => 'auth'], function() {	
	Route::get('/years/create/{id?}','YearController@create');
	Route::get('/years/edit/{id?}','YearController@edit');
	Route::get('/years/confirm-delete/{id?}', 'YearController@ConfirmDelete');
	Route::get('/years/delete/{id?}', 'YearController@delete');
	Route::get('/years/show/{id?}','YearController@show');
	Route::resource('/years','YearController');
});
/*----------------------------------------------------
/Annual Report
-----------------------------------------------------*/
/*Route::group(['middleware' => 'auth'], function() {	
	Route::get('/years/create/{id?}','YearController@create');
	Route::get('/years/edit/{id?}','YearController@edit');
	Route::get('/years/confirm-delete/{id?}', 'YearController@ConfirmDelete');
	Route::get('/years/delete/{id?}', 'YearController@delete');
	Route::get('/years/show/{id?}','YearController@show');
	Route::resource('/years','YearController');
});*/