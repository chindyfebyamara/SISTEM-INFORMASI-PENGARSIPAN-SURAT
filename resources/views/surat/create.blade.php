<!-- resources/views/surat/create.blade.php -->

@extends('layouts.master')

@section('content')
<h1>Tambah Surat</h1>

<form action="{{ route('surat.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nomor_surat">Nomor Surat</label>
        <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" required>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
    </div>
    <div class="form-group">
        <label for="pengirim">Pengirim</label>
        <input type="text" class="form-control" id="pengirim" name="pengirim" required>
    </div>
    <div class="form-group">
        <label for="penerima">Penerima</label>
        <input type="text" class="form-control" id="penerima" name="penerima" required>
    </div>
    <div class="form-group">
        <label for="perihal">Perihal</label>
        <textarea class="form-control" id="perihal" name="perihal" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="lampiran">Lampiran</label>
        <input type="number" class="form-control" id="lampiran" name="lampiran">
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status" required>
            <option value="belum dibaca">Belum Dibaca</option>
            <option value="dibaca">Dibaca</option>
            <option value="ditindaklanjuti">Ditindaklanjuti</option>
        </select>
    </div>
    <div class="form-group">
        <label for="kategori_id">Kategori Surat</label>
        <div class="form-check">
            @if(isset($kategoriSurat))
            @foreach($kategoriSurat as $kategori)
            <input class="form-check-input" type="radio" name="kategori_id" id="kategori_{{ $kategori->id }}" value="{{ $kategori->id }}" required>
            <label class="form-check-label" for="kategori_{{ $kategori->id }}">
                {{ $kategori->nama_kategori }}
            </label><br>
            @endforeach
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="jenis_id">Jenis Surat</label>
        <div class="form-check">
            @if(isset($jenisSurat))
            @foreach($jenisSurat as $jenis)
            <input class="form-check-input jenis-checkbox" type="checkbox" name="jenis_id" id="jenis_{{ $jenis->id }}" value="{{ $jenis->id }}">
            <label class="form-check-label" for="jenis_{{ $jenis->id }}">
                {{ $jenis->nama_jenis_surat }}
            </label><br>
            @endforeach
            @endif
        </div>
    </div>

    <script>
        // Select all checkbox elements with class "jenis-checkbox"
        const checkboxes = document.querySelectorAll('.jenis-checkbox');

        // Add event listener to each checkbox
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                // If this checkbox is checked, uncheck all others
                if (this.checked) {
                    checkboxes.forEach(otherCheckbox => {
                        if (otherCheckbox !== this) {
                            otherCheckbox.checked = false;
                        }
                    });
                }
            });
        });
    </script>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection