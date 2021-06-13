@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gestion Utilisateurs</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="col-md-12">
        <div class="card card-light card-outline">
            <div class="card-header">
                <h3 class="card-title">Utilisateurs</h3>
            </div>
            <!-- /.card-header -->
            <form method="post" action="{{ route("user.destroy") }}" >
                @csrf
                <input name="_method" type="hidden" value="DELETE">

                <div class="card-body p-0">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                        <div class="float-right">
                            <div class="btn-group">
                                {{ $users->links() }}
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>
                    <div class="table-responsive mailbox-messages">

                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nom d'utilisateur</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)

                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input name="users[]" type="checkbox" value="{{$user->id}}" id="check1">
                                        </div>
                                    </td>
                                    <td>
                                        {{$user->pseudonyme}}
                                    </td>
                                    <td>
                                        {{$user->role->libelle}}
                                    </td>

                                    <td>
                                        {{$user->email}}
                                    </td>

                                    <td>
                                        <a href="/admin/users/{{$user->id}}"><i class="fas fa-search"></i></a>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                        <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
            </form>
            <!-- /.card-body -->
            <div class="card-footer p-0">
                <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                    </button>
                    <div class="btn-group">
                        <button type="submit" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <!-- /.btn-group -->
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                    <div class="float-right">
                        <div class="btn-group">
                            {{ $users->links() }}

                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <!-- /.float-right -->
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>


@endsection
