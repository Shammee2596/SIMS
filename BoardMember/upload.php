<?php
	include_once '../Authentication/dbh.db.php';
	if(isset($_POST['submit'])){
		$doc_name =  mysqli_real_escape_string($conn,$_POST['fileName']) ;
		$myFile =  $_FILES['myFile']['name'];
		$tmp_dir = $_FILES['myFile']['tmp_name']; // tmp_name is a temporary directory

		if($myFile && $doc_name){
			$destinationDir = "../notice/$myFile";
			move_uploaded_file($tmp_dir, $destinationDir);
			$sql = "INSERT INTO notice(name,filePath) 
			VALUES ('$doc_name','$destinationDir')";
			mysqli_query($conn,$sql);
			header("Location:BM.php? signup=success");

		}else{
			//die("Failed to upload");
			header("Location:BM.php?whyyyyyyy");
			exit();
		}
	}else{
		header("Location:BM.php?whyyyyyyy");
			exit();
	}

?>
<!-- <?php
	//include'BM.php';
?> -->

