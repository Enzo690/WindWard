@extends('layouts.admin')
@section('content')

    <div class="content-header">
            <div class="row mb-2">
                <div >
                    <h1 class="m-0">Poster un article</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
    </div>


    <form method="post" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data">
        @csrf

        <div class=" d-flex justify-content-start" >
            <button  type="submit" class="btn btn-outline-primary">Poster</button>
        </div>

        <label class="col-form-label" for="title-article">Titre de l'article</label>

        <div class="input-group" style="margin-bottom: 2%">
            <input id="title-article" class="form-control" type="text" placeholder="Titre de l'article" name="title">
        </div>

        <div class="input-group" style="margin-bottom: 2%">
            <input type="file" name="image" id="image">
        </div>

        <label for="editor">Editeur de texte</label>

        <textarea id="editor" class="editor form-control" name="content"></textarea>

            <div class="input-group" style="margin-bottom: 1%; margin-top: 1%">
                <button type="submit" class="btn btn-outline-primary">Poster</button>
            </div>

    </form>


@endsection
