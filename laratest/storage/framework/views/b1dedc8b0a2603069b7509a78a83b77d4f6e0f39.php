<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    <h1>User Details</h1>
    <a href="<?php echo e(route('home.userlist')); ?>"> Back</a>

    
			<table>
				<tr>
					<td colspan="2">
						<img src="<?php echo e(asset('/upload')); ?>/<?php echo e($user['profile_img']); ?>" width="100px" height="100px"> </td>
				</tr>
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
			</table>
</body>
</html>
<?php /**PATH F:\13th Semester\ATP 3\Laravel-Project\Mahmud, Nafi\laratest\resources\views/home/details.blade.php ENDPATH**/ ?>