@extends('layouts.admin')
@section('content')
<div class="col-md-12">

    <div class="content-header">
        <div class="row mb-2">
            <div >
                <h1 class="m-0">{{$article->title}}</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>

    <form method="post" action="{{ route("admin.blog.update", ["id" => $article->id]) }}" enctype="multipart/form-data">

        @csrf

        <label class="col-form-label" for="title-article">Titre</label>
        <div class="input-group" style="margin-bottom: 2%">
            <input id="title-article" class="form-control" value="{{$article->title}}" type="text" placeholder="Titre" name="title">
        </div>

        <div class="input-group d-flex" style="margin-bottom: 2%">
            <img  class="img-back col-lg-4" id="article-image" src="{{$article->image == null ? asset('images/elements/noimage.png') : $article->image}}" width="300px"/>
            <input type="file" name="image" id="chooseFiles" style="display: none;" />
            <img id="arrowPrev" src="/images/rightArrow.png" style="display: none" class="col-lg-2">
            <table id="previewTable" class="col-lg-4">
                <thead id="columns"></thead>
                <tbody id="previews"></tbody>
            </table>
        </div>



        <label for="editor">Texte</label>

        <textarea id="editor" class="editor form-control" name="content">{{$article->content}}</textarea>
        <div class="input-group" style="margin-bottom: 1%; margin-top: 1%">
            <button type="submit" class="btn btn-outline-primary">Éditer</button>
        </div>
        <input name="_method" id="chooseFiles" type="hidden" value="PUT">

    </form>
</div>

@endsection
