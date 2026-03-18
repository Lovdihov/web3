<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function topMovies()
    {
        
        $movies = DB::table('movie')
                    ->orderBy('vote_average', 'desc')
                    ->limit(10)
                    ->get();

        
        return view('movie2', compact('movies'));
    }

    public function longRuntime()
    {
        // Lấy 10 phim có runtime > 120
        $movies = DB::table('movie')
                    ->where('runtime', '>', 120)
                    ->limit(10)
                    ->get();
        
        return view('movies.long_runtime', compact('movies'));
    }
}