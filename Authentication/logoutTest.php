<?php
	
	if(isset($_POST['logout'])){
		//session_destroy();
		
		

		session_start();
		//echo $_SESSION["u_id"];
		$_SESSION = array();

		session_reset();
		session_destroy();
	}
		//echo "paichi";

		/*session_start();

		if(!isset($_SESSION["u_id"])) {
			echo "string";
		}


		/*unset($_SESSION['is_logged_in']);
		unset($_SESSION['u_id']);
		unset($_SESSION['username']);
		session_destroy();
		*/
		   header("Location:../index.php? logout = success");
		//exit();
	//}
	
?>