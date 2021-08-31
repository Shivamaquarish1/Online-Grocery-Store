<?php
require('includes/config.php');
 session_start();

	
	
	
	$cat=$_GET['subcatid'];
	
	$totalq="select count(*) \"total\" from grocery where b_subcat='$cat'";
	
	$totalres=mysqli_query($conn,$totalq) or die("Can't Execute Query...");
	$totalrow=mysqli_fetch_assoc($totalres);
	
	
	$page_per_page=6;
	
	$page_total_rec=$totalrow['total'];
	
	$page_total_page=ceil($page_total_rec/$page_per_page);
	
	
	if(!isset($_GET['page']))
	{
		$page_current_page=1;
	}
	else
	{
		$page_current_page=$_GET['page'];
	}
	
	
	

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
									<h1 class="title"><?php echo $_GET['subcatnm'];?></h1>
									<div class="entry">
										
										<table border="4" width="100%" >
											<br><br><br><br><br>
											<?php
												
												$k=($page_current_page-1)*$page_per_page;
											
												$query="select * from grocery where b_subcat='$cat' LIMIT ".$k .",".$page_per_page;
	
												$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	
												$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}	
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row['b_id'].'&cat='.$_GET['subcatnm'].'">
														<img src="'.$row['b_img'].'" width="100" height="100">
														<br>'.$row['b_nm'].'</a>
													</td>';
													$count++;							
													
													if($count==2)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
											


					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>					
										
										<br><br><br>
										<center>
										<?php
											
											if($page_total_page>$page_current_page)
											{
												echo '<a href="grocerylist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page+1).'">Next</a>';
											}
											
											for($i=1;$i<=$page_total_page;$i++)
											{
												echo '&nbsp;&nbsp;<a href="grocerylist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
											}
											
											if($page_current_page>1)
											{	
												echo '<a href="grocerylist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page-1).'">Previous</a>';
											}
											
										?>
										</center>
									</div>
									
								</div>
								
							</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					
			<!-- end page -->
			<br>
			
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
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
