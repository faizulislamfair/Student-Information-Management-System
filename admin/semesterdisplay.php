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



  <title>Semester Final</title>

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
    <th>Roll No.</th>
    <th>CGPA</th>
    <th>Action</th>
  </tr>

</thead>

<tbody>

<?php


    $db_sinfos = mysqli_query($link, "SELECT * FROM `semester` ");
   $rows = mysqli_fetch_all($db_sinfos, MYSQLI_ASSOC);
   $number_of_rows = count($rows);
   //echo $number_of_rows; 

   $cgpa_lowest=20;
   $cgpa_highest=0;

   foreach($rows as $row){
     if($row['CGPA'] > $cgpa_highest){
        $cgpa_highest = $row['CGPA'];
     }
     if($row['CGPA'] < $cgpa_lowest){
        $cgpa_lowest = $row['CGPA'];
     }  
   }

  foreach($rows as $row){


?>
                      

  <tr>
    <td><?php echo $row['Roll']; ?></td>
    <td><?php echo $row['CGPA'] . ($cgpa_highest == $row['CGPA'] ? "( Highest )" : "" ) . (($cgpa_lowest == $row['CGPA'] && $cgpa_lowest!=$cgpa_highest) ? "( Lowest )" : "" );  ?></td>
    <td>
       <a href="semesterupdate.php?page=update-student&Roll=<?php echo base64_encode($row['Roll']); ?>" class="btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
    </td>
  </tr>

<?php
  } 
?>
                      
</tbody>

</table>

</div>
<br>

<a href="semester-final.php"><button style="margin-left:25px;" class="btn btn-primary">Back</button></a>

<br>

<footer style="margin-top:70px;" class="footer-area">
			<p>Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
		</footer>

</body>
</html>