<!-- resources/views/kategori_surat/edit.blade.php -->

@extends('layouts.master')

@section('content')
<h1>Edit Kategori Surat</h1>
<form action="{{ route('kategori_surat.update', $kategoriSurat->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama_kategori">Nama Kategori Surat</label>
        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $kategoriSurat->nama_kategori }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection