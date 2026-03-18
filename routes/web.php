<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

// Route for TestController@test
Route::get('/test', [\App\Http\Controllers\TestController::class, 'test']);

Route::get('/Nhi', function () {
    return "NguyenThiYenNhi";
});

Route::get('/lenhi', function () {
    return 'NguyenLeYenNhi';
});
Route::get('/Huong', function () {
    return "BuiThiThuHuong";
});

Route::get('/legialoc', function () {
    return "LeGiaLoc";
});


//7.2
Route::get('/top-movies', [MovieController::class, 'topMovies']);