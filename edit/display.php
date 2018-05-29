<?php
	include_once '../Authentication/dbh.db.php';

	$sql = "SELECT * FROM studentfullinformation";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	
?>
<?php
	include '../BoardMember/BMHeader.php';
?>
		<div class="col-lg-12"> 
			<div>
				<div class="col-lg-8"><h2> Student Information </h2></div>
				<div class="col-lg-4">
					<form class="navbar-form navbar-left">
					    <div class="input-group">
							<input type="text" class="form-control"  id="myInput" placeholder="Search Student">
							<div class="input-group-btn">
							    <button class="btn btn-default" type="submit">
							        <i class="glyphicon glyphicon-search"></i>
							    </button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<table class="table table-striped" id="myTable1" style="background-color: rgba(9, 138, 150,0.7);">
				<thead>
					<tr>
						<th onclick="sortTable(0)" style="cursor: pointer;">Reg No.</th>
						<th onclick="sortTable(1)" style="cursor: pointer;">Name</th>
						<th onclick="sortTable(2)" style="cursor: pointer;">Session</th>
						<th onclick="sortTable(3)" style="cursor: pointer;">Department</th>
						<th>Roll</th>
						<th>Present Address</th>
						<th>Permanent Address</th>
						<th>Blood Group</th>
						<th onclick="sortTable(4)" style="cursor: pointer;">Status</th>
						<th colspan="2">Action</th>
					</tr>								
				</thead>
			

				<?php
					while ($row=mysqli_fetch_assoc($result)) {?>
						<tbody  id="myTable">
							<tr>
								<td><?php echo $row['regNo']; ?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['session'];?></td>
								<td><?php echo $row['dept']; ?></td>
								<td><?php echo $row['classRoll']; ?></td>
								<td><?php echo $row['presentAddress'];?></td>
								<td><?php echo $row['permanentAddress']; ?></td>
								<td><?php echo $row['bloodGroup']; ?></td>
								<td><?php echo $row['status']; ?></td>
								<td>
									<a href='editStudentDetails.php?edit=<?php echo $row['id']; ?>' class='edit_btn'>Edit</a>
								</td>
								<td>
									<form  action="DeleteStudent.php?delete=<?php echo $row['id']; ?>" method="POST">
										<button onclick="return myFunction()">Delete</button>
									
									</form>
								</td>
							</tr>
						</tbody>
				<?php }?>
			</table>
		</div>					
	</div>
	<script>

		function sortTable(n) {
		  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
		  table = document.getElementById("myTable1");
		  switching = true;
		  //Set the sorting direction to ascending:
		  dir = "asc"; 
		  while (switching) {

		    switching = false;
		    rows = table.getElementsByTagName("TR");

		    for (i = 1; i < (rows.length - 1); i++) {
		      
		      shouldSwitch = false;
		      
		      x = rows[i].getElementsByTagName("TD")[n];
		      y = rows[i + 1].getElementsByTagName("TD")[n];
		    
		      if (dir == "asc") {
		        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
		          shouldSwitch= true;
		          break;
		        }
		      } else if (dir == "desc") {
		        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
		          shouldSwitch = true;
		          break;
		        }
		      }
		    }
		    if (shouldSwitch) {
		     
		      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
		      switching = true;
		      //Each time a switch is done, increase this count by 1:
		      switchcount ++;      
		    } else {
		      /*If no switching has been done AND the direction is "asc",
		      set the direction to "desc" and run the while loop again.*/
		      if (switchcount == 0 && dir == "asc") {
		        dir = "desc";
		        switching = true;
		      }
		    }
		  }
		}
		$(document).ready(function(){
		  $("#myInput").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#myTable tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});	
		function myFunction() {
		    var txt;
		    if (confirm("Press a button!")) {
		        return true;
		    } else {
		        return false;
		    }
		}	
	</script>
<?php
	include 'BMFooter.php';
?>					

