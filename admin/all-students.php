<h1 style="margin-left:225px;" class="text-primary text-center"><i class="fa fa-users"></i> All Students </h1>


 <div style="margin-top:55px; margin-left:150px;" class="table table-responsive">

    <table id="data" class="table table-hover table-borderless">

	    <thead>

			<tr>
				<!-- <th>ID</th> -->
				<th>Photo</th>
				<th>Name</th>
				<th>Roll</th>
				<th>Class</th>
				<th>City</th>
				<th>Contact</th>
				<th>Email</th>
				<!-- <th>Username</th> -->
				<th>Status</th> 
			    <th>Action</th>
			</tr>

		</thead>

		<tbody>

		<?php
		    $db_sinfo = mysqli_query($link, "SELECT * FROM `student_info` ");
			while($row = mysqli_fetch_assoc($db_sinfo)){ 
		?>
												  

			<tr>
				<!-- <td style="padding-top:15px;"><?php echo $row['id']; ?></td> -->
				<td><img style="width: 50px; height: 50px; border-radius: 50%;" src="student_images/<?php echo $row['photo']; ?>" alt="Student's Image"></td>
				<td style="padding-top:15px;"><?php echo ucwords($row['name']); ?></td>
				<td style="padding-top:15px;"><?php echo $row['roll']; ?></td>
				<td style="padding-top:15px;"><?php echo $row['class']; ?></td>
			    <td style="padding-top:15px;"><?php echo ucwords($row['city']); ?></td>
				<td style="padding-top:15px;"><?php echo $row['contact']; ?></td>
			    <td style="padding-top:15px;"><?php echo $row['email']; ?></td>
				<!-- <td style="padding-top:15px;"><?php echo $row['username']; ?></td> -->
			    <td style="padding-top:15px;"><?php echo $row['status']; ?></td>
				<td>
				   <a href="index.php?page=update-student&id=<?php echo base64_encode($row['id']); ?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a> <br>
				   <a href="delete_student.php?id=<?php echo base64_encode($row['id']); ?>"  class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
				</td>
			</tr>

		<?php
			} 
		?>
													
		</tbody>

	</table>

 </div>