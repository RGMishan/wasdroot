<?php
include ("includes/db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Product</title>
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script> <!-- //tiny a text editor -->
	<link rel= "stylesheet" href= "styles/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
	<div class="row"><!--  //row starting -->
		<div class="col-lg-12">
			<div class="breadcrumb">
				<li class="active">
					<l class="fa fa-dashboard"> </l>
					DASHBOARD / Insert Product
				</li>
			</div>			
		</div>
	</div> <!-- //row closing -->

	<div class="row"><!--  //row starting -->
		<div class="col-lg-3"></div>
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading"> <!-- //panel heading started -->
					<h3>
						<i class="fa fa-money fa-w"></i>Insert Product
					</h3>
				</div><!--  ..panel bodyclosed -->
				
				<div class="panel-body"> <!-- //panel heading started -->
					<form class="form-horizontal" method="post" action="multipart/form-data">
						<div class="form-group">
							<label class="col-md-3 control-label">Product Title</label>
							<input type="text" name="product_title" class="form-control" required="" >
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Product Category</label>
							<select name="product_cat" class="form-control">
								<option>SELECT A PRODUCT CATEGORY</option>
								
							 	<?php
									
									$get_p_cats="SELECT * FROM product_category"; 
									$run_p_cats=mysqli_query($con,$get_p_cats);
									while ($row=mysqli_fetch_array($run_p_cats)) {
										$id= $row['p_cat_id'];
										$cat_title = $row['p_cat_title'];
										echo "<option value='$id' > $cat_title </option>";
									}
								?> 

							</select>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Categories</label>
							<select name="cat" class="form-control">
								<option>SELECT CATEGORIES</option>		

									<?php
									
									$get_cats="SELECT * FROM categories"; 
									$run_cats=mysqli_query($con,$get_cats);
									while ($row=mysqli_fetch_array($run_cats)) {
										$id= $row['cat_id'];
										$cat_title = $row['cat_title'];
										echo "<option value='$id' > $cat_title </option>";
									}
								?> 	

							</select>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Product Image 1</label>
							<input type="file" name="product_img1" class="form-control" required="" >
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Product Image 2</label>
							<input type="file" name="product_img3" class="form-control" required="" >
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Product Image 3</label>
							<input type="file" name="product_img3" class="form-control" required="" >
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Product Price</label>
							<input type="text" name="product_price" class="form-control" required="" >
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Product Keywoard</label>
							<input type="text" name="product_keywoards" class="form-control" required="" >
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Product Description</label>
							<textarea name ="product_desc" class="form-control" rows="6" cols="9"></textarea> <!-- //USING THE TINY HERE -->
						</div>
					</form>

				</div> <!--  ..panel body closed -->

			</div>			
		</div>

		<div class="col-lg-3"></div>
	</div> <!-- //row closing -->





<!-- //javascript bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>


<?php
if (isset($POST['submit'])) {
	$product_title=$_POST['product_title'];
	$product_cat=$_POST['product_cat'];
	$product_cat=$_POST['cat'];
	$product_price=$_POST['product_price'];
	$product_desc=$_POST['product_desc'];
	$product_keywords=$_POST['product_keywords'];

	$product_img1=$_FILE['product_img1'];
	$product_img2=$_FILE['product_img2'];
	$product_img3=$_FILE['product_img3'];
	
}

?>