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
    <h1 class="header-title">Équipe</p>
    </h1>
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
