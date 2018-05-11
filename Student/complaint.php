<?php
	include_once '../Authentication/dbh.db.php';

	$name = mysqli_real_escape_string($conn,$_POST['name']) ;
	$room   = mysqli_real_escape_string ($conn,$_POST['room']);
	$title = mysqli_real_escape_string($conn,$_POST['topic']);
	$complain = mysqli_real_escape_string($conn,$_POST['complain']);

	$sql = "INSERT INTO complaint(title,complain,status,complainer_name,roomNo)
			 VALUES('$title','$complain','unsolved','$name','$room')";
	mysqli_query($conn,$sql);
?>