<?php $__env->startSection('title'); ?>
USER LIST :: Epay.com
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_title'); ?>
<h1>User list</h1>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('nav_bar'); ?>
<a href="/home">Back</a> |
<a href="/logout">logout</a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main_content'); ?>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>USERNAME</td>
            <td>PASSWORD</td>
            <td>TYPE</td>
            <td>Action</td>
        </tr>

        <?php for($i=0; $i < count($list); $i++): ?>
        <tr>
            <td><?php echo e($list[$i]['userId']); ?></td>
            <td><?php echo e($list[$i]['username']); ?></td>
            <td><?php echo e($list[$i]['password']); ?></td>
            <td><?php echo e($list[$i]['type']); ?></td>
            <td>
                <a href="<?php echo e(route('home.edit', [$list[$i]['userId']])); ?>">Edit</a> |
                <a href="/home/delete/<?php echo e($list[$i]['userId']); ?>">Delete</a> |
                <a href="/home/details/<?php echo e($list[$i]['userId']); ?>">Details</a>
            </td>
        </tr>
        <?php endfor; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emon5\OneDrive\Desktop\last semi\ATP3\sir\teaching-laravel-framework-spring-2020-2021-sec-b-main\laratest\resources\views/home/list.blade.php ENDPATH**/ ?>