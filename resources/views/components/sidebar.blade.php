<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">WISATA ZAINUR</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item {{ Request::routeIs('home') ? 'active' : '' }} ">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-tachometer"></i><span>Dashboard</span></a>
            </li>

            <li class="nav-item {{ Request::routeIs('users.index') ? 'active' : '' }} ">
                <a href="{{ route('users.index') }}" class="nav-link "><i class="fas fa-user"></i>
                    <span>Users</span></a>
            </li>

            <li class="nav-item {{ Request::routeIs('categories.index') ? 'active' : '' }} ">
                <a href="{{ route('categories.index') }}" class="nav-link "><i class="fas fa-list-alt"></i>
                    <span>Categories</span></a>
            </li>

            <li class="nav-item {{ Request::routeIs('products.index') ? 'active' : '' }} ">
                <a href="{{ route('products.index') }}" class="nav-link "><i class="fas fa-ticket"></i>
                    <span>Tickets</span></a>
            </li>
        </ul>
    </aside>
</div>
