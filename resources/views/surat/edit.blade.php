<!-- resources/views/surat/edit.blade.php -->
@extends('layouts.master')

@section('content')
<h1>Edit Surat</h1>


<form action="{{ route('surat.update', $surat->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Input tersembunyi untuk menyertakan ID surat -->
    <input type="hidden" name="id" value="{{ $surat->id }}">

    <!-- Form fields untuk mengedit surat -->
    <!-- Pastikan input lainnya disertakan di sini -->

    <div class="form-group">
        <label for="nomor_surat">Nomor Surat</label>
        <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" value="{{ $surat->nomor_surat }}" required>
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $surat->tanggal }}" required>
    </div>

    <div class="form-group">
        <label for="pengirim">Pengirim</label>
        <input type="text" class="form-control" id="pengirim" name="pengirim" value="{{ $surat->pengirim }}" required>
    </div>

    <div class="form-group">
        <label for="penerima">Penerima</label>
        <input type="text" class="form-control" id="penerima" name="penerima" value="{{ $surat->penerima }}" required>
    </div>

    <div class="form-group">
        <label for="perihal">Perihal</label>
        <textarea class="form-control" id="perihal" name="perihal" rows="3" required>{{ $surat->perihal }}</textarea>
    </div>

    <div class="form-group">
        <label for="kategori_id">Kategori Surat</label>
        <select class="form-control" id="kategori_id" name="kategori_id" required>
            @foreach($kategoriSurat as $kategori)
            <option value="{{ $kategori->id }}" {{ $surat->kategori_id == $kategori->id ? 'selected' : '' }}>{{ $kategori->nama_kategori }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="jenis_id">Jenis Surat</label>
        <select class="form-control" id="jenis_id" name="jenis_id" required>
            @foreach($jenisSurat as $jenis)
            <option value="{{ $jenis->id }}" {{ $surat->jenis_id == $jenis->id ? 'selected' : '' }}>{{ $jenis->nama_jenis_surat }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection