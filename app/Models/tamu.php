<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $table = 'tamu'; // Tambahkan ini untuk override nama tabel

    protected $fillable = [
        'nama',
        'kategori',
        'nama_instansi',
        'email',
        'telpon',
        'maksud_tujuan',
        'waktu_kunjungan',
        'user_id'   
    ];

    protected $casts = [
        'waktu_kunjungan' => 'datetime',
    ];
}