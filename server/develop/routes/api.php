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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->get('/login', function (Request $request) {
//     exit("テスト");
//     return $request->user();
// });


Route::middleware('api')->post('/user/register', 'UserController@register'); 
// Route::middleware('api')->post('/user/index', 'UserController@index'); 
Route::middleware('api')->post('/singin', 'LoginController@singin'); 
Route::middleware('api')->post('/test1', 'LoginController@test1'); 
Route::middleware('auth:sanctum')->post('/users','UserController@index'); 