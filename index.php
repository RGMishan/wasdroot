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
							<li class="active">
								<a href="index.php"> Home</a>
							</li>
							<li>
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

<div class="container" id="slider"> <!-- // new slider container opened -->
	<div class="col-md-12"> <!-- // Navbar windows opened bootstrap -->
		<div class="carousel slide" id="myCarousel" data-ride="carousel"><!--  //corouser slide open -->
			<ol class="carousel-indicators">
				<li data-target="myCarousel" data-slide-to="0" ></li>
				<li data-target="myCarousel" data-slide-to="1" ></li>
				<li data-target="myCarousel" data-slide-to="2" ></li>
				<li data-target="myCarousel" data-slide-to="3" ></li>
			</ol>
			<div class="carousel-inner"> <!-- //courouser inner started -->
				<div class="item active">
					<img src="admin_area/slider_images/1.png">
				</div>
				<div class="item">
					<img src="admin_area/slider_images/2.jpg">
				</div>
				<div class="item">
					<img src="admin_area/slider_images/3.jpg">
				</div>
				<div class="item">
					<img src="admin_area/slider_images/4.jpg">
				</div>

			</div><!-- //courouser inner closed -->
			<a href="#myCarousel" class="left carousel-control" data-slide="prev">
				<span class= "glyphicon glyphicon-chevron-left"></span>
				<span class= "sr-only">Previous</span>
			</a>
			<a href="#myCarousel" class="right carousel-control" data-slide="next">
				<span class= "glyphicon glyphicon-chevron-right"></span>
				<span class= "sr-only">Next</span>
			</a>
		</div> <!--  //corouser slide closed -->
	</div> <!-- // Navbar windows closed bootstrap -->
</div> <!-- // new slider container closed -->


<div id="advantage"> <!-- //advantage start -->
	<div class="container"> <!-- //container start -->
		<div class="same-height-row"> <!-- //making same height open -->
			<div class="col-sm-4"> <!-- column divisor start -->
				<div class="box same-height"> <!-- //box made inside open -->
					<div class="icon"> <!-- //icon inside box -->
						<i class="fa fa-heart"></i>
					</div>
					<h3><a href="#">BEST GAMES</h3>
						<p>You can check out all the latest and trending game through us.</p>
				</div>
			</div>
		</div>		
	</div>	<!-- //container division closed -->
</div> <!-- //advantage divison closed -->

//javascript bootstrap
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>

