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



  <title>Class Test Archive</title>

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
    <th>Electrical Machines</th>
    <th>Data Structure & Algorithms</th>
    <th>Digital Techniques</th>
    <th>Mathematics</th>
    <th>Chemistry</th>
    <th>Action</th>
  </tr>

</thead>

<tbody>

<?php


    $db_sinfos = mysqli_query($link, "SELECT * FROM `student_marks3` ");
   $rows = mysqli_fetch_all($db_sinfos, MYSQLI_ASSOC);
   $number_of_rows = count($rows);
   //echo $number_of_rows; 

   $eletrical_lowest=20;
   $eletrical_highest=0;
   $data_lowest=20;
   $data_highest=0;
   $tech_lowest=20;
   $tech_highest=0;
   $math_lowest=20;
   $math_highest=0;
   $chem_lowest=20;
   $chem_highest=0;

   foreach($rows as $row){
     if($row['Electrical_Machines'] > $eletrical_highest){
        $eletrical_highest = $row['Electrical_Machines'];
     }
     if($row['Electrical_Machines'] < $eletrical_lowest){
        $eletrical_lowest = $row['Electrical_Machines'];
     }
     if($row['Data_Structure_&_Algorithms'] > $data_highest){
        $data_highest = $row['Data_Structure_&_Algorithms'];
     }
     if($row['Data_Structure_&_Algorithms'] < $data_lowest){
      $data_lowest = $row['Data_Structure_&_Algorithms'];
   }
     if($row['Digital_Techniques'] > $tech_highest){
        $tech_highest = $row['Digital_Techniques'];
     }
     if($row['Digital_Techniques'] < $tech_lowest){
        $tech_lowest = $row['Digital_Techniques'];
     }
     
     if($row['Mathematics'] > $math_highest){
        $math_highest = $row['Mathematics'];
     }
     if($row['Mathematics'] < $math_lowest){
        $math_lowest = $row['Mathematics'];
     }
     if($row['Chemistry'] > $chem_highest){
        $chem_highest = $row['Chemistry'];
     }
     if($row['Chemistry'] < $chem_lowest){
        $chem_lowest = $row['Chemistry'];
     }
     
     
   }

  foreach($rows as $row){


?>
                      

  <tr>
    <td><?php echo $row['Roll']; ?></td>
    <td><?php echo $row['Electrical_Machines'] . ($eletrical_highest == $row['Electrical_Machines'] ? "( Highest )" : "" ) . (($eletrical_lowest == $row['Electrical_Machines'] && $eletrical_lowest!=$eletrical_highest) ? "( Lowest )" : "" );  ?></td>

    <td><?php echo $row['Data_Structure_&_Algorithms'] . ($data_highest == $row['Data_Structure_&_Algorithms'] ? "( Highest )" : "" ) . (($data_lowest == $row['Data_Structure_&_Algorithms'] && $data_lowest!=$data_highest) ? "( Lowest )" : "" );  ?></td>

    <td><?php echo $row['Digital_Techniques'] . ($tech_highest == $row['Digital_Techniques'] ? "( Highest )" : "" ) . (($tech_lowest == $row['Digital_Techniques'] && $tech_lowest!=$tech_highest) ? "( Lowest )" : "" );  ?></td>

    <td><?php echo $row['Mathematics'] . ($math_highest == $row['Mathematics'] ? "( Highest )" : "" ) . (($math_lowest == $row['Mathematics'] && $math_lowest!=$math_highest) ? "( Lowest )" : "" );  ?></td>

    <td><?php echo $row['Chemistry'] . ($chem_highest == $row['Chemistry'] ? "( Highest )" : "" ) . (($chem_lowest == $row['Chemistry'] && $chem_lowest!=$chem_highest) ? "( Lowest )" : "" );  ?></td>

    <td>
       <a href="ct3update.php?page=update-student&Roll=<?php echo base64_encode($row['Roll']); ?>" class="btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
    </td>
  </tr>

<?php
  } 
?>
                      
</tbody>

</table>

</div>

<br>

<a href="class-test.php"><button style="margin-left:25px;" class="btn btn-primary">Back</button></a>



<footer style="margin-top:100px;" class="footer-area">
			<p>Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
		</footer>


</body>
</html>