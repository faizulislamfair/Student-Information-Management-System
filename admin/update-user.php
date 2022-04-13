<h1 style="margin-left: 425px;" class="text-primary"><i class="fas fa-user-edit"></i> Update User Profile</h1>


<?php

$id = base64_decode($_GET['id']);



if(isset($_POST['update-user'])){

  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "UPDATE `users` SET `name` = '$name' ,`username` = '$username' ,`email` = '$email' ,`password` = '$password'  WHERE `id` = '$id'";
  $result = mysqli_query($link, $query);

  if($result){
    //header('location: index.php?page=user-profile');
  }

}

$db_data = mysqli_query($link, "SELECT * FROM users WHERE `id` = $id");
$db_row = mysqli_fetch_assoc($db_data);


?>



<div style="margin-top:25px; margin-left:325px;" class="row">
   <div class="col-sm-6">
     <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="Name" id="name" class="form-control" required="" value="<?= $db_row['name'] ?>" >
        </div>

        <div class="form-group">
          <label for="roll">Username</label>
          <input type="text" name="username" placeholder="Username" id="username" class="form-control" required="" value="<?= $db_row['username'] ?>" >
        </div>

        <div class="form-group">
          <label for="city">Email</label>
          <input type="text" name="email" placeholder="Email" id="email" class="form-control" required="" value="<?= $db_row['email'] ?>" >
        </div>

        <div class="form-group">
          <label for="pcontact">Password</label>
          <input type="text" name="password" placeholder="Password" id="password" class="form-control" required="" value="<?= $db_row['password'] ?>" >
        </div>


        <div class="form-group">
          <input style="height:35px; margin-top:15px;" type="submit" value="Update Profile" name="update-user" class="btn btn-primary">
        </div>

     </form>
   </div>
 </div>
