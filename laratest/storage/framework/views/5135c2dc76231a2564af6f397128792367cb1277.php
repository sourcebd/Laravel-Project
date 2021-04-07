<?php $__env->startSection('nav_bar'); ?>
<a href="<?php echo e(route('home.Ccreate')); ?>">Create User</a> |
<a href="<?php echo e(route('home.Cuserlist')); ?>">View User List</a> |
<a href="<?php echo e(route('logout.index')); ?>">Logout</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\13th Semester\ATP 3\Laravel-Project\laratest\resources\views/layout/nav_bar.blade.php ENDPATH**/ ?>