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
    return view('welcome');
});

Route::get('/admin/categoria', ['as'=>'admin.categories','uses'=>'CategoriesController@index']);
Route::get('/admin/categoria/nova',['as'=>'admin.categories.create', 'uses'=>'CategoriesController@create']);
Route::post('/admin/categoria/store',['as'=>'admin.categories.store', 'uses'=>'CategoriesController@store']);
