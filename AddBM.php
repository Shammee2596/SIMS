<?php
	include'sysemHead.php';
?>
				<div class="col-lg-10" id="right-column">
						<div class="col-lg-2"></div>
							<div class="col-lg-6">
								<div class="col-lg-12" id="head"></div>
								<div id="heading"> Add New Board Member </div>
								<div class="form">
									<form action="bmInformation.php" method="POST">

										<div class="form-group">
									    	<label for="name">Name*</label>
									    	<input type="text" class="form-control" name="name">
									  	</div>
									 	
									 	<div class="form-group">
									    	<label for="designation">Designation*</label>
									    	<select class="form-control" name="designation">
									    		<option value="Professor">Professor</option>
									    		<option value="Associate Professor">Associate Professor</option>
									    		<option value="Assistant Professor">Assistant Professor</option>
									    		<option value="Lecturer">Lecturer</option>
									    	</select>
									  	</div>
									    
									    <div class="form-group">
									        <label for="dept">Department</label>
									        <select class="form-control" name="dept">
										        <option value="Mathematics">Mathematics</option>
										        <option value="Computer Science And Engineering">Computer Science And Engineering</option>
										        <option value="IIT">IIT</option>
										        <option value="Genetics">Genetics</option>
										        <option value="Pharmecy">Pharmecy</option>
										        <option value="Physics">Physics</option>
										        <option value="Chemistry">Chemistry</option>
										        <option value="Zoology">Zoology</option>
										        <option value="Botany">Botany</option>
										        <option value="Microbiology And Microbiology">Microbiology And Moleculer Biology</option>
									        </select>
										</div>


									  	<div class="form-group">
									    	<label for="email">Email*</label>
									    	<input type="email" class="form-control" name="email">
									  	</div>

									  	<div class="form-group">
									    	<label for="position">Hall Designation*</label>
									    	<select class="form-control" name="position">
									    		<option value="Provost">Provost</option>
									    		<option value="House Tutor">House Tutor</option>
									    		<option value="Assistant House Tutor">Assistant House Tutor</option>
									    	</select>
									  	</div>  
									   	<div class="form-group">
									    	<label for="username">Username*</label>
									    	<input type="text" class="form-control" name="username">
									   	</div> 
									 	<div class="form-group">
									    	<label for="password">Password*</label>
									    	<input type="password" class="form-control" name="password">
									  	</div>
									  	<div>
					 						<div class="col-lg-3"></div>
					 						<div class="col-lg-6">
					 	   						<button type="submit" class="btn btn-default" id="submit">Submit</button>
					 						</div>
					 					</div> 

									</form>
								</div>
								<div class="col-lg-4"></div>
							</div>
						</div>
				</div>
			</div>
	</body>
</html>