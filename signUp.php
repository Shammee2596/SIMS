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
	  	<link rel="stylesheet" type="text/css" href="authentication.css">
	</head>
	<body>
		<div class="container">
	      <div class="row">
	        <div class="col-lg-4"></div>
	        <div class="col-lg-4" id="form">
	          <h2 style="text-align: center;">SignUp Form</h2>
	          <form action="/action_page.php">
	            <!-- <div class="imgcontainer">
	              <img src="icon/av.png" alt="Avatar" class="avatar">
	            </div> -->

	            <div class="container">
	              	<label for="name"><b>Name</label><br>
	              	<input type="text" placeholder="Enter Fullname" name="name" required><br>
	              	<p class="help-block">Username can contain any letters or numbers, without spaces</p>

	              	<label for="regNo"><b>Registration No.</label><br>
	              	<input type="text" placeholder="Enter Registration no." name="regNo" required><br>
	              	<!-- <p class="help-block"></p> -->

	              	<label for="dept"><b>Department</label><br>
				  	<select name="dept">
						<option value="Mathematics">Mathematics</option>
						<option value="Computer Science And Engineering">Computer Science And Engineering</option>
						<option value="IIT">IIT</option>
						<option value="Genetics">Genetics</option>
						<option value="Pharmecy">Pharmecy</option>
						<option value="Physics">Physics</option>
						<option value="Chemistry">Chemistry</option>
						<option value="Zoology">Zoology</option>
						<option value="Botany">Botany</option>
						<option value="Microbiology And Moleculer Biology">Microbiology And Moleculer Biology</option>
					</select><br>

	             	<label for="email"><b>Email</label><br>
	              	<input type="email" placeholder="Enter Email" name="email" required><br>

	              	<label for="username"><b>Username</label><br>
	             	<input type="text" placeholder="Enter Fullname" name="username" required><br>
	             	<label for="psw"><b>Password</b></label><br>
	              	<input type="password" placeholder="Enter Password" name="psw" required><br>
	                <button type="submit">Register</button><br>
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