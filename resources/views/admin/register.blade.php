@extends('layouts.admin.auth.app')

@section('title', 'Register')

@section('auth_content')
<main class="auth-page">
    <section class="auth-card">
        <a class="auth-brand" href="{{ route('admin.home') }}"><span class="brand-icon"><i class="bi bi-grid-1x2-fill"
                    aria-hidden="true"></i></span><span><strong>adminHMD</strong><small>Create your adminHMD
                    account.</small></span></a>
        <form action="{{route('user.register')}}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="mb-4">
                <p class="eyebrow mb-1">Secure Access</p>
                <h1 class="h3 mb-1">Register</h1>
                <p class="text-muted mb-0">Create your adminHMD account.</p>
            </div>
            <div class="mb-3"><label class="form-label" for="registerName">Full name</label><input class="form-control"
                    value="{{old('name')}}" id="registerName" type="text" name="name" placeholder="Full Name" required>
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3"><label class="form-label" for="registerEmail">Email address</label><input
                    class="form-control" id="registerEmail" type="email" name="email" value="{{old('email')}}"
                    placeholder="Email Address" required>
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-12 mb-3"><label class="form-label" for="role">Role</label><select class="form-select"
                    name="role" id="role" required>
                    <option value="">Choose role</option>
                    <option value="instructor">Instructor</option>
                    <option value="student">Student</option>
                </select>
                <div class="invalid-feedback">Choose a role.</div>
            </div>
            <div class="mb-3"><label class="form-label" for="registerPassword">Password</label><input
                    class="form-control" id="registerPassword" placeholder="Password" name="password" type="password"
                    minlength="6" required>
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3"><label class="form-label" for="registerPassword">Re-type Password</label><input
                    class="form-control" id="registerPassword" placeholder="Re-type Password"
                    name="password_confirmation" type="password" minlength="6" required>
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <button class="btn btn-primary w-100" type="submit"><i class="bi bi-person-plus" aria-hidden="true"></i>
                Create Account</button>
        </form>

        <div class="auth-footer">Already have an account? <a href="{{ route('login') }}">Sign in</a></div>
    </section>





</main>
@endsection