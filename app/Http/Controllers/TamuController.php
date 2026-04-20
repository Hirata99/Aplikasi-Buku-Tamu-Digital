<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tamus = Tamu::where('user_id', Auth::id())
                    ->latest()
                    ->paginate(10);

        return view('tamu.index', compact('tamus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tamu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|in:pemerintah,swasta,pendidikan,umum,lainnya',
            'nama_instansi' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telpon' => 'required|string|max:255',
            'maksud_tujuan' => 'required|string',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'kategori.required' => 'Jenis instansi wajib dipilih',
            'nama_instansi.required' => 'Nama instansi wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'telpon' => 'Telepon wajib di isi',
            'maksud_tujuan.required' => 'Maksud dan tujuan wajib diisi',
        ]);

        $validated['user_id'] = Auth::id();
        Tamu::create($validated);

        return redirect()->route('tamu.index')
            ->with('success', 'Data tamu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tamu $tamu)
    {
        return view('tamu.show', compact('tamu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tamu $tamu)
    {
        if ($tamu->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('tamu.edit', compact('tamu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tamu $tamu)
    {
        if ($tamu->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|in:pemerintah,swasta,pendidikan,umum,lainnya',
            'nama_instansi' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telpon' => 'required|string|max:225',
            'maksud_tujuan' => 'required|string',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'kategori.required' => 'Jenis instansi wajib dipilih',
            'nama_instansi.required' => 'Nama instansi wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'telpon' => 'Masukan No Telepon',
            'maksud_tujuan.required' => 'Maksud dan tujuan wajib diisi',
        ]);

        $tamu->update($validated);

        return redirect()->route('tamu.index')
            ->with('success', 'Data tamu berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tamu $tamu)
    {
    if ($tamu->user_id !== Auth::id()) {
        abort(403, 'Unauthorized action.');
    }

    $tamu->delete();

    return redirect()->route('tamu.index')
        ->with('success', 'Data tamu berhasil dihapus!');
    }
}