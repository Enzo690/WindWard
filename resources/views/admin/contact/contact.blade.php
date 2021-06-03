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

    <div class="col-md-12">
        <div class="card card-light card-outline">
            <div class="card-header">
                <h3 class="card-title">Contact</h3>
            </div>
            <!-- /.card-header -->
            <form method="post" action="{{ route("contact.destroy") }}" >
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
                            {{ $contacts->links() }}
                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <!-- /.float-right -->
                </div>
                <div class="table-responsive mailbox-messages">

                    <table class="table table-hover table-striped">
                        <tbody>
                        @foreach ($contacts as $contact)

                            <tr>
                            <td>
                                <div class="icheck-primary">
                                    <input name="contacts[]" type="checkbox" value="{{$contact->id}}" id="check1">
                                </div>
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
                                <a href="/admin/contact/{{$contact->id}}"><i class="fas fa-search"></i></a>
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
                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                    </button>
                    <div class="btn-group">
                        <button type="submit" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <!-- /.btn-group -->
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                    <div class="float-right">
                        <div class="btn-group">
                            {{ $contacts->links() }}

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
