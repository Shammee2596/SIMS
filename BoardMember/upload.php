<?php
	include_once '../Authentication/dbh.db.php';
	$uploadOk = 1;
	if(isset($_POST['submit'])){
		$doc_name =  mysqli_real_escape_string($conn,$_POST['fileName']) ;
		$myFile =  $_FILES['myFile']['name'];
		$tmp_dir = $_FILES['myFile']['tmp_name']; // tmp_name is a temporary directory
		$imageFileType = strtolower(pathinfo($myFile,PATHINFO_EXTENSION));
		if( $imageFileType != "pdf") {
    		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    		$uploadOk = 0;
		}
		if (file_exists($_SERVER['DOCUMENT_ROOT'].$myFile)) {
    		echo "Sorry, file already exists.";
    		$uploadOk = 0;
		}
		if($myFile && $doc_name && $uploadOk==1){
			$destinationDir = "../notice/$myFile";
			move_uploaded_file($tmp_dir, $destinationDir);
			$sql = "INSERT INTO notice(name,filePath) 
			VALUES ('$doc_name','$myFile')";
			$success = mysqli_query($conn,$sql);
			header("Location:BM.php? upload=success");

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

