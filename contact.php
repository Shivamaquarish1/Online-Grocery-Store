<?php session_start();
require('includes/config.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
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
</head>

<body>
			<!-- start header -->
					<div id="header">
						<div id="menu">
							<?php
								include("includes/menu.inc.php");
							?>
						</div>
					</div>
			<!-- end header -->
			
			<!-- start page -->

					<div id="page">
						<!-- start content -->
							<div id="content">
								<div class="post">
									
									<div class="entry" >
										<center>
										<form action="process_contact.php" method="POST" style="border-left:solid green;border-top:solid green;border-bottom:solid crimson;border-right:solid green;border-right:solid crimson; width:500px;height:650px;">
											
											<h1 class="title" style="color:seagreen">CONTACT US</h1>	

												<br>Name :<br>
												<input type='text' name='nm' size=35 placeholder="NAME">
												<br><br><br>
												
												E-mail ID:<br>
												<input type='text' name='email' size=35 placeholder="EMAIL ID">
												<br><br><br>
												
												Query:<br>
												<textarea cols="40" rows="10" name='query' placeholder="QUERY" ></textarea>
												<br><br><br>

												<input  type='submit' name='btn' value='   OK   ' class="form-submit-button" >

												
										</form>
										<center>
									</div>
									
								</div>
								
							</div>
						<!-- end content -->
						
						<!-- start sidebar -->
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
						<!-- end sidebar -->
						
						<div style="clear: both;">&nbsp;</div>
					</div>
			<!-- end page -->
						
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
