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

    public function create()
    {
        return view('movie.create', [
            'title' => 'Tambah Movie'
        ]);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'director' => 'required',
            'release_year' => 'required',
            'rating' => 'required',
            'synopsis' => 'required',
            'status' => 'required',
            'poster' => 'nullable|image'
        ]);

        if ($request->hasFile('poster')) {

            $validated['poster'] = $request
                ->file('poster')
                ->store('posters', 'public');
        }

        Movie::create($validated);

        return redirect('/movie');
    }
}
