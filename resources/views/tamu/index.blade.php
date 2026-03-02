@extends('layouts.app')

@section('title', 'Data Tamu')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1><i class="bi bi-people-fill me-2"></i>Data Tamu <strong>{{ Auth::user()->name }}</strong></h1>
        <a href="{{ route('tamu.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i>Tambah Tamu
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Instansi</th>
                            <th>No Whatsapp</th>
                            <th>Maksud & Tujuan</th>
                            <th>Waktu Kunjungan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tamus as $key => $tamu)
                            <tr>
                                <td>{{ $tamus->firstItem() + $key }}</td>
                                <td>{{ $tamu->nama }}</td>
                                <td>{{ $tamu->email }}</td>
                                <td>
                                    <span class="badge bg-info">{{ ucfirst($tamu->kategori) }}</span><br>
                                    {{ $tamu->nama_instansi }}
                                </td>
                                <td>{{ $tamu->telpon }}</td>
                                <td>{{ Str::limit($tamu->maksud_tujuan, 50) }}</td>
                                <td>{{ $tamu->waktu_kunjungan->format('d M Y, H:i') }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('tamu.show', $tamu) }}" class="btn btn-sm btn-info">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('tamu.edit', $tamu) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('tamu.destroy', $tamu) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4">
                                    <i class="bi bi-inbox fs-1 text-muted"></i>
                                    <p class="text-muted mt-2">Belum ada data tamu</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $tamus->links() }}
            </div>
        </div>
    </div>
</div>
@endsection