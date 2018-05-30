<?php
	include_once'retrieveBM.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../cssFile/EditStudentDetail.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2 style="text-align: center;">Edit Board Member Details</h2>


					<form action="retrieveBM.php" method="POST" id="cancel">

					    <div class="row">
					      <div class="col-25">
					        <label for="name">Name</label>
					      </div>
					      <div class="col-75">
					        <input type="text" id="name" name="name" value="<?php echo $n['name'];?>">
					      </div>
					    </div>
					    <div class="row">
					      <div class="col-25">
					        <label for="dept">Department</label>
					      </div>
					      <div class="col-75">
					       	<select class="form-control" name="department">

					       		<option ><?php echo $n['department']; ?></option>
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
					    <div class="row">
					      <div class="col-25">
					        <label for="roll">Designation</label>
					      </div>
					      <div class="col-75">
					       	<select class="form-control" name="designation">
					       		<option><?php echo $n['designation'];?></option>
								<option value="Professor">Professor</option>
								<option value="Associate Professor">Associate Professor</option>
								<option value="Assistant Professor">Assistant Professor</option>
								<option value="Lecturer">Lecturer</option>
							</select>
					      </div>
					    </div>
					    
					    <div class="row">
					      <div class="col-25">
					        <label for="presentAddress">Hall Designation</label>
					      </div>
					      <div class="col-75">
					        <select class="form-control" name="hall_designation">
								<option><?php echo $n['hall_designation'];?></option>
								<option value="Provost">Provost</option>
								<option value="House Tutor">House Tutor</option>
								<option value="Assistant House Tutor">Assistant House Tutor</option>
							</select>
					      </div>
					    </div>
					    <div class="row">
					      <div class="col-25">
					        <label for="status">Email Address</label>
					      </div>
					      <div class="col-75">
					        <input type="text" name="email" value="<?php echo $n['email'];?>">
					      </div>
					    </div>

					   	<div class="row">
					      	<?php if ($update == true): ?>
								<button type="submit" name="update">update</button>
							<?php else: ?>
								<button class="btn" type="submit" name="save" >Save</button> 
							<?php endif ?>
							<button type="button" class="cancelbtn" onclick="myFunction()">Cancel</button>
					    </div>

		  			</form>	
				</div>
			</div>
		</div>
		<script type="text/javascript">
 			function myFunction() {
    			document.getElementById("cancel").reset();		
			}
		</script>
	</body>
</html>
