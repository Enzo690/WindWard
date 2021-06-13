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
        <h1 class="header-title">{{$article->title}}</p>
        </h1>
    </div>


    <div id="part" class="article">
        <div class="d-flex justify-content-center col-lg-12">{!! $article->content !!}</div>
        <img src="{{$article->image}}">
    </div>


@endsection
