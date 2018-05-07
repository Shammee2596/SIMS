<!DOCTYPE html>
<html>
<head>
	<title>Add New Student</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="cssFile/AddStudent.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-1"></div>
			<div class="col-lg-5">
				<div class="col-lg-12" id="head"></div>
				<div id="heading"> Add New Student Information </div>

				<div class="form">
					<div class="col-lg-1"></div>
					<div class="col-lg-10 col-lg-offset-2" >
					<form action="storeInformation.php" method="POST">
					  <input type="hidden" name="id" value="<?php echo $id; ?>">
					  <div class="form-group">
					    <label for="regNo">Registration No.*</label>
					    <input type="text" class="form-control" name="regNo">
					  </div>

					  <div class="form-group">
					    <label for="name">Full Name*</label>
					    <input type="text" class="form-control" name="name">
					  </div>
					  <div class="form-group">
					    <label for="session">Sesion*</label>
					    <input type="text" class="form-control" name="session">
					  </div>
					  <div class="form-group">
					     <label for="dept">Department</label>
					      <select class="form-control" name="dept">
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
					  <div class="form-group">
					    <label for="roll">Class roll*</label>
					    <input type="text" class="form-control" name="roll">
					  </div>  
					  <div class="form-group">
					    <label for="permanentAddress">Permanent Address*</label>
					    <input type="text" class="form-control" name="permanentAddress">
					  </div>  
					  <div class="form-group">
					    <label for="presentAddress">Present Address*</label>
					    <input type="text" class="form-control" name="presentAddress">
					  </div> 
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
					  <div class="form-group">
					    <label for="status">Status*</label>
					    <select class="form-control" name="status">
					        <option value="Non-Resident">Non-Resident</option>
					        <option value="Resident">Resident</option>
					      </select>
					  </div>
					  <div class="localGuardian">
					  		<p style="font-size: 20px"><u>Applicable For Resident Student</u></p>
						  <div class="form-group">
						    <label for="roomNo">Room No.</label>
						    <input type="text" class="form-control" name="roomNo">
						  </div> 
						  <div class="form-group">
						    <label for="localGuardian">Local Guardian Name</label>
						    <input type="text" class="form-control" name="lName">
						  </div> 
						  <div class="form-group">
						    <label for="localGuardian">Local Guardian Address</label>
						    <input type="text" class="form-control" name="lAddress">
						  </div>  
						  <div class="form-group">
						    <label for="localGuardian">Contact No.</label>
						    <input type="text" class="form-control" name="lContactNo">
						  </div> 
						  <div style="height: 5px padding-bottom:5px"></div> 
					 </div>   
					 <div>
					 	<div class="col-lg-2"></div>
					 	<div class="col-lg-6">
					 	   <button type="submit" class="btn btn-default" id="submit" name="submit">Submit</button>
					 	</div>
					 </div>   
					<div class="col-lg-1"></div>
					</form>
				</div>
			</div>
		</div>
	</div>	
	</div>
</body>
</html>