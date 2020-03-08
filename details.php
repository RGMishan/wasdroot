<?php
session_start();
include ("includes/db.php");
include ("functions/functions.php");
?>
<?php
	if(isset($_GET['pro_id'])){
		$pro_id=$_GET['pro_id'];
		$get_product="SELECT * FROM products where product_id='$pro_id' ";
		$run_product=mysqli_query($con, $get_product);
		$row_product=mysqli_fetch_array($run_product);
		$p_cat_id=$row_product['p_cat_id'];
		$p_title=$row_product['product_title'];
		$p_price=$row_product['product_price'];
		$p_desc=$row_product['product_desc'];
		$p_img1=$row_product['product_img1'];
		$p_img2=$row_product['product_img2'];
		$p_img3=$row_product['product_img3'];
		$get_p_cat="SELECT * FROM product_category where p_cat_id='$p_cat_id' ";
		$run_p_cat=mysqli_query($con, $get_p_cat);
		$row_p_cat=mysqli_fetch_array($run_p_cat);
		$p_cat_id=$row_p_cat['p_cat_id'];
		$p_cat_title=$row_p_cat['p_cat_title'];
	}
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

<div id= "content"> 
	<div class="container"> <!--  //starting container -->
		<div class="col-md-12"><!--  //column on medium screen 1 open -->
			<ul class="breadcrumb"><!--  //bootstrap default class for navigation-->
				<li><a href="home.php">Home</a></li>
				<li>Shop</li>
				<li><a href="shop.php?p_cat=<?php echo $p_cat_id;?>"><?php echo $p_cat_title ?></a></li>
				<li><?php echo $p_title ?></li>
				
			</ul>	
		</div> <!-- //column on medium screen 1 open -->

<!-- // sidebar code start -->
		<div class="col-md-3">

			<?php
			 include("includes/sidebar.php");
			?>

		</div>


<!-- //MAIN WORK FROM HERE -->

<div class="col-md-9">
	<div class ="row" id ="productmain">
		<div class="col-sm-6"> <!-- //starting of col sm 6  part 1-->
			<div id="mainimage">
				<div id="mycarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
						<li data-target="#mycarousel" data-slide-to="1"></li>
						<li data-target="#mycarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner"><!--  //inner carousel start -->
						
						<div class="item active">
							<center>
								<img src="admin_area/product_images/<?php echo $p_img1 ?>" class="img-responsive">
							</center>
						</div>

						<div class="item">
							<center>
								<img src="admin_area/product_images/<?php echo $p_img2 ?>" class="img-responsive">
							</center>
						</div>

						<div class="item">
							<center>
								<img src="admin_area/product_images/<?php echo $p_img3 ?>" class="img-responsive">
							</center>
						</div>

					</div><!--  //inner carousel ends -->

					<a href="#mycarousel" class="left carousel-control" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>

					<a href="#mycarousel" class="right carousel-control" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>


				</div>
			</div>
		</div> <!-- //closing of col sm 6 part 1-->

		<div class="col-sm-6"><!-- //starting of col sm 6  part 2-->
			<div class="box"> <!-- //box open -->
				<h1 class="text=center"><?php echo $p_title ?></h1> <!-- //text name  -->
<?php
	addCart();
?>
					<form action="details.php?add_cart=<?php echo $pro_id ?>" method="post" class="form-horizontal"> <!-- //form opened --> 
						<div class="form-group">
							<label class="col-md-5 control-label">CD Quantity</label>
							<div class="col-md-7">
								<select name="product_qty" class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>							
						</div>

						<div class="form-group">
							<label class="col-md-5 control-label">Game Edition</label>
							<div class="col-md-7">
								<select name="product_size" class="form-control">
									<option>Select Edition</option>
									<option>Master Edition</option>
									<option>Platinium Edition</option>
									<option>Gold Edition</option>
									<option>Standard Edition</option>
								</select>
							</div>	
						</div>
						<p class="price"><?php echo $p_price ?></p>
						<p class="text-center buttons">
							<button class="btn btn-primary" type="submit">
								<i class="fa fa-shopping-cart"></i>Add To Cart
							</button>
						</p>
					</form><!-- // form closed -->

			</div>	<!-- //box close -->
<!-- //First Image -->
		<div class="col-xs-4">
			<a href="#" class="thumb">
				<img src="admin_area/product_images/<?php echo $p_img1 ?>" class="img-responsive">
			</a>
		</div>
<!-- //Second Image -->
		<div class="col-xs-4">
			<a href="#" class="thumb">
				<img src="admin_area/product_images/<?php echo $p_img2 ?>" class="img-responsive">
			</a>
		</div>
<!-- //Third Image -->
		<div class="col-xs-4">
			<a href="#" class="thumb">
				<img src="admin_area/product_images/<?php echo $p_img3 ?>" class="img-responsive">
			</a>
		</div>


		</div> <!-- //closing of col sm 6  part 2-->



	</div><!--  //row ending -->
	
	<div class="box" id ="details">
		<h4>Game Details</h4>
			<p><?php echo $p_desc ?></h4>
		<ul>
			<li>34-bit</li>
			<li>64-bit</li>
		</ul>

	</div>

<!-- //ALSO LIKE ITEM OPEN -->
	<div id="row same-height-row">
		<div class= "col-md-3 col-sm-6">
			<div class="box same-height headline">
				<h3 class="text-center">Check Out These Games You May Like</h3>				
			</div>
		</div>	
<!-- //Images of the Also May Like Games Start -->

	<?php

	$get_product="SELECT * from products order by 1 LIMIT 0,3";
	$run_product=mysqli_query($con, $get_product);
	while ($row=mysqli_fetch_array($run_product)) {
		$pro_id=$row['product_id'];
		$product_title=$row['product_title'];
		$product_price=$row['product_price'];
		$product_img1=$row['product_img1'];
		echo "
		<div class='center-responsive col-md-3 col-sm-6'>
			
			<div class='product same-height'>
			<a href='details.php?pro_id=$pro_id'>
			<img src='admin_area/product_images/$product_img1' class='img-responsive'>
			</a>
			
			<div>
			<h3><a href = 'details.php?pro_id=$pro_id'>$product_title</a></h3>
			<p class='price'></p>
			</div>
			
			</div>
		
		</div>
		";
	}

	?>

<!-- //ALSO LIKE ITEM CLOSED -->

</div> <!--  //end div tag -->

<!-- //MAIN Product WorK FINISHED HERE -->

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