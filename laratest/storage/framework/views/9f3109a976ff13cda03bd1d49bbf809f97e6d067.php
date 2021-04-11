<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Pay | Customer-Delete Review</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('css/MainPage.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/Create.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/CreateButton.css')); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Reveal - v4.0.1
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<iframe src="music/RunicPower.mp3" allow="autoplay" style="display: none"></iframe>
<audio id="player" autoplay loop>
    <source src="music/RunicPower.mp3" type="audio/mp3">
</audio>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">nativetube71@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:+8801869510882">+880 186 510882</a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/Nafi71340800" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/nafi.king16/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/dauntless_nafi/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/nafi-mahmud-350141185/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="<?php echo e(route('home.Cuserlist')); ?>">E<span>Pay</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="img/logo.png" alt=""></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="<?php echo e(route('home.Ccreate')); ?>">Create User</a></li>
        <li><a class="nav-link scrollto" href="<?php echo e(route('home.Cuserlist')); ?>">User List</a></li>
        <li><a class="nav-link scrollto" href="<?php echo e(route('logout.index')); ?>">Logout</a></li>
          <li class="dropdown"><a href="#"><span><?php echo e(session('username')); ?></span> <i class="bi bi-chevron-down"></i></a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">

    <div class="hero-content" data-aos="fade-up">
      <h2>Delete <?php echo e($user['name']); ?>'s Review<br><span style="color: red; text-decoration:none"></span></h2>
      <div>
        <a href="<?php echo e(route('home.Creviewuserlist')); ?>" class="btn-get-started scrollto">Review List</a>
      </div>
    </div>

    <div class="hero-slider swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/1.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/2.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/3.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/4.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/5.jpg');"></div>
      </div>
    </div>

  </section><!-- End Hero Section -->

  <main id="main">
<br>
    <!-- ======= Services Section ======= -->
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Remove Feedback</h2>
        </div>

    <section id="contact">
      <div class="container">
 
                <div class="card-body">
				<span class="login100-form-title" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
        Remove your unwanted opinion
					</span>

          <table border="0" style="width: 100%; min-height: 100vh">
				<tr>
					<td>Name&nbsp;&nbsp;</td>
					<td><?php echo e($user['name']); ?></td>
				</tr>
				<tr>
					<td>Username&nbsp;&nbsp;</td>
					<td><?php echo e($user['username']); ?></td>
				</tr>
				<tr>
					<td>Date of Review&nbsp;&nbsp;</td>
					<td><?php echo e($user['reviewdate']); ?></td>
				</tr>
                <tr>
					<td>Review&nbsp;&nbsp;</td>
					<td><?php echo e($user['review']); ?></td>
				</tr>
				<tr>
					<td>Feedback&nbsp;&nbsp;</td>
					<td><?php echo e($user['feedback']); ?></td>
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
							<input type="submit" name="submit" style="width:80px; background-color:darkblue; color:white; border-radius:50px; padding:10px" value="Confirm">
						</form>
					</td>
					<td></td>
				</tr>
			</table>
    <!-- ======= Contact Section ======= -->
    
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Contact to Admin</h2>
          <p><strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong> responses as soon as possible when when we are active. Feel free to discuss with us.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>Dhaka, Bangladesh</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+8801869510882">+880 186 9510882</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="https://sourcebd.github.io/nafi.com/">nafi.com</a></p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Copyright  &copy; 2021 | <strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
        Powered by <a href="https://github.com/sourcebd/Laravel-Project"><strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong> Team</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/swiper/swiper-bundle.min.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('js/MainPage.js')); ?>"></script>

</body>

</html><?php /**PATH F:\13th Semester\ATP 3\Laravel-Project\laratest\resources\views/home/Creviewdelete.blade.php ENDPATH**/ ?>