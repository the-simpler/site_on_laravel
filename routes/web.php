<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'BaseController@getIndex');

Auth::routes();



Route::post('/search','SearchController@postIndex');

Route::get('/home', 'HomeController@index');


Route::post('/home', 'HomeController@postIndex');

Route::get('/catalog/{id}','CatalogController@getAll');


Route::post('/subscribe' ,'SubscribeController@postIndex');
Route::get('/my-subscriptions' ,'SubscribeController@getSubscriptions');

Route::get('{id?}', 'StaticController@getIndex')->where('id','[A-Za-z0-9_ +]+');	//последний ROUTE!

