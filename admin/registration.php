<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    span {
      display: inline;
    }
  </style>  

</head>
<body>

<h1 style="margin-left: 500px; color: #337ab7;" class="text-primary;"><i class="fa fa-user-plus"></i> Add Admin </h1> <br>

<?php

  // require_once 'dbcon.php';
  // session_start();

 if(isset($_POST['registration'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $c_password = $_POST['c_password'];
 
 
  $photo = explode('.', $_FILES['photo']['name']);
  $photo = end($photo);
  $photo_name = $username.'.'.$photo;

  $input_error = array();



  if(empty($name)){
    $input_error['name'] = "The Name field is required.";
  }

  if(empty($email)){
    $input_error['email'] = "The Email field is required.";
  }

  if(empty($username)){
    $input_error['username'] = "The Username field is required.";
  }

  if(empty($password)){
    $input_error['password'] = "The Password field is required.";
  }

  if(empty($c_password)){
    $input_error['c_password'] = "The Confirm Password field is required.";
  }


  

   if(count($input_error) == 0){
     $email_check = mysqli_query($link, "SELECT * FROM `users` WHERE `email` = '$email';");
    if(mysqli_num_rows($email_check) == 0){
      $username_check = mysqli_query($link, "SELECT * FROM `users` WHERE `username` = '$username';");
      if(mysqli_num_rows($username_check) == 0){
        if(strlen($username) > 7){
           if(strlen($password) > 7 ){
                if($password == $c_password){
                  $password=md5($password);
                 
                  $query = "INSERT INTO `users`( `name`, `email`, `username`, `password`, `photo`, `status`) VALUES ('$name', '$email', '$username', '$password', '$photo_name', 'inactive')";
                  $result = mysqli_query($link, $query);
                  if($result){
                    $_SESSION['data_insert_success'] = "Data Insert Successful!";
                    move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo_name);
                    // header('location: registration.php');

                  } else {
                    $_SESSION['data_insert_error'] = "Data Insert Error!";
                  }


                } else {
                  $password_not_match = "Password Doesn't Match!";
                }
           } else {
             $password_l = "Password Must Be More Than 7 Characters.";
           }
        } else {
              $username_l = "Username Must Be More Than 7 Characters.";
        }

    } else {
          $username_error = "This Username Already Exists";
    }
    
  }  else {
       $email_error = "This Email Address Already Exists";
   
     }
   
   
    }

  }

?>


     <div class="container">
        
        

     <div style="margin-left:325px;" class="row">
       <div class="col-md-12 offset-4">
         <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
          <div class="form-group">
            <label for="name" class="control-label col-sm-1">Name</label> <br> <br>
            <div class="col-sm-4">
              <input style="transform: translateY(-7px);" class="form-control" id="name" type="text" name="name" placeholder="Name" required="" >
            </div>

            <label class="error"><?php if(isset($input_error['name'])){ echo $input_error['name']; } ?> </label>
          
          </div>
          <div class="form-group">
            <label for="email" class="control-label col-sm-1">Email</label> <br> <br>
            <div class="col-sm-4">
              <input style="transform: translateY(-7px);" class="form-control" id="email" type="email" name="email" placeholder="Email" required="" >
            </div>

            <label class="error"><?php if(isset($input_error['email'])){ echo $input_error['email']; } ?> </label>
            <label class="error"><?php if(isset($email_error)){ echo $email_error; } ?> </label>

          </div>
          <div class="form-group">
            <label for="username" class="control-label col-sm-1">Username</label> <br> <br>
            <div class="col-sm-4">
              <input style="transform: translateY(-7px);" class="form-control" id="username" type="text" name="username" placeholder="Username" required="" >
            </div>

            <label class="error"><?php if(isset($input_error['username'])){ echo $input_error['username']; } ?> </label>
            <label class="error"><?php if(isset($username_error)){ echo $username_error; } ?> </label>
            <label class="error"><?php if(isset($username_l)){ echo $username_l; } ?> </label>


          </div>
          <div class="form-group">
            <label for="password" class="control-label col-sm-1">Password</label> <br> <br>
            <div class="col-sm-4">
              <input style="transform: translateY(-7px);" class="form-control" id="password" type="password" name="password" placeholder="Password" required="" >
            </div>

            <label class="error"><?php if(isset($input_error['password'])){ echo $input_error['password']; } ?> </label>
            <label class="error"><?php if(isset($password_l)){ echo $password_l; } ?> </label>

          </div>
          <div class="form-group">
            <label  for="c_password" class="control-label col-sm-1"><span>Confirm</span></label> <br> <br>
            <div class="col-sm-4">
              <input style="transform: translateY(-7px);" class="form-control" id="c_password" type="password" name="c_password" placeholder="Confirm Password" required="" >
            </div>

            <label class="error"><?php if(isset($input_error['c_password'])){ echo $input_error['c_password']; } ?> </label>
            <label class="error"><?php if(isset($password_not_match)){ echo $password_not_match; } ?> </label>


          </div>
          <div class="form-group">
            <label for="photo" class="control-label col-sm-1">Picture</label> <br> <br>
            <div class="col-sm-4">
              <input style="transform: translateY(-7px);" id="photo" type="file" name="photo">
            </div>
          </div>
          <br>
           <input style="height: 32px;" type="submit" value="Register" name="registration" class="btn btn-primary">
         </form>
       </div>
     </div>
     <br> <br>
     </div>
     <a href="index.php"><button style="float:right; transform: translateY(-75px);" class="btn btn-primary">Back</button></a>
    <br> <br>

  </body>
</html> 