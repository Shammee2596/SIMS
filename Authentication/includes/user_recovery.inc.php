<?php
session_start();
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';


if (isset($_POST["submit"])){
	
	include_once '../dbh.db.php';
	$emailToRecover= mysqli_real_escape_string($conn,$_POST['email']);
	
	$sql="SELECT * FROM user WHERE email='$emailToRecover'"; /////TABLE NAME BASED. PLEASE MODIFY
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);
	$urlForRecovery="";
	
	
	
	
	
	if ($resultCheck > 0){
		echo "string";
		$randomSelectionString="01234567890qwertyuiopasdfghjklzxcvbnm";
		$shuffleRandomSelectionString=str_shuffle($randomSelectionString);
		$generatedString=substr($shuffleRandomSelectionString,0,10);
		$mailSub="Account Recovery Passcode";
				
		$mail=new PHPMailer\PHPMailer\PHPMailer();
		$mail->IsSmtp();
		$mail->SMTPDebug=1;
		$mail->SMTPAuth=true;
		$mail->SMTPSecure='ssl';
		$mail->Host="smtp.gmail.com";
		$mail->Port=465; // or 587
		$mail->IsHTML(true);
		$mail->Username="bsse0821andbsse0832@gmail.com";
		$mail->Password="sims12345";
		$mail->SetFrom("bsse0821andbsse0832@gmail.com");
		$mail->Subject=$mailSub;
		$mail->Body=$generatedString;
		$mail->AddAddress($emailToRecover);
		
		if (!$mail->Send()){
			echo "Mail not sent";
		}else{
			echo "Mail sent. Please check";
			$sql1="UPDATE user SET code = '$generatedString' WHERE email='$emailToRecover';"; /////TABLE NAME BASED. PLEASE MODIFY
			$result1=mysqli_query($conn,$sql1);
			while($row = mysqli_fetch_array($result)){
					$db_uname = $row['username'];
					$db_email = $row['email'];
					$db_type = $row['user_type'];
					$db_code = $row['code'];
					//$hashedPwdCheck = password_verify($pwd, $db_password);

					if($emailToRecover == $db_email){
						echo "Hello";
						$_SESSION["u_id"] = $db_uname;
						$_SESSION['user_type'] = $db_type;
						$_SESSION['code'] = $db_code;
					}
			}
			header('location:../forgetPassword1.php?');
		}		
	}else{
		echo("Please recheck the entered email");
	}
}
