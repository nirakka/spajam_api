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

Route::get('/games','GamescheduleController@index');

Route::get('/games/{id}', 'GamescheduleController@show');


Route::post('/tips', 'TippingController@store');

Route::get('/games/date/{date}','GamescheduleController@showByDate');

