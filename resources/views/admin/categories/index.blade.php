@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Name</th>
                    <th>Description </th>
                    <th>Image </th>
                    <th>Image ALT</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->description}}</td>
                    <td>
                        <img src={{ asset('images/uploads/' . $data->image) }} name="image" width="50px" height="100px" alt={{$data->image_alt}}/>
                    </td>
                    <td>{{$data->image_alt}}</th>
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
