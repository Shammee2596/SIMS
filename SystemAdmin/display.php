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
			<div class="col-lg-12"><h2> Student Information </h2></div>
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
						</tr>								
					</thead>

					<?php
						while ($row=mysqli_fetch_assoc($result)) {
							echo "<tbody>";
								echo "<tr>";
									echo "<td>".$row['regNo']."</td>";
									echo "<td>".$row['name']."</td>";
									echo "<td>".$row['session']."</td>";
									echo "<td>".$row['dept']."</td>";
									echo "<td>".$row['classRoll']."</td>";
									echo "<td>".$row['presentAddress']."</td>";
									echo "<td>".$row['permanentAddress']."</td>";
									echo "<td>".$row['bloodGroup']."</td>";
									echo "<td>".$row['status']."</td>";
								echo "</tr>";
							echo "</tbody>";
						}
					?>
				</table>
			</div>					
		</div>
<?php
	include 'adminFooter.php';
?>
