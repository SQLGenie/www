<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Carol Fey  &mdash; Vote, Carol For Littleton City Council</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Littleton City Council Carol Fey" />
  <meta name="keywords" content="Carol Fey vita littleton" />
  <meta name="author" content="Carol Fey Littleton" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfont -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700|Unica+One' rel='stylesheet' type='text/css'>
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Icomoon Icons -->
	<link rel="stylesheet" href="css/icomoon-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">

	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
		<!-- Header -->
		<header id="fh5co-header" role="banner">
			
			<!-- Logo -->
			<div id="fh5co-logo" class="text-center">
				<a href="index.html">
					<img src="images/3logo.png" alt="Image">
				</a>

			</div>
			<!-- Logo -->
			
			<!-- Mobile Toggle Menu Button -->
			<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			
			<!-- Main Nav -->
			<div id="fh5co-main-nav">
			<nav id="fh5co-nav" role="navigation">
				<ul>
					<li class="active">
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="inside-page.html">Platform</a>
					</li>
					<li>
						<a href="contribute.html">Contribute</a>
					</li>
				</ul>
			</nav>
			</div>
			<!-- Main Nav -->
		</header>
		<!-- Header -->
		
		<!-- Main -->
		<main role="main">

				<!-- Slider -->
				<div class="container">
					<div class="row">
						<div class="fh5co-section-title text-center">
					<!--	<div class="col-md-8 col-md-push-4 col-sm-8 col-sm-push-4"> 
							<h1 class="fh5co-intro">-->
								<span class="fh5co-border"></span>Vote, Carol For Littleton City Council 
								<!--<a href="https://creativecommons.org/licenses/by/3.0/us/" -->

								 <a href="contribute.html"
								target="_blank">Contribute here</a>. Interested in Volunteering? <a 
								 href="register.php">Sign-Up Now</a>
								</div>
								<br>
								<br>
<div class="fh5co-section-title text-center">

<?php
header('Access-Control-Allow-Origin: *');
session_start();
require 'database.php';


	$message = '';



if(!empty($_POST['email']) && !empty($_POST['Occupation'])):

	

	$sql = "INSERT INTO voters(email, Fname, Lname, Address, Zip, Occupation, Amount) VALUES (:email, :Fname, :Lname, :Address, :Zip, :Occupation, :Amount)";

	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':Fname', $_POST['Fname']);
	$stmt->bindParam(':Lname', $_POST['Lname']);
	$stmt->bindParam(':Address', $_POST['Address']);
	$stmt->bindParam(':Zip', $_POST['Zip']);
	$stmt->bindParam(':Occupation', $_POST['Occupation']);
	$stmt->bindParam(':Amount', $_POST['Amount']);

	if( $stmt->execute() ):

		$message = 'Successfully Registered';  
	

	///place the link to strip.php
	

	else: 

		$message = 'Sorry there must have been an issue Registering, Please Try Again!';

	endif;


if ($message= 'Successfully Registered') { include 'just-stripe20.html';}

endif;

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>



<!DOCTYPE html>

<html>

<head>

	<title>Register Below</title>

	
</head>

<body>





	<?php if(!empty($message)): ?>

		<p><?= $message ?></p>

	<?php endif; ?>



		<h1>Please Register to Contrbute</h1>

		<!--<h1>Register</h1>-->

		<form action="TestContribute.php" method="POST">
		<h2 class="fh5co-uppercase-heading-sm text-left">Email
							<input type="text" placeholder="Enter your email" name="email">
		<h2 class="fh5co-uppercase-heading-sm text-left">Name
					   <input type="text" placeholder="Enter your First Name" name="Fname">
		<h2 class="fh5co-uppercase-heading-sm text-left">&emsp;
		  &emsp; &ensp;<input type="text" placeholder="Enter your Last Name " name="Lname">
		<h2 class="fh5co-uppercase-heading-sm text-left">Mailing Address
		                  <input type="text" placeholder="Enter your Address" name="Address">
		                                 <input type="text" placeholder="ZIP" name="Zip">
			<h2 class="fh5co-uppercase-heading-sm text-left">Occupation
				 &ensp;<input type="text" placeholder="Enter your Occupation" name="Occupation">
				 <h2 class="fh5co-uppercase-heading-sm text-left">Confirm Amount
				 &ensp;<input type="text" placeholder="Donation Amount" name="Amount">  
		<!--<input type="password" placeholder="create a password" name="password">

		<input type="password" placeholder="confirm password" name="confirm_password"> -->

		<input type="submit" placeholder="Submit" name="Submit">
</h2>
	</form>

</body>

</html>
<!-- Footer -->
		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-12 fh5co-footer-widget ">
						<img src="images/2logo.png" alt="Image" class="img-responsive">
					</div>
					 <!-- 
					<div class="col-md-2 col-xs-6 fh5co-footer-widget">
						<ul>
							<li><a href="#">Our Campaign Team</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</div>-->

					 <!-- Footer Sign Up-->
				
					
				<div class="fh5co-spacer fh5co-spacer-md"></div>
				<div class="row">
					<div class="col-md-6">
						<p class="fh5co-copyright">&copy; Committee to elect Carol Fey 2017. All Rights Reserved. <br>Powered by: Cloud Stitch Productions<a href="

							
							http://CloudStitchProductions.com." target="_blank">CloudStitchProductions</a> 
					
					</div>
					<!-- Cloud Stitch Footer-->
							
		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-12 fh5co-footer-widget ">
						<img src="images/cloudstitch logo3.png" alt="Image" class="img-responsive">
					</div>
					<div class="col-md-6">
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer -->
		
		<!-- Go To Top -->
		<a href="#" class="fh5co-gotop"><i class="ti-shift-left"></i></a>
		
			
		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="js/fastclick.js"></script>
		<!-- Velocity -->
		<script src="js/velocity.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>

</html>










































