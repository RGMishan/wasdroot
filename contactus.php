<?php
session_start();
include ("includes/db.php");
include ("functions/functions.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>WASD STORE</title>

<!-- CSS LINK -->
<link rel= "stylesheet" href= "styles/style.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<!-- The top and container are the class and id called from the bootstrap and css -->

<body>
		<div id = "top"> <!-- Top Bar Start (ONLY) -->
			<div class = "container"> <!-- Container Start -->
				<div class = "col-md-6 offer"> <!-- //Bootstrap class creates 12 columns for navbar and used half -->
					<a href= "#" class = "btn btn-success btn sm">
						<!-- //class to get button and that button is small-->
						<?php
							if(!isset($_SESSION['customer_email'])){
								echo "WELCOME GAMER";
							}else{
								echo "WELCOME: " .$_SESSION['customer_email'] . "";
							}
						?>
					</a>

					<a href= "#" >
						Shopping cart total price : INR <?php totalPrice(); ?>, Total Item <?php item(); ?>
					</a>

				</div><!-- //Bootstrap class creates 12 columns #CLOSED -->
				<div class= "col-md-6">
					<ul class= "menu">
						<li>
							<a href= "customer_registration.php">
								Register
							</a>
						</li>

						<li>
							<a href= "checkout.php">
								My Account
							</a>
						</li>

						<li>
							<a href= "ccart.php.php">
								Go to Cart
							</a>
						</li>

						<li>
							<?php
							if(!isset($_SESSION['customer_email'])){
								echo "<a href = 'checkout.php'>Login</a>";
							}else{
								echo "<a href = 'logout.php'>Logout</a>";
							}
							?>
						</li>
					</ul>

				</div>
			</div><!-- Container Closed -->

		</div><!-- Top Bar Closed -->

		<div class= "navbar navbar-default" id="navbar"><!--  //navbar opening -->
			<div class = "container"><!--  //container opening -->
				<div class = "navbar-header"><!-- // header opening -->
					<a class= "navbar-brand home" href = "index.php">
						<img src="images/wasdlogo.png" alt="WASD LOGO" height="45" width="150" class ="hidden-xs"> <!-- //hidden when screen is extra small bootstrap -->
						<img src="images/logo_small.jpg" alt="Small WASD Logo" class ="visible-xs"> <!-- //when screen is extra small bootstrap -->
					</a>
					
					<button type="button" class="navbar-toggle" data-toogle="collapse" data-target = "#navigation">
						<span class="sr-only"> Toogle Navigation </span>
						<i class= "fa fa-align-justify"> <!-- //get icon from font swesome 3 dot icon -->
						</i>
					</button>

					<button type="button" class="navbar-toggle" data-toogle="collapse" data-target="#search">
						<span class="sr-only"></span>
						<i class="fa fa-search"></i>	
					</button>
				</div> <!-- // header closing -->

				<div class="navbar-collapse collapse" id="navigation"><!--  // navbar collapse start -->
					<div class="padding-nav"><!--  //padding nav open -->
						<ul class="nav navbar-nav navbar-left">
							<li>
								<a href="index.php"> Home</a>
							</li>
							<li   >
								<a href="shop.php"> Shop</a>
							</li>
							<li>
								<a href="checkout.php"> My Account</a>
							</li>
							<li>
								<a href="cart.php"> Shopping Cart</a>
							</li>
							<li>
								<a href="index.php"> About Us</a>
							</li>
							<li>
								<a href="services.php">Services</a> <!-- //COMPATIBILITY GOES HERE -->
							</li>
							<li class="active">
								<a href="contactus.php">Contact Us</a>
							</li>
						</ul>
					</div><!--  //padding nav close -->
					<a href="cart.php" class= "btn btn-primary navbar-btn right"><!--  //bootstrap used -->
						<i class="fa fa-shopping-cart"></i>
						<span><?php item(); ?> items in Cart</span>
					</a>
					<div class="navbar-collapse collapse right"><!--  //nav collapse right start -->
						<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
							<span class="sr-only"> Toggle Search</span>
							<i class="fa fa-search"></i>							
						</button> 
					</div><!--  //navbar collapse right end -->

					<div class= "collapse clearfix" id="search">
						<form class="navbar-form" method="get" action= "result.php"> 
							<div class= "input-group">
								<input type="text" name="user_query" placeholder="Search" class="form-control" required="">
								<span class="input-group-btn">
								<button type= "submit" value="Search" name="search" class="btn btn-primary">
									<i class= "fa fa-search"></i>
								</button>
								</span>
							</div>
						</form>
					</div>

				</div> <!-- // navbar collapse end -->

			</div><!--  //container closing -->
		</div> <!-- //navbar close -->

<!-- // Main shop work start -->

<div id= "content"> 
	<div class="container"> <!--  //starting container -->
		<div class="col-md-12"><!--  //column on medium screen 1 open -->
			<ul class="breadcrumb"><!--  //bootstrap default class for navigation-->
				<li><a href="home.php">Home</a></li>
				<li>Contact Us</li>
			</ul>	
		</div> <!-- //column on medium screen 1 open -->

<!-- // sidebar code start -->
		<div class="col-md-3">

			<?php
			 include("includes/sidebar.php");
			?>

		</div>
<!-- // sidebar code end -->


<!-- //CONTACT US PAGE STARTED -->

<div class="col-md-9"> <!-- //contact page start -->
	<div class="box"> <!-- //box opens -->
		<div class ="box-header">
			<center>
				<h2>Contact Us</h2>
				<p class="text-muted"> Feel free to contact our developers team if you have ay queries or problem with the website.</p>
			</center>			
		</div>

		<form action="contactus.php" method="post">
			
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" required="" class="form-control">				
			</div>			
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" required="" class="form-control">				
			</div>
			<div class="form-group">
				<label>Subject</label>
				<input type="text" name="subject" required="" class="form-control">				
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea name="message" class="form-control"></textarea> 				
			</div>
			<div class="text-center">
				<button type="submit" name="submit" class="btn btn-primary">
					<i class="fa fa-user-md"></i>Send Message
				</button>
			</div>


		</form>

	</div> <!-- //box closes -->
</div><!-- //contact page start -->

<!-- //CONTACT US PAGE ENDEDED -->


	</div><!--  //closing container --> 
</div> <!-- closing content --> 



<!-- // Main shop work end -->




<!--FOOTER START-->
<?php include("includes/footer.php"); ?>
<!--FOOTER END-->

<!-- //javascript bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>

<?
//ADMIN MAIL

if(isset($_POST['submit'])){
	$senderName=$_POST['name'];
	$senderEmail=$_POST['email'];
	$senderSubject=$_POST['subject'];
	$senderMassage=$_POST['massage'];
	$receiverEmail="regmimishan@gmail.com";
	mail($receiverEmail,$senderName,$senderSubject,$senderMassage,$senderEmail);


//CUSTOMER MAIL
$email=$_POST['email'];
$subject="WELCOME TO WASD";
$msg="We will reach you soon. Thanks for the mail.";
$from="regmimishan@gmail.com";
mail($email,$subject,$msg,$from);
echo "<h2 align = 'center'>MAIL SENT</h2>";
}
?>
