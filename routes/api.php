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
Route::post('login', 'API\AuthController@login');
Route::post('register', 'API\AuthController@register');
 
Route::middleware('auth:api')->group(function(){
 
  Route::post('user_detail', 'API\AuthController@user_detail');
  
});

Route::get("test",function () {

    return response()->json(["Test Api"=>"Success!"]);
});
