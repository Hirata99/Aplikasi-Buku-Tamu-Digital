<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tamu', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('kategori', ['pemerintah', 'swasta', 'pendidikan', 'umum', 'lainnya']);
            $table->string('nama_instansi');
            $table->string('email');
            $table->string('telpon');
            $table->text('maksud_tujuan');
            $table->timestamp('waktu_kunjungan')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tamu');
    }
};
