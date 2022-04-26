<?php

// $count_student = mysqli_query($link, "SELECT * FROM `student_info`");
// $total_student = mysqli_num_rows($count_student);

// $count_users = mysqli_query($link, "SELECT * FROM `users`");
// $total_users = mysqli_num_rows($count_users);

?>


<h1 style="margin-top:35px; margin-left:450px;" class="text-primary">
<i class="fas fa-tachometer-alt"></i> Dashboard 
</h1>

<div class="jumbotron jumbotron-fluid">

  <div style="transform:translateX(-45px);" class="container">

	 <div style="display: flex; flex-direction: row; justify-content: space-evenly;">

      <div class="box">
	    <a href="index.php?page=add-student">
		   <i class="fa fa-user-plus"></i> <br>
		   <h5 style="font-size: 18px;">Add Student</h5>	
	    </a>
      </div>

      <div class="box">
	    <a href="index.php?page=all-students">
		   <i class="fa fa-users"></i> <br>
		   <h5 style="font-size: 18px;">All Students</h5>	
	    </a>
      </div>

	  <div class="box">
	    <a href="index.php?page=registration">
		   <i class="fa fa-user-plus"></i> <br>
		   <h5 style="font-size: 18px;">Add Admin</h5>	
	    </a>
      </div>

      

     
    </div>

	 <div style="display: flex; flex-direction: row; justify-content: space-evenly; padding-top: 50px;" >

	 <div class="box">
	    <a href="index.php?page=all-users">
		   <i class="fa fa-users"></i> <br>
		   <h5 style="font-size: 18px;">All Admins</h5>	
	    </a>
      </div>

	 <div class="box">
			<a href="index.php?page=result">
				<i class="fas fa-user-graduate"></i> <br>
				<h5 style="font-size: 18px;">Result Process</h5>
			</a>
	 </div>

	 <div class="box">
			<a href="index.php?page=resultdisp">
				<i class="fas fa-user-graduate"></i> <br>
				<h5 style="font-size: 18px;">Result</h5>
			</a>
	 </div>

	 </div>

    </div>

</div>

<!-- <div style="margin-top:25px;" class="row">
<div class="col-sm-4">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3">
					<i class="fa fa-users fa-5x"></i>
				</div>
				<div class="col-xs-9">
					<div class="pull-right" style="font-size: 45px"><?= $total_student;?></div>
					<div class="clearfix"></div>
					<div class="pull-right">All Students</div>
				</div>
			</div>
		</div>
		<a href="index.php?page=all-students">
			<div class="panel-footer">
				<span>All Students</span>
				<span class="pull-right">
					<i class="fas fa-arrow-circle-right"></i>
				</span>
				<div class="clearfix"></div>
			</div>
		</a>
	</div>
</div>
<div class="col-sm-4">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3">
					<i class="fa fa-users fa-5x"></i>
				</div>
				<div class="col-xs-9">
					<div class="pull-right" style="font-size: 45px"><?= $total_users; ?></div>
					<div class="clearfix"></div>
					<div class="pull-right">All Users</div>
				</div>
			</div>
		</div>
		<a href="index.php?page=all-users">
			<div class="panel-footer">
				<span>All Users</span>
				<span class="pull-right">
					<i class="fas fa-arrow-circle-right"></i>
				</span>
				<div class="clearfix"></div>
			</div>
		</a>
	</div>
</div>

</div> -->


<!-- <h3 style="margin-top:70px; margin-left:225px;"><u>Students' Information</u></h3>



<div class="table-responsive">

<table id="data" class="table table-hover text-center">

<thead>

	<tr>
	<th style="text-align:center;">ID</th>
	<th style="text-align:center;">Photo</th>
	<th style="text-align:center;">Name</th>
	<th style="text-align:center;">Roll</th>
	<th style="text-align:center;">City</th>
	<th style="text-align:center;">Contact</th>
	</tr>

</thead>

<tbody>

<?php
	$db_sinfo = mysqli_query($link, "SELECT * FROM `student_info` ");
	while($row = mysqli_fetch_assoc($db_sinfo)){ 
?>


<tr>
	<td style="padding-top:15px;"><?php echo $row['id']; ?></td>
	<td><img style="width: 50px; height: 50px; border-radius: 50%;" src="student_images/<?php echo $row['photo']; ?>" alt="Student's Image"></td>
	<td style="padding-top:15px;"><?php echo ucwords($row['name']); ?></td>
	<td style="padding-top:15px;"><?php echo $row['roll']; ?></td>
	<td style="padding-top:15px;"><?php echo ucwords($row['city']); ?></td>
	<td style="padding-top:15px;"><?php echo $row['pcontact']; ?></td>
</tr>

<?php
	} 
?>

</tbody>

</table>

</div> -->




