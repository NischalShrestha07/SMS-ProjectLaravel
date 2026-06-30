@extends('layouts.student.app')
@section('title', 'AddUser')
@section('student_auth_content')
    <div class="admin-shell">
        @include('layouts.student.auth.navbar.navbar')

        <main class="dashboard-content">
            <div class="container-fluid px-3 px-lg-4 py-4">
                <div class="page-heading">
                    <div class="page-heading-copy">
                        <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                        <div>
                            <p class="eyebrow mb-1">Management</p>
                            <h1 class="h3 mb-1">Add User</h1>
                            <p class="text-muted mb-0">Create a new user account with role and team assignments.
                            </p>
                        </div>
                    </div>
                    <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm"
                            href="{{ route('student.users') }}"><i class="bi bi-arrow-left" aria-hidden="true"></i> Back
                            to Users</a></div>
                </div>

                <section class="row g-3">
                    <div class="col-12 col-xl-8">
                        <form action="{{ route('student.add_user') }}" method="POST" class="panel needs-validation"
                            novalidate>
                            @csrf
                            <div class="panel-header">
                                <div>
                                    <h2 class="h5 mb-1 section-title"><i class="bi bi-person-plus"
                                            aria-hidden="true"></i><span>User Information</span></h2>
                                    <p class="text-muted mb-0">Create a user account with validated fields.</p>
                                </div>
                        </div>
                        <div class="row g-3">
                                <div class="col-md-6"><label class="form-label" for="firstName">Full
                                        name</label><input class="form-control" placeholder="Full Name" id="firstName"
                                        type="text" name="name" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6"><label class="form-label" for="email">Email</label><input
                                        class="form-control" id="email" placeholder="Email Address" name="email"
                                        type="email" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6"><label class="form-label" for="phone">Phone</label><input
                                        class="form-control" id="phone" placeholder="Phone" name="phone"
                                        type="tel" required>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6"><label class="form-label" for="role">Role</label><select
                                        class="form-select" name="role" id="role" required>
                                        <option value="">Choose role</option>
                                        <option value="admin">Admin</option>
                                        <option value="instructor">Instructor</option>
                                        <option value="student">student</option>
                                    </select>
                                    @error('role')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6"><label class="form-label" for="role">Status</label><select
                                        class="form-select" name="status" id="status" required>
                                        <option value="">Choose Status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="col-md-6"><label class="form-label" for="email">Password</label><input
                                        class="form-control" id="email" placeholder="Password" name="password"
                                        type="text" required>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6"><label class="form-label" for="email">Confirm
                                        Password</label><input class="form-control" id="email"
                                        placeholder="Re type Password" name="password_confirmation" type="text" required>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="d-flex flex-wrap justify-content-end gap-2 mt-4"><a
                                    class="btn btn-outline-secondary" href="users.html">Cancel</a><button
                                    class="btn btn-primary" type="submit"><i class="bi bi-person-check"
                                        aria-hidden="true"></i> Create User</button></div>
                        </form>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="panel h-100">
                            <h2 class="h5 mb-3 section-title"><i class="bi bi-list-check"
                                    aria-hidden="true"></i><span>Access Checklist</span></h2>
                            <div class="activity-list">
                                <div class="activity-item"><span class="activity-dot bg-success"></span>
                                    <div>
                                        <p class="mb-1 fw-semibold">Assign role</p>
                                        <p class="text-muted small mb-0">Start with the least privileged role.</p>
                                    </div>
                                </div>
                                <div class="activity-item"><span class="activity-dot bg-primary"></span>
                                    <div>
                                        <p class="mb-1 fw-semibold">Add team</p>
                                        <p class="text-muted small mb-0">Team ownership controls dashboards.</p>
                                    </div>
                                </div>
                                <div class="activity-item"><span class="activity-dot bg-warning"></span>
                                    <div>
                                        <p class="mb-1 fw-semibold">Send invite</p>
                                        <p class="text-muted small mb-0">Users receive activation by email.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>


    </div>
    </div>
@endsection
