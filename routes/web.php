<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route for TestController@test
Route::get('/test', [\App\Http\Controllers\TestController::class, 'test']);

Route::get('/Nhi', function () {
    return "NguyenThiYenNhi";
});

<<<<<<< HEAD
Route::get('/lenhi', function () {
    return 'NguyenLeYenNhi';
});
Route::get('/Huong', function () {
    return "BuiThiThuHuong";
});
=======

>>>>>>> 68a6d8808b1fd1dd7242cd1e9ffa8b3a68fc9379
