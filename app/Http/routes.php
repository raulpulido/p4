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


Route::group(['middleware' => 'auth'], function() {
    Route::get('/companies/create', 'CompanyController@create');
    Route::post('/officers/create', 'OfficerController@create');
    //Route::get('/books/edit/{id?}', 'BookController@getEdit');
    //Route::post('/books/edit', 'BookController@postEdit');
    //Route::get('/books/confirm-delete/{id?}', 'BookController@getConfirmDelete');
    //Route::get('/books/delete/{id?}', 'BookController@getDoDelete');
    //Route::get('/books', 'BookController@getIndex');
    //Route::get('/books/show/{title?}', 'BookController@getShow');
});



/*----------------------------------------------------
/Companies
-----------------------------------------------------*/
Route::resource('/companies','CompanyController');

/*Route::get('/companies',['as' => 'companyindex', 'uses' => 'CompanyController@index']);
Route::get('/companies/edit/{id?}', 'CompanyController@update');
Route::get('/companies/create', 'CompanyController@create');
Route::post('/companies/create',['as' => 'companystore', 'uses' => 'CompanyController@store']);*/


/*Route::get('/books', 'BookController@getIndex');
Route::get('/books/show/{title?}', 'BookController@getShow');
Route::group(['middleware' => 'auth'], function() {
    Route::get('/books/create', 'BookController@getCreate');
    Route::post('/books/create', 'BookController@postCreate');
    Route::get('/books/edit/{id?}', 'BookController@getEdit');
    Route::post('/books/edit', 'BookController@postEdit');
});*/

/*----------------------------------------------------
/Officers
-----------------------------------------------------*/
Route::resource('/officers','OfficerController');

/*Route::get('/officers',['as' => 'officerindex', 'uses' => 'OfficerController@index']);
Route::get('/officers/create', 'OfficerController@create');
Route::post('/officers/create',['as' => 'officerstore', 'uses' => 'OfficerController@store']);*/
/*----------------------------------------------------
/Projects
-----------------------------------------------------*/
Route::resource('/projects','ProjectController');
/*Route::get('/projects', 'ProjectController@getIndex');
Route::get('/projects/show/{id?}', 'ProjectController@show');*/

/*----------------------------------------------------
/Document Type
-----------------------------------------------------*/
Route::resource('/document_type','Document_TypeController');
/*Route::get('/document_type',['as' => 'document_typeindex', 'uses' => 'Document_TypeController@index']);
Route::get('/document_type/create', 'document_typeController@create');
Route::post('/document_type/create',['as' => 'document_typestore', 'uses' => 'Document_TypeController@store']);*/
