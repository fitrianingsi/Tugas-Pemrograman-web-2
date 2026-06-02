@extends('layouts.app')

@section('content')

<!-- Banner -->
<section class="hero-section text-white">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">

                <p class="text-warning fw-bold">
                    FILM AKAN TAYANG
                </p>

                <h1 class="display-4 fw-bold">
                    Selamat Datang di Movie App
                </h1>

                <p class="lead">
                    Kelola informasi film yang sedang tayang dan akan tayang dengan mudah.
                </p>

                <a href="#now-showing" class="btn btn-warning btn-lg">
                    Lihat Film
                </a>

            </div>

            <div class="col-md-6">

                <div class="banner-box rounded-4 shadow">

                    <div class="text-center">

                        <h3>
                            Banner Film
                        </h3>

                        <p>
                            Poster film akan tampil di sini
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Film Sedang Tayang -->
<section id="now-showing" class="py-5">

    <div class="container">

        <h2 class="section-title mb-4">
            Film Sedang Tayang
        </h2>

        <div class="card border-0 shadow-sm empty-card">

            <div class="card-body text-center p-5">

                <h4>
                    Belum Ada Data Film
                </h4>

                <p class="text-muted">
                    Data film akan muncul setelah fitur Movie dibuat.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- Menu -->
<section class="py-5">

    <div class="container">

        <h2 class="section-title mb-4">
            Menu Pengelolaan
        </h2>

        <div class="row">

            <div class="col-md-4 mb-4">

                <div class="card menu-card border-0 shadow-sm h-100">

                    <div class="card-body text-center">

                        <h4>
                            Daftar Film
                        </h4>

                        <p class="text-muted">
                            Melihat seluruh data film.
                        </p>

                        <a href="#" class="btn btn-dark">
                            Buka
                        </a>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="card menu-card border-0 shadow-sm h-100">

                    <div class="card-body text-center">

                        <h4>
                            Tambah Film
                        </h4>

                        <p class="text-muted">
                            Menambahkan film baru.
                        </p>

                        <a href="#" class="btn btn-warning">
                            Tambah
                        </a>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="card menu-card border-0 shadow-sm h-100">

                    <div class="card-body text-center">

                        <h4>
                            Edit Data
                        </h4>

                        <p class="text-muted">
                            Mengubah dan menghapus data film.
                        </p>

                        <a href="#" class="btn btn-outline-dark">
                            Kelola
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection