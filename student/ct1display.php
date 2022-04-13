<?php
session_start();
require_once './dbcon.php';
if(!isset($_SESSION['student_login'])){
     header('location: login.php');


}


?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  
  <link rel="stylesheet" type="text/css" href="../fonts/fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/btn.css">
  <title>SIMS</title>

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
    width: 80px;
    height: 38px;
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
    height: 38px;
}
 </style>


</head>

<body>

<header style="width:100%; height:80px; background: #2887e6;">
   </header>
  
    <br>

    <a style="float:right;" class="btn btn-primary" href="logout.php">Logout</a>
    <br> <br>
  



<?php


$db_sinfos = mysqli_query($link, "SELECT * FROM `student_marks1` ");
$rows = mysqli_fetch_all($db_sinfos, MYSQLI_ASSOC);
$number_of_rows = count($rows);

$eletrical_lowest=20;
$eletrical_highest=0;
$data_lowest=20;
$data_highest=0;
$tech_lowest=20;
$tech_highest=0;
$math_lowest=20;
$math_highest=0;
$chem_lowest=20;
$chem_highest=0;

foreach($rows as $row){
 if($row['Electrical_Machines'] > $eletrical_highest){
    $eletrical_highest = $row['Electrical_Machines'];
 }
 if($row['Electrical_Machines'] < $eletrical_lowest){
    $eletrical_lowest = $row['Electrical_Machines'];
 }
 if($row['Data_Structure_&_Algorithms'] > $data_highest){
    $data_highest = $row['Data_Structure_&_Algorithms'];
 }
 if($row['Data_Structure_&_Algorithms'] < $data_lowest){
  $data_lowest = $row['Data_Structure_&_Algorithms'];
}
 if($row['Digital_Techniques'] > $tech_highest){
    $tech_highest = $row['Digital_Techniques'];
 }
 if($row['Digital_Techniques'] < $tech_lowest){
    $tech_lowest = $row['Digital_Techniques'];
 }
 
 if($row['Mathematics'] > $math_highest){
    $math_highest = $row['Mathematics'];
 }
 if($row['Mathematics'] < $math_lowest){
    $math_lowest = $row['Mathematics'];
 }
 if($row['Chemistry'] > $chem_highest){
    $chem_highest = $row['Chemistry'];
 }
 if($row['Chemistry'] < $chem_lowest){
    $chem_lowest = $row['Chemistry'];
 }
 
 
}



?>




    <?php
     
     require_once 'dbcon.php';

    


      $result_ct = mysqli_query($link, "SELECT * FROM `student_marks1` WHERE `Roll` = ".$_SESSION['student_login']);

      if(mysqli_num_rows($result_ct) == 1){

        echo '<br> <br> 
        <div>
          <h3 style="text-align:center;">CT-1</h3>
        </div>';

        $row = mysqli_fetch_assoc($result_ct);
        ?>

    <div class="row">
      <div class="col-sm-6 col-sm offset-3">
        <table class="table table-bordered">

          <tr>
            <td>Roll No.</td>
            <td><?php echo $row['Roll']; ?></td>
          </tr>

          <tr>
            <td>Electrical Machines</td>
            <td>
              <?php echo $row['Electrical_Machines'] . ($eletrical_highest == $row['Electrical_Machines'] ? "( Highest )" : "" ) . (($eletrical_lowest == $row['Electrical_Machines'] && $eletrical_lowest!=$eletrical_highest) ? "( Lowest )" : "" );  ?>
            </td>
          </tr>


          <tr>
            <td>Data Structure & Algorithms</td>
            <td>
              <?php echo $row['Data_Structure_&_Algorithms'] . ($data_highest == $row['Data_Structure_&_Algorithms'] ? "( Highest )" : "" ) . (($data_lowest == $row['Data_Structure_&_Algorithms'] && $data_lowest!=$data_highest) ? "( Lowest )" : "" );  ?>
            </td>
          </tr>


          <tr>
            <td>Digital Techniques</td>
            <td>
              <?php echo $row['Digital_Techniques'] . ($tech_highest == $row['Digital_Techniques'] ? "( Highest )" : "" ) . (($tech_lowest == $row['Digital_Techniques'] && $tech_lowest!=$tech_highest) ? "( Lowest )" : "" );  ?>
            </td>
          </tr>

          <tr>
            <td>Mathematics</td>
            <td>
              <?php echo $row['Mathematics'] . ($math_highest == $row['Mathematics'] ? "( Highest )" : "" ) . (($math_lowest == $row['Mathematics'] && $math_lowest!=$math_highest) ? "( Lowest )" : "" );  ?>
            </td>
          </tr>

          <tr>
            <td>Chemistry</td>
            <td>
              <?php echo $row['Chemistry'] . ($chem_highest == $row['Chemistry'] ? "( Highest )" : "" ) . (($chem_lowest == $row['Chemistry'] && $chem_lowest!=$chem_highest) ? "( Lowest )" : "" );  ?>
            </td>
          </tr>


          </tr>


          <?php
  } 
?>


        </table>
      </div>
    </div>







  <footer style="width:100%; height:75px; background: #2887e6; bottom:0; text-align:center; margin-top:188px">
       <p style="color:white; padding-top:25px; font-size:14px;">Copyright &COPY; 2021 S.M. Faizul Islam Fair</p>
    </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>

</html>