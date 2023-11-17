<?php

namespace App\Http\Controllers\User;

use App\Models\Movie;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $featuredMovies = Movie::whereIsFeatured(true)->get();
        $movies = Movie::all();
        return inertia('User/Dashboard/Index', [
            'featuredMovies' => $featuredMovies,
            'Movies' => $movies,
        ]);
    }
}
