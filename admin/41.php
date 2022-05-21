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

  <title>4th Year Odd Semester</title>
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

if(isset($_POST['semester_31insert'])){

  $roll41 = $_POST['roll41'];


  $ece_4109_ct1 = $_POST['ece_4109_ct1'];
  $ece_4109_ct2 = $_POST['ece_4109_ct2'];
  $ece_4109_ct3 = $_POST['ece_4109_ct3'];
  $ece_4109_ct4 = $_POST['ece_4109_ct4'];
  $ece_4109_att = $_POST['ece_4109_att'];
  $ece_4109_exam = $_POST['ece_4109_exam'];
  $ece_4123_ct1 = $_POST['ece_4123_ct1'];
  $ece_4123_ct2 = $_POST['ece_4123_ct2'];
  $ece_4123_ct3 = $_POST['ece_4123_ct3'];
  $ece_4123_ct4 = $_POST['ece_4123_ct4'];
  $ece_4123_att = $_POST['ece_4123_att'];
  $ece_4123_exam = $_POST['ece_4123_exam'];
  $ece_4121_ct1 = $_POST['ece_4121_ct1'];
  $ece_4121_ct2 = $_POST['ece_4121_ct2'];
  $ece_4121_ct3 = $_POST['ece_4121_ct3'];
  $ece_4121_ct4 = $_POST['ece_4121_ct4'];
  $ece_4121_att = $_POST['ece_4121_att'];
  $ece_4121_exam = $_POST['ece_4121_exam'];
  $ece_41opt1_ct1 = $_POST['ece_41opt1_ct1'];
  $ece_41opt1_ct2 = $_POST['ece_41opt1_ct2'];
  $ece_41opt1_ct3 = $_POST['ece_41opt1_ct3'];
  $ece_41opt1_ct4 = $_POST['ece_41opt1_ct4'];
  $ece_41opt1_att = $_POST['ece_41opt1_att'];
  $ece_41opt1_exam = $_POST['ece_41opt1_exam'];
  $ece_41opt2_ct1 = $_POST['ece_41opt2_ct1'];
  $ece_41opt2_ct2 = $_POST['ece_41opt2_ct2'];
  $ece_41opt2_ct3 = $_POST['ece_41opt2_ct3'];
  $ece_41opt2_ct4 = $_POST['ece_41opt2_ct4'];
  $ece_41opt2_att = $_POST['ece_41opt2_att'];
  $ece_41opt2_exam = $_POST['ece_41opt2_exam'];

  

  $ece_4124_re = $_POST['ece_4124_re'];
  $ece_4124_att = $_POST['ece_4124_att'];
  $ece_4124_quiz = $_POST['ece_4124_quiz'];
  $ece_4124_bv = $_POST['ece_4124_bv'];
  $ece_41opt1_re = $_POST['ece_41opt1_re'];
  $ece_41opt1_attlab = $_POST['ece_41opt1_attlab'];
  $ece_41opt1_quiz = $_POST['ece_41opt1_quiz'];
  $ece_41opt1_bv = $_POST['ece_41opt1_bv'];
  $ece_41opt2_re = $_POST['ece_41opt2_re'];
  $ece_41opt2_attlab = $_POST['ece_41opt2_attlab'];
  $ece_41opt2_quiz = $_POST['ece_41opt2_quiz'];
  $ece_41opt2_bv = $_POST['ece_41opt2_bv'];
  
  

  $ece_4100_ind = $_POST['ece_4100_ind'];


  $ece_4122_sem = $_POST['ece_4122_sem'];


  $ece_4000_pro1 = $_POST['ece_4000_pro1'];
 
  
  $query = "INSERT INTO `semester_41`(`roll41`, `ece_4109_ct1`, `ece_4109_ct2`, `ece_4109_ct3`, `ece_4109_ct4`, `ece_4109_att`, `ece_4109_exam`, `ece_4123_ct1`, `ece_4123_ct2`, `ece_4123_ct3`, `ece_4123_ct4`, `ece_4123_att`, `ece_4123_exam`, `ece_4121_ct1`, `ece_4121_ct2`, `ece_4121_ct3`, `ece_4121_ct4`, `ece_4121_att`, `ece_4121_exam`, `ece_41opt1_ct1`, `ece_41opt1_ct2`, `ece_41opt1_ct3`, `ece_41opt1_ct4`, `ece_41opt1_att`, `ece_41opt1_exam`, `ece_41opt2_ct1`, `ece_41opt2_ct2`, `ece_41opt2_ct3`, `ece_41opt2_ct4`, `ece_41opt2_att`, `ece_41opt2_exam`, `ece_4124_re`, `ece_4124_att`, `ece_4124_quiz`, `ece_4124_bv`, `ece_41opt1_re`, `ece_41opt1_attlab`, `ece_41opt1_quiz`, `ece_41opt1_bv`, `ece_41opt2_re`, `ece_41opt2_attlab`, `ece_41opt2_quiz`, `ece_41opt2_bv`, `ece_4100_ind`, `ece_4122_sem`, `ece_4000_pro1`) VALUES ('$roll41', '$ece_4109_ct1', '$ece_4109_ct2', '$ece_4109_ct3', '$ece_4109_ct4', '$ece_4109_att', '$ece_4109_exam', '$ece_4123_ct1', '$ece_4123_ct2', '$ece_4123_ct3', '$ece_4123_ct4', '$ece_4123_att', '$ece_4123_exam', '$ece_4121_ct1', '$ece_4121_ct2', '$ece_4121_ct3', '$ece_4121_ct4', '$ece_4121_att', '$ece_4121_exam', '$ece_41opt1_ct1', '$ece_41opt1_ct2', '$ece_41opt1_ct3', '$ece_41opt1_ct4', '$ece_41opt1_att', '$ece_41opt1_exam', '$ece_41opt2_ct1', '$ece_41opt2_ct2', '$ece_41opt2_ct3', '$ece_41opt2_ct4', '$ece_41opt2_att', '$ece_41opt2_exam', '$ece_4124_re', '$ece_4124_att', '$ece_4124_quiz', '$ece_4124_bv', '$ece_41opt1_re', '$ece_41opt1_attlab', '$ece_41opt1_quiz', '$ece_41opt1_bv', '$ece_41opt2_re', '$ece_41opt2_attlab', '$ece_41opt2_quiz', '$ece_41opt2_bv', '$ece_4100_ind', '$ece_4122_sem', '$ece_4000_pro1')";




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
               <input type="text" name="roll41" placeholder="Roll No."  class="form-control" required="" >
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
               <label type="text" name="" placeholder="ECE 4109" class="form-control">ECE 4109</label>
               </td>
               <td>
               <input type="text" name="ece_4109_ct1" placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4109_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4109_ct3" placeholder="CT-3"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4109_ct4" placeholder="CT-4"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4109_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4109_exam" placeholder="Exam" class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 4123"  class="form-control">ECE 4123</label>
               </td>
               <td>
               <input type="text" name="ece_4123_ct1" placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4123_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4123_ct3" placeholder="CT-3"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4123_ct4" placeholder="CT-4"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4123_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4123_exam" placeholder="Exam"  class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 4121"  class="form-control">ECE 4121</label>
               </td>
               <td>
               <input type="text" name="ece_4121_ct1" placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4121_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4121_ct3" placeholder="CT-3" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4121_ct4" placeholder="CT-4" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4121_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4121_exam" placeholder="Exam" class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <th>
               <label type="text" name=" " placeholder="ECE 41 Optional I"  class="form-control">ECE 41 Optional I</label>
               </th>
               <td>
               <input type="text" name="ece_41opt1_ct1"  placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt1_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt1_ct3" placeholder="CT-3" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt1_ct4" placeholder="CT-4" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt1_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt1_exam" placeholder="Exam" class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 41 Optional II" class="form-control">ECE 41 Optional II</label>
               </td>
               <td>
               <input type="text" name="ece_41opt2_ct1" placeholder="CT-1" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt2_ct2" placeholder="CT-2" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt2_ct3" placeholder="CT-3" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt2_ct4" placeholder="CT-4" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt2_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt2_exam" placeholder="Exam" class="form-control" required="" >
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
               <label type="text" name="" placeholder="ECE 4124" class="form-control">ECE 4124</label>
               </td>
               <td>
               <input type="text" name="ece_4124_re" placeholder="Report" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4124_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4124_quiz" placeholder="Quiz"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_4124_bv" placeholder="Board Viva" class="form-control" required="" >
               </td>
            </tr>
            
            <tr>
               <td>
               <label style="height: 50px;" type="text" name=" " placeholder="ECE 41 Optional I Sessional" class="form-control">ECE 41 Optional I Sessional</label>
               </td>
               <td>
               <input type="text" name="ece_41opt1_re" placeholder="Report"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt1_attlab" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt1_quiz" placeholder="Quiz"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt1_bv" placeholder="Board Viva" class="form-control" required="" >
               </td>
            </tr>
            
            <tr>
               <td>
               <label style="height: 50px;" type="text" name=" " placeholder="ECE 41 Optional II Sessional" class="form-control">ECE 41 Optional II Sessional</label>
               </td>
               <td>
               <input type="text" name="ece_41opt2_re" placeholder="Report" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt2_attlab" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt2_quiz" placeholder="Quiz"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_41opt2_bv" placeholder="Board Viva"  class="form-control" required="" >
               </td>
            </tr>
            
          </tbody>




          <thead>
              <tr>

              <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px); margin-top:35px;" for="Roll">Industrial Training</label>
               </th>

              <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="Roll">Evaulation</label>
               </th>

              </tr>
          </thead>

          <tbody>
              <tr>

              <td>
               <label type="text" name="" placeholder="ECE 4100"  class="form-control">ECE 4100</label>
               </td>

              <td>
               <input type="text" name="ece_4100_ind" placeholder="Evaluation"  class="form-control" required="" >
               </td>

              </tr>
          </tbody>



          <thead>
              <tr>

              <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px); margin-top:35px;" for="Roll">Seminar</label>
               </th>

              <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="Roll">Score</label>
               </th>

              </tr>
          </thead>

          <tbody>
              <tr>

              <td>
               <label type="text" name="" placeholder="ECE 4122"  class="form-control">ECE 4122</label>
               </td>

              <td>
               <input type="text" name="ece_4122_sem" placeholder="Score"  class="form-control" required="" >
               </td>

              </tr>
          </tbody>



          <thead>
              <tr>

              <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px); margin-top:35px;" for="Roll">Thesis/Project-I</label>
               </th>

              <th scope="col">
               <label style="font-size:18px; font-weight:550; transform:translateY(-5px);" for="Roll">Score</label>
               </th>

              </tr>
          </thead>

          <tbody>
              <tr>

              <td>
               <label type="text" name="" placeholder="ECE 4000"  class="form-control">ECE 4000</label>
               </td>

              <td>
               <input type="text" name="ece_4000_pro1" placeholder="Score"  class="form-control" required="" >
               </td>

              </tr>
          </tbody>


        </table>

        <div style="margin-top:20px; margin-bottom:35px;" class="form-group">
          <input style="height:32px;" type="submit" value="Submit" name="semester_31insert" class="btn btn-primary">
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