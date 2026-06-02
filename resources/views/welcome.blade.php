@extends('layouts.app')

@section('content')
@if($upcomingMovie)
<section class="hero-section" style="background-image:url('{{ asset('storage/' . $upcomingMovie->poster) }}');">
    <div class="hero-overlay">
        <div class="container">
            <div class="hero-content">
                <span class="badge bg-warning text-dark mb-3">COMING SOON</span>
                <h1 class="hero-title">{{ $upcomingMovie->title }}</h1>
                <p class="hero-description mt-3">{{ $upcomingMovie->synopsis }}</p>
                <a href="/movie" class="btn btn-warning btn-lg mt-3">Kelola Film</a>
            </div>
        </div>
    </div>
</section>
@endif

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title mb-4">Film Sedang Tayang</h2>

        <div class="row">
            @forelse($movies as $movie)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card movie-card border-0 shadow-sm">
                        @if($movie->poster)
                            <img src="{{ asset('storage/' . $movie->poster) }}" class="movie-poster">
                        @else
                            <div class="poster-empty-small">Tidak Ada Poster</div>
                        @endif

                        <div class="card-body">
                            <h5 class="fw-bold">{{ $movie->title }}</h5>
                            <p class="text-muted mb-2">{{ $movie->genre }}</p>
                            <span class="badge bg-warning text-dark">⭐ {{ $movie->rating }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning">Belum ada film yang sedang tayang.</div>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection