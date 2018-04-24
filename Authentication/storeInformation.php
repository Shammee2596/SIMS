<?php
	include_once 'dbh.db.php';

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
	}
	$sql1 ="SELECT * FROM studentfullinformation WHERE regNo = '$regNo';";
	$result = mysqli_query($conn, $sql);
	//print_r($result);
	//$row = mysqli_fetch_array($result);
	//print_r($row);
	//$resultCheck = mysqli_num_rows($result);

/*	foreach($row as $one_row){
		print_r ($one_row);
		//print_r($one_row);

	}*/
	//.$id."<br>".$name."  ".$session;
?>


	

