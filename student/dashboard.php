<h1 style="margin-top:35px; margin-left:450px;" class="text-primary">
<i class="fas fa-tachometer-alt"></i> Dashboard 
</h1>

<div class="jumbotronstudent jumbotron-fluid">

  <div style="transform:translateX(-45px);" class="container">

	 <div style="display: flex; flex-direction: row; justify-content: space-evenly;">

      <div class="boxstudent">
	    <a href="index.php?page=student-profile">
		   <i class="fa fa-user"></i> <br>
		   <h5 style="font-size: 25px;">Student Profile</h5>	
	    </a>
      </div>

	  <div class="boxstudent">
			<a href="index.php?page=academic">
				<i class="fas fa-user-graduate"></i> <br>
				<h5 style="font-size: 25px;">Academic Performance</h5>
			</a>
		  </div>
     
    </div>

	 

    </div>

</div>




<?php
	$db_sinfo = mysqli_query($link, "SELECT * FROM `student_info` ");
	while($row = mysqli_fetch_assoc($db_sinfo)){ 
?>


<?php
	} 
?>

