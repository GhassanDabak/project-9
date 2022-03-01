@extends('layouts.admin')
@section('content')
<div class="col-lg-9">
    <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <form action="{{ url('update-user/' . $user->id) }}" method="post" novalidate="novalidate">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="control-label mb-1">Username</label>
                    <input id="name" name="name" type="text" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="form-group has-success">
                    <label for="email" class="control-label mb-1">Email</label>
                    <input id="email" name="email" type="text" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="form-group has-success">
                    <label for="password" class="control-label mb-1">Password</label>
                    <input id="password" name="password" type="password" class="form-control"
                        value="{{ $user->password }}">
                </div>
                <div>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
