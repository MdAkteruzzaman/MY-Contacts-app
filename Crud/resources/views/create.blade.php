@extends('layouts.app')
@section('content')

<div class="container">

    <div class="card" style="margin-top:3rem">
        <div class="card-header">Add New Contact Information</div>
        <div class="card-body">
            <form action="{{ route('store') }}" method="post">
              {{ csrf_field() }}

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="firstname">First name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="First name" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="lastname">Last name</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Last name" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder=" Email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder=" Phone Number" required>
                    </div>

                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>

        </div>

    </div>
</div>
@endsection
