<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>E-Pay | Customer-Registration</title>

    <!-- Icons font CSS-->
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/icons/favicon.png')); ?>">
    <link href="<?php echo e(asset('vendor/mdi-font/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/font-awesome-4.7/css/font-awesome.min.css')); ?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo e(asset('vendor/select2/select2.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/datepicker/daterangepicker.css')); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo e(asset('css/Registration.css')); ?>" rel="stylesheet" media="all">
	<link href="<?php echo e(asset('css/login1.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('css/alert.css')); ?>" rel="stylesheet" media="all">
    <div>
	<h1><strong><span style="font-size:40px; font-family: Sans-Serif; color:darkblue">E</span><span style="font-size:40px; font-family: Sans-Serif; color:rgb(81, 219, 187)">Pay</span></strong></h1>
    </div>
</head>

<body>

<!-- <iframe src="<?php echo e(asset('music/RunicPower.mp3')); ?>" allow="autoplay" style="display: none"></iframe>
<audio id="player" autoplay loop>
    <source src="<?php echo e(asset('music/RunicPower.mp3')); ?>" type="audio/mp3">
</audio> -->

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
				<span class="login100-form-title">
						Customer Registration
					</span>

                    <form method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username" value="<?php echo e(old('username')); ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password" value="<?php echo e(old('password')); ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name" value="<?php echo e(old('name')); ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" name="dob" value="<?php echo e(old('dob')); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="text" name="email" value="<?php echo e(old('email')); ?>">
                                </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Father/Spouse Name</label>
                                    <input class="input--style-4" type="text" name="father" value="<?php echo e(old('father')); ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mother Name</label>
                                    <input class="input--style-4" type="text" name="mother" value="<?php echo e(old('mother')); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Address</label>
                                    <input class="input--style-4" type="text" name="addr" value="<?php echo e(old('addr')); ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" value="<?php echo e(old('phone')); ?>">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row row-space">
                        <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" name="gender" value="Male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Others
                                            <input type="radio" name="gender" value="Others">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                            <div class="input-group">
                            <label class="label">Blood Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="blood">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">User Type</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="type">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="Customer">Customer</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Service Provider">Service Provider</option>
                                    <option value="Desk Manager">Desk Manager</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NID Number</label>
                                    <input class="input--style-4" type="text" name="nid" value="<?php echo e(old('nid')); ?>">
                                </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Upload Image</label>
                                    <input class="input--style-4" type="file" name="myfile">
                                </div>
                            </div>
                        
						<!-- <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Register</button>
                        </div> -->

					<!-- Login1.css -->	
					<div style="width:50%" class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

					<!-- Login1.css -->
					<div class="text-center p-t-136">
						<a class="txt2" style="text-decoration:none" href="<?php echo e(route('login.customer')); ?>">
							Access your Account
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

                    <?php if(!empty($errors->all())): ?>
                    <div id="msg1" class="msg-receive dib mb4 bg-message br4 pv2 ph3 white measure-narrow">
                    <div class="i">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($err); ?> <br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    </div>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('js/alert.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo e(asset('vendor/select2/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/datepicker/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/datepicker/daterangepicker.js')); ?>"></script>

    <!-- Main JS-->
    <script src="<?php echo e(asset('js/Registration.js')); ?>"></script>
    <script src="<?php echo e(asset('js/login.js')); ?>"></script>
	

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document--><?php /**PATH F:\13th Semester\ATP 3\Laravel-Project\laratest\resources\views/registration/customer.blade.php ENDPATH**/ ?>