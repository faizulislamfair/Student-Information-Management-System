<?php
session_start();
require_once './dbcon.php';
if(!isset($_SESSION['user_login'])){
     header('location: login.php');
}


?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../fonts/fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.min.css">
<link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/btn.css">


<script type="text/javascript" src="../js/jquery-3.5.1.js"></script>
<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>


  <title>Attendance System</title>

  <style>
         .btn-primary, .btn-primary:active, .btn-primary:visited{
    width: 60px;
    background-color: #2155c5;
    color: white;
    border-radius: 15px;
    border:none;
    transition: 0.2s;
    font-weight: 450;
    padding-left: 15px;
    padding-right: 15px;
    height: 32px;
}

.btn:hover, .btn-info:hover, .btn-primary:hover {
    width: 75px;
    background-color: #E5E4E3;
    color:#2155c5;
    border-radius: 15px;
    border:1px solid #2155c5;
    padding-left: 20px;
    padding-right: 20px;
    transition: 0.2s;
    font-weight: 450;
    height:32px;
}

  </style>

</head>
<body>

<nav style="height:80px; padding-top:15px;" class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" style="color: #fff;" href="index.php">Student Information & Management System</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">

						<li>
							<a href="index.php?page=user-profile" style="color: #fff;">
								<i class="fa fa-user"></i> Profile
							</a>
						</li>

						<li>
							<a href="logout.php" style="color: #fff;">
								<i class="fa fa-power-off"></i> Logout
							</a>
						</li>
						
					</ul>
				</div>
			</div>
        </nav>

<div style="margin-top:55px;" class="table table-responsive">

<table id="data" class="table table-hover table-bordered">

	    <thead>

			
			<tr>
      <th scope="col">
      <label style="width:100px; text-align:center;" for="Roll"><h3>Roll No.</h3></label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;" for="Course"><h3>Course</h3></label>
      </th>
	  <th scope="col">
      <label style="width:120px; text-align:center;">Day-1</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-2</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-3</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-4</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-5</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-6</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-7</label>
      </th>
	  <th scope="col">
      <label style="width:120px; text-align:center;">Day-8</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-9</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-10</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-11</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-12</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-13</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-14</label>
      </th>
	  <th scope="col">
      <label style="width:120px; text-align:center;">Day-15</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-16</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-17</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-18</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-19</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-20</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-21</label>
      </th>
	  <th scope="col">
      <label style="width:120px; text-align:center;">Day-22</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-23</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-24</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-25</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-26</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-27</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-28</label>
      </th>
	  <th scope="col">
      <label style="width:120px; text-align:center;">Day-29</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-30</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-31</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-32</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-33</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-34</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-35</label>
      </th>
	  <th scope="col">
      <label style="width:120px; text-align:center;">Day-36</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-37</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-38</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-39</label>
      </th>
	  <th>
	  <label style="width:120px; text-align:center;">Action</label>
	   </th> 
      </tr>
			

		</thead>

		<tbody>

		<?php
		    $db_sinfo = mysqli_query($link, "SELECT * FROM `attendance` ");
			while($row = mysqli_fetch_assoc($db_sinfo)){ 
		?>
												  

			<tr>

				<td><?php echo $row['Roll']; ?></td>
				<td><?php echo $row['Course']; ?></td>
				<td><?php echo $row['d_one']; ?></td>
				<td><?php echo $row['d_two']; ?></td>
				<td><?php echo $row['d_three']; ?></td>
				<td><?php echo $row['d_four']; ?></td>
				<td><?php echo $row['d_five']; ?></td>
				<td><?php echo $row['d_six']; ?></td>
				<td><?php echo $row['d_seven']; ?></td>
				<td><?php echo $row['d_eight']; ?></td>
				<td><?php echo $row['d_nine']; ?></td>
				<td><?php echo $row['d_ten']; ?></td>
				<td><?php echo $row['d_eleven']; ?></td>
				<td><?php echo $row['d_twelve']; ?></td>
				<td><?php echo $row['d_thirteen']; ?></td>
				<td><?php echo $row['d_fourteen']; ?></td>
				<td><?php echo $row['d_fifteen']; ?></td>
				<td><?php echo $row['d_sixteen']; ?></td>
				<td><?php echo $row['d_seventeen']; ?></td>
				<td><?php echo $row['d_eighteen']; ?></td>
				<td><?php echo $row['d_nineteen']; ?></td>
				<td><?php echo $row['d_twenty']; ?></td>
				<td><?php echo $row['d_twentyone']; ?></td>
				<td><?php echo $row['d_twentytwo']; ?></td>
				<td><?php echo $row['d_twentythree']; ?></td>
				<td><?php echo $row['d_twentyfour']; ?></td>
				<td><?php echo $row['d_twentyfive']; ?></td>
				<td><?php echo $row['d_twentysix']; ?></td>
				<td><?php echo $row['d_twentyseven']; ?></td>
				<td><?php echo $row['d_twentyeight']; ?></td>
				<td><?php echo $row['d_twentynine']; ?></td>
				<td><?php echo $row['d_thirty']; ?></td>
				<td><?php echo $row['d_thirtyone']; ?></td>
				<td><?php echo $row['d_thirtytwo']; ?></td>
				<td><?php echo $row['d_thirtythree']; ?></td>
				<td><?php echo $row['d_thirtyfour']; ?></td>
				<td><?php echo $row['d_thirtyfive']; ?></td>
				<td><?php echo $row['d_thirtysix']; ?></td>
				<td><?php echo $row['d_thirtyseven']; ?></td>
				<td><?php echo $row['d_thirtyeight']; ?></td>
				<td><?php echo $row['d_thirtynine']; ?></td>
			    <td><a href="attendanceupdate.php?page=update-student&Roll=<?php echo base64_encode($row['Roll']); ?>" class="btn-xs btn-warning"><i class="fa fa-pencil"></i>Edit</a>
                </td>
      
			</tr>

		<?php
			} 
		?>
													
		</tbody>



	</table>

</div>

<br>

<a href="attendance.php"><button style="margin-left:25px;" class="btn btn-primary">Back</button></a>

<br> <br> <br>

<footer class="footer-area">
			<p>Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
		</footer>


</body>
</html>




