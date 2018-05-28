<?php
	session_start();

  		include_once 'dbh.db.php';
  		$username = $_SESSION['u_id'];
    	$check_data = "SELECT * FROM user WHERE username = '$username';";
    	$check_query = mysqli_query($conn, $check_data);
    	$numRows = mysqli_num_rows($check_query);
  
  	if (isset($_POST["submit"])){
  		$code = $_POST['code'];
  		echo $code;
  		if($numRows == 1){
  			echo "string";
    		while($row = mysqli_fetch_array($check_query)){
					$db_uname = $row['username'];
					echo "h";
					$db_email = $row['email'];
					$db_type = $row['user_type'];
					$db_code = $row['code'];
			
  		if($db_code == $code){
  			if($_SESSION['user_type'] == 'admin'){
				header("Location: ../SystemAdmin/systemAdmin1.php? login = success");
			}
			else if($_SESSION['user_type'] == 'board_member'){
				header("Location: ../BoardMember/BM.php? login = success");
			}
			else if($_SESSION['user_type'] == 'student'){
				header("Location: ../Student/student.php? login = success");
			}
  		}else{
  			echo "Please Try Again";
  		}
  	}}
	}
?>