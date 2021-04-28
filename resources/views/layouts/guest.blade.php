<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="robots" content="noindex">
    <meta content="WindWard" property="og:title">
    <meta content="WindWard" property="og:site_name">
    <meta content="WindWard, procurez-vous des éoliennes pour les personnes dans le besoin" property="og:description">
    <meta content="WindWard, procurez-vous des éoliennes pour les personnes dans le besoin" name="description">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Librairy style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- librairy script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <title>WindWard</title>

</head>

<body>

    <header>
        <!-- Navbar -->
        <nav class="navbar">
            <a class="nav-item" href="/">Accueil<span class="sr-only"></span></a>
            <a class="nav-item" href="href">Produits<span class="sr-only"></span></a>
            <a class="nav-item" href="href">Blog<span class="sr-only"></span></a>
            <a class="nav-item" href="href">Contact<span class="sr-only"></span></a>
            <a class="nav-item" href="href">Équipe<span class="sr-only"></span></a>
        </nav>
        <!-- Navbar -->
        <!-- Menu burger -->
        <button class="navbar-burger">
            <span class="navbar-icon material-icons">
                menu
            </span>
            <span class="navbar-close material-icons">
                close
            </span>
        </button>
        <ul class="navbar-menu">
            <li><a href="/">Accueil<span class="sr-only"></span></a></li>
            <li><a href="href">Produits<span class="sr-only"></span></a></li>
            <li><a href="href">Blog<span class="sr-only"></span></a></li>
            <li><a href="href">Contact<span class="sr-only"></span></a></li>
            <li><a href="href">Équipe<span class="sr-only"></span></a></li>
        </ul>
        <!-- Menu burger -->
        
    </header>

    

    <div id="part" class="font-sans text-gray-900">
        {{ $slot }}
    </div>

</body>

</html>