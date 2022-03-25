@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date Created</th>
                    <th>Last Date Update</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>
                        <a href="{{ url('edit-user/'.$user->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ url('delete-user/'.$user->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ url('add-user') }}" class="btn btn-primary mt-3">Add User!</a>
</div>

@endsection
