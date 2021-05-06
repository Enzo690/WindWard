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
                </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>
                            {{$order->id}}
                        </td>
                        <td>
                            {{$order->firstname}}
                        </td>
                        <td>
                            {{$order->lastname}}
                        </td>

                        <td>
                            <a href="/admin/order/{{$order->id}}"><i class="fas fa-search"></i></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection

