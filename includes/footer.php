<div id="footer"><!--  //footer start -->
	<div class="container"> <!-- //container start -->
		<div class="row"> <!-- //row start -->
			
			<div class="col-md-3 col-sm-6"> <!-- // colmd1 open -->
				<h4>Pages</h4>
				<ul>
					<li><a href="cart.php">Shopping Cart</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="shop.php">Store</a></li>
					<li><a href="checkout.php.php">My Account</a></li>
				</ul>
				
				<hr class="hidden-md hidden-lg hidden-sm">
				<h4>User Section</h4>
				<ul>
					<li><a href="checkout.php">Login</a></li>
					<li><a href="customer_registration.php">Register</a></li>
				</ul>
				<hr class="hidden-md hidden-lg hidden-sm"><!--  //hidden for samll medium and small device bootstrap -->
			</div><!--  // colmd 1 closed -->

			<div class="col-md-3 col-sm-6"><!--  //colmd 2 open -->
				<h4>Top Game Categories</h4>
				<ul>
					<?php
					$get_p_cats="SELECT * FROM product_category";
					$run_p_cats=mysqli_query($con,$get_p_cats);
					while ($row_p_cat=mysqli_fetch_array($run_p_cats)){
						$p_cat_id = $row_p_cat['p_cat_id'];
						$p_cat_title = $row_p_cat['p_cat_title'];
						echo "<li><a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a></li>";
					}
					?>
				</ul>	
				<hr class="hidden-md hidden-lg">			
			</div><!--  //colmd 2 closed -->

			<div class="col-md-3 col-sm-6"><!--  //colmd 3 open -->
				<h4>Where To Find Us</h4>
				<p>
					<strong>github.com/Project18410</strong>
					<br>4 BCA "A"
					<br>Christ University
					<br>Bangalore
					<br>+91 6362136158
				</p>
				<a href="contact.php">Goto Contact US Page</a>	
				<hr class= "hidden-md hidden-lg">		
			</div><!--  //colmd 3 closed -->

			<div class="col-md-3 col-sm-6"><!--  //colmd 4 start -->
				<h4> Get the News & Update </h4>
				<p class="text-muted">
					SUSCRIBE US ON SOCIAL MEDIA
				</p>
				<form action="" method="post">
					<div class="input=group">
						<input type="text" name="email" class="form-control">
						<span class="input-group-btn">
							<input type="submit" class="btn btn-default" value="Suscribe">
						</span>
					</div>
				</form>
				<hr>
				<h4>Stay In Touch</h4>
				<p class="social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</p>
			</div><!--  //colmd 4 end -->
		</div> <!-- //row closed -->
	</div> <!-- //container closed -->
</div> <!-- //footer closed -->

<!-- //copyright Section -->
<div id="copyright">
	<div class="container">
		<div class="col-md-6">
			<p class="pull-left">
				&copy; 2020 Mr. Mishan Regmi
			</p>
		</div>
		<div class="col-md-6">
			<p class="pull-right">
				A Website By: <a href="www.github.com/RGMishan"> WASD GAMING </a>	
			</p>			
		</div>
	</div>
	
</div>