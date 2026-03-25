<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BookController_3;

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

//7.1
Route::get('/theloai', '\App\Http\Controllers\Movie@theloai');

//7.2
Route::get('/top-movies', [MovieController::class, 'topMovies']);

//7.4
Route::get('/phim/thoi-luong', [MovieController::class, 'longRuntime']);

// top budget
Route::get('/top-budget', function () {

    $movies = DB::table('movie')
        ->orderBy('budget', 'desc')
        ->limit(10)
        ->get();

    return view('top_budget', compact('movies'));
});
