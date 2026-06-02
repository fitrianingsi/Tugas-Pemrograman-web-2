@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <h1 class="fw-bold mb-4">
            Tambah Film
        </h1>

        <form action="/movie" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label class="form-label">Judul Film</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Genre</label>
                <input type="text" name="genre" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Director</label>
                <input type="text" name="director" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Release Year</label>
                <input type="number" name="release_year" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Rating</label>
                <input type="number" step="0.1" name="rating" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Poster</label>
                <input type="file" name="poster" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Status Film</label>

                <select name="status" class="form-control">

                    <option value="sedang_tayang">
                        Sedang Tayang
                    </option>

                    <option value="akan_tayang">
                        Akan Tayang
                    </option>

                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Sinopsis</label>
                <textarea name="synopsis" class="form-control" rows="4"></textarea>
            </div>

            <button class="btn btn-warning">
                Simpan
            </button>

        </form>
    </div>
@endsection
