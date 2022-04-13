<?php
session_start();
require_once './dbcon.php';
if(!isset($_SESSION['user_login'])){
     header('location: login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 
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
      .container .jumbotron, .container-fluid .jumbotron {
    margin-top: 35px;
    transform: translateX(-30px);
    width: 1349px;
    height: 325px;
    border-radius: 5px;
    background-color: #e9eceffa;
    color: inherit;
}

.boxed{
    padding: 20px;
    text-align: center;
    background-color: #fff;
    font-size: 25px;
    width: 200px;
    height: 200px;
    margin: 25px;
    border: 1px #fff;
    border-radius: 10px;
    box-shadow: 8px 10px 25px -6px rgba(0,0,0,0.62); 
    -webkit-box-shadow: 8px 10px 25px -6px rgba(0,0,0,0.62);
}

.btn-primary, .btn-primary:active, .btn-primary:visited{
    background-color: #2155c5;
    color: white;
    border-radius: 15px;
    border:none;
    transition: 0.2s;
    font-weight: 450;
    padding-left: 15px;
    padding-right: 15px;
    width: 80px;
    height: 32px;
}

.btn:hover, .btn-info:hover, .btn-primary:hover {
    background-color: #E5E4E3;
    color:#2155c5;
    border-radius: 15px;
    border:1px solid #2155c5;
    padding-left: 20px;
    padding-right: 20px;
    transition: 0.2s;
    font-weight: 450;
    width: 110px;
    height: 32px;
}

/* .box a:hover{
    color: #fff;
    transition: 0.2s;
 } */

/* .box:hover{
    background-color: #2887e6;
    transition: 0.2s;
} */

/* .box:hover a{
    display: block;
    height: 100px;
    color: #fff;
    transition: 0.2s;
} */

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
<h1 class="text-primary text-center"><i class="fas fa-pencil-ruler"></i> Semester Final</h1>

<a href="index.php?page=academic"><button style="margin-left:1080px; transform:translateY(-50px);" class="btn btn-primary">Back</button></a>

   

<div class="jumbotron jumbotron-fluid">

 <div class="container">

   <!-- <div style="display: flex; flex-direction: row; justify-content: space-evenly;"> -->

   <div style="margin-left: 465px;" class="boxed">
     <h3>CGPA</h3>
	    <a href="semesterinsert.php" style="margin-top:15px;" class="btn btn-primary offset-2">Insert</a> <br>
	    <a href="semesterdisplay.php" style="margin-top:15px;" class="btn btn-primary offset-2">Display</a> 
	    </a>
   </div>

   <!-- </div> -->

 </div>

</div>

<footer class="footer-area">
			<p>Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
		</footer>

</body>
</html>


