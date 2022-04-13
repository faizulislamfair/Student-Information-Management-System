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

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/btn.css">

  <title>Login Panels</title>

  <style>
    .btn-primary, .btn-primary:active, .btn-primary:visited{
    background-color: #2155c5;
    color: white;
    border-radius: 15px;
    border:none;
    transition: 0.2s;
    font-weight: 450;
    padding-left: 10px;
    padding-right: 10px;
    width: 60px;
    height: 32px;
}

.btn:hover, .btn-info:hover, .btn-primary:hover {
    background-color: #E5E4E3;
    color:#2155c5;
    border-radius: 15px;
    border:1px solid #2155c5;
    padding-left: 10px;
    padding-right: 10px;
    transition: 0.2s;
    font-weight: 450;
    width: 80px;
    height: 32px;
}
  </style>

</head>
<body>
<header style="width:100%; height:100px; background: #2887e6;">
   </header>

   <br> <br>

   <h1 class="text-center" style="margin-right:15px">Student Information & Management System</h1>

   <br> <br>

   <div class="row offset-3">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h2 class="offset-1">View System</h2>
      </div>
    </div>
    <a href="systemadmin.php"  class="btn btn-primary mt-3">View</a>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <h2 class="offset-1">Edit System</h2>
      </div>
    </div>
    <a href="index.php"  class="btn btn-primary mt-3">Edit</a>
  </div>
</div>



   <footer style="width:100%; height:75px; background: #2887e6; text-align:center; margin-top:49px; position:absolute; bottom:0;">
      <p style="color:white; padding-top:25px; font-size:14px;">Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
    </footer>
</body>
</html>