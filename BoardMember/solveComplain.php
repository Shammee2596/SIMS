<?php
	include_once '../Authentication/dbh.db.php';
	if (isset($_POST['edit'])) {
		global $id;
		$id = $_POST['edit'];
		$status = $_POST['status'];

		if($status == 'unsolved'){
			if(mysqli_query($conn, "UPDATE complaint 
								SET status = 'solved' 
								WHERE id=$id")){
				$_SESSION['message'] = "Status updated!";
				header('location: viewComplain.php'); 
			}
		}
		else{
			echo "Failed to Update";
		}
	}
?>