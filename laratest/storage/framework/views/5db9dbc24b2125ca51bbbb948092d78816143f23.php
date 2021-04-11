<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-Pay | Customer-Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo e(asset('images/icons/favicon.png')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/animate/animate.css')); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/css-hamburgers/hamburgers.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/select2/select2.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/login1.css')); ?>">
	<link href="<?php echo e(asset('css/alert.css')); ?>" rel="stylesheet" media="all">
	
<!--===============================================================================================-->
	<div>
	<h1><strong><span style="font-size:40px; font-family: Sans-Serif; color:darkblue">E</span><span style="font-size:40px; font-family: Sans-Serif; color:rgb(81, 219, 187)">Pay</span></strong></h1>
    </div>
</head>
<body>

<!-- <iframe src="<?php echo e(asset('music/RunicPower.mp3')); ?>" allow="autoplay" style="display: none"></iframe>
<audio id="player" autoplay loop>
    <source src="<?php echo e(asset('music/RunicPower.mp3')); ?>" type="audio/mp3">
</audio> -->
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo e(asset('images/img-01.png')); ?>" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post">

					
       				
        			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" >

					<span class="login100-form-title">
						Customer Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid Username is required: ex-Nafi">
						<input class="input100" type="text" name="username" placeholder="Username" value="<?php echo e(old('username')); ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" value="<?php echo e(old('password')); ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" style="text-decoration:none" href="<?php echo e(route('registration.customer')); ?>">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" style="text-decoration:none" href="<?php echo e(route('main.index')); ?>">
							Home
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

				</form>

				<?php if(Session::has('msg')): ?>
				<div id="msg1" class="msg-receive dib mb4 bg-message br4 pv2 ph3 white measure-narrow">
                    <div class="f">
                        <?php echo e(session('msg')); ?> <br>
                    </div>
                    </div>
				<?php endif; ?>

			</div>
		</div>
	</div>

<!--===============================================================================================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo e(asset('js/alert.js')); ?>"></script>
<!--===============================================================================================-->	
	<script src="<?php echo e(asset('vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('vendor/bootstrap/js/popper.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('vendor/select2/select2.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('vendor/tilt/tilt.jquery.min.js')); ?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('js/login.js')); ?>"></script>


</body>
</html><?php /**PATH F:\13th Semester\ATP 3\Laravel-Project\laratest\resources\views/login/customer.blade.php ENDPATH**/ ?>