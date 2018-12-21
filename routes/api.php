<?php

use Illuminate\Http\Request;

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

Route::get('/categories', 'Api\\CategoriesController@index');

Route::get('/categories/{slug}', 'Api\\CategoriesController@show');

Route::get('/news', 'Api\\NewsController@index');

Route::get('/news/{slug}', 'Api\\NewsController@show');