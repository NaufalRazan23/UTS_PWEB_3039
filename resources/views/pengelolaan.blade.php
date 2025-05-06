@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Pengelolaan Data</h4>
            <button class="btn btn-light btn-sm">Tambah Data Baru</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{ $item['id'] }}</td>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['description'] }}</td>
                                <td>
                                    @if($item['status'] == 'Active')
                                        <span class="badge bg-success">{{ $item['status'] }}</span>
                                    @elseif($item['status'] == 'Inactive')
                                        <span class="badge bg-danger">{{ $item['status'] }}</span>
                                    @else
                                        <span class="badge bg-warning text-dark">{{ $item['status'] }}</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-info">Edit</button>
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <h5>Data dalam Format Card</h5>
        <div class="row">
            @foreach($items as $item)
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <div class="card-header {{ $item['status'] == 'Active' ? 'bg-success text-white' : ($item['status'] == 'Inactive' ? 'bg-danger text-white' : 'bg-warning') }}">
                            {{ $item['name'] }}
                        </div>
                        <div class="card-body">
                            <p>{{ $item['description'] }}</p>
                            <p><strong>Status:</strong> {{ $item['status'] }}</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-sm btn-primary w-100">Detail</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
