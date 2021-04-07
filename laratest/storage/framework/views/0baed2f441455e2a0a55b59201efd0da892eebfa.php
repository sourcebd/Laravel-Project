<div style="background-color:rgba(205, 217, 224, 0.808);">

<h1 style="color: green">Customer Balance Details <br> <div style="color:red"><?php echo e(session('username')); ?></div> </h1>

    <br><br>
    <?php echo e(session('msg')); ?>


    <center>
        <div style="color: red;
                    font-size:30px;
                    font-family: Arial, Helvetica, sans-serif;"><strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong>
        </div>
        <h2 style="font-family: Arial, Helvetica, sans-serif;">Approved Status of last 7 Days</h2>
    </center>
 
    <br><br>

<div style="
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    font-family: Arial, Helvetica, sans-serif;
    font-size:10px;
	border: 2px solid white;
	background-color: white;">

    <table width=100% border="1" style="text-align:center">

        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Card Number</th>
            <th>Bank Name</th>
            <th>Added Amount</th>
            <th>Deducted Amount</th>
            <th>Balance</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>

            <?php $__currentLoopData = $loan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i['id']); ?></td>
                <td><?php echo e($i->username); ?></td>
                <td><?php echo e($i['email']); ?></td>
                <td><?php echo e($i['card_no']); ?></td>
                <td><?php echo e($i['bank_name']); ?></td>
                <td><?php echo e($i['added']); ?></td>
                <td><?php echo e($i['transferred']); ?></td>
                <td><?php echo e($i['balance']); ?></td>
                <td><?php echo e($i['status']); ?></td>
                <td><?php echo e($i['created_at']); ?></td>
                <td><?php echo e($i['updated_at']); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
    </table>
</div>

<div style="font-family: Arial, Helvetica, sans-serif; margin-left: 620px">
<h3 style="margin:0%"><br>Regards,<br> 
<?php echo e(session('username')); ?></h3>
</div>

<h3 style="color: darkblue; text-align: center"> Home | Customer Balance </h3>
</div><?php /**PATH F:\13th Semester\ATP 3\Laravel-Project\laratest\resources\views/customer/pdfApprovedStatus.blade.php ENDPATH**/ ?>