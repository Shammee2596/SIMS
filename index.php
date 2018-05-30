<?php
	include_once'Authentication/dbh.db.php';
	$sql = "SELECT * FROM notice order by notice_id desc";
	$result = mysqli_query($conn, $sql);
	//$resultCheck = mysqli_num_rows($result);

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


				    <div class="collapse navbar-collapse navbar-right">
                		
                		<ul class="nav navbar-nav">

                			<li class="active"><a href="#">Home</a></li>
                			
                			<li class="dropdown" >
		                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">The Hall <i class="fa fa-angle-down"></i></a>
		                        <ul class="dropdown-menu" style="width:250px">
		                            <li><a href="#about">About Hall</a></li>
		                            <!-- <li><a href="#staff">Staffs</a></li> -->
									<li><a href="#contact">Contact Us</a></li>
									<!-- <li><a href="#">DU at a Glance</a></li> -->

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
			    	</ol>

			    <!-- Wrapper for slides -->
			    	<div class="carousel-inner">
			      		<div class="item active">
			        		<img src="images/hall2.jpg" style="width:100%; height: 200px">
			        		<div class="carousel-caption">
			          			<!-- <h3>Los Angeles</h3> -->
			          			
			        		</div>
			      		</div>

			      		<div class="item">
			        		<img src="images/hall1.jpg" style="width:100%; height: 250px">
			        		<div class="carousel-caption">
					    	   <!-- <h3>Chicago</h3> -->
			        		</div>
			      		</div>
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
					<div class="col-md-8"></div>
				<!--Notice Board-->
					<div class="col-md-4">
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
						                                        <h4 class='list-group-item-heading'>
						                                        	<?php echo $row['name'];
						                                        		echo '<br>';
						                                        		echo '<h6>'.$row['n_date'].'</h6>';?>
						                                        	</h4><a href="notice/<?php echo $row['filePath'] ?>" target="_blank">Read more...</a>
						                                    </td>
						                                </tr>
						                            </table>
						                    	</li>

						                    <?php
						                    	$count = $count + 1;
						                    	if($count == 5)
						                    		break;
						                    	} ?>
						                    	<li><a href="notices.php">See More... </a></li>	
						                </ul>
						            </div>
						        </div>
						    </div>
						    <div class="panel-footer"></div>
						</div>
					</div><!--/. Latest News -->
					
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
					<div class="col-lg-6"><p style="font-size: 18px; color: white;">About Hall</p></div>
					<div class="col-lg-1"></div>
					<div class="col-lg-4"><p style="font-size: 18px; color: white;">Contact Us</p></div>
					<div class="col-lg-6">
						<a name="about" style="text-decoration: none; color: white;">
							<p>As per the decision of the Dhaka University Syndicate meeting dated 21/08/1976, the then Hostel-1 was named as “A.F. Rahman Hall” after the name of the first Bangali Vice-Chancellor of Dhaka University and renowned educationist Sir A.F. Rahman. Though the word ‘Sir’ was not included in the naming of the Hall at that time, a recent meeting of Dhaka University Syndicate held on 13/03/14 added the word ‘Sir’ and renamed the Hall as “Sir A.F. Rahman Hall” in honour of the then Vice-chancellor of Dhaka University.</p>
							
						</a>	
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-4">
						<a name="contact" class="about">Provost, Sir A.F. Rahman Hall, University of Dhaka<br>
							Dhaka-1000, Bangladesh<br>Phone: 880-2-9661900 Ext /4470;/4472<br>
							Fax:     880-2-8615583<br>Email: afrhall@du.ac.bd</a>
					</div>
				</div>
			</div>
		</footer>

		<script type="text/javascript">
	    	$(function () {
	        	$(".demo1").bootstrapNews({
	            	newsPerPage: 4,
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