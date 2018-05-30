<!DOCTYPE html>
<html>
<head>
	<title>Add New Student</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../cssFile/AddStudent.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="form">
				<div class="col-lg-8 col-lg-offset-2" >
					<h1>Student Information</h1>
					<form action="storeInformation.php" method="POST">
						<div class="row">
							<div class="col-md-6">
								<input type="hidden" name="id" value="<?php echo $id; ?>">
						  		<div class="form-group">
							    	<label for="regNo">Registration No.*</label>
							    	<input type="text" class="form-control" name="regNo" placeholder="Enter Registration Number">
					    		</div>
					  		</div>
							<div class="col-md-6">
								<div class="form-group">
						    		<label for="name">Full Name*</label>
						    		<input type="text" class="form-control" name="name" placeholder="Enter Fullname">
						  		</div>
							</div>		
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
					    			<label for="session">Sesion*</label>
					    			<input type="text" class="form-control" name="session" placeholder="Enter Session">
					  			</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="dept">Department</label>
								    <select class="form-control" name="dept">
								    	<option selected="Choose one">Choose One</option>
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
								    </select>
								</div>
							</div>	
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
					    			<label for="roll">Class roll*</label>
					    			<input type="text" class="form-control" name="roll" placeholder="Enter Classroll">
					  			</div> 
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="permanentAddress">Permanent Address*</label>
								    <input type="text" class="form-control" name="permanentAddress" placeholder="Permanent Address"> 
								</div> 
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="presentAddress">Present Address*</label>
								    <input type="text" class="form-control" name="presentAddress" placeholder="Present Address">
					  			</div> 
							</div>
							<div class="col-md-6">
								<div class="form-group">
							     	<label for="dept">Blood Group</label>
							      	<select class="form-control" name="bloodGroup">
								        <option value="A(+ve)">A(+ve)</option>
								        <option value="A(-ve)">A(-ve)</option>
								        <option value="B(+ve)">B(+ve)</option>
								        <option value="B(-ve)">B(-ve)</option>
								        <option value="AB(+ve)">AB(+ve)</option>
								        <option value="AB(-ve)">AB(-ve)</option>
								        <option value="O(+ve)">O(+ve)</option>
								        <option value="O(-ve)">O(-ve)</option>
							      </select>
								</div> 
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="status">Status*</label>
								    <select class="form-control" name="status">
								        <option value="Non-Resident">Non-Resident</option>
								        <option value="Resident">Resident</option>
								    </select>
					  			</div>
							</div>
						</div>
						<div class="localGuardian">
					  		<h1>Applicable For Resident Student</h1>
					  		<div class="row">
					  			<div class="col-md-6">
					  				<div class="form-group">
									    <label for="roomNo">Room No.</label>
									    <input type="text" class="form-control" name="roomNo" placeholder="Enter Room No.">
						  			</div> 	
					  			</div>
					  			<div class="col-md-6">
					  				<div class="form-group">
						    			<label for="localGuardian">Local Guardian Name</label>
						    			<input type="text" class="form-control" name="lName" placeholder="Enter Local Guardian Name">
						  			</div> 
					  			</div>
					  		</div>
					  		<div class="row">
					  			<div class="col-md-6">
					  				<div class="form-group">
									    <label for="localGuardian">Local Guardian Address</label>
									    <input type="text" class="form-control" name="lAddress" placeholder="Enter Local Guardian Address">
						  			</div> 
					  			</div>
					  			<div class="col-md-6">
					  				<div class="form-group">
									    <label for="localGuardian">Contact No.</label>
									    <input type="text" class="form-control" name="lContactNo" placeholder="Local Guardian Contact No.">
						  			</div> 
						  			<div style="height: 5px padding-bottom:5px"></div> 
					  			</div>
					  		</div>
					 	</div>  

						<div class="row">
					 		<div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send" name="submit" value="Add Student">
                            </div>
					 	</div>   
					</form> 
					<!-- <form action="storeInformation.php" method="POST"> 
					  	
					 	<div class="row">
					 		<div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send" name="submit1" value="Add Student">
                            </div>
					 	</div>  
					</form> --> 	  	
				</div>
			</div>
		</div>
	</div>
</body>
</html>