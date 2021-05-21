@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="row mb-2">
            <div >
                <h1 class="m-0">{{$article->title}}</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>


    <form method="post" action="" enctype="multipart/form-data">

        <div class=" d-flex justify-content-start" >
            <button  type="submit" class="btn btn-outline-primary">Editer</button>
        </div>

        @csrf
        <label class="col-form-label" for="title-article">Titre de l'article</label>

        <div class="input-group" style="margin-bottom: 2%">
            <input id="title-article" class="form-control" value="{{$article->title}}" type="text" placeholder="Titre de l'article" name="title">
        </div>
        <label for="editor">Editeur de texte</label>

        <img height="500" src="{{$article->image}}" />
        <textarea id="editor" class="editor form-control" name="content{{$article->id}}">{{$article->content}}</textarea>
        <div class="input-group" style="margin-bottom: 1%; margin-top: 1%">
            <button type="submit" class="btn btn-outline-primary">Editer</button>
        </div>

    </form>

@endsection
