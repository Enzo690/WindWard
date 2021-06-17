@extends('layouts.admin')
@section('content')
<div class="col-md-12">

    <div class="content-header">
        <div class="row mb-2">
            <div >
                <h1 class="m-0">{{$user->pseudonyme}}</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>

    <form method="post" action={{ route("admin.users.update", ["id" => $user->id]) }}>

        @csrf

        <label class="col-form-label" for="nom-user">Nom</label>
        <div class="input-group" style="margin-bottom: 2%">
            <input id="nom-user" class="form-control" value="{{$user->pseudonyme}}" type="text" placeholder="Nom" name="pseudonyme">
        </div>

        <label class="col-form-label" for="email-user">Email</label>
        <div class="input-group" style="margin-bottom: 2%">
            <input id="email-user" class="form-control" value="{{$user->email}}" type="text" placeholder="Email" name="email">
        </div>

        <label class="col-form-label" for="mdp-user">Mot de passe</label>
        <div class="input-group" style="margin-bottom: 2%">
            <input id="mdp-user" class="form-control" type="password" placeholder="Mot de passe" name="password">
        </div>

        <label class="col-form-label" for="role-user">Rôle</label>
        <div class="input-group" style="margin-bottom: 2%">
            <select name="role_id" id="role-user" class="form-control col-lg-3 col-md-5 col-sm-12 col-12">
                @foreach ($roles as $role)
                    <option @if ($user->role_id === $role->id)
                        selected
                    @endif value="{{ $role->id }}">{{ $role->libelle }}</option>
                @endforeach
            </select>
        </div>

        <input name="_method" id="chooseFiles" type="hidden" value="PUT">

        <div class=" d-flex justify-content-start" >
            <button  type="submit" class="btn btn-outline-primary">Editer</button>
        </div>



    </form>
</div>

@endsection
