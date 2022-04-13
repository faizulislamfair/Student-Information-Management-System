<?php

require_once './dbcon.php';

session_start();

if(isset($_SESSION['student_login'])){
  header('location: systemstudent.php');
}

if(isset($_POST['login'])) {
      
  $Roll = $_POST['roll'];
  $password = $_POST['password'];


  $studentname_check = mysqli_query($link, "SELECT * FROM `student_info` WHERE `Roll` = '$Roll'");
  if(mysqli_num_rows($studentname_check) > 0){
   $row = mysqli_fetch_assoc($studentname_check);

   if($row['password'] == md5($password)){

    if($row['otp'] == 'okay') { 
    if($row['status'] == 'active'){

    if( isset($_POST['remember']) ){
        setcookie('roll', $Roll, time()+60*60*7);   
        setcookie('password', $password, time()+60*60*7);   
    }

      $_SESSION['student_login'] = $Roll;
      header('location: index.php');
    } else {
      $status_inactive = "Your Status Is Inactive";
    }
   } else {
     $not_verified = "Your Email ID is not verified";
   }

  } else {
       $wrong_password = "The Password Is Wrong";
   }


  } else {
       $roll_not_found = "This Roll Number Is Not Found";
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

a:hover{
  background-color: #E5E4E3;
}
    </style>
  


    <title>SIMS</title>
  </head>
  <body>

  <header style="width:100%; height:90px; background: #2887e6">
   </header>

     <br> <br>
     <a href="../"><input style="transform:translateX(-25px); float:right;" value="Back" class="btn btn-primary"></a>
     <h1 class="text-center">Student Login</h1>


     <div style="margin-right:100px;" class="row">
      <div class="col-sm-4 col-sm offset-4">
      <div>

      <br> <br>
         <form action="login.php" method="POST">
           <div>
              <input type="text" placeholder="Roll Number" id="roll" name="roll" required="" class="form-control" value="<?php if(isset($Roll)) { echo $Roll; } ?>">
           </div>
           <br>
           <div>
              <input type="password" placeholder="Password" id="password" name="password" required="" class="form-control" value="<?php if(isset($password)) { echo $password; } ?>">
           </div>
           <br>
           <div>
            <input type="checkbox" name="remember" value="1"> Remember Me</td>
           </div>
           <br>
           <div>
           <input type="submit" value="Login" name="login" class="btn btn-primary">
           <a href="register.php"><input style="transform:translateX(40px); float:right;" value="Register" class="btn btn-primary"></a>
           </div>
           <br>
           <a style="color: #2155c5;" target="_blank" href="forgot.php">Forgot password?</a>
         </form>
         </div>
      </div>
     </div>
     <br>

     <?php if(isset($not_verified)) { echo '<div class="alert alert-danger col-sm-2 col-sm offset-5">'.$not_verified.'</div>'; } ?>
     <?php if(isset($roll_not_found)) { echo '<div class="alert alert-danger col-sm-2 col-sm offset-5">'.$roll_not_found.'</div>'; } ?>
     <?php if(isset($wrong_password)) { echo '<div class="alert alert-danger col-sm-2 col-sm offset-5">'.$wrong_password.'</div>'; } ?>
     <?php if(isset($status_inactive)) { echo '<div class="alert alert-danger col-sm-2 col-sm offset-5">'.$status_inactive.'</div>'; } ?>

   </div>

   <footer style="width:100%; height:75px; background: #2887e6; text-align:center; bottom:0; position:absolute;">
      <p style="color:white; padding-top:25px; font-size:14px;">Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
    </footer>
  </body>
</html>


<?php   
     if(isset($_COOKIE['roll']) && isset($_COOKIE['password'])){
     $Roll = $_COOKIE['roll'];
     $password = $_COOKIE['password'];

     echo "<script>
           document.getElementById('roll').value = '$Roll';
           document.getElementById('password').value = '$password';
     </script>";
    }
?>

