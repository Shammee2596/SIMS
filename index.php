<?php
	include_once'Authentication/dbh.db.php';
	$sql = "SELECT * FROM notice";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Student Information Management System</title>
	  	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="http://www.du.ac.bd/assets/css/animate.min.css" rel="stylesheet">
	 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 	<script src="jquery-3.3.1.min.js"></script>
	 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
	  	<link rel="stylesheet" type="text/css" href="home1.css">
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
				    <div class="collapse navbar-collapse navbar-right">
                		<ul class="nav navbar-nav">
                			<li class="active"><a href="#">Home</a></li>
                			<li class="dropdown" >
		                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">The Hall <i class="fa fa-angle-down"></i></a>
		                        <ul class="dropdown-menu" style="width:250px">
		                            <li><a href="#">About Hall</a></li>
									<li><a href="#">Co-curricular</a></li>
									<li><a href="#">DU at a Glance</a></li>
								</ul>
							</li>
							<li>
								<a href="Authentication/login1.php"><span class="glyphicon glyphicon-log-in"></span>Login</a>
						    </li>
							<li>
								<a href="Authentication/signUp.php">Sign Up</a>
						    </li>
				    	</ul>
				    </div>
				</div>
			</nav>
		</header>

		<section id="slider" class="no-margin">
			<div class="container-fluid">
			  	<div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
			    	</ol>

			    <!-- Wrapper for slides -->
			    	<div class="carousel-inner">
			      		<div class="item active">
			        		<img src="images/hall5.jpg" style="width:100%; height: 200px">
			        		<div class="carousel-caption">
			          			<h3>Los Angeles</h3>
			          			<p>LA is always so much fun!</p>
			        		</div>
			      		</div>

			      		<div class="item">
			        		<img src="images/hall4.jpg" style="width:100%; height: 250px">
			        		<div class="carousel-caption">
					    	    <h3>Chicago</h3>
			    		      	<p>Thank you, Chicago!</p>
			        		</div>
			      		</div>
			    
			      		<!-- <div class="item">
			        		<img src="hall4.jpg" style="width:100% height:200px">
			        		<div class="carousel-caption">
			          			<h3>New York</h3>
			          			<p>We love the Big Apple!</p>
			        		</div>
			      		</div> -->
			      	</div>
			    <!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				      <span class="glyphicon glyphicon-chevron-left"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" data-slide="next">
				      <span class="glyphicon glyphicon-chevron-right"></span>
				      <span class="sr-only">Next</span>
				    </a>
				</div>
			</div>
		</section>
		<section id="space"></section>
			<section id="middle">
				<div class="container-fluid">
					<div class="row">
					<!--Notice Board-->
						<div class="col-md-4">
						    <div class="panel panel-default">
						        <div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Notice Board</b></div>
						        <div class="noitce-panel-body">
						            <div class="row">
						                <div class="col-xs-12">
						                    <ul class="demo1">
						                    	<?php while ($row=mysqli_fetch_assoc($result)) {?>
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
						                       <!--  <li class="news-item">
						                            <table cellpadding="4">
						                                <tr>
						                                    <td>
						                                        <h4 class='list-group-item-heading'>রাষ্ট্রবিজ্ঞান বিভাগরে অধীনে মাস্টার ইন গভার্নেন্স স্টাডিজ (এমজিএস) ৯ম ব্যাচ ১ম সেমিস্টার ভর্তি বিজ্ঞপ্তি</h4>     
						                                        <a href="#">Read more...</a>
						                                    </td>
						                                </tr>
						                            </table>
						                    	</li> -->
						                     <!--    <li class="news-item">
						                            <table cellpadding="4">
						                                <tr>
						                                    <td>
						                                        <h4 class='list-group-item-heading'>রাষ্ট্রবিজ্ঞান বিভাগরে অধীনে মাস্টার ইন গভার্নেন্স স্টাডিজ (এমজিএস) ৯ম ব্যাচ ১ম সেমিস্টার ভর্তি বিজ্ঞপ্তি</h4>       
						                                        <a href="#">Read more...</a>
						                                    </td>
						                                </tr>
						                            </table>
						                    	</li>
						                        <li class="news-item">
						                            <table cellpadding="4">
						                                <tr>
						                                    <td>
						                                        <h4 class='list-group-item-heading'>রাষ্ট্রবিজ্ঞান বিভাগরে অধীনে মাস্টার ইন গভার্নেন্স স্টাডিজ (এমজিএস) ৯ম ব্যাচ ১ম সেমিস্টার ভর্তি বিজ্ঞপ্তি</h4>     
						                                        <a href="#">Read more...</a>
						                                    </td>
						                                </tr>
						                            </table>
						                    	</li> -->
						                    </ul>
						                </div>
						            </div>
						        </div>
						        <div class="panel-footer"> </div>
						    </div>
						</div><!--/. Latest News -->
						<div class="col-md-2"></div>
						<!-- <div class="col-md-5">
						    <div class="panel panel-default">
						        <div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Upcoming Event</b></div>
						        <div class="noitce-panel-body">
						            <div class="row">
						                <div class="col-xs-12">
						                    <ul class="demo1">
						                    </ul>
						                </div>
						            </div>
						        </div>
						        <div class="panel-footer"> </div>
						    </div>
						</div> -->
					</div>
				</div>
		</section>

		<footer class="container-fluid">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6"><p style="font-size: 18px; color: white;">About</p></div>
					<div class="col-lg-1"></div>
					<div class="col-lg-4"><p style="font-size: 18px; color: white;">Contact Us</p></div>
					<div class="col-lg-6">
						<p class="about">
							The hall or residential institute serves as an interconnecting bridge between the students and the University administration. A hall performs various functions which includes storing all student information assigned to the hall, allocating residential students, issuing ID card, notifying students about important issues etcetera. If these functions can be automated, it will be easy for the hall administration to manage their responsibilities.  
							The register office distributes the newly admitted students among different halls.  The hall office is supervised by the Provost.  Students assigned to halls are either resident or non-resident.
							If people have the desire to keep pace with the dynamic world, they must learn to get accustomed to technology. Wherever implemented, technology has made revolutions in the working procedures. Sadly, many sectors in the administration of the University of Dhaka still run manually today. A web based application of the existing systems would expedite the work flow and make it easier for the concerned. As a starting point, we are working on automating the student information management system of residential institutes or halls.
							
						</p>	
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-4">
						<p class="about">+08801751267037</p>
					</div>
				</div>
			</div>
		</footer>

		<script type="text/javascript">
	    	$(function () {
	        	$(".demo1").bootstrapNews({
	            	newsPerPage: 2,
	            	autoplay: true,
					pauseOnHover:true,
	            	direction: 'up',
	            	newsTickerInterval: 4000,
	            	onToDo: function () {
	                //console.log(this);
	            }
	        });
	    </script>
	</body>
</html>