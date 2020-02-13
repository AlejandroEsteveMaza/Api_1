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

Route::get('foo', function () {
    return 'Hello World';
});

Route::patch('categoriasPatch', 'IndexController@categoriasPatch');

Route::patch('directoresPatch', 'IndexController@directoresPatch');

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');


Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('pay', 'UserController@testPayload');
    Route::get('logout', 'UserController@logout');
});

Route::group(['middleware' => ['jwt.verify','admin.verify']], function() {
    Route::get('cat', 'IndexController@getCategorias');
});


