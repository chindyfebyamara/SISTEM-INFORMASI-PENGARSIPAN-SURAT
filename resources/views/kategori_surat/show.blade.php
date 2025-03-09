<!-- resources/views/kategori_surat/show.blade.php -->

@extends('layouts.master')

@section('content')
<h1>Detail Kategori Surat</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Nama Kategori Surat: {{ $kategoriSurat->nama_kategori }}</h5>
    </div>
</div>
<a href="{{ route('kategori_surat.index') }}" class="btn btn-primary mt-3">Kembali</a>
@endsection