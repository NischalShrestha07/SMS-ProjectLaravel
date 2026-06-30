<aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
    <div class="sidebar-header">
        <a class="brand-mark d-flex align-items-center gap-3 text-decoration-none" href="{{ route('instructor.home') }}"
            aria-label="Instructor dashboard">
            <span class="brand-icon d-inline-flex align-items-center justify-content-center">
                <i class="bi bi-grid-1x2-fill" aria-hidden="true"></i>
            </span>
            <span class="brand-copy d-flex flex-column">
                <span class="brand-title">Instructor</span>
                <span class="brand-subtitle">Instructor Panel</span>
            </span>
        </a>
    </div>

    <nav class="sidebar-nav" aria-label="Instructor sidebar links">
        <a class="nav-link {{ request()->routeIs('instructor.home') ? 'active' : '' }} d-flex align-items-center gap-3"
            href="{{ route('instructor.home') }}" @if(request()->routeIs('instructor.home')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
            <span class="nav-text flex-grow-1">Dashboard</span>
        </a>

        <a class="nav-link {{ request()->routeIs('instructor.users') ? 'active' : '' }} d-flex align-items-center gap-3"
            href="{{ route('instructor.users') }}" @if (request()->routeIs('instructor.users')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
            <span class="nav-text flex-grow-1">Users</span>
        </a>
        <a class="nav-link {{ request()->routeIs('instructor.add-user') ? 'active' : '' }} d-flex align-items-center gap-3"
            href="{{ route('instructor.add-user') }}" @if (request()->routeIs('instructor.add-user')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
            <span class="nav-text flex-grow-1">Add User</span>
        </a>

        <a class="nav-link {{ request()->routeIs('instructor.profile') ? 'active' : '' }} d-flex align-items-center gap-3"
            href="{{ route('instructor.profile') }}" @if (request()->routeIs('instructor.profile')) aria-current="page" @endif>
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
