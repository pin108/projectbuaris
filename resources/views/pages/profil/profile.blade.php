@extends('layout.layout')
@section('content')
@if (session('success'))
<div class="alert alert-success" style="background-color:green">
    {{ session('success') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger" style="background-color: red">
    {{ session('error') }}
</div>
@endif
<div class="container-fluid" style="margin-top:5%; margin-bottom:5% ">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fas fa-user-circle"></i> Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile/{{ Auth::user()->id }}/edit">
                            <i class="fas fa-user-edit"></i> Edit Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.password', Auth::user()->id) }}">
                            <i class="fas fa-key"></i> Change Password
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container mt-5">
                <h2 class="mb-4">User Profile</h2>
                <!-- Profile information -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <!-- User profile picture -->
                                <div class="col-md-4 border-right text-center">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                        <img class="rounded-circle mb-3" width="120" height="120" src="{{ asset('storage/' . $user->fotodiri) }}" alt="User Profile">
                                        <h5 class="font-weight-bold">{{ Auth::user()->name }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="mb-4"><strong>Nama:</strong> {{ Auth::user()->name }}</h3>
                                <!-- NIK (National Identification Number) -->
                                <p class="mb-3"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                                <p class="mb-3"><strong>NIK:</strong> {{ Auth::user()->NIK }}</p>
                                <!-- Status -->
                                <p class="mb-3"><strong>Status:</strong> {{ Auth::user()->roles == 1 ? 'Admin' : 'User' }}</p>
                                <!-- Address -->
                                <p class="mb-3"><strong>Alamat:</strong> {{ Auth::user()->alamat_rumah }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>        
    </div>
</div>
</div>
</div>
@stop