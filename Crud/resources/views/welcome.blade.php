@extends('layouts.app')
@section('content')
<div class="container">
    @if (session('successMsg'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-top:1rem">
        <strong>{{ session('successMsg') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <nav class="navbar navbar-light bg-light" style="margin-top:1rem">
        <span class="navbar-brand mb-0 h1">List Of Contacts</span>
    </nav>
    <table class="table table-striped table-dark table-bordered text-center" style="margin-top:2rem">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Action</th>



            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <th scope="row">{{ $contact->id}}</th>
                <td>{{ $contact->first_name}}</td>
                <td>{{ $contact->last_name}}</td>
                <td>{{ $contact->email}}</td>
                <td>{{ $contact->address}}</td>
                <td>{{ $contact->phone}}</td>
                <td><a class="btn btn-raised btn-primary btn-la" href="{{ route('edit',$contact->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                    <form method="POST" id="delete-form-{{ $contact->id }}" action="{{ route('delete',$contact->id) }}" style="display: none;">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                    </form>
                    <button onclick="myFunction()" class="btn btn-raised btn-danger btn-lr"><i class="fa fa-trash-o" aria-hidden="true"></i>
                      <script>
                          function myFunction() {
                              if (confirm('Are you Sure, You went to delete this?')) {
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{ $contact->id }}').submit();
                              } else {
                                  event.preventDefault();
                              }
                          }
                      </script>
                    </button>
                </td>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}
</div>
@endsection
