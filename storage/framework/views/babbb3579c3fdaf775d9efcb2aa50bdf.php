

<?php $__env->startSection('content'); ?>
<h1 class="text-xl font-bold mb-4"><?php echo e(isset($imunisasi) ? 'Edit' : 'Tambah'); ?> Data Imunisasi</h1>

<form method="POST" action="<?php echo e(isset($imunisasi) ? route('imunisasi.update', $imunisasi->id) : route('imunisasi.store')); ?>">
    <?php echo csrf_field(); ?>
    <?php if(isset($imunisasi)): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>

    <input type="text" name="nama_anak" value="<?php echo e(old('nama_anak', $imunisasi->nama_anak ?? '')); ?>" placeholder="Nama Anak" class="border p-2 w-full mb-2" required>
    <input type="text" name="nik" value="<?php echo e(old('nik', $imunisasi->nik ?? '')); ?>" placeholder="NIK" class="border p-2 w-full mb-2" required>
    <input type="text" name="nama_orang_tua" value="<?php echo e(old('nama_orang_tua', $imunisasi->nama_orang_tua ?? '')); ?>" placeholder="Nama Orang Tua" class="border p-2 w-full mb-2" required>
    <input type="text" name="jenis_imunisasi" value="<?php echo e(old('jenis_imunisasi', $imunisasi->jenis_imunisasi ?? '')); ?>" placeholder="Jenis Imunisasi" class="border p-2 w-full mb-2" required>
    <input type="date" name="tanggal" value="<?php echo e(old('tanggal', $imunisasi->tanggal ?? '')); ?>" class="border p-2 w-full mb-4" required>

    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Simpan</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMPP\htdocs\data-imunisasi-anak\resources\views/imunisasi/create.blade.php ENDPATH**/ ?>