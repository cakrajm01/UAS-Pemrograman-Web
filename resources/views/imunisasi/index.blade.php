@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Data Imunisasi Anak</h1>

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<form method="GET" action="{{ route('imunisasi.index') }}" class="mb-4">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama anak / NIK..."
        class="border border-gray-300 p-2 rounded w-full md:w-1/3">
</form>

<table class="table-auto w-full bg-white shadow-md rounded">
    <thead class="bg-gray-200 text-left">
        <tr>
            <th class="p-2">ID</th>
            <th class="p-2">Nama Anak</th>
            <th class="p-2">NIK</th>
            <th class="p-2">Nama Orang Tua</th>
            <th class="p-2">Jenis Imunisasi</th>
            <th class="p-2">Tanggal</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($data as $item)
        <tr class="border-t">
            <td class="p-2">{{ $item->id }}</td> 
            <td class="p-2">{{ $item->nama_anak }}</td>
            <td class="p-2">{{ $item->nik }}</td>
            <td class="p-2">{{ $item->nama_orang_tua }}</td>
            <td class="p-2">{{ $item->jenis_imunisasi }}</td>
            <td class="p-2">{{ $item->tanggal }}</td>
            <td class="p-2 flex flex-wrap gap-2">
                <a href="{{ route('imunisasi.show', $item->id) }}"
                    class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 text-sm">
                    Lihat
                </a>
                <a href="{{ route('imunisasi.edit', $item->id) }}"
                    class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 text-sm">
                    Edit
                </a>
                @include('imunisasi.delete', ['id' => $item->id])
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="p-4 text-center text-gray-500">Tidak ada data ditemukan.</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{-- Pagination --}}
<div class="mt-4">
    {{ $data->links() }}
</div>
@endsection
