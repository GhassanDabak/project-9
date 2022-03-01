@extends('layouts.admin')
@section('content')
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">Credit Card</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Pay Invoice</h3>
            </div>
            <hr>
            <form action="{{ url('update-category/' . $category->id) }}" method="post" novalidate="novalidate">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="control-label mb-1">Name</label>
                    <input id="name" name="name" type="text" class="form-control" value="{{ $category->name }}">
                </div>
                <div>
                    <button type="submit" class="btn btn-lg btn-info btn-block">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
