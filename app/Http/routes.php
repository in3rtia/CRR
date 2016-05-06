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

//these pages can be accessed by anyone
Route::group(['middleware' => ['web']], function () {

    Route::auth();
    Route::get('/about', 'HomeController@about');
    Route::get('/', function () {
        return view('welcome');
    });

    //these pages are accessible only to authenticated users

    Route::group(['middleware' => 'auth'], function () {

         Route::get('/home', 'HomeController@index');
         Route::get('/edit', 'UserController@edit');//use with constructor
        Route::post('/store', 'UserController@store');

    //these pages can only be accessed by the HOD
    Route::group(['middleware' => 'userAccess'], function() {

        Route::get('/contract/{id}', 'ContractController@showContract');
        Route::post('/updateContract', 'ContractController@store');
        Route::delete('/delete', 'UserController@destroy');
        Route::get('/staff_view', 'UserController@staff_view');
        Route::get('/add_new', 'UserController@add_new_form');
        Route::post('/store_new_user', 'UserController@store_new_user');
    });

});

});
