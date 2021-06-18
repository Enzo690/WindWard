@extends('layouts.app')

@section('content')
    <div id="header" style="background-image: url('/images/background/header.svg')">
        @auth


        <div class="dropdown header-buttonflex header-register" style="background-color: #043A5B;">
            <a id="my-dropdown" href="section=mysection" class="dropdown-toggle" style=" color: white;" data-toggle="dropdown">{{ Auth::user()->pseudonyme }}</a>
        
            <ul class="dropdown-menu">
                <li>
                    <form style="text-align: center;" method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a style="padding: 3%" class="text-danger" href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Déconnexion') }}
                        </a>
                    </form>
                </li>
            </ul>
        
        </div>


        @endauth
        @guest

        @if (Route::has('login'))

        <a href="/login" id="header-login">
            Connexion
        </a>
        <a href="/login" class="header-button header-register">
            Insription
        </a>
    @endif

                @endguest
        <div id="header-arrow">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <h1>WindWard</h1>
        <h2>Procurez-vous des éoliennes pour les personnes dans le besoin</h2>
        <a href="product" class="header-button">
            Commander
        </a>
    </div>
    <div id="part">
        <h2>Association à but non lucratif</h2>
        <div id="part-light">
            <img src="/images/light.svg" alt="">
            <h3>Nous voulons pouvoir apporter notre aide
                aux personnes dans le besoin sans que celles-ci
                aient un coût.
                Nous nous basons sur un principe de bénévolat. </h3>
        </div>
        <div id="part-blue">
            <div class="part-blue-svg">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none">
                    <path d="M0.00,49.98 C108.63,-132.73 313.48,290.62 501.40,12.33 L500.00,150.00 L0.00,150.00 Z"></path>
                </svg>
            </div>
            <div id="part-blue-separation">
                <h2>Vous alimenter ? Notre mission !</h2>
                <a href="en-savoir-plus-sur-windward" id="part-blue-about">
                    En savoir plus sur nos services
                </a>
                <img src="/images/mountain.png" alt="">
            </div>
            <div class="part-blue-svg">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none">
                    <path d="M0.00,49.98 C108.63,-132.73 313.48,290.62 501.40,12.33 L500.00,150.00 L0.00,150.00 Z"></path>
                </svg>
            </div>
        </div>
    </div>

    <div id="footer-social">
        {{-- <a href="https://www.instagram.com/" target="_blank">
            <img src="/images/social/instagram.svg" alt="Instagram logo">
            <p></p>
            <h3>Instagram</h3>
        </a>
        <a href="https://www.youtube.com/" target="_blank">
            < src="/images/social/youtube.svg" alt="YouTube logo">
            <p></p>
            <h3>YouTube</h3>
        </a> --}}
    </div>

@endsection
