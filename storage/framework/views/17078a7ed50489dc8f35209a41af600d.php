

<?php $__env->startSection('content'); ?>
<h1 class="text-xl font-bold mb-4">Detail Imunisasi Anak</h1>

<div class="bg-white shadow-md rounded p-4">
    <p><strong>ID:</strong> <?php echo e($data->id); ?></p>
    <p><strong>Nama Anak:</strong> <?php echo e($data->nama_anak); ?></p>
    <p><strong>NIK:</strong> <?php echo e($data->nik); ?></p>
    <p><strong>Nama Orang Tua:</strong> <?php echo e($data->nama_orang_tua); ?></p>
    <p><strong>Jenis Imunisasi:</strong> <?php echo e($data->jenis_imunisasi); ?></p>
    <p><strong>Tanggal:</strong> <?php echo e($data->tanggal); ?></p>
</div>

<a href="<?php echo e(route('imunisasi.index')); ?>" class="inline-block mt-4 text-blue-500 hover:underline">Kembali ke Data Imunisasi</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMPP\htdocs\data-imunisasi-anak\resources\views/imunisasi/show.blade.php ENDPATH**/ ?>