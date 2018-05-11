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
	$sql = "SELECT * FROM user WHERE username = '$username';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Account Recovery</title>
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
			<div class="col-lg-4">
				<div class="col-lg-12" style="height: 150px;"></div>
				<div class="col-lg-12" id="form">
					<h2 style="text-align: center;">Profile</h2>
					<?php while ($row=mysqli_fetch_assoc($result)) { ?>
						<p class="info"> UserName: <?php echo $row['username'];?></p>
						<p class="info"><a href="../Authentication/changePassword.php" style="color: white">Change Password</a></p>
						<p class="info"><a href="../Authentication/editEmail.php" style="color: white">Edit Email</a></p>
								
					<?php } ?>		
				</div>
		</div>
	</div>
</body>
</html>