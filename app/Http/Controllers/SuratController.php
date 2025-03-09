<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\KategoriSurat;
use App\Models\JenisSurat;

class SuratController extends Controller
{
    // Menampilkan semua surat
    public function index()
    {
        $surat = Surat::all();
        return view('surat.index', compact('surat'));
    }

    // Menampilkan form untuk membuat surat baru
    public function create()
    {
        $kategoriSurat = KategoriSurat::all(); // Mengambil semua data kategori surat
        $jenisSurat = JenisSurat::all(); // Mengambil semua data jenis surat

        return view('surat.create', compact('kategoriSurat', 'jenisSurat'));
    }

    // Menyimpan surat baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'tanggal' => 'required',
            'pengirim' => 'required',
            'penerima' => 'required',
            'perihal' => 'required',
            'lampiran' => 'required',
            'status' => 'required',
            'kategori_id' => 'required',
            'jenis_id' => 'required',
        ]);

        Surat::create($request->all());

        return redirect()->route('surat.index')
            ->with('success', 'Surat berhasil ditambahkan.');
    }

    // Menampilkan detail surat
    public function show($id)
    {
        $surat = Surat::findOrFail($id);
        return view('surat.show', compact('surat'));
    }

    // Menampilkan form untuk mengedit surat
    public function edit($id)
    {
        $surat = Surat::findOrFail($id);
        $kategoriSurat = KategoriSurat::all();
        $jenisSurat = JenisSurat::all();

        return view('surat.edit', compact('surat', 'kategoriSurat', 'jenisSurat'));
    }

    // Mengupdate surat dalam database
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'tanggal' => 'required',
            'pengirim' => 'required',
            'penerima' => 'required',
            'perihal' => 'required',
            'lampiran' => 'required',
            'status' => 'required',
            'kategori_id' => 'required',
            'jenis_id' => 'required',
        ]);

        $surat = Surat::findOrFail($id);
        $surat->update($request->all());

        return redirect()->route('surat.index')
            ->with('success', 'Surat berhasil diperbarui');
    }

    // Menghapus surat dari database
    public function destroy($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->delete();

        return redirect()->route('surat.index')
            ->with('success', 'Surat berhasil dihapus');
    }
}
