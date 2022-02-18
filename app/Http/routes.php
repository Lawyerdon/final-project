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

Route::get('/user/user', function() {
    return view('user.user');
})->name('user.user');
Route::delete('/image/{image}',function (){
    $image->delete();
    return redirect (route('images.index'));
})->name('images.delete');

Route::get('/image/{image}/edit', function (){
    return view('images.edit',[
        'image'=>$image,
    ]);
})->name('images.edit');