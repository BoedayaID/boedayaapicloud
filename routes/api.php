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


Route::get('pulau', 'PulauController@index');
Route::get('pulau/{id}', 'PulauController@detail');

Route::get('provinsi','ProvinsiController@index');
Route::get('provinsi/{id}','ProvinsiController@detail');



Route::get('suku','SukuController@index');
Route::get('suku/{id}','SukuController@detail');
