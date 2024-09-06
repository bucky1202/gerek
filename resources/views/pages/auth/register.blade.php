@extends('layouts.clean')

@section('content')

    <div class="page page-center">
        <div class="container container-tight py-4">

        <form class="card card-md" action="./" method="get" autocomplete="off" novalidate>
            <div class="card-body">
            <h2 class="card-title text-center mb-4">Create new account</h2>
            <div class="mb-3">
                <label class="form-label">Your phone number:</label>
                <div class="input-group mb-2">
                    <span class="input-group-text">
                        +993
                    </span>
                    <input type="text" class="form-control" placeholder="61123456" autocomplete="off">
                </div>
            </div>
            <div class="mb-2">
                <label class="form-label">
                    Your Password

                </label>
                <div class="input-group input-group-flat">
                    <input type="password" class="form-control" id="password-field" placeholder="Your password"  autocomplete="off">
                    <span class="input-group-text">
                    <a href="#" class="link-secondary" id="toggle-password" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                        <svg id="svg" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    </a>
                    </span>
                </div>
            </div>
            <div class="mb-2">
                <label class="form-label">
                    Confirm Password

                </label>
                <div class="input-group input-group-flat">
                    <input type="password" class="form-control" id="c-password-field" placeholder="Confirm password"  autocomplete="off">
                    <span class="input-group-text">
                    <a href="#" class="link-secondary" id="c-toggle-password" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                        <svg id="c-svg" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    </a>
                    </span>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-check">
                <input type="checkbox" class="form-check-input"/>
                <span class="form-check-label">Agree the <a href="./terms-of-service.html" tabindex="-1">terms and policy</a>.</span>
                </label>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Create new account</button>
            </div>
            </div>
        </form>
        <div class="text-center text-muted mt-3">
            Already have account? <a href="./sign-in.html" tabindex="-1">Sign in</a>
        </div>
        </div>
    </div>
    <script src="{{ asset('assets/dist/js/eye.js') }}"></script>

@endsection
