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

.form-control {
    display: block;
    width: 150px;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
}

  </style>

  <title>Class Test Archive</title>
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


 
   
<?php

if(isset($_POST['ct1insert'])){

  $roll = $_POST['Roll'];
  $elec = $_POST['Electrical_Machines'];
  $data = $_POST['Data_Structure_&_Algorithms'];
  $tech = $_POST['Digital_Techniques'];
  $math = $_POST['Mathematics'];
  $chem = $_POST['Chemistry'];
  
  $query = "INSERT INTO `student_marks1`(`Roll`, `Electrical_Machines`, `Data_Structure_&_Algorithms`, `Digital_Techniques`, `Mathematics`, `Chemistry`) VALUES ('$roll', '$elec', '$data', '$tech', '$math', '$chem')";

  $result = mysqli_query($link, $query);

  if($result){
   $success = "Data Insertion Successful!";
   header('location: ct1insert.php'); 
  } else {
    $error = "Wrong!";
  }

}


?>

<div class="row">

   <?php if(isset($success)){ echo '<p class="alert alert-success col-sm-6">'.$success.'</p>';} ?>
   <?php if(isset($error)){ echo '<p class="alert alert-danger col-sm-6">'.$error.'</p>'; } ?>

</div>

<div style="margin-top:35px;" class="jumbotron jumbotron-fluid">

 <div class="container">

<div style="margin-left: 75px; margin-top:25px;" class="row">
   <div class="col-sm-6 ">
     <form action="" method="POST" enctype="multipart/form-data">

        <table class="table table-striped offset-4">
  <thead>
    <tr>
      <th scope="col">
      <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="Roll">Roll No.</label>
      </th>
      <th scope="col">
      <label style="font-size:18px; font-weight:550; transform:translateY(-5px);"  for="Electrical_Machines">Electrical Machines</label>
      </th>
      <th scope="col">
      <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="Data_Structure_&_Algorithms">Data Structure & Algorithms</label>
      </th>
      <th scope="col">
      <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="Digital_Techniques">Digital Techniques</label>
      </th>
      <th scope="col">
      <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="Mathematics">Mathematics</label>
      </th>
      <th scope="col">
      <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="Chemistry">Chemistry</label>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
          <input type="text" name="Roll" placeholder="Roll" id="Roll" class="form-control" required="" >
      </td>
      <td>
          <input type="text" name="Electrical Machines" placeholder="Electrical Machines" id="Electrical Machines" class="form-control" required="" >
      </td>
      <td>
          <input type="text" name="Data Structure & Algorithms" placeholder="Data Structure & Algorithms" id="Data Structure & Algorithms" class="form-control" required="" >
      </td>
      <td>
          <input type="text" name="Digital Techniques" placeholder="Digital Techniques" id="Digital Techniques" class="form-control" required="" >
      </td>
      <td>
          <input type="text" name="Mathematics" placeholder="Mathematics" id="Mathematics" class="form-control" required="" >
      </td>
      <td>
          <input type="text" name="Chemistry" placeholder="Chemistry" id="Chemistry" class="form-control" required="" >
      </td>
    </tr>
  </tbody>
</table>
        <div style="margin-top:15px;" class="form-group">
          <input style="height:32px;" type="submit" value="Add" name="ct1insert" class="btn btn-primary">
        </div>
     </form>
   </div>
</div>


</div>


</div>
<!-- -->
<a href="class-test.php"><button style="margin-left:1080px; transform: translateY(-125px);" class="btn btn-primary">Back</button></a>

<footer style="margin-top:80px;" class="footer-area">
			<p>Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
		</footer>

</body>
</html>