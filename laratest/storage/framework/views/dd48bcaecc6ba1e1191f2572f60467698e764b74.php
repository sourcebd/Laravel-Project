<?php $__env->startSection('nav_bar'); ?>
<a href="/home/create">Create user</a> |
<a href="<?php echo e(route('home.userlist')); ?>">View user list</a> |
<a href="/logout">logout</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\13th Semester\ATP 3\Laravel-Project\Mahmud, Nafi\laratest\resources\views/layout/nav_bar.blade.php ENDPATH**/ ?>