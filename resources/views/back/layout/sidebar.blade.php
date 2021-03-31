<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{ url('back/uploads/users').'/'.auth()->user()->image }}" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</div><small>Administrator</small>
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li class="{{ Request::is('back/home*') ? 'active' : '' }}">
                <a class="{{ Request::is('back/home*') ? 'active' : '' }}" href="{{ route('back.home') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('back/users*') ? 'active' : '' }}">
                <a class="{{ Request::is('back/users*') ? 'active' : '' }}" href="{{ route('back.users') }}"><i class="sidebar-item-icon fa fa-users"></i>
                    <span class="nav-label">Users</span>
                </a>
            </li>
            <li class="{{ Request::is('back/categories*') ? 'active' : '' }}">
                <a class="{{ Request::is('back/categories*') ? 'active' : '' }}" href="{{ route('back.categories') }}"><i class="sidebar-item-icon fa fa-bars"></i>
                    <span class="nav-label">Categories</span>
                </a>
            </li>
            <li class="{{ Request::is('back/products*') ? 'active' : '' }}">
                <a class="{{ Request::is('back/products*') ? 'active' : '' }}" href="{{ route('back.products') }}"><i class="sidebar-item-icon fa fa-tasks"></i>
                    <span class="nav-label">Products</span>
                </a>
            </li>
            <li class="{{ Request::is('back/subscribers*') ? 'active' : '' }}">
                <a class="{{ Request::is('back/subscribers*') ? 'active' : '' }}" href="{{ route('back.subscribers') }}"><i class="sidebar-item-icon fa fa-address-book"></i>
                    <span class="nav-label">Subscribers</span>
                </a>
            </li>
            <li class="{{ Request::is('back/settings*') ? 'active' : '' }}">
                <a class="{{ Request::is('back/settings*') ? 'active' : '' }}" href="{{ route('back.settings') }}"><i class="sidebar-item-icon fa fa-cogs"></i>
                    <span class="nav-label">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
