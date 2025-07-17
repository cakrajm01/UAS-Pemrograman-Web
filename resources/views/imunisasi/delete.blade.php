<form action="{{ route('imunisasi.destroy', $id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');" class="inline">
    @csrf
    @method('DELETE')
    <button type="submit"
        class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">
        Hapus
    </button>
</form>
