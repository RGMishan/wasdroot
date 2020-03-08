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
								echo "<a = logout.php>Logout</a>";
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
							<li  class="active" >
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
							<li>
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

<div id= "content"> <!-- //content opened -->
	<div class="container"> <!--  //starting container -->
		<div class="col-md-12"><!--  //column on medium screen 1 open -->
			<ul class="breadcrumb"><!--  //bootstrap default class for navigation-->
				<li><a href="home.php">Home</a></li>
				<li>Shop</li>
			</ul>	
		</div> <!-- //column on medium screen 1 closed -->

<!-- // sidebar code start -->
		<div class="col-md-3">

			<?php
			 include("includes/sidebar.php");
			?>

		</div>
<!-- // sidebar code end -->

		<div class="col-md-9"> <!-- // used 3 by sidebar left 9 by shop menu  OPEN-->
<!-- //SHOP SIDE -->
			<?php
			if(!isset($_GET['p_cat'])){

				if(!isset($_GET['cat_id'])){
					echo "<div class='box'>
					<h1>Shop</h1>
					<p>The place where you get all the game using the filter in categories and platforms.</p>
					</div>";
				}
			}
			?>

		<div class ="row"><!--  //row start -->
			<?php
			if(!isset($_GET['p_cat'])){
				if(!isset($_GET['cat_id'])){

					$per_page=6;
					if(isset($_GET['page'])){
						$page=$_GET['page'];
					}else{
						$page=1;
					}
					$start_from=($page-1) * $per_page;
					$get_product="SELECT * from products order by 1 DESC LIMIT $start_from, $per_page";
					$run_pro=mysqli_query($con, $get_product);
					while ($row=mysqli_fetch_array($run_pro)) {
						$pro_id=$row['product_id'];
						$pro_title=$row['product_title'];
						$pro_price=$row['product_price'];
						$pro_img1=$row['product_img1'];

						echo "
						<div class='col-md-4 col-sm-6 center-responsive'>
						<div class='product'>
						<a href='details.php?pro_id=$pro_id'>
						<img src='admin_area/product_images/$pro_img1' class='img-responsive'>
						</a>
						
						<div class='text'>
						<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
						
						<p class='price'>
						INR $pro_price
						</p>
						<p class='buttons'>
						<a href='details.php?pro_id=$pro_id class='btn btn-default'>View Details</a>
						<a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'>Add To Cart</i></a>
						</p>

						</div>
						</div>
						</div>

						";
					}
				}
			}
			?>
		</div> <!--  //row end -->

<center>
	<ul class="pagination"><!--  //Bootstrap Page No Class -->
			<?php
			$per_page=6;
			$query="select * from products";
			$result=mysqli_query($con,$query);
			$total_record=mysqli_num_rows($result);
			$total_pages=ceil($total_record / $per_page);
			echo "
			<li><a href='shop.php?page=1'> ".'FIRST PAGE'."</a></li>";
			for($i=1; $i<=$total_pages; $i++){
				echo "
				<li><a href='shop.php?page=".$i."'>".$i."</a></li>
				";
			}
			echo "
			<li> <a href='shop.php?page=$total_pages'>".'Last Page'."</a></li>
			";
			?>
	</ul>
</center>

	<?php
	getPcatPro();
	getCatPro();
	?>
	

		</div> <!-- // used 3 by sidebar left 9 by shop menu  CLOSED-->

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