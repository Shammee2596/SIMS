<?php
  			session_start();
  			if(!isset($_SESSION["u_id"])) {
  				//echo "not ok";
  				header("Location: ../index.php? login=waaa");
  			} 
?>

<?php
	include_once '../Authentication/dbh.db.php';
	$username = $_SESSION['u_id'];
	$sql = "SELECT * FROM studentfullinformation WHERE username = '$username';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html  lang="en">
	<head>
		<title>Student Information Management System</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="http://www.du.ac.bd/assets/css/animate.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 	<script src="jquery-3.3.1.min.js"></script>
	 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
	  	<link rel="stylesheet" type="text/css" href="student.css">
	</head>
	<body>
		<nav class="navbar navbar-light" style="background-color: rgba(9, 138, 150,0.7);">
    <div class="container-fluid">
      <div class="navbar-header">
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="#"></a>
          <a href="index.php"> <span class="glyphicon glyphicon-home" style="font-size: 24px">Home</span></a>
          <a>Compalint</a>
        </div>
        <div id="main">
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
      </div>

      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Home</a></li> -->
      </ul>
    </div>
  </nav>
		<div class="container-fluid">
			<div class="row">
				<p id="title">Personal Info</p>
				<div class="col-lg-3"></div>
				<div  class="col-lg-6">
					<div class="card">
						<div class="imgcontainer" id ="image">
		              		<img src="../icon/av.png" alt="Avatar" class="avatar">
		            	</div>
		            	<div class="container">
							<table>
								<?php while ($row=mysqli_fetch_assoc($result)){?>
								<tr>
									<td>Registration No.</td>
									<td>:</td>
									<td>&nbsp;<?php echo $row['regNo'];?></td>
								</tr>
								<tr>
									<td>Name</td>
									<td>:</td>
									<td>&nbsp;<?php echo $row['name'];?></td>
								</tr>
								<tr>
									<td>Session</td>
									<td>:</td>
									<td>&nbsp;<?php echo $row['session'];?></td>
								</tr>
								<tr>
									<td>Department</td>
									<td>:</td>
									<td>&nbsp;<?php echo $row['dept'];?></td>
								</tr>
								<tr>
									<td>Subject</td>
									<td>:</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>Class Roll</td>
									<td>:</td>
									<td>&nbsp;<?php echo $row['classRoll'];?></td>
								</tr>
								<tr>
									<td>Status</td>
									<td>:</td>
									<td>&nbsp;<?php echo $row['status'];?></td>
								</tr>
								<tr>
									<td>Present Address</td>
									<td>:</td>
									<td>&nbsp;<?php echo $row['presentAddress'];?></td>
								</tr>
								<tr>
									<td>Permanent Address:</td>
									<td>:</td>
									<td>&nbsp;<?php echo $row['permanentAddress'];?></td>
								</tr>
								<tr>
									<td>Local Guardian Contact No</td>
									<td>:</td>
									<td>&nbsp;<?php echo $row['l_contactNumber'];?></td>
								</tr>
								<?php }?>
							</table>
						</div>
					</div>
				</div>
				<div class="col-lg-3"></div>
			</div>		
		</div>
		<script>
		  	function openNav() {
		      document.getElementById("mySidenav").style.width = "250px";
		      document.getElementById("main").style.marginLeft = "250px";
			}

		  	function closeNav() {
		      document.getElementById("mySidenav").style.width = "0";
		      document.getElementById("main").style.marginLeft= "0";
		  	}
		  	function myFunction() {
		    	document.getElementById("myDropdown").classList.toggle("show");
			}

			// Close the dropdown if the user clicks outside of it
			window.onclick = function(e) {
		  		if (!e.target.matches('.dropbtn')) {
		    		var myDropdown = document.getElementById("myDropdown");
		      		if (myDropdown.classList.contains('show')) {
		        		myDropdown.classList.remove('show');
		      		}
		  		}
			}
		 </script>

	</body>

</html>