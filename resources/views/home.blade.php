@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')

<!-- Welcome Hero Section -->
<div class="welcome-hero text-center mb-5 p-5 rounded-4 position-relative overflow-hidden" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 400px;">
    <div class="position-relative" style="z-index: 2;">
        <div class="mb-4">
            <i class="bi bi-door-open-fill text-white display-1 mb-3"></i>
        </div>
        <h1 class="display-3 fw-bold text-white mb-3">
            Selamat Datang! 👋
        </h1>
        <p class="lead text-white mb-4 px-lg-5 mx-auto" style="max-width: 800px;">
            Terima kasih telah menggunakan <strong>Buku Tamu Digital</strong>. 
            Sistem pencatatan tamu modern yang memudahkan proses pendataan pengunjung Anda.
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ url('/login') }}" class="btn btn-light btn-lg px-4">
                <i class="bi bi-pencil-square me-2"></i>Isi Buku Tamu
            </a>
            <a href="{{ url('/about') }}" class="btn btn-outline-light btn-lg px-4">
                <i class="bi bi-info-circle me-2"></i>Tentang Aplikasi
            </a>
        </div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 1; opacity: 0.1;">
        <i class="bi bi-journal-text position-absolute" style="font-size: 15rem; top: -50px; left: -50px;"></i>
        <i class="bi bi-people position-absolute" style="font-size: 12rem; bottom: -40px; right: -40px;"></i>
    </div>
</div>

<!-- Quick Stats -->
<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 hover-lift">
            <div class="card-body text-center p-4">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="bi bi-lightning-charge-fill fs-1 text-primary"></i>
                </div>
                <h4 class="fw-bold mb-2">Cepat & Mudah</h4>
                <p class="text-muted mb-0">
                    Proses pencatatan yang efisien hanya dalam beberapa klik
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 hover-lift">
            <div class="card-body text-center p-4">
                <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="bi bi-shield-check fs-1 text-success"></i>
                </div>
                <h4 class="fw-bold mb-2">Aman & Terpercaya</h4>
                <p class="text-muted mb-0">
                    Data pengunjung tersimpan dengan aman dan terenkripsi
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 hover-lift">
            <div class="card-body text-center p-4">
                <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="bi bi-phone fs-1 text-info"></i>
                </div>
                <h4 class="fw-bold mb-2">Responsif</h4>
                <p class="text-muted mb-0">
                    Dapat diakses dari berbagai perangkat, kapan dan dimana saja
                </p>
            </div>
        </div>
    </div>
</div>

<!-- How It Works Section -->
<div class="card border-0 shadow-sm mb-5" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
    <div class="card-body p-5 text-white">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Cara Menggunakan Aplikasi</h2>
            <p class="mb-0 opacity-75">Ikuti 3 langkah mudah berikut</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="bg-white bg-opacity-20 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <span class="display-4 fw-bold text-light-emphasis">1</span>
                    </div>
                    <h5 class="fw-bold mb-3">Isi Formulir</h5>
                    <p class="mb-0 opacity-75">
                        Klik tombol "Isi Buku Tamu" dan lengkapi data diri Anda dengan benar
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="text-center">
                    <div class="bg-white bg-opacity-20 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <span class="display-4 fw-bold text-light-emphasis">2</span>
                    </div>
                    <h5 class="fw-bold mb-3">Simpan Data</h5>
                    <p class="mb-0 opacity-75">
                        Periksa kembali data Anda, lalu klik tombol simpan untuk mencatat kunjungan
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="text-center">
                    <div class="bg-white bg-opacity-20 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <span class="display-4 fw-bold text-light-emphasis">3</span>
                    </div>
                    <h5 class="fw-bold mb-3">Selesai!</h5>
                    <p class="mb-0 opacity-75">
                        Data Anda tersimpan dengan aman dan dapat dilihat oleh administrator
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action Section -->
<div class="row g-4 mb-5">
    <div class="col-lg-12">
        <div class="card border-0 shadow-lg" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
            <div class="card-body p-5 text-white text-center">
                <i class="bi bi-pencil-square fs-1 mb-3"></i>
                <h3 class="fw-bold mb-3">Sudah Siap Mencatat Kunjungan Anda?</h3>
                <p class="mb-4 opacity-75 mx-auto" style="max-width: 600px;">
                    Mulai catat kunjungan Anda sekarang dengan mengisi buku tamu digital kami. 
                    Prosesnya cepat, mudah, dan aman!
                </p>
                <div>
                    <a href="{{ url('/login') }}" class="btn btn-light btn-lg px-5">
                        <i class="bi bi-arrow-right-circle me-2"></i>Mulai Mengisi Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Grid -->
<div class="text-center mb-4">
    <h3 class="fw-bold mb-2">Mengapa Memilih Buku Tamu Digital?</h3>
    <p class="text-muted">Berbagai keunggulan yang kami tawarkan</p>
</div>

<div class="row g-3 mb-5">
    <div class="col-md-3 col-sm-6">
        <div class="card border-0 bg-light h-100 text-center p-3">
            <i class="bi bi-clock-history text-primary fs-2 mb-2"></i>
            <h6 class="fw-bold mb-1">Hemat Waktu</h6>
            <small class="text-muted">Proses lebih cepat dari buku manual</small>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="card border-0 bg-light h-100 text-center p-3">
            <i class="bi bi-tree text-success fs-2 mb-2"></i>
            <h6 class="fw-bold mb-1">Ramah Lingkungan</h6>
            <small class="text-muted">Tanpa kertas, lebih eco-friendly</small>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="card border-0 bg-light h-100 text-center p-3">
            <i class="bi bi-search text-info fs-2 mb-2"></i>
            <h6 class="fw-bold mb-1">Mudah Dicari</h6>
            <small class="text-muted">Temukan data dalam hitungan detik</small>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="card border-0 bg-light h-100 text-center p-3">
            <i class="bi bi-bar-chart text-warning fs-2 mb-2"></i>
            <h6 class="fw-bold mb-1">Laporan Lengkap</h6>
            <small class="text-muted">Dashboard analitik real-time</small>
        </div>
    </div>
</div>

<!-- Footer CTA -->
<div class="card border-0 shadow-sm">
    <div class="card-body text-center p-5">
        <i class="bi bi-question-circle text-primary fs-1 mb-3"></i>
        <h4 class="fw-bold mb-3">Butuh Bantuan?</h4>
        <p class="text-muted mb-4">
            Jika Anda memiliki pertanyaan atau mengalami kendala dalam menggunakan aplikasi, 
            jangan ragu untuk menghubungi kami.
        </p>
        <div class="d-flex gap-2 justify-content-center flex-wrap">
            <a href="{{ url('/about') }}" class="btn btn-outline-primary">
                <i class="bi bi-info-circle me-2"></i>Tentang Aplikasi
            </a>
            <a href="mailto:fareldwiirawan@gmail.com" class="btn btn-outline-primary">
                <i class="bi bi-envelope me-2"></i>Hubungi Kami
            </a>
        </div>
    </div>
</div>

<style>
.welcome-hero {
    animation: fadeIn 0.8s ease-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.hover-lift {
    transition: all 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
}

.card {
    transition: all 0.3s ease;
}

.btn {
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

@media (max-width: 768px) {
    .welcome-hero {
        min-height: 300px;
        padding: 3rem 1rem !important;
    }
    
    .display-3 {
        font-size: 2.5rem;
    }
}
</style>

@endsection