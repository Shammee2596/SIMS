<?php


if (isset($_POST['CreateAccount'])) {


	include_once 'dbh.db.php';
	$name  = mysqli_real_escape_string($conn,$_POST['name']) ;
	$regNo = mysqli_real_escape_string($conn, $_POST['regNo']);
	$dept  = mysqli_real_escape_string ($conn,$_POST['department']);
	$email = mysqli_real_escape_string ($conn,$_POST['email']);
	$uid   = mysqli_real_escape_string ($conn,$_POST['username']);
	$pwd   = mysqli_real_escape_string ($conn,$_POST['password']);
				

	$sql = "SELECT * FROM student WHERE regNo = '$regNo';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck>0) {
		header("Location: ../index.php? signup=empty");
		exit();
	}
	else{
		$hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
		$sql = "INSERT INTO student(name,regNo, department,email,userId,password) 
		VALUES ('$name','$regNo', '$dept', '$email', '$uid', '$hashPwd')";
		mysqli_query($conn,$sql);
		header("Location: ../index.php? signup=success");
		exit();
	}
	
	
}
else if (isset($_POST['forgetPassword'])) {

	include_once 'dbh.db.php';
	
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	$sql = "SELECT password FROM student WHERE email = '$email';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck >=1){
		mail($email,"reset password", "enter the code", "From: myanother@domain.com\r\n");
		
	}
	else{
		echo
		 '<script>
			 alert("Please enter correct recovery email");
		 </script>';
	}
}

else{
	header("Location: ../index.html? signup=empty");
			exit();
}


