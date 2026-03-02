@extends('layouts.app')

@section('title', 'Galeri Buku')

@section('content')

<!-- HERO -->
<div class="bg-light rounded-4 p-5 mb-5 text-center shadow-sm">
    <i class="bi bi-book fs-1 text-primary mb-3"></i>
    <h1 class="fw-bold">Galeri Buku</h1>
    <p class="text-muted mb-0">
        Galeri ini menampilkan koleksi buku yang tersedia sebagai
        katalog digital untuk memudahkan pengunjung mengenal buku.
    </p>
</div>

<!-- GALERI BUKU -->
<h4 class="fw-bold mb-4">📚 Koleksi Buku</h4>

<div class="row g-4 mb-5">

    @for ($i = 1; $i <= 8; $i++)
        <div class="col-6 col-md-3">
        <div class="card shadow-sm h-100">

            <!-- Gambar Buku -->
            <img src="{{ asset('img/buku'.$i.'.jpg') }}"
                class="card-img-top"
                alt="Buku {{ $i }}"
                style="height: 280px; object-fit: cover; cursor: pointer;"
                data-bs-toggle="modal"
                data-bs-target="#modalBuku{{ $i }}">


            <div class="card-body">
                <h6 class="fw-bold mb-1">Judul Buku {{ $i }}</h6>
                <p class="text-muted small mb-0">Penulis: Tere Liye</p>
            </div>
        </div>
</div>

<!-- MODAL DESKRIPSI BUKU -->
<div class="modal fade" id="modalBuku{{ $i }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Judul Buku {{ $i }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://picsum.photos/400/600?random={{ $i }}"
                            class="img-fluid rounded">
                    </div>
                    <div class="col-md-8">
                        <p><strong>Penulis:</strong> Tere Liye</p>
                        <p><strong>Tahun Terbit:</strong> 2024</p>
                        <p><strong>Deskripsi:</strong></p>
                        <p class="text-muted">
                            buku ini bertemakan tentang petualangan seru
                            seorang anak muda yang menjelajahi dunia fantasi
                        </p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">
                    Tutup
                </button>
            </div>

        </div>
    </div>
</div>
@endfor

</div>

<!-- PENUTUP -->
<div class="bg-primary text-white rounded-4 p-5 text-center">
    <h4 class="fw-bold">Katalog Buku Digital</h4>
    <p class="mb-3">
        Klik gambar buku untuk melihat informasi lengkap mengenai
        judul, penulis, dan deskripsi buku.
    </p>
    <a href="/home" class="btn btn-light fw-semibold">
        Kembali ke Halaman Utama
    </a>
</div>

@endsection