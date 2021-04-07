<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User, <?php echo e($user['id']); ?></h1>

    <form method="post">
    	<?php echo csrf_field(); ?>
		<fieldset>
			<legend>Edit</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo e($user['username']); ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?php echo e($user['password']); ?>"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo e($user['name']); ?>"></td>
				</tr>
				<tr>
					<td>dept</td>
					<td><input type="text" name="dept" value="<?php echo e($user['dept']); ?>"></td>
				</tr>

                <tr>
					<td>Type</td>
					<td>
						<select name='type'>
							<option value="admin" <?php if($user['type'] == 'admin'): ?> selected <?php endif; ?> > ADMIN </option>
							<option value="user"  <?php if($user['type'] == 'user'): ?> selected <?php endif; ?> > USER </option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
<?php /**PATH C:\Users\emon5\OneDrive\Desktop\last semi\ATP3\sir\teaching-laravel-framework-spring-2020-2021-sec-b-main\laratest\resources\views/home/edit.blade.php ENDPATH**/ ?>