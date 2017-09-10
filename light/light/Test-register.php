<!DOCTYPE html>

<html>
<head>

	<title>Register Below</title>

	
</head>

<body>


<?PHP
//header('Access-Control-Allow-Origin: *');
session_start();
?>
<?PHP
require 'database.php';


	$message = '';



if(!empty($_POST['email']) && !empty($_POST['Occupation'])):

	

	// Enter the new user in the database

	$sql = "INSERT INTO users3(email, Fname, lname, Occupation) VALUES (:email, :Fname, :Lname, :Occupation)";

	$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':Fname', $_POST['Fname']);
$stmt->bindParam(':Lname', $_POST['Lname']);
$stmt->bindParam(':Occupation', $_POST['Occupation']);





	if( $stmt->execute() ):

		$message = 'Successfully Registered';

	else:

		$message = 'Sorry there must have been an issue Registering, Please Try Again!';

	endif;

endif;



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



	<h1>Register</h1>

		<form action="register.php" method="POST">

		<input type="text" placeholder="Enter your email" name="email">

		<input type="text" placeholder="Enter your First Name" name="Fname">
		
		<input type="text" placeholder="Enter your Last Name" name="Lname">	

		<input type="text" placeholder="Enter your Occupation" name="Occupation">

		<!--<input type="password" placeholder="create a password" name="password">

		<input type="password" placeholder="confirm password" name="confirm_password"> -->

		<input type="submit">


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


<!-- <?php
// remove all session variables
//session_unset(); 

// destroy the session 
//session_destroy(); 
?>
	</body>
</html>