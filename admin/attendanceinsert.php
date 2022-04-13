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
    width: 125px;
    background-color: #2155c5;
    color: white;
    border-radius: 15px;
    border:none;
    transition: 0.2s;
    font-weight: 450;
    padding-left: 15px;
    padding-right: 15px;
    height:32px;
}

.btn:hover, .btn-info:hover, .btn-primary:hover {
    width: 140px;
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

.container .jumbotron, .container-fluid .jumbotron {
    margin-top: 35px;
    transform: translateX(-30px);
    width: 1349px;
    height: 900px;
    border-radius: 5px;
    background-color: #e9eceffa;
    color: inherit;
}

  </style>


  <title>Attendance System</title>
</head>
<body>
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

if(isset($_POST['attendance'])){


  $roll = $_POST['Roll'];
  $course = $_POST['Course'];
  $d_one = $_POST['d_one'];
  $d_two = $_POST['d_two'];
  $d_three = $_POST['d_three'];
  $d_four = $_POST['d_four'];
  $d_five = $_POST['d_five'];
  $d_six = $_POST['d_six'];
  $d_seven = $_POST['d_seven'];
  $d_eight = $_POST['d_eight'];
  $d_nine = $_POST['d_nine'];
  $d_ten = $_POST['d_ten'];
  $d_eleven = $_POST['d_eleven'];
  $d_twelve = $_POST['d_twelve'];
  $d_thirteen = $_POST['d_thirteen'];
  $d_fourteen = $_POST['d_fourteen'];
  $d_fifteen = $_POST['d_fifteen'];
  $d_sixteen = $_POST['d_sixteen'];
  $d_seventeen = $_POST['d_seventeen'];
  $d_eighteen = $_POST['d_eighteen'];
  $d_nineteen = $_POST['d_nineteen'];
  $d_twenty = $_POST['d_twenty'];
  $d_twentyone = $_POST['d_twentyone'];
  $d_twentytwo = $_POST['d_twentytwo'];
  $d_twentythree = $_POST['d_twentythree'];
  $d_twentyfour = $_POST['d_twentyfour'];
  $d_twentyfive = $_POST['d_twentyfive'];
  $d_twentysix = $_POST['d_twentysix'];
  $d_twentyseven = $_POST['d_twentyseven'];
  $d_twentyeight = $_POST['d_twentyeight'];
  $d_twentynine = $_POST['d_twentynine'];
  $d_thirty = $_POST['d_thirty'];
  $d_thirtyone = $_POST['d_thirtyone'];
  $d_thirtytwo = $_POST['d_thirtytwo'];
  $d_thirtythree = $_POST['d_thirtythree'];
  $d_thirtyfour = $_POST['d_thirtyfour'];
  $d_thirtyfive = $_POST['d_thirtyfive'];
  $d_thirtysix = $_POST['d_thirtysix'];
  $d_thirtyseven = $_POST['d_thirtyseven'];
  $d_thirtyeight = $_POST['d_thirtyeight'];
  $d_thirtynine = $_POST['d_thirtynine'];
  
  
  $query = "INSERT INTO `attendance`(`Roll`, `Course`, `d_one`, `d_two`, `d_three`, `d_four`, `d_five`, `d_six`, `d_seven`, `d_eight`, `d_nine`, `d_ten`, `d_eleven`, `d_twelve`, `d_thirteen`, `d_fourteen`, `d_fifteen`, `d_sixteen`, `d_seventeen`, `d_eighteen`, `d_nineteen`, `d_twenty`, `d_twentyone`, `d_twentytwo`, `d_twentythree`, `d_twentyfour`, `d_twentyfive`, `d_twentysix`, `d_twentyseven`, `d_twentyeight`, `d_twentynine`, `d_thirty`, `d_thirtyone`, `d_thirtytwo`, `d_thirtythree`, `d_thirtyfour`, `d_thirtyfive`, `d_thirtysix`, `d_thirtyseven`, `d_thirtyeight`, `d_thirtynine`) VALUES ('$roll', '$course', '$d_one', '$d_two', '$d_three', '$d_four', '$d_five', '$d_six', '$d_seven', '$d_eight', '$d_nine', '$d_ten', '$d_eleven', '$d_twelve', '$d_thirteen', '$d_fourteen', '$d_fifteen', '$d_sixteen', '$d_seventeen', '$d_eighteen', '$d_nineteen', '$d_twenty', '$d_twentyone', '$d_twentytwo', '$d_twentythree', '$d_twentyfour', '$d_twentyfive', '$d_twentysix', '$d_twentyseven', '$d_twentyeight', '$d_twentynine', '$d_thirty', '$d_thirtyone', '$d_thirtytwo', '$d_thirtythree', '$d_thirtyfour', '$d_thirtyfive', '$d_thirtysix', '$d_thirtyseven', '$d_thirtyeight', '$d_thirtynine')";


  $result = mysqli_query($link, $query);


  if($result){
   $success = "Data Insertion Successful!";
   header('location: attendanceinsert.php'); 
  } else {
    $error = "Wrong!";
  }

}


?>

<div class="row">

   <?php if(isset($success)){ echo '<p class="alert alert-success col-sm-6">'.$success.'</p>';} ?>
   <?php if(isset($error)){ echo '<p class="alert alert-danger col-sm-6">'.$error.'</p>'; } ?>

</div>

<div class="jumbotron jumbotron-fluid">

 <div class="container">

<div class="row">
   <div class="col-sm-6 ">
     <form action="" method="POST" enctype="multipart/form-data">

     <table class="table table-stripe offset-5">
     <thead>
    <tr>
      <th scope="col">
      <label style="width:100px; text-align:center;" for="Roll"><h3>Roll No.</h3></label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;" for="Course"><h3>Course</h3></label>
      </th>
      </tr>
    </thead>
    <tbody>
    <tr>
      <td>
          <input style="width:100px; margin-left:10px;" type="int" name="Roll" placeholder="Roll" class="form-control" required="" >
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="text" name="Course" placeholder="Course-Title" class="form-control" required="" >
      </td>
     </tr>
     </tbody>  
     </table>

        <table class="table table-stripe offset-2">   
     <thead>
      <tr>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-1</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-2</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-3</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-4</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-5</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-6</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-7</label>
      </th> 
      <br>
    </tr>
  </thead>
  <tbody>
     <tr>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_one" placeholder="Day-1" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_two" placeholder="Day-2" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_three" placeholder="Day-3" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_four" placeholder="Day-4" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_five" placeholder="Day-5" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_six" placeholder="Day-6" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_seven" placeholder="Day-7" class="form-control">
      </td>
      <br>
    </tr>
  </tbody>  





<thead>
    <tr>
    <th scope="col">
      <label style="width:120px; text-align:center;">Day-8</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-9</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-10</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-11</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-12</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-13</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-14</label>
      </th>
    </tr>
 </thead>
 <tbody>
<tr>
<td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_eight" placeholder="Day-8" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_nine" placeholder="Day-9" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_ten" placeholder="Day-10" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_eleven" placeholder="Day-11" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_twelve" placeholder="Day-12" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_thirteen" placeholder="Day-13" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_fourteen" placeholder="Day-14" class="form-control">
      </td>
</tr>
</tbody>





<thead>
<tr>
<th scope="col">
      <label style="width:120px; text-align:center;">Day-15</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-16</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-17</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-18</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-19</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-20</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-21</label>
      </th>
</tr>
</thead>
<tbody>
<tr>
<td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_fifteen" placeholder="Day-15" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_sixteen" placeholder="Day-16" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_seventeen" placeholder="Day-17" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_eighteen" placeholder="Day-18" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_nineteen" placeholder="Day-19" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_twenty" placeholder="Day-20" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_twentyone" placeholder="Day-21" class="form-control">
      </td>
</tr>
</tbody>





<thead>
<tr>
<th scope="col">
      <label style="width:120px; text-align:center;">Day-22</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-23</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-24</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-25</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-26</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-27</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-28</label>
      </th>
</tr>
</thead>
<tbody>
<tr>
<td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_twentytwo" placeholder="Day-22" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_twentythree" placeholder="Day-23" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_twentyfour" placeholder="Day-24" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_twentyfive" placeholder="Day-25" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_twentysix" placeholder="Day-26" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_twentyseven" placeholder="Day-27" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_twentyeight" placeholder="Day-28" class="form-control">
      </td>
</tr>
</tbody>






<thead>
<tr>
<th scope="col">
      <label style="width:120px; text-align:center;">Day-29</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-30</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-31</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-32</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-33</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-34</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-35</label>
      </th>
</tr>
</thead>
<tbody>
<tr>
<td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_twentynine" placeholder="Day-29" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_thirty" placeholder="Day-30" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_thirtyone" placeholder="Day-31" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_thirtytwo" placeholder="Day-32" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_thirtythree" placeholder="Day-33" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_thirtyfour" placeholder="Day-34" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_thirtyfive" placeholder="Day-35" class="form-control">
      </td>
</tr>
</tbody>






<thead>
<tr>
<th scope="col">
      <label style="width:120px; text-align:center;">Day-36</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-37</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-38</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-39</label>
      </th>
</tr>
</thead>
<tbody>
<tr>
<td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_thirtysix" placeholder="Day-36" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_thirtyseven" placeholder="Day-37" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_thirtyeight" placeholder="Day-38" class="form-control">
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="int" name="d_thirtynine" placeholder="Day-39" class="form-control">
      </td>
</tr>
<tbody>


</table>
        <div style="margin-top:15px;" class="form-group">
          <input style="height:32px;" type="submit" value="Add" name="attendance" class="btn btn-primary">
        </div>

     </form>
   </div>
</div>

</div>
</div>

<a href="attendance.php"><button style="margin-left:1080px; transform: translateY(-130px);" class="btn btn-primary">Back</button></a>


<footer class="footer-area">
			<p>Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
		</footer>
</body>
</html>