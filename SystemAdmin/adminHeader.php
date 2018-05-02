<?php
  			session_start();
  			if(!isset($_SESSION["u_id"])) {
  				//echo "not ok";
  				header("Location: ../index.php? login=login denied as system admin");
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
  		<!-- <link rel="stylesheet" type="text/css" href="cssFile/home.css"> -->
  		<link rel="stylesheet" type="text/css" href="../cssFile/systeamAdmin1.css">
  		<link rel="stylesheet" type="text/css" href="../cssFile/AddStudent.css">
	</head>
	
	<body>
		<div class="container-fulid">
			<div class="row">				
				<div class="head">
					<div class="col-lg-2">
						<div class="menu1" style="text-align: center; padding-top: 25px;">System Admin</div>
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
						<div class="col-lg-1"></div>
						<div class="col-lg-6">
							<form class="navbar-form navbar-left">
							  <div class="input-group">
							    <input type="text" class="form-control" placeholder="Search">
							    <div class="input-group-btn">
							      <button class="btn btn-default" type="submit">
							        <i class="glyphicon glyphicon-search"></i>
							      </button>
							    </div>
							  </div>
							</form>

						</div>
						<div class="col-lg-1"></div>
						<div class="col-lg-2">
							<form class="form-inline" action= "../Authentication/logoutTest.php" method="POST">
								<div class="form-group" id="logout">
									<button type="submit" class="btn btn-default" name="logout">
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
						<div class="menu1">
							<a href="AddStudent.php">Add New Student</a>
						</div>
						<div class="menu1">
							<a href="addBM.php"> Add New Board Member</a>
						</div>
						<div class="menu1">
							<a href="display.php">Student Details</a>
						</div>
						<!-- <div class="menu1">
							<a href="#">Edit Student Information</a>
						</div> -->
						<div class="menu1">
							<a href="editPersonalInfoSA.php">System Admin Profile</a>
						</div>
					</div>
				</div>
				<div class="col-lg-10" id="right-column">