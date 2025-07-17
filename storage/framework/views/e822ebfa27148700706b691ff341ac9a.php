<form action="<?php echo e(route('imunisasi.destroy', $id)); ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');" class="inline">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit"
        class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">
        Hapus
    </button>
</form>
<?php /**PATH D:\XAMPP\htdocs\data-imunisasi-anak\resources\views/imunisasi/delete.blade.php ENDPATH**/ ?>