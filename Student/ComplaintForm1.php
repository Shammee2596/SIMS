<?php
  			session_start();
  			if(!isset($_SESSION["u_id"])) {
  				//echo "not ok";
  				header("Location: ../index.php? login=waaa");
  			} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Complaint Form</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='custom.css' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
        <div class="row">
        	<div id="nav"></div>
        	<div class="col-lg-1"></div>
            <div class="col-lg-5 col-lg-offset-2" style="background-color: #048277;">
            	<h1>Complaint Form</h1>
            	<p class="lead" style ="text-align: center;">Only Resident Student Can Complaint</p>

            	<form id="contact-form" method="post" action="complaint.php" role="form">
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="form_name">Fullname *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your fulltname *" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                               <div class="form-group">
                                    <label for="form_room">Room Number *</label>
                                    <input id="form_room" type="text" name="room" class="form-control" placeholder="Please enter your room no. *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                       <!--  <div class="row">
                            <div class="col-md-8">
                               <div class="form-group">
                                    <label for="form_date">Date *</label>
                                    <input id="form_room" type="date" name="date" class="form-control" placeholder="yyyy/mm/dd *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="form_room">Complain Topic *</label><br>
                                    <select name="topic">
                                        <option value="Water Problem">Water Problem</option>
                                        <option value="Electricity Problem">Electricity Problem</option>
                                        <option value="Gas Problem"> Gas Problem</option>
                                        <option value="Cleaning Problem"> Cleaning Problem</option>
                                        <option value="Cooperation Problem"> Cooperation Problem</option>
                                        <option value="Adjustment Problem"> Adjustment Problem</option>
                                        <option value="Political Issue"> Political Issue</option>
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Complain *</label>
                                    <textarea id="form_message" name="complain" class="form-control" placeholder="Complain *" rows="4" required="required" data-error="Please,leave us a complain."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send" value="Submit Complaint">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="validator.js"></script>
    <script src="contact.js"></script> -->
</body>
</html>