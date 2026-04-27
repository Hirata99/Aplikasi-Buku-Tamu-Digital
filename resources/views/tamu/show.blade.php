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
                    <!-- Tambah style="table-layout: fixed; word-wrap: break-word;" -->
                    <table class="table table-borderless"
                           style="table-layout: fixed; word-wrap: break-word;">
                        <colgroup>
                            <!-- Kolom th: lebar tetap 200px -->
                            <col style="width: 200px;">
                            <!-- Kolom td: sisa lebar tabel -->
                            <col>
                        </colgroup>
                        <tr>
                            <th>Nama</th>
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
                            <!-- Tambah style="word-break: break-all;" khusus email -->
                            <td style="word-break: break-all;">: {{ $tamu->email }}</td>
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
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left me-2"></i>Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection