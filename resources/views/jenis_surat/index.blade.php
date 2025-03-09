<!-- resources/views/jenis_surat/index.blade.php -->

@extends('layouts.master')

@section('content')
<h1>Daftar Jenis Surat</h1>
<a href="{{ route('jenis_surat.create') }}" class="btn btn-primary">Tambah Jenis Surat</a>
<table class="table">
    <thead>
        <tr>
            <th>Nama Jenis Surat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jenisSurat as $jenis)
        <tr>
            <td>{{ $jenis->nama_jenis_surat }}</td>
            <td>
                <a href="{{ route('jenis_surat.show', $jenis->id) }}" class="btn btn-info">Lihat</a>
                <a href="{{ route('jenis_surat.edit', $jenis->id) }}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection