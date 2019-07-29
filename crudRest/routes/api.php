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
//to insert the data into database
Route::post('/students', 'ApiController@create');
//to fetch data using get method
Route::get('/students', 'ApiController@show');
// to fetch the data using id
Route::get('/student/{id}','ApiController@ShowbyId');
//updating the data using id
Route::put('/studentUpdate/{id}','ApiController@updatebyId');
//deleting by id
Route::delete('/studentDelete/{id}','ApiController@deletebyId');