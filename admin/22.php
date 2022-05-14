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

  <title>2nd Year Even Semester</title>
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

if(isset($_POST['semester_22insert'])){

  $roll = $_POST['roll'];


  $ece_2205_ct1 = $_POST['ece_2205_ct1'];
  $ece_2205_ct2 = $_POST['ece_2205_ct2'];
  $ece_2205_ct3 = $_POST['ece_2205_ct3'];
  $ece_2205_ct4 = $_POST['ece_2205_ct4'];
  $ece_2205_att = $_POST['ece_2205_att'];
  $ece_2205_exam = $_POST['ece_2205_exam'];
  $ece_2213_ct1 = $_POST['ece_2213_ct1'];
  $ece_2213_ct2 = $_POST['ece_2213_ct2'];
  $ece_2213_ct3 = $_POST['ece_2213_ct3'];
  $ece_2213_ct4 = $_POST['ece_2213_ct4'];
  $ece_2213_att = $_POST['ece_2213_att'];
  $ece_2213_exam = $_POST['ece_2213_exam'];
  $ece_2215_ct1 = $_POST['ece_2215_ct1'];
  $ece_2215_ct2 = $_POST['ece_2215_ct2'];
  $ece_2215_ct3 = $_POST['ece_2215_ct3'];
  $ece_2215_ct4 = $_POST['ece_2215_ct4'];
  $ece_2215_att = $_POST['ece_2215_att'];
  $ece_2215_exam = $_POST['ece_2215_exam'];
  $math_2217_ct1 = $_POST['math_2217_ct1'];
  $math_2217_ct2 = $_POST['math_2217_ct2'];
  $math_2217_ct3 = $_POST['math_2217_ct3'];
  $math_2217_ct4 = $_POST['math_2217_ct4'];
  $math_2217_att = $_POST['math_2217_att'];
  $math_2217_exam = $_POST['math_2217_exam'];
  $hum_2217_ct1 = $_POST['hum_2217_ct1'];
  $hum_2217_ct2 = $_POST['hum_2217_ct2'];
  $hum_2217_ct3 = $_POST['hum_2217_ct3'];
  $hum_2217_ct4 = $_POST['hum_2217_ct4'];
  $hum_2217_att = $_POST['hum_2217_att'];
  $hum_2217_exam = $_POST['hum_2217_exam'];
  

  $ece_2206_re = $_POST['ece_2206_re'];
  $ece_2206_att = $_POST['ece_2206_att'];
  $ece_2206_quiz = $_POST['ece_2206_quiz'];
  $ece_2206_bv = $_POST['ece_2206_bv'];
  $ece_2214_re = $_POST['ece_2214_re'];
  $ece_2214_att = $_POST['ece_2214_att'];
  $ece_2214_quiz = $_POST['ece_2214_quiz'];
  $ece_2214_bv = $_POST['ece_2214_bv'];
  $ece_2216_re = $_POST['ece_2216_re'];
  $ece_2216_att = $_POST['ece_2216_att'];
  $ece_2216_quiz = $_POST['ece_2216_quiz'];
  $ece_2216_bv = $_POST['ece_2216_bv'];
  

  $ece_2200_score = $_POST['ece_2200_score'];
 
  
  $query = "INSERT INTO `semester_22`(`roll`, `ece_2205_ct1`, `ece_2205_ct2`, `ece_2205_ct3`, `ece_2205_ct4`, `ece_2205_att`, `ece_2205_exam`, `ece_2213_ct1`, `ece_2213_ct2`, `ece_2213_ct3`, `ece_2213_ct4`, `ece_2213_att`, `ece_2213_exam`, `ece_2215_ct1`, `ece_2215_ct2`, `ece_2215_ct3`, `ece_2215_ct4`, `ece_2215_att`, `ece_2215_exam`, `math_2217_ct1`, `math_2217_ct2`, `math_2217_ct3`, `math_2217_ct4`, `math_2217_att`, `math_2217_exam`, `hum_2217_ct1`, `hum_2217_ct2`, `hum_2217_ct3`, `hum_2217_ct4`, `hum_2217_att`, `hum_2217_exam`, `ece_2206_re`, `ece_2206_att`, `ece_2206_quiz`, `ece_2206_bv`, `ece_2214_re`, `ece_2214_att`, `ece_2214_quiz`, `ece_2214_bv`, `ece_2216_re`, `ece_2216_att`, `ece_2216_quiz`, `ece_2216_bv`, `ece_2200_score`) VALUES ('$roll', '$ece_2205_ct1', '$ece_2205_ct2', '$ece_2205_ct3', '$ece_2205_ct4', '$ece_2205_att', '$ece_2205_exam', '$ece_2213_ct1', '$ece_2213_ct2', '$ece_2213_ct3', '$ece_2213_ct4', '$ece_2213_att', '$ece_2213_exam', '$ece_2215_ct1', '$ece_2215_ct2', '$ece_2215_ct3', '$ece_2215_ct4', '$ece_2215_att', '$ece_2215_exam', '$math_2217_ct1', '$math_2217_ct2', '$math_2217_ct3', '$math_2217_ct4', '$math_2217_att', '$math_2217_exam', '$hum_2217_ct1', '$hum_2217_ct2', '$hum_2217_ct3', '$hum_2217_ct4', '$hum_2217_att', '$hum_2217_exam', '$ece_2206_re', '$ece_2206_att', '$ece_2206_quiz', '$ece_2206_bv', '$ece_2214_re', '$ece_2214_att', '$ece_2214_quiz', '$ece_2214_bv', '$ece_2216_re', '$ece_2216_att', '$ece_2216_quiz', '$ece_2216_bv', '$ece_2200_score')";




  $result = mysqli_query($link, $query);

  if($result){
   $success = "Data Insertion Successful!";
   header('location: index.php?page=resultdisp'); 
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
               <input type="text" name="roll" placeholder="Roll No."  class="form-control" required="" >
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
               <label type="text" name="" placeholder="ECE 2205" class="form-control">ECE 2205</label>
               </td>
               <td>
               <input type="text" name="ece_2205_ct1" placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2205_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2205_ct3" placeholder="CT-3"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2205_ct4" placeholder="CT-4"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2205_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2205_exam" placeholder="Exam" class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 2213"  class="form-control">ECE 2213</label>
               </td>
               <td>
               <input type="text" name="ece_2213_ct1" placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2213_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2213_ct3" placeholder="CT-3"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2213_ct4" placeholder="CT-4"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2213_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2213_exam" placeholder="Exam"  class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 2215"  class="form-control">ECE 2215</label>
               </td>
               <td>
               <input type="text" name="ece_2215_ct1" placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2215_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2215_ct3" placeholder="CT-3" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2215_ct4" placeholder="CT-4" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2215_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2215_exam" placeholder="Exam" class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <th>
               <label type="text" name=" " placeholder="Math 2217"  class="form-control">Math 2217</label>
               </th>
               <td>
               <input type="text" name="math_2217_ct1"  placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="math_2217_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="math_2217_ct3" placeholder="CT-3" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="math_2217_ct4" placeholder="CT-4" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="math_2217_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="math_2217_exam" placeholder="Exam" class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <td>
               <label type="text" name=" " placeholder="Hum 2217" class="form-control">Hum 2217</label>
               </td>
               <td>
               <input type="text" name="hum_2217_ct1" placeholder="CT-1" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="hum_2217_ct2" placeholder="CT-2" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="hum_2217_ct3" placeholder="CT-3" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="hum_2217_ct4" placeholder="CT-4" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="hum_2217_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="hum_2217_exam" placeholder="Exam" class="form-control" required="" >
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
               <label type="text" name="" placeholder="ECE 2206" class="form-control">ECE 2206</label>
               </td>
               <td>
               <input type="text" name="ece_2206_re" placeholder="Report" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2206_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2206_quiz" placeholder="Quiz"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2206_bv" placeholder="Board Viva" class="form-control" required="" >
               </td>
            </tr>
            
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 2214" class="form-control">ECE 2214</label>
               </td>
               <td>
               <input type="text" name="ece_2214_re" placeholder="Report"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2214_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2214_quiz" placeholder="Quiz"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2214_bv" placeholder="Board Viva" class="form-control" required="" >
               </td>
            </tr>
            
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 2216"  class="form-control">ECE 2216</label>
               </td>
               <td>
               <input type="text" name="ece_2216_re" placeholder="Report" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2216_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2216_quiz" placeholder="Quiz"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2216_bv" placeholder="Board Viva"  class="form-control" required="" >
               </td>
            </tr>
            
          </tbody>




          <thead>
              <tr>

              <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px); margin-top:25px;" for="Roll">Project</label>
               </th>

              <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="Roll">Score</label>
               </th>

              </tr>
          </thead>

          <tbody>
              <tr>

              <td>
               <label type="text" name="" placeholder="ECE 2200"  class="form-control">ECE 2200</label>
               </td>

              <td>
               <input type="text" name="ece_2200_score" placeholder="Score"  class="form-control" required="" >
               </td>

              </tr>
          </tbody>


        </table>

        <div style="margin-top:20px; margin-bottom:35px;" class="form-group">
          <input style="height:32px;" type="submit" value="Submit" name="semester_22insert" class="btn btn-primary">
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