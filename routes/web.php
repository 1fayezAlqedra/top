<?php
// Route::get('url' , 'action ') ;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/Admin', [AdminController::class ,"admin"]);
Route::get('/test' , [HomeController::class,"test"])->name('test.home') ;
Route::get('/about' , [HomeController::class,"about"])->name('test.about') ;
Route::get('/contact' , [HomeController::class,"contact"])->name('test.contact') ;




// Route::get('/contact', function () {
//     return 'Welcome to my contact page';
// })->name('ABC');

// Route::get('/blog{id}', function ($id) {

//     return 'Blog number #' . $id;

// });


