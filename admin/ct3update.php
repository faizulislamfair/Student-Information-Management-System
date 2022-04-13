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

  <title>Class Test Archive</title>


 <!-- Bootstrap -->

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

label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}

.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    margin-top: 10px;
    text-align: center;
}

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
  

.container .jumbotron, .container-fluid .jumbotron {
    margin-top: 35px;
    transform: translateX(-30px);
    width: 1349px;
    height: 380px;
    border-radius: 5px;
    background-color: #e9eceffa;
    color: inherit;
}

.box, .box:active, .box:visited{
    padding: 20px;
    text-align: center;
    background-color: #fff;
    font-size: 25px;
    width: 220px;
    height: 110px;
    margin: 0;
    border: 1px #fff;
    border-radius: 10px;
    box-shadow: 8px 10px 25px -6px rgba(0,0,0,0.62); 
    -webkit-box-shadow: 8px 10px 25px -6px rgba(0,0,0,0.62);
    transition: 0.2s;
}

.box a:hover{
    color: #fff;
    transition: 0.2s;
 }

.box:hover{
    background-color: #2887e6;
    transition: 0.2s;
}

.box:hover a{
    display: block;
    height: 100px;
    color: #fff;
    transition: 0.2s;
}

.btn-primary, .btn-primary:active, .btn-primary:visited{
    width: 70px;
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
    width: 85px;
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

$roll = base64_decode($_GET['Roll']);
$db_datas = mysqli_query($link, "SELECT * FROM `student_marks3` WHERE `Roll` = '$roll'");
$db_row = mysqli_fetch_assoc($db_datas);


if(isset($_POST['ct3update'])){

    $roll = $_POST['Roll'];
    $elec = $_POST['Electrical_Machines'];
    $data = $_POST['Data_Structure_&_Algorithms'];
    $tech = $_POST['Digital_Techniques'];
    $math = $_POST['Mathematics'];
    $chem = $_POST['Chemistry'];

    $query = "UPDATE `student_marks3` SET `Electrical_Machines`= '$elec' ,`Data_Structure_&_Algorithms`= '$data' ,`Digital_Techniques`= '$tech'  ,`Mathematics`= '$math'  ,`Chemistry`= '$chem'  WHERE `Roll` = '$roll'";

    $result = mysqli_query($link, $query);
  

  if($result){
    // header('location: ct3display.php');
  }

}


?>

<div style="margin-top:75px;" class="jumbotron jumbotron-fluid">

  <div class="container">

  <div style="margin-left: 75px; margin-top:25px;" class="row">
   <div class="col-sm-6 ">
     <form action="" method="POST" enctype="multipart/form-data">

        <table class="table table-striped offset-4">
  <thead>
    <tr>
      <th scope="col">
      <label for="name">Roll No.</label>
      </th>
      <th scope="col">
      <label for="name">Electrical Machines</label>
      </th>
      <th scope="col">
      <label for="name">Data Structure & Algorithms</label>
      </th>
      <th scope="col">
      <label for="name">Digital Techniques</label>
      </th>
      <th scope="col">
      <label for="name">Mathematics</label>
      </th>
      <th scope="col">
      <label for="name">Chemistry</label>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
      <input type="text" name="Roll" placeholder="Roll" id="name" class="form-control" required="" value="<?= $db_row['Roll'] ?>" >
      </td>
      <td>
      <input type="text" name="Electrical Machines" placeholder="Electrical Machines" id="name" class="form-control" required="" value="<?= $db_row['Electrical_Machines'] ?>" >

      </td>
      <td>
      <input type="text" name="Data Structure & Algorithms" placeholder="Data Structure & Algorithms" id="name" class="form-control" required="" value="<?= $db_row['Data_Structure_&_Algorithms'] ?>" >

      </td>
      <td>
      <input type="text" name="Digital Techniques" placeholder="Digital Techniques" id="name" class="form-control" required="" value="<?= $db_row['Digital_Techniques'] ?>" >
      </td>
      <td>
      <input type="text" name="Mathematics" placeholder="Mathematics" id="name" class="form-control" required="" value="<?= $db_row['Mathematics'] ?>" >

      </td>
      <td>
      <input type="text" name="Chemistry" placeholder="Chemistry" id="name" class="form-control" required="" value="<?= $db_row['Chemistry'] ?>" >

      </td>
    </tr>
  </tbody>
</table>

<div style="margin-top:15px; height:35px;" class="form-group">
          <input type="submit" value="Update" name="ct3update" class="btn btn-primary">
        </div>

     </form>
   </div>
</div>

</div>
</div>

<a href="ct3display.php"><button style="margin-left:1080px; transform: translateY(-125px);" class="btn btn-primary">Back</button></a>

   

<footer style="margin-top:65px;" class="footer-area">
			<p>Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
		</footer>

</body>
</html>
