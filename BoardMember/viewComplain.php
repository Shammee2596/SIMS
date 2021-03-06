<?php
	include_once '../Authentication/dbh.db.php';

	$sql = "SELECT * FROM complaint";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
?>
<?php
	include '../BoardMember/BMHeader.php';
?>
		<div class="col-lg-12"> 
			<div>
				<div class="col-lg-8"><h2>Complaints</h2></div>
			</div>
			<table class="table table-striped" id="myTable1" style="background-color: rgba(9, 138, 150,0.7);">
				<thead>
					<tr>
						<th onclick="sortTable(0)" style="cursor: pointer;">Date</th>
						<th onclick="sortTable(1)" style="cursor: pointer;">Problem Title</th>
						<th onclick="sortTable(2)" style="cursor: pointer;">Problem Detai</th>
						<th>Room No.</th>
						<th onclick="sortTable(3)" style="cursor: pointer;">Status</th>
						
					</tr>								
				</thead>
			

				<?php
					while ($row=mysqli_fetch_assoc($result)) {?>
						<tbody  id="myTable">
							<tr>
								<td><?php echo $row['c_date']; ?></td>
								<td><?php echo $row['title'];?></td>
								<td><?php echo $row['complain'];?></td>
								<td><?php echo $row['roomNo']; ?></td>
								<td>
									<form  action="solveComplain.php?edit=<?php echo $row['id']; ?>" method="POST">
										<button  type= "submit" class="btn btn-info">
											<?php echo $row['status']; ?>		
										</button>
									
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
	</script>
<?php
	include 'BMFooter.php';
?>					

