<?php session_start();?>


<html>
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

	<style>
				   * {
					    margin:0px; 
					    padding:0px;
    				 }

				input{
						height:30px;
						width:300px;
						padding-left:30px;
						margin:10px;	
					 }		
							   
				.btn{
					background-color:seagreen;
					color:WHITE;
					font-size:20px;
				}
				
				.hh{
					 background-size: cover;
					background-image:url(IMG/g2.png);
					height:100%;
			    	}

			    .form-submit-button {
										background: #13BED0;
										border: 0;
										padding: 8px 20px;
										border-radius: 4px;
										color: #FFF;
										text-transform: uppercase;
									}		

	</style>

		<?php
			include("includes/head.inc.php");
		?>

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
			<CENTER>
				<div  id="hh">
				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title" style="color:green"> 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo 'YOU ARE LOGGED IN ';
									echo $_SESSION['unm']; 
									echo '';
								}
								else
								{	
									echo ' WELCOME TO OURGROCERIES';
								}
							?>
							</h1>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<BR>

					<!-- start sidebar -->
					<div id="login">
						
							<?php
								include("includes/login.inc.php");
							?>
					
					</div>
				</BR>
			</div>
		</div>
	</CENTER>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			</BR></div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
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

			<!-- end footer -->
</body>
</html>