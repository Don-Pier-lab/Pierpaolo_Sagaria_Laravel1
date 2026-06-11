<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dettagli: {{ $movie['title'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('homepage') }}">MarvelBlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aboutUs') }}">Chi siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            I nostri servizi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('movies') }}">Tutti i nostri film</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="movie-page">
        <h1 class="page-title">Dettagli del film: <span class="accent">{{ $movie['title'] }}</span></h1>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 detail-text">
                    <h3>Titolo: {{ $movie['title'] }}</h3>
                    <h4>Regista: {{ $movie['director'] }}</h4>
                    <p>Genere: {{ $movie['genre'] }}</p>
                    <p>Anno: {{ $movie['year'] }}</p>
                    <p class="mt-4">{{ $movie['plot'] }}</p>
                    <a href="{{ route('movies') }}" class="btn btn-danger mt-3">Torna ai film</a>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <img src="{{ asset('media/' . $movie['image']) }}" class="detail-poster" alt="{{ $movie['title'] }}">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>