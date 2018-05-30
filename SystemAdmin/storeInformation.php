<?php
	session_start();
	include_once '../Authentication/dbh.db.php';

	if(isset($_POST['submit'])){
		$name  = mysqli_real_escape_string($conn,$_POST['name']) ;
		$regNo = mysqli_real_escape_string($conn, $_POST['regNo']);
		$dept  = mysqli_real_escape_string ($conn,$_POST['dept']);
		$session = mysqli_real_escape_string($conn,$_POST['session']);
		$classRoll = mysqli_real_escape_string($conn,$_POST['roll']);
		$residenceShipStatus = mysqli_real_escape_string($conn,$_POST['status']);
		$presentAddress = mysqli_real_escape_string($conn,$_POST['presentAddress']);
		$permanentAddress = mysqli_real_escape_string($conn,$_POST['permanentAddress']);
		$localGuardianContactNo = mysqli_real_escape_string($conn,$_POST['lContactNo']);
		$lName = mysqli_real_escape_string($conn,$_POST['lName']);
		$room_no = mysqli_real_escape_string($conn,$_POST['roomNo']);
		$bloodGroup = $_POST['bloodGroup'];

		$sql = "SELECT * FROM studentfullinformation WHERE regNo = '$regNo';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck>0) {?>
			<script type="text/javascript">
				window.location = 'systemAdmin1.php';
				alert("duplicate reg no");
			</script>
		<?php
			 //WE HAVE TO SHOW A ALERT MESSAGE FOR THIS
		}
		else{

			$sql = "INSERT INTO studentfullinformation(regNo,name,session,dept,classRoll,status,room_no,
			presentAddress,permanentAddress,l_contactNumber,bloodGroup,l_name)

			VALUES('$regNo', '$name', '$session', '$dept', '$classRoll', '$residenceShipStatus','$room_no',
			'$presentAddress', '$permanentAddress', '$localGuardianContactNo','$bloodGroup','$lName')";
			if(mysqli_query($conn,$sql)){
				$_SESSION['message'] = "Address saved"; 
				header("location:display.php");
			}
		}
		$sql1 ="SELECT * FROM studentfullinformation WHERE regNo = '$regNo';";
		$result = mysqli_query($conn, $sql);
	}
	
	//print_r($result);
?>

<?php
	

?>
	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
	<?php endif ?>


	

