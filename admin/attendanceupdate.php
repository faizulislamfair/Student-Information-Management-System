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

  <title>Attendance System</title>
<!-- Bootstrap -->

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

label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}

.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    margin-top: 10px;
    text-align: center;
}

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
  

.container .jumbotron, .container-fluid .jumbotron {
    margin-top: 35px;
    transform: translateX(-30px);
    width: 1349px;
    height: 380px;
    border-radius: 5px;
    background-color: #e9eceffa;
    color: inherit;
}

.box, .box:active, .box:visited{
    padding: 20px;
    text-align: center;
    background-color: #fff;
    font-size: 25px;
    width: 220px;
    height: 110px;
    margin: 0;
    border: 1px #fff;
    border-radius: 10px;
    box-shadow: 8px 10px 25px -6px rgba(0,0,0,0.62); 
    -webkit-box-shadow: 8px 10px 25px -6px rgba(0,0,0,0.62);
    transition: 0.2s;
}

.box a:hover{
    color: #fff;
    transition: 0.2s;
 }

.box:hover{
    background-color: #2887e6;
    transition: 0.2s;
}

.box:hover a{
    display: block;
    height: 100px;
    color: #fff;
    transition: 0.2s;
}

.btn-primary, .btn-primary:active, .btn-primary:visited{
    width: 80px;
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
    width: 95px;
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


</style>


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

$roll = base64_decode($_GET['Roll']);
$db_datas = mysqli_query($link, "SELECT * FROM `attendance` WHERE `Roll` = '$roll'");
$db_row = mysqli_fetch_assoc($db_datas);


if(isset($_POST['attendanceupdate'])){

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


    $query = "UPDATE `attendance` SET `d_one`='$d_one',`d_two`='$d_two',`d_three`='$d_three',`d_four`='$d_four', `d_five`='$d_five', `d_six`='$d_six',`d_seven`= '$d_seven', `d_eight`='$d_eight', `d_nine`='$d_nine', `d_ten`='$d_ten', `d_eleven`='$d_eleven', `d_twelve`='$d_twelve', `d_thirteen`='$d_thirteen', `d_fourteen`='$d_fourteen', `d_fifteen`='$d_fifteen', `d_sixteen`='$d_sixteen', `d_seventeen`='$d_seventeen', `d_eighteen`='$d_eighteen', `d_nineteen`='$d_nineteen', `d_twenty`='$d_twenty', `d_twentyone`='$d_twentyone', `d_twentytwo`='$d_twentytwo', `d_twentythree`='$d_twentythree', `d_twentyfour`='$d_twentyfour', `d_twentyfive`='$d_twentyfive', `d_twentysix`='$d_twentysix', `d_twentyseven`='$d_twentyseven', `d_twentyeight`='$d_twentyeight', `d_twentynine`='$d_twentynine', `d_thirty`='$d_thirty', `d_thirtyone`='$d_thirtyone', `d_thirtytwo`='$d_thirtytwo', `d_thirtythree`='$d_thirtythree', `d_thirtyfour`='$d_thirtyfour', `d_thirtyfive`='$d_thirtyfive', `d_thirtysix`='$d_thirtysix', `d_thirtyseven`='$d_thirtyseven', `d_thirtyeight`='$d_thirtyeight', `d_thirtynine`='$d_thirtynine' WHERE `Roll` = '$roll'";

    $result = mysqli_query($link, $query);
  

  if($result){
    // header('location: attendancedisplay.php');
  }

}


?>

<div style="margin-top:75px;" class="jumbotron jumbotron-fluid">

  <div class="container">

  <div style="margin-left: 175px; margin-top:25px;" class="row">
   <div class="col-sm-4 offset-2">
     <form action="" method="POST" enctype="multipart/form-data">

        <table class="table table-striped table-borderless">
  <thead style="transform: translateY(15px);">
    <tr>
      <th scope="col">
      <label style="width:100px; text-align:center;" for="name">Roll</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;" for="name">Course</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-1</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-2</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-3</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-4</label>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
      <input style="width:100px; text-align:center;" name="Roll" value="<?= $db_row['Roll'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="Course" value="<?= $db_row['Course'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="d_one" value="<?= $db_row['d_one'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_two" value="<?= $db_row['d_two'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="d_three" value="<?= $db_row['d_three'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_four" value="<?= $db_row['d_four'] ?>" >
      </td>
      </tr>
   </tbody>


   <thead style="transform: translateY(15px);">
   <tr>
   <th scope="col">
      <label style="width:100px; text-align:center;">Day-5</label>
      </th>
	  <th scope="col">
      <label style="width:100px; text-align:center;">Day-6</label>
      </th>
   <th scope="col">
      <label style="width:100px; text-align:center;">Day-7</label>
      </th>
	  <th scope="col">
      <label style="width:100px; text-align:center;">Day-8</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-9</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-10</label>
   </tr>
   </thead>
   <tbody>
     <tr>
     <td>
      <input style="width:100px; text-align:center;" name="d_five" value="<?= $db_row['d_five'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_six" value="<?= $db_row['d_six'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="d_seven" value="<?= $db_row['d_seven'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_eight" value="<?= $db_row['d_eight'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="d_nine" value="<?= $db_row['d_nine'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_ten" value="<?= $db_row['d_ten'] ?>" >
      </td>
     </tr>
   </tbody>

   


   <thead style="transform: translateY(15px);">
   <tr>
   <th scope="col">
      <label style="width:100px; text-align:center;">Day-11</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-12</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-13</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-14</label>
      </th>
	  <th scope="col">
      <label style="width:100px; text-align:center;">Day-15</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-16</label>
      </th>
   </tr>
   </thead>
   <tbody>
     <tr>
     <td>
      <input style="width:100px; text-align:center;"  name="d_eleven" value="<?= $db_row['d_eleven'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_twelve" value="<?= $db_row['d_twelve'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="d_thirteen" value="<?= $db_row['d_thirteen'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_fourteen" value="<?= $db_row['d_fourteen'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="d_fifteen" value="<?= $db_row['d_fifteen'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_sixteen" value="<?= $db_row['d_sixteen'] ?>" >
      </td>
     </tr>
   </tbody>   




<thead style="transform: translateY(15px);">
<tr>
<th scope="col">
      <label style="width:100px; text-align:center;">Day-17</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-18</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-19</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-20</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-21</label>
      </th>
	  <th scope="col">
      <label style="width:100px; text-align:center;">Day-22</label>
      </th>
</tr>
</thead>
<tbody>
<tr>
<td>
      <input style="width:100px; text-align:center;" name="d_seventeen" value="<?= $db_row['d_seventeen'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_eighteen" value="<?= $db_row['d_eighteen'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="d_nineteen" value="<?= $db_row['d_nineteen'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_twenty" value="<?= $db_row['d_twenty'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="d_twentyone" value="<?= $db_row['d_twentyone'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_twentytwo" value="<?= $db_row['d_twentytwo'] ?>" >
      </td>
</tr>
</tbody>
      




      <thead style="transform: translateY(15px);">
      <tr>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-23</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-24</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-25</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-26</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-27</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-28</label>
      </th>
      </tr>
      </thead>
      <tbody>
<tr>
<td>
      <input style="width:100px; text-align:center;"  name="d_twentythree" value="<?= $db_row['d_twentythree'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_twentyfour" value="<?= $db_row['d_twentyfour'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="d_twentyfive" value="<?= $db_row['d_twentyfive'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_twentysix" value="<?= $db_row['d_twentysix'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="d_twentyseven" value="<?= $db_row['d_twentyseven'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_twentyeight" value="<?= $db_row['d_twentyeight'] ?>" >
      </td>
</tr>
</tbody>



<thead style="transform: translateY(15px);">
<tr>
<th scope="col">
      <label style="width:100px; text-align:center;">Day-29</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-30</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-31</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-32</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-33</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-34</label>
      </th>
</tr>
</thead>
<tbody>
<tr>
<td>
      <input style="width:100px; text-align:center;" name="d_twentynine" value="<?= $db_row['d_twentynine'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_thirty" value="<?= $db_row['d_thirty'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="d_thirtyone" value="<?= $db_row['d_thirtyone'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_thirtytwo" value="<?= $db_row['d_thirtytwo'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="d_thirtythree" value="<?= $db_row['d_thirtythree'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_thirtyfour" value="<?= $db_row['d_thirtyfour'] ?>" >
      </td>
</tr>
</tbody>



<thead style="transform: translateY(15px);">
<tr>
<th scope="col">
      <label style="width:100px; text-align:center;">Day-35</label>
      </th>
	  <th scope="col">
      <label style="width:100px; text-align:center;">Day-36</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-37</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-38</label>
      </th>
      <th scope="col">
      <label style="width:100px; text-align:center;">Day-39</label>
      </th>
</tr>
</thead>
  <tbody>
      <tr>
      <td>
      <input style="width:100px; text-align:center;" name="d_thirtyfive" value="<?= $db_row['d_thirtyfive'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_thirtysix" value="<?= $db_row['d_thirtysix'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="d_thirtyseven" value="<?= $db_row['d_thirtyseven'] ?>" >
      </td>
    <td>
      <input style="width:100px; text-align:center;" name="d_thirtyeight" value="<?= $db_row['d_thirtyeight'] ?>" >
      </td>
      <td>
      <input style="width:100px; text-align:center;" name="d_thirtynine" value="<?= $db_row['d_thirtynine'] ?>" >
      </td>
      </tr>
  </tbody>

</table>

</div>
</div>

       <div style="margin-top:15px; margin-left:185px; height:35px;" class="form-group">
          <input type="submit" value="Update" name="attendanceupdate" class="btn btn-primary">
        </div>

     </form>
   </div>
</div>

<a href="attendancedisplay.php"><button style="margin-left:850px; transform: translateY(-125px);" class="btn btn-primary">Back</button></a>

   
<footer class="footer-area">
			<p>Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
		</footer>
</body>
</html>
