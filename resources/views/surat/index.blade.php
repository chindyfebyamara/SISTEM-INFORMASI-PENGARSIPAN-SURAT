<!-- resources/views/surat/index.blade.php -->

@extends('layouts.master')

@section('content')
<h1>Daftar Surat</h1>
<a href="{{ route('surat.create') }}" class="btn btn-primary">Tambah Surat</a>
<table class="table">
    <thead>
        <tr>
            <th>Nomor Surat</th>
            <th>Tanggal</th>
            <th>Pengirim</th>
            <th>Penerima</th>
            <th>Perihal</th>
            <th>Lampiran</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($surat))
        @foreach($surat as $item)
        <tr>
            <td>{{ $item->nomor_surat }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->pengirim }}</td>
            <td>{{ $item->penerima }}</td>
            <td>{{ $item->perihal }}</td>
            <td>{{ $item->lampiran }}</td>
            <td>{{ $item->status }}</td>
            <td>
                <a href="{{ route('surat.show', $item->id) }}" class="btn btn-info">Lihat</a>
                <a href="{{ route('surat.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('surat.destroy', $item->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection