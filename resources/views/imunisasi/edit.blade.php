@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Edit Data Imunisasi</h1>

<form method="POST" action="{{ route('imunisasi.update', $imunisasi->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="nama_anak" value="{{ old('nama_anak', $imunisasi->nama_anak) }}" placeholder="Nama Anak" class="border p-2 w-full mb-2" required>
    <input type="text" name="nik" value="{{ old('nik', $imunisasi->nik) }}" placeholder="NIK" class="border p-2 w-full mb-2" required>
    <input type="text" name="nama_orang_tua" value="{{ old('nama_orang_tua', $imunisasi->nama_orang_tua) }}" placeholder="Nama Orang Tua" class="border p-2 w-full mb-2" required>
    <input type="text" name="jenis_imunisasi" value="{{ old('jenis_imunisasi', $imunisasi->jenis_imunisasi) }}" placeholder="Jenis Imunisasi" class="border p-2 w-full mb-2" required>
    <input type="date" name="tanggal" value="{{ old('tanggal', $imunisasi->tanggal) }}" class="border p-2 w-full mb-4" required>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    <a href="{{ route('imunisasi.index') }}" class="ml-2 text-gray-600">Batal</a>
</form>
@endsection
`
