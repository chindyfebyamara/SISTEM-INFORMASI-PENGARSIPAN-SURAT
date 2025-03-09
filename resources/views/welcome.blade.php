@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Selamat Datang di Sistem Informasi Pengarsipan Surat</h2>
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('images/welcome_image.png') }}" alt="Gambar Selamat Datang di Sistem Informasi Pengarsipan Surat" class="img-fluid mb-3">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection