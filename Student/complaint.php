<?php
	include_once '../Authentication/dbh.db.php';

	$name = mysqli_real_escape_string($conn,$_POST['name']) ;
	$room   = mysqli_real_escape_string ($conn,$_POST['room']);
	$title = mysqli_real_escape_string($conn,$_POST['topic']);
	$complain = mysqli_real_escape_string($conn,$_POST['complain']);
	$time = $time = date("Y-m-d");

	$sql = "INSERT INTO complaint(c_date,title,complain,status,complainer_name,roomNo)
			 VALUES('$time',$title','$complain','unsolved','$name','$room')";
	mysqli_query($conn,$sql);
	header("location:student.php")
?>