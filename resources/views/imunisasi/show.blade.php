@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Detail Imunisasi Anak</h1>

<div class="bg-white shadow-md rounded p-4">
    <p><strong>ID:</strong> {{ $data->id }}</p>
    <p><strong>Nama Anak:</strong> {{ $data->nama_anak }}</p>
    <p><strong>NIK:</strong> {{ $data->nik }}</p>
    <p><strong>Nama Orang Tua:</strong> {{ $data->nama_orang_tua }}</p>
    <p><strong>Jenis Imunisasi:</strong> {{ $data->jenis_imunisasi }}</p>
    <p><strong>Tanggal:</strong> {{ $data->tanggal }}</p>
</div>

<a href="{{ route('imunisasi.index') }}" class="inline-block mt-4 text-blue-500 hover:underline">Kembali ke Data Imunisasi</a>
@endsection
