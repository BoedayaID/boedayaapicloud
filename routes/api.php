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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('islands', 'IslandController@index');
Route::get('islands/{id}', 'IslandController@detail');

Route::get('provinces','ProvinceController@index');
Route::get('provinces/{id}','ProvinceController@detail');
