<?php
	include_once '../Authentication/dbh.db.php';
	if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($conn, "DELETE FROM board_member_information WHERE email = '$id';");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: viewBM.php');
	mysqli_close($con);
}
?>