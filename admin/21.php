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

  <title>2nd Year Odd Semester</title>
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

if(isset($_POST['semester_21insert'])){

  $roll = $_POST['roll'];


  $ece_2103_ct1 = $_POST['ece_2103_ct1'];
  $ece_2103_ct2 = $_POST['ece_2103_ct2'];
  $ece_2103_ct3 = $_POST['ece_2103_ct3'];
  $ece_2103_ct4 = $_POST['ece_2103_ct4'];
  $ece_2103_att = $_POST['ece_2103_att'];
  $ece_2103_exam = $_POST['ece_2103_exam'];
  $ece_2107_ct1 = $_POST['ece_2107_ct1'];
  $ece_2107_ct2 = $_POST['ece_2107_ct2'];
  $ece_2107_ct3 = $_POST['ece_2107_ct3'];
  $ece_2107_ct4 = $_POST['ece_2107_ct4'];
  $ece_2107_att = $_POST['ece_2107_att'];
  $ece_2107_exam = $_POST['ece_2107_exam'];
  $ece_2111_ct1 = $_POST['ece_2111_ct1'];
  $ece_2111_ct2 = $_POST['ece_2111_ct2'];
  $ece_2111_ct3 = $_POST['ece_2111_ct3'];
  $ece_2111_ct4 = $_POST['ece_2111_ct4'];
  $ece_2111_att = $_POST['ece_2111_att'];
  $ece_2111_exam = $_POST['ece_2111_exam'];
  $math_2117_ct1 = $_POST['math_2117_ct1'];
  $math_2117_ct2 = $_POST['math_2117_ct2'];
  $math_2117_ct3 = $_POST['math_2117_ct3'];
  $math_2117_ct4 = $_POST['math_2117_ct4'];
  $math_2117_att = $_POST['math_2117_att'];
  $math_2117_exam = $_POST['math_2117_exam'];
  $chem_2117_ct1 = $_POST['chem_2117_ct1'];
  $chem_2117_ct2 = $_POST['chem_2117_ct2'];
  $chem_2117_ct3 = $_POST['chem_2117_ct3'];
  $chem_2117_ct4 = $_POST['chem_2117_ct4'];
  $chem_2117_att = $_POST['chem_2117_att'];
  $chem_2117_exam = $_POST['chem_2117_exam'];
  

  $ece_2104_re = $_POST['ece_2104_re'];
  $ece_2104_att = $_POST['ece_2104_att'];
  $ece_2104_quiz = $_POST['ece_2104_quiz'];
  $ece_2104_bv = $_POST['ece_2104_bv'];
  $ece_2108_re = $_POST['ece_2108_re'];
  $ece_2108_att = $_POST['ece_2108_att'];
  $ece_2108_quiz = $_POST['ece_2108_quiz'];
  $ece_2108_bv = $_POST['ece_2108_bv'];
  $chem_2118_re = $_POST['chem_2118_re'];
  $chem_2118_att = $_POST['chem_2118_att'];
  $chem_2118_quiz = $_POST['chem_2118_quiz'];
  $chem_2118_bv = $_POST['chem_2118_bv'];
  

  $ece_2100_score = $_POST['ece_2100_score'];
 
  
  $query = "INSERT INTO `semester_21`(`roll`, `ece_2103_ct1`, `ece_2103_ct2`, `ece_2103_ct3`, `ece_2103_ct4`, `ece_2103_att`, `ece_2103_exam`, `ece_2107_ct1`, `ece_2107_ct2`, `ece_2107_ct3`, `ece_2107_ct4`, `ece_2107_att`, `ece_2107_exam`, `ece_2111_ct1`, `ece_2111_ct2`, `ece_2111_ct3`, `ece_2111_ct4`, `ece_2111_att`, `ece_2111_exam`, `math_2117_ct1`, `math_2117_ct2`, `math_2117_ct3`, `math_2117_ct4`, `math_2117_att`, `math_2117_exam`, `chem_2117_ct1`, `chem_2117_ct2`, `chem_2117_ct3`, `chem_2117_ct4`, `chem_2117_att`, `chem_2117_exam`, `ece_2104_re`, `ece_2104_att`, `ece_2104_quiz`, `ece_2104_bv`, `ece_2108_re`, `ece_2108_att`, `ece_2108_quiz`, `ece_2108_bv`, `chem_2118_re`, `chem_2118_att`, `chem_2118_quiz`, `chem_2118_bv`, `ece_2100_score`) VALUES ('$roll', '$ece_2103_ct1', '$ece_2103_ct2', '$ece_2103_ct3', '$ece_2103_ct4', '$ece_2103_att', '$ece_2103_exam', '$ece_2107_ct1', '$ece_2107_ct2', '$ece_2107_ct3', '$ece_2107_ct4', '$ece_2107_att', '$ece_2107_exam', '$ece_2111_ct1', '$ece_2111_ct2', '$ece_2111_ct3', '$ece_2111_ct4', '$ece_2111_att', '$ece_2111_exam', '$math_2117_ct1', '$math_2117_ct2', '$math_2117_ct3', '$math_2117_ct4', '$math_2117_att', '$math_2117_exam', '$chem_2117_ct1', '$chem_2117_ct2', '$chem_2117_ct3', '$chem_2117_ct4', '$chem_2117_att', '$chem_2117_exam', '$ece_2104_re', '$ece_2104_att', '$ece_2104_quiz', '$ece_2104_bv', '$ece_2108_re', '$ece_2108_att', '$ece_2108_quiz', '$ece_2108_bv', '$chem_2118_re', '$chem_2118_att', '$chem_2118_quiz', '$chem_2118_bv', '$ece_2100_score')";




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
               <label type="text" name="" placeholder="ECE 2103" class="form-control">ECE 2103</label>
               </td>
               <td>
               <input type="text" name="ece_2103_ct1" placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2103_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2103_ct3" placeholder="CT-3"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2103_ct4" placeholder="CT-4"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2103_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2103_exam" placeholder="Exam" class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 2107"  class="form-control">ECE 2107</label>
               </td>
               <td>
               <input type="text" name="ece_2107_ct1" placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2107_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2107_ct3" placeholder="CT-3"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2107_ct4" placeholder="CT-4"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2107_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2107_exam" placeholder="Exam"  class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 2111"  class="form-control">ECE 2111</label>
               </td>
               <td>
               <input type="text" name="ece_2111_ct1" placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2111_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2111_ct3" placeholder="CT-3" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2111_ct4" placeholder="CT-4" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2111_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2111_exam" placeholder="Exam" class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <th>
               <label type="text" name=" " placeholder="Math 2117"  class="form-control">Math 2117</label>
               </th>
               <td>
               <input type="text" name="math_2117_ct1"  placeholder="CT-1"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="math_2117_ct2" placeholder="CT-2"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="math_2117_ct3" placeholder="CT-3" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="math_2117_ct4" placeholder="CT-4" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="math_2117_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="math_2117_exam" placeholder="Exam" class="form-control" required="" >
               </td>
            </tr>
            <tr>
               <td>
               <label type="text" name=" " placeholder="Chem 2117" class="form-control">Chem 2117</label>
               </td>
               <td>
               <input type="text" name="chem_2117_ct1" placeholder="CT-1" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="chem_2117_ct2" placeholder="CT-2" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="chem_2117_ct3" placeholder="CT-3" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="chem_2117_ct4" placeholder="CT-4" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="chem_2117_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="chem_2117_exam" placeholder="Exam" class="form-control" required="" >
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
               <label type="text" name="" placeholder="ECE 2104" class="form-control">ECE 2104</label>
               </td>
               <td>
               <input type="text" name="ece_2104_re" placeholder="Report" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2104_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2104_quiz" placeholder="Quiz"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2104_bv" placeholder="Board Viva" class="form-control" required="" >
               </td>
            </tr>
            
            <tr>
               <td>
               <label type="text" name=" " placeholder="ECE 2108" class="form-control">ECE 2108</label>
               </td>
               <td>
               <input type="text" name="ece_2108_re" placeholder="Report"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2108_att" placeholder="Attendance"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2108_quiz" placeholder="Quiz"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="ece_2108_bv" placeholder="Board Viva" class="form-control" required="" >
               </td>
            </tr>
            
            <tr>
               <td>
               <label type="text" name=" " placeholder="Chem 2118"  class="form-control">Chem 2118</label>
               </td>
               <td>
               <input type="text" name="chem_2118_re" placeholder="Report" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="chem_2118_att" placeholder="Attendance" class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="chem_2118_quiz" placeholder="Quiz"  class="form-control" required="" >
               </td>
               <td>
               <input type="text" name="chem_2118_bv" placeholder="Board Viva"  class="form-control" required="" >
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
               <label type="text" name="" placeholder="ECE 2100"  class="form-control">ECE 2100</label>
               </td>

              <td>
               <input type="text" name="ece_2100_score" placeholder="Score"  class="form-control" required="" >
               </td>

              </tr>
          </tbody>


        </table>

        <div style="margin-top:20px; margin-bottom:35px;" class="form-group">
          <input style="height:32px;" type="submit" value="Submit" name="semester_21insert" class="btn btn-primary">
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