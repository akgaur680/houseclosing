<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('index-section'); ?>
<?php echo $__env->yieldContent('login-section'); ?>
<?php echo $__env->yieldContent('register-section'); ?>
<?php echo $__env->yieldContent('calculate-mortage-section'); ?>
<?php echo $__env->yieldContent('services-section'); ?>
<?php echo $__env->yieldContent('view_service-section'); ?>
<?php echo $__env->yieldContent('quote-section'); ?>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views/layouts/master.blade.php ENDPATH**/ ?>