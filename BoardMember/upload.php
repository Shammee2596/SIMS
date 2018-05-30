<?php
	include_once '../Authentication/dbh.db.php';
	$uploadOk = 1;
	if(isset($_POST['submit'])){
		$doc_name =  mysqli_real_escape_string($conn,$_POST['fileName']) ;
		$myFile =  $_FILES['myFile']['name'];
		$tmp_dir = $_FILES['myFile']['tmp_name']; // tmp_name is a temporary directory
		$imageFileType = strtolower(pathinfo($myFile,PATHINFO_EXTENSION));
		$time = date("Y-m-d");

		if( $imageFileType != "pdf") {?>
		<script type="text/javascript">
				window.Location = "BM.php"
				alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed");
		</script>
    	
    	<?php
    		$uploadOk = 0;
		}
		if (file_exists($_SERVER['DOCUMENT_ROOT'].$myFile)) { ?>
			<script type="text/javascript">
				window.Location = "BM.php"
				alert( "Sorry, file already exists.");
			</script>
		<?php
    		$uploadOk = 0;
		}
		if($myFile && $doc_name && $uploadOk==1){
			$destinationDir = "../notice/$myFile";
			move_uploaded_file($tmp_dir, $destinationDir);
			$sql = "INSERT INTO notice(name,n_date,filePath) 
			VALUES ('$doc_name','$time','$myFile')";
			$success = mysqli_query($conn,$sql);
		?>
		<script type="text/javascript">
			window.Location = "BM.php"
			alert( "Location:BM.php? upload=success");
		</script>

		<?php
		}else{?>
			<script type="text/javascript">
				window.Location = "BM.php"
				alert("File Could Not Be Uploaded");
			</script>
		<?php	
		}
	}else{?>
		<script type="text/javascript">
			window.Location = "BM.php"
			alert("File Could Not Be Uploaded");
		</script>
	<?php
	}
?>


