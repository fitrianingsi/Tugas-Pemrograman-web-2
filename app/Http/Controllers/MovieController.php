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

    public function edit(Movie $movie)
    {
        return view('movie.edit', [
            'title' => 'Edit Movie',
            'movie' => $movie
        ]);
    }

    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'director' => 'required',
            'release_year' => 'required',
            'rating' => 'required',
            'synopsis' => 'required',
            'status' => 'required'
        ]);

        $movie->update($validated);
        return redirect('/movie');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('/movie');
    }
}
