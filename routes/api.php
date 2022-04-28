<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group([
    'prefix' => 'auth'
], function(){
    Route::post('login','App\Http\Controllers\AuthController@login');
    Route::group([
        'middleware' => 'auth:api'
    ],function(){
    Route::post('logout','App\Http\Controllers\AuthController@logout');
    Route::post('refresh','App\Http\Controllers\AuthController@refresh');
    Route::get('data','App\Http\Controllers\AuthController@data');
    Route::get('get_data_product','App\Http\Controllers\ProductController@getDataProduct');
    });
});
