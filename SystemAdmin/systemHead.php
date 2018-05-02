<?php
  			session_start();
  			if(!isset($_SESSION["u_id"])) {
  				//echo "not ok";
  				header("Location: ../index.php? login=waaa");
  			} 
?>

<!DOCTYPE html>
<html>
	<head lang="en">
		<title></title>
  		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="http://www.du.ac.bd/assets/css/animate.min.css" rel="stylesheet">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
  		<link rel="stylesheet" type="text/css" href="cssFile/home.css">
  		<link rel="stylesheet" type="text/css" href="cssFile/systeamAdmin1.css">
  		<link rel="stylesheet" type="text/css" href="cssFile/AddStudent.css">
	</head>

  <body>
    <div class="container-fulid">
      <div class="row">
            <div id="sidebar">
              <div class="toggle-btn" onclick="toggleSidebar()">
                <span></span>
                <span></span>
                <span></span>
              </div>
                 
                  <ul>
                    <li>Home </li>
                    <li></li>
                  </ul>
            </div>
  
          
      </div>
    </div>

  <script>
  function toggleSidebar(){
    document.getElementById("sidebar").classList.toggle('active');
  }
  </script>﻿
  </body>
  </html>