<?php
	session_start();
	include_once '../Authentication/dbh.db.php';
	$update = false;
	$id = 0;

	if(isset($_POST['submit'])){
		$name  = mysqli_real_escape_string($conn,$_POST['name']) ;
		$regNo = mysqli_real_escape_string($conn, $_POST['regNo']);
		$dept  = mysqli_real_escape_string ($conn,$_POST['dept']);
		$session = mysqli_real_escape_string($conn,$_POST['session']);
		$classRoll = mysqli_real_escape_string($conn,$_POST['roll']);
		$residenceShipStatus = mysqli_real_escape_string($conn,$_POST['status']);
		$presentAddress = mysqli_real_escape_string($conn,$_POST['presentAddress']);
		$permanentAddress = mysqli_real_escape_string($conn,$_POST['permanentAddress']);
		$localGuardianContactNo = mysqli_real_escape_string($conn,$_POST['lContactNo']);
		$bloodGroup = $_POST['bloodGroup'];
		echo "$localGuardianContactNo";

		$sql = "SELECT * FROM studentfullinformation WHERE regNo = '$regNo';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck>0) {
			echo "<br>";
		}
		else{

			$sql = "INSERT INTO studentfullinformation(regNo,name,session,dept,classRoll,status,
			presentAddress,permanentAddress,l_contactNumber,bloodGroup)
			VALUES('$regNo', '$name', '$session', '$dept', '$classRoll', '$residenceShipStatus',
			'$presentAddress', '$permanentAddress', '$localGuardianContactNo', '$bloodGroup')";
			mysqli_query($conn,$sql);
			$_SESSION['message'] = "Address saved"; 
			header("location:systemAdmin1.php");
		}
		$sql1 ="SELECT * FROM studentfullinformation WHERE regNo = '$regNo';";
		$result = mysqli_query($conn, $sql);
	}
	
	//print_r($result);
?>
	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
	<?php endif ?>


	

