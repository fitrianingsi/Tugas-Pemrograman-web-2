@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1 class="fw-bold mb-4">
        Edit Film
    </h1>

    <form action="/movie/{{ $movie->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Judul Film</label>
            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ $movie->title }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="text"
                   name="genre"
                   class="form-control"
                   value="{{ $movie->genre }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Director</label>
            <input type="text"
                   name="director"
                   class="form-control"
                   value="{{ $movie->director }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Release Year</label>
            <input type="number"
                   name="release_year"
                   class="form-control"
                   value="{{ $movie->release_year }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Rating</label>
            <input type="number"
                   step="0.1"
                   name="rating"
                   class="form-control"
                   value="{{ $movie->rating }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Status Film</label>

            <select name="status" class="form-control">

                <option value="sedang_tayang"
                    {{ $movie->status == 'sedang_tayang' ? 'selected' : '' }}>
                    Sedang Tayang
                </option>

                <option value="akan_tayang"
                    {{ $movie->status == 'akan_tayang' ? 'selected' : '' }}>
                    Akan Tayang
                </option>

            </select>

        </div>

        <div class="mb-3">
            <label class="form-label">Sinopsis</label>

            <textarea name="synopsis"
                      rows="4"
                      class="form-control">{{ $movie->synopsis }}</textarea>
        </div>

        <button class="btn btn-warning">
            Update
        </button>

        <a href="/movie" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection