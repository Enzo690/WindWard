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
        <h1 class="header-title">Contact</p>
        </h1>
    </div>
    <div id="part" class="contact">
        <img src="/images/stain-3.svg" alt="Stain">
        <div id="contact-main">
            <div class="contact-main-block">
                <form action="" method="post">
                    <div>
                        <input type="text" name="name" size="10" placeholder="Nom">
                        <label for="name"></label>
                    </div>
                    <div>
                        <input type="text" name="surname" size="10" placeholder="Prénom">
                        <label for="surname"></label>
                    </div>
                    <div>
                        <input type="email" name="email" size="10" placeholder="Email">
                        <label for="email"></label>
                    </div>
                    <div>
                        <input type="tel" name="phone" size="10" placeholder="Téléphone">
                        <label for="phone"></label>
                    </div>
                    <div>
                        <input type="text" name="subject" size="10" placeholder="Sujet">
                        <label for="subject"></label>
                    </div>
                    <div>
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </div>


@endsection
