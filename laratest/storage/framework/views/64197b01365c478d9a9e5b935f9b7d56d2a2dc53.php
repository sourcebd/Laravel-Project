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
	Copyright  &copy; 2021 | <strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong>. All Rights Reserved
	Powered by <a href="https://github.com/sourcebd/Laravel-Project"><strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong> Team</a>
	</div>

</body>
</html><?php /**PATH F:\13th Semester\ATP 3\Laravel-Project\laratest\resources\views/layout/main.blade.php ENDPATH**/ ?>