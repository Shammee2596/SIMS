<?php
session_start();
require 'PHPMailer.php';
require 'SMTP.php';


	$sql="SELECT * FROM user WHERE email='$email'"; /////TABLE NAME BASED. PLEASE MODIFY
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);
	$urlForRecovery="";
	$data = "Username: ". $userName ." ". "password: ". $password;
	
	
	if ($resultCheck > 0){
 
		$mailSub="UserName And Password For Student Information Management System";
				
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
		$mail->Body=$data;
		$mail->AddAddress($email);
		
		if (!$mail->Send()){
			echo "Mail not sent";
		}else{
			echo "Mail sent. Please check";
			$sql1="UPDATE user SET code = '$generatedString' WHERE email='$email';"; /////TABLE NAME BASED. PLEASE MODIFY
			$result1=mysqli_query($conn,$sql1);
			while($row = mysqli_fetch_array($result)){
					$db_uname = $row['username'];
					$db_email = $row['email'];
					$db_type = $row['user_type'];
					$db_code = $row['code'];
					//$hashedPwdCheck = password_verify($pwd, $db_password);

					if($email == $db_email){
						echo "Hello";
						$_SESSION["u_id"] = $db_uname;
						$_SESSION['user_type'] = $db_type;
						$_SESSION['code'] = $db_code;
					}

			}header("location:AddBM.php");?>
			<!-- <script type="text/javascript">
				window.location = 'AddBM.php';
				alert("Mail Sent");
			</script> -->
		<?php
		
		}		
	}else{
		echo("Please recheck the entered email");
	}

?>