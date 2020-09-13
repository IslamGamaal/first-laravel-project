<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();








//Route::get('/app/users-list', function () {
//    dd("hellooooo");
//    return redirect('/app');
//});
//
//Route::get('/app/profile/{id}', function () {
//    return redirect('/app');
//});
//
//Route::get('/auth', function () {
//    if(!Auth::check()) {
//        $user = App\User::find(1);
//        Auth::login($user);
//    }
//    return Auth::user();
//});
//
//Route::get('/user/{id}', function ($id) {
//    return \App\User::find($id)? \App\User::find($id) : "not found";
//    //return DB::table('users')->where('id', '=', $id)->get();
//});
//
//Route::get('/all_users', function () {
//    return \App\User::all();
//});



