<?php session_start();?>

 	<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OUR GROCERIES</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/set1.css" />
	<link href="css/overwrite.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    	
    			.form-submit-button {
										background: #13BED0;
										border: 0;
										padding: 8px 20px;
										border-radius: 4px;
										color: #FFF;
										text-transform: uppercase;
									}	

    </style>
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><span>OURGROCERIES</span></a>
			</div>
			<div class="navbar-collapse collapse">							
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
		 				<li class="current_page_item"><a href="index.php">Home</a></li>
			<!--<li><a href="register.php">Register</a></li>-->
			<?php 
					if(isset($_SESSION['status']))
					{
						echo '<li><a href="viewcart.php">VIEWCART</a></li>';
						echo '<li><a href="logout.php">LOGOUT</a></li>';
					}
					else
					{
						echo '<li><a href="login.php">LOGIN</a></li>';
						echo '<li><a href="register.php">REGISTER</a></li>';
					}
			?>
			
			
			<li class="last"><a href="contact.php">CONTACT</a></li>
			<li class="last"><a href="aboutus.php">ABOUT US</a></li>
								
					</ul>

				</div>
			</div>			
		</div>
	</nav>
	
<br><br><br>

	<div id="sidebar">

							<?php
								include("includes/log.inc.php");
							?>
	</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				
	
	<div class="container">
		<div class="row">
			<div class="slider">
				<div class="img-responsive">
					<ul class="bxslider">				
						<li><img src="img/02.png" alt=""/></li>								
						<li><img src="img/01.jpg" alt=""/></li>	
						<li><img src="img/SLIDER.jpg" alt=""/></li>
						<li><img src="img/03.jpg" alt=""/></li>			
					</ul>
				</div>	
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<h2 style="color: seagreen">MULTI GROCERY STORE</h2>
					<p>The best online grocery store in India.<br>
					OURGROCERIES is an online supermarket for your daily needs.<br>
					Delivering your grocery from your favourite store</p>
				</div>
				<hr>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="box">
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
						<h4 style="color: seagreen"style="color: seagreen">HEALTHY FOOD</h4>					
							<div class="icon">
								<i class="fa fa-heart-o fa-3x"></i>
							</div>						
						<p>OUR GROCERIES WILL ALWAYS TRY TO PROVIDE FRESH AND HEALTHY FOOD</p>
						<!--<div class="ficon">
							<a href="#" class="btn btn-default" role="button"></a>
						</div>-->
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
						<h4 style="color: seagreen">MULTIPLE VARITIES</h4>
						<div class="icon">
							<i class="fa fa-desktop fa-3x"></i>
						</div>
						<p>OUR GROCERIES PROVIDES VARIOUS VARITIES OF FOOD FROM VARIOUS PALCES</p>
						<!--<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>-->
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
						<h4 style="color: seagreen">LOWEST PRICE</h4>
						<div class="icon">
							<i class="fa fa-location-arrow fa-3x"></i>
						</div>
						<p>OUR GROCERIES WILL PROVIDE CUSTOMER ITEMS AT THE LOWEST PRICE IN MARKET</p>
						<!--<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>-->
					</div>
					
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<h2 style="color: seagreen">GALLERY</h2>
					<p>SOME OF THE PRODUCTS THAT OURGROCERIES CAN PROVIDE YOU<br>
					</p>
				</div>
				<hr>
			</div>
		</div>
	</div>
	
	<div class="content">
		<div class="grid">
			<figure class="effect-zoe">
				<img src="img/25.jpg" alt="img25"/>
				<figcaption>
					<h2 style="color: seagreen"><span>FRUITS</span></h2>
					<p class="icon-links">
						<a href="http://localhost/PROJECT%20GS/grocery_store/grocerylist.php?subcatid=1&subcatnm=FRUITS"><span class="icon-eye"></span></a>
						<a href="http://localhost/PROJECT%20GS/grocery_store/grocerylist.php?subcatid=1&subcatnm=FRUITS"><span class="icon-paper-clip"></span></a>
					</p>
					<p class="description">OURGROCERIES PROVIDE BEST FRUITS AVAILABLE IN MARKET.</p>
				</figcaption>			
			</figure>
			<figure class="effect-zoe">
				<img src="img/26.jpg" alt="img26"/>
				<figcaption>
					<h2 style="color: seagreen"><span>VEGETABLES</span></h2>
					<p class="icon-links">
						<a href="http://localhost/PROJECT%20GS/grocery_store/grocerylist.php?subcatid=2&subcatnm=VEGETABLES"><span class="icon-eye"></span></a>
						<a href="http://localhost/PROJECT%20GS/grocery_store/grocerylist.php?subcatid=2&subcatnm=VEGETABLES"><span class="icon-paper-clip"></span></a>
					</p>
					<p class="description">OURGROCERIES PROVIDE BEST VEGETABLES AVAILABLE IN MARKET.</p>
				</figcaption>			
			</figure>
		</div>
	</div>
	
	<div class="content">
		<div class="grid">
			<figure class="effect-zoe">
				<img src="img/27.jpg" alt="img27"/>
				<figcaption>
					<h2 style="color: seagreen"><span>CEREALS</span></h2>
					<p class="icon-links">
						<a href="http://localhost/PROJECT%20GS/grocery_store/grocerylist.php?subcatid=3&subcatnm=CEREALS"><span class="icon-eye"></span></a>
						<a href="http://localhost/PROJECT%20GS/grocery_store/grocerylist.php?subcatid=3&subcatnm=CEREALS"><span class="icon-paper-clip"></span></a>
					</p>
					<p class="description">OURGROCERIES PROVIDE BEST ORGANIC CEREALS AVAILABLE IN MARKET.</p>
				</figcaption>			
			</figure>
			<figure class="effect-zoe">
				<img src="img/30.jpg" alt="img30"/>
				<figcaption>
					<h2 style="color: seagreen"><span>MILK-PRODUCTS</span></h2>
					<p class="icon-links">
						<a href="http://localhost/PROJECT%20GS/grocery_store/grocerylist.php?subcatid=4&subcatnm=MILKPRODUCTS"><span class="icon-eye"></span></a>
						<a href="http://localhost/PROJECT%20GS/grocery_store/grocerylist.php?subcatid=4&subcatnm=MILKPRODUCTS"><span class="icon-paper-clip"></span></a>
					</p>
					<p class="description">OURGROCERIES PROVIDE BEST MILK-PRODUCTS AVAILABLE IN MARKET.</p>
				</figcaption>			
			</figure>
		</div>
	</div>
	
	<footer>
		<div class="inner-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 f-about">
						<a href="index.html">
						<h1><span>SEARCH</span></h1></a>
						<p>
			<ul id="search">
			<center>
				<form method="GET" action="search_result.php" >
											
					<input type="text" id="s" name="s" value="" /><br><br>
					<input type="submit" id="x" value="Search" class="form-submit-button" />
					
				</form>
			</center>
			</ul>
						</p>
					</div>
					<div class="col-md-4 l-posts">
						<h3 class="widgetheading" style="color: seagreen">CATEGORIES</h3>
							<br>
								<?php
										
			
										$query="select * from category ";
			
										$res=mysqli_query($conn,$query);
											
										while($row=mysqli_fetch_assoc($res))
											{
												echo '<ul><b><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></b></ul>';
												//pass catid not catnm
											}
			
											mysqli_close($conn);
								?>
					</div>
					<div class="col-md-4 f-contact">
						<h3 class="widgetheading" style="color: seagreen">STAY IN TOUCH</h3>
						<a href="#"><p><i class="fa fa-envelope"></i>aman8941839942@gmail.com</p></a>
						<p><i class="fa fa-phone"></i>  +91 9426255499</p>
						<p><i class="fa fa-home"></i> OURGROCERIES inc  |  PINCODE 394518 
							<BR>  B-18/42 ONGC COLONY <br>
							INDIA</p>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="last-div">
			<div class="container">
				<div class="row">
					<div class="copyright">
						© 2019 OURGROCERIES  
					</div>	

				</div>
			</div>
			<div class="container">
				<div class="row">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
					</ul>
				</div>
			</div>
			
			<a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>	
				
			
		</div>	
	
	</footer>
	
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script src="js/functions.js"></script>	
	<script type="text/javascript">$('.portfolio').flipLightBox()</script>
  

  </body>
</html>