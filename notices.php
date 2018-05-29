<?php
	include_once'Authentication/dbh.db.php';
	$sql = "SELECT * FROM notice order by notice_id desc";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Notices</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="http://www.du.ac.bd/assets/css/animate.min.css" rel="stylesheet">
	 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
	  	<link rel="stylesheet" type="text/css" href="cssFile/home1.css">
	</head>
<body>
	<header id="header">
			<nav class="navbar navbar-inverse" role = "banner">


				<div class="container">
					<div class="col-lg-12"><p id="title"> Student Information Management System</p></div>
				    <div class="navbar-header">
				    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
				     	<!-- <a class="navbar-brand" href="#">Student Information <br>Management System</a> -->
				    </div>
				</div>
			</nav>	
	</header>

	<section id="space"></section>
	
	<div class="container-fluid">
				<div class="row">
					<div class="col-md-3"></div>
				<!--Notice Board-->
					<div class="col-md-6">
						<div class="panel panel-default">
						    <div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Notice Board</b></div>
						    <div class="noitce-panel-body">
						        <div class="row">
						            <div class="col-xs-12">
						                <ul class="demo1">

						                    <?php  
						                    	$count = 1;
						                    	while ($row=mysqli_fetch_assoc($result)) {?>

						                    	<li class="news-item">
						                            <table cellpadding="4">
						                                <tr>
						                                    <td>
						                                        <h4 class='list-group-item-heading'><?php echo $row['name'];?></h4>        <a href="notice/<?php echo $row['filePath'] ?>" target="_blank">Read more...</a>
						                                    </td>
						                                </tr>
						                            </table>
						                    	</li>

						                    <?php } ?>
						                 
						                </ul>
						            </div>
						        </div>
						    </div>
						    <div class="panel-footer"></div>
						</div>
					</div><!--/. Latest News -->
					<div class="col-md-2"></div>
				</div>
			</div>
		</div>
</body>
</html>