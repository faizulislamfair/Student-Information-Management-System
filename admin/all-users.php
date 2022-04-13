<h1 style="margin-left:225px;" class="text-primary text-center"><i class="fa fa-users"></i> All Admins </h1>


<div style="margin-top:55px; margin-left:150px;" class="table table-responsive">

    <table id="data" class="table table-hover table-borderless">

	    <thead>

			<tr>
			    <th>Photo</th>
				<th>Name</th>
				<th>Email</th>
				<th>Username</th>
			</tr>

		</thead>

		<tbody>

		<?php
		    $db_sinfo = mysqli_query($link, "SELECT * FROM `users` ");
			while($row = mysqli_fetch_assoc($db_sinfo)){ 
		?>
												  

			<tr>
			    <td><img style="width: 50px; height: 50px; border-radius: 50%;" src="images/<?php echo $row['photo']; ?>" alt="Student's Image"></td>
				<td style="padding-top:15px;"><?php echo ucwords($row['name']); ?></td>
				<td style="padding-top:15px;"><?php echo $row['email']; ?></td>
				<td style="padding-top:15px;"><?php echo $row['username']; ?></td>
			</tr>

		<?php
			} 
		?>
													
		</tbody>

	</table>

</div>
