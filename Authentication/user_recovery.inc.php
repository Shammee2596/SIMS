<?php

if (isset($_POST["forgetPassword"])){
	
	include_once 'dbh.db.php';
	$emailToRecover= mysqli_real_escape_string($conn,$_POST['email']);
	
	$sql="SELECT * FROM student WHERE email='$emailToRecover'"; /////TABLE NAME BASED. PLEASE MODIFY
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);
	$urlForRecovery="";
	
	
	
	
	
	if ($resultCheck > 0){
		$randomSelectionString="01234567890qwertyuiopasdfghjklzxcvbnm";
		$shuffleRandomSelectionString=$str_shuffle($randomSelectionString);
		$generatedString=substr($shuffleRandomSelectionString,0,10);
		
		mail($emailToRecover,"Recover Account","To recover account, please visit the link: $urlForRecovery","From: Server");
	
		$sql="UPDATE student SET email='$generatedString' WHERE email='$emailToRecover'";
		
		echo("Please check your email");
		
		
	}else{
		echo("Please recheck the entered email");
	}
}