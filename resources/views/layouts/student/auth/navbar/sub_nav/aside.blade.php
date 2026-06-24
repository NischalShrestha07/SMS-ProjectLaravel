<aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
    <div class="sidebar-header">
        <a class="brand-mark" href="{{ route('admin.home') }}" aria-label="adminHMD dashboard">
            <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
            <span class="brand-copy">
                <span class="brand-title">Student</span>
                <span class="brand-subtitle">Student Panel</span>
            </span>
        </a>
    </div>

    <nav class="sidebar-nav">
        <a class="nav-link {{ request()->routeIs('admin.home') ? 'active' : '' }}" href="{{ route('admin.home') }}"
            @if(request()->routeIs('admin.home')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
            <span class="nav-text">Dashboard</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.users') ? 'active' : '' }}" href="{{ route('admin.users') }}"
            @if (request()->routeIs('admin.users')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
            <span class="nav-text">Users</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.adduser') ? 'active' : '' }}"
            href="{{ route('admin.adduser') }}" @if (request()->routeIs('admin.adduser')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
            <span class="nav-text">Add User</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.profile') ? 'active' : '' }}"
            href="{{ route('admin.profile') }}" @if (request()->routeIs('admin.profile')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
            <span class="nav-text">Profile</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.charts') ? 'active' : '' }}" href="{{ route('admin.charts') }}"
            @if (request()->routeIs('admin.charts')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-bar-chart-line" aria-hidden="true"></i></span>
            <span class="nav-text">Charts</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.tables') ? 'active' : '' }}" href="{{ route('admin.tables') }}"
            @if (request()->routeIs('admin.tables')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
            <span class="nav-text">Tables</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.forms') ? 'active' : '' }}" href="{{ route('admin.forms') }}"
            @if (request()->routeIs('admin.forms')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
            <span class="nav-text">Forms</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.components') ? 'active' : '' }}"
            href="{{ route('admin.components') }}" @if (request()->routeIs('admin.components')) aria-current="page"
            @endif>
            <span class="nav-icon"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i></span>
            <span class="nav-text">Components</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.alerts') ? 'active' : '' }}" href="{{ route('admin.alerts') }}"
            @if (request()->routeIs('admin.alerts')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-exclamation-triangle" aria-hidden="true"></i></span>
            <span class="nav-text">Alerts</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.modals') ? 'active' : '' }}" href="{{ route('admin.modals') }}"
            @if (request()->routeIs('admin.modals')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-window-stack" aria-hidden="true"></i></span>
            <span class="nav-text">Modals</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.settings') ? 'active' : '' }}"
            href="{{ route('admin.settings') }}" @if (request()->routeIs('admin.settings')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
            <span class="nav-text">Settings</span>
        </a>
        <a class="nav-link {{ request()->routeIs('admin.blank') ? 'active' : '' }}" href="{{ route('admin.blank') }}"
            @if (request()->routeIs('admin.blank')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-file-earmark" aria-hidden="true"></i></span>
            <span class="nav-text">Blank Page</span>
        </a>
    </nav>

    <div class="sidebar-user">
        <img class="avatar-img avatar-md sidebar-user-avatar" src="{{ asset('admin_assets/images/avatar/avatar.jpg') }}"
            alt="Admin Hasan" />
        <strong>Admin Hasan</strong>
        <small>Active Workspace</small>
    </div>

    <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">System running smoothly</span>
    </div>
</aside>
