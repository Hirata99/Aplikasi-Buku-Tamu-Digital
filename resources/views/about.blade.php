@extends('layouts.app')

@section('title', 'Tentang Aplikasi')

@section('content')

<!-- HERO SECTION -->
<div class="row align-items-center mb-5">
    <div class="col-lg-6">
        <div class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-3">
            <i class="bi bi-star-fill me-2"></i>Buku Tamu Digital
        </div>
        <h1 class="display-4 fw-bold mb-3">Revolusi Pencatatan Tamu Era Digital</h1>
        <p class="lead text-muted mb-4">
            Solusi modern dan efisien untuk mengelola data kunjungan tamu 
            dengan teknologi web yang canggih dan user-friendly.
        </p>
        <div class="d-flex gap-2">
            <span class="badge bg-success">Efisien</span>
            <span class="badge bg-info">Paperless</span>
            <span class="badge bg-warning text-dark">Real-time</span>
        </div>
    </div>
    <div class="col-lg-6 text-center">
        <i class="bi bi-journal-text text-primary" style="font-size: 12rem; opacity: 0.1;"></i>
    </div>
</div>

<!-- STATISTIK SINGKAT -->
<div class="row g-4 mb-5">
    <div class="col-md-3 col-6">
        <div class="text-center">
            <div class="display-4 fw-bold text-primary">100%</div>
            <p class="text-muted mb-0">Digital</p>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="text-center">
            <div class="display-4 fw-bold text-success">Fast</div>
            <p class="text-muted mb-0">Response</p>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="text-center">
            <div class="display-4 fw-bold text-info">Easy</div>
            <p class="text-muted mb-0">To Use</p>
        </div>
    </div>
    <div class="col-md-3 col-6">
        <div class="text-center">
            <div class="display-4 fw-bold text-warning">Safe</div>
            <p class="text-muted mb-0">& Secure</p>
        </div>
    </div>
</div>

<!-- MASALAH & SOLUSI -->
<div class="card border-0 shadow-lg mb-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="card-body p-5 text-white">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="fw-bold mb-4">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>Permasalahan
                </h3>
                <div class="d-flex align-items-start mb-3">
                    <i class="bi bi-x-circle-fill fs-4 me-3 mt-1"></i>
                    <div>
                        <strong>Data Tidak Terstruktur</strong>
                        <p class="mb-0 opacity-75">Pencatatan manual sulit ditelusuri</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <i class="bi bi-x-circle-fill fs-4 me-3 mt-1"></i>
                    <div>
                        <strong>Rawan Kehilangan</strong>
                        <p class="mb-0 opacity-75">Kertas mudah rusak dan hilang</p>
                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <i class="bi bi-x-circle-fill fs-4 me-3 mt-1"></i>
                    <div>
                        <strong>Tidak Efisien</strong>
                        <p class="mb-0 opacity-75">Membuang waktu untuk pencarian data</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="fw-bold mb-4">
                    <i class="bi bi-check-circle-fill me-2"></i>Solusi Kami
                </h3>
                <div class="d-flex align-items-start mb-3">
                    <i class="bi bi-check2-circle fs-4 me-3 mt-1"></i>
                    <div>
                        <strong>Database Terorganisir</strong>
                        <p class="mb-0 opacity-75">Semua data tersimpan rapi dan mudah dicari</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <i class="bi bi-check2-circle fs-4 me-3 mt-1"></i>
                    <div>
                        <strong>Backup Otomatis</strong>
                        <p class="mb-0 opacity-75">Data aman dan tidak akan hilang</p>
                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <i class="bi bi-check2-circle fs-4 me-3 mt-1"></i>
                    <div>
                        <strong>Akses Cepat</strong>
                        <p class="mb-0 opacity-75">Temukan data dalam hitungan detik</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FITUR UNGGULAN -->
<div class="text-center mb-4">
    <h2 class="fw-bold">Fitur Unggulan</h2>
    <p class="text-muted">Kenapa memilih Buku Tamu Digital?</p>
</div>

<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm hover-lift">
            <div class="card-body text-center p-4">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                    <i class="bi bi-lightning-charge-fill fs-2 text-primary"></i>
                </div>
                <h5 class="fw-bold mb-3">Cepat & Responsif</h5>
                <p class="text-muted">Antarmuka yang ringan dan cepat diakses dari berbagai perangkat</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm hover-lift">
            <div class="card-body text-center p-4">
                <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                    <i class="bi bi-shield-check fs-2 text-success"></i>
                </div>
                <h5 class="fw-bold mb-3">Aman & Terpercaya</h5>
                <p class="text-muted">Keamanan data terjamin dengan sistem enkripsi modern</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm hover-lift">
            <div class="card-body text-center p-4">
                <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                    <i class="bi bi-graph-up-arrow fs-2 text-info"></i>
                </div>
                <h5 class="fw-bold mb-3">Laporan Lengkap</h5>
                <p class="text-muted">Dashboard analitik untuk monitoring kunjungan tamu</p>
            </div>
        </div>
    </div>
</div>

<!-- VISI MISI MODERN -->
<div class="row g-4 mb-5">
    <div class="col-lg-6">
        <div class="card border-0 shadow-sm h-100" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
            <div class="card-body p-4 text-white">
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-eye-fill fs-1 me-3"></i>
                    <h4 class="fw-bold mb-0">Visi</h4>
                </div>
                <p class="lead mb-0">
                    Menjadi platform buku tamu digital terdepan yang mendukung 
                    transformasi digital di seluruh Indonesia.
                </p>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card border-0 shadow-sm h-100" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
            <div class="card-body p-4 text-white">
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-rocket-takeoff-fill fs-1 me-3"></i>
                    <h4 class="fw-bold mb-0">Misi</h4>
                </div>
                <ul class="mb-0 ps-3">
                    <li>Digitalisasi pencatatan tamu untuk efisiensi maksimal</li>
                    <li>Mendorong penggunaan teknologi ramah lingkungan</li>
                    <li>Memberikan solusi terjangkau untuk semua kalangan</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- TARGET MARKET -->
<div class="card border-0 shadow-sm mb-5">
    <div class="card-body p-4">
        <h4 class="fw-bold mb-4 text-center">Cocok Untuk Berbagai Instansi</h4>
        <div class="row g-3">
            <div class="col-md-3 col-6">
                <div class="text-center p-3 bg-light rounded">
                    <i class="bi bi-building fs-2 text-primary mb-2"></i>
                    <div class="fw-semibold">Perkantoran</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="text-center p-3 bg-light rounded">
                    <i class="bi bi-hospital fs-2 text-danger mb-2"></i>
                    <div class="fw-semibold">Rumah Sakit</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="text-center p-3 bg-light rounded">
                    <i class="bi bi-bank fs-2 text-success mb-2"></i>
                    <div class="fw-semibold">Instansi Publik</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="text-center p-3 bg-light rounded">
                    <i class="bi bi-mortarboard fs-2 text-warning mb-2"></i>
                    <div class="fw-semibold">Pendidikan</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA & KONTAK -->
<div class="row g-4 mb-5">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
                <h5 class="fw-bold mb-3">
                    <i class="bi bi-envelope-fill text-primary me-2"></i>Hubungi Kami
                </h5>
                <p class="text-muted mb-3">
                    Punya pertanyaan atau butuh bantuan? Tim kami siap membantu Anda.
                </p>
                <div class="d-flex align-items-center">
                    <i class="bi bi-envelope fs-4 text-primary me-3"></i>
                    <div>
                        <small class="text-muted d-block">Email</small>
                        <a href="mailto:fareldwiirawan@gmail.com" class="text-decoration-none fw-semibold">
                            fareldwiirawan@gmail.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm h-100 bg-dark text-white">
            <div class="card-body p-4 d-flex flex-column justify-content-center text-center">
                <i class="bi bi-code-slash fs-1 mb-3"></i>
                <h6 class="fw-bold mb-2">Dikembangkan Oleh</h6>
                <p class="mb-0">Farel Dwi Irawan</p>
                <small class="text-white-50">Web Developer</small>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER NOTE -->
<div class="alert alert-light border-0 shadow-sm text-center">
    <i class="bi bi-info-circle-fill text-primary me-2"></i>
    <small>
        Aplikasi ini dikembangkan dengan <span class="text-danger">❤️</span> 
        menggunakan Laravel & Bootstrap untuk pembelajaran dan pengembangan skill.
    </small>
</div>

<style>
.hover-lift {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
}
</style>

@endsection