<?php
  			session_start();
  			if(!isset($_SESSION["u_id"])) {
  				//echo "not ok";
  				header("Location: index.php? login=waaa");
  			} 
?>

<!DOCTYPE html>
<html>
	<head lang="en">
		<title></title>
  		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="http://www.du.ac.bd/assets/css/animate.min.css" rel="stylesheet">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
  		<link rel="stylesheet" type="text/css" href="../cssFile/home.css">
  		<link rel="stylesheet" type="text/css" href="../cssFile/systeamAdmin1.css">
  		<link rel="stylesheet" type="text/css" href="../cssFile/notice.css">
	</head>
	
	<body>
		<div class="container-fulid">
			<div class="row">
				<div class="head">
					<div class="col-lg-2">
						<div class="menu1" style="text-align: center; padding-top: 25px;">Board Member</div>
					</div>

					<div class="col-lg-10">
		   				<div class="col-lg-2">
 							<div class="option">
								<div class="col-lg-1">
									<a href="homePage.html">
   							 			<span class="glyphicon glyphicon-home" >Home</span>
   							 		</a> 
								</div>
							</div>
						</div>	
						<div class="col-lg-3"></div>
						<div class="col-lg-4">
							<form class="form-inline">
								<div class="form-group" id="search">
									<input type="text" placeholder="Search.." name="search" id="searchTxt">
   									<button type="submit" class="btn btn-default">
          								<span class="glyphicon glyphicon-search"></span> Search 
        							</button>									
								</div>
        					</form>
						</div>
						<div class="col-lg-1"></div>
						<div class="col-lg-2">
							<form class="form-inline" action= "../Authentication/logoutTest.php" method="POST">
								<div class="form-group" id="logout">
									<button type="submit" class="btn btn-default">
	          							<span class="glyphicon glyphicon-log-out"></span> Logout 
        							</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-2" id="left-column">
					<div class="container">
						<div>
							<img src="../icon/av.png" alt="Avatar" id="image">
							<div id="imageTxt"> Welcome</div>	
						</div>
						<!-- <div class ="menu">
							<span class="glyphicon glyphicon-menu-hamburger">Menu</span>
						</div> -->

						<div class="menu1">
							<a href="createNotice.php"> Create Notice</a>
						</div>
					
						<div class="menu1">
							<a href="#"> View Complain</a>
						</div>
						<div class="menu1">
							<a href="display.php">View Student Details</a>
						</div>
						<div class="menu1">
							<a href="#">Edit Student Information</a>
						</div>
						<div class="menu1">
							<a href="#"> Edit Own Profile</a>
						</div>
					</div>
				</div>
				<div class="col-lg-10" id="right-column" style="padding-top: 50px">

				
