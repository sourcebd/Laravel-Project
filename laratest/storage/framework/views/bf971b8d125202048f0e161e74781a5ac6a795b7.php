<!DOCTYPE html>
<html>
<head>
	<title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>

	<div id="page_title">
		<?php echo $__env->yieldContent('page_title'); ?>
	</div>


	<div id="header">
		<nav>
			<?php echo $__env->yieldContent('nav_bar'); ?>
		</nav>	
	</div>

	<div id="page_content">
			<?php echo $__env->yieldContent('main_content'); ?>
	</div>

	<div id="footer">
		copyright@2021
	</div>

</body>
</html><?php /**PATH F:\13th Semester\ATP 3\Laravel-Project\Mahmud, Nafi\laratest\resources\views/layout/main.blade.php ENDPATH**/ ?>