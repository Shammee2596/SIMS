<?php

if (isset($_POST['CreateAccount'])) {


	include_once 'dbh.db.php';
	$name  = mysqli_real_escape_string($conn,$_POST['name']) ;
	$regNo = mysqli_real_escape_string($conn, $_POST['regNo']);
	$dept  = mysqli_real_escape_string ($conn,$_POST['dept']);
	$email = mysqli_real_escape_string ($conn,$_POST['email']);
	$uid   = mysqli_real_escape_string ($conn,$_POST['username']);
	$pwd   = mysqli_real_escape_string ($conn,$_POST['password']);
	$user_type = "student";
				

	$sql = "SELECT * FROM studentfullinformation WHERE regNo = '$regNo';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck<0) { ?>
		<script>
			window.location = 'signup.php';
			alert("Sorry, Provided information don't match with existing database");
		</script>
	<?php	
	}
	else if($resultCheck >= 1){
		while ($row=mysqli_fetch_assoc($result)) {
			if($row['name'] != $name || $row['dept'] != $dept || $row['email'] != $email){?>
				<script>
					window.location = 'signup.php';
					alert("Sorry, Provided information don't match with existing database");
				</script>
			<?php	
			}else{
				$hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
				$sql = "INSERT INTO user(username,password,email,user_type) 
				VALUES ('$uid', '$hashPwd','$email','$user_type' )";
				$query = mysqli_query($conn,$sql);
				if($query){
					$sql = "UPDATE studentfullinformation
							SET username = '$uid'
							WHERE regNo = '$regNo';";
					mysqli_query($conn,$sql);	
			}
		}
		
	}?>
		<script>
			window.location = '../index.php';
			alert("Sign Up Success");
		</script>
	<?php	
	}
	
	
}

/*else if (isset($_POST['forgetPassword'])) {

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
*/

?>