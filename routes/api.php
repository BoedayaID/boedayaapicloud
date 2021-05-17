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
Route::get('provinsi/provinsi={id}','ProvinsiController@listprovinsi');



Route::get('suku','SukuController@index');
Route::get('suku/{id}','SukuController@detail');
Route::get('suku/list/{id}','SukuController@listsuku');

Route::get('makanan','MakananController@index');
Route::get('makanan/{id}','MakananController@detail');

Route::get('kesenian','KesenianController@index');
Route::get('kesenian/{id}','KesenianController@detail');

Route::get('rumah-adat','RumahAdatController@index');
Route::get('rumah-adat/{id}','RumahAdatController@detail');


Route::get('tempat-wisata','TempatWisataController@index');
Route::get('tempat-wisata/{id}','TempatWisataController@detail');
