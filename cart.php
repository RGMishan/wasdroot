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
						WELCOME GAMER
					</a>

					<a href= "#" >
						Shopping cart total price : INR 100, Total Item 2
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
							<a href= "login.php">
								Login
							</a>
						</li>
					</ul>

				</div>
			</div><!-- Container Closed -->

		</div><!-- Top Bar Closed -->

		<div class= "navbar navbar-default" id="navbar"><!--  //navbar opening -->
			<div class = "container"><!--  //container opening -->
				<div class = "navbar-header"><!-- // header opening -->
					<a class= "navbar-brand home" href = "index.php">
						<img src="images/logo.jpg" alt="WASD LOGO" height="45" width="150" class ="hidden-xs"> <!-- //hidden when screen is extra small bootstrap -->
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
							<li>
								<a href="shop.php"> Shop</a>
							</li>
							<li>
								<a href="checkout.php"> My Account</a>
							</li>
							<li class="active">
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
						<span>4 items in Cart</span>
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
				<li>Shopping Cart</li>
			</ul>	
		</div> <!-- //column on medium screen 1 open -->


<!-- // Cart Page Portion Started -->

<div class="col-md-9" id="cart">
	<div class= "box">
		<form action="cart.php" method="post" enctype="multipart-form-data">
			<h1>Shopping Cart</h1>
			<p class="text-muted"> Currently you have 3 item(s) in your cart</p>
			<div class="table-responsive"><!-- //table responsive start -->
			<table class="table"> <!-- //bootstrap class -->
				<thead><!--  //makes bold -->
					<tr>
						<th colspan="2">Product</th>
						<th>Quantity</th>
						<th>Unit Price</th>
						<th>Size</th>
						<th colspan="1">Delete</th>
						<th colspan="1">Sub Total</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td><img src="admin_area/product_images/pc_game/minecraft.jpg"></td>
						<td>FORTNITE BATTLE ROYALE</td>
						<td>2</td>
						<td>INR 500</td>
						<td>64 bit</td>
						<td><input type="checkbox" name="remove[]"></td>
						<td>INR 600</td>
					</tr>	

					<tr>
						<td><img src="admin_area/product_images/pc_game/minecraft.jpg"></td>
						<td>MINECRAFT</td>
						<td>2</td>
						<td>INR 400</td>
						<td>64 bit</td>
						<td><input type="checkbox" name="remove[]"></td>
						<td>INR 800</td>
					</tr>	
				</tbody>

				<tfoot>
					<tr>
						<th colspan="5">Total</th>
						<th colspan="2">INR 398</th>
					</tr>		
				</tfoot>
			</table>
			</div> <!-- //table responsive closing -->

			<div class="box-footer" ><!--  //footer box open -->

				<div class="pull-left"><!--  //pull left start -->
					<a href="index.php" class="btn btn-default">
						<i class="fa fa-chevron-left">Continue Shopping</i>
					</a>					
				</div> <!-- //pull left closed -->

				<div class ="pull-right">
					<button class = "btn btn-default" type="submit" name="update" value="Update Cart">
						<i class="fa fa-refresh">Update Cart</i>
					</button>				
					<a href="checkout.php" class="btn btn-primary">Proceed To Check Out<i class="fa fa-chevron-right"></i></a> 
				</div>

			</div><!--  //footer box closed -->

		</form>
	</div> <!-- //box closing -->


<!-- //ALSO LIKE ITEM OPEN -->
	<div id="row same-height-row">
		<div class= "col-md-3 col-sm-6">
			<div class="box same-height headline">
				<h3 class="text-center">Check Out These Games You May Like</h3>				
			</div>
		</div>	
<!-- //Images of the Also May Like Games Start -->
<!-- //first image you may like -->
		<div class="center-responsive col-md-3">
			<div class="product same-height">
				<a href="">
					<img src="admin_area/product_images/pc_game/witcher3.jpg" class="img-responsive">
			    </a>
			<div class="text">
				<h3><a href="details.php">THE WITCHER THE PC GAME</a></h3>
				<p class="price">INR 100</p>
			</div>
			</div>			
		</div>

<!-- //second image you may like -->
		<div class="center-responsive col-md-3">
			<div class="product same-height">
				<a href="">
					<img src="admin_area/product_images/pc_game/witcher3.jpg" class="img-responsive">
			    </a>
			<div class="text">
				<h3><a href="details.php">THE WITCHER THE PC GAME</a></h3>
				<p class="price">INR 100</p>
			</div>
			</div>			
		</div>
<!-- //Third image you may like -->
		<div class="center-responsive col-md-3">
			<div class="product same-height">
				<a href="">
					<img src="admin_area/product_images/pc_game/witcher3.jpg" class="img-responsive">
			    </a>
			<div class="text">
				<h3><a href="details.php">THE WITCHER THE PC GAME</a></h3>
				<p class="price">INR 100</p>
			</div>
			</div>			
		</div>
<!-- //Images of the Also May Like Games End -->

	</div>
<!-- //ALSO LIKE ITEM CLOSED -->

</div><!--  //cart main div closing -->


<!-- // Cart Page Portion Ended -->
 

<!-- //SIDE CART SUMMARY OPEN -->

<div class="col-md-3"><!--  //col md 3 started -->
	<div class="box" id="order-summary">
		<div class="box-header">
			<h3>Order Summary</h3>			
		</div>		
		<p class="text-muted">Shipping and Additional Cost are calculated based on the values you have entered</p>
		<div class="table-responsive">
			<table class="table">
				<tbody>
					<tr>
						<td>Order Subtotal</td>
						<th>INR 5600</th>
					</tr>
					<tr>
						<td>Shipping and handling</td>
						<td>INR 0</td>
					</tr>
					<tr>
						<td>TAX</td>
						<td>INR 0</td>
					</tr>
					<tr class="total">
						<td>Total</td>
						<th>INR 5600</th>
					</tr>
				</tbody>
			</table>
			
		</div>

	</div>
</div><!--  //col md 3 closed -->

<!-- //SIDE CART SUMMARY cCLOSED -->


</div> <!-- //row closed -->
</div> <!-- //container closed -->

<!--FOOTER START-->
<?php include("includes/footer.php"); ?>
<!--FOOTER END-->

<!-- //javascript bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>

