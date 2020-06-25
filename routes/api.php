<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



//all routes / api here must be api authenticated
Route::group(['middleware' => 'api'], function () {
    Route::get('index', 'DoctorController@index');
    Route::post('store', 'DoctorController@store');
    Route::get('get-id-doctor/{id}', 'DoctorController@get_id_doctor');
    Route::post('update/{id}', 'DoctorController@update');
    Route::post('delete/{id}', 'DoctorController@destroy'); 
    
    //Route::resource('doctor','DoctorController');


});