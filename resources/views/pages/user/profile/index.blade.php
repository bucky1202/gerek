@extends('layouts.layout')
@section('content')
<div class="page-wrapper">

    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Profile Settings
            </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="card">
          <div class="row g-0">
            <div class="col-3 d-none d-md-block border-end">
              <div class="card-body">
                <div class="list-group list-group-transparent">
                  <a href="/profile" class="list-group-item list-group-item-action d-flex align-items-center active">My profile</a>
                  <a href="/profile" class="list-group-item list-group-item-action d-flex align-items-center ">Change my password</a>
                  <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Make a post</a>
                  <a href="./settings-plan.html" class="list-group-item list-group-item-action d-flex align-items-center">My posts</a>
                  <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">My Notifications</a>
                  <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Delete my profile</a>
                </div>

              </div>
            </div>
            <div class="col d-flex flex-column">
              <div class="card-body">
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                <h2 class="mb-4">My Account</h2>
                <h3 class="card-title">Profile Details</h3>
                <form method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row align-items-center">
                        @if (!Auth::user()->profile->avatar)
                            <div class="col-auto"><span class="avatar avatar-xl" style="background-image: url(./static/avatars/000m.jpg)"></span></div>

                        @else
                            <div class="col-auto"><span class="avatar avatar-xl" style="background-image: url({{ asset('storage/' . Auth::user()->profile->avatar) }})"></span></div>
                        @endif

                        <div class="col-auto">
                            <input type="file" class="btn"  name="avatar" value="{{ old('avatar', Auth::user()->profile->avatar) }}">
                        </div>
                    </div>
                    <h3 class="card-title mt-4">Your registered phone number: +993 {{ Auth::user()->phone_number }}</h3>
                    {{-- <div class="mb-3 row">
                        <label class="col-2 col-form-label required">Email address</label>
                        <div class="col-8">
                            <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                            <small class="form-hint">We'll never share your email with anyone else.</small>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-label">Full name:</div>
                            <input type="text" name="fullname" class="form-control" value="{{ old('fullname', Auth::user()->profile->fullname) }}">
                        </div>
                    <div class="col-md-4">
                        <label class="form-label">Date of birth:</label>
                        <input type="text"  name="date_of_birth" class="form-control"  placeholder="31-01-2000" autocomplete="off" value="{{ old('date_of_birth', Auth::user()->profile->date_of_birth) }}" />

                    </div>
                    </div>
                    <div class="col-md">
                        <div class="form-label">Address:</div>
                        <input type="text" name="address" class="form-control" value="{{ old('address', Auth::user()->profile->address) }}">
                    </div>
                    <div class="col-md">
                        <div class="form-label">Job title:</div>
                        <input type="text" name="job_title" class="form-control" value="{{ old('job_title', Auth::user()->profile->job_title) }}">
                    </div>

                    </div>
                    <div class="card-footer bg-transparent mt-auto">
                        <div class="btn-list justify-content-end">

                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
