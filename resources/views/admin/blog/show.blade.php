@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="row mb-2">
            <div >
                <h1 class="m-0">{{$article->title}}</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>

    <form method="post" action="{{ route("admin.blog.update", ["id" => $article->id]) }}" enctype="multipart/form-data">

        @csrf

        <input name="_method" type="hidden" value="PUT">
        <div class=" d-flex justify-content-start" >
            <button  type="submit" class="btn btn-outline-primary">Editer</button>
        </div>
        <label class="col-form-label" for="title-article">Titre de l'article</label>
        <div class="input-group" style="margin-bottom: 2%">
            <input id="title-article" class="form-control" value="{{$article->title}}" type="text" placeholder="Titre de l'article" name="title">
        </div>
        <div class="input-group" style="margin-bottom: 2%">
            <img class="img-back" id="article-image" src="{{$article->image == null ? asset('images/elements/noimage.png') : $article->image}}" width="300px"/>
            <input type="file" name="image" id="my_file" style="display: none;" />
        </div>
        <label for="editor">Editeur de texte</label>

        <textarea id="editor" class="editor form-control" name="content">{{$article->content}}</textarea>
        <div class="input-group" style="margin-bottom: 1%; margin-top: 1%">
            <button type="submit" class="btn btn-outline-primary">Editer</button>
        </div>

    </form>
@endsection
