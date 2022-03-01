@extends('layouts.admin')

@section('content')
<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c1">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="zmdi zmdi-account-o"></i>
                </div>
                <div class="text">
                    <h2>{{$users->count()}}</h2>
                    <span>Members Registered</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c2">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
                <div class="text">
                    <h2>{{$categories->count()}}</h2>
                    <span>Categories</span>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c3">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="zmdi zmdi-calendar-note"></i>
                </div>
                <div class="text">
                    <h2>{{$products->count()}}</h2>
                    <span>Product</span>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c4">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="zmdi zmdi-money"></i>
                </div>
                <div class="text">
                    <h2>$1,060,386</h2>
                    <span>total earnings</span>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection
