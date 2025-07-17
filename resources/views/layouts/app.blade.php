<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex h-screen bg-gray-100">
    <aside class="w-64 bg-white shadow-md p-4">
        <h2 class="text-2xl font-bold text-gray-800">Dashboard</h2>
        <nav class="mt-6">
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-gray-200 rounded">🏡Dashboard</a>
            <a href="{{ route('imunisasi.index') }}" class="block px-4 py-2 hover:bg-gray-200 rounded">📝Data Imunisasi</a>
            <a href="{{ route('imunisasi.create') }}" class="block px-4 py-2 hover:bg-gray-200 rounded">➕Tambah Data</a>
        </nav>
    </aside>
    <main class="flex-1 p-6">
        @yield('content')
    </main>
</body>
</html>
