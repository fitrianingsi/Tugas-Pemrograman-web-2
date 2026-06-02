@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1 class="fw-bold mb-4">Movie Data</h1>

    <a href="/movie/create" class="btn btn-warning mb-3">
        + Tambah Film
    </a>

    <table class="table table-bordered table-hover">

        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Director</th>
                <th>Year</th>
                <th>Rating</th>
                <th>Action</th>
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
                    <td>⭐ {{ $movie->rating }}</td>

                    <td>

                        <a href="/movie/{{ $movie->id }}/edit"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="/movie/{{ $movie->id }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus film ini?')">
                                Hapus
                            </button>

                        </form>

                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="7" class="text-center text-muted">
                        Belum ada data film
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection