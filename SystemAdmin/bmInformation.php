<?php
	include_once '../Authentication/dbh.db.php';

	$name  = mysqli_real_escape_string($conn,$_POST['name']) ;
	$dept  = mysqli_real_escape_string ($conn,$_POST['dept']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$designation = mysqli_real_escape_string($conn,$_POST['designation']);
	$hallDesignation = mysqli_real_escape_string($conn,$_POST['position']);
	$userName = mysqli_real_escape_string($conn,$_POST['username']);
	$password = $_POST['password'];
	$userType = "board_member";
	
	$sql = "SELECT * FROM board_member_information WHERE email = '$email';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	$sql1 =  "SELECT * FROM user WHERE username = '$userName';";
	$result1 = mysqli_query($conn, $sql1);
	$resultCheck1 = mysqli_num_rows($result1);

	if ($resultCheck>0) {
		//header("Location: storeInformation.html? Information already exists");
		//exit();
		if ($resultCheck1>0) {
		echo "sorry";
		}
		echo "Duplicate Information";
	}

	else{
		$hashPwd = password_hash($password, PASSWORD_DEFAULT);
		$sql1 = "INSERT INTO user(username, password,email,user_type) VALUES ('$userName','$hashPwd','$email','$userType')";
		mysqli_query($conn,$sql1);
		$sql = "INSERT INTO board_member_information(email, name, designation, department, hall_designation,username)
		VALUES( '$email','$name', '$designation', '$dept', '$hallDesignation',(SELECT username FROM user WHERE username = '$userName'))";
		$query = mysqli_query($conn,$sql);
		if(!$query){
			$sql = "DELETE FROM user WHERE username='$userName';";
			mysqli_query($conn,$sql);
		}
		

	}
?>
