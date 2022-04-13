<?php

require_once './dbcon.php';

session_start();

if(isset($_SESSION['user_login'])){
  header('location: systemoredit.php');
}

if(isset($_POST['login'])) {
      
  $username = $_POST['username'];
  $password = $_POST['password'];


  $username_check = mysqli_query($link, "SELECT * FROM `users` WHERE `username` = '$username'");
  if(mysqli_num_rows($username_check) > 0){
   $row = mysqli_fetch_assoc($username_check);

   if($row['password'] == md5($password)){
    if($row['status'] == 'active'){

      if( isset($_POST['remember']) ){
        setcookie('username', $username, time()+60*60*7);   
        setcookie('password', $password, time()+60*60*7);   
    }

      $_SESSION['user_login'] = $username;
      header('location: systemoredit.php');
    } else {
      $status_inactive = "Your Status Is Inactive";
    }
   } else {
       $wrong_password = "The Password Is Wrong";
   }


  } else {
       $username_not_found = "This Username Is Not Found";
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
    <link rel="stylesheet" href="../css/style.css">

    <style>

.btn-primary, .btn-primary:active, .btn-primary:visited{
    width:60px;
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

  <header style="width:100%; height:90px; background: #2887e6;">
   </header>
   <br><br>
   <h1 class="text-center">Admin Login</h1>
  
   
     <div class="row">
      <div class="col-sm-4 col-sm offset-4">
      <div>
        
      <br> <br>
         <form action="login.php" method="POST">
           <div>
              <input type="text" placeholder="Username" id="username" name="username" required="" class="form-control" value="<?php if(isset($username)) { echo $username; } ?>">
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
           <a href="../"><input style="float:right;" value="Back" class="btn btn-primary"></a>
           </div>
         </form>
         </div>
      </div>
     </div>
     <br>
     <?php if(isset($username_not_found)) { echo '<div class="alert alert-danger col-sm-4 col-sm offset-4">'.$username_not_found.'</div>'; } ?>
     <?php if(isset($wrong_password)) { echo '<div class="alert alert-danger col-sm-4 col-sm offset-4">'.$wrong_password.'</div>'; } ?>
     <?php if(isset($status_inactive)) { echo '<div class="alert alert-danger col-sm-4 col-sm offset-4">'.$status_inactive.'</div>'; } ?>

   </div>

   <footer style="width:100%; height:80px; background: #2887e6; text-align:center; bottom:0; position:absolute;">
        <p style="color:white; padding-top:25px; font-size:14px;">Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
   </footer>

  </body>
</html>



<?php   
     if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
     $username = $_COOKIE['username'];
     $password = $_COOKIE['password'];

     echo "<script>
           document.getElementById('username').value = '$username';
           document.getElementById('password').value = '$password';
     </script>";
    }
?>
