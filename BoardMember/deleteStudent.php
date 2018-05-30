<?php
	include_once '../Authentication/dbh.db.php';

	if (isset($_GET['delete'])) {

		$id = $_GET['delete'];

		$sql = mysqli_query($conn, "SELECT FROM studentfullinformation WHERE id=$id");
		$result = mysqli_fetch_array($sql,MYSQLI_ASSOC);
		$uname = $result['username'];

		if($uname != null || $uname = ""){
			mysqli_query($conn, "DELETE * FROM user WHERE username = '$uname';");	
		}
		mysqli_query($conn, "DELETE * FROM studentfullinformation WHERE id=$id");

		$_SESSION['message'] = "Address deleted!"; 
		header('location: display.php');
	}
?>