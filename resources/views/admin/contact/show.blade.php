@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Demande de contact de {{$contact->firstname}} {{$contact->lastname}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="card card-light card-outline">
        <div class="card-header">
            <h3 class="card-title">Sujet : {{$contact->subject()->first()->subject}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="mailbox-read-info">
                <h6>De : {{$contact->email}}
                    <span class="mailbox-read-time float-right">{{$contact->created_at->format('d.m.Y')}}</span></h6>
                <h6>Téléphone : {{$contact->user()->first()->phone}}</h6>
            </div>
            <!-- /.mailbox-read-info -->

            <!-- /.mailbox-controls -->
            <div class="mailbox-read-message">
                <p>
                    {{$contact->content}}
                </p>
            </div>
            <!-- /.mailbox-read-message -->
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer -->
        <div class="card-footer">

            <form action="{{ route('contact.destroy', $contact->id)}}" method="post">
                @method('DELETE')
                @csrf
                <input class="btn btn-danger" type="submit" value="Delete" />
            </form>

        </div>
        <!-- /.card-footer -->
    </div>
@endsection
