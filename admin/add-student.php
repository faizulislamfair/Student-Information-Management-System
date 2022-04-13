<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  

<h1 style="margin-left: 475px;" class="text-primary"><i class="fa fa-user-plus"></i> Add Student </h1>


<?php

if(isset($_POST['add-student'])){

  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $city = $_POST['city'];
  $contact = $_POST['contact'];
  $class = $_POST['class'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $c_password = $_POST['c_password'];


  $picture = explode('.',$_FILES['picture']['name']);
  $picture_ex = end($picture);

  $picture_name = $roll.'.'.$picture_ex;


  $input_error = array();

  if(empty($name)){
    $input_error['name'] = "The Name field is required.";
  }

  if(empty($roll)){
    $input_error['roll'] = "The Roll field is required.";
  }

  if(empty($city)){
    $input_error['city'] = "The City field is required.";
  }

  if(empty($contact)){
    $input_error['contact'] = "The Contact field is required.";
  }

  if(empty($class)){
    $input_error['class'] = "The Class field is required.";
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
    $email_check = mysqli_query($link, "SELECT * FROM `student_info` WHERE `email` = '$email';");
   if(mysqli_num_rows($email_check) == 0){
     $username_check = mysqli_query($link, "SELECT * FROM `student_info` WHERE `username` = '$username';");
     if(mysqli_num_rows($username_check) == 0){
       if(strlen($username) > 7){
          if(strlen($password) > 7 ){
               if($password == $c_password){
                 $password=md5($password);
  
                 $query = "INSERT INTO `student_info`(`name`, `roll`, `class`, `city`, `contact`, `email`, `username`, `password`, `photo`, `status`) VALUES ('$name', '$roll', '$class', '$city', '$contact', '$email', '$username', '$password', '$picture_name', 'inactive')";
                 $result = mysqli_query($link, $query);

  if($result){
     //$success = "Data Insertion Successful!";
    move_uploaded_file($_FILES['picture']['tmp_name'], 'student_images/'.$picture_name);
     //header('location: add-student.php');
  } else {
    $error = "Wrong!";
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

<div class="row">

   <?php if(isset($success)){ echo '<p class="alert alert-success col-sm-6">'.$success.'</p>';} ?>
   <?php if(isset($error)){ echo '<p class="alert alert-danger col-sm-6">'.$error.'</p>'; } ?>

</div>



<div style="margin-top:25px; margin-left:325px;"  class="row">
   <div class="col-sm-6">
     <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
          <label for="name">Student Name</label>
          <input type="text" name="name" placeholder="Student Name" id="name" class="form-control" required="" >
        </div>

        <div class="form-group">
          <label for="roll">Student Roll</label>
          <input type="text" name="roll" placeholder="Roll" id="roll" class="form-control" pattern="[0-9]{7}" required="" >
        </div>

        <div class="form-group">
          <label for="city">City</label>
          <input type="text" name="city" placeholder="City" id="city" class="form-control" required="" >
        </div>

        <div class="form-group">
          <label for="contact">Contact</label>
          <input type="text" name="contact" placeholder="01*********" id="contact" class="form-control" pattern="01[1|3|5|6|7|8|9][0-9]{8}" required="" >
        </div>

        <div class="form-group">
          <label for="class">Class</label>
          <select id="class" class="form-control" name="class" required="" >
            <option value="">Select</option>
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
            <option value="4th">4th</option>
          </select>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control"  id="email" type="email" name="email" placeholder="Email" required="" >
        </div>

        <div class="form-group">
          <label for="username">Username</label>
          <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" >
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="" >
        </div>

        <div class="form-group">
          <label for="c_password">Confirm Password</label>
          <input class="form-control" id="c_password" type="password" name="c_password" placeholder="Confirm Password" required=""  >
        </div>

        <div class="form-group">
          <label for="picture">Picture</label>
          <input type="file" name="picture" id="picture" required="" >
        </div>
        <br>
        <div class="form-group">
          <input style="height: 32px;" type="submit" value="Add" name="add-student" class="btn btn-primary">
        </div>

     </form>

   
   </div>
</div>
<a href="index.php"><button style="float:right; transform: translateY(-45px);" class="btn btn-primary">Back</button></a>

</body>
</html>
