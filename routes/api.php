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

/*
Version 1 APIs
 */
Route::group(['prefix' => 'v1', 'middleware' => 'auth:api', 'namespace' => 'Api\V1'], function(){
  Route::resource('posts', 'PostsController');
});

/*
Version 2 APIs
 */
Route::group(['prefix' => 'v2', 'middleware' => 'auth:api', 'namespace' => 'Api\V2'], function(){
  Route::resource('posts', 'PostsController');
});
