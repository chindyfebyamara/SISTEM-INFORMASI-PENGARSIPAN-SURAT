<!-- resources/views/kategori_surat/create.blade.php -->

@extends('layouts.master')

@section('content')
<h1>Tambah Kategori Surat</h1>
<form action="{{ route('kategori_surat.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_kategori">Kategori Surat</label>
        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection