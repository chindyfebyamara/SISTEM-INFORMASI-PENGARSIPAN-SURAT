<!-- resources/views/jenis_surat/show.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Detail Jenis Surat</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Nama Jenis Surat: {{ $jenisSurat->nama_jenis_surat }}</h5>
    </div>
</div>
<a href="{{ route('jenis_surat.index') }}" class="btn btn-primary mt-3">Kembali</a>
@endsection