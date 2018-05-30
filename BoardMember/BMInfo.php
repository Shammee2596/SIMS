<?php
  			session_start();
  			if(!isset($_SESSION["u_id"])) {
  				//echo "not ok";
  			?>
  			<script type="text/javascript">
  				window.location = '../index.php';
  				alert("Access Denied");
  			</script>
  			<?php
  			} 
?>
<?php
	include_once '../Authentication/dbh.db.php';
	$username = $_SESSION['u_id'];
	$sql = "SELECT * FROM board_member_information WHERE username = '$username';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Personal Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../cssFile/authentication.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-5">
				<div class="col-lg-12" style="height: 150px;"></div>
				<div class="col-lg-12" id="form">
					<h2 style="text-align: center;">Board Member Profile</h2>
					<?php
						while ($row=mysqli_fetch_assoc($result)) {?>
							<table>
								<tr>
									<td>Name</td>
									<td>:&nbsp</td>
									<td><?php echo $row['name'];?></td>
								</tr>

								<tr>
									<td>Designation</td>
									<td>:&nbsp</td>
									<td><?php echo $row['designation'];?></td>
								</tr>

								<tr>
									<td>Department</td>
									<td>:</td>
									<td><?php echo $row['department'];?></td>	
								</tr>

								<tr>
									<td>Hall Designation</td>
									<td>:</td>
									<td><?php echo $row['hall_designation'];?></td>
								</tr>
							</table>
							<p class="info"><a href="../Authentication/changePassword.php" style="color: red;">Change Password</a></p>
							
					<?php }?>

		          	<!-- <form action="accountRecovery.php" method="POST">
			            <div class="container">
			              <label for="email"><b>Username</b></label><br>
			              <input type="text" placeholder="Enter email" name="email" required><br>
			              <label>Change Password</label><br>
			              <input type="password" name="password"><br>
			              <input type="password" name="conpwd"><br>
		    	          <button type="submit" name="submit" class="btn btn-success">Submit</button><br>
 						</div>
 					</form>		 -->			
				</div>

		</div>
	</div>

</body>
</html>