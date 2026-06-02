<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view('movie.index', [
            'title' => 'Movie Data',
            'movies' => Movie::all()
        ]);
    }
}
