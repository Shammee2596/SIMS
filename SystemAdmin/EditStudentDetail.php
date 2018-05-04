<?php
 	include_once '../Authentication/dbh.db.php';
 	//echo "string";
 	$update = false;
	$id = 0;
	$n ="";
 	if (isset($_GET['edit'])) {
		global $id, $update,$n;
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM studentfullinformation WHERE id = $id");
		$n = mysqli_fetch_array($record);
		//print_r($n);
	}
	if (isset($_POST['update'])) {

	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['presentAddress'];
	$dept = $_POST['dept'];
	$status = $_POST['status'];

	if(mysqli_query($conn, "UPDATE studentfullinformation 
							SET name='$name', dept='$dept', presentAddress='$address' 
							WHERE id=$id")){
		$_SESSION['message'] = "Address updated!";
		header('location: display.php'); 
	}
	else{
		echo "Failed to Update";
	}
	
	
}

?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="EditStudentDetail.php" method="POST">
	<input type="hidden" name="id" value=<?php// echo $n['id'] ?>>
	<div class="form-group">
		<label for="name">Full Name*</label>
	    <input type="text" class="form-control" name="name" value="<?php //echo $n['name'];?>">
	</div>
	<div class="form-group">
		<label for="session">Sesion*</label>
		<input type="text" class="form-control" name="session" value="<?php// echo $n['session'];?>">
	</div>
	<?// if ($update == true): ?>
		<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
	<?php// else: ?>
		<button class="btn" type="submit" name="save" >Save</button> 
	<?php// endif ?>
</form>

</body>
</html> -->
 