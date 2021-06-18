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
        <h1 class="header-title">Commander</h1>
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
