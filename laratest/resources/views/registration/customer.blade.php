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
    <title>E-Pay | Customer Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/Registration.css" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="css/login1.css">
    <div>
	<h1><strong><span style="font-size:40px; font-family: Sans-Serif; color:darkblue">E</span><span style="font-size:40px; font-family: Sans-Serif; color:rgb(81, 219, 187)">Pay</span></strong></h1>
    </div>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
				<span class="login100-form-title">
						Customer Registration
					</span>

                    <form method="POST" enctype="multipart/form-data">
					@csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">User Name</label>
                                    <input class="input--style-4" type="text" name="username" value="{{old('username')}}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password" value="{{old('password')}}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name" value="{{old('name')}}">
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
                                    <label class="label">Department</label>
                                    <input class="input--style-4" type="text" name="dept" value="{{old('dept')}}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">CGPA</label>
                                    <input class="input--style-4" type="text" name="cgpa" value="{{old('cgpa')}}">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Type</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="type">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
                                <div class="select-dropdown"></div>
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
						<a class="txt2" style="text-decoration:none" href="{{route('login.customer')}}">
							Access your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
                    <div class="text-center p-t-136">
						<a class="txt2" style="text-decoration:none" href="{{route('main.index')}}">
							Home
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
                    </form>

                    @foreach($errors->all() as $err)
                        {{$err}} <br>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/Registration.js"></script>
    <script src="js/login.js"></script>
	

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->