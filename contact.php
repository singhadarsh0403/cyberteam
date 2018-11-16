<?php
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>E commerce store</title>

	<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

	
	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
	<link href="styles/bootstrap.min.css" rel="stylesheet">
	<link href="styles/style.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

	
	<!----------->

</head>
<body>
	<div id="top"><!--top starts-->
		<div class="container"><!--container starts-->
			<div class="col-md-6 offer"><!-- colmd6-->
				<a href="#" class="btn btn-success btn-sm">
					Jnata Murti store
				</a>
				<a href="#">
					&nbsp Shooping cart Total price:$100, Total items 2
				</a>
				
			</div><!-- col-md-6 offer ends-->
			<div class="col-md-6"><!-- col-md-6 starts-->
				<ul class="menu"><!--menu starts-->
					<li><!--li starts-->
						<a href="customer_register.php">
							Register
						</a>
					</li><!--li starts-->
					<li>
						<a href="checkout.php">
							My account
						</a>
					</li>
					<li>
						<a href="cart.php">
							Go to cart
						</a>
					</li>
					<li>
						<a href="checkout.php">
							Login
						</a>
					</li>
				</ul><!--menu end-->
				
			</div><!-- col-md-6 ends-->
			
		</div><!--container ends-->
		
	</div><!--top ends-->

	<div class="navbar navbar-default" id="navbar"><!--navbar navbar-default start-->
		<div class="container"><!--container starts-->
			<div class="navbar-header"><!--navbar-header starts-->
				<a class="navbar-brand home" href="index.php"><!--navbar navbar-brand home starts-->
					<img src="images1/logo.png" height="58px;" alt="images1 logo" class="hidden-xs">
					<img src="images1/logo-small.png"  alt="images1 logo" class="visible-xs">
				</a><!--navbar navbar-brand home ends-->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation" >
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-align-justify" aria-hidden="true"></i>
				</button>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data- target="#search">
					<span class="sr-only">Toggle Search</span>
					<i class="fa fa-search"></i>
					<!--<i class="fa fa-search" aria-hidden="true"></i>-->
				</button>

				
			</div><!--navbar-header ends-->
			<div class="navbar-collapse" id="navigation"><!--navbar-collapse starts-->
				<div class="padding-nav"><!--padding-nav starts-->
					<ul class="nav navbar-nav navbar-left"><!--nav navbar-nav navbar-left start-->
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="shop.php">shop</a>
						</li>
						<li>
							<a href="checkout.php">My account</a>
						</li>
						<li>
							<a href="cart.php">Shopping cart</a>
						</li>
						<li class="active">
							<a href="contact.php">Contact us</a>
						</li>
					</ul><!--nav navbar-nav navbar-left Ends-->	
					
				</div><!--padding-nav Ends-->
				
				 <a class="btn btn pirmary navbar-btn right" href="cart.php"><!--btn btn pirmary navbar-btn right starts-->
					<!--<i class="fa fa-shopping-cart" aria-hidden="true"></i>-->
					<i class="fa fa-shopping-cart"></i>
					<span>4 items in cart</span>
					   
				</a><!--btn btn pirmary navbar-btn right ends-->
				


				<div class="navbar-collapse collapse right"><!--navbar-collapse collapse right starts-->
					<button  class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
						<span class="sr-only">Toggle Search	</span>
						<i  class="fa fa-search"></i>

					</button>
				</div><!--navbar-collapse collapse right ends-->

				<div class="collapse clearfix" id="search"><!--collapse clearfix starts-->
					<form class="navbar-form" method="get" action="results.php"><!--navbar- form starts-->
						<div class="input-group"><!--input- group starts-->
							<input class="form-control" type="text" placeholder="Search" name="user_query" required>
							<span class="input-group-btn"><!--input-group-btn starts-->
							<button type= "submit" value="Search" name="search" class="btn btn-primary">
								<i class="fa fa-search"></i>
								
							</button>
						    </span><!--input-group-btn ends-->
						</div><!--input- group ends-->
						
					</form><!--navbar- form ends-->
						
				</div><!--collapse clearfix starts-->
				
			</div><!--navbar-collapse ends-->


		</div><!--container ends-->
		
	</div><!--navbar navbar-default ends-->
	







<div id="content"><!--content starts-->
	<div class="container"><!--container starts-->
		<div class="col-md-12"><!--col-md-12 starts-->
			<ul class="breadcrumb"><!--breadcrump strats-->
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>Contact Us</li>
			</ul><!--breadcrump ends-->


		</div><!--col-md-12 ends-->

        <div class="col-md-3"><!--col-md-3 starts-->
        	<?php include("includes/siderbar.php");?>
                  

        
        </div><!--col md- 3 ends-->

<!--contact-->
		<div class="col-md-9"><!--col-md-9 starts-->
			<div class="box"><!--box starts-->
				<div class="box-header"><!--box-header starts-->
					<center><!--center starts-->
						<h2>Contact Us</h2>
						<p class="text-muted"><!--text-muted starts-->
							If you any question 
						</p>
					</center><!--center ends-->
				</div><!--box-header ends-->

				<form action="contact.php" method="post"><!--form starts-->
					<div class="form-group"><!--form group stats-->
						<label>Name</label>
						<input type="text" class="form-control" name="name" required>
					</div><!--form group ends-->
				</form><!--form ends-->
				<div class="form-group"><!--form group starts-->
					<label>Email </label>
					<input type="email" class="form-control" name="email" required>
				</div><!--form group Ends-->

				<div class="form-group"><!--form group starts-->
					<label> Subject </label>
					<input type="text" class="form-control" name="subject" required>
				</div><!--form group Ends-->
				<div class="form-group"><!--form group starts-->
					<label> Message</label>
					<textarea class="form-control" name="message">  </textarea>
				</div><!--form group Ends-->

				<div class="text-center"><!--text-center Starts-->
					<button type="submit" name="submit" class="btn btn-primary">
						<i class="fa fa-user-md"></i> &nbspSend Message
					</button>
				</div><!--text-center Ends-->

			</div><!--box ends-->
		</div><!--col-md-9 ends-->







	</div><!--container ends-->
</div><!--content ends-->



<!--footer------->

	<?php
include("includes/footer.php");
?>

<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	<!--<script src="js/bootstrap.min.js"></script>-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->

	<!--<script src="js/jquery.min.js"></script>-->

</body>
</html>