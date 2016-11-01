<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dbtest',function(){
//    return view('dbtest');
//});

Route::any('/test','TestController@index');
Route::any('/user','UserController@index');

//Route::resource('test', 'TestController');

Route::any('/test-store','TestController@store');