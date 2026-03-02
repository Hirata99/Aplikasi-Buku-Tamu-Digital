<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Drop tabel lama
        Schema::dropIfExists('buku_tamu');
        
        // Buat tabel baru
        Schema::create('buku_tamu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->enum('kategori', ['Sekolah', 'Universitas', 'Perusahaan', 'Pemerintahan', 'Organisasi', 'Lainnya']);
            $table->string('nama_instansi');
            $table->string('email');
            $table->text('maksud_tujuan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buku_tamu');
    }
};