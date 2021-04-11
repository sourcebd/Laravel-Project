<?php $__env->startSection('page_title'); ?>    
<h1>Welcome home! <?php echo e(session('username')); ?> </h1>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('title'); ?>
Home | E-Pay.com
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.nav_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\13th Semester\ATP 3\Laravel-Project\Mahmud, Nafi\laratest\resources\views/home/index.blade.php ENDPATH**/ ?>