<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    <h1>Delete User</h1>
    <a href="<?php echo e(route('home.userlist')); ?>"> Back</a>
			<table>
				<tr>
					<td>Name: </td>
					<td><?php echo e($user['name']); ?></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo e($user['username']); ?></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><?php echo e($user['password']); ?></td>
				</tr>
                <tr>
					<td>CGPA</td>
					<td><?php echo e($user['cgpa']); ?></td>
				</tr>
				<tr>
					<td>Dept</td>
					<td><?php echo e($user['dept']); ?></td>
				</tr>
				<tr>
					<td>
						<h3>Are you sure?</h3>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<form method="post">
							<?php echo csrf_field(); ?>
							<input type="submit" name="submit" value="Confirm">
						</form>
					</td>
					<td></td>
				</tr>
			</table>
			
</body>
</html>
<?php /**PATH F:\13th Semester\ATP 3\Laravel-Project\Mahmud, Nafi\laratest\resources\views/home/delete.blade.php ENDPATH**/ ?>