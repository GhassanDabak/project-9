@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>
                        <a href="{{ url('edit-category/'.$data->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ url('delete-category/'.$data->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ url('add-category') }}" class="btn btn-primary mt-3">Add Category!</a>
</div>

@endsection
