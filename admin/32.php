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
    .btn-primary, .btn-primary:active, .btn-primary:visited{
    width: 75px;
    background-color: #2155c5;
    color: white;
    border-radius: 15px;
    border:none;
    transition: 0.2s;
    font-weight: 450;
    padding-left: 15px;
    padding-right: 15px;
    height: 32px;
}

.btn:hover, .btn-info:hover, .btn-primary:hover {
    width: 90px;
    background-color: #E5E4E3;
    color:#2155c5;
    border-radius: 15px;
    border:1px solid #2155c5;
    padding-left: 20px;
    padding-right: 20px;
    transition: 0.2s;
    font-weight: 450;
    height:32px;
}

.form-control {
    display: block;
    width: 150px;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
}

td > input {
   text-align: center;
}

  </style>

  <title>3rd Year Even Semester</title>
</head>
<body style="background-color: #EEEEEE">

<nav style="height:80px; padding-top:15px;" class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" style="color: #fff;" href="index.php">Student Information & Management System</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">

						<li>
							<a href="index.php?page=user-profile" style="color: #fff;">
								<i class="fa fa-user"></i> Profile
							</a>
						</li>

						<li>
							<a href="logout.php" style="color: #fff;">
								<i class="fa fa-power-off"></i> Logout
							</a>
						</li>
						
					</ul>
				</div>
			</div>
        </nav>


 
   
<?php

if(isset($_POST['semester_32insert'])){

  $roll32 = $_POST['roll32'];


  $ece_3205_ct1 = $_POST['ece_3205_ct1'];
  $ece_3205_ct2 = $_POST['ece_3205_ct2'];
  $ece_3205_ct3 = $_POST['ece_3205_ct3'];
  $ece_3205_ct4 = $_POST['ece_3205_ct4'];
  $ece_3205_att = $_POST['ece_3205_att'];
  $ece_3205_exam = $_POST['ece_3205_exam'];
  $ece_3211_ct1 = $_POST['ece_3211_ct1'];
  $ece_3211_ct2 = $_POST['ece_3211_ct2'];
  $ece_3211_ct3 = $_POST['ece_3211_ct3'];
  $ece_3211_ct4 = $_POST['ece_3211_ct4'];
  $ece_3211_att = $_POST['ece_3211_att'];
  $ece_3211_exam = $_POST['ece_3211_exam'];
  $ece_3221_ct1 = $_POST['ece_3221_ct1'];
  $ece_3221_ct2 = $_POST['ece_3221_ct2'];
  $ece_3221_ct3 = $_POST['ece_3221_ct3'];
  $ece_3221_ct4 = $_POST['ece_3221_ct4'];
  $ece_3221_att = $_POST['ece_3221_att'];
  $ece_3221_exam = $_POST['ece_3221_exam'];
  $ece_3207_ct1 = $_POST['ece_3207_ct1'];
  $ece_3207_ct2 = $_POST['ece_3207_ct2'];
  $ece_3207_ct3 = $_POST['ece_3207_ct3'];
  $ece_3207_ct4 = $_POST['ece_3207_ct4'];
  $ece_3207_att = $_POST['ece_3207_att'];
  $ece_3207_exam = $_POST['ece_3207_exam'];
  $ece_3219_ct1 = $_POST['ece_3219_ct1'];
  $ece_3219_ct2 = $_POST['ece_3219_ct2'];
  $ece_3219_ct3 = $_POST['ece_3219_ct3'];
  $ece_3219_ct4 = $_POST['ece_3219_ct4'];
  $ece_3219_att = $_POST['ece_3219_att'];
  $ece_3219_exam = $_POST['ece_3219_exam'];
  

  $ece_3206_re = $_POST['ece_3206_re'];
  $ece_3206_att = $_POST['ece_3206_att'];
  $ece_3206_quiz = $_POST['ece_3206_quiz'];
  $ece_3206_bv = $_POST['ece_3206_bv'];
  $ece_3212_re = $_POST['ece_3212_re'];
  $ece_3212_att = $_POST['ece_3212_att'];
  $ece_3212_quiz = $_POST['ece_3212_quiz'];
  $ece_3212_bv = $_POST['ece_3212_bv'];
  $ece_3222_re = $_POST['ece_3222_re'];
  $ece_3222_att = $_POST['ece_3222_att'];
  $ece_3222_quiz = $_POST['ece_3222_quiz'];
  $ece_3222_bv = $_POST['ece_3222_bv'];
  $ece_3208_re = $_POST['ece_3208_re'];
  $ece_3208_att = $_POST['ece_3208_att'];
  $ece_3208_quiz = $_POST['ece_3208_quiz'];
  $ece_3208_bv = $_POST['ece_3208_bv'];
  $ece_3220_re = $_POST['ece_3220_re'];
  $ece_3220_att = $_POST['ece_3220_att'];
  $ece_3220_quiz = $_POST['ece_3220_quiz'];
  $ece_3220_bv = $_POST['ece_3220_bv'];
  

  
  $query = "INSERT INTO `semester_32`(`roll32`, `ece_3205_ct1`, `ece_3205_ct2`, `ece_3205_ct3`, `ece_3205_ct4`, `ece_3205_att`, `ece_3205_exam`, `ece_3211_ct1`, `ece_3211_ct2`, `ece_3211_ct3`, `ece_3211_ct4`, `ece_3211_att`, `ece_3211_exam`, `ece_3221_ct1`, `ece_3221_ct2`, `ece_3221_ct3`, `ece_3221_ct4`, `ece_3221_att`, `ece_3221_exam`, `ece_3207_ct1`, `ece_3207_ct2`, `ece_3207_ct3`, `ece_3207_ct4`, `ece_3207_att`, `ece_3207_exam`, `ece_3219_ct1`, `ece_3219_ct2`, `ece_3219_ct3`, `ece_3219_ct4`, `ece_3219_att`, `ece_3219_exam`, `ece_3206_re`, `ece_3206_att`, `ece_3206_quiz`, `ece_3206_bv`, `ece_3212_re`, `ece_3212_att`, `ece_3212_quiz`, `ece_3212_bv`, `ece_3222_re`, `ece_3222_att`, `ece_3222_quiz`, `ece_3222_bv`, `ece_3208_re`, `ece_3208_att`, `ece_3208_quiz`, `ece_3208_bv`, `ece_3220_re`, `ece_3220_att`, `ece_3220_quiz`, `ece_3220_bv`) VALUES ('$roll32', '$ece_3205_ct1', '$ece_3205_ct2', '$ece_3205_ct3', '$ece_3205_ct4', '$ece_3205_att', '$ece_3205_exam', '$ece_3211_ct1', '$ece_3211_ct2', '$ece_3211_ct3', '$ece_3211_ct4', '$ece_3211_att', '$ece_3211_exam', '$ece_3221_ct1', '$ece_3221_ct2', '$ece_3221_ct3', '$ece_3221_ct4', '$ece_3221_att', '$ece_3221_exam', '$ece_3207_ct1', '$ece_3207_ct2', '$ece_3207_ct3', '$ece_3207_ct4', '$ece_3207_att', '$ece_3207_exam', '$ece_3219_ct1', '$ece_3219_ct2', '$ece_3219_ct3', '$ece_3219_ct4', '$ece_3219_att', '$ece_3219_exam', '$ece_3206_re', '$ece_3206_att', '$ece_3206_quiz', '$ece_3206_bv', '$ece_3212_re', '$ece_3212_att', '$ece_3212_quiz', '$ece_3212_bv', '$ece_3222_re', '$ece_3222_att', '$ece_3222_quiz', '$ece_3222_bv', '$ece_3208_re', '$ece_3208_att', '$ece_3208_quiz', '$ece_3208_bv', '$ece_3220_re', '$ece_3220_att', '$ece_3220_quiz', '$ece_3220_bv')";




  $result = mysqli_query($link, $query);

  if($result){
   $success = "Data Insertion Successful!";
   header('location: index.php?page=result'); 
  } else {
    $error = "Wrong!";
  }

}


?>

<div class="row">

   <?php if(isset($success)){ echo '<p class="alert alert-success col-sm-6">'.$success.'</p>';} ?>
   <?php if(isset($error)){ echo '<p class="alert alert-danger col-sm-6">'.$error.'</p>'; } ?>

</div>
<a href="index.php?page=result"><button style="float:right;" class="btn btn-primary">Back</button></a>


<div style="margin-top:35px;">


 <div class="container">

<div style="margin-left: 10px; margin-top:25px;" class="row">
   <div class="col-sm-6 ">
     <form action="" method="POST" enctype="multipart/form-data">

        <table class="table table-striped offset-4">


        <thead>
              <tr>
              <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="Roll">Roll No.</label>
               </th>
              </tr>
          </thead>

          <tbody>
              <tr>
              <td>
               <input type="text" name="roll32" placeholder="Roll No."  class="form-control" required="" >
               </td>
              </tr>
          </tbody>
          
          <thead>
              <tr>

              </tr>
          </thead>
          <tbody>
              <tr>

              </tr>
          </tbody>
          
          <thead>
            <tr>
               <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px); margin-top:25px;"  for="">Course No.</label>
               </th>
               <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="">CT-1</label>
               </th>
               <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="">CT-2</label>
               </th>
               <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="">CT-3</label>
               </th>
               <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="">CT-4</label>
               </th>
               <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="">Attendance</label>
               </th>
               <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="">Exam</label>
               </th>
            </tr>
          </thead>
          <tbody>
            <tr>
               <td>
               <label type="text" name="" placeholder="ECE 3205" class="form-control">ECE 3205</label>
               </td>
               <td>
               <input type="text" name="ece_3205_ct1" placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3205_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3205_ct3" placeholder="CT-3"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3205_ct4" placeholder="CT-4"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3205_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3205_exam" placeholder="Exam" class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 3211"  class="form-control">ECE 3211</label>
               </td>
               <td>
               <input type="text" name="ece_3211_ct1" placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3211_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3211_ct3" placeholder="CT-3"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3211_ct4" placeholder="CT-4"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3211_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3211_exam" placeholder="Exam"  class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <th>
               <label type="text" name=" " placeholder="ECE 3221"  class="form-control">ECE 3221</label>
               </th>
               <td>
               <input type="text" name="ece_3221_ct1"  placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3221_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3221_ct3" placeholder="CT-3" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3221_ct4" placeholder="CT-4" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3221_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3221_exam" placeholder="Exam" class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 3207" class="form-control">ECE 3207</label>
               </td>
               <td>
               <input type="text" name="ece_3207_ct1" placeholder="CT-1" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3207_ct2" placeholder="CT-2" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3207_ct3" placeholder="CT-3" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3207_ct4" placeholder="CT-4" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3207_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3207_exam" placeholder="Exam" class="form-control" required="" >
               </td>
            </tr> 
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 3219"  class="form-control">ECE 3219</label>
               </td>
               <td>
               <input type="text" name="ece_3219_ct1" placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3219_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3219_ct3" placeholder="CT-3" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3219_ct4" placeholder="CT-4" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3219_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3219_exam" placeholder="Exam" class="form-control" required="" >
               </td>
            </tr>
            
          </tbody>




          <thead>
            <tr>
               <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px); margin-top:25px;"  for="">Lab Courses No.</label>
               </th>
               <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);"  for="">Report</label>
               </th>
               <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="">Attendance</label>
               </th>
               <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="">Quiz</label>
               </th>
               <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="">Board Viva</label>
               </th>
            </tr>
          </thead>
          <tbody>
            <tr>
               <td>
               <label type="text" name="" placeholder="ECE 3206" class="form-control">ECE 3206</label>
               </td>
               <td>
               <input type="text" name="ece_3206_re" placeholder="Report" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3206_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3206_quiz" placeholder="Quiz"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3206_bv" placeholder="Board Viva" class="form-control" required="" >
               </td>
            </tr>
            
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 3212" class="form-control">ECE 3212</label>
               </td>
               <td>
               <input type="text" name="ece_3212_re" placeholder="Report"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3212_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3212_quiz" placeholder="Quiz"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3212_bv" placeholder="Board Viva" class="form-control" required="" >
               </td>
            </tr>
            
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 3222"  class="form-control">ECE 3222</label>
               </td>
               <td>
               <input type="text" name="ece_3222_re" placeholder="Report" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3222_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3222_quiz" placeholder="Quiz"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3222_bv" placeholder="Board Viva"  class="form-control" required="" >
               </td>
            </tr>

            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 3208"  class="form-control">ECE 3208</label>
               </td>
               <td>
               <input type="text" name="ece_3208_re" placeholder="Report" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3208_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3208_quiz" placeholder="Quiz"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3208_bv" placeholder="Board Viva"  class="form-control" required="" >
               </td>
            </tr>

            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 3220"  class="form-control">ECE 3220</label>
               </td>
               <td>
               <input type="text" name="ece_3220_re" placeholder="Report" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3220_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3220_quiz" placeholder="Quiz"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_3220_bv" placeholder="Board Viva"  class="form-control" required="" >
               </td>
            </tr>
            
          </tbody>




        </table>

        <div style="margin-top:20px; margin-bottom:35px;" class="form-group">
          <input style="height:32px;" type="submit" value="Submit" name="semester_32insert" class="btn btn-primary">
        </div>
        
     </form>
   </div>
</div>


</div>


</div>

<!-- -->

<footer style="" class="footer-area">
			<p>Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
		</footer>

</body>
</html>