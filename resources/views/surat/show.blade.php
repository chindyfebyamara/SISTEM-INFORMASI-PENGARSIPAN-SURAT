<!-- resources/views/surat/show.blade.php -->

@extends('layouts.master')

@section('content')

<h1>Detail Surat</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Nomor Surat: {{ $surat->nomor_surat }}</h5>
        <p class="card-text">Tanggal: {{ $surat->tanggal }}</p>
        <p class="card-text">Pengirim: {{ $surat->pengirim }}</p>
        <p class="card-text">Penerima: {{ $surat->penerima }}</p>
        <p class="card-text">Perihal: {{ $surat->perihal }}</p>
        <p class="card-text">Lampiran: {{ $surat->lampiran }}</p>
        <p class="card-text">Status: {{ $surat->status }}</p>
        <p class="card-text">Kategori Surat: {{ $surat->kategoriSurat ? $surat->kategoriSurat->nama_kategori : '-' }}</p>
        <p class="card-text">Jenis Surat: {{ $surat->jenisSurat ? $surat->jenisSurat->nama_jenis_surat : '-' }}</p>
    </div>
</div>

<a href="{{ route('surat.index') }}" class="btn btn-primary mt-3">Kembali</a>
@endsection