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
Route::get('/lenhi', function () {
    return 'NguyenLeYenNhi';
});
Route::get('/Huong', function () {
    return "BuiThiThuHuong";
});

Route::get('/legialoc', function () {
    return "LeGiaLoc";
});

use Illuminate\Support\Facades\DB;

Route::get('/top-budget', function () {

    $movies = DB::table('movie')
        ->orderBy('budget', 'desc')
        ->limit(10)
        ->get();

    return view('top_budget', compact('movies'));

});