@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Dashboard</h4>
        </div>
        <div class="card-body">
            <div class="alert alert-success">
                <h4>Selamat datang, {{ $username }}!</h4>
                <p>Ini adalah halaman dashboard dari Pengelola Inventaris.</p>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card bg-primary text-white mb-3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Total Pengguna</h5>
                            <h2>254</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success text-white mb-3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Item Baik</h5>
                            <h2>120</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning text-dark mb-3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Perbaikan</h5>
                            <h2>45</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <h5>Aktivitas Terakhir</h5>
                <ul class="list-group">
                    <li class="list-group-item">User Admin telah menambah item baru</li>
                    <li class="list-group-item">User Manager telah mengubah status item</li>
                    <li class="list-group-item">User Staff telah menghapus item</li>
                </ul>
            </div>

            <div class="mt-4">
                <a href="{{ route('profile') }}?username={{ $username }}" class="btn btn-primary">Lihat Profile</a>
                <a href="{{ route('pengelolaan') }}" class="btn btn-success">Halaman Pengelolaan</a>
            </div>
        </div>
    </div>
@endsection
