<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// ===== CODE NHÓM =====

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