@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Info Pengguna</h4>
                </div>
                <div class="card-body text-center">
                    <img src="https://via.placeholder.com/150" class="rounded-circle img-thumbnail mb-3" alt="Profile Picture">
                    <h4>{{ $username }}</h4>
                    <p class="text-muted">User Regular</p>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary">Edit Profile</button>
                        <button class="btn btn-outline-danger">Ganti Password</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Detail Profile</h4>
                </div>
                <div class="card-body">
                    <h5>Selamat datang, {{ $username }}!</h5>
                    <p>Ini adalah halaman profile Anda. Anda dapat mengelola informasi pribadi Anda di sini.</p>

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" value="{{ $username }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="{{ strtolower($username) }}@example.com" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <input type="text" class="form-control" value="Regular User" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Bergabung</label>
                        <input type="text" class="form-control" value="{{ date('d F Y') }}" readonly>
                    </div>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Aktivitas Terakhir</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Login terakhir
                            <span class="badge bg-primary rounded-pill">{{ date('d M Y H:i') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Perubahan data terakhir
                            <span class="badge bg-primary rounded-pill">{{ date('d M Y H:i', strtotime('-1 day')) }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Jumlah data dikelola
                            <span class="badge bg-primary rounded-pill">15</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
