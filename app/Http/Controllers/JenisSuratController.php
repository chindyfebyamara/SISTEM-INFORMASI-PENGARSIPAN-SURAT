<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisSurat; // Pastikan Anda mengimpor model JenisSurat jika belum

class JenisSuratController extends Controller
{
    public function index()
    {
        // Mengambil semua jenis surat dari database
        $jenisSurat = JenisSurat::all();

        // Mengembalikan data jenis surat ke view
        return view('jenis_surat.index', compact('jenisSurat'));
    }

    public function create()
    {
        // Mengembalikan view untuk membuat jenis surat baru
        return view('jenis_surat.create');
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'nama_jenis_surat' => 'required|string|max:255',
        ]);

        // Menyimpan jenis surat baru ke dalam database
        JenisSurat::create($request->all());

        // Redirect ke halaman index jenis surat
        return redirect()->route('jenis_surat.index')
            ->with('success', 'Jenis surat berhasil ditambahkan.');
    }
    public function show($id)
    {
        // Mengambil data JenisSurat berdasarkan ID
        $jenisSurat = JenisSurat::findOrFail($id);

        // Memeriksa apakah JenisSurat ditemukan
        if (!$jenisSurat) {
            return redirect()->route('jenis_surat.index')->with('error', 'Jenis surat tidak ditemukan.');
        }

        // Mengirimkan data JenisSurat ke view
        return view('jenis_surat.show', compact('jenisSurat'));
    }

    public function edit($id)
    {
        // Mengambil data jenis surat berdasarkan ID
        $jenisSurat = JenisSurat::findOrFail($id);

        // Memeriksa apakah jenis surat ditemukan
        if (!$jenisSurat) {
            return redirect()->route('jenis_surat.index')->with('error', 'Jenis surat tidak ditemukan.');
        }

        // Update data jenis surat
        $jenisSurat->update(attributes: [
            'nama_jenis_surat' => $jenisSurat->nama_jenis_surat,
        ]);

        // Redirect ke halaman index jenis surat
        return redirect()->route('jenis_surat.index')->with('success', 'Jenis surat berhasil diperbarui.');
    }


    public function destroy(JenisSurat $jenisSurat)
    {
        // Menghapus jenis surat
        $jenisSurat->delete();

        // Redirect ke halaman index jenis surat
        return redirect()->route('jenis_surat.index')
            ->with('success', 'Jenis surat berhasil dihapus.');
    }
}
