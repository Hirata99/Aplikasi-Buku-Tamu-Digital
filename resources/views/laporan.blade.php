@extends('layouts.app')

@section('title', 'Laporan Kunjungan Tamu')

@section('content')

<div class="container py-4">
    @if(session('info'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <i class="bi bi-info-circle me-2"></i>{{ session('info') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

<div class="container py-4">
    <div class="row mb-4">
        <div class="col-md-12">
            <h2 class="fw-bold text-dark">
                <i class="bi bi-file-earmark-text me-2"></i>Laporan Kunjungan
            </h2>
            <p class="text-muted">Pantau statistik dan data tamu yang berkunjung.</p>
        </div>
    </div>

    <!-- Statistik Cards -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-primary text-white">
                <div class="card-body">
                    <h6 class="text-uppercase mb-1 small">Total Tamu</h6>
                    <h2 class="mb-0">{{ $statistik['total'] }}</h2>
                    <i class="bi bi-people-fill" style="font-size: 2rem; opacity: 0.3; position: absolute; right: 20px; top: 20px;"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-success text-white">
                <div class="card-body">
                    <h6 class="text-uppercase mb-1 small">Hari Ini</h6>
                    <h2 class="mb-0">{{ $statistik['hari_ini'] }}</h2>
                    <i class="bi bi-calendar-check" style="font-size: 2rem; opacity: 0.3; position: absolute; right: 20px; top: 20px;"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-info text-white">
                <div class="card-body">
                    <h6 class="text-uppercase mb-1 small">Minggu Ini</h6>
                    <h2 class="mb-0">{{ $statistik['minggu_ini'] }}</h2>
                    <i class="bi bi-calendar-week" style="font-size: 2rem; opacity: 0.3; position: absolute; right: 20px; top: 20px;"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-warning text-white">
                <div class="card-body">
                    <h6 class="text-uppercase mb-1 small">Bulan Ini</h6>
                    <h2 class="mb-0">{{ $statistik['bulan_ini'] }}</h2>
                    <i class="bi bi-calendar-month" style="font-size: 2rem; opacity: 0.3; position: absolute; right: 20px; top: 20px;"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter dan Tabel -->
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <div class="row g-3">
                <div class="col-md-8">
                    <form action="{{ route('laporan') }}" method="GET" class="row g-2">
                        <div class="col-md-4">
                            <input type="text" name="search" class="form-control" placeholder="Cari nama/instansi..." value="{{ request('search') }}">
                        </div>
                        <div class="col-md-3">
                            <select name="kategori" class="form-select">
                                <option value="">Semua Instansi</option>
                                <option value="pemerintah" {{ request('kategori') == 'pemerintah' ? 'selected' : '' }}>Pemerintah</option>
                                <option value="swasta" {{ request('kategori') == 'swasta' ? 'selected' : '' }}>Swasta</option>
                                <option value="pendidikan" {{ request('kategori') == 'pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                                <option value="umum" {{ request('kategori') == 'umum' ? 'selected' : '' }}>Umum</option>
                                <option value="lainnya" {{ request('kategori') == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" name="tanggal_dari" class="form-control" value="{{ request('tanggal_dari') }}" placeholder="Dari Tanggal">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="bi bi-funnel me-1"></i>Filter
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th>No</th>
                        <th>Tanggal & Waktu</th>
                        <th>Nama</th>
                        <th>Instansi</th>
                        <th>No Whatsapp</th>
                        <th>Maksud & Tujuan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tamus as $key => $tamu)
                    <tr>
                        <td>{{ $tamus->firstItem() + $key }}</td>
                        <td>
                            <small class="text-muted">
                                {{ $tamu->waktu_kunjungan->format('d M Y') }}<br>
                                {{ $tamu->waktu_kunjungan->format('H:i') }} WIB
                            </small>
                        </td>
                        <td>
                            <strong>{{ $tamu->nama }}</strong><br>
                            <small class="text-muted">{{ $tamu->email }}</small>
                        </td>
                        <td>
                            <span class="badge bg-info">{{ ucfirst($tamu->kategori) }}</span><br>
                            <small>{{ $tamu->nama_instansi }}</small>
                        </td>
                        
                        <td>
                            <strong>{{ $tamu->telpon }}</strong>
                        </td>

                        <td>{{ Str::limit($tamu->maksud_tujuan, 50) }}</td>
                        <td class="text-center">
                            <a href="{{ route('tamu.show', $tamu) }}" class="btn btn-sm btn-outline-info">
                                <i class="bi bi-eye"></i> Detail
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5">
                            <i class="bi bi-inbox fs-1 text-muted"></i>
                            <p class="text-muted mt-2">Data tidak ditemukan</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="card-footer bg-white">
            {{ $tamus->links() }}
        </div>
    </div>
</div>
@endsection