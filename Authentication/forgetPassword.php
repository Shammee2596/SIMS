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
				<div class="col-lg-12" style="height: 200px;"></div>
				<div class="col-lg-12" id="form">
					<h2 style="text-align: center;">Account Recovery</h2>
		          	<form action="accountRecovery.php" method="POST">
			            <div class="container">
			              <label for="email"><b>Enter Recovery Email</b></label><br>
			              <input type="text" placeholder="Enter email" name="email" required><br>
		    	          <button type="submit" name="submit" class="btn btn-success">Submit</button><br>
 						</div>
 					</form>					
				</div>

		</div>
	</div>

</body>
</html>