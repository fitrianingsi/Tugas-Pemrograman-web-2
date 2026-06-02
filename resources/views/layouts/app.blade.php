<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Movie App' }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">

        <div class="container">

            <a class="navbar-brand fw-bold" href="/">
                🎬 MOVIE APP
            </a>

            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMovie">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarMovie">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Daftar Film
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Kelola Film
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">

        <small>
            © 2026 Movie App
        </small>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>