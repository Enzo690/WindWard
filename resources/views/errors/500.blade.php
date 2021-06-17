@extends('layouts.app')
@section('content')
<div id="header" style="background-image: url('/images/background/header.svg')">
  
    <h1 class="header-title">Erreur<p>500</p>
    </h1>
</div>
<div id="part">
    <h2 id="part-error">Veuillez contacter l'administrateur du site.
        <p>
            <a href="/">Retournez à la page principale</a>
        </p>
    </h2>
</div>
@endsection
