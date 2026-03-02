<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    protected $table = 'buku_tamu';
    protected $fillable = ['nama_lengkap','jenis_instansi','kategori','telpon','email','maksud_tujuan','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}