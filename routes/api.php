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

Route::group(['prefix' => 'images'], function() {
    Route::get('/', ['uses' => 'ImagesController@index']);
});

Route::group(['prefix' => 'places'], function() {
    Route::get('/', ['uses' => 'PlaceController@index']);
    Route::get('/near-by', ['uses' => 'PlaceController@nearBy']);
});
