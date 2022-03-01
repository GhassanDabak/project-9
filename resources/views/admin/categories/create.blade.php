
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
            <form action="{{ url('insert-category') }}" method="post" novalidate="novalidate">
                @csrf
                <div class="form-group">
                    <label for="name" class="control-label mb-1">Username</label>
                    <input id="name" name="name" type="text" class="form-control">
                </div>
                <div>
                    <button type="submit" class="btn btn-lg btn-info btn-block">
                        Add Category
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
