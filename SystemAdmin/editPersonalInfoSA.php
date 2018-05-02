<?php
	include_once '../Authentication/dbh.db.php';

	$sql = "SELECT * FROM user WHERE user_type = 'admin'";
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
					<h2 style="text-align: center;">System Admin Information</h2>
					<?php
						while ($row=mysqli_fetch_assoc($result)) {
							echo "UserName:".$row['username']."<br>";
							/*echo "Password:".$row['password']."<br>";*/
								
						}
					?>

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