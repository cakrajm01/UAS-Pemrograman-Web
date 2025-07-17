@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">{{ isset($imunisasi) ? 'Edit' : 'Tambah' }} Data Imunisasi</h1>

<form method="POST" action="{{ isset($imunisasi) ? route('imunisasi.update', $imunisasi->id) : route('imunisasi.store') }}">
    @csrf
    @if(isset($imunisasi)) @method('PUT') @endif

    <input type="text" name="nama_anak" value="{{ old('nama_anak', $imunisasi->nama_anak ?? '') }}" placeholder="Nama Anak" class="border p-2 w-full mb-2" required>
    <input type="text" name="nik" value="{{ old('nik', $imunisasi->nik ?? '') }}" placeholder="NIK" class="border p-2 w-full mb-2" required>
    <input type="text" name="nama_orang_tua" value="{{ old('nama_orang_tua', $imunisasi->nama_orang_tua ?? '') }}" placeholder="Nama Orang Tua" class="border p-2 w-full mb-2" required>
    <input type="text" name="jenis_imunisasi" value="{{ old('jenis_imunisasi', $imunisasi->jenis_imunisasi ?? '') }}" placeholder="Jenis Imunisasi" class="border p-2 w-full mb-2" required>
    <input type="date" name="tanggal" value="{{ old('tanggal', $imunisasi->tanggal ?? '') }}" class="border p-2 w-full mb-4" required>

    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection
