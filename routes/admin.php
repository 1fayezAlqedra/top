<?php
use Illuminate\Support\Facades\Route;

Route::prefix("admin")->group(function () { });
Route::get(<?php echo route ('test.home') ?>, function () {
    return 'admin page ';
});
Route::get("/dashbord", function () {
    return 'dashbord page ';
});
Route::get("/statistics", function () {
    return 'statistics page ';
});
Route::get("/registration", function () {
    return 'registration page ';
});






