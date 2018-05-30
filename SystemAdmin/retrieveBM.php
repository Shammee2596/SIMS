<?php
 	include_once '../Authentication/dbh.db.php';
 	$update = false;
	$n ="";
 	if (isset($_GET['edit'])) {
		global $email, $update,$n,$record;
		$email = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM board_member_information WHERE email = '$email';");
		$n = mysqli_fetch_array($record,MYSQLI_ASSOC);
		//print_r($n);
	}

	if (isset($_POST['update'])) {

		$email = $_POST['email'];
		$name = $_POST['name'];
		$dept = $_POST['department'];
		$designation = $_POST['designation'];
		$hall_designation = $_POST['hall_designation'];

		$sql = "UPDATE board_member_information 
				SET email = '$email', name='$name', designation='$designation', department='$dept', 
				hall_designation='$hall_designation' 
				WHERE email= '$email';";

		if(mysqli_query($conn, $sql)){
			$_SESSION['message'] = "Address updated!";
			header('location: viewBM.php'); 
		}
		else{
			echo "Failed to Update";
		}
}


