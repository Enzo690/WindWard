@extends('layouts.admin')
@section('content')
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
    </div>



@endsection
