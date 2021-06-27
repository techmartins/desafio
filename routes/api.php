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

Route::get('/reuniao', 'ReuniaoController@index');
Route::get('/reuniao/{id}', 'ReuniaoController@show');
Route::post('/reuniao-post', 'ReuniaoController@store');
Route::put('/reuniao-up/{id}', 'ReuniaoController@update');
Route::delete('/reuniao-del/{id}', 'ReuniaoController@destroy');
Route::post('/reuniao-filter', 'ReuniaoController@filterData');