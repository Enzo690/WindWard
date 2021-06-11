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
        <h1 class="header-title">Commander</p>
        </h1>
    </div>
    <div id="part" class="product">
        <img src="/images/wind.svg" alt="Wind turbine">
        <div id="product-right">
            <h2>Éolienne</h2>
            <span></span>
            <div>
                <p>Production maximale de 10w/h</p>
                <p>Vitesse maximale de 10 t/m</p>
                <p>Usinage de qualité</p>
                <p>Matériaux de récupération</p>
            </div>
            <div id="product-right-button">
                <a href="contact" class="button">Contacter</a>
            </div>
        </div>
    </div>

@endsection
