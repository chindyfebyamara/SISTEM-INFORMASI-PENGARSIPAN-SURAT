<!-- resources/views/jenis_surat/edit.blade.php -->

@extends('layouts.master')

@section('content')
<h1>Edit Jenis Surat</h1>
<form action="{{ route('jenis_surat.update', $jenisSurat->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama_jenis_surat">Nama Jenis Surat</label>
        <input type="text" class="form-control" id="nama_jenis_surat" name="nama_jenis_surat" value="{{ $jenisSurat->nama_jenis_surat }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection