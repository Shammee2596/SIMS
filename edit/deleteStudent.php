<?php
	include_once '../Authentication/dbh.db.php';
	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		mysqli_query($conn, "DELETE FROM studentfullinformation WHERE id=$id");
		$_SESSION['message'] = "Address deleted!"; 
		header('location: display.php');
	}
?>