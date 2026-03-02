@extends('layouts.app')

@section('title', 'Edit Tamu')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-warning text-white">
                    <h4 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Edit Data Tamu</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('tamu.update', $tamu) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $tamu->nama) }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jenis Instansi</label>
                            <select name="kategori" class="form-select @error('kategori') is-invalid @enderror" required>
                                <option value="">Pilih Jenis Instansi</option>
                                <option value="pemerintah" {{ old('kategori', $tamu->kategori) == 'pemerintah' ? 'selected' : '' }}>Pemerintah</option>
                                <option value="swasta" {{ old('kategori', $tamu->kategori) == 'swasta' ? 'selected' : '' }}>Swasta</option>
                                <option value="pendidikan" {{ old('kategori', $tamu->kategori) == 'pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                                <option value="umum" {{ old('kategori', $tamu->kategori) == 'umum' ? 'selected' : '' }}>Umum</option>
                                <option value="lainnya" {{ old('kategori', $tamu->kategori) == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                            @error('kategori')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Instansi</label>
                            <input type="text" name="nama_instansi" class="form-control @error('nama_instansi') is-invalid @enderror" value="{{ old('nama_instansi', $tamu->nama_instansi) }}" required>
                            @error('nama_instansi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $tamu->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">No Whatsapp</label>
                            <input type="tel" name="telpon" class="form-control @error('telpon') is-invalid @enderror" value="{{ old('telpon', $tamu->telpon) }}" required>
                            @error('telpon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Maksud dan Tujuan</label>
                            <textarea name="maksud_tujuan" rows="4" class="form-control @error('maksud_tujuan') is-invalid @enderror" required>{{ old('maksud_tujuan', $tamu->maksud_tujuan) }}</textarea>
                            @error('maksud_tujuan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-warning text-white">
                                <i class="bi bi-save me-2"></i>Update
                            </button>
                            <a href="{{ route('tamu.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left me-2"></i>Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection