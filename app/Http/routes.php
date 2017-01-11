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

Route::get('/admin/categoria', ['as'=>'admin.categories.index','uses'=>'CategoriesController@index']);
Route::get('/admin/categoria/nova',['as'=>'admin.categories.create', 'uses'=>'CategoriesController@create']);
Route::get('/admin/categoria/editar/{id}',['as'=>'admin.categories.edit', 'uses'=>'CategoriesController@edit']);
Route::post('/admin/categoria/store',['as'=>'admin.categories.store', 'uses'=>'CategoriesController@store']);
Route::post('/admin/categoria/update/{id}',['as'=>'admin.categories.update', 'uses'=>'CategoriesController@update']);
Route::get('/admin/categoria/delete/{id}',['as'=>'admin.categories.delete', 'uses'=>'CategoriesController@delete']);


Route::get('/admin/produtos', ['as'=>'admin.products.index','uses'=>'ProductsController@index']);
Route::get('/admin/produtos/nova',['as'=>'admin.products.create', 'uses'=>'ProductsController@create']);
Route::get('/admin/produtos/editar/{id}',['as'=>'admin.products.edit', 'uses'=>'ProductsController@edit']);
Route::post('/admin/produtos/store',['as'=>'admin.products.store', 'uses'=>'ProductsController@store']);
Route::post('/admin/produtos/update/{id}',['as'=>'admin.products.update', 'uses'=>'ProductsController@update']);
Route::get('/admin/produtos/delete/{id}',['as'=>'admin.products.delete', 'uses'=>'ProductsController@delete']);

