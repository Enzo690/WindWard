@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Articles</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="col-md-12">
        <div class="card card-light card-outline">
            <div class="card-header"></div>
            <!-- /.card-header -->

            <form method="post" action="{{ route("article.destroy") }}" >
                @csrf
                <input name="_method" type="hidden" value="DELETE">

                <div class="card-body p-0">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <a href="/admin/blog/create" class="btn btn-outline-primary">Créer un article</a>

                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                        <div class="float-right">
                            <div class="btn-group">
                                {{ $articles->links() }}
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>
                    <div class="table-responsive mailbox-messages">

                        <table class="table is-hoverable">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Titre</th>
                                <th>Publication</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input name="articles[]" type="checkbox" value="{{$article->id}}" id="check1">
                                        </div>
                                    </td>
                                    <td>
                                        {{$article->title}}
                                    </td>

                                    <td>
                                        {{$article->created_at->format('d.m.Y')}}
                                    </td>

                                    <td>
                                        <a href="/admin/blog/show/{{$article->slug}}"><i class="fas fa-search"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer p-0">
                    <div class="mailbox-controls">
                        <!-- Check all button -->

                        <a href="/admin/blog/create" class="btn btn-outline-primary">Créer un article</a>

                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                        <div class="float-right">
                            <div class="btn-group">
                                {{ $articles->links() }}

                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>


@endsection
