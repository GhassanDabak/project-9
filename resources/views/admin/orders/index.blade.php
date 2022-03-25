@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>

                <tr>
                    <th>Order ID</th>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Street</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $data)
                <tr>
                    <td>{{$data->order_id}}</td>
                    <td>{{$data->product_id}}</td>
                    <td>{{$data->firstname}}</td>
                    <td>{{$data->lastname}}</td>
                    <td>{{$data->city}}</td>
                    <td>{{$data->country}}</td>
                    <td>{{$data->street}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
