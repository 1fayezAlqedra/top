<?php

use Illuminate\Support\Facades\Route;

// http://localhost:0000/welcome/to/laravel?new=1
//  MVC 

Route::get('/', function () {
    return view('welcome');
});


// request Methods
Route::get('/welcome/to/laravel', 'App\Http\Controllers\WelcomeController@welcome');
// route::post();
// route::delete();
// route::put();
// route::options();
// route::patch();

// other Helper methods 
// Route::view();
// route::group();
// Route::redirect();
// Route::resource();
// Route::apiResource();


