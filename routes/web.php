<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {
    Route::get('alumnos', 'AdminController@students');
    Route::get('anyData', 'AdminController@anyData');
    Route::get('registrarAlumno', 'AdminController@createStudent');
    Route::post('storeStudent', 'AdminController@storeStudent');
    Route::get('showStudent/{student}', 'AdminController@showStudent');
    Route::post('updateStudent/{student}', 'AdminController@updateStudent');    
    Route::post('destroyStudent/{student}', 'AdminController@destroyStudent');
    Route::post('uploadImageStudent', 'AdminController@uploadImageStudent');
    Route::post('deleteImageStudent/{fileName}', 'AdminController@deleteImageStudent');
    Route::get('getMunicipalities/{state}', 'AdminController@getMunicipalities');
});

Route::get('/home', 'HomeController@index');
