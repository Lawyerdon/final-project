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

Route::group([
    'middleware' => 'auth',
//    'prefix' => 'tasks',
], function() {
    Route::resource('images', 'ImageController', ['except' => [
        'show'
    ]]);

    Route::get('/home', 'HomeController@index');
});
Route::auth();

Route::get('/home', 'HomeController@index');
