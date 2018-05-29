<!DOCTYPE html>
<html>
	<head>
		<title></title>
	  	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="http://www.du.ac.bd/assets/css/animate.min.css" rel="stylesheet">
	 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 	<script src="jquery-3.3.1.min.js"></script>
	 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="../js/signup.js"></script>
	  	<link rel="stylesheet" type="text/css" href="../cssFile/authentication.css">
	  	
	</head>
	<body>
		<div class="container">
	      <div class="row">
	        <div class="col-lg-4"></div>
	        <div class="col-lg-4" id="form">
	          <h2 style="text-align: center;">SignUp Form</h2>
	          <form name="signupForm" onsubmit ="return studentValidation()"  action= "register.php" method="POST">

	            <div class="container">
	              	<label for="name"><b>Name</label><br>
	              	<input type="text" placeholder="Enter Fullname" name="name"><br>
	              	<p id="name-alert" style="color: red; font-size: 14px"></p>


	              	<label for="regNo"><b>Registration No.</label><br>
	              	<input type="text" placeholder="Enter Registration no." name="regNo"><br>
	              	<p id="regNo-alert" style="color: red; font-size: 14px"></p>

	              	<!-- <p class="help-block"></p> -->

	              	<label for="department"><b>Department</label><br>
				  	<select name="dept">
				  		<option value="">Choose One</option>
						<option value="Mathematics">Mathematics</option>
						<option value="Computer Science And Engineering">Computer Science And Engineering</option>
						<option value="IIT">IIT</option>
						<option value="Genetics">Genetics</option>
						<option value="Pharmecy">Pharmecy</option>
						<option value="Physics">Physics</option>
						<option value="Chemistry">Chemistry</option>
						<option value="Zoology">Zoology</option>
						<option value="Botany">Botany</option>
						<option value="International Business">International Business</option>
						<option value="Microbiology And Moleculer Biology">Microbiology And Moleculer Biology</option>
					</select><br>
					<p id="dept-alert" style="color: red; font-size: 14px"></p>


	             	<label for="email"><b>Email</label><br>
	              	<input type="email" placeholder="Enter Recovery Email" name="email"><br>
	              	<p id="email-alert" style="color: red; font-size: 14px"></p>


	              	<label for="username"><b>Username</label><br>
	             	<input type="text" placeholder="Enter username" name="username"><br>
	             	<p id="username-alert" style="color: red; font-size: 14px"></p>

	             	<label for="psw"><b>Password</b></label><br>
	              	<input type="password" placeholder="Enter Password" name="password"><br>
	              	<p id="password-alert" style="color: red; font-size: 14px"></p>

	              	<label for="psw"><b>Confirm Password</b></label><br>
	              	<input type="password" placeholder="Confirm Password" name="conPassword"><br>
	              	<p id="conPassword-alert" style="color: red; font-size: 14px"></p>

	                <button type="submit" name="CreateAccount">Register</button><br>
	            </div>	
	            <div class="container">
					 <button type="button" class="cancel">Cancel</button>
				</div>  
				<div></div>          
	        </form>
          </div>
         <div class="col-lg-4"></div>
       </div>
     </div>
    </body>
</html>