@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container py-5">
    <!-- Welcome Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm bg-gradient" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                <div class="card-body text-secondary-emphasis p-4">
                    <h1 class="display-5 mb-2">
                        <i class="bi bi-speedometer2 me-2"></i>Dashboard
                    </h1>
                    <p class="mb-0 fs-5">Selamat datang, <strong>{{ Auth::user()->name }}</strong>!</p>
                    <small class="opacity-75">{{ now()->format('l, d F Y - H:i') }}</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-people-fill fs-1 text-primary"></i>
                    </div>
                    <h3 class="mb-1">150</h3>
                    <p class="text-muted mb-0">Total Tamu</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-calendar-check fs-1 text-success"></i>
                    </div>
                    <h3 class="mb-1">45</h3>
                    <p class="text-muted mb-0">Hari Ini</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-graph-up fs-1 text-warning"></i>
                    </div>
                    <h3 class="mb-1">23</h3>
                    <p class="text-muted mb-0">Minggu Ini</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-building fs-1 text-info"></i>
                    </div>
                    <h3 class="mb-1">67</h3>
                    <p class="text-muted mb-0">Instansi</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions & Recent Activity -->
    <div class="row g-4">
        <!-- Quick Actions -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 pt-4 pb-3">
                    <h5 class="mb-0">
                        <i class="bi bi-lightning-fill text-warning me-2"></i>Aksi Cepat
                    </h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-3">
                        <a href="{{ route('tamu.create') }}" class="btn btn-primary btn-lg">
                            <i class="bi bi-plus-circle me-2"></i>Tambah Tamu Baru
                        </a>
                        <a href="{{ route('tamu.index') }}" class="btn btn-outline-primary">
                            <i class="bi bi-list-ul me-2"></i>Lihat Semua Tamu
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 pt-4 pb-3">
                    <h5 class="mb-0">
                        <i class="bi bi-clock-history text-info me-2"></i>Aktivitas Terbaru
                    </h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item border-0 px-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="bi bi-person-plus text-primary"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Ahmad Wijaya</h6>
                                    <p class="text-muted mb-0 small">Berkunjung dari PT. Maju Jaya - 2 menit yang lalu</p>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item border-0 px-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar bg-success bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="bi bi-person-plus text-success"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Siti Nurhaliza</h6>
                                    <p class="text-muted mb-0 small">Berkunjung dari Universitas Indonesia - 15 menit yang lalu</p>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item border-0 px-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar bg-warning bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="bi bi-person-plus text-warning"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Budi Santoso</h6>
                                    <p class="text-muted mb-0 small">Berkunjung dari Dinas Pendidikan - 1 jam yang lalu</p>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item border-0 px-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar bg-info bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="bi bi-person-plus text-info"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Dewi Lestari</h6>
                                    <p class="text-muted mb-0 small">Berkunjung dari PT. Teknologi Nusantara - 2 jam yang lalu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('tamu.index') }}" class="btn btn-sm btn-outline-primary">
                            Lihat Semua Aktivitas <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }
    
    .avatar {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .list-group-item {
        transition: background-color 0.2s ease;
    }
    
    .list-group-item:hover {
        background-color: #f8f9fa;
    }
</style>
@endsection