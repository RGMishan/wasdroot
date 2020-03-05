<div class="panel panel-default sidebar-menu">
	<div class="panel-heading"><!--  //panel heading starts -->
		<center>
			<img src="customer_images/mishan.jpg" class="img-responsive">
		</center>
		<br>
		<h3 align="center" class="panel-title">Name : Mishan Regmi </h3>
	</div><!--  //panel heading closes -->

	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked"><!--  //bootstrap  -->
			<li class="<?php if(isset($_GET[my_order])) {echo "active";}?> ">
				<a href="my_account.php?my_order"><i class="fa fa-list"></i> My Order</a>
			</li>
			<li class="<?php if(isset($_GET[pay_offline])) {echo "active";}?> ">
				<a href="my_account.php?pay_offline"><i class="fa fa-bolt"></i> Pay Offline</a>
			</li>
		</ul>		
	</div>
	
</div>