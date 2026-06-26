@extends('layouts.admin.app')

@section('title', 'Profile')

@section('content')
    <div class="admin-shell">
        @include('layouts.admin.auth.navbar.navbar')

        <main class="dashboard-content">
            <div class="container-fluid px-3 px-lg-4 py-4">
                <div class="page-heading">
                    <div class="page-heading-copy">
                        <span class="page-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
                        <div>
                            <p class="eyebrow mb-1">Account</p>
                            <h1 class="h3 mb-1">Profile</h1>
                            <p class="text-muted mb-0">Manage your personal details, bio, and contact preferences.
                            </p>
                        </div>
                    </div>

                </div>

                <section class="row g-3">
                    <div class="col-12 col-xl-4">
                        <div class="panel h-100 text-center profile-card">
                            <div class="profile-cover"><img
                                    src="{{ asset('admin_assets/images/png/dasher-ui-bootstrap-5.jpg') }}"
                                    alt="adminHMD dashboard preview"></div>
                            <img class="avatar-img avatar-xl profile-photo"
                                src="{{ asset('admin_assets/images/avatar/avatar.jpg') }}" alt="Admin Hasan">
                            <h2 class="h5 mt-3 mb-1">{{ Auth::user()->name }}</h2>
                            <p class="text-muted mb-3">Product Administrator</p>
                            <div class="d-flex justify-content-center gap-2"><span
                                    class="badge text-bg-primary">{{ Auth::user()->role }}</span><span
                                    class="badge text-bg-success">Verified</span></div>
                            <div class="info-list mt-4 text-start">
                                <div><span>Email</span><strong>{{ Auth::user()->email }}</strong></div>
                                <div><span>Role</span><strong>{{ Auth::user()->role }}</strong></div>
                                <div><span>Created At</span><strong>{{ Auth::user()->created_at }}</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-8">
                        <form action="{{ route('admin.profile.update') }}" method="POST" class="panel needs-validation"
                            novalidate>
                            @csrf
                            @method('PUT')
                            <div class="panel-header">
                                <div>
                                    <h2 class="h5 mb-1 section-title"><i class="bi bi-person-gear"
                                            aria-hidden="true"></i><span>Profile Settings</span></h2>
                                    <p class="text-muted mb-0">Update your account profile and contact details.</p>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6"><label class="form-label" for="profileName">Name</label><input
                                        class="form-control" id="profileName" name="name" type="text"
                                        value="{{ Auth::user()->name }}" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6"><label class="form-label" for="profileEmail">Email</label><input
                                        class="form-control" id="profileEmail" name="email" type="email"
                                        value="{{ Auth::user()->email }}" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6"><label class="form-label" for="profileEmail">Phone</label><input
                                        class="form-control" id="profileEmail" name="phone" type="text"
                                        value="{{ Auth::user()->phone }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6"><label class="form-label" for="profileEmail">Password</label><input
                                        name="password" class="form-control" id="profileEmail" type="text"
                                        value="">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="d-flex justify-content-end mt-4"><button class="btn btn-primary" type="submit"><i
                                        class="bi bi-check2-circle" aria-hidden="true"></i> Save
                                    Profile</button></div>
                        </form>
                    </div>
                </section>
            </div>
        </main>

        @include('layouts.admin.fotter.fotter')
    </div>
    </div>

@endsection
