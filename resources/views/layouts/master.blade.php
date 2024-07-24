<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Blog Laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="p-3 mb-2 bg-success-subtle text-success-emphasis">

    <head>
        <nav class="navbar sticky-top bg-body-tertiary" style="background-color:  #20c997;">
            <div class="container-fluid">
                <h1>Mon Blog Laravel</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="dropdown-item active" href="/contact-us">Contactez-nous</a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item" href="/about">A Propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item" href="/articles">Articles</a>
                    </li>
                </ul>
            </div>
        </nav>
    </head>

    <main class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @yield('contenu')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>