<h1 style="margin-left: 295px;" class="text-primary"><i class="fa fa-user"></i> Student Profile</h1>

<?php

$session_user = $_SESSION['student_login'];

$user_data = mysqli_query($link, "SELECT * FROM `student_info` WHERE `roll` = '$session_user'");
$user_row = mysqli_fetch_assoc($user_data);

?>

<div style="margin-top:25px; margin-left:275px;" class="row">
  <div class="col-sm-6">
    <table class="table table-bordered">
      <tr>
        <td>Roll</td>
        <td><?= $user_row['roll']; ?></td>
      </tr>
      <tr>
        <td>Name</td>
        <td><?=  ucwords($user_row['name']); ?></td>
      </tr>
      <tr>
        <td>Username</td>
        <td><?= $user_row['username']; ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?= $user_row['email']; ?></td>
      </tr>
      <tr>
        <td>Status</td>
        <td><?= ucwords($user_row['status']); ?></td>
      </tr>
      <tr>
        <td>Signup Date</td>
        <td><?= $user_row['datetime']; ?></td>
      </tr>
    </table>
    <a href="index.php?page=update-student&id=<?php echo base64_encode($user_row['id']); ?>" style="margin-top:25px; width:100px; height:35px;" class="btn btn-primary">Edit Profile</a>
  </div>
  <div class="col-sm-6">
    <a href="">
      <img style="width:200px; height=250px;" class="img-thumbnail img-sm" src="../admin/student_images/<?= $user_row['photo'] ?>" alt="Thumbnail">
    </a>
    <br> <br>

<?php

if(isset($_POST['upload'])) {
  $photo = explode('.', $_FILES['photo']['name']);
  $photo = end($photo);
  $photo_name = $session_user.'.'.$photo;

  $upload = mysqli_query($link, "UPDATE `student_info` SET `photo`='$photo_name' WHERE `roll` = '$session_user'");
  if($upload){
    move_uploaded_file($_FILES['photo']['tmp_name'], '../admin/student_images/'.$photo_name);
  }
}

?>


    <form action="" enctype="multipart/form-data" method="POST">
      <label for="photo">Profile Picture</label>
      <input type="file" name="photo" required="" id="photo">
      <br>
      <br>
      <input type="submit" name="upload" value="Upload" class="btn btn-primary">
    </form>
  </div>
</div>