@extends('layouts.app')

@section('content')
    <div id="header" style="background-image: url('/images/background/header.svg')">
        @auth


            <div class="dropdown header-buttonflex header-register" style="background-color: #043A5B;">
                <a id="my-dropdown" href="section=mysection" class="dropdown-toggle" style=" color: white;"
                    data-toggle="dropdown">{{ Auth::user()->pseudonyme }}</a>

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
        <h1 class="header-title">Équipe</h1>
    </div>
    <div id="part" class="team">
        <div class="team-member">
            <div class="team-member-head">
                <img src="/images/enzo.jpg" alt="Head of Enzo">
            </div>
            <div>
                <h2>Enzo Thibert</h2>
                <p>Jeune ambitieux, passionné par le code.
                    Toujours en quête d'aller plus loin,
                    découvrir de nouveaux horizons et de
                    tendre la main à son prochain</p>
            </div>
        </div>
        <span style="margin-bottom: 150px;"></span>
        <div class="team-member">
            <div class="team-member-head">
                <img src="/images/florentin.jpg" alt="Head of Florentin">
            </div>
            <div>
                <h2>Florentin Pupier-Valade</h2>
                <p>Jeune développeur dynamique et ambitieux
                    en quête d'accroître son expérience et de la
                    mettre au profit des autres</p>
            </div>
        </div>
        <span></span>
    </div>
@endsection
