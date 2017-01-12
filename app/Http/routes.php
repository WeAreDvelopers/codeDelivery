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

Route::group(['prefix'=>'admin','as'=>'admin.', 'middleware'=>'auth.checkrole'],function(){

	Route::group(['prefix'=>'categoria','as'=>'categories.'],function(){
		Route::get('', ['as'=>'index','uses'=>'CategoriesController@index']);
		Route::get('nova',['as'=>'create', 'uses'=>'CategoriesController@create']);
		Route::get('editar/{id}',['as'=>'edit', 'uses'=>'CategoriesController@edit']);
		Route::post('store',['as'=>'store', 'uses'=>'CategoriesController@store']);
		Route::post('update/{id}',['as'=>'update', 'uses'=>'CategoriesController@update']);
		Route::get('delete/{id}',['as'=>'delete', 'uses'=>'CategoriesController@delete']);
	});
	Route::group(['prefix'=>'produtos','as'=>'products.'],function(){
		Route::get('', ['as'=>'index','uses'=>'ProductsController@index']);
		Route::get('nova',['as'=>'create', 'uses'=>'ProductsController@create']);
		Route::get('editar/{id}',['as'=>'edit', 'uses'=>'ProductsController@edit']);
		Route::post('store',['as'=>'store', 'uses'=>'ProductsController@store']);
		Route::post('update/{id}',['as'=>'update', 'uses'=>'ProductsController@update']);
		Route::get('delete/{id}',['as'=>'delete', 'uses'=>'ProductsController@delete']);
	});

});


