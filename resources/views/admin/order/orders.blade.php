@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Commandes</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="card">
        <div class="card-header border-0">
            <h3 class="card-title">Commandes</h3>
        </div>
        <div class="card-content">
                    <table class="table is-hoverable">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Ville</th>
                        <th>Pays</th>
                        <th>Prix</th>
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
                                {{$order->city}}
                            </td>
                            <td>
                                {{$order->country}}
                            </td>
                            <td>
                                {{$order->price}}€
                            </td>

                            <td>
                                <a href="/admin/order/{{$order->id}}"><i class="fas fa-search"></i></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
        </div>
        <footer class="card-footer is-centered">
            {{ $orders->links() }}
        </footer>
    </div>



@endsection

