@extends('layouts.admin')
@section('content')
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">Create Category</div>
            <div class="card-body">
                <form action="{{ url('insert-category') }}" method="post" novalidate="novalidate"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="control-label mb-1">Category Name</label>
                        <input id="name" name="name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image" class="control-label mb-1">Image</label>
                        <input id="image" name="image" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image_alt" class="control-label mb-1">Image Alt </label>
                        <input id="image_alt" name="image_alt" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description" class="control-label mb-1">Description </label>
                        <textarea id="description" name="description" rows="4" cols="50" class="form-control"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block">
                            Add Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
