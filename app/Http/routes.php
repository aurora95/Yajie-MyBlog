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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('articleclasses/{classname}', 'ArticleClassesController@show');
Route::get('articles/{id}', 'ArticlesController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function()
{
	Route::get('/', 'AdminHomeController@index');

	Route::group(['prefix' => '{classname}'], function()
	{
		Route::resource('articles', 'ArticlesController');
	});
	
	Route::resource('comments', 'CommentsController');

	Route::post('articleclasses/store', 'ArticleClassesController@store');
	Route::post('articleclasses/{classname}/edit', 'ArticleClassesController@update');
	Route::delete('articleclasses/{classname}', 'ArticleClassesController@destroy');
});