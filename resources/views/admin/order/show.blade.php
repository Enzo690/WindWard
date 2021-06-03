@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Commande de {{$order->firstname}} {{$order->lastname}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="card card-light card-outline">
        <div class="card-header">
            <h3 class="card-title">Commande n{{$order->id}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="mailbox-read-info">
                    <span class="mailbox-read-time float-right">{{$order->created_at->format('d.m.Y')}}</span></h6>
                <p>Téléphone : {{$order->phone}}</p>
                <p>Adresse : {{$order->adress}}</p>
                <p>Ville : {{$order->city}}</p>
                <p>Pays : {{$order->country}}</p>
                <p>Quantité : {{$order->quantity}}</p>
                <p>Total HT : {{$order->price}}€</p>
            </div>
            <!-- /.mailbox-read-message -->
        </div>
        <!-- /.card-body -->
    </div>
@endsection
