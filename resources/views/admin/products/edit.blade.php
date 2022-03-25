@extends('layouts.admin')
@section('content')
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">Edit Product</div>
            <div class="card-body">

                <form action="{{ url('update-product/' . $product->id) }}" method="post" novalidate="novalidate">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name" class="control-label mb-1">Name</label>
                        <input id="name" name="name" type="text" class="form-control" value="{{ $product->name }}">
                    </div>
                    <div class="form-group has-success">
                        <label for="description" class="control-label mb-1">Description</label>
                        <input id="description" name="description" type="text" class="form-control" value="{{ $product->description }}">
                    </div>
                    <div class="form-group has-success">
                        <label for="price" class="control-label mb-1">Price</label>
                        <input id="price" name="price" type="price" class="form-control"
                            value="{{ $product->price }}">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Category</label>
                        <select name="cat_id" class="form-control">
                            @foreach($category as $item )
                            <option {{ $product->cat_id == $item->id ? 'selected' : '' }} value="{{ $item->id }} ">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <hr>
                    </div>
                    <div class="form-group has-success">
                        <label for="image" class="control-label mb-1">Image URL</label>
                        <input id="image" name="image" type="file" class="form-control" value="{{ $product->image }}">
                    </div>
                    <div class="form-group has-success">
                        <label for="img_alt" class="control-label mb-1">Image ALT</label>
                        <input id="img_alt" name="img_alt" type="text" class="form-control"
                            value="{{ $product->img_alt }}">
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
