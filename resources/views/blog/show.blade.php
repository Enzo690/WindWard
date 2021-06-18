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
        <h1 class="header-title">{{$article->title}}</p>
        </h1>
    </div>


    <div id="part" class="article">
        <div class="d-flex justify-content-center col-lg-12">{!! $article->content !!}</div>
        <img src="{{$article->image}}" alt="Image de l'article">
    </div>


@endsection
