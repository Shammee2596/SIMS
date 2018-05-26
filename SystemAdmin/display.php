<?php
	include_once '../Authentication/dbh.db.php';

	$sql = "SELECT * FROM studentfullinformation";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);	
?>
<?php
	include 'adminHeader.php';
?>

		<div class="col-lg-12"> 
			
			<div>
				<div class="col-lg-8"><h2> Student Information </h2></div>
				<div class="col-lg-4">
							<form class="navbar-form navbar-left">
							  <div class="input-group">
							    <input type="text" class="form-control" id="myInput" placeholder="Search">
							    <div class="input-group-btn">
							      <button class="btn btn-default" type="submit">
							        <i class="glyphicon glyphicon-search"></i>
							      </button>
							    </div>
							  </div>
							</form>

						</div>

			</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Reg No.</th>
							<th>Name</th>
							<th>Session</th>
							<th>Department</th>
							<th>Roll</th>
							<th>Present Address</th>
							<th>Permanent Address</th>
							<th>Blood Group</th>
							<th>Status</th>
							<th colspan="2">Action</th>
						</tr>								
					</thead>
			

					<?php
						while ($row=mysqli_fetch_assoc($result)) {?>
							<tbody id="myTable">
								<tr>
									<td><?php echo $row['regNo'] ?>		</td>
									<td><?php echo $row['name'] ?>		</td>
									<td><?php echo $row['session'] ?> 	</td>
									<td><?php echo $row['dept'] ?> 		</td>
									<td><?php echo $row['classRoll'] ?> </td>
									<td><?php echo $row['presentAddress'] ?>	</td>
									<td><?php echo $row['permanentAddress'] ?>	</td>
									<td><?php echo $row['bloodGroup'] ?>		</td>
									<td><?php echo $row['status'] ?>			</td>
									<td>
										<a href='editStudentDetails.php?edit=<?php echo $row['id']?>' class='edit_btn'>Edit</a>
									</td>
									<td>
										<a href='DeleteStudent.php?delete=<?php echo $row['id'] ?>' class='del_btn'>Delete</a>
									</td>
								</tr>
							</tbody>
					<?php } ?>	
				</table>
			</div>					
		</div>
		</script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<?php
	include 'adminFooter.php';
?>

