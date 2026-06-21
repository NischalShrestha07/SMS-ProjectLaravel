@extends('layouts.admin.auth.app')



@section('auth_content')
    <main class="error-page">
        <section class="error-card">
            <a class="auth-brand justify-content-center" href="{{ route('admin') }}"><span class="brand-icon"><i
                        class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span><span><strong>adminHMD</strong><small>Error
                        Center</small></span></a>
            <img class="error-illustration" src="{{ asset('admin_assets/images/svg/maintenance.svg') }}"
                alt="Maintenance illustration" />
            <div class="error-code">500</div>
            <h1 class="h3 mb-2">Server Error</h1>
            <p class="text-muted mb-4">
                Something went wrong on our side. Please try again or return
                to the dashboard.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <a class="btn btn-primary" href="{{ route('admin') }}"><i class="bi bi-speedometer2" aria-hidden="true"></i>
                    Back to Dashboard</a><a class="btn btn-outline-secondary" href="{{ route('login') }}">Sign In</a>
            </div>
        </section>
    </main>
@endsection
