<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <h1>Create New user</h1>

    <form method="post" enctype="multipart/form-data">
    	<?php echo csrf_field(); ?>
		<fieldset>
			<legend>Add</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo e(old('username')); ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?php echo e(old('password')); ?>"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo e(old('name')); ?>"></td>
				</tr>
				<tr>
					<td>dept</td>
					<td><input type="text" name="dept" value="<?php echo e(old('dept')); ?>"></td>
				</tr>
				<tr>
					<td>CGPA</td>
					<td><input type="text" name="cgpa" value="<?php echo e(old('cgpa')); ?>"></td>
				</tr>

                <tr>
					<td>Type</td>
					<td>
						<select name='type'>
							<option value="Admin"> ADMIN </option>
							<option value="User"> USER </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Image</td>
					<td>
						<input type="file" name="myfile">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
			</table>
		</fieldset>
	</form>

	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH F:\13th Semester\ATP 3\Laravel-Project\Mahmud, Nafi\laratest\resources\views/home/create.blade.php ENDPATH**/ ?>