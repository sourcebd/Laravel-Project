<?php $__env->startSection('page_title'); ?>    
<h1>Welcome home! <?php echo e(session('username')); ?> </h1>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('title'); ?>
Home | ABC.com
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.nav_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emon5\OneDrive\Desktop\last semi\ATP3\sir\teaching-laravel-framework-spring-2020-2021-sec-b-main\laratest\resources\views/home/index.blade.php ENDPATH**/ ?>