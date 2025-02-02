<form class="form-inline mr-auto" action="{{ route('admin.users') }}">
    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a>
        </li>
    </ul>
    <div class="search-element">
        <div class="search-backdrop"></div>
    </div>
</form>
<ul class="navbar-nav navbar-right">

    <li class="dropdown"><a href="#" data-toggle="dropdown"
            class="nav-link dropdown-toggle nav-link-lg nav-link-user">

            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-title">Welcome, {{ Auth::user()->name }}</div>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </li>
</ul>
