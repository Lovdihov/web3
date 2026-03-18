<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route for TestController@test
Route::get('/test', [\App\Http\Controllers\TestController::class, 'test']);


Route::get('/lenhi', function () {
    return 'NguyenLeYenNhi';
});
Route::get('/Huong', function () {
    return "BuiThiThuHuong";
});

Route::get('/legialoc', function () {
    return "LeGiaLoc";
Route::get('/test', function () {
    return "test";
});