<?php

require_once './dbcon.php';


if(isset($_POST['email'])) {
      
  $email = $_POST['email'];

  $studentmail_check = mysqli_query($link, "SELECT * FROM `student_info` WHERE `email` = '$email'");
  if(mysqli_num_rows($studentmail_check) > 0){
   $row = mysqli_fetch_assoc($studentmail_check);

   if($row['email'] == $email){
      
    if($row['otp'] == 'okay') { 
    if($row['status'] == 'active'){
      if(isset($_POST['email'])){
    
        $email = $_POST['email'];
        $subject = "Password Reset Code";
        $body = substr(str_shuffle("0123456789"), 0, 6);
        $headers = "From: penguinpakhi@gmail.com";
      
        if(mail($email, $subject, $body, $headers)){
            //echo "<b>email sent to $email</b>";
        }else{
            echo "Email sending failed..";
        }
      
      
      }

      $query = "UPDATE `student_info` SET `forgot` = '$body' WHERE `email` = '$email'";
      $result = mysqli_query($link, $query);
    
      header('location: forgot_password.php');
    } else {
      $status_inactive = "Your Status Is Inactive";
    }
   } else {
     $not_verified = "Your Email ID is not verified";
   }

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


     <div style="margin-right:100px;" class="row">
      <div class="col-sm-4 col-sm offset-4">
      <div>
         <br>
         <h4>Enter your Email ID:</h4>
         <form action="" method="POST">
           <div class="form-group">
            <input class="form-control"  id="email" type="email" name="email" placeholder="Email" required="" >
           </div>
           <div>
            <input style="width: 180px;" type="submit" value="Send Reset Code" name="forgot" class="btn btn-primary">
           </div>
         </form>
         </div>
      </div>
     </div>
     <br>

     <?php if(isset($not_verified)) { echo '<div class="alert alert-danger col-sm-2 col-sm offset-5">'.$not_verified.'</div>'; } ?>
     <?php if(isset($status_inactive)) { echo '<div class="alert alert-danger col-sm-2 col-sm offset-5">'.$status_inactive.'</div>'; } ?>

   </div>

   <footer style="width:100%; height:75px; background: #2887e6; text-align:center; bottom:0; position:absolute;">
      <p style="color:white; padding-top:25px; font-size:14px;">Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
    </footer>
  </body>
</html>
