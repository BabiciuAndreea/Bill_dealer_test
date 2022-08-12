

<?php $__env->startSection('content'); ?>
    <div id="app" class="w-100 h-100">
        <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <div class="container-expand px-0">
        <img src="<?php echo e(url('images/Bill_dealer_welcome.png')); ?>" alt="" class="img-fluid px-0">
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Bill DEaler\Bill_dealer_test\Bill_dealer_app\resources\views/welcome.blade.php ENDPATH**/ ?>