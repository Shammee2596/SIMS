<?php
	include_once'EditStudentDetail.php';
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
					<h2 style="text-align: center;">Edit Student Details</h2>
					<form action="EditStudentDetail.php" method="POST">
						<input type="hidden" name="id" value=<?php echo $n['id'] ?>>
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
					        <input type="text" id="dept" name="dept" value="<?php echo $n['dept'];?>">
					      </div>
					    </div>
					    <div class="row">
					      <div class="col-25">
					        <label for="roll">Class Roll</label>
					      </div>
					      <div class="col-75">
					       	<input type="text" name="roll" value="<?php echo $n['classRoll'];?>">
					      </div>
					    </div>
					    <div class="row">
					      <div class="col-25">
					        <label for="presentAddress">Present Address</label>
					      </div>
					      <div class="col-75">
					        <input type="text" name="presentAddress" value="<?php echo $n['presentAddress'];?>">
					      </div>
					    </div>
					    <div class="row">
					      <div class="col-25">
					        <label for="status">Status</label>
					      </div>
					      <div class="col-75">
					        <input type="text" name="status" value="<?php echo $n['status'];?>">
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
