<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="/">
            <img src="{{asset('images/icon/ayat-logo.png')}}" alt="Ayat Zoubi Logo" width="150" height="30 !important"/>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="chart.html">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{url('users')}}">
                        <i class="fa-solid fa-users"></i>Users</a>
                </li>
                <li>
                    <a href="{{url('categories')}}">
                        <i class="fa-solid fa-layer-group"></i>Categories</a>
                </li>
                <li>
                    <a href="{{ url('products')}}">
                        <i class="fa-solid fa-box"></i></i>Products</a>
                </li>
                <li>
                    <a href="{{url('orders')}}">
                        <i class="fas fa-calendar-alt"></i>Orders</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
