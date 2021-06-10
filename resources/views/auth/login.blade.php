@extends('layouts.app')
@section('content')

    <div id="header" style="background-image: url('/images/background/header.svg')">
        @guest

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="header-button" id="header-register">
                    Insription
                </a>
            @endif

            @if (Route::has('login'))

                <a href="{{ route('admin.dashboard') }}" id="header-login">
                    Connexion
                </a>
            @endif

        @endguest
        <div id="header-arrow">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <h1 class="header-title">Connexion</p>
        </h1>
    </div>
    <div id="part" class="connexion">
        <img src="/images/stain-3.svg" alt="Stain">
        <div id="team-connexion">
            <div class="team-connexion-block">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2>Connexion</h2>
                    <div>
                        <input type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus size="10" placeholder="Email">
                        <label for="email"></label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div>
                        <input type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" size="10" placeholder="Mot de passe">
                        <label for="password"></label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div id="team-connexion-checkbox">
                        <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }} name="remember">
                        <label for="remember">Se souvenir de moi</label>
                    </div>
                    <button type="submit" class="">
                        {{ __('Login') }}
                    </button>

                </form>
            </div>
            <div class="team-connexion-block">
                <form action="" method="post">
                    <h2>Inscription</h2>
                    <div>
                        <input type="text" name="pseudonyme" size="10" placeholder="Pseudonyme">
                        <label for="pseudonyme"></label>
                    </div>
                    <div>
                        <input type="email" name="email" size="10" placeholder="Email">
                        <label for="email"></label>
                    </div>
                    <div>
                        <input type="password" name="password" size="10" placeholder="Mot de passe">
                        <label for="password"></label>
                    </div>
                    <div>
                        <input type="password" name="confirm" size="10" placeholder="Confirmer">
                        <label for="confirm"></label>
                    </div>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </div>

@endsection
