<?php

	session_start();
	if(isset($_POST['login'])){
	
	include_once 'dbh.db.php';

	$uname = mysqli_real_escape_string($conn,$_POST['username']) ;
	$pwd   = mysqli_real_escape_string ($conn,$_POST['password']);

	$sql = "SELECT * FROM user WHERE username = '$uname'; ";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck < 1){
		header("Location: ../index.php? login=empty");
		exit();
	}
	else{
		if($row = mysqli_fetch_array($result))
			$db_uname = $row['username'];
			$db_password = $row['password'];
			$db_type = $row['user_type'];
			$hashedPwdCheck = password_verify($pwd, $db_password);

			if($uname == $db_uname && $hashedPwdCheck == true){
				$_SESSION['is_logged_in'] = true;
				$_SESSION["u_id"] = $db_uname;
				$_SESSION['user_type'] = $db_type;

				echo $_SESSION["u_id"];

				if($_SESSION['user_type'] == 'admin')
				header("Location: ../SystemAdmin/systemAdmin1.php? login = success");

				else if($_SESSION['user_type'] == 'board_member'){
					header("Location: ../BoardMember/BM.php? login = success");
				}
				
			}
			else{
				header("Location: ../login.php? login=Maaaaaa");
				exit();

			}
		}
	}
?>



