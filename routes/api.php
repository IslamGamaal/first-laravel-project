<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('/token/revoke', 'Api\Users\UsersController@revoke')->name('revoke');
    Route::get('/auth', 'Api\Users\UsersController@authUser')->name('auth');
    Route::get('/user/{id}', 'Api\Users\UsersController@userById')->name('user');
    Route::get('/users', 'Api\Users\UsersController@allUsers')->name('users');
});

