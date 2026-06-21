<aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
    <div class="sidebar-header">
        <a class="brand-mark" href="{{ route('admin') }}" aria-label="adminHMD dashboard">
            <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
            <span class="brand-copy">
                <span class="brand-title">adminHMD</span>
                <span class="brand-subtitle">Admin Template</span>
            </span>
        </a>
    </div>

    <nav class="sidebar-nav">
        <a class="nav-link {{ request()->routeIs('admin') ? 'active' : '' }}" href="{{ route('admin') }}"
            @if (request()->routeIs('admin')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
            <span class="nav-text">Dashboard</span>
        </a>
        <a class="nav-link {{ request()->routeIs('users') ? 'active' : '' }}" href="{{ route('users') }}"
            @if (request()->routeIs('users')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
            <span class="nav-text">Users</span>
        </a>
        <a class="nav-link {{ request()->routeIs('adduser') ? 'active' : '' }}" href="{{ route('adduser') }}"
            @if (request()->routeIs('adduser')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
            <span class="nav-text">Add User</span>
        </a>
        <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}"
            @if (request()->routeIs('profile')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
            <span class="nav-text">Profile</span>
        </a>
        <a class="nav-link {{ request()->routeIs('charts') ? 'active' : '' }}" href="{{ route('charts') }}"
            @if (request()->routeIs('charts')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-bar-chart-line" aria-hidden="true"></i></span>
            <span class="nav-text">Charts</span>
        </a>
        <a class="nav-link {{ request()->routeIs('tables') ? 'active' : '' }}" href="{{ route('tables') }}"
            @if (request()->routeIs('tables')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
            <span class="nav-text">Tables</span>
        </a>
        <a class="nav-link {{ request()->routeIs('forms') ? 'active' : '' }}" href="{{ route('forms') }}"
            @if (request()->routeIs('forms')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
            <span class="nav-text">Forms</span>
        </a>
        <a class="nav-link {{ request()->routeIs('components') ? 'active' : '' }}" href="{{ route('components') }}"
            @if (request()->routeIs('components')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i></span>
            <span class="nav-text">Components</span>
        </a>
        <a class="nav-link {{ request()->routeIs('alerts') ? 'active' : '' }}" href="{{ route('alerts') }}"
            @if (request()->routeIs('alerts')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-exclamation-triangle" aria-hidden="true"></i></span>
            <span class="nav-text">Alerts</span>
        </a>
        <a class="nav-link {{ request()->routeIs('modals') ? 'active' : '' }}" href="{{ route('modals') }}"
            @if (request()->routeIs('modals')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-window-stack" aria-hidden="true"></i></span>
            <span class="nav-text">Modals</span>
        </a>
        <a class="nav-link {{ request()->routeIs('settings') ? 'active' : '' }}" href="{{ route('settings') }}"
            @if (request()->routeIs('settings')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
            <span class="nav-text">Settings</span>
        </a>
        <a class="nav-link {{ request()->routeIs('blank') ? 'active' : '' }}" href="{{ route('blank') }}"
            @if (request()->routeIs('blank')) aria-current="page" @endif>
            <span class="nav-icon"><i class="bi bi-file-earmark" aria-hidden="true"></i></span>
            <span class="nav-text">Blank Page</span>
        </a>
    </nav>

    <div class="sidebar-user">
        <img class="avatar-img avatar-md sidebar-user-avatar"
            src="{{ asset('admin_assets/images/avatar/avatar.jpg') }}" alt="Admin Hasan" />
        <strong>Admin Hasan</strong>
        <small>Active Workspace</small>
    </div>

    <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">System running smoothly</span>
    </div>
</aside>
