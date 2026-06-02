@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <h1 class="fw-bold mb-4">
            Movie Data
        </h1>

        <a href="/movie/create" class="btn btn-warning mb-3">
            Tambah Film
        </a>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Director</th>
                    <th>Year</th>
                    <th>Rating</th>
                </tr>
            </thead>

            <tbody>
                @forelse($movies as $movie)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->genre }}</td>
                        <td>{{ $movie->director }}</td>
                        <td>{{ $movie->release_year }}</td>
                        <td>{{ $movie->rating }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">
                            Belum ada data film
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>
@endsection
