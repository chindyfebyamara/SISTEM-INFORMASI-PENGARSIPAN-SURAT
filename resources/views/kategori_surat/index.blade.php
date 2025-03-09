<!-- resources/views/kategori_surat/index.blade.php -->

@extends('layouts.master')

@section('content')
<h1>Daftar Kategori Surat</h1>
<a href="{{ route('kategori_surat.create') }}" class="btn btn-primary">Tambah Kategori Surat</a>
<table class="table">
    <thead>
        <tr>
            <th>Nama Kategori Surat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kategoriSurat as $kategori)
        <tr>
            <td>{{ $kategori->nama_kategori }}</td>
            <td>
                <a href="{{ route('kategori_surat.show', $kategori->id) }}" class="btn btn-info">Lihat</a>
                <a href="{{ route('kategori_surat.edit', $kategori->id) }}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection