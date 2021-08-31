<?php session_start(); ?>


<html>
<head>


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

				<div id="page">
						<!-- start content -->
				
							<div id="content">
					
								<div class="post">
									<center><h1 class="title" style="color:green">WELCOME TO OURGROCERIES </h1></center>
						
									<div class="entry">
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['REGISTER']))
											{
												echo '<font color="blue">YOU ARE SUCESSFULLY REGISTERED..</font>';
												echo '<br><br>';
											}
										
										?>
									
										<center>
											<form action="process_register.php" method="POST" style="border-left:solid green;border-top:solid green;border-bottom:solid crimson;border-right:solid green;border-right:solid crimson; width:650px;height:650px;">
												<table>
										<h2><span  style="color:green">GROCERY</span> <span  style="color:crimson">REGISTRATION</span></h2>
												<br><br>
												<tr>
													<td>&nbsp;&nbsp;<b>FULL-NAME :</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='fnm' placeholder="FULL-NAME"></td>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													 <td>&nbsp;&nbsp;<b>USER-NAME :</b>&nbsp;&nbsp;</td>
													 <td><input type='text' size="30" maxlength="30" name='unm' placeholder="USER-NAME"></td>
													 <td>&nbsp;</td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td>&nbsp;&nbsp;<b>PASSWORD :</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='pwd' size="30" placeholder="PASSWORD"></td>
													 
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td>&nbsp;&nbsp;<b>R-PASSWORD : </b>&nbsp;&nbsp;</td>
													<td><input type='password' name='cpwd' size="30" placeholder="CONFIRM-PASSWORD"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td>&nbsp;&nbsp;<b>GENDER:</b>&nbsp;&nbsp;</td>
													<td><input type="radio"  value="Male" name="gender" id='m'><label> Male</label>&nbsp;&nbsp;&nbsp;
														<input type="radio" value="Female" name="gender" id='f'><label>Female</label></td>
														<td>&nbsp;</td>
												</tr>
												
												<tr><td>&nbsp;</tr>
																				
												<tr>
													<td>&nbsp;&nbsp;<b>E-MAIL :</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='mail' size="30" placeholder="E-MAIL"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td>&nbsp;&nbsp;<b>PHONE-NO :</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='contact' size="30" placeholder="CONTACT-NO"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												
												<tr>
													<td>&nbsp;&nbsp;<b>CITY :</b>&nbsp;&nbsp;</td>
													<td>
													<select style="width: 195px;" name="city">
														
															<option>SURAT
															<option>VARACHA
															<option>BARUCH
															<option>ANKLESHWAR
															<option>VADODRA
															<option>AHMEDABAD
															<option>JHANOR
															<option>HAZIRA
															
													</select>
												
												</tr>
												
												<tr><td>&nbsp;</tr>

												<tr>
													<td colspan='2' align='center'>
														<input type='submit' value="  REGISTER  " class="form-submit-button">
													</td>
												</tr>
											</table>
											</form>
										</center>
									</div>
									
								</div>
					
					
							</div>
				
						<!-- end content -->
						
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
