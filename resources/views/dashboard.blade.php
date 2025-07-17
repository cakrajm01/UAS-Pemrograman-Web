@extends('layouts.app') {{-- atau sesuai layout utama kamu --}}

@section('content')
<div class="p-6">
    <div class="bg-white shadow p-6 rounded-lg max-w-sm">
        <h2 class="text-lg font-semibold text-gray-700 mb-2">Total Data Imunisasi Anak</h2>
        <p class="text-3xl font-bold text-blue-600">{{ $totalData }}</p>
    </div>
</div>
@endsection
