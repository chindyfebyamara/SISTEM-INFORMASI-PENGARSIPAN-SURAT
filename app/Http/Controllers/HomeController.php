<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\KategoriSurat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        // Mengambil jumlah surat per kategori dari database
        $jumlahSuratPerKategori = Surat::select('kategori_id')
            ->selectRaw('count(*) as total')
            ->groupBy('kategori_id')
            ->with('kategoriSurat') // Memuat relasi kategori
            ->get();

        return view('home', ['jumlahSuratPerKategori' => $jumlahSuratPerKategori]);
    }
}
