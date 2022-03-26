@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Image URL</th>
                    <th>Image ALT</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->description}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->cat_id}}</td>
                    <td>
                        <img src={{ asset('images/uploads/' . $data->image) }} name="image" width="100px" height="100px" alt={{$data->img_alt}}/>

                    </td>
                    <td>{{$data->img_alt}}</td>
                    <td>
                        <a href="{{ url('edit-product/'.$data->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ url('delete-product/'.$data->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ url('add-product') }}" class="btn btn-primary mt-3">Add Product!</a>
</div>

@endsection
