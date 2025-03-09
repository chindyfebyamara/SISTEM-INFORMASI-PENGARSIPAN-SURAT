<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriSurat;

class KategoriSuratController extends Controller
{
    public function index()
    {
        $kategoriSurat = KategoriSurat::all();
        return view('kategori_surat.index', compact('kategoriSurat'));
    }

    public function create()
    {
        return view('kategori_surat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        // Buat instansi baru KategoriSurat dengan kolom 'nama_kategori' disertakan
        KategoriSurat::create([
            'nama_kategori' => $request->nama_kategori,
            // Anda dapat menyertakan kolom lain di sini jika diperlukan
        ]);

        return redirect()->route('kategori_surat.index')
            ->with('success', 'Kategori surat berhasil ditambahkan.');
    }


    public function show(KategoriSurat $kategoriSurat)
    {
        return view('kategori_surat.show', compact('kategoriSurat'));
    }

    public function edit(KategoriSurat $kategoriSurat)
    {
        return view('kategori_surat.edit', compact('kategoriSurat'));
    }

    public function update(Request $request, KategoriSurat $kategoriSurat)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        $kategoriSurat->update($request->all());

        return redirect()->route('kategori_surat.index')
            ->with('success', 'Kategori surat berhasil diperbarui.');
    }

    public function destroy(KategoriSurat $kategoriSurat)
    {
        $kategoriSurat->delete();

        return redirect()->route('kategori_surat.index')
            ->with('success', 'Kategori surat berhasil dihapus.');
    }
}
