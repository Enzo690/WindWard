@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Demandes de contact</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="card">
        <div class="card-header border-0">
            <h3 class="card-title">Contact</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Sujet</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>
                            {{$contact->id}}
                        </td>
                        <td>
                            {{$contact->firstname}}
                        </td>
                        <td>
                            {{$contact->lastname}}
                        </td>
                        <td>
                            {{$contact->email}}
                        </td>

                        <td>
                            {{$contact->subject()->first()->subject}}
                        </td>

                        <td>
                            @if($contact->status === 1)
                               <span class="badge-success">Ouvert</span>

                            @else
                                <span class="badge badge-danger">Non ouvert</span>

                            @endif
                        </td>
                        <td>
                            <a href="/admin/contact/{{$contact->id}}"><i class="fas fa-search"></i></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <footer class="card-footer is-centered">
            {{ $contacts->links() }}
        </footer>
    </div>



@endsection
