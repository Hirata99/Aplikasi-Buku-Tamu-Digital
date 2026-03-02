@extends('layouts.app')

@section('title', 'Detail Tamu')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0"><i class="bi bi-person-badge me-2"></i>Detail Tamu</h4>
                </div>
                <div class="card-body p-4">
                    <table class="table table-borderless">
                        <tr>
                            <th width="200">Nama</th>
                            <td>: {{ $tamu->nama }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Instansi</th>
                            <td>: <span class="badge bg-info">{{ ucfirst($tamu->kategori) }}</span></td>
                        </tr>
                        <tr>
                            <th>Nama Instansi</th>
                            <td>: {{ $tamu->nama_instansi }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>: {{ $tamu->email }}</td>
                        </tr>
                        <tr>
                            <th>Maksud & Tujuan</th>
                            <td>: {{ $tamu->maksud_tujuan }}</td>
                        </tr>
                        <tr>
                            <th>Waktu Kunjungan</th>
                            <td>: {{ $tamu->waktu_kunjungan->format('d F Y, H:i') }} WIB</td>
                        </tr>
                    </table>

                    <div class="mt-4">
                        <a href="{{ route('tamu.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left me-2"></i>Kembali
                        </a>
                        <a href="{{ route('tamu.edit', $tamu) }}" class="btn btn-warning">
                            <i class="bi bi-pencil me-2"></i>Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection