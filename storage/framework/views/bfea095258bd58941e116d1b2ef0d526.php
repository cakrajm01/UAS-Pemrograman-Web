 

<?php $__env->startSection('content'); ?>
<div class="p-6">
    <div class="bg-white shadow p-6 rounded-lg max-w-sm">
        <h2 class="text-lg font-semibold text-gray-700 mb-2">Total Data Imunisasi Anak</h2>
        <p class="text-3xl font-bold text-blue-600"><?php echo e($totalData); ?></p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMPP\htdocs\data-imunisasi-anak\resources\views/dashboard.blade.php ENDPATH**/ ?>