<?php
	include'adminHeader.php';

?>
	
						<div class="col-lg-3"></div>
							<div class="col-lg-5" id="bm">
								<div class="col-lg-12" id="head"></div>
								<h1 style="color: white; text-align: center;"> Add New Board Member </h1>
								
								<div class="form">
									<form name = "bmForm" onsubmit="return validateForm()" action="bmInformation.php" method="POST">
 
										<div class="form-group">
									    	<label for="name">Name*</label>
									    	<input type="text" class="form-control" name="name" placeholder="name">
									    	<p id="name-alert" style="color: red; font-size: 14px"></p>
									  	</div>
									 	
									 	<div class="form-group">
									    	<label for="designation">Designation*</label>
									    	<select class="form-control" name="designation">
									    		<option value="">Select One</option>
									    		<option value="Professor">Professor</option>
									    		<option value="Associate Professor">Associate Professor</option>
									    		<option value="Assistant Professor">Assistant Professor</option>
									    		<option value="Lecturer">Lecturer</option>
									    	</select>
									    	<p id="designation-alert" style="color: red; font-size: 14px"></p>
									  	</div>
									    
									    <div class="form-group">

									        <label for="dept">Department</label>

									        <select class="form-control" name="dept">
									        	<option value="">Select One</option>
										        <option value="Mathematics">Mathematics</option>
										        <option value="Computer Science And Engineering">Computer Science And Engineering</option>
										        <option value="">Select One</option>
										        <option value="IIT">IIT</option>
										        <option value="Genetics">Genetics</option>
										        <option value="Pharmecy">Pharmecy</option>
										        <option value="Physics">Physics</option>
										        <option value="Chemistry">Chemistry</option>
										        <option value="Zoology">Zoology</option>
										        <option value="Botany">Botany</option>
										        <option value="Microbiology And Microbiology">Microbiology And Moleculer Biology</option>
									        </select>

									        <p id="dept-alert" style="color: red; font-size: 14px"></p>
										</div>


									  	<div class="form-group">
									    	<label for="email">Email*</label>
									    	<input type="email" class="form-control" name="email" placeholder="Email">
									    	<p id="email-alert" style="color: red; font-size: 14px"></p>
									  	</div>

									  	<div class="form-group">
									    	<label for="position">Hall Designation*</label>
									    	<select class="form-control" name="position">
									    		<option value="">Select One</option>
									    		<option value="Provost">Provost</option>
									    		<option value="House Tutor">House Tutor</option>
									    		<option value="Assistant House Tutor">Assistant House Tutor</option>
									    	</select>
									    	<p id="position-alert" style="color: red; font-size: 14px"></p>
									  	</div>  
									   	
									   	<div class="form-group">
									    	<label for="username">Username*</label>
									    	<input type="text" class="form-control" name="username" placeholder="Username">
									    	<p id="username-alert" style="color: red; font-size: 14px"></p>
									   	</div> 
									 	
									 	<div class="form-group">
									    	<label for="password">Password*</label>
									    	<input type="password" class="form-control" name="password" placeholder="Password">
									    	<p id="password-alert" style="color: red; font-size: 14px"></p>
									  	</div>
									  	
									  	<div class="form-group">
									    	<label for="password">Confirm Password*</label>
									    	<input type="password" class="form-control" name="conPassword" placeholder="Re-Enter password">
									    	<p id="conPassword-alert" style="color: red; font-size: 14px"></p>
									  	</div>

									  	<div>
					 						<div class="col-lg-3"></div>
					 						<div class="col-lg-6">
					 	   						<button type="submit" class="btn btn-success btn-send" id="submit">Add BM</button>
					 						</div>
					 					</div> 

									</form>
								</div>
								<div class="col-lg-4"></div>
							</div>
						</div>
	<script type="text/javascript">
		function validateForm(){

	var name    	=   document.forms['bmForm']['name'].value;
	var designation = 	document.forms['bmForm']['designation'].value;
	var dept 		= 	document.forms['bmForm']['dept'].value;
	var email 		= 	document.forms['bmForm']['email'].value;
	var position 	= 	document.forms['bmForm']['position'].value;
	var username    =   document.forms['bmForm']['username'].value;
	var password    =   document.forms['bmForm']['password'].value;
    var confirmPassword = document.forms['bmForm']['conPassword'].value;
   
    var isError = 0;
    document.getElementById("name-alert").innerHTML			 = "";
    document.getElementById("designation-alert").innerHTML 	 = "";
    document.getElementById("dept-alert").innerHTML 		 = "";
    document.getElementById("email-alert").innerHTML 		 = "";
    document.getElementById("position-alert").innerHTML      = "";
    document.getElementById("username-alert").innerHTML 	 = "";
    document.getElementById("password-alert").innerHTML      = "";
    document.getElementById("conPassword-alert").innerHTML   = "";

    var isemail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    
    if(name == "" || name == null){
        document.getElementById("name-alert").innerHTML="Please fill the name field";
        isError=1;
    }

    if(designation == "" || designation == null){
        document.getElementById("designation-alert").innerHTML="Please Select Designation";
        isError=1;
    }
    if(dept =="" || dept == null){
        document.getElementById("dept-alert").innerHTML = "Select department";
        isError =1;
    }

    if(email == "" || email == null){
        document.getElementById("email-alert").innerHTML="Please fill the email field";
        isError=1;
    }else if(!isemail){
        document.getElementById("email-alert").innerHTML="Enter a valid email";
        isError=1;
    }

    if(position == "" || position == null){
        document.getElementById("position-alert").innerHTML="Select Hall Position";
        isError=1;
    }

    if(username == "" || username == null){
        document.getElementById("username-alert").innerHTML="Please fill the username field";
        isError=1;
    }else if(username.length <4){
        document.getElementById("username-alert").innerHTML="username should be atleast 4 charecters";
        isError=1;
    }

    if(password == "" || password == null){
        document.getElementById("password-alert").innerHTML="Please fill the password field";
        isError=1;
    }else if(password.length > 15){
        document.getElementById("password-alert").innerHTML="password can not be greater than 15 charecters";
        isError=1;
    }


    if(confirmPassword =="" || confirmPassword == null){
        document.getElementById("conPassword-alert").innerHTML="Please confirm the password";
        isError=1;
    }else if(password != confirmPassword){
        document.getElementById("conPassword-alert").innerHTML="Password didn't match";
        isError=1;
    }

    if(isError == 1){
        return false;
    }else{
     return true;   
    }

}


	</script>

<?php
	include'adminFooter.php';
?>