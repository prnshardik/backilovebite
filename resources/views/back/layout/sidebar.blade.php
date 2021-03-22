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
            <li class="{{ Request::is('back/dashboard*') ? 'active' : '' }}">
                <a href="{{ route('back.home') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
