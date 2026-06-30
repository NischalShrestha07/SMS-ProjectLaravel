<aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
    <div class="sidebar-header">
        <a class="brand-mark d-flex align-items-center gap-3 text-decoration-none" href="{{ route('student.home') }}"
            aria-label="Admin dashboard">
            <span class="brand-icon d-inline-flex align-items-center justify-content-center">
                <i class="bi bi-grid-1x2-fill" aria-hidden="true"></i>
            </span>
            <span class="brand-copy d-flex flex-column">
                <span class="brand-title">Admin</span>
                <span class="brand-subtitle">Admin Panel</span>
            </span>
        </a>
    </div>

    <nav class="sidebar-nav" aria-label="Admin sidebar links">
        <a class="nav-link {{ request()->routeIs('admin.home') ? 'active' : '' }} d-flex align-items-center gap-3"
            href="{{ route('admin.home') }}" @if(request()->routeIs('admin.home')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
            <span class="nav-text flex-grow-1">Dashboard</span>
        </a>

        <a class="nav-link {{ request()->routeIs('admin.users') ? 'active' : '' }} d-flex align-items-center gap-3"
            href="{{ route('admin.users') }}" @if (request()->routeIs('admin.users')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
            <span class="nav-text flex-grow-1">Users</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.create') ? 'active' : '' }} d-flex align-items-center gap-3"
            href="{{ route('admin.create') }}" @if (request()->routeIs('admin.create')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
            <span class="nav-text flex-grow-1">Add User</span>
        </a>

        <a class="nav-link {{ request()->routeIs('admin.profile') ? 'active' : '' }} d-flex align-items-center gap-3"
            href="{{ route('admin.profile') }}" @if (request()->routeIs('admin.profile')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
            <span class="nav-text flex-grow-1">Profile</span>
        </a>
    </nav>

    <div class="sidebar-footer d-flex align-items-center gap-3">
        <img class="avatar-img avatar-md sidebar-user-avatar" src="{{ asset('admin_assets/images/avatar/avatar.jpg') }}"
            alt="{{ Auth::user()->name }}" />
        <div class="d-flex flex-column overflow-hidden">
            <strong class="text-truncate">{{ Auth::user()->name }}</strong>
            <small class="text-truncate">Active Workspace</small>
        </div>
    </div>
</aside>
