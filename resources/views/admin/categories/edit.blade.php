@extends('layouts.admin')
@section('content')
<div class="col-lg-9">
    <div class="card">
        <div class="card-header">Edit Category</div>
        <div class="card-body">
            <form action="{{ url('update-category/' . $category->id) }}" method="post" novalidate="novalidate">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="control-label mb-1">Name</label>
                    <input id="name" name="name" type="text" class="form-control" value="{{ $category->name }}">
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
