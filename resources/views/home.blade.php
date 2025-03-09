@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Jumlah Surat per Kategori</h1>
    <div class="row">
        @foreach($jumlahSuratPerKategori as $jumlahSurat)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    @if($jumlahSurat->kategoriSurat)
                    Kategori {{ $jumlahSurat->kategoriSurat->nama_kategori }}
                    @else
                    Kategori Tidak Ditemukan
                    @endif
                </div>
                <div class="card-body">
                    <p>Jumlah Surat: {{ $jumlahSurat->total }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection