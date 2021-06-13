@extends('layouts.app')

@section('content')
    <div id="header" style="background-image: url('/images/background/header.svg')">
        @auth


        <div class="dropdown header-buttonflex" style="background-color: white;" id="header-register">
            <a id="my-dropdown" href="section=mysection" class="dropdown-toggle" style=" color: #043A5B;" data-toggle="dropdown">{{ Auth::user()->pseudonyme }}</a>
        
            <ul class="dropdown-menu">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a style="padding: 3%" class="text-danger" href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log out') }}
                </a>
                </form>
            </ul>
        
        </div>


        @endauth
        @guest

        @if (Route::has('login'))

        <a href="/login" id="header-login">
            Connexion
        </a>
        <a href="/login" class="header-button" id="header-register">
            Insription
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

            <a class="pagination-previous btn btn-outline-light"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
            <div class="btn-group">

            </div>
            <span>1</span>
            <span class="blog-active">2</span>
            <span>3</span>
            <a class="pagination-previous btn btn-outline-light"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
            <div id="blog-bar">
                    @csrf
                    <input type="text" placeholder="" name="search">
                <i id="subSearch" class="fa fa-search" aria-hidden="true"></i>
            </div>
        </div>
        </form>

        <img src="/images/stain-1.svg" alt="Stain">

            @foreach ($articles as $article)
            <a href="/blog/show/{{$article->slug}}">

                <div class="article">
                    <h2>{{$article->title}}</h2>
                    <p>Dernière mise à jour : {{ $article->updated_at->diffForHumans()}}</p>
                </div>
            </a>

            @endforeach


        <div id="blog-separation"></div>
    </div>


@endsection
