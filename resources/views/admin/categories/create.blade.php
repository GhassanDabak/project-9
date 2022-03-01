
@extends('layouts.admin')
@section('content')
<div class="col-lg-9">
    <div class="card">
        <div class="card-header">Create Category</div>
        <div class="card-body">
            <form action="{{ url('insert-category') }}" method="post" novalidate="novalidate">
                @csrf
                <div class="form-group">
                    <label for="name" class="control-label mb-1">Username</label>
                    <input id="name" name="name" type="text" class="form-control">
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
