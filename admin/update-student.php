<h1 style="margin-left: 475px;" class="text-primary"><i class="fas fa-user-edit"></i> Update Student</h1>

<?php

$id = base64_decode($_GET['id']);



if(isset($_POST['update-student'])){

  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $city = $_POST['city'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $status = $_POST['status'];

  $query = "UPDATE `student_info` SET `name` = '$name' ,`roll` = '$roll', `city` = '$city' ,`contact` = '$contact', `email` = '$email', `username` = '$username', `status` = '$status' WHERE `id` = '$id'";
  $result = mysqli_query($link, $query);

  if($result){
    // header('location: index.php?page=all-students');
  }

  

}


$db_data = mysqli_query($link, "SELECT * FROM `student_info` WHERE `id` = '$id'");
$db_row = mysqli_fetch_assoc($db_data);





?>



<div style="margin-top:25px; margin-left:325px;" class="row">
   <div class="col-sm-6">
     <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
          <label for="name">Student Name</label>
          <input type="text" name="name" placeholder="Student Name" id="name" class="form-control" required="" value="<?= $db_row['name'] ?>" >
        </div>

        <div class="form-group">
          <label for="roll">Student Roll</label>
          <input type="text" name="roll" placeholder="Roll" id="roll" class="form-control" pattern="[0-9]{7}" required="" value="<?= $db_row['roll'] ?>" >
        </div>

        <div class="form-group">
          <label for="city">City</label>
          <input type="text" name="city" placeholder="City" id="city" class="form-control" required="" value="<?= $db_row['city'] ?>" >
        </div>

        <div class="form-group">
          <label for="contact">Contact</label>
          <input type="text" name="contact" placeholder="01*********" id="contact" class="form-control" pattern="01[1|3|5|6|7|8|9][0-9]{8}" required="" value="<?= $db_row['contact'] ?>" >
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control"  id="email" type="email" name="email" placeholder="Email" required="" value="<?= $db_row['email'] ?>">
        </div>

        <div class="form-group">
          <label for="username">Username</label>
          <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" value="<?= $db_row['username'] ?>">
        </div>

        <div class="form-group">
          <label for="status">Status</label>
          <input class="form-control" id="status" type="text" name="status" placeholder="Status" required="" value="<?= $db_row['status'] ?>">
        </div>

        <div class="form-group">
          <input type="submit" style="height: 35px; margin-top:10px" value="Update Student" name="update-student" class="btn btn-primary">
        </div>

     </form>
   </div>
 </div>
