
@extends('layouts.admin')
@section('content')
<div class="col-lg-9">
    <div class="card">
        <div class="card-header">Create User</div>
        <div class="card-body">
            <form action="{{ url('insert-user') }}" method="post" novalidate="novalidate">
                @csrf
                <div class="form-group">
                    <label for="firstName" class="control-label mb-1">First Name</label>
                    <input id="firstName" name="firstName" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lastName" class="control-label mb-1">Last Name</label>
                    <input id="lastName" name="lastName" type="text" class="form-control">
                </div>
                <div class="form-group has-success">
                    <label for="email" class="control-label mb-1">Email</label>
                    <input id="email" name="email" type="text" class="form-control">
                </div>
                <div class="form-group has-success">
                    <label for="password" class="control-label mb-1">Password</label>
                    <input id="password" name="password" type="password" class="form-control"
                        >
                </div>
                <div class="col-md-12 mb-3" >
                    <label for="">Admin</label>
                    <input  type="checkbox" name="is_admin">
                </div>
                <div>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">
                        Add User
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
