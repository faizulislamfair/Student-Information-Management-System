<?php

require_once './dbcon.php';


if(isset($_POST['update-password'])) {
      
  $email = $_POST['email'];
  $forgot = $_POST['forgot'];
  $password = $_POST['password'];
  $c_password = $_POST['c_password'];


  $otp_check = mysqli_query($link, "SELECT * FROM `student_info` WHERE `email` = '$email'");
  if(mysqli_num_rows($otp_check) > 0){
   $row = mysqli_fetch_assoc($otp_check);

   if($row['email'] == $email){

   if($row['forgot'] == $forgot){
    if($password == $c_password){
      $query = "UPDATE `student_info` SET `forgot` = 'updated', `password` = 'md5($password)'  WHERE `email` = '$email'";
      $result = mysqli_query($link, $query);
      header('location: login.php'); 
    }
   } else {
       $wrong_otp = "The OTP Is Wrong";
   }
  } else {
       $mail_not_found = "This Email ID Is Not Found";
  }
  }
  
}



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/btn.css">

    <style>
.btn-primary, .btn-primary:active, .btn-primary:visited{
    width:80px;
    background-color: #2155c5;
    color: white;
    border-radius: 15px;
    border:none;
    transition: 0.2s;
    font-weight: 450;
    padding-left: 10px;
    padding-right: 10px;
    height: 35px;
}

.btn:hover, .btn-info:hover, .btn-primary:hover {
    width:80px;
    background-color: #E5E4E3;
    color:#2155c5;
    border-radius: 15px;
    border:1px solid #2155c5;
    padding-left: 10px;
    padding-right: 10px;
    transition: 0.2s;
    font-weight: 450;
    height: 35px;
}

      .form-control {
    display: block;
    width: 425px;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
    </style>
  


    <title>SIMS</title>
  </head>
  <body>

  <header style="width:100%; height:90px; background: #2887e6">
   </header>
     <br> <br>
     <a href="../"><input style="transform:translateX(-25px); float:right;" value="Back" class="btn btn-primary"></a>
     <h1 style="margin-left:450px;">Reset Password</h1>


     <div style="margin-right:100px;" class="row">
      <div class="col-sm-4 col-sm offset-4">
      <div>

      <br> 
         <form action="" method="POST">
         <div>
              <input type="email" placeholder="Email" name="email" required="" class="form-control" value="<?php if(isset($email)) { echo $email; } ?>">
           </div>
           <br>
           <div>
              <input type="password" placeholder="OTP" name="otp" required="" class="form-control" value="<?php if(isset($otp)) { echo $otp; } ?>">
           </div>
           <br>
           <div>
              <input type="password" placeholder="Password" name="email" required="" class="form-control" value="<?php if(isset($password)) { echo $password; } ?>">
           </div>
           <br>
           <div>
              <input type="password" placeholder="Confirm Password" name="otp" required="" class="form-control" value="<?php if(isset($c_password)) { echo $c_password; } ?>">
           </div>
           <br>
           <div>
           <input style="transform: translateX(170px);" type="submit" value="Confirm" name="update-password" class="btn btn-primary">
           </div>
         </form>
         </div>
      </div>
     </div>
     <br>
     <?php if(isset($mail_not_found)) { echo '<div class="alert alert-danger col-sm-2 col-sm offset-5">'.$mail_not_found.'</div>'; } ?>
     <?php if(isset($wrong_otp)) { echo '<div class="alert alert-danger col-sm-2 col-sm offset-5">'.$wrong_otp.'</div>'; } ?>

   </div>

   <footer style="width:100%; height:75px; background: #2887e6; text-align:center; bottom:0; position:absolute;">
      <p style="color:white; padding-top:25px; font-size:14px;">Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
    </footer>
  </body>
</html>
