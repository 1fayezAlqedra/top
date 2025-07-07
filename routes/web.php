<?php
// Route::get('url' , 'action ') ;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return Route('ABC');
// });

Route::get('/' , [HomeController::class, 'index'])->name('home');


Route::get('/about', function () {
    return 'Welcome to my about page';
});
Route::get('/contact', function () {
    return 'Welcome to my contact page';
})->name('ABC');

Route::get('/blog{id}', function ($id) {

    return 'Blog number #' . $id;

});


