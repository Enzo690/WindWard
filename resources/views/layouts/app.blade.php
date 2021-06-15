<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta content="WindWard" property="og:title">
    <meta content="WindWard" property="og:site_name">
    <meta content="WindWard, procurez-vous des éoliennes pour les personnes dans le besoin" property="og:description">
    <meta content="WindWard, procurez-vous des éoliennes pour les personnes dans le besoin" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Windward') }}</title>

    <link rel="icon" type="image/svg" href="{{ asset('images/favicon.svg') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>

<body>
<header>
    <!-- Navbar -->
    <nav class="navbar">
        <a class="nav-item" href="/">Accueil<span class="sr-only"></span></a>
        <a class="nav-item" href="/product">Produits<span class="sr-only"></span></a>
        <a class="nav-item" href="/blog">Blog<span class="sr-only"></span></a>
        <a class="nav-item" href="/contact">Contact<span class="sr-only"></span></a>
        <a class="nav-item"  href="/team">Équipe<span class="sr-only"></span></a>
        @auth
            @isAdmin
            <a class="nav-item"  href="/admin">Administration<span class="sr-only"></span></a>
            @endisAdmin
        @endauth


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
        <li><a href="/product">Produits<span class="sr-only"></span></a></li>
        <li><a href="/blog">Blog<span class="sr-only"></span></a></li>
        <li><a href="/contact">Contact<span class="sr-only"></span></a></li>
        <li><a href="/team">Équipe<span class="sr-only"></span></a></li>
        @auth
            @isAdmin
            <li><a href="/admin">Administration<span class="sr-only"></span></a></li>
            @endisAdmin
        @endauth
    </ul>
    <!-- Menu burger -->
</header>

<main>
    <section class="content">
        @yield('content')
    </section>

    <!-- Importation du JS -->
    <script type="text/javascript" src="/js/script.js"></script>
</main>

<footer>
    <img src="{{ asset('images/footer/left.svg') }}" alt="" class="cloud">
    <img src="{{ asset('images/footer/right.svg') }}" alt="" class="cloud">
    <div id="footer-inside">
        <h3>Copyright WindWard</h3>
        <div id="footer-select">
            <select name="lang">
                <option selected>Français</option>
                <option value="1">Anglais</option>
            </select>
        </div>
    </div>
</footer>
</body>

</html>
