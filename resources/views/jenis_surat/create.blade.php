<!-- resources/views/jenis_surat/create.blade.php -->

@extends('layouts.master')

@section('content')
<h1>Tambah Jenis Surat</h1>
<form action="{{ route('jenis_surat.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_jenis_surat">Nama Jenis Surat</label>
        <input type="text" class="form-control" id="nama_jenis_surat" name="nama_jenis_surat" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection