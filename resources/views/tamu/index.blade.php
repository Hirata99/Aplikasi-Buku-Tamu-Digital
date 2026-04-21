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
        <div class="alert alert-dismissible fade show d-flex align-items-center gap-3 border-0 rounded-3 shadow-sm mb-4"
            style="background: linear-gradient(135deg, #d1fae5, #ecfdf5); border-left: 4px solid #10b981 !important; border-left-style: solid !important;"
            role="alert">
            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                style="width:40px; height:40px; background:#10b981;">
                <i class="bi bi-check-lg text-white fw-bold"></i>
            </div>
            <div>
                <div class="fw-semibold" style="color:#065f46;">Berhasil!</div>
                <div style="font-size:14px; color:#047857;">{{ session('success') }}</div>
            </div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
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
                                <td>{{ Str::limit($tamu->maksud_tujuan, 20) }}</td>
                                <td>{{ $tamu->waktu_kunjungan->format('d M Y, H:i') }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('tamu.show', $tamu) }}" class="btn btn-sm btn-info">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('tamu.edit', $tamu) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-danger"
                                            onclick="confirmDelete('{{ route('tamu.destroy', $tamu) }}', '{{ $tamu->nama }}')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center py-4">
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

{{-- Modal Konfirmasi Hapus --}}
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 420px;">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-body p-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                        style="width:52px; height:52px; background:#fee2e2;">
                        <i class="bi bi-trash3-fill" style="color:#dc2626; font-size:20px;"></i>
                    </div>
                    <div>
                        <h6 class="fw-semibold mb-0" id="deleteModalLabel">Hapus Data Tamu</h6>
                        <small class="text-muted">Tindakan ini tidak dapat dibatalkan</small>
                    </div>
                </div>

                <p class="text-muted mb-1" style="font-size:14px;">
                    Anda akan menghapus data tamu:
                </p>
                <p class="fw-semibold mb-3" id="deleteTargetName" style="font-size:15px;"></p>
                <p class="text-muted mb-4" style="font-size:13px;">
                    Data yang sudah dihapus tidak dapat dipulihkan kembali. Pastikan Anda sudah yakin sebelum melanjutkan.
                </p>

                <div class="d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-outline-secondary px-4" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg me-1"></i>Batal
                    </button>
                    <form id="deleteForm" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger px-4">
                            <i class="bi bi-trash3 me-1"></i>Ya, Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function confirmDelete(url, nama) {
    document.getElementById('deleteForm').action = url;
    document.getElementById('deleteTargetName').textContent = nama;
    var modal = new bootstrap.Modal(document.getElementById('deleteModal'));
    modal.show();
}
</script>
@endsection