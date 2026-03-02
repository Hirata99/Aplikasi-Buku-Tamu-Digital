<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $query = Tamu::query();

        // Filter berdasarkan tanggal
        if ($request->filled('tanggal_dari')) {
            $query->whereDate('waktu_kunjungan', '>=', $request->tanggal_dari);
        }

        if ($request->filled('tanggal_sampai')) {
            $query->whereDate('waktu_kunjungan', '<=', $request->tanggal_sampai);
        }

        // Filter berdasarkan jenis instansi
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }


        // Filter berdasarkan pencarian
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                  ->orWhere('nama_instansi', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $tamus = $query->latest('waktu_kunjungan')->paginate(10);

        // Statistik
        $statistik = [
            'total' => Tamu::count(),
            'hari_ini' => Tamu::whereDate('waktu_kunjungan', Carbon::today())->count(),
            'minggu_ini' => Tamu::whereBetween('waktu_kunjungan', [
                Carbon::now()->startOfWeek(),
                Carbon::now()->endOfWeek()
            ])->count(),
            'bulan_ini' => Tamu::whereMonth('waktu_kunjungan', Carbon::now()->month)
                              ->whereYear('waktu_kunjungan', Carbon::now()->year)
                              ->count(),
        ];

        // Data untuk chart (berdasarkan jenis instansi)
        $chartData = Tamu::selectRaw('kategori, COUNT(*) as total')
            ->groupBy('kategori')
            ->get();

        return view('laporan', compact('tamus', 'statistik', 'chartData'));
    }
}