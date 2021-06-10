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
        <h1 class="header-title">Blog</p>
        </h1>
    </div>

    <div id="part" class="blog">
        <form method="post" id="searchForm">

        <div id="blog-search">

            <i class="fa fa-caret-left" aria-hidden="true"></i>
            <div class="btn-group">

            </div>
            <span>1</span>
            <span class="blog-active">2</span>
            <span>3</span>
            <i class="fa fa-caret-right" aria-hidden="true"></i>
            <div id="blog-bar">
                    @csrf
                    <input type="text" placeholder="" name="search">
                <i id="subSearch" class="fa fa-search" aria-hidden="true"></i>
            </div>
        </div>
        </form>

        <img src="/images/stain-1.svg" alt="Stain">

            @foreach ($articles as $article)
            <a href="blog/show/{{$article->slug}}">

                <div class="article">
                    <h2>{{$article->title}}</h2>
                    <p>Dernière mise à jour : {{ $article->updated_at->diffForHumans()}}</p>
                </div>
            </a>

            @endforeach

        <div id="blog-separation"></div>
    </div>


@endsection
