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
    <div class="card">
        <div class="card-header border-0">
            <a href="{{route('admin.blog.create')}}" class="btn btn-outline-primary">Nouveau Article +</a>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Publication</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>
                            {{$article->id}}
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
        </div>
        <footer class="card-footer is-centered">
            {{ $articles->links() }}
        </footer>
    </div>

    



@endsection
