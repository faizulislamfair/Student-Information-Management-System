<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>SIMS</title>
<!-- Bootstrap -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../fonts/fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.min.css">
<link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/btn.css">


<body>



 <!-- Result 1-1 Starts -->


 <div class="segment-area">
    <h3>1st Year Odd Semester Result</h3>
</div>


 <?php     

$db_11 = mysqli_query($link, "SELECT * FROM `semester_11` WHERE `roll11` = ".$_SESSION['student_login']);

while($row = mysqli_fetch_assoc($db_11)){ 

?>


   

<?php


           // theory ece 1101 starts

           $ct1_1101 = $row['ece_1101_ct1'];
           $ct2_1101 = $row['ece_1101_ct2'];
           $ct3_1101 = $row['ece_1101_ct3'];
           $ct4_1101 = $row['ece_1101_ct4'];
           $att1101 = $row['ece_1101_att'];
           $exam1101 = $row['ece_1101_exam'];


           if($ct1_1101==0){
               $avg_1101 = ($ct2_1101+$ct3_1101+$ct4_1101)/3;
           }
           else if($ct2_1101==0){
               $avg_1101 = ($ct1_1101+$ct3_1101+$ct4_1101)/3;
           }
           else if($ct3_1101==0){
               $avg_1101 = ($ct2_1101+$ct1_1101+$ct4_1101)/3;
           }
           else if($ct4_1101==0){
               $avg_1101 = ($ct2_1101+$ct3_1101+$ct1_1101)/3;
           }
           else if($ct1_1101==0 && $ct2_1101==0){
               $avg_1101 = ($ct3_1101+$ct4_1101)/3;
           }
           else if($ct1_1101==0 && $ct3_1101==0){
               $avg_1101 = ($ct2_1101+$ct4_1101)/3;
           }
           else if($ct1_1101==0 && $ct4_1101==0){
               $avg_1101 = ($ct2_1101+$ct3_1101)/3;
           }
           else if($ct2_1101==0 && $ct3_1101==0){
               $avg_1101 = ($ct1_1101+$ct4_1101)/3;
           }
           else if($ct2_1101==0 && $ct4_1101==0){
               $avg_1101 = ($ct1_1101+$ct3_1101)/3;
           }
           else if($ct3_1101==0 && $ct4_1101==0){
               $avg_1101 = ($ct1_1101+$ct2_1101)/3;
           }
           else if($ct1_1101==0 && $ct2_1101==0 && $ct3_1101==0){
               $avg_1101 = $ct4_1101/3;
           }
           else if($ct1_1101==0 && $ct2_1101==0 && $ct4_1101==0){
               $avg_1101 = $ct3_1101/3;
           }
           else if($ct1_1101==0 && $ct3_1101==0 && $ct4_1101==0){
               $avg_1101 = $ct2_1101/3;
           }
           else if($ct2_1101==0 && $ct3_1101==0 && $ct4_1101==0){
               $avg_1101 = $ct1_1101/3;
           }
           else if($ct1_1101==0 && $ct2_1101==0 && $ct3_1101==0 && $ct4_1101==0){
               $avg_1101 = 0;
           }
           else if(($ct1_1101 > $ct3_1101) && ($ct1_1101 > $ct4_1101) && ($ct2_1101 > $ct3_1101) && ($ct2_1101 > $ct4_1101) && ($ct3_1101 == $ct4_1101)){
               $avg_1101 = ($ct1_1101+$ct2_1101+$ct3_1101)/3;
           }
           else if(($ct1_1101 > $ct2_1101) && ($ct1_1101 > $ct4_1101) && ($ct3_1101 > $ct2_1101) && ($ct3_1101 > $ct4_1101) && ($ct2_1101 == $ct4_1101)){
               $avg_1101 = ($ct1_1101+$ct2_1101+$ct3_1101)/3;
           }
           else if(($ct1_1101 > $ct2_1101) && ($ct1_1101 > $ct3_1101) && ($ct4_1101 > $ct2_1101) && ($ct4_1101 > $ct3_1101) && ($ct2_1101 == $ct3_1101)){
               $avg_1101 = ($ct1_1101+$ct2_1101+$ct4_1101)/3;
           }
           else if(($ct2_1101 > $ct1_1101) && ($ct2_1101 > $ct4_1101) && ($ct3_1101 > $ct1_1101) && ($ct3_1101 > $ct4_1101) && ($ct1_1101 == $ct4_1101)){
               $avg_1101 = ($ct1_1101+$ct2_1101+$ct3_1101)/3;
           }
           else if(($ct2_1101 > $ct1_1101) && ($ct2_1101 > $ct3_1101) && ($ct4_1101 > $ct1_1101) && ($ct4_1101 > $ct3_1101) && ($ct1_1101 == $ct3_1101)){
               $avg_1101 = ($ct1_1101+$ct2_1101+$ct4_1101)/3;
           }
           else if(($ct3_1101 > $ct1_1101) && ($ct3_1101 > $ct2_1101) && ($ct4_1101 > $ct1_1101) && ($ct4_1101 > $ct2_1101) && ($ct1_1101 == $ct2_1101)){
               $avg_1101 = ($ct1_1101+$ct3_1101+$ct4_1101)/3;
           }
           else if(($ct1_1101 > $ct4_1101) && ($ct2_1101 > $ct4_1101) && ($ct3_1101 > $ct4_1101 )){
               $avg_1101 = ($ct1_1101+$ct2_1101+$ct3_1101)/3;
           }
           else if(($ct1_1101 > $ct3_1101) && ($ct2_1101 > $ct3_1101) && ($ct4_1101 > $ct3_1101 )){
               $avg_1101 = ($ct1_1101+$ct2_1101+$ct4_1101)/3;
           }
           else if(($ct1_1101 > $ct2_1101) && ($ct3_1101 > $ct2_1101) && ($ct4_1101 > $ct2_1101 )){
               $avg_1101 = ($ct1_1101+$ct3_1101+$ct4_1101)/3;
           }
           else if(($ct2_1101 > $ct1_1101) && ($ct3_1101 > $ct1_1101) && ($ct4_1101 > $ct1_1101 )){
               $avg_1101 = ($ct2_1101+$ct3_1101+$ct4_1101)/3;
           }
           else if($ct1_1101==$ct2_1101 && $ct2_1101==$ct3_1101 && $ct3_1101==$ct4_1101){
               $avg_1101 = ($ct1_1101+$ct2_1101+$ct3_1101)/3;
           }
           else if(($ct1_1101 > $ct2_1101) && ($ct2_1101 > $ct3_1101) && ($ct3_1101 > $ct4_1101)){
               $avg_1101 = ($ct1_1101+$ct2_1101+$ct3_1101)/3;
           }
           else if(($ct2_1101 > $ct3_1101) && ($ct3_1101 > $ct4_1101) && ($ct4_1101 > $ct1_1101)){
               $avg_1101 = ($ct2_1101+$ct3_1101+$ct4_1101)/3;
           }
           else if(($ct3_1101 > $ct4_1101) && ($ct4_1101 > $ct1_1101) && ($ct1_1101 > $ct2_1101)){
               $avg_1101 = ($ct1_1101+$ct3_1101+$ct4_1101)/3;
           }
           else if(($ct4_1101 > $ct1_1101) && ($ct1_1101 > $ct2_1101) && ($ct2_1101 > $ct3_1101)){
               $avg_1101 = ($ct1_1101+$ct2_1101+$ct4_1101)/3;
           }
           else if(($ct1_1101 > $ct2_1101) && ($ct1_1101 > $ct3_1101) && ($ct1_1101 > $ct4_1101) && ($ct2_1101==$ct3_1101) && ($ct3_1101==$ct4_1101)){
               $avg_1101 = ($ct1_1101+$ct2_1101+$ct3_1101)/3;
           }
           else if(($ct2_1101 > $ct3_1101) && ($ct2_1101 > $ct4_1101) && ($ct2_1101 > $ct1_1101) && ($ct3_1101==$ct4_1101) && ($ct4_1101==$ct1_1101)){
               $avg_1101 = ($ct2_1101+$ct3_1101+$ct4_1101)/3;
           }
           else if(($ct3_1101 > $ct1_1101) && ($ct3_1101 > $ct2_1101) && ($ct3_1101 > $ct4_1101) && ($ct1_1101==$ct2_1101) && ($ct2_1101==$ct4_1101)){
               $avg_1101 = ($ct3_1101+$ct2_1101+$ct4_1101)/3;
           }
           else if(($ct4_1101 > $ct1_1101) && ($ct4_1101 > $ct2_1101) && ($ct4_1101 > $ct3_1101) && ($ct1_1101==$ct2_1101) && ($ct2_1101==$ct3_1101)){
               $avg_1101 = ($ct1_1101+$ct2_1101+$ct4_1101)/3;
           }



           $res1101 = $avg_1101+$att1101+$exam1101;

           //echo '<br>';

           // echo $res1101;

           //echo '<br>';

           if($res1101>=0 && $res1101<=39){
               $gp1101 = 0.00;
           }
           else if($res1101>39 && $res1101<=44){
               $gp1101 = 2.00;
           }
           else if($res1101>44 && $res1101<=49){
               $gp1101 = 2.25;
           }
           else if($res1101>49 && $res1101<=54){
               $gp1101 = 2.50;
           }
           else if($res1101>54 && $res1101<=59){
               $gp1101 = 2.75;
           }
           else if($res1101>59 && $res1101<=64){
               $gp1101 = 3.00;
           }
           else if($res1101>64 && $res1101<=69){
               $gp1101 = 3.25;
           }
           else if($res1101>69 && $res1101<=74){
               $gp1101 = 3.50;
           }
           else if($res1101>74 && $res1101<=79){
               $gp1101 = 3.75;
           }
           else if($res1101>79){
               $gp1101 = 4.00;
           }

           //echo '<br>';

           // echo $gp1101;


           //theory ece 1101 ends


            //echo '<br>';


           // theory ece 1103 starts

           $ct1_1103 = $row['ece_1103_ct1'];
           $ct2_1103 = $row['ece_1103_ct2'];
           $ct3_1103 = $row['ece_1103_ct3'];
           $ct4_1103 = $row['ece_1103_ct4'];
           $att1103 = $row['ece_1103_att'];
           $exam1103 = $row['ece_1103_exam'];


           if($ct1_1103==0){
               $avg_1103 = ($ct2_1103+$ct3_1103+$ct4_1103)/3;
           }
           else if($ct2_1103==0){
               $avg_1103 = ($ct1_1103+$ct3_1103+$ct4_1103)/3;
           }
           else if($ct3_1103==0){
               $avg_1103 = ($ct2_1103+$ct1_1103+$ct4_1103)/3;
           }
           else if($ct4_1103==0){
               $avg_1103 = ($ct2_1103+$ct3_1103+$ct1_1103)/3;
           }
           else if($ct1_1103==0 && $ct2_1103==0){
               $avg_1103 = ($ct3_1103+$ct4_1103)/3;
           }
           else if($ct1_1103==0 && $ct3_1103==0){
               $avg_1103 = ($ct2_1103+$ct4_1103)/3;
           }
           else if($ct1_1103==0 && $ct4_1103==0){
               $avg_1103 = ($ct2_1103+$ct3_1103)/3;
           }
           else if($ct2_1103==0 && $ct3_1103==0){
               $avg_1103 = ($ct1_1103+$ct4_1103)/3;
           }
           else if($ct2_1103==0 && $ct4_1103==0){
               $avg_1103 = ($ct1_1103+$ct3_1103)/3;
           }
           else if($ct3_1103==0 && $ct4_1103==0){
               $avg_1103 = ($ct1_1103+$ct2_1103)/3;
           }
           else if($ct1_1103==0 && $ct2_1103==0 && $ct3_1103==0){
               $avg_1103 = $ct4_1103/3;
           }
           else if($ct1_1103==0 && $ct2_1103==0 && $ct4_1103==0){
               $avg_1103 = $ct3_1103/3;
           }
           else if($ct1_1103==0 && $ct3_1103==0 && $ct4_1103==0){
               $avg_1103 = $ct2_1103/3;
           }
           else if($ct2_1103==0 && $ct3_1103==0 && $ct4_1103==0){
               $avg_1103 = $ct1_1103/3;
           }
           else if($ct1_1103==0 && $ct2_1103==0 && $ct3_1103==0 && $ct4_1103==0){
               $avg_1103 = 0;
           }
           else if(($ct1_1103 > $ct3_1103) && ($ct1_1103 > $ct4_1103) && ($ct2_1103 > $ct3_1103) && ($ct2_1103 > $ct4_1103) && ($ct3_1103 == $ct4_1103)){
               $avg_1103 = ($ct1_1103+$ct2_1103+$ct3_1103)/3;
           }
           else if(($ct1_1103 > $ct2_1103) && ($ct1_1103 > $ct4_1103) && ($ct3_1103 > $ct2_1103) && ($ct3_1103 > $ct4_1103) && ($ct2_1103 == $ct4_1103)){
               $avg_1103 = ($ct1_1103+$ct2_1103+$ct3_1103)/3;
           }
           else if(($ct1_1103 > $ct2_1103) && ($ct1_1103 > $ct3_1103) && ($ct4_1103 > $ct2_1103) && ($ct4_1103 > $ct3_1103) && ($ct2_1103 == $ct3_1103)){
               $avg_1103 = ($ct1_1103+$ct2_1103+$ct4_1103)/3;
           }
           else if(($ct2_1103 > $ct1_1103) && ($ct2_1103 > $ct4_1103) && ($ct3_1103 > $ct1_1103) && ($ct3_1103 > $ct4_1103) && ($ct1_1103 == $ct4_1103)){
               $avg_1103 = ($ct1_1103+$ct2_1103+$ct3_1103)/3;
           }
           else if(($ct2_1103 > $ct1_1103) && ($ct2_1103 > $ct3_1103) && ($ct4_1103 > $ct1_1103) && ($ct4_1103 > $ct3_1103) && ($ct1_1103 == $ct3_1103)){
               $avg_1103 = ($ct1_1103+$ct2_1103+$ct4_1103)/3;
           }
           else if(($ct3_1103 > $ct1_1103) && ($ct3_1103 > $ct2_1103) && ($ct4_1103 > $ct1_1103) && ($ct4_1103 > $ct2_1103) && ($ct1_1103 == $ct2_1103)){
               $avg_1103 = ($ct1_1103+$ct3_1103+$ct4_1103)/3;
           }
           else if(($ct1_1103 > $ct4_1103) && ($ct2_1103 > $ct4_1103) && ($ct3_1103 > $ct4_1103)){
               $avg_1103 = ($ct1_1103+$ct2_1103+$ct3_1103)/3;
           }
           else if(($ct1_1103 > $ct3_1103) && ($ct2_1103 > $ct3_1103) && ($ct4_1103 > $ct3_1103 )){
               $avg_1103 = ($ct1_1103+$ct2_1103+$ct4_1103)/3;
           }
           else if(($ct1_1103 > $ct2_1103) && ($ct3_1103 > $ct2_1103) && ($ct4_1103 > $ct2_1103) ){
               $avg_1103 = ($ct1_1103+$ct3_1103+$ct4_1103)/3;
           }
           else if(($ct2_1103 > $ct1_1103) && ($ct3_1103 > $ct1_1103) && ($ct4_1103 > $ct1_1103)){
               $avg_1103 = ($ct2_1103+$ct3_1103+$ct4_1103)/3;
           }
           else if($ct1_1103==$ct2_1103 && $ct2_1103==$ct3_1103 && $ct3_1103==$ct4_1103){
               $avg_1103 = ($ct1_1103+$ct2_1103+$ct3_1103)/3;
           }
           else if(($ct1_1103 > $ct2_1103) && ($ct2_1103 > $ct3_1103) && ($ct3_1103 > $ct4_1103)){
               $avg_1103 = ($ct1_1103+$ct2_1103+$ct3_1103)/3;
           }
           else if(($ct2_1103 > $ct3_1103) && ($ct3_1103 > $ct4_1103) && ($ct4_1103 > $ct1_1103)){
               $avg_1103 = ($ct2_1103+$ct3_1103+$ct4_1103)/3;
           }
           else if(($ct3_1103 > $ct4_1103) && ($ct4_1103 > $ct1_1103) && ($ct1_1103 > $ct2_1103)){
               $avg_1103 = ($ct1_1103+$ct3_1103+$ct4_1103)/3;
           }
           else if(($ct4_1103 > $ct1_1103) && ($ct1_1103 > $ct2_1103) && ($ct2_1103 > $ct3_1103)){
               $avg_1103 = ($ct1_1103+$ct2_1103+$ct4_1103)/3;
           }
           else if(($ct1_1103 > $ct2_1103) && ($ct1_1103 > $ct3_1103) && ($ct1_1103 > $ct4_1103) && ($ct2_1103==$ct3_1103) && ($ct3_1103==$ct4_1103)){
               $avg_1103 = ($ct1_1103+$ct2_1103+$ct3_1103)/3;
           }
           else if(($ct2_1103 > $ct3_1103) && ($ct2_1103 > $ct4_1103) && ($ct2_1103 > $ct1_1103) && ($ct3_1103==$ct4_1103) && ($ct4_1103==$ct1_1103)){
               $avg_1103 = ($ct1_1103+$ct2_1103+$ct3_1103)/3;
           }
           else if(($ct3_1103 > $ct1_1103) && ($ct3_1103 > $ct2_1103) && ($ct3_1103 > $ct4_1103) && ($ct1_1103==$ct2_1103) && ($ct2_1103==$ct4_1103)){
               $avg_1103 = ($ct3_1103+$ct2_1103+$ct4_1103)/3;
           }
           else if(($ct4_1103 > $ct1_1103) && ($ct4_1103 > $ct2_1103) && ($ct4_1103 > $ct3_1103) && ($ct1_1103==$ct2_1103) && ($ct2_1103==$ct3_1103)){
               $avg_1103 = ($ct1_1103+$ct2_1103+$ct4_1103)/3;
           }



           $res1103 = $avg_1103+$att1103+$exam1103;

           //echo '<br>';

           // echo $res1103;

           //echo '<br>';

           if($res1103>=0 && $res1103<=39){
               $gp1103 = 0.00;
           }
           else if($res1103>39 && $res1103<=44){
               $gp1103 = 2.00;
           }
           else if($res1103>44 && $res1103<=49){
               $gp1103 = 2.25;
           }
           else if($res1103>49 && $res1103<=54){
               $gp1103 = 2.50;
           }
           else if($res1103>54 && $res1103<=59){
               $gp1103 = 2.75;
           }
           else if($res1103>59 && $res1103<=64){
               $gp1103 = 3.00;
           }
           else if($res1103>64 && $res1103<=69){
               $gp1103 = 3.25;
           }
           else if($res1103>69 && $res1103<=74){
               $gp1103 = 3.50;
           }
           else if($res1103>74 && $res1103<=79){
               $gp1103 = 3.75;
           }
           else if($res1103>79){
               $gp1103 = 4.00;
           }

           //echo '<br>';

           // echo $gp1103;


           //theory ece 1103 ends




           //echo "<br>";



           // theory math 1117 starts


           $ct1_math1117 = $row['math_1117_ct1'];
           $ct2_math1117 = $row['math_1117_ct2'];
           $ct3_math1117 = $row['math_1117_ct3'];
           $ct4_math1117 = $row['math_1117_ct4'];
           $attmath1117 = $row['math_1117_att'];
           $exammath1117 = $row['math_1117_exam'];





           if($ct1_math1117==0){
               $avg_math1117 = ($ct2_math1117+$ct3_math1117+$ct4_math1117)/3;
           }
           else if($ct2_math1117==0){
               $avg_math1117 = ($ct1_math1117+$ct3_math1117+$ct4_math1117)/3;
           }
           else if($ct3_math1117==0){
               $avg_math1117 = ($ct2_math1117+$ct1_math1117+$ct4_math1117)/3;
           }
           else if($ct4_math1117==0){
               $avg_math1117 = ($ct2_math1117+$ct3_math1117+$ct1_math1117)/3;
           }
           else if($ct1_math1117==0 && $ct2_math1117==0){
               $avg_math1117 = ($ct3_math1117+$ct4_math1117)/3;
           }
           else if($ct1_math1117==0 && $ct3_math1117==0){
               $avg_math1117 = ($ct2_math1117+$ct4_math1117)/3;
           }
           else if($ct1_math1117==0 && $ct4_math1117==0){
               $avg_math1117 = ($ct2_math1117+$ct3_math1117)/3;
           }
           else if($ct2_math1117==0 && $ct3_math1117==0){
               $avg_math1117 = ($ct1_math1117+$ct4_math1117)/3;
           }
           else if($ct2_math1117==0 && $ct4_math1117==0){
               $avg_math1117 = ($ct1_math1117+$ct3_math1117)/3;
           }
           else if($ct3_math1117==0 && $ct4_math1117==0){
               $avg_math1117 = ($ct1_math1117+$ct2_math1117)/3;
           }
           else if($ct1_math1117==0 && $ct2_math1117==0 && $ct3_math1117==0){
               $avg_math1117 = $ct4_math1117/3;
           }
           else if($ct1_math1117==0 && $ct2_math1117==0 && $ct4_math1117==0){
               $avg_math1117 = $ct3_math1117/3;
           }
           else if($ct1_math1117==0 && $ct3_math1117==0 && $ct4_math1117==0){
               $avg_math1117 = $ct2_math1117/3;
           }
           else if($ct2_math1117==0 && $ct3_math1117==0 && $ct4_math1117==0){
               $avg_math1117 = $ct1_math1117/3;
           }
           else if($ct1_math1117==0 && $ct2_math1117==0 && $ct3_math1117==0 && $ct4_math1117==0){
               $avg_math1117 = 0;
           }
           else if(($ct1_math1117 > $ct3_math1117) && ($ct1_math1117 > $ct4_math1117) && ($ct2_math1117 > $ct3_math1117) && ($ct2_math1117 > $ct4_math1117) && ($ct3_math1117 == $ct4_math1117)){
               $avg_math1117 = ($ct1_math1117+$ct2_math1117+$ct3_math1117)/3;
           }
           else if(($ct1_math1117 > $ct2_math1117) && ($ct1_math1117 > $ct4_math1117) && ($ct3_math1117 > $ct2_math1117) && ($ct3_math1117 > $ct4_math1117) && ($ct2_math1117 == $ct4_math1117)){
               $avg_math1117 = ($ct1_math1117+$ct2_math1117+$ct3_math1117)/3;
           }
           else if(($ct1_math1117 > $ct2_math1117) && ($ct1_math1117 > $ct3_math1117) && ($ct4_math1117 > $ct2_math1117) && ($ct4_math1117 > $ct3_math1117) && ($ct2_math1117 == $ct3_math1117)){
               $avg_math1117 = ($ct1_math1117+$ct2_math1117+$ct4_math1117)/3;
           }
           else if(($ct2_math1117 > $ct1_math1117) && ($ct2_math1117 > $ct4_math1117) && ($ct3_math1117 > $ct1_math1117) && ($ct3_math1117 > $ct4_math1117) && ($ct1_math1117 == $ct4_math1117)){
               $avg_math1117 = ($ct1_math1117+$ct2_math1117+$ct3_math1117)/3;
           }
           else if(($ct2_math1117 > $ct1_math1117) && ($ct2_math1117 > $ct3_math1117) && ($ct4_math1117 > $ct1_math1117) && ($ct4_math1117 > $ct3_math1117) && ($ct1_math1117 == $ct3_math1117)){
               $avg_math1117 = ($ct1_math1117+$ct2_math1117+$ct4_math1117)/3;
           }
           else if(($ct3_math1117 > $ct1_math1117) && ($ct3_math1117 > $ct2_math1117) && ($ct4_math1117 > $ct1_math1117) && ($ct4_math1117 > $ct2_math1117) && ($ct1_math1117 == $ct2_math1117)){
               $avg_math1117 = ($ct1_math1117+$ct3_math1117+$ct4_math1117)/3;
           }
           else if(($ct1_math1117 > $ct4_math1117) && ($ct2_math1117 > $ct4_math1117) && ($ct3_math1117 > $ct4_math1117)){
               $avg_math1117 = ($ct1_math1117+$ct2_math1117+$ct3_math1117)/3;
           }
           else if(($ct1_math1117 > $ct3_math1117) && ($ct2_math1117 > $ct3_math1117) && ($ct4_math1117 > $ct3_math1117 )){
               $avg_math1117 = ($ct1_math1117+$ct2_math1117+$ct4_math1117)/3;
           }
           else if(($ct1_math1117 > $ct2_math1117) && ($ct3_math1117 > $ct2_math1117) && ($ct4_math1117 > $ct2_math1117) ){
               $avg_math1117 = ($ct1_math1117+$ct3_math1117+$ct4_math1117)/3;
           }
           else if(($ct2_math1117 > $ct1_math1117) && ($ct3_math1117 > $ct1_math1117) && ($ct4_math1117 > $ct1_math1117)){
               $avg_math1117 = ($ct2_math1117+$ct3_math1117+$ct4_math1117)/3;
           }
           else if($ct1_math1117==$ct2_math1117 && $ct2_math1117==$ct3_math1117 && $ct3_math1117==$ct4_math1117){
               $avg_math1117 = ($ct1_math1117+$ct2_math1117+$ct3_math1117)/3;
           }
           else if(($ct1_math1117 > $ct2_math1117) && ($ct2_math1117 > $ct3_math1117) && ($ct3_math1117 > $ct4_math1117)){
               $avg_math1117 = ($ct1_math1117+$ct2_math1117+$ct3_math1117)/3;
           }
           else if(($ct2_math1117 > $ct3_math1117) && ($ct3_math1117 > $ct4_math1117) && ($ct4_math1117 > $ct1_math1117)){
               $avg_math1117 = ($ct2_math1117+$ct3_math1117+$ct4_math1117)/3;
           }
           else if(($ct3_math1117 > $ct4_math1117) && ($ct4_math1117 > $ct1_math1117) && ($ct1_math1117 > $ct2_math1117)){
               $avg_math1117 = ($ct1_math1117+$ct3_math1117+$ct4_math1117)/3;
           }
           else if(($ct4_math1117 > $ct1_math1117) && ($ct1_math1117 > $ct2_math1117) && ($ct2_math1117 > $ct3_math1117)){
               $avg_math1117 = ($ct1_math1117+$ct2_math1117+$ct4_math1117)/3;
           }
           else if(($ct1_math1117 > $ct2_math1117) && ($ct1_math1117 > $ct3_math1117) && ($ct1_math1117 > $ct4_math1117) && ($ct2_math1117==$ct3_math1117) && ($ct3_math1117==$ct4_math1117)){
               $avg_math1117 = ($ct1_math1117+$ct2_math1117+$ct3_math1117)/3;
           }
           else if(($ct2_math1117 > $ct3_math1117) && ($ct2_math1117 > $ct4_math1117) && ($ct2_math1117 > $ct1_math1117) && ($ct3_math1117==$ct4_math1117) && ($ct4_math1117==$ct1_math1117)){
               $avg_math1117 = ($ct1_math1117+$ct2_math1117+$ct3_math1117)/3;
           }
           else if(($ct3_math1117 > $ct1_math1117) && ($ct3_math1117 > $ct2_math1117) && ($ct3_math1117 > $ct4_math1117) && ($ct1_math1117==$ct2_math1117) && ($ct2_math1117==$ct4_math1117)){
               $avg_math1117 = ($ct3_math1117+$ct2_math1117+$ct4_math1117)/3;
           }
           else if(($ct4_math1117 > $ct1_math1117) && ($ct4_math1117 > $ct2_math1117) && ($ct4_math1117 > $ct3_math1117) && ($ct1_math1117==$ct2_math1117) && ($ct2_math1117==$ct3_math1117)){
               $avg_math1117 = ($ct1_math1117+$ct2_math1117+$ct4_math1117)/3;
           }



           $resmath1117 = $avg_math1117+$attmath1117+$exammath1117;

           //echo '<br>';

           // echo $resmath1117;

           //echo '<br>';

           if($resmath1117>=0 && $resmath1117<=39){
               $gpmath1117 = 0.00;
           }
           else if($resmath1117>39 && $resmath1117<=44){
               $gpmath1117 = 2.00;
           }
           else if($resmath1117>44 && $resmath1117<=49){
               $gpmath1117 = 2.25;
           }
           else if($resmath1117>49 && $resmath1117<=54){
               $gpmath1117 = 2.50;
           }
           else if($resmath1117>54 && $resmath1117<=59){
               $gpmath1117 = 2.75;
           }
           else if($resmath1117>59 && $resmath1117<=64){
               $gpmath1117 = 3.00;
           }
           else if($resmath1117>64 && $resmath1117<=69){
               $gpmath1117 = 3.25;
           }
           else if($resmath1117>69 && $resmath1117<=74){
               $gpmath1117 = 3.50;
           }
           else if($resmath1117>74 && $resmath1117<=79){
               $gpmath1117 = 3.75;
           }
           else if($resmath1117>79){
               $gpmath1117 = 4.00;
           }

           //echo '<br>';

           // echo $gpmath1117;




           //theory math 1117 ends




           //echo '<br>';




           // theory phy 1117 starts


           $ct1phy_1117 = $row['phy_1117_ct1'];
           $ct2phy_1117 = $row['phy_1117_ct2'];
           $ct3phy_1117 = $row['phy_1117_ct3'];
           $ct4phy_1117 = $row['phy_1117_ct4'];
           $att_phy_1117 = $row['phy_1117_att'];
           $exam_phy_1117 = $row['phy_1117_exam'];



           if($ct1phy_1117==0){
               $avg_phy1117 = ($ct2phy_1117+$ct3phy_1117+$ct4phy_1117)/3;
           }
           else if($ct2phy_1117==0){
               $avg_phy1117 = ($ct1phy_1117+$ct3phy_1117+$ct4phy_1117)/3;
           }
           else if($ct3phy_1117==0){
               $avg_phy1117 = ($ct2phy_1117+$ct1phy_1117+$ct4phy_1117)/3;
           }
           else if($ct4phy_1117==0){
               $avg_phy1117 = ($ct2phy_1117+$ct3phy_1117+$ct1phy_1117)/3;
           }
           else if($ct1phy_1117==0 && $ct2phy_1117==0){
               $avg_phy1117 = ($ct3phy_1117+$ct4phy_1117)/3;
           }
           else if($ct1phy_1117==0 && $ct3phy_1117==0){
               $avg_phy1117 = ($ct2phy_1117+$ct4phy_1117)/3;
           }
           else if($ct1phy_1117==0 && $ct4phy_1117==0){
               $avg_phy1117 = ($ct2phy_1117+$ct3phy_1117)/3;
           }
           else if($ct2phy_1117==0 && $ct3phy_1117==0){
               $avg_phy1117 = ($ct1phy_1117+$ct4phy_1117)/3;
           }
           else if($ct2phy_1117==0 && $ct4phy_1117==0){
               $avg_phy1117 = ($ct1phy_1117+$ct3phy_1117)/3;
           }
           else if($ct3phy_1117==0 && $ct4phy_1117==0){
               $avg_phy1117 = ($ct1phy_1117+$ct2phy_1117)/3;
           }
           else if($ct1phy_1117==0 && $ct2phy_1117==0 && $ct3phy_1117==0){
               $avg_phy1117 = $ct4phy_1117/3;
           }
           else if($ct1phy_1117==0 && $ct2phy_1117==0 && $ct4phy_1117==0){
               $avg_phy1117 = $ct3phy_1117/3;
           }
           else if($ct1phy_1117==0 && $ct3phy_1117==0 && $ct4phy_1117==0){
               $avg_phy1117 = $ct2phy_1117/3;
           }
           else if($ct2phy_1117==0 && $ct3phy_1117==0 && $ct4phy_1117==0){
               $avg_phy1117 = $ct1phy_1117/3;
           }
           else if($ct1phy_1117==0 && $ct2phy_1117==0 && $ct3phy_1117==0 && $ct4phy_1117==0){
               $avg_phy1117 = 0;
           }
           else if(($ct1phy_1117 > $ct3phy_1117) && ($ct1phy_1117 > $ct4phy_1117) && ($ct2phy_1117 > $ct3phy_1117) && ($ct2phy_1117 > $ct4phy_1117) && ($ct3phy_1117 == $ct4phy_1117)){
               $avg_phy1117 = ($ct1phy_1117+$ct2phy_1117+$ct3phy_1117)/3;
           }
           else if(($ct1phy_1117 > $ct2phy_1117) && ($ct1phy_1117 > $ct4phy_1117) && ($ct3phy_1117 > $ct2phy_1117) && ($ct3phy_1117 > $ct4phy_1117) && ($ct2phy_1117 == $ct4phy_1117)){
               $avg_phy1117 = ($ct1phy_1117+$ct2phy_1117+$ct3phy_1117)/3;
           }
           else if(($ct1phy_1117 > $ct2phy_1117) && ($ct1phy_1117 > $ct3phy_1117) && ($ct4phy_1117 > $ct2phy_1117) && ($ct4phy_1117 > $ct3phy_1117) && ($ct2phy_1117 == $ct3phy_1117)){
               $avg_phy1117 = ($ct1phy_1117+$ct2phy_1117+$ct4phy_1117)/3;
           }
           else if(($ct2phy_1117 > $ct1phy_1117) && ($ct2phy_1117 > $ct4phy_1117) && ($ct3phy_1117 > $ct1phy_1117) && ($ct3phy_1117 > $ct4phy_1117) && ($ct1phy_1117 == $ct4phy_1117)){
               $avg_phy1117 = ($ct1phy_1117+$ct2phy_1117+$ct3phy_1117)/3;
           }
           else if(($ct2phy_1117 > $ct1phy_1117) && ($ct2phy_1117 > $ct3phy_1117) && ($ct4phy_1117 > $ct1phy_1117) && ($ct4phy_1117 > $ct3phy_1117) && ($ct1phy_1117 == $ct3phy_1117)){
               $avg_phy1117 = ($ct1phy_1117+$ct2phy_1117+$ct4phy_1117)/3;
           }
           else if(($ct3phy_1117 > $ct1phy_1117) && ($ct3phy_1117 > $ct2phy_1117) && ($ct4phy_1117 > $ct1phy_1117) && ($ct4phy_1117 > $ct2phy_1117) && ($ct1phy_1117 == $ct2phy_1117)){
               $avg_phy1117 = ($ct1phy_1117+$ct3phy_1117+$ct4phy_1117)/3;
           }
           else if(($ct1phy_1117 > $ct4phy_1117) && ($ct2phy_1117 > $ct4phy_1117) && ($ct3phy_1117 > $ct4phy_1117)){
               $avg_phy1117 = ($ct1phy_1117+$ct2phy_1117+$ct3phy_1117)/3;
           }
           else if(($ct1phy_1117 > $ct3phy_1117) && ($ct2phy_1117 > $ct3phy_1117) && ($ct4phy_1117 > $ct3phy_1117 )){
               $avg_phy1117 = ($ct1phy_1117+$ct2phy_1117+$ct4phy_1117)/3;
           }
           else if(($ct1phy_1117 > $ct2phy_1117) && ($ct3phy_1117 > $ct2phy_1117) && ($ct4phy_1117 > $ct2phy_1117) ){
               $avg_phy1117 = ($ct1phy_1117+$ct3phy_1117+$ct4phy_1117)/3;
           }
           else if(($ct2phy_1117 > $ct1phy_1117) && ($ct3phy_1117 > $ct1phy_1117) && ($ct4phy_1117 > $ct1phy_1117)){
               $avg_phy1117 = ($ct2phy_1117+$ct3phy_1117+$ct4phy_1117)/3;
           }
           else if($ct1phy_1117==$ct2phy_1117 && $ct2phy_1117==$ct3phy_1117 && $ct3phy_1117==$ct4phy_1117){
               $avg_phy1117 = ($ct1phy_1117+$ct2phy_1117+$ct3phy_1117)/3;
           }
           else if(($ct1phy_1117 > $ct2phy_1117) && ($ct2phy_1117 > $ct3phy_1117) && ($ct3phy_1117 > $ct4phy_1117)){
               $avg_phy1117 = ($ct1phy_1117+$ct2phy_1117+$ct3phy_1117)/3;
           }
           else if(($ct2phy_1117 > $ct3phy_1117) && ($ct3phy_1117 > $ct4phy_1117) && ($ct4phy_1117 > $ct1phy_1117)){
               $avg_phy1117 = ($ct2phy_1117+$ct3phy_1117+$ct4phy_1117)/3;
           }
           else if(($ct3phy_1117 > $ct4phy_1117) && ($ct4phy_1117 > $ct1phy_1117) && ($ct1phy_1117 > $ct2phy_1117)){
               $avg_phy1117 = ($ct1phy_1117+$ct3phy_1117+$ct4phy_1117)/3;
           }
           else if(($ct4phy_1117 > $ct1phy_1117) && ($ct1phy_1117 > $ct2phy_1117) && ($ct2phy_1117 > $ct3phy_1117)){
               $avg_phy1117 = ($ct1phy_1117+$ct2phy_1117+$ct4phy_1117)/3;
           }
           else if(($ct1phy_1117 > $ct2phy_1117) && ($ct1phy_1117 > $ct3phy_1117) && ($ct1phy_1117 > $ct4phy_1117) && ($ct2phy_1117==$ct3phy_1117) && ($ct3phy_1117==$ct4phy_1117)){
               $avg_phy1117 = ($ct1phy_1117+$ct2phy_1117+$ct3phy_1117)/3;
           }
           else if(($ct2phy_1117 > $ct3phy_1117) && ($ct2phy_1117 > $ct4phy_1117) && ($ct2phy_1117 > $ct1phy_1117) && ($ct3phy_1117==$ct4phy_1117) && ($ct4phy_1117==$ct1phy_1117)){
               $avg_phy1117 = ($ct1phy_1117+$ct2phy_1117+$ct3phy_1117)/3;
           }
           else if(($ct3phy_1117 > $ct1phy_1117) && ($ct3phy_1117 > $ct2phy_1117) && ($ct3phy_1117 > $ct4phy_1117) && ($ct1phy_1117==$ct2phy_1117) && ($ct2phy_1117==$ct4phy_1117)){
               $avg_phy1117 = ($ct3phy_1117+$ct2phy_1117+$ct4phy_1117)/3;
           }
           else if(($ct4phy_1117 > $ct1phy_1117) && ($ct4phy_1117 > $ct2phy_1117) && ($ct4phy_1117 > $ct3phy_1117) && ($ct1phy_1117==$ct2phy_1117) && ($ct2phy_1117==$ct3phy_1117)){
               $avg_phy1117 = ($ct1phy_1117+$ct2phy_1117+$ct4phy_1117)/3;
           }



           $resphy1117 = $avg_phy1117+$att_phy_1117+$exam_phy_1117;

           //echo '<br>';

           // echo $resphy1117;

           //echo '<br>';

           if($resphy1117>=0 && $resphy1117<=39){
               $gpphy1117 = 0.00;
           }
           else if($resphy1117>39 && $resphy1117<=44){
               $gpphy1117 = 2.00;
           }
           else if($resphy1117>44 && $resphy1117<=49){
               $gpphy1117 = 2.25;
           }
           else if($resphy1117>49 && $resphy1117<=54){
               $gpphy1117 = 2.50;
           }
           else if($resphy1117>54 && $resphy1117<=59){
               $gpphy1117 = 2.75;
           }
           else if($resphy1117>59 && $resphy1117<=64){
               $gpphy1117 = 3.00;
           }
           else if($resphy1117>64 && $resphy1117<=69){
               $gpphy1117 = 3.25;
           }
           else if($resphy1117>69 && $resphy1117<=74){
               $gpphy1117 = 3.50;
           }
           else if($resphy1117>74 && $resphy1117<=79){
               $gpphy1117 = 3.75;
           }
           else if($resphy1117>79){
               $gpphy1117 = 4.00;
           }

           // echo '<br>';

           // echo $gpphy1117;



           //theory phy 1117 ends




           // echo '<br>';




           // theory hum 1117 starts


           $ct1hum_1117 = $row['hum_1117_ct1'];
           $ct2hum_1117 = $row['hum_1117_ct2'];
           $ct3hum_1117 = $row['hum_1117_ct3'];
           $ct4hum_1117 = $row['hum_1117_ct4'];
           $att_hum_1117 = $row['hum_1117_att'];
           $exam_hum_1117 = $row['hum_1117_exam'];



           if($ct1hum_1117==0){
               $avg_hum1117 = ($ct2hum_1117+$ct3hum_1117+$ct4hum_1117)/3;
           }
           else if($ct2hum_1117==0){
               $avg_hum1117 = ($ct1hum_1117+$ct3hum_1117+$ct4hum_1117)/3;
           }
           else if($ct3hum_1117==0){
               $avg_hum1117 = ($ct2hum_1117+$ct1hum_1117+$ct4hum_1117)/3;
           }
           else if($ct4hum_1117==0){
               $avg_hum1117 = ($ct2hum_1117+$ct3hum_1117+$ct1hum_1117)/3;
           }
           else if($ct1hum_1117==0 && $ct2hum_1117==0){
               $avg_hum1117 = ($ct3hum_1117+$ct4hum_1117)/3;
           }
           else if($ct1hum_1117==0 && $ct3hum_1117==0){
               $avg_hum1117 = ($ct2hum_1117+$ct4hum_1117)/3;
           }
           else if($ct1hum_1117==0 && $ct4hum_1117==0){
               $avg_hum1117 = ($ct2hum_1117+$ct3hum_1117)/3;
           }
           else if($ct2hum_1117==0 && $ct3hum_1117==0){
               $avg_hum1117 = ($ct1hum_1117+$ct4hum_1117)/3;
           }
           else if($ct2hum_1117==0 && $ct4hum_1117==0){
               $avg_hum1117 = ($ct1hum_1117+$ct3hum_1117)/3;
           }
           else if($ct3hum_1117==0 && $ct4hum_1117==0){
               $avg_hum1117 = ($ct1hum_1117+$ct2hum_1117)/3;
           }
           else if($ct1hum_1117==0 && $ct2hum_1117==0 && $ct3hum_1117==0){
               $avg_hum1117 = $ct4hum_1117/3;
           }
           else if($ct1hum_1117==0 && $ct2hum_1117==0 && $ct4hum_1117==0){
               $avg_hum1117 = $ct3hum_1117/3;
           }
           else if($ct1hum_1117==0 && $ct3hum_1117==0 && $ct4hum_1117==0){
               $avg_hum1117 = $ct2hum_1117/3;
           }
           else if($ct2hum_1117==0 && $ct3hum_1117==0 && $ct4hum_1117==0){
               $avg_hum1117 = $ct1hum_1117/3;
           }
           else if($ct1hum_1117==0 && $ct2hum_1117==0 && $ct3hum_1117==0 && $ct4hum_1117==0){
               $avg_hum1117 = 0;
           }
           else if(($ct1hum_1117 > $ct3hum_1117) && ($ct1hum_1117 > $ct4hum_1117) && ($ct2hum_1117 > $ct3hum_1117) && ($ct2hum_1117 > $ct4hum_1117) && ($ct3hum_1117 == $ct4hum_1117)){
               $avg_hum1117 = ($ct1hum_1117+$ct2hum_1117+$ct3hum_1117)/3;
           }
           else if(($ct1hum_1117 > $ct2hum_1117) && ($ct1hum_1117 > $ct4hum_1117) && ($ct3hum_1117 > $ct2hum_1117) && ($ct3hum_1117 > $ct4hum_1117) && ($ct2hum_1117 == $ct4hum_1117)){
               $avg_hum1117 = ($ct1hum_1117+$ct2hum_1117+$ct3hum_1117)/3;
           }
           else if(($ct1hum_1117 > $ct2hum_1117) && ($ct1hum_1117 > $ct3hum_1117) && ($ct4hum_1117 > $ct2hum_1117) && ($ct4hum_1117 > $ct3hum_1117) && ($ct2hum_1117 == $ct3hum_1117)){
               $avg_hum1117 = ($ct1hum_1117+$ct2hum_1117+$ct4hum_1117)/3;
           }
           else if(($ct2hum_1117 > $ct1hum_1117) && ($ct2hum_1117 > $ct4hum_1117) && ($ct3hum_1117 > $ct1hum_1117) && ($ct3hum_1117 > $ct4hum_1117) && ($ct1hum_1117 == $ct4hum_1117)){
               $avg_hum1117 = ($ct1hum_1117+$ct2hum_1117+$ct3hum_1117)/3;
           }
           else if(($ct2hum_1117 > $ct1hum_1117) && ($ct2hum_1117 > $ct3hum_1117) && ($ct4hum_1117 > $ct1hum_1117) && ($ct4hum_1117 > $ct3hum_1117) && ($ct1hum_1117 == $ct3hum_1117)){
               $avg_hum1117 = ($ct1hum_1117+$ct2hum_1117+$ct4hum_1117)/3;
           }
           else if(($ct3hum_1117 > $ct1hum_1117) && ($ct3hum_1117 > $ct2hum_1117) && ($ct4hum_1117 > $ct1hum_1117) && ($ct4hum_1117 > $ct2hum_1117) && ($ct1hum_1117 == $ct2hum_1117)){
               $avg_hum1117 = ($ct1hum_1117+$ct3hum_1117+$ct4hum_1117)/3;
           }
           else if(($ct1hum_1117 > $ct4hum_1117) && ($ct2hum_1117 > $ct4hum_1117) && ($ct3hum_1117 > $ct4hum_1117)){
               $avg_hum1117 = ($ct1hum_1117+$ct2hum_1117+$ct3hum_1117)/3;
           }
           else if(($ct1hum_1117 > $ct3hum_1117) && ($ct2hum_1117 > $ct3hum_1117) && ($ct4hum_1117 > $ct3hum_1117 )){
               $avg_hum1117 = ($ct1hum_1117+$ct2hum_1117+$ct4hum_1117)/3;
           }
           else if(($ct1hum_1117 > $ct2hum_1117) && ($ct3hum_1117 > $ct2hum_1117) && ($ct4hum_1117 > $ct2hum_1117) ){
               $avg_hum1117 = ($ct1hum_1117+$ct3hum_1117+$ct4hum_1117)/3;
           }
           else if(($ct2hum_1117 > $ct1hum_1117) && ($ct3hum_1117 > $ct1hum_1117) && ($ct4hum_1117 > $ct1hum_1117)){
               $avg_hum1117 = ($ct2hum_1117+$ct3hum_1117+$ct4hum_1117)/3;
           }
           else if($ct1hum_1117==$ct2hum_1117 && $ct2hum_1117==$ct3hum_1117 && $ct3hum_1117==$ct4hum_1117){
               $avg_hum1117 = ($ct1hum_1117+$ct2hum_1117+$ct3hum_1117)/3;
           }
           else if(($ct1hum_1117 > $ct2hum_1117) && ($ct2hum_1117 > $ct3hum_1117) && ($ct3hum_1117 > $ct4hum_1117)){
               $avg_hum1117 = ($ct1hum_1117+$ct2hum_1117+$ct3hum_1117)/3;
           }
           else if(($ct2hum_1117 > $ct3hum_1117) && ($ct3hum_1117 > $ct4hum_1117) && ($ct4hum_1117 > $ct1hum_1117)){
               $avg_hum1117 = ($ct2hum_1117+$ct3hum_1117+$ct4hum_1117)/3;
           }
           else if(($ct3hum_1117 > $ct4hum_1117) && ($ct4hum_1117 > $ct1hum_1117) && ($ct1hum_1117 > $ct2hum_1117)){
               $avg_hum1117 = ($ct1hum_1117+$ct3hum_1117+$ct4hum_1117)/3;
           }
           else if(($ct4hum_1117 > $ct1hum_1117) && ($ct1hum_1117 > $ct2hum_1117) && ($ct2hum_1117 > $ct3hum_1117)){
               $avg_hum1117 = ($ct1hum_1117+$ct2hum_1117+$ct4hum_1117)/3;
           }
           else if(($ct1hum_1117 > $ct2hum_1117) && ($ct1hum_1117 > $ct3hum_1117) && ($ct1hum_1117 > $ct4hum_1117) && ($ct2hum_1117==$ct3hum_1117) && ($ct3hum_1117==$ct4hum_1117)){
               $avg_hum1117 = ($ct1hum_1117+$ct2hum_1117+$ct3hum_1117)/3;
           }
           else if(($ct2hum_1117 > $ct3hum_1117) && ($ct2hum_1117 > $ct4hum_1117) && ($ct2hum_1117 > $ct1hum_1117) && ($ct3hum_1117==$ct4hum_1117) && ($ct4hum_1117==$ct1hum_1117)){
               $avg_hum1117 = ($ct1hum_1117+$ct2hum_1117+$ct3hum_1117)/3;
           }
           else if(($ct3hum_1117 > $ct1hum_1117) && ($ct3hum_1117 > $ct2hum_1117) && ($ct3hum_1117 > $ct4hum_1117) && ($ct1hum_1117==$ct2hum_1117) && ($ct2hum_1117==$ct4hum_1117)){
               $avg_hum1117 = ($ct3hum_1117+$ct2hum_1117+$ct4hum_1117)/3;
           }
           else if(($ct4hum_1117 > $ct1hum_1117) && ($ct4hum_1117 > $ct2hum_1117) && ($ct4hum_1117 > $ct3hum_1117) && ($ct1hum_1117==$ct2hum_1117) && ($ct2hum_1117==$ct3hum_1117)){
               $avg_hum1117 = ($ct1hum_1117+$ct2hum_1117+$ct4hum_1117)/3;
           }



           $reshum1117 = $avg_hum1117+$att_hum_1117+$exam_hum_1117;

           //echo '<br>';

           // echo $reshum1117;

           //echo '<br>';

           if($reshum1117>=0 && $reshum1117<=39){
               $gphum1117 = 0.00;
           }
           else if($reshum1117>39 && $reshum1117<=44){
               $gphum1117 = 2.00;
           }
           else if($reshum1117>44 && $reshum1117<=49){
               $gphum1117 = 2.25;
           }
           else if($reshum1117>49 && $reshum1117<=54){
               $gphum1117 = 2.50;
           }
           else if($reshum1117>54 && $reshum1117<=59){
               $gphum1117 = 2.75;
           }
           else if($reshum1117>59 && $reshum1117<=64){
               $gphum1117 = 3.00;
           }
           else if($reshum1117>64 && $reshum1117<=69){
               $gphum1117 = 3.25;
           }
           else if($reshum1117>69 && $reshum1117<=74){
               $gphum1117 = 3.50;
           }
           else if($reshum1117>74 && $reshum1117<=79){
               $gphum1117 = 3.75;
           }
           else if($reshum1117>79){
               $gphum1117 = 4.00;
           }

           //echo '<br>';

           // echo $gphum1117;



           //theory hum 1117 ends




           //  echo '<br>';
           //  echo '<br>';
           //  echo '<br>';
           //  echo '<br>';
           //  echo '<br>';



           // sessional ece 1102 starts


           $att1102 = $row['ece_1102_att'];
           $report1102 = $row['ece_1102_re'];
           $quiz1102 = $row['ece_1102_quiz'];
           $bv1102 = $row['ece_1102_bv'];

           $res1102 = $att1102+$report1102+$quiz1102+$bv1102;

           //echo '<br>';

           // echo $res1102;

           //echo '<br>';

           if($res1102>=0 && $res1102<=39){
               $gp1102 = 0.00;
           }
           else if($res1102>=40 && $res1102<=44){
               $gp1102 = 2.00;
           }
           else if($res1102>=45 && $res1102<=49){
               $gp1102 = 2.25;
           }
           else if($res1102>=50 && $res1102<=54){
               $gp1102 = 2.50;
           }
           else if($res1102>=55 && $res1102<=59){
               $gp1102 = 2.75;
           }
           else if($res1102>=60 && $res1102<=64){
               $gp1102 = 3.00;
           }
           else if($res1102>=65 && $res1102<=69){
               $gp1102 = 3.25;
           }
           else if($res1102>=70 && $res1102<=74){
               $gp1102 = 3.50;
           }
           else if($res1102>=75 && $res1102<=79){
               $gp1102 = 3.75;
           }
           else if($res1102>=80){
               $gp1102 = 4.00;
           }

           //echo '<br>';

           // echo $gp1102;


           // sessional ece 1102 ends



           //echo '<br>';



           // sessional ece 1104 starts


           $att1104 = $row['ece_1104_att'];
           $report1104 = $row['ece_1104_re'];
           $quiz1104 = $row['ece_1104_quiz'];
           $bv1104 = $row['ece_1104_bv'];

           $res1104 = $att1104+$report1104+$quiz1104+$bv1104;

           //echo '<br>';

           // echo $res1104;

           //echo '<br>';

           if($res1104>=0 && $res1104<=39){
               $gp1104 = 0.00;
           }
           else if($res1104>=40 && $res1104<=44){
               $gp1104 = 2.00;
           }
           else if($res1104>=45 && $res1104<=49){
               $gp1104 = 2.25;
           }
           else if($res1104>=50 && $res1104<=54){
               $gp1104 = 2.50;
           }
           else if($res1104>=55 && $res1104<=59){
               $gp1104 = 2.75;
           }
           else if($res1104>=60 && $res1104<=64){
               $gp1104 = 3.00;
           }
           else if($res1104>=65 && $res1104<=69){
               $gp1104 = 3.25;
           }
           else if($res1104>=70 && $res1104<=74){
               $gp1104 = 3.50;
           }
           else if($res1104>=75 && $res1104<=79){
               $gp1104 = 3.75;
           }
           else if($res1104>=80){
               $gp1104 = 4.00;
           }

           //echo '<br>';

           // echo $gp1104;


           // sessional ece 1104 ends

           //echo '<br>';


           // sessional phy 1118 starts


           $attphy1118 = $row['phy_1118_att'];
           $reportphy1118 = $row['phy_1118_re'];
           $quizphy1118 = $row['phy_1118_quiz'];
           $bvphy1118 = $row['phy_1118_bv'];

           $resphy1118 = $attphy1118+$reportphy1118+$quizphy1118+$bvphy1118;

           //echo '<br>';

           // echo $resphy1118;

           //echo '<br>';

           if($resphy1118>=0 && $resphy1118<=39){
               $gpphy1118 = 0.00;
           }
           else if($resphy1118>=40 && $resphy1118<=44){
               $gpphy1118 = 2.00;
           }
           else if($resphy1118>=45 && $resphy1118<=49){
               $gpphy1118 = 2.25;
           }
           else if($resphy1118>=50 && $resphy1118<=54){
               $gpphy1118 = 2.50;
           }
           else if($resphy1118>=55 && $resphy1118<=59){
               $gpphy1118 = 2.75;
           }
           else if($resphy1118>=60 && $resphy1118<=64){
               $gpphy1118 = 3.00;
           }
           else if($resphy1118>=65 && $resphy1118<=69){
               $gpphy1118 = 3.25;
           }
           else if($resphy1118>=70 && $resphy1118<=74){
               $gpphy1118 = 3.50;
           }
           else if($resphy1118>=75 && $resphy1118<=79){
               $gpphy1118 = 3.75;
           }
           else if($resphy1118>=80){
               $gpphy1118 = 4.00;
           }

           //echo '<br>';

           // echo $gpphy1118;


           // sessional phy 1118 ends



           //echo '<br>';


           // sessional hum 1118 starts


           $atthum1118 = $row['hum_1118_att'];
           $reporthum1118 = $row['hum_1118_re'];
           $quizhum1118 = $row['hum_1118_quiz'];
           $bvhum1118 = $row['hum_1118_bv'];

           $reshum1118 = $atthum1118+$reporthum1118+$quizhum1118+$bvhum1118;

           //echo '<br>';

           // echo $reshum1118;

           //echo '<br>';

           if($reshum1118>=0 && $reshum1118<=39){
               $gphum1118 = 0.00;
           }
           else if($reshum1118>=40 && $reshum1118<=44){
               $gphum1118 = 2.00;
           }
           else if($reshum1118>=45 && $reshum1118<=49){
               $gphum1118 = 2.25;
           }
           else if($reshum1118>=50 && $reshum1118<=54){
               $gphum1118 = 2.50;
           }
           else if($reshum1118>=55 && $reshum1118<=59){
               $gphum1118 = 2.75;
           }
           else if($reshum1118>=60 && $reshum1118<=64){
               $gphum1118 = 3.00;
           }
           else if($reshum1118>=65 && $reshum1118<=69){
               $gphum1118 = 3.25;
           }
           else if($reshum1118>=70 && $reshum1118<=74){
               $gphum1118 = 3.50;
           }
           else if($reshum1118>=75 && $reshum1118<=79){
               $gphum1118 = 3.75;
           }
           else if($reshum1118>=80){
               $gphum1118 = 4.00;
           }

           //echo '<br>';

           // echo $gphum1118;


           // sessional hum 1118 ends



           // echo '<br>';
           // echo '<br>';
           // echo '<br>';
           // echo '<br>';
           // echo '<br>';



           // computer system ece 1100 starts

           $res1100 = $row['ece_1100_score'];

           //echo '<br>';

           // echo $res1100;

           //echo '<br>';

           if($res1100>=0 && $res1100<=39){
               $gp1100 = 0.00;
           }
           else if($res1100>=40 && $res1100<=44){
               $gp1100 = 2.00;
           }
           else if($res1100>=45 && $res1100<=49){
               $gp1100 = 2.25;
           }
           else if($res1100>=50 && $res1100<=54){
               $gp1100 = 2.50;
           }
           else if($res1100>=55 && $res1100<=59){
               $gp1100 = 2.75;
           }
           else if($res1100>=60 && $res1100<=64){
               $gp1100 = 3.00;
           }
           else if($res1100>=65 && $res1100<=69){
               $gp1100 = 3.25;
           }
           else if($res1100>=70 && $res1100<=74){
               $gp1100 = 3.50;
           }
           else if($res1100>=75 && $res1100<=79){
               $gp1100 = 3.75;
           }
           else if($res1100>=80){
               $gp1100 = 4.00;
           }

           // echo '<br>';

           // echo $gp1100;

           // echo '<br>';
           // echo '<br>';
           // echo '<br>';


           // computer system ece 1100 ends

           echo '<br>';

           $gp11 = ($gp1101+ $gp1103+ $gpmath1117+ $gphum1117+ $gpphy1117)*3 + ($gp1102*1.5) + ($gp1104*1.5 + $gphum1118*0.75 + $gpphy1118*0.75) + ($gp1100*0.75);

           $format_gp11 = number_format($gp11, 2);

           $gpa11 =  (($gp1101+ $gp1103+ $gpmath1117+ $gphum1117+ $gpphy1117)*3 + ($gp1102*1.5) + ($gp1104*1.5 + $gphum1118*0.75 + $gpphy1118*0.75) + ($gp1100*0.75))/20.25;

           $format_gpa11 = number_format($gpa11, 2);



           ?>

        




            <div class="resflex">
                <div>Roll: <?php echo $row['roll11']; ?></div> 
                <div>GP: <?php echo $format_gp11 ?></div>
                <div>GPA: <?php echo $format_gpa11 ?></div>
                <div>CGPA: <?php echo $format_gpa11  ?></div>
            </div>
          
            <br>
            <br>
           



<?php
	} 
?>

 <!-- Result 1-1 Ends -->







 
 
<!-- Result 1-2 Starts -->


<div class="segment-area">
   <h3>1st Year Even Semester Result</h3>
</div>


<?php

$db_12 = mysqli_query($link, "SELECT * FROM `semester_12` WHERE `roll12` = ".$_SESSION['student_login']);



while($row = mysqli_fetch_assoc($db_12)){
?>





<?php


          // theory ece 1201 starts

          $ct1_1201 = $row['ece_1201_ct1'];
          $ct2_1201 = $row['ece_1201_ct2'];
          $ct3_1201 = $row['ece_1201_ct3'];
          $ct4_1201 = $row['ece_1201_ct4'];
          $att1201 = $row['ece_1201_att'];
          $exam1201 = $row['ece_1201_exam'];


          if($ct1_1201==0){
              $avg_1201 = ($ct2_1201+$ct3_1201+$ct4_1201)/3;
          }
          else if($ct2_1201==0){
              $avg_1201 = ($ct1_1201+$ct3_1201+$ct4_1201)/3;
          }
          else if($ct3_1201==0){
              $avg_1201 = ($ct2_1201+$ct1_1201+$ct4_1201)/3;
          }
          else if($ct4_1201==0){
              $avg_1201 = ($ct2_1201+$ct3_1201+$ct1_1201)/3;
          }
          else if($ct1_1201==0 && $ct2_1201==0){
              $avg_1201 = ($ct3_1201+$ct4_1201)/3;
          }
          else if($ct1_1201==0 && $ct3_1201==0){
              $avg_1201 = ($ct2_1201+$ct4_1201)/3;
          }
          else if($ct1_1201==0 && $ct4_1201==0){
              $avg_1201 = ($ct2_1201+$ct3_1201)/3;
          }
          else if($ct2_1201==0 && $ct3_1201==0){
              $avg_1201 = ($ct1_1201+$ct4_1201)/3;
          }
          else if($ct2_1201==0 && $ct4_1201==0){
              $avg_1201 = ($ct1_1201+$ct3_1201)/3;
          }
          else if($ct3_1201==0 && $ct4_1201==0){
              $avg_1201 = ($ct1_1201+$ct2_1201)/3;
          }
          else if($ct1_1201==0 && $ct2_1201==0 && $ct3_1201==0){
              $avg_1201 = $ct4_1201/3;
          }
          else if($ct1_1201==0 && $ct2_1201==0 && $ct4_1201==0){
              $avg_1201 = $ct3_1201/3;
          }
          else if($ct1_1201==0 && $ct3_1201==0 && $ct4_1201==0){
              $avg_1201 = $ct2_1201/3;
          }
          else if($ct2_1201==0 && $ct3_1201==0 && $ct4_1201==0){
              $avg_1201 = $ct1_1201/3;
          }
          else if($ct1_1201==0 && $ct2_1201==0 && $ct3_1201==0 && $ct4_1201==0){
              $avg_1201 = 0;
          }
          else if(($ct1_1201 > $ct3_1201) && ($ct1_1201 > $ct4_1201) && ($ct2_1201 > $ct3_1201) && ($ct2_1201 > $ct4_1201) && ($ct3_1201 == $ct4_1201)){
              $avg_1201 = ($ct1_1201+$ct2_1201+$ct3_1201)/3;
          }
          else if(($ct1_1201 > $ct2_1201) && ($ct1_1201 > $ct4_1201) && ($ct3_1201 > $ct2_1201) && ($ct3_1201 > $ct4_1201) && ($ct2_1201 == $ct4_1201)){
              $avg_1201 = ($ct1_1201+$ct2_1201+$ct3_1201)/3;
          }
          else if(($ct1_1201 > $ct2_1201) && ($ct1_1201 > $ct3_1201) && ($ct4_1201 > $ct2_1201) && ($ct4_1201 > $ct3_1201) && ($ct2_1201 == $ct3_1201)){
              $avg_1201 = ($ct1_1201+$ct2_1201+$ct4_1201)/3;
          }
          else if(($ct2_1201 > $ct1_1201) && ($ct2_1201 > $ct4_1201) && ($ct3_1201 > $ct1_1201) && ($ct3_1201 > $ct4_1201) && ($ct1_1201 == $ct4_1201)){
              $avg_1201 = ($ct1_1201+$ct2_1201+$ct3_1201)/3;
          }
          else if(($ct2_1201 > $ct1_1201) && ($ct2_1201 > $ct3_1201) && ($ct4_1201 > $ct1_1201) && ($ct4_1201 > $ct3_1201) && ($ct1_1201 == $ct3_1201)){
              $avg_1201 = ($ct1_1201+$ct2_1201+$ct4_1201)/3;
          }
          else if(($ct3_1201 > $ct1_1201) && ($ct3_1201 > $ct2_1201) && ($ct4_1201 > $ct1_1201) && ($ct4_1201 > $ct2_1201) && ($ct1_1201 == $ct2_1201)){
              $avg_1201 = ($ct1_1201+$ct3_1201+$ct4_1201)/3;
          }
          else if(($ct1_1201 > $ct4_1201) && ($ct2_1201 > $ct4_1201) && ($ct3_1201 > $ct4_1201 )){
              $avg_1201 = ($ct1_1201+$ct2_1201+$ct3_1201)/3;
          }
          else if(($ct1_1201 > $ct3_1201) && ($ct2_1201 > $ct3_1201) && ($ct4_1201 > $ct3_1201 )){
              $avg_1201 = ($ct1_1201+$ct2_1201+$ct4_1201)/3;
          }
          else if(($ct1_1201 > $ct2_1201) && ($ct3_1201 > $ct2_1201) && ($ct4_1201 > $ct2_1201 )){
              $avg_1201 = ($ct1_1201+$ct3_1201+$ct4_1201)/3;
          }
          else if(($ct2_1201 > $ct1_1201) && ($ct3_1201 > $ct1_1201) && ($ct4_1201 > $ct1_1201 )){
              $avg_1201 = ($ct2_1201+$ct3_1201+$ct4_1201)/3;
          }
          else if($ct1_1201==$ct2_1201 && $ct2_1201==$ct3_1201 && $ct3_1201==$ct4_1201){
              $avg_1201 = ($ct1_1201+$ct2_1201+$ct3_1201)/3;
          }
          else if(($ct1_1201 > $ct2_1201) && ($ct2_1201 > $ct3_1201) && ($ct3_1201 > $ct4_1201)){
              $avg_1201 = ($ct1_1201+$ct2_1201+$ct3_1201)/3;
          }
          else if(($ct2_1201 > $ct3_1201) && ($ct3_1201 > $ct4_1201) && ($ct4_1201 > $ct1_1201)){
              $avg_1201 = ($ct2_1201+$ct3_1201+$ct4_1201)/3;
          }
          else if(($ct3_1201 > $ct4_1201) && ($ct4_1201 > $ct1_1201) && ($ct1_1201 > $ct2_1201)){
              $avg_1201 = ($ct1_1201+$ct3_1201+$ct4_1201)/3;
          }
          else if(($ct4_1201 > $ct1_1201) && ($ct1_1201 > $ct2_1201) && ($ct2_1201 > $ct3_1201)){
              $avg_1201 = ($ct1_1201+$ct2_1201+$ct4_1201)/3;
          }
          else if(($ct1_1201 > $ct2_1201) && ($ct1_1201 > $ct3_1201) && ($ct1_1201 > $ct4_1201) && ($ct2_1201==$ct3_1201) && ($ct3_1201==$ct4_1201)){
              $avg_1201 = ($ct1_1201+$ct2_1201+$ct3_1201)/3;
          }
          else if(($ct2_1201 > $ct3_1201) && ($ct2_1201 > $ct4_1201) && ($ct2_1201 > $ct1_1201) && ($ct3_1201==$ct4_1201) && ($ct4_1201==$ct1_1201)){
              $avg_1201 = ($ct2_1201+$ct3_1201+$ct4_1201)/3;
          }
          else if(($ct3_1201 > $ct1_1201) && ($ct3_1201 > $ct2_1201) && ($ct3_1201 > $ct4_1201) && ($ct1_1201==$ct2_1201) && ($ct2_1201==$ct4_1201)){
              $avg_1201 = ($ct3_1201+$ct2_1201+$ct4_1201)/3;
          }
          else if(($ct4_1201 > $ct1_1201) && ($ct4_1201 > $ct2_1201) && ($ct4_1201 > $ct3_1201) && ($ct1_1201==$ct2_1201) && ($ct2_1201==$ct3_1201)){
              $avg_1201 = ($ct1_1201+$ct2_1201+$ct4_1201)/3;
          }



          $res1201 = $avg_1201+$att1201+$exam1201;

          //echo '<br>';

          // echo $res1201;

          //echo '<br>';

          if($res1201>=0 && $res1201<=39){
              $gp1201 = 0.00;
          }
          else if($res1201>39 && $res1201<=44){
              $gp1201 = 2.00;
          }
          else if($res1201>44 && $res1201<=49){
              $gp1201 = 2.25;
          }
          else if($res1201>49 && $res1201<=54){
              $gp1201 = 2.50;
          }
          else if($res1201>54 && $res1201<=59){
              $gp1201 = 2.75;
          }
          else if($res1201>59 && $res1201<=64){
              $gp1201 = 3.00;
          }
          else if($res1201>64 && $res1201<=69){
              $gp1201 = 3.25;
          }
          else if($res1201>69 && $res1201<=74){
              $gp1201 = 3.50;
          }
          else if($res1201>74 && $res1201<=79){
              $gp1201 = 3.75;
          }
          else if($res1201>79){
              $gp1201 = 4.00;
          }

          //echo '<br>';

          // echo $gp1201;


          //theory ece 1201 ends


           //echo '<br>';


          // theory ece 1203 starts

          $ct1_1203 = $row['ece_1203_ct1'];
          $ct2_1203 = $row['ece_1203_ct2'];
          $ct3_1203 = $row['ece_1203_ct3'];
          $ct4_1203 = $row['ece_1203_ct4'];
          $att1203 = $row['ece_1203_att'];
          $exam1203 = $row['ece_1203_exam'];


          if($ct1_1203==0){
              $avg_1203 = ($ct2_1203+$ct3_1203+$ct4_1203)/3;
          }
          else if($ct2_1203==0){
              $avg_1203 = ($ct1_1203+$ct3_1203+$ct4_1203)/3;
          }
          else if($ct3_1203==0){
              $avg_1203 = ($ct2_1203+$ct1_1203+$ct4_1203)/3;
          }
          else if($ct4_1203==0){
              $avg_1203 = ($ct2_1203+$ct3_1203+$ct1_1203)/3;
          }
          else if($ct1_1203==0 && $ct2_1203==0){
              $avg_1203 = ($ct3_1203+$ct4_1203)/3;
          }
          else if($ct1_1203==0 && $ct3_1203==0){
              $avg_1203 = ($ct2_1203+$ct4_1203)/3;
          }
          else if($ct1_1203==0 && $ct4_1203==0){
              $avg_1203 = ($ct2_1203+$ct3_1203)/3;
          }
          else if($ct2_1203==0 && $ct3_1203==0){
              $avg_1203 = ($ct1_1203+$ct4_1203)/3;
          }
          else if($ct2_1203==0 && $ct4_1203==0){
              $avg_1203 = ($ct1_1203+$ct3_1203)/3;
          }
          else if($ct3_1203==0 && $ct4_1203==0){
              $avg_1203 = ($ct1_1203+$ct2_1203)/3;
          }
          else if($ct1_1203==0 && $ct2_1203==0 && $ct3_1203==0){
              $avg_1203 = $ct4_1203/3;
          }
          else if($ct1_1203==0 && $ct2_1203==0 && $ct4_1203==0){
              $avg_1203 = $ct3_1203/3;
          }
          else if($ct1_1203==0 && $ct3_1203==0 && $ct4_1203==0){
              $avg_1203 = $ct2_1203/3;
          }
          else if($ct2_1203==0 && $ct3_1203==0 && $ct4_1203==0){
              $avg_1203 = $ct1_1203/3;
          }
          else if($ct1_1203==0 && $ct2_1203==0 && $ct3_1203==0 && $ct4_1203==0){
              $avg_1203 = 0;
          }
          else if(($ct1_1203 > $ct3_1203) && ($ct1_1203 > $ct4_1203) && ($ct2_1203 > $ct3_1203) && ($ct2_1203 > $ct4_1203) && ($ct3_1203 == $ct4_1203)){
              $avg_1203 = ($ct1_1203+$ct2_1203+$ct3_1203)/3;
          }
          else if(($ct1_1203 > $ct2_1203) && ($ct1_1203 > $ct4_1203) && ($ct3_1203 > $ct2_1203) && ($ct3_1203 > $ct4_1203) && ($ct2_1203 == $ct4_1203)){
              $avg_1203 = ($ct1_1203+$ct2_1203+$ct3_1203)/3;
          }
          else if(($ct1_1203 > $ct2_1203) && ($ct1_1203 > $ct3_1203) && ($ct4_1203 > $ct2_1203) && ($ct4_1203 > $ct3_1203) && ($ct2_1203 == $ct3_1203)){
              $avg_1203 = ($ct1_1203+$ct2_1203+$ct4_1203)/3;
          }
          else if(($ct2_1203 > $ct1_1203) && ($ct2_1203 > $ct4_1203) && ($ct3_1203 > $ct1_1203) && ($ct3_1203 > $ct4_1203) && ($ct1_1203 == $ct4_1203)){
              $avg_1203 = ($ct1_1203+$ct2_1203+$ct3_1203)/3;
          }
          else if(($ct2_1203 > $ct1_1203) && ($ct2_1203 > $ct3_1203) && ($ct4_1203 > $ct1_1203) && ($ct4_1203 > $ct3_1203) && ($ct1_1203 == $ct3_1203)){
              $avg_1203 = ($ct1_1203+$ct2_1203+$ct4_1203)/3;
          }
          else if(($ct3_1203 > $ct1_1203) && ($ct3_1203 > $ct2_1203) && ($ct4_1203 > $ct1_1203) && ($ct4_1203 > $ct2_1203) && ($ct1_1203 == $ct2_1203)){
              $avg_1203 = ($ct1_1203+$ct3_1203+$ct4_1203)/3;
          }
          else if(($ct1_1203 > $ct4_1203) && ($ct2_1203 > $ct4_1203) && ($ct3_1203 > $ct4_1203)){
              $avg_1203 = ($ct1_1203+$ct2_1203+$ct3_1203)/3;
          }
          else if(($ct1_1203 > $ct3_1203) && ($ct2_1203 > $ct3_1203) && ($ct4_1203 > $ct3_1203 )){
              $avg_1203 = ($ct1_1203+$ct2_1203+$ct4_1203)/3;
          }
          else if(($ct1_1203 > $ct2_1203) && ($ct3_1203 > $ct2_1203) && ($ct4_1203 > $ct2_1203) ){
              $avg_1203 = ($ct1_1203+$ct3_1203+$ct4_1203)/3;
          }
          else if(($ct2_1203 > $ct1_1203) && ($ct3_1203 > $ct1_1203) && ($ct4_1203 > $ct1_1203)){
              $avg_1203 = ($ct2_1203+$ct3_1203+$ct4_1203)/3;
          }
          else if($ct1_1203==$ct2_1203 && $ct2_1203==$ct3_1203 && $ct3_1203==$ct4_1203){
              $avg_1203 = ($ct1_1203+$ct2_1203+$ct3_1203)/3;
          }
          else if(($ct1_1203 > $ct2_1203) && ($ct2_1203 > $ct3_1203) && ($ct3_1203 > $ct4_1203)){
              $avg_1203 = ($ct1_1203+$ct2_1203+$ct3_1203)/3;
          }
          else if(($ct2_1203 > $ct3_1203) && ($ct3_1203 > $ct4_1203) && ($ct4_1203 > $ct1_1203)){
              $avg_1203 = ($ct2_1203+$ct3_1203+$ct4_1203)/3;
          }
          else if(($ct3_1203 > $ct4_1203) && ($ct4_1203 > $ct1_1203) && ($ct1_1203 > $ct2_1203)){
              $avg_1203 = ($ct1_1203+$ct3_1203+$ct4_1203)/3;
          }
          else if(($ct4_1203 > $ct1_1203) && ($ct1_1203 > $ct2_1203) && ($ct2_1203 > $ct3_1203)){
              $avg_1203 = ($ct1_1203+$ct2_1203+$ct4_1203)/3;
          }
          else if(($ct1_1203 > $ct2_1203) && ($ct1_1203 > $ct3_1203) && ($ct1_1203 > $ct4_1203) && ($ct2_1203==$ct3_1203) && ($ct3_1203==$ct4_1203)){
              $avg_1203 = ($ct1_1203+$ct2_1203+$ct3_1203)/3;
          }
          else if(($ct2_1203 > $ct3_1203) && ($ct2_1203 > $ct4_1203) && ($ct2_1203 > $ct1_1203) && ($ct3_1203==$ct4_1203) && ($ct4_1203==$ct1_1203)){
              $avg_1203 = ($ct1_1203+$ct2_1203+$ct3_1203)/3;
          }
          else if(($ct3_1203 > $ct1_1203) && ($ct3_1203 > $ct2_1203) && ($ct3_1203 > $ct4_1203) && ($ct1_1203==$ct2_1203) && ($ct2_1203==$ct4_1203)){
              $avg_1203 = ($ct3_1203+$ct2_1203+$ct4_1203)/3;
          }
          else if(($ct4_1203 > $ct1_1203) && ($ct4_1203 > $ct2_1203) && ($ct4_1203 > $ct3_1203) && ($ct1_1203==$ct2_1203) && ($ct2_1203==$ct3_1203)){
              $avg_1203 = ($ct1_1203+$ct2_1203+$ct4_1203)/3;
          }



          $res1203 = $avg_1203+$att1203+$exam1203;

          //echo '<br>';

          // echo $res1203;

          //echo '<br>';

          if($res1203>=0 && $res1203<=39){
              $gp1203 = 0.00;
          }
          else if($res1203>39 && $res1203<=44){
              $gp1203 = 2.00;
          }
          else if($res1203>44 && $res1203<=49){
              $gp1203 = 2.25;
          }
          else if($res1203>49 && $res1203<=54){
              $gp1203 = 2.50;
          }
          else if($res1203>54 && $res1203<=59){
              $gp1203 = 2.75;
          }
          else if($res1203>59 && $res1203<=64){
              $gp1203 = 3.00;
          }
          else if($res1203>64 && $res1203<=69){
              $gp1203 = 3.25;
          }
          else if($res1203>69 && $res1203<=74){
              $gp1203 = 3.50;
          }
          else if($res1203>74 && $res1203<=79){
              $gp1203 = 3.75;
          }
          else if($res1203>79){
              $gp1203 = 4.00;
          }

          //echo '<br>';

          // echo $gp1203;


          //theory ece 1203 ends




          //echo "<br>";



          // theory ece 1205 starts


          $ct1_1205 = $row['ece_1205_ct1'];
          $ct2_1205 = $row['ece_1205_ct2'];
          $ct3_1205 = $row['ece_1205_ct3'];
          $ct4_1205 = $row['ece_1205_ct4'];
          $att1205 = $row['ece_1205_att'];
          $exam1205 = $row['ece_1205_exam'];





          if($ct1_1205==0){
              $avg_1205 = ($ct2_1205+$ct3_1205+$ct4_1205)/3;
          }
          else if($ct2_1205==0){
              $avg_1205 = ($ct1_1205+$ct3_1205+$ct4_1205)/3;
          }
          else if($ct3_1205==0){
              $avg_1205 = ($ct2_1205+$ct1_1205+$ct4_1205)/3;
          }
          else if($ct4_1205==0){
              $avg_1205 = ($ct2_1205+$ct3_1205+$ct1_1205)/3;
          }
          else if($ct1_1205==0 && $ct2_1205==0){
              $avg_1205 = ($ct3_1205+$ct4_1205)/3;
          }
          else if($ct1_1205==0 && $ct3_1205==0){
              $avg_1205 = ($ct2_1205+$ct4_1205)/3;
          }
          else if($ct1_1205==0 && $ct4_1205==0){
              $avg_1205 = ($ct2_1205+$ct3_1205)/3;
          }
          else if($ct2_1205==0 && $ct3_1205==0){
              $avg_1205 = ($ct1_1205+$ct4_1205)/3;
          }
          else if($ct2_1205==0 && $ct4_1205==0){
              $avg_1205 = ($ct1_1205+$ct3_1205)/3;
          }
          else if($ct3_1205==0 && $ct4_1205==0){
              $avg_1205 = ($ct1_1205+$ct2_1205)/3;
          }
          else if($ct1_1205==0 && $ct2_1205==0 && $ct3_1205==0){
              $avg_1205 = $ct4_1205/3;
          }
          else if($ct1_1205==0 && $ct2_1205==0 && $ct4_1205==0){
              $avg_1205 = $ct3_1205/3;
          }
          else if($ct1_1205==0 && $ct3_1205==0 && $ct4_1205==0){
              $avg_1205 = $ct2_1205/3;
          }
          else if($ct2_1205==0 && $ct3_1205==0 && $ct4_1205==0){
              $avg_1205 = $ct1_1205/3;
          }
          else if($ct1_1205==0 && $ct2_1205==0 && $ct3_1205==0 && $ct4_1205==0){
              $avg_1205 = 0;
          }
          else if(($ct1_1205 > $ct3_1205) && ($ct1_1205 > $ct4_1205) && ($ct2_1205 > $ct3_1205) && ($ct2_1205 > $ct4_1205) && ($ct3_1205 == $ct4_1205)){
              $avg_1205 = ($ct1_1205+$ct2_1205+$ct3_1205)/3;
          }
          else if(($ct1_1205 > $ct2_1205) && ($ct1_1205 > $ct4_1205) && ($ct3_1205 > $ct2_1205) && ($ct3_1205 > $ct4_1205) && ($ct2_1205 == $ct4_1205)){
              $avg_1205 = ($ct1_1205+$ct2_1205+$ct3_1205)/3;
          }
          else if(($ct1_1205 > $ct2_1205) && ($ct1_1205 > $ct3_1205) && ($ct4_1205 > $ct2_1205) && ($ct4_1205 > $ct3_1205) && ($ct2_1205 == $ct3_1205)){
              $avg_1205 = ($ct1_1205+$ct2_1205+$ct4_1205)/3;
          }
          else if(($ct2_1205 > $ct1_1205) && ($ct2_1205 > $ct4_1205) && ($ct3_1205 > $ct1_1205) && ($ct3_1205 > $ct4_1205) && ($ct1_1205 == $ct4_1205)){
              $avg_1205 = ($ct1_1205+$ct2_1205+$ct3_1205)/3;
          }
          else if(($ct2_1205 > $ct1_1205) && ($ct2_1205 > $ct3_1205) && ($ct4_1205 > $ct1_1205) && ($ct4_1205 > $ct3_1205) && ($ct1_1205 == $ct3_1205)){
              $avg_1205 = ($ct1_1205+$ct2_1205+$ct4_1205)/3;
          }
          else if(($ct3_1205 > $ct1_1205) && ($ct3_1205 > $ct2_1205) && ($ct4_1205 > $ct1_1205) && ($ct4_1205 > $ct2_1205) && ($ct1_1205 == $ct2_1205)){
              $avg_1205 = ($ct1_1205+$ct3_1205+$ct4_1205)/3;
          }
          else if(($ct1_1205 > $ct4_1205) && ($ct2_1205 > $ct4_1205) && ($ct3_1205 > $ct4_1205)){
              $avg_1205 = ($ct1_1205+$ct2_1205+$ct3_1205)/3;
          }
          else if(($ct1_1205 > $ct3_1205) && ($ct2_1205 > $ct3_1205) && ($ct4_1205 > $ct3_1205 )){
              $avg_1205 = ($ct1_1205+$ct2_1205+$ct4_1205)/3;
          }
          else if(($ct1_1205 > $ct2_1205) && ($ct3_1205 > $ct2_1205) && ($ct4_1205 > $ct2_1205) ){
              $avg_1205 = ($ct1_1205+$ct3_1205+$ct4_1205)/3;
          }
          else if(($ct2_1205 > $ct1_1205) && ($ct3_1205 > $ct1_1205) && ($ct4_1205 > $ct1_1205)){
              $avg_1205 = ($ct2_1205+$ct3_1205+$ct4_1205)/3;
          }
          else if($ct1_1205==$ct2_1205 && $ct2_1205==$ct3_1205 && $ct3_1205==$ct4_1205){
              $avg_1205 = ($ct1_1205+$ct2_1205+$ct3_1205)/3;
          }
          else if(($ct1_1205 > $ct2_1205) && ($ct2_1205 > $ct3_1205) && ($ct3_1205 > $ct4_1205)){
              $avg_1205 = ($ct1_1205+$ct2_1205+$ct3_1205)/3;
          }
          else if(($ct2_1205 > $ct3_1205) && ($ct3_1205 > $ct4_1205) && ($ct4_1205 > $ct1_1205)){
              $avg_1205 = ($ct2_1205+$ct3_1205+$ct4_1205)/3;
          }
          else if(($ct3_1205 > $ct4_1205) && ($ct4_1205 > $ct1_1205) && ($ct1_1205 > $ct2_1205)){
              $avg_1205 = ($ct1_1205+$ct3_1205+$ct4_1205)/3;
          }
          else if(($ct4_1205 > $ct1_1205) && ($ct1_1205 > $ct2_1205) && ($ct2_1205 > $ct3_1205)){
              $avg_1205 = ($ct1_1205+$ct2_1205+$ct4_1205)/3;
          }
          else if(($ct1_1205 > $ct2_1205) && ($ct1_1205 > $ct3_1205) && ($ct1_1205 > $ct4_1205) && ($ct2_1205==$ct3_1205) && ($ct3_1205==$ct4_1205)){
              $avg_1205 = ($ct1_1205+$ct2_1205+$ct3_1205)/3;
          }
          else if(($ct2_1205 > $ct3_1205) && ($ct2_1205 > $ct4_1205) && ($ct2_1205 > $ct1_1205) && ($ct3_1205==$ct4_1205) && ($ct4_1205==$ct1_1205)){
              $avg_1205 = ($ct1_1205+$ct2_1205+$ct3_1205)/3;
          }
          else if(($ct3_1205 > $ct1_1205) && ($ct3_1205 > $ct2_1205) && ($ct3_1205 > $ct4_1205) && ($ct1_1205==$ct2_1205) && ($ct2_1205==$ct4_1205)){
              $avg_1205 = ($ct3_1205+$ct2_1205+$ct4_1205)/3;
          }
          else if(($ct4_1205 > $ct1_1205) && ($ct4_1205 > $ct2_1205) && ($ct4_1205 > $ct3_1205) && ($ct1_1205==$ct2_1205) && ($ct2_1205==$ct3_1205)){
              $avg_1205 = ($ct1_1205+$ct2_1205+$ct4_1205)/3;
          }



          $res1205 = $avg_1205+$att1205+$exam1205;

          //echo '<br>';

          // echo $res1205;

          //echo '<br>';

          if($res1205>=0 && $res1205<=39){
              $gp1205 = 0.00;
          }
          else if($res1205>39 && $res1205<=44){
              $gp1205 = 2.00;
          }
          else if($res1205>44 && $res1205<=49){
              $gp1205 = 2.25;
          }
          else if($res1205>49 && $res1205<=54){
              $gp1205 = 2.50;
          }
          else if($res1205>54 && $res1205<=59){
              $gp1205 = 2.75;
          }
          else if($res1205>59 && $res1205<=64){
              $gp1205 = 3.00;
          }
          else if($res1205>64 && $res1205<=69){
              $gp1205 = 3.25;
          }
          else if($res1205>69 && $res1205<=74){
              $gp1205 = 3.50;
          }
          else if($res1205>74 && $res1205<=79){
              $gp1205 = 3.75;
          }
          else if($res1205>79){
              $gp1205 = 4.00;
          }

          //echo '<br>';

          // echo $gp1205;




          //theory ece 1205 ends




          //echo '<br>';




          // theory math 1217 starts


          $ct1math_1217 = $row['math_1217_ct1'];
          $ct2math_1217 = $row['math_1217_ct2'];
          $ct3math_1217 = $row['math_1217_ct3'];
          $ct4math_1217 = $row['math_1217_ct4'];
          $att_math_1217 = $row['math_1217_att'];
          $exam_math_1217 = $row['math_1217_exam'];



          if($ct1math_1217==0){
              $avg_math1217 = ($ct2math_1217+$ct3math_1217+$ct4math_1217)/3;
          }
          else if($ct2math_1217==0){
              $avg_math1217 = ($ct1math_1217+$ct3math_1217+$ct4math_1217)/3;
          }
          else if($ct3math_1217==0){
              $avg_math1217 = ($ct2math_1217+$ct1math_1217+$ct4math_1217)/3;
          }
          else if($ct4math_1217==0){
              $avg_math1217 = ($ct2math_1217+$ct3math_1217+$ct1math_1217)/3;
          }
          else if($ct1math_1217==0 && $ct2math_1217==0){
              $avg_math1217 = ($ct3math_1217+$ct4math_1217)/3;
          }
          else if($ct1math_1217==0 && $ct3math_1217==0){
              $avg_math1217 = ($ct2math_1217+$ct4math_1217)/3;
          }
          else if($ct1math_1217==0 && $ct4math_1217==0){
              $avg_math1217 = ($ct2math_1217+$ct3math_1217)/3;
          }
          else if($ct2math_1217==0 && $ct3math_1217==0){
              $avg_math1217 = ($ct1math_1217+$ct4math_1217)/3;
          }
          else if($ct2math_1217==0 && $ct4math_1217==0){
              $avg_math1217 = ($ct1math_1217+$ct3math_1217)/3;
          }
          else if($ct3math_1217==0 && $ct4math_1217==0){
              $avg_math1217 = ($ct1math_1217+$ct2math_1217)/3;
          }
          else if($ct1math_1217==0 && $ct2math_1217==0 && $ct3math_1217==0){
              $avg_math1217 = $ct4math_1217/3;
          }
          else if($ct1math_1217==0 && $ct2math_1217==0 && $ct4math_1217==0){
              $avg_math1217 = $ct3math_1217/3;
          }
          else if($ct1math_1217==0 && $ct3math_1217==0 && $ct4math_1217==0){
              $avg_math1217 = $ct2math_1217/3;
          }
          else if($ct2math_1217==0 && $ct3math_1217==0 && $ct4math_1217==0){
              $avg_math1217 = $ct1math_1217/3;
          }
          else if($ct1math_1217==0 && $ct2math_1217==0 && $ct3math_1217==0 && $ct4math_1217==0){
              $avg_math1217 = 0;
          }
          else if(($ct1math_1217 > $ct3math_1217) && ($ct1math_1217 > $ct4math_1217) && ($ct2math_1217 > $ct3math_1217) && ($ct2math_1217 > $ct4math_1217) && ($ct3math_1217 == $ct4math_1217)){
              $avg_math1217 = ($ct1math_1217+$ct2math_1217+$ct3math_1217)/3;
          }
          else if(($ct1math_1217 > $ct2math_1217) && ($ct1math_1217 > $ct4math_1217) && ($ct3math_1217 > $ct2math_1217) && ($ct3math_1217 > $ct4math_1217) && ($ct2math_1217 == $ct4math_1217)){
              $avg_math1217 = ($ct1math_1217+$ct2math_1217+$ct3math_1217)/3;
          }
          else if(($ct1math_1217 > $ct2math_1217) && ($ct1math_1217 > $ct3math_1217) && ($ct4math_1217 > $ct2math_1217) && ($ct4math_1217 > $ct3math_1217) && ($ct2math_1217 == $ct3math_1217)){
              $avg_math1217 = ($ct1math_1217+$ct2math_1217+$ct4math_1217)/3;
          }
          else if(($ct2math_1217 > $ct1math_1217) && ($ct2math_1217 > $ct4math_1217) && ($ct3math_1217 > $ct1math_1217) && ($ct3math_1217 > $ct4math_1217) && ($ct1math_1217 == $ct4math_1217)){
              $avg_math1217 = ($ct1math_1217+$ct2math_1217+$ct3math_1217)/3;
          }
          else if(($ct2math_1217 > $ct1math_1217) && ($ct2math_1217 > $ct3math_1217) && ($ct4math_1217 > $ct1math_1217) && ($ct4math_1217 > $ct3math_1217) && ($ct1math_1217 == $ct3math_1217)){
              $avg_math1217 = ($ct1math_1217+$ct2math_1217+$ct4math_1217)/3;
          }
          else if(($ct3math_1217 > $ct1math_1217) && ($ct3math_1217 > $ct2math_1217) && ($ct4math_1217 > $ct1math_1217) && ($ct4math_1217 > $ct2math_1217) && ($ct1math_1217 == $ct2math_1217)){
              $avg_math1217 = ($ct1math_1217+$ct3math_1217+$ct4math_1217)/3;
          }
          else if(($ct1math_1217 > $ct4math_1217) && ($ct2math_1217 > $ct4math_1217) && ($ct3math_1217 > $ct4math_1217)){
              $avg_math1217 = ($ct1math_1217+$ct2math_1217+$ct3math_1217)/3;
          }
          else if(($ct1math_1217 > $ct3math_1217) && ($ct2math_1217 > $ct3math_1217) && ($ct4math_1217 > $ct3math_1217 )){
              $avg_math1217 = ($ct1math_1217+$ct2math_1217+$ct4math_1217)/3;
          }
          else if(($ct1math_1217 > $ct2math_1217) && ($ct3math_1217 > $ct2math_1217) && ($ct4math_1217 > $ct2math_1217) ){
              $avg_math1217 = ($ct1math_1217+$ct3math_1217+$ct4math_1217)/3;
          }
          else if(($ct2math_1217 > $ct1math_1217) && ($ct3math_1217 > $ct1math_1217) && ($ct4math_1217 > $ct1math_1217)){
              $avg_math1217 = ($ct2math_1217+$ct3math_1217+$ct4math_1217)/3;
          }
          else if($ct1math_1217==$ct2math_1217 && $ct2math_1217==$ct3math_1217 && $ct3math_1217==$ct4math_1217){
              $avg_math1217 = ($ct1math_1217+$ct2math_1217+$ct3math_1217)/3;
          }
          else if(($ct1math_1217 > $ct2math_1217) && ($ct2math_1217 > $ct3math_1217) && ($ct3math_1217 > $ct4math_1217)){
              $avg_math1217 = ($ct1math_1217+$ct2math_1217+$ct3math_1217)/3;
          }
          else if(($ct2math_1217 > $ct3math_1217) && ($ct3math_1217 > $ct4math_1217) && ($ct4math_1217 > $ct1math_1217)){
              $avg_math1217 = ($ct2math_1217+$ct3math_1217+$ct4math_1217)/3;
          }
          else if(($ct3math_1217 > $ct4math_1217) && ($ct4math_1217 > $ct1math_1217) && ($ct1math_1217 > $ct2math_1217)){
              $avg_math1217 = ($ct1math_1217+$ct3math_1217+$ct4math_1217)/3;
          }
          else if(($ct4math_1217 > $ct1math_1217) && ($ct1math_1217 > $ct2math_1217) && ($ct2math_1217 > $ct3math_1217)){
              $avg_math1217 = ($ct1math_1217+$ct2math_1217+$ct4math_1217)/3;
          }
          else if(($ct1math_1217 > $ct2math_1217) && ($ct1math_1217 > $ct3math_1217) && ($ct1math_1217 > $ct4math_1217) && ($ct2math_1217==$ct3math_1217) && ($ct3math_1217==$ct4math_1217)){
              $avg_math1217 = ($ct1math_1217+$ct2math_1217+$ct3math_1217)/3;
          }
          else if(($ct2math_1217 > $ct3math_1217) && ($ct2math_1217 > $ct4math_1217) && ($ct2math_1217 > $ct1math_1217) && ($ct3math_1217==$ct4math_1217) && ($ct4math_1217==$ct1math_1217)){
              $avg_math1217 = ($ct1math_1217+$ct2math_1217+$ct3math_1217)/3;
          }
          else if(($ct3math_1217 > $ct1math_1217) && ($ct3math_1217 > $ct2math_1217) && ($ct3math_1217 > $ct4math_1217) && ($ct1math_1217==$ct2math_1217) && ($ct2math_1217==$ct4math_1217)){
              $avg_math1217 = ($ct3math_1217+$ct2math_1217+$ct4math_1217)/3;
          }
          else if(($ct4math_1217 > $ct1math_1217) && ($ct4math_1217 > $ct2math_1217) && ($ct4math_1217 > $ct3math_1217) && ($ct1math_1217==$ct2math_1217) && ($ct2math_1217==$ct3math_1217)){
              $avg_math1217 = ($ct1math_1217+$ct2math_1217+$ct4math_1217)/3;
          }



          $resmath1217 = $avg_math1217+$att_math_1217+$exam_math_1217;

          //echo '<br>';

          // echo $resmath1217;

          //echo '<br>';

          if($resmath1217>=0 && $resmath1217<=39){
              $gpmath1217 = 0.00;
          }
          else if($resmath1217>39 && $resmath1217<=44){
              $gpmath1217 = 2.00;
          }
          else if($resmath1217>44 && $resmath1217<=49){
              $gpmath1217 = 2.25;
          }
          else if($resmath1217>49 && $resmath1217<=54){
              $gpmath1217 = 2.50;
          }
          else if($resmath1217>54 && $resmath1217<=59){
              $gpmath1217 = 2.75;
          }
          else if($resmath1217>59 && $resmath1217<=64){
              $gpmath1217 = 3.00;
          }
          else if($resmath1217>64 && $resmath1217<=69){
              $gpmath1217 = 3.25;
          }
          else if($resmath1217>69 && $resmath1217<=74){
              $gpmath1217 = 3.50;
          }
          else if($resmath1217>74 && $resmath1217<=79){
              $gpmath1217 = 3.75;
          }
          else if($resmath1217>79){
              $gpmath1217 = 4.00;
          }

          // echo '<br>';

          // echo $gpmath1217;



          //theory math 1217 ends




          // echo '<br>';




          // theory hum 1217 starts


          $ct1hum_1217 = $row['hum_1217_ct1'];
          $ct2hum_1217 = $row['hum_1217_ct2'];
          $ct3hum_1217 = $row['hum_1217_ct3'];
          $ct4hum_1217 = $row['hum_1217_ct4'];
          $att_hum_1217 = $row['hum_1217_att'];
          $exam_hum_1217 = $row['hum_1217_exam'];



          if($ct1hum_1217==0){
              $avg_hum1217 = ($ct2hum_1217+$ct3hum_1217+$ct4hum_1217)/3;
          }
          else if($ct2hum_1217==0){
              $avg_hum1217 = ($ct1hum_1217+$ct3hum_1217+$ct4hum_1217)/3;
          }
          else if($ct3hum_1217==0){
              $avg_hum1217 = ($ct2hum_1217+$ct1hum_1217+$ct4hum_1217)/3;
          }
          else if($ct4hum_1217==0){
              $avg_hum1217 = ($ct2hum_1217+$ct3hum_1217+$ct1hum_1217)/3;
          }
          else if($ct1hum_1217==0 && $ct2hum_1217==0){
              $avg_hum1217 = ($ct3hum_1217+$ct4hum_1217)/3;
          }
          else if($ct1hum_1217==0 && $ct3hum_1217==0){
              $avg_hum1217 = ($ct2hum_1217+$ct4hum_1217)/3;
          }
          else if($ct1hum_1217==0 && $ct4hum_1217==0){
              $avg_hum1217 = ($ct2hum_1217+$ct3hum_1217)/3;
          }
          else if($ct2hum_1217==0 && $ct3hum_1217==0){
              $avg_hum1217 = ($ct1hum_1217+$ct4hum_1217)/3;
          }
          else if($ct2hum_1217==0 && $ct4hum_1217==0){
              $avg_hum1217 = ($ct1hum_1217+$ct3hum_1217)/3;
          }
          else if($ct3hum_1217==0 && $ct4hum_1217==0){
              $avg_hum1217 = ($ct1hum_1217+$ct2hum_1217)/3;
          }
          else if($ct1hum_1217==0 && $ct2hum_1217==0 && $ct3hum_1217==0){
              $avg_hum1217 = $ct4hum_1217/3;
          }
          else if($ct1hum_1217==0 && $ct2hum_1217==0 && $ct4hum_1217==0){
              $avg_hum1217 = $ct3hum_1217/3;
          }
          else if($ct1hum_1217==0 && $ct3hum_1217==0 && $ct4hum_1217==0){
              $avg_hum1217 = $ct2hum_1217/3;
          }
          else if($ct2hum_1217==0 && $ct3hum_1217==0 && $ct4hum_1217==0){
              $avg_hum1217 = $ct1hum_1217/3;
          }
          else if($ct1hum_1217==0 && $ct2hum_1217==0 && $ct3hum_1217==0 && $ct4hum_1217==0){
              $avg_hum1217 = 0;
          }
          else if(($ct1hum_1217 > $ct3hum_1217) && ($ct1hum_1217 > $ct4hum_1217) && ($ct2hum_1217 > $ct3hum_1217) && ($ct2hum_1217 > $ct4hum_1217) && ($ct3hum_1217 == $ct4hum_1217)){
              $avg_hum1217 = ($ct1hum_1217+$ct2hum_1217+$ct3hum_1217)/3;
          }
          else if(($ct1hum_1217 > $ct2hum_1217) && ($ct1hum_1217 > $ct4hum_1217) && ($ct3hum_1217 > $ct2hum_1217) && ($ct3hum_1217 > $ct4hum_1217) && ($ct2hum_1217 == $ct4hum_1217)){
              $avg_hum1217 = ($ct1hum_1217+$ct2hum_1217+$ct3hum_1217)/3;
          }
          else if(($ct1hum_1217 > $ct2hum_1217) && ($ct1hum_1217 > $ct3hum_1217) && ($ct4hum_1217 > $ct2hum_1217) && ($ct4hum_1217 > $ct3hum_1217) && ($ct2hum_1217 == $ct3hum_1217)){
              $avg_hum1217 = ($ct1hum_1217+$ct2hum_1217+$ct4hum_1217)/3;
          }
          else if(($ct2hum_1217 > $ct1hum_1217) && ($ct2hum_1217 > $ct4hum_1217) && ($ct3hum_1217 > $ct1hum_1217) && ($ct3hum_1217 > $ct4hum_1217) && ($ct1hum_1217 == $ct4hum_1217)){
              $avg_hum1217 = ($ct1hum_1217+$ct2hum_1217+$ct3hum_1217)/3;
          }
          else if(($ct2hum_1217 > $ct1hum_1217) && ($ct2hum_1217 > $ct3hum_1217) && ($ct4hum_1217 > $ct1hum_1217) && ($ct4hum_1217 > $ct3hum_1217) && ($ct1hum_1217 == $ct3hum_1217)){
              $avg_hum1217 = ($ct1hum_1217+$ct2hum_1217+$ct4hum_1217)/3;
          }
          else if(($ct3hum_1217 > $ct1hum_1217) && ($ct3hum_1217 > $ct2hum_1217) && ($ct4hum_1217 > $ct1hum_1217) && ($ct4hum_1217 > $ct2hum_1217) && ($ct1hum_1217 == $ct2hum_1217)){
              $avg_hum1217 = ($ct1hum_1217+$ct3hum_1217+$ct4hum_1217)/3;
          }
          else if(($ct1hum_1217 > $ct4hum_1217) && ($ct2hum_1217 > $ct4hum_1217) && ($ct3hum_1217 > $ct4hum_1217)){
              $avg_hum1217 = ($ct1hum_1217+$ct2hum_1217+$ct3hum_1217)/3;
          }
          else if(($ct1hum_1217 > $ct3hum_1217) && ($ct2hum_1217 > $ct3hum_1217) && ($ct4hum_1217 > $ct3hum_1217 )){
              $avg_hum1217 = ($ct1hum_1217+$ct2hum_1217+$ct4hum_1217)/3;
          }
          else if(($ct1hum_1217 > $ct2hum_1217) && ($ct3hum_1217 > $ct2hum_1217) && ($ct4hum_1217 > $ct2hum_1217) ){
              $avg_hum1217 = ($ct1hum_1217+$ct3hum_1217+$ct4hum_1217)/3;
          }
          else if(($ct2hum_1217 > $ct1hum_1217) && ($ct3hum_1217 > $ct1hum_1217) && ($ct4hum_1217 > $ct1hum_1217)){
              $avg_hum1217 = ($ct2hum_1217+$ct3hum_1217+$ct4hum_1217)/3;
          }
          else if($ct1hum_1217==$ct2hum_1217 && $ct2hum_1217==$ct3hum_1217 && $ct3hum_1217==$ct4hum_1217){
              $avg_hum1217 = ($ct1hum_1217+$ct2hum_1217+$ct3hum_1217)/3;
          }
          else if(($ct1hum_1217 > $ct2hum_1217) && ($ct2hum_1217 > $ct3hum_1217) && ($ct3hum_1217 > $ct4hum_1217)){
              $avg_hum1217 = ($ct1hum_1217+$ct2hum_1217+$ct3hum_1217)/3;
          }
          else if(($ct2hum_1217 > $ct3hum_1217) && ($ct3hum_1217 > $ct4hum_1217) && ($ct4hum_1217 > $ct1hum_1217)){
              $avg_hum1217 = ($ct2hum_1217+$ct3hum_1217+$ct4hum_1217)/3;
          }
          else if(($ct3hum_1217 > $ct4hum_1217) && ($ct4hum_1217 > $ct1hum_1217) && ($ct1hum_1217 > $ct2hum_1217)){
              $avg_hum1217 = ($ct1hum_1217+$ct3hum_1217+$ct4hum_1217)/3;
          }
          else if(($ct4hum_1217 > $ct1hum_1217) && ($ct1hum_1217 > $ct2hum_1217) && ($ct2hum_1217 > $ct3hum_1217)){
              $avg_hum1217 = ($ct1hum_1217+$ct2hum_1217+$ct4hum_1217)/3;
          }
          else if(($ct1hum_1217 > $ct2hum_1217) && ($ct1hum_1217 > $ct3hum_1217) && ($ct1hum_1217 > $ct4hum_1217) && ($ct2hum_1217==$ct3hum_1217) && ($ct3hum_1217==$ct4hum_1217)){
              $avg_hum1217 = ($ct1hum_1217+$ct2hum_1217+$ct3hum_1217)/3;
          }
          else if(($ct2hum_1217 > $ct3hum_1217) && ($ct2hum_1217 > $ct4hum_1217) && ($ct2hum_1217 > $ct1hum_1217) && ($ct3hum_1217==$ct4hum_1217) && ($ct4hum_1217==$ct1hum_1217)){
              $avg_hum1217 = ($ct1hum_1217+$ct2hum_1217+$ct3hum_1217)/3;
          }
          else if(($ct3hum_1217 > $ct1hum_1217) && ($ct3hum_1217 > $ct2hum_1217) && ($ct3hum_1217 > $ct4hum_1217) && ($ct1hum_1217==$ct2hum_1217) && ($ct2hum_1217==$ct4hum_1217)){
              $avg_hum1217 = ($ct3hum_1217+$ct2hum_1217+$ct4hum_1217)/3;
          }
          else if(($ct4hum_1217 > $ct1hum_1217) && ($ct4hum_1217 > $ct2hum_1217) && ($ct4hum_1217 > $ct3hum_1217) && ($ct1hum_1217==$ct2hum_1217) && ($ct2hum_1217==$ct3hum_1217)){
              $avg_hum1217 = ($ct1hum_1217+$ct2hum_1217+$ct4hum_1217)/3;
          }



          $reshum1217 = $avg_hum1217+$att_hum_1217+$exam_hum_1217;

          //echo '<br>';

          // echo $reshum1217;

          //echo '<br>';

          if($reshum1217>=0 && $reshum1217<=39){
              $gphum1217 = 0.00;
          }
          else if($reshum1217>39 && $reshum1217<=44){
              $gphum1217 = 2.00;
          }
          else if($reshum1217>44 && $reshum1217<=49){
              $gphum1217 = 2.25;
          }
          else if($reshum1217>49 && $reshum1217<=54){
              $gphum1217 = 2.50;
          }
          else if($reshum1217>54 && $reshum1217<=59){
              $gphum1217 = 2.75;
          }
          else if($reshum1217>59 && $reshum1217<=64){
              $gphum1217 = 3.00;
          }
          else if($reshum1217>64 && $reshum1217<=69){
              $gphum1217 = 3.25;
          }
          else if($reshum1217>69 && $reshum1217<=74){
              $gphum1217 = 3.50;
          }
          else if($reshum1217>74 && $reshum1217<=79){
              $gphum1217 = 3.75;
          }
          else if($reshum1217>79){
              $gphum1217 = 4.00;
          }

          //echo '<br>';

          // echo $gphum1217;



          //theory hum 1217 ends




          //  echo '<br>';
          //  echo '<br>';
          //  echo '<br>';
          //  echo '<br>';
          //  echo '<br>';



          // sessional ece 1202 starts


          $att1202 = $row['ece_1202_att'];
          $report1202 = $row['ece_1202_re'];
          $quiz1202 = $row['ece_1202_quiz'];
          $bv1202 = $row['ece_1202_bv'];

          $res1202 = $att1202+$report1202+$quiz1202+$bv1202;

          //echo '<br>';

          // echo $res1202;

          //echo '<br>';

          if($res1202>=0 && $res1202<=39){
              $gp1202 = 0.00;
          }
          else if($res1202>=40 && $res1202<=44){
              $gp1202 = 2.00;
          }
          else if($res1202>=45 && $res1202<=49){
              $gp1202 = 2.25;
          }
          else if($res1202>=50 && $res1202<=54){
              $gp1202 = 2.50;
          }
          else if($res1202>=55 && $res1202<=59){
              $gp1202 = 2.75;
          }
          else if($res1202>=60 && $res1202<=64){
              $gp1202 = 3.00;
          }
          else if($res1202>=65 && $res1202<=69){
              $gp1202 = 3.25;
          }
          else if($res1202>=70 && $res1202<=74){
              $gp1202 = 3.50;
          }
          else if($res1202>=75 && $res1202<=79){
              $gp1202 = 3.75;
          }
          else if($res1202>=80){
              $gp1202 = 4.00;
          }

          //echo '<br>';

          // echo $gp1202;


          // sessional ece 1202 ends



          //echo '<br>';



          // sessional ece 1204 starts


          $att1204 = $row['ece_1204_att'];
          $report1204 = $row['ece_1204_re'];
          $quiz1204 = $row['ece_1204_quiz'];
          $bv1204 = $row['ece_1204_bv'];

          $res1204 = $att1204+$report1204+$quiz1204+$bv1204;

          //echo '<br>';

          // echo $res1204;

          //echo '<br>';

          if($res1204>=0 && $res1204<=39){
              $gp1204 = 0.00;
          }
          else if($res1204>=40 && $res1204<=44){
              $gp1204 = 2.00;
          }
          else if($res1204>=45 && $res1204<=49){
              $gp1204 = 2.25;
          }
          else if($res1204>=50 && $res1204<=54){
              $gp1204 = 2.50;
          }
          else if($res1204>=55 && $res1204<=59){
              $gp1204 = 2.75;
          }
          else if($res1204>=60 && $res1204<=64){
              $gp1204 = 3.00;
          }
          else if($res1204>=65 && $res1204<=69){
              $gp1204 = 3.25;
          }
          else if($res1204>=70 && $res1204<=74){
              $gp1204 = 3.50;
          }
          else if($res1204>=75 && $res1204<=79){
              $gp1204 = 3.75;
          }
          else if($res1204>=80){
              $gp1204 = 4.00;
          }

          //echo '<br>';

          // echo $gp1204;


          // sessional ece 1204 ends

          //echo '<br>';


          // sessional ece 1206 starts


          $att1206 = $row['ece_1206_att'];
          $report1206 = $row['ece_1206_re'];
          $quiz1206 = $row['ece_1206_quiz'];
          $bv1206 = $row['ece_1206_bv'];

          $res1206 = $att1206+$report1206+$quiz1206+$bv1206;

          //echo '<br>';

          // echo $res1206;

          //echo '<br>';

          if($res1206>=0 && $res1206<=39){
              $gp1206 = 0.00;
          }
          else if($res1206>=40 && $res1206<=44){
              $gp1206 = 2.00;
          }
          else if($res1206>=45 && $res1206<=49){
              $gp1206 = 2.25;
          }
          else if($res1206>=50 && $res1206<=54){
              $gp1206 = 2.50;
          }
          else if($res1206>=55 && $res1206<=59){
              $gp1206 = 2.75;
          }
          else if($res1206>=60 && $res1206<=64){
              $gp1206 = 3.00;
          }
          else if($res1206>=65 && $res1206<=69){
              $gp1206 = 3.25;
          }
          else if($res1206>=70 && $res1206<=74){
              $gp1206 = 3.50;
          }
          else if($res1206>=75 && $res1206<=79){
              $gp1206 = 3.75;
          }
          else if($res1206>=80){
              $gp1206 = 4.00;
          }

          //echo '<br>';

          // echo $gp1206;


          // sessional ece 1206 ends








          // echo '<br>';
          // echo '<br>';
          // echo '<br>';
          // echo '<br>';
          // echo '<br>';



          // electrical shop practice ece 1200 starts

          $res1200 = $row['ece_1200_score'];

          //echo '<br>';

          // echo $res1200;

          //echo '<br>';

          if($res1200>=0 && $res1200<=39){
              $gp1200 = 0.00;
          }
          else if($res1200>=40 && $res1200<=44){
              $gp1200 = 2.00;
          }
          else if($res1200>=45 && $res1200<=49){
              $gp1200 = 2.25;
          }
          else if($res1200>=50 && $res1200<=54){
              $gp1200 = 2.50;
          }
          else if($res1200>=55 && $res1200<=59){
              $gp1200 = 2.75;
          }
          else if($res1200>=60 && $res1200<=64){
              $gp1200 = 3.00;
          }
          else if($res1200>=65 && $res1200<=69){
              $gp1200 = 3.25;
          }
          else if($res1200>=70 && $res1200<=74){
              $gp1200 = 3.50;
          }
          else if($res1200>=75 && $res1200<=79){
              $gp1200 = 3.75;
          }
          else if($res1200>=80){
              $gp1200 = 4.00;
          }

          // echo '<br>';

          // echo $gp1200;

          // echo '<br>';
          // echo '<br>';
          // echo '<br>';


          // electrical shop practice ece 1200 ends


          echo '<br>';


          $gp12 =  ($gp1201+ $gp1203+ $gp1205+ $gphum1217+ $gpmath1217)*3 + ($gp1202*0.75) + ($gp1204*1.5 +  $gp1206*0.75) + ($gp1200*1.50);

          $format_gp12 = number_format($gp12, 2);


          $gpa12 =  (($gp1201+ $gp1203+ $gp1205+ $gphum1217+ $gpmath1217)*3 + ($gp1202*0.75) + ($gp1204*1.5 +  $gp1206*0.75) + ($gp1200*1.50))/19.50;

          $format_gpa12 = number_format($gpa12, 2);



          ?>






           <div class="resflex">
               <div>Roll: <?php echo $row['roll12']; ?></div>
               <div>GP: <?php echo $format_gp12 ?></div>
               <div>GPA: <?php echo $format_gpa12 ?></div>
               <div>CGPA: <?php


               // echo $format_gpa11;

                           // echo '<br>';

                            // echo $format_gpa12;

                           // echo '<br>';


               $cgpa12 = ($format_gpa11 + $format_gpa12)/2;

             $format_cgpa12 = number_format($cgpa12, 2);

             echo $format_cgpa12;


               ?></div>
           </div>

           <br>
           <br>




<?php
 }
?>

<!-- Result 1-2 Ends -->





 


<!-- Result 2-1 Starts -->


<div class="segment-area">
    <h3>2nd Year Odd Semester Result</h3>
</div>




<?php     

		    $db_21 = mysqli_query($link, "SELECT * FROM `semester_21` WHERE `roll21` = ".$_SESSION['student_login']);
            
			while($row = mysqli_fetch_assoc($db_21)){ 
?>
		

            <?php 


            // theory ece 2103 starts

            $ct1_2103 = $row['ece_2103_ct1'];  
            $ct2_2103 = $row['ece_2103_ct2'];
            $ct3_2103 = $row['ece_2103_ct3'];
            $ct4_2103 = $row['ece_2103_ct4'];
            $att2103 = $row['ece_2103_att'];
            $exam2103 = $row['ece_2103_exam'];


            if($ct1_2103==0){
                $avg_1 = ($ct2_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if($ct2_2103==0){
                $avg_1 = ($ct1_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if($ct3_2103==0){
                $avg_1 = ($ct2_2103+$ct1_2103+$ct4_2103)/3;
            }
            else if($ct4_2103==0){
                $avg_1 = ($ct2_2103+$ct3_2103+$ct1_2103)/3;
            }
            else if($ct1_2103==0 && $ct2_2103==0){
                $avg_1 = ($ct3_2103+$ct4_2103)/3;
            }
            else if($ct1_2103==0 && $ct3_2103==0){
                $avg_1 = ($ct2_2103+$ct4_2103)/3;
            }
            else if($ct1_2103==0 && $ct4_2103==0){
                $avg_1 = ($ct2_2103+$ct3_2103)/3;
            }
            else if($ct2_2103==0 && $ct3_2103==0){
                $avg_1 = ($ct1_2103+$ct4_2103)/3;
            }
            else if($ct2_2103==0 && $ct4_2103==0){
                $avg_1 = ($ct1_2103+$ct3_2103)/3;
            }
            else if($ct3_2103==0 && $ct4_2103==0){
                $avg_1 = ($ct1_2103+$ct2_2103)/3;
            }
            else if($ct1_2103==0 && $ct2_2103==0 && $ct3_2103==0){
                $avg_1 = $ct4_2103/3;
            }
            else if($ct1_2103==0 && $ct2_2103==0 && $ct4_2103==0){
                $avg_1 = $ct3_2103/3;
            }
            else if($ct1_2103==0 && $ct3_2103==0 && $ct4_2103==0){
                $avg_1 = $ct2_2103/3;
            }
            else if($ct2_2103==0 && $ct3_2103==0 && $ct4_2103==0){
                $avg_1 = $ct1_2103/3;
            }
            else if($ct1_2103==0 && $ct2_2103==0 && $ct3_2103==0 && $ct4_2103==0){
                $avg_1 = 0;
            }
            else if(($ct1_2103 > $ct3_2103) && ($ct1_2103 > $ct4_2103) && ($ct2_2103 > $ct3_2103) && ($ct2_2103 > $ct4_2103) && ($ct3_2103 == $ct4_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct3_2103)/3;
            }
            else if(($ct1_2103 > $ct2_2103) && ($ct1_2103 > $ct4_2103) && ($ct3_2103 > $ct2_2103) && ($ct3_2103 > $ct4_2103) && ($ct2_2103 == $ct4_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct3_2103)/3;
            }
            else if(($ct1_2103 > $ct2_2103) && ($ct1_2103 > $ct3_2103) && ($ct4_2103 > $ct2_2103) && ($ct4_2103 > $ct3_2103) && ($ct2_2103 == $ct3_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct4_2103)/3;
            }
            else if(($ct2_2103 > $ct1_2103) && ($ct2_2103 > $ct4_2103) && ($ct3_2103 > $ct1_2103) && ($ct3_2103 > $ct4_2103) && ($ct1_2103 == $ct4_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct3_2103)/3;
            }
            else if(($ct2_2103 > $ct1_2103) && ($ct2_2103 > $ct3_2103) && ($ct4_2103 > $ct1_2103) && ($ct4_2103 > $ct3_2103) && ($ct1_2103 == $ct3_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct4_2103)/3;
            }
            else if(($ct3_2103 > $ct1_2103) && ($ct3_2103 > $ct2_2103) && ($ct4_2103 > $ct1_2103) && ($ct4_2103 > $ct2_2103) && ($ct1_2103 == $ct2_2103)){
                $avg_1 = ($ct1_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if(($ct1_2103 > $ct4_2103) && ($ct2_2103 > $ct4_2103) && ($ct3_2103 > $ct4_2103 )){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct3_2103)/3;
            }
            else if(($ct1_2103 > $ct3_2103) && ($ct2_2103 > $ct3_2103) && ($ct4_2103 > $ct3_2103 )){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct4_2103)/3;
            }
            else if(($ct1_2103 > $ct2_2103) && ($ct3_2103 > $ct2_2103) && ($ct4_2103 > $ct2_2103 )){
                $avg_1 = ($ct1_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if(($ct2_2103 > $ct1_2103) && ($ct3_2103 > $ct1_2103) && ($ct4_2103 > $ct1_2103 )){
                $avg_1 = ($ct2_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if($ct1_2103==$ct2_2103 && $ct2_2103==$ct3_2103 && $ct3_2103==$ct4_2103){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct3_2103)/3;
            }
            else if(($ct1_2103 > $ct2_2103) && ($ct2_2103 > $ct3_2103) && ($ct3_2103 > $ct4_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct3_2103)/3;
            }
            else if(($ct2_2103 > $ct3_2103) && ($ct3_2103 > $ct4_2103) && ($ct4_2103 > $ct1_2103)){
                $avg_1 = ($ct2_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if(($ct3_2103 > $ct4_2103) && ($ct4_2103 > $ct1_2103) && ($ct1_2103 > $ct2_2103)){
                $avg_1 = ($ct1_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if(($ct4_2103 > $ct1_2103) && ($ct1_2103 > $ct2_2103) && ($ct2_2103 > $ct3_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct4_2103)/3;
            }
            else if(($ct1_2103 > $ct2_2103) && ($ct1_2103 > $ct3_2103) && ($ct1_2103 > $ct4_2103) && ($ct2_2103==$ct3_2103) && ($ct3_2103==$ct4_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct3_2103)/3;
            }
            else if(($ct2_2103 > $ct3_2103) && ($ct2_2103 > $ct4_2103) && ($ct2_2103 > $ct1_2103) && ($ct3_2103==$ct4_2103) && ($ct4_2103==$ct1_2103)){
                $avg_1 = ($ct2_2103+$ct3_2103+$ct4_2103)/3;
            }
            else if(($ct3_2103 > $ct1_2103) && ($ct3_2103 > $ct2_2103) && ($ct3_2103 > $ct4_2103) && ($ct1_2103==$ct2_2103) && ($ct2_2103==$ct4_2103)){
                $avg_1 = ($ct3_2103+$ct2_2103+$ct4_2103)/3;
            }
            else if(($ct4_2103 > $ct1_2103) && ($ct4_2103 > $ct2_2103) && ($ct4_2103 > $ct3_2103) && ($ct1_2103==$ct2_2103) && ($ct2_2103==$ct3_2103)){
                $avg_1 = ($ct1_2103+$ct2_2103+$ct4_2103)/3;
            }
           


            $res2103 = $avg_1+$att2103+$exam2103;

            //echo '<br>';

            // echo $res2103;

            //echo '<br>';

            if($res2103>=0 && $res2103<=39){
                $gp2103 = 0.00;
            }
            else if($res2103>39 && $res2103<=44){
                $gp2103 = 2.00;
            }
            else if($res2103>44 && $res2103<=49){
                $gp2103 = 2.25;
            }
            else if($res2103>49 && $res2103<=54){
                $gp2103 = 2.50;
            }
            else if($res2103>54 && $res2103<=59){
                $gp2103 = 2.75;
            }
            else if($res2103>59 && $res2103<=64){
                $gp2103 = 3.00;
            }
            else if($res2103>64 && $res2103<=69){
                $gp2103 = 3.25;
            }
            else if($res2103>69 && $res2103<=74){
                $gp2103 = 3.50;
            }
            else if($res2103>74 && $res2103<=79){
                $gp2103 = 3.75;
            }
            else if($res2103>79){
                $gp2103 = 4.00;
            }

            //echo '<br>';

            // echo $gp2103;


            //theory ece 2103 ends


             //echo '<br>';


            // theory ece 2107 starts

            $ct1_2107 = $row['ece_2107_ct1'];
            $ct2_2107 = $row['ece_2107_ct2'];
            $ct3_2107 = $row['ece_2107_ct3'];
            $ct4_2107 = $row['ece_2107_ct4'];
            $att2107 = $row['ece_2107_att'];
            $exam2107 = $row['ece_2107_exam'];


            if($ct1_2107==0){
                $avg_2 = ($ct2_2107+$ct3_2107+$ct4_2107)/3;
            }
            else if($ct2_2107==0){
                $avg_2 = ($ct1_2107+$ct3_2107+$ct4_2107)/3;
            }
            else if($ct3_2107==0){
                $avg_2 = ($ct2_2107+$ct1_2107+$ct4_2107)/3;
            }
            else if($ct4_2107==0){
                $avg_2 = ($ct2_2107+$ct3_2107+$ct1_2107)/3;
            }
            else if($ct1_2107==0 && $ct2_2107==0){
                $avg_2 = ($ct3_2107+$ct4_2107)/3;
            }
            else if($ct1_2107==0 && $ct3_2107==0){
                $avg_2 = ($ct2_2107+$ct4_2107)/3;
            }
            else if($ct1_2107==0 && $ct4_2107==0){
                $avg_2 = ($ct2_2107+$ct3_2107)/3;
            }
            else if($ct2_2107==0 && $ct3_2107==0){
                $avg_2 = ($ct1_2107+$ct4_2107)/3;
            }
            else if($ct2_2107==0 && $ct4_2107==0){
                $avg_2 = ($ct1_2107+$ct3_2107)/3;
            }
            else if($ct3_2107==0 && $ct4_2107==0){
                $avg_2 = ($ct1_2107+$ct2_2107)/3;
            }
            else if($ct1_2107==0 && $ct2_2107==0 && $ct3_2107==0){
                $avg_2 = $ct4_2107/3;
            }
            else if($ct1_2107==0 && $ct2_2107==0 && $ct4_2107==0){
                $avg_2 = $ct3_2107/3;
            }
            else if($ct1_2107==0 && $ct3_2107==0 && $ct4_2107==0){
                $avg_2 = $ct2_2107/3;
            }
            else if($ct2_2107==0 && $ct3_2107==0 && $ct4_2107==0){
                $avg_2 = $ct1_2107/3;
            }
            else if($ct1_2107==0 && $ct2_2107==0 && $ct3_2107==0 && $ct4_2107==0){
                $avg_2 = 0;
            }
            else if(($ct1_2107 > $ct3_2107) && ($ct1_2107 > $ct4_2107) && ($ct2_2107 > $ct3_2107) && ($ct2_2107 > $ct4_2107) && ($ct3_2107 == $ct4_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct1_2107 > $ct2_2107) && ($ct1_2107 > $ct4_2107) && ($ct3_2107 > $ct2_2107) && ($ct3_2107 > $ct4_2107) && ($ct2_2107 == $ct4_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct1_2107 > $ct2_2107) && ($ct1_2107 > $ct3_2107) && ($ct4_2107 > $ct2_2107) && ($ct4_2107 > $ct3_2107) && ($ct2_2107 == $ct3_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct4_2107)/3;
            }
            else if(($ct2_2107 > $ct1_2107) && ($ct2_2107 > $ct4_2107) && ($ct3_2107 > $ct1_2107) && ($ct3_2107 > $ct4_2107) && ($ct1_2107 == $ct4_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct2_2107 > $ct1_2107) && ($ct2_2107 > $ct3_2107) && ($ct4_2107 > $ct1_2107) && ($ct4_2107 > $ct3_2107) && ($ct1_2107 == $ct3_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct4_2107)/3;
            }
            else if(($ct3_2107 > $ct1_2107) && ($ct3_2107 > $ct2_2107) && ($ct4_2107 > $ct1_2107) && ($ct4_2107 > $ct2_2107) && ($ct1_2107 == $ct2_2107)){
                $avg_2 = ($ct1_2107+$ct3_2107+$ct4_2107)/3;
            }
            else if(($ct1_2107 > $ct4_2107) && ($ct2_2107 > $ct4_2107) && ($ct3_2107 > $ct4_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct1_2107 > $ct3_2107) && ($ct2_2107 > $ct3_2107) && ($ct4_2107 > $ct3_2107 )){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct4_2107)/3;
            }
            else if(($ct1_2107 > $ct2_2107) && ($ct3_2107 > $ct2_2107) && ($ct4_2107 > $ct2_2107) ){
                $avg_2 = ($ct1_2107+$ct3_2107+$ct4_2107)/3;
            }
            else if(($ct2_2107 > $ct1_2107) && ($ct3_2107 > $ct1_2107) && ($ct4_2107 > $ct1_2107)){
                $avg_2 = ($ct2_2107+$ct3_2107+$ct4_2107)/3;
            }
            else if($ct1_2107==$ct2_2107 && $ct2_2107==$ct3_2107 && $ct3_2107==$ct4_2107){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct1_2107 > $ct2_2107) && ($ct2_2107 > $ct3_2107) && ($ct3_2107 > $ct4_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct2_2107 > $ct3_2107) && ($ct3_2107 > $ct4_2107) && ($ct4_2107 > $ct1_2107)){
                $avg_2 = ($ct2_2107+$ct3_2107+$ct4_2107)/3;
            }
            else if(($ct3_2107 > $ct4_2107) && ($ct4_2107 > $ct1_2107) && ($ct1_2107 > $ct2_2107)){
                $avg_2 = ($ct1_2107+$ct3_2107+$ct4_2107)/3;
            }
            else if(($ct4_2107 > $ct1_2107) && ($ct1_2107 > $ct2_2107) && ($ct2_2107 > $ct3_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct4_2107)/3;
            }
            else if(($ct1_2107 > $ct2_2107) && ($ct1_2107 > $ct3_2107) && ($ct1_2107 > $ct4_2107) && ($ct2_2107==$ct3_2107) && ($ct3_2107==$ct4_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct2_2107 > $ct3_2107) && ($ct2_2107 > $ct4_2107) && ($ct2_2107 > $ct1_2107) && ($ct3_2107==$ct4_2107) && ($ct4_2107==$ct1_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct3_2107)/3;
            }
            else if(($ct3_2107 > $ct1_2107) && ($ct3_2107 > $ct2_2107) && ($ct3_2107 > $ct4_2107) && ($ct1_2107==$ct2_2107) && ($ct2_2107==$ct4_2107)){
                $avg_2 = ($ct3_2107+$ct2_2107+$ct4_2107)/3;
            }
            else if(($ct4_2107 > $ct1_2107) && ($ct4_2107 > $ct2_2107) && ($ct4_2107 > $ct3_2107) && ($ct1_2107==$ct2_2107) && ($ct2_2107==$ct3_2107)){
                $avg_2 = ($ct1_2107+$ct2_2107+$ct4_2107)/3;
            }
           


            $res2107 = $avg_2+$att2107+$exam2107;

            //echo '<br>';

            // echo $res2107;

            //echo '<br>';

            if($res2107>=0 && $res2107<=39){
                $gp2107 = 0.00;
            }
            else if($res2107>39 && $res2107<=44){
                $gp2107 = 2.00;
            }
            else if($res2107>44 && $res2107<=49){
                $gp2107 = 2.25;
            }
            else if($res2107>49 && $res2107<=54){
                $gp2107 = 2.50;
            }
            else if($res2107>54 && $res2107<=59){
                $gp2107 = 2.75;
            }
            else if($res2107>59 && $res2107<=64){
                $gp2107 = 3.00;
            }
            else if($res2107>64 && $res2107<=69){
                $gp2107 = 3.25;
            }
            else if($res2107>69 && $res2107<=74){
                $gp2107 = 3.50;
            }
            else if($res2107>74 && $res2107<=79){
                $gp2107 = 3.75;
            }
            else if($res2107>79){
                $gp2107 = 4.00;
            }

            //echo '<br>';

            // echo $gp2107;


            //theory ece 2107 ends




            //echo "<br>";



            // theory ece 2111 starts


            $ct1_2111 = $row['ece_2111_ct1'];
            $ct2_2111 = $row['ece_2111_ct2'];
            $ct3_2111 = $row['ece_2111_ct3'];
            $ct4_2111 = $row['ece_2111_ct4'];
            $att2111 = $row['ece_2111_att'];
            $exam2111 = $row['ece_2111_exam'];





            if($ct1_2111==0){
                $avg_3 = ($ct2_2111+$ct3_2111+$ct4_2111)/3;
            }
            else if($ct2_2111==0){
                $avg_3 = ($ct1_2111+$ct3_2111+$ct4_2111)/3;
            }
            else if($ct3_2111==0){
                $avg_3 = ($ct2_2111+$ct1_2111+$ct4_2111)/3;
            }
            else if($ct4_2111==0){
                $avg_3 = ($ct2_2111+$ct3_2111+$ct1_2111)/3;
            }
            else if($ct1_2111==0 && $ct2_2111==0){
                $avg_3 = ($ct3_2111+$ct4_2111)/3;
            }
            else if($ct1_2111==0 && $ct3_2111==0){
                $avg_3 = ($ct2_2111+$ct4_2111)/3;
            }
            else if($ct1_2111==0 && $ct4_2111==0){
                $avg_3 = ($ct2_2111+$ct3_2111)/3;
            }
            else if($ct2_2111==0 && $ct3_2111==0){
                $avg_3 = ($ct1_2111+$ct4_2111)/3;
            }
            else if($ct2_2111==0 && $ct4_2111==0){
                $avg_3 = ($ct1_2111+$ct3_2111)/3;
            }
            else if($ct3_2111==0 && $ct4_2111==0){
                $avg_3 = ($ct1_2111+$ct2_2111)/3;
            }
            else if($ct1_2111==0 && $ct2_2111==0 && $ct3_2111==0){
                $avg_3 = $ct4_2111/3;
            }
            else if($ct1_2111==0 && $ct2_2111==0 && $ct4_2111==0){
                $avg_3 = $ct3_2111/3;
            }
            else if($ct1_2111==0 && $ct3_2111==0 && $ct4_2111==0){
                $avg_3 = $ct2_2111/3;
            }
            else if($ct2_2111==0 && $ct3_2111==0 && $ct4_2111==0){
                $avg_3 = $ct1_2111/3;
            }
            else if($ct1_2111==0 && $ct2_2111==0 && $ct3_2111==0 && $ct4_2111==0){
                $avg_3 = 0;
            }
            else if(($ct1_2111 > $ct3_2111) && ($ct1_2111 > $ct4_2111) && ($ct2_2111 > $ct3_2111) && ($ct2_2111 > $ct4_2111) && ($ct3_2111 == $ct4_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct1_2111 > $ct2_2111) && ($ct1_2111 > $ct4_2111) && ($ct3_2111 > $ct2_2111) && ($ct3_2111 > $ct4_2111) && ($ct2_2111 == $ct4_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct1_2111 > $ct2_2111) && ($ct1_2111 > $ct3_2111) && ($ct4_2111 > $ct2_2111) && ($ct4_2111 > $ct3_2111) && ($ct2_2111 == $ct3_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct4_2111)/3;
            }
            else if(($ct2_2111 > $ct1_2111) && ($ct2_2111 > $ct4_2111) && ($ct3_2111 > $ct1_2111) && ($ct3_2111 > $ct4_2111) && ($ct1_2111 == $ct4_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct2_2111 > $ct1_2111) && ($ct2_2111 > $ct3_2111) && ($ct4_2111 > $ct1_2111) && ($ct4_2111 > $ct3_2111) && ($ct1_2111 == $ct3_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct4_2111)/3;
            }
            else if(($ct3_2111 > $ct1_2111) && ($ct3_2111 > $ct2_2111) && ($ct4_2111 > $ct1_2111) && ($ct4_2111 > $ct2_2111) && ($ct1_2111 == $ct2_2111)){
                $avg_3 = ($ct1_2111+$ct3_2111+$ct4_2111)/3;
            }
            else if(($ct1_2111 > $ct4_2111) && ($ct2_2111 > $ct4_2111) && ($ct3_2111 > $ct4_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct1_2111 > $ct3_2111) && ($ct2_2111 > $ct3_2111) && ($ct4_2111 > $ct3_2111 )){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct4_2111)/3;
            }
            else if(($ct1_2111 > $ct2_2111) && ($ct3_2111 > $ct2_2111) && ($ct4_2111 > $ct2_2111) ){
                $avg_3 = ($ct1_2111+$ct3_2111+$ct4_2111)/3;
            }
            else if(($ct2_2111 > $ct1_2111) && ($ct3_2111 > $ct1_2111) && ($ct4_2111 > $ct1_2111)){
                $avg_3 = ($ct2_2111+$ct3_2111+$ct4_2111)/3;
            }
            else if($ct1_2111==$ct2_2111 && $ct2_2111==$ct3_2111 && $ct3_2111==$ct4_2111){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct1_2111 > $ct2_2111) && ($ct2_2111 > $ct3_2111) && ($ct3_2111 > $ct4_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct2_2111 > $ct3_2111) && ($ct3_2111 > $ct4_2111) && ($ct4_2111 > $ct1_2111)){
                $avg_3 = ($ct2_2111+$ct3_2111+$ct4_2111)/3;
            }
            else if(($ct3_2111 > $ct4_2111) && ($ct4_2111 > $ct1_2111) && ($ct1_2111 > $ct2_2111)){
                $avg_3 = ($ct1_2111+$ct3_2111+$ct4_2111)/3;
            }
            else if(($ct4_2111 > $ct1_2111) && ($ct1_2111 > $ct2_2111) && ($ct2_2111 > $ct3_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct4_2111)/3;
            }
            else if(($ct1_2111 > $ct2_2111) && ($ct1_2111 > $ct3_2111) && ($ct1_2111 > $ct4_2111) && ($ct2_2111==$ct3_2111) && ($ct3_2111==$ct4_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct2_2111 > $ct3_2111) && ($ct2_2111 > $ct4_2111) && ($ct2_2111 > $ct1_2111) && ($ct3_2111==$ct4_2111) && ($ct4_2111==$ct1_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct3_2111)/3;
            }
            else if(($ct3_2111 > $ct1_2111) && ($ct3_2111 > $ct2_2111) && ($ct3_2111 > $ct4_2111) && ($ct1_2111==$ct2_2111) && ($ct2_2111==$ct4_2111)){
                $avg_3 = ($ct3_2111+$ct2_2111+$ct4_2111)/3;
            }
            else if(($ct4_2111 > $ct1_2111) && ($ct4_2111 > $ct2_2111) && ($ct4_2111 > $ct3_2111) && ($ct1_2111==$ct2_2111) && ($ct2_2111==$ct3_2111)){
                $avg_3 = ($ct1_2111+$ct2_2111+$ct4_2111)/3;
            }
           


            $res2111 = $avg_3+$att2111+$exam2111;

            //echo '<br>';

            // echo $res2111;

            //echo '<br>';

            if($res2111>=0 && $res2111<=39){
                $gp2111 = 0.00;
            }
            else if($res2111>39 && $res2111<=44){
                $gp2111 = 2.00;
            }
            else if($res2111>44 && $res2111<=49){
                $gp2111 = 2.25;
            }
            else if($res2111>49 && $res2111<=54){
                $gp2111 = 2.50;
            }
            else if($res2111>54 && $res2111<=59){
                $gp2111 = 2.75;
            }
            else if($res2111>59 && $res2111<=64){
                $gp2111 = 3.00;
            }
            else if($res2111>64 && $res2111<=69){
                $gp2111 = 3.25;
            }
            else if($res2111>69 && $res2111<=74){
                $gp2111 = 3.50;
            }
            else if($res2111>74 && $res2111<=79){
                $gp2111 = 3.75;
            }
            else if($res2111>79){
                $gp2111 = 4.00;
            }

            //echo '<br>';

            // echo $gp2111;


            

            //theory ece 2111 ends



            
            //echo '<br>';




            // theory math 2117 starts


            $ct1math_2117 = $row['math_2117_ct1'];
            $ct2math_2117 = $row['math_2117_ct2'];
            $ct3math_2117 = $row['math_2117_ct3'];
            $ct4math_2117 = $row['math_2117_ct4'];
            $att_math_2117 = $row['math_2117_att'];
            $exam_math_2117 = $row['math_2117_exam'];



            if($ct1math_2117==0){
                $avg_4 = ($ct2math_2117+$ct3math_2117+$ct4math_2117)/3;
            }
            else if($ct2math_2117==0){
                $avg_4 = ($ct1math_2117+$ct3math_2117+$ct4math_2117)/3;
            }
            else if($ct3math_2117==0){
                $avg_4 = ($ct2math_2117+$ct1math_2117+$ct4math_2117)/3;
            }
            else if($ct4math_2117==0){
                $avg_4 = ($ct2math_2117+$ct3math_2117+$ct1math_2117)/3;
            }
            else if($ct1math_2117==0 && $ct2math_2117==0){
                $avg_4 = ($ct3math_2117+$ct4math_2117)/3;
            }
            else if($ct1math_2117==0 && $ct3math_2117==0){
                $avg_4 = ($ct2math_2117+$ct4math_2117)/3;
            }
            else if($ct1math_2117==0 && $ct4math_2117==0){
                $avg_4 = ($ct2math_2117+$ct3math_2117)/3;
            }
            else if($ct2math_2117==0 && $ct3math_2117==0){
                $avg_4 = ($ct1math_2117+$ct4math_2117)/3;
            }
            else if($ct2math_2117==0 && $ct4math_2117==0){
                $avg_4 = ($ct1math_2117+$ct3math_2117)/3;
            }
            else if($ct3math_2117==0 && $ct4math_2117==0){
                $avg_4 = ($ct1math_2117+$ct2math_2117)/3;
            }
            else if($ct1math_2117==0 && $ct2math_2117==0 && $ct3math_2117==0){
                $avg_4 = $ct4math_2117/3;
            }
            else if($ct1math_2117==0 && $ct2math_2117==0 && $ct4math_2117==0){
                $avg_4 = $ct3math_2117/3;
            }
            else if($ct1math_2117==0 && $ct3math_2117==0 && $ct4math_2117==0){
                $avg_4 = $ct2math_2117/3;
            }
            else if($ct2math_2117==0 && $ct3math_2117==0 && $ct4math_2117==0){
                $avg_4 = $ct1math_2117/3;
            }
            else if($ct1math_2117==0 && $ct2math_2117==0 && $ct3math_2117==0 && $ct4math_2117==0){
                $avg_4 = 0;
            }
            else if(($ct1math_2117 > $ct3math_2117) && ($ct1math_2117 > $ct4math_2117) && ($ct2math_2117 > $ct3math_2117) && ($ct2math_2117 > $ct4math_2117) && ($ct3math_2117 == $ct4math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct1math_2117 > $ct2math_2117) && ($ct1math_2117 > $ct4math_2117) && ($ct3math_2117 > $ct2math_2117) && ($ct3math_2117 > $ct4math_2117) && ($ct2math_2117 == $ct4math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct1math_2117 > $ct2math_2117) && ($ct1math_2117 > $ct3math_2117) && ($ct4math_2117 > $ct2math_2117) && ($ct4math_2117 > $ct3math_2117) && ($ct2math_2117 == $ct3math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct4math_2117)/3;
            }
            else if(($ct2math_2117 > $ct1math_2117) && ($ct2math_2117 > $ct4math_2117) && ($ct3math_2117 > $ct1math_2117) && ($ct3math_2117 > $ct4math_2117) && ($ct1math_2117 == $ct4math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct2math_2117 > $ct1math_2117) && ($ct2math_2117 > $ct3math_2117) && ($ct4math_2117 > $ct1math_2117) && ($ct4math_2117 > $ct3math_2117) && ($ct1math_2117 == $ct3math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct4math_2117)/3;
            }
            else if(($ct3math_2117 > $ct1math_2117) && ($ct3math_2117 > $ct2math_2117) && ($ct4math_2117 > $ct1math_2117) && ($ct4math_2117 > $ct2math_2117) && ($ct1math_2117 == $ct2math_2117)){
                $avg_4 = ($ct1math_2117+$ct3math_2117+$ct4math_2117)/3;
            }
            else if(($ct1math_2117 > $ct4math_2117) && ($ct2math_2117 > $ct4math_2117) && ($ct3math_2117 > $ct4math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct1math_2117 > $ct3math_2117) && ($ct2math_2117 > $ct3math_2117) && ($ct4math_2117 > $ct3math_2117 )){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct4math_2117)/3;
            }
            else if(($ct1math_2117 > $ct2math_2117) && ($ct3math_2117 > $ct2math_2117) && ($ct4math_2117 > $ct2math_2117) ){
                $avg_4 = ($ct1math_2117+$ct3math_2117+$ct4math_2117)/3;
            }
            else if(($ct2math_2117 > $ct1math_2117) && ($ct3math_2117 > $ct1math_2117) && ($ct4math_2117 > $ct1math_2117)){
                $avg_4 = ($ct2math_2117+$ct3math_2117+$ct4math_2117)/3;
            }
            else if($ct1math_2117==$ct2math_2117 && $ct2math_2117==$ct3math_2117 && $ct3math_2117==$ct4math_2117){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct1math_2117 > $ct2math_2117) && ($ct2math_2117 > $ct3math_2117) && ($ct3math_2117 > $ct4math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct2math_2117 > $ct3math_2117) && ($ct3math_2117 > $ct4math_2117) && ($ct4math_2117 > $ct1math_2117)){
                $avg_4 = ($ct2math_2117+$ct3math_2117+$ct4math_2117)/3;
            }
            else if(($ct3math_2117 > $ct4math_2117) && ($ct4math_2117 > $ct1math_2117) && ($ct1math_2117 > $ct2math_2117)){
                $avg_4 = ($ct1math_2117+$ct3math_2117+$ct4math_2117)/3;
            }
            else if(($ct4math_2117 > $ct1math_2117) && ($ct1math_2117 > $ct2math_2117) && ($ct2math_2117 > $ct3math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct4math_2117)/3;
            }
            else if(($ct1math_2117 > $ct2math_2117) && ($ct1math_2117 > $ct3math_2117) && ($ct1math_2117 > $ct4math_2117) && ($ct2math_2117==$ct3math_2117) && ($ct3math_2117==$ct4math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct2math_2117 > $ct3math_2117) && ($ct2math_2117 > $ct4math_2117) && ($ct2math_2117 > $ct1math_2117) && ($ct3math_2117==$ct4math_2117) && ($ct4math_2117==$ct1math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct3math_2117)/3;
            }
            else if(($ct3math_2117 > $ct1math_2117) && ($ct3math_2117 > $ct2math_2117) && ($ct3math_2117 > $ct4math_2117) && ($ct1math_2117==$ct2math_2117) && ($ct2math_2117==$ct4math_2117)){
                $avg_4 = ($ct3math_2117+$ct2math_2117+$ct4math_2117)/3;
            }
            else if(($ct4math_2117 > $ct1math_2117) && ($ct4math_2117 > $ct2math_2117) && ($ct4math_2117 > $ct3math_2117) && ($ct1math_2117==$ct2math_2117) && ($ct2math_2117==$ct3math_2117)){
                $avg_4 = ($ct1math_2117+$ct2math_2117+$ct4math_2117)/3;
            }
           


            $resmath2117 = $avg_4+$att_math_2117+$exam_math_2117;

            //echo '<br>';

            // echo $resmath2117;

            //echo '<br>';

            if($resmath2117>=0 && $resmath2117<=39){
                $gpmath2117 = 0.00;
            }
            else if($resmath2117>39 && $resmath2117<=44){
                $gpmath2117 = 2.00;
            }
            else if($resmath2117>44 && $resmath2117<=49){
                $gpmath2117 = 2.25;
            }
            else if($resmath2117>49 && $resmath2117<=54){
                $gpmath2117 = 2.50;
            }
            else if($resmath2117>54 && $resmath2117<=59){
                $gpmath2117 = 2.75;
            }
            else if($resmath2117>59 && $resmath2117<=64){
                $gpmath2117 = 3.00;
            }
            else if($resmath2117>64 && $resmath2117<=69){
                $gpmath2117 = 3.25;
            }
            else if($resmath2117>69 && $resmath2117<=74){
                $gpmath2117 = 3.50;
            }
            else if($resmath2117>74 && $resmath2117<=79){
                $gpmath2117 = 3.75;
            }
            else if($resmath2117>79){
                $gpmath2117 = 4.00;
            }

            // echo '<br>';

            // echo $gpmath2117;

            

            //theory math 2117 ends



            
            // echo '<br>';




            // theory chem 2117 starts


            $ct1chem_2117 = $row['chem_2117_ct1'];
            $ct2chem_2117 = $row['chem_2117_ct2'];
            $ct3chem_2117 = $row['chem_2117_ct3'];
            $ct4chem_2117 = $row['chem_2117_ct4'];
            $att_chem_2117 = $row['chem_2117_att'];
            $exam_chem_2117 = $row['chem_2117_exam'];



            if($ct1chem_2117==0){
                $avg_5 = ($ct2chem_2117+$ct3chem_2117+$ct4chem_2117)/3;
            }
            else if($ct2chem_2117==0){
                $avg_5 = ($ct1chem_2117+$ct3chem_2117+$ct4chem_2117)/3;
            }
            else if($ct3chem_2117==0){
                $avg_5 = ($ct2chem_2117+$ct1chem_2117+$ct4chem_2117)/3;
            }
            else if($ct4chem_2117==0){
                $avg_5 = ($ct2chem_2117+$ct3chem_2117+$ct1chem_2117)/3;
            }
            else if($ct1chem_2117==0 && $ct2chem_2117==0){
                $avg_5 = ($ct3chem_2117+$ct4chem_2117)/3;
            }
            else if($ct1chem_2117==0 && $ct3chem_2117==0){
                $avg_5 = ($ct2chem_2117+$ct4chem_2117)/3;
            }
            else if($ct1chem_2117==0 && $ct4chem_2117==0){
                $avg_5 = ($ct2chem_2117+$ct3chem_2117)/3;
            }
            else if($ct2chem_2117==0 && $ct3chem_2117==0){
                $avg_5 = ($ct1chem_2117+$ct4chem_2117)/3;
            }
            else if($ct2chem_2117==0 && $ct4chem_2117==0){
                $avg_5 = ($ct1chem_2117+$ct3chem_2117)/3;
            }
            else if($ct3chem_2117==0 && $ct4chem_2117==0){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117)/3;
            }
            else if($ct1chem_2117==0 && $ct2chem_2117==0 && $ct3chem_2117==0){
                $avg_5 = $ct4chem_2117/3;
            }
            else if($ct1chem_2117==0 && $ct2chem_2117==0 && $ct4chem_2117==0){
                $avg_5 = $ct3chem_2117/3;
            }
            else if($ct1chem_2117==0 && $ct3chem_2117==0 && $ct4chem_2117==0){
                $avg_5 = $ct2chem_2117/3;
            }
            else if($ct2chem_2117==0 && $ct3chem_2117==0 && $ct4chem_2117==0){
                $avg_5 = $ct1chem_2117/3;
            }
            else if($ct1chem_2117==0 && $ct2chem_2117==0 && $ct3chem_2117==0 && $ct4chem_2117==0){
                $avg_5 = 0;
            }
            else if(($ct1chem_2117 > $ct3chem_2117) && ($ct1chem_2117 > $ct4chem_2117) && ($ct2chem_2117 > $ct3chem_2117) && ($ct2chem_2117 > $ct4chem_2117) && ($ct3chem_2117 == $ct4chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct1chem_2117 > $ct2chem_2117) && ($ct1chem_2117 > $ct4chem_2117) && ($ct3chem_2117 > $ct2chem_2117) && ($ct3chem_2117 > $ct4chem_2117) && ($ct2chem_2117 == $ct4chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct1chem_2117 > $ct2chem_2117) && ($ct1chem_2117 > $ct3chem_2117) && ($ct4chem_2117 > $ct2chem_2117) && ($ct4chem_2117 > $ct3chem_2117) && ($ct2chem_2117 == $ct3chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct2chem_2117 > $ct1chem_2117) && ($ct2chem_2117 > $ct4chem_2117) && ($ct3chem_2117 > $ct1chem_2117) && ($ct3chem_2117 > $ct4chem_2117) && ($ct1chem_2117 == $ct4chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct2chem_2117 > $ct1chem_2117) && ($ct2chem_2117 > $ct3chem_2117) && ($ct4chem_2117 > $ct1chem_2117) && ($ct4chem_2117 > $ct3chem_2117) && ($ct1chem_2117 == $ct3chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct3chem_2117 > $ct1chem_2117) && ($ct3chem_2117 > $ct2chem_2117) && ($ct4chem_2117 > $ct1chem_2117) && ($ct4chem_2117 > $ct2chem_2117) && ($ct1chem_2117 == $ct2chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct3chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct1chem_2117 > $ct4chem_2117) && ($ct2chem_2117 > $ct4chem_2117) && ($ct3chem_2117 > $ct4chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct1chem_2117 > $ct3chem_2117) && ($ct2chem_2117 > $ct3chem_2117) && ($ct4chem_2117 > $ct3chem_2117 )){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct1chem_2117 > $ct2chem_2117) && ($ct3chem_2117 > $ct2chem_2117) && ($ct4chem_2117 > $ct2chem_2117) ){
                $avg_5 = ($ct1chem_2117+$ct3chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct2chem_2117 > $ct1chem_2117) && ($ct3chem_2117 > $ct1chem_2117) && ($ct4chem_2117 > $ct1chem_2117)){
                $avg_5 = ($ct2chem_2117+$ct3chem_2117+$ct4chem_2117)/3;
            }
            else if($ct1chem_2117==$ct2chem_2117 && $ct2chem_2117==$ct3chem_2117 && $ct3chem_2117==$ct4chem_2117){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct1chem_2117 > $ct2chem_2117) && ($ct2chem_2117 > $ct3chem_2117) && ($ct3chem_2117 > $ct4chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct2chem_2117 > $ct3chem_2117) && ($ct3chem_2117 > $ct4chem_2117) && ($ct4chem_2117 > $ct1chem_2117)){
                $avg_5 = ($ct2chem_2117+$ct3chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct3chem_2117 > $ct4chem_2117) && ($ct4chem_2117 > $ct1chem_2117) && ($ct1chem_2117 > $ct2chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct3chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct4chem_2117 > $ct1chem_2117) && ($ct1chem_2117 > $ct2chem_2117) && ($ct2chem_2117 > $ct3chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct1chem_2117 > $ct2chem_2117) && ($ct1chem_2117 > $ct3chem_2117) && ($ct1chem_2117 > $ct4chem_2117) && ($ct2chem_2117==$ct3chem_2117) && ($ct3chem_2117==$ct4chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct2chem_2117 > $ct3chem_2117) && ($ct2chem_2117 > $ct4chem_2117) && ($ct2chem_2117 > $ct1chem_2117) && ($ct3chem_2117==$ct4chem_2117) && ($ct4chem_2117==$ct1chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct3chem_2117)/3;
            }
            else if(($ct3chem_2117 > $ct1chem_2117) && ($ct3chem_2117 > $ct2chem_2117) && ($ct3chem_2117 > $ct4chem_2117) && ($ct1chem_2117==$ct2chem_2117) && ($ct2chem_2117==$ct4chem_2117)){
                $avg_5 = ($ct3chem_2117+$ct2chem_2117+$ct4chem_2117)/3;
            }
            else if(($ct4chem_2117 > $ct1chem_2117) && ($ct4chem_2117 > $ct2chem_2117) && ($ct4chem_2117 > $ct3chem_2117) && ($ct1chem_2117==$ct2chem_2117) && ($ct2chem_2117==$ct3chem_2117)){
                $avg_5 = ($ct1chem_2117+$ct2chem_2117+$ct4chem_2117)/3;
            }
           


            $reschem2117 = $avg_5+$att_chem_2117+$exam_chem_2117;

            //echo '<br>';

            // echo $reschem2117;

            //echo '<br>';

            if($reschem2117>=0 && $reschem2117<=39){
                $gpchem2117 = 0.00;
            }
            else if($reschem2117>39 && $reschem2117<=44){
                $gpchem2117 = 2.00;
            }
            else if($reschem2117>44 && $reschem2117<=49){
                $gpchem2117 = 2.25;
            }
            else if($reschem2117>49 && $reschem2117<=54){
                $gpchem2117 = 2.50;
            }
            else if($reschem2117>54 && $reschem2117<=59){
                $gpchem2117 = 2.75;
            }
            else if($reschem2117>59 && $reschem2117<=64){
                $gpchem2117 = 3.00;
            }
            else if($reschem2117>64 && $reschem2117<=69){
                $gpchem2117 = 3.25;
            }
            else if($reschem2117>69 && $reschem2117<=74){
                $gpchem2117 = 3.50;
            }
            else if($reschem2117>74 && $reschem2117<=79){
                $gpchem2117 = 3.75;
            }
            else if($reschem2117>79){
                $gpchem2117 = 4.00;
            }

            //echo '<br>';

            // echo $gpchem2117;

            

            //theory chem 2117 ends




            //  echo '<br>';
            //  echo '<br>';
            //  echo '<br>';
            //  echo '<br>';
            //  echo '<br>';



            // sessional ece 2104 starts

            
            $att2104 = $row['ece_2104_att'];
            $report2104 = $row['ece_2104_re'];
            $quiz2104 = $row['ece_2104_quiz'];
            $bv2104 = $row['ece_2104_bv'];

            $res2104 = $att2104+$report2104+$quiz2104+$bv2104;

            //echo '<br>';

            // echo $res2104;

            //echo '<br>';

            if($res2104>=0 && $res2104<=39){
                $gp2104 = 0.00;
            }
            else if($res2104>=40 && $res2104<=44){
                $gp2104 = 2.00;
            }
            else if($res2104>=45 && $res2104<=49){
                $gp2104 = 2.25;
            }
            else if($res2104>=50 && $res2104<=54){
                $gp2104 = 2.50;
            }
            else if($res2104>=55 && $res2104<=59){
                $gp2104 = 2.75;
            }
            else if($res2104>=60 && $res2104<=64){
                $gp2104 = 3.00;
            }
            else if($res2104>=65 && $res2104<=69){
                $gp2104 = 3.25;
            }
            else if($res2104>=70 && $res2104<=74){
                $gp2104 = 3.50;
            }
            else if($res2104>=75 && $res2104<=79){
                $gp2104 = 3.75;
            }
            else if($res2104>=80){
                $gp2104 = 4.00;
            }

            //echo '<br>';

            // echo $gp2104;


            // sessional ece 2104 ends



            //echo '<br>';



            // sessional ece 2108 starts

            
            $att2108 = $row['ece_2108_att'];
            $report2108 = $row['ece_2108_re'];
            $quiz2108 = $row['ece_2108_quiz'];
            $bv2108 = $row['ece_2108_bv'];

            $res2108 = $att2108+$report2108+$quiz2108+$bv2108;

            //echo '<br>';

            // echo $res2108;

            //echo '<br>';

            if($res2108>=0 && $res2108<=39){
                $gp2108 = 0.00;
            }
            else if($res2108>=40 && $res2108<=44){
                $gp2108 = 2.00;
            }
            else if($res2108>=45 && $res2108<=49){
                $gp2108 = 2.25;
            }
            else if($res2108>=50 && $res2108<=54){
                $gp2108 = 2.50;
            }
            else if($res2108>=55 && $res2108<=59){
                $gp2108 = 2.75;
            }
            else if($res2108>=60 && $res2108<=64){
                $gp2108 = 3.00;
            }
            else if($res2108>=65 && $res2108<=69){
                $gp2108 = 3.25;
            }
            else if($res2108>=70 && $res2108<=74){
                $gp2108 = 3.50;
            }
            else if($res2108>=75 && $res2108<=79){
                $gp2108 = 3.75;
            }
            else if($res2108>=80){
                $gp2108 = 4.00;
            }

            //echo '<br>';

            // echo $gp2108;


            // sessional ece 2108 ends

            //echo '<br>';


            // sessional ece 2112 starts

            
            $att2112 = $row['ece_2112_att'];
            $report2112 = $row['ece_2112_re'];
            $quiz2112 = $row['ece_2112_quiz'];
            $bv2112 = $row['ece_2112_bv'];

            $res2112 = $att2112+$report2112+$quiz2112+$bv2112;

            //echo '<br>';

            // echo $res2112;

            //echo '<br>';

            if($res2112>=0 && $res2112<=39){
                $gp2112 = 0.00;
            }
            else if($res2112>=40 && $res2112<=44){
                $gp2112 = 2.00;
            }
            else if($res2112>=45 && $res2112<=49){
                $gp2112 = 2.25;
            }
            else if($res2112>=50 && $res2112<=54){
                $gp2112 = 2.50;
            }
            else if($res2112>=55 && $res2112<=59){
                $gp2112 = 2.75;
            }
            else if($res2112>=60 && $res2112<=64){
                $gp2112 = 3.00;
            }
            else if($res2112>=65 && $res2112<=69){
                $gp2112 = 3.25;
            }
            else if($res2112>=70 && $res2112<=74){
                $gp2112 = 3.50;
            }
            else if($res2112>=75 && $res2112<=79){
                $gp2112 = 3.75;
            }
            else if($res2112>=80){
                $gp2112 = 4.00;
            }

            //echo '<br>';

            // echo $gp2112;


            // sessional ece 2112 ends



            //echo '<br>';


            // sessional chem 2118 starts

            
            $att2118 = $row['chem_2118_att'];
            $report2118 = $row['chem_2118_re'];
            $quiz2118 = $row['chem_2118_quiz'];
            $bv2118 = $row['chem_2118_bv'];

            $res2118 = $att2118+$report2118+$quiz2118+$bv2118;

            //echo '<br>';

            // echo $res2118;

            //echo '<br>';

            if($res2118>=0 && $res2118<=39){
                $gp2118 = 0.00;
            }
            else if($res2118>=40 && $res2118<=44){
                $gp2118 = 2.00;
            }
            else if($res2118>=45 && $res2118<=49){
                $gp2118 = 2.25;
            }
            else if($res2118>=50 && $res2118<=54){
                $gp2118 = 2.50;
            }
            else if($res2118>=55 && $res2118<=59){
                $gp2118 = 2.75;
            }
            else if($res2118>=60 && $res2118<=64){
                $gp2118 = 3.00;
            }
            else if($res2118>=65 && $res2118<=69){
                $gp2118 = 3.25;
            }
            else if($res2118>=70 && $res2118<=74){
                $gp2118 = 3.50;
            }
            else if($res2118>=75 && $res2118<=79){
                $gp2118 = 3.75;
            }
            else if($res2118>=80){
                $gp2118 = 4.00;
            }

            //echo '<br>';

            // echo $gp2118;


            // sessional chem 2118 ends



            // echo '<br>';
            // echo '<br>';
            // echo '<br>';
            // echo '<br>';
            // echo '<br>';



            // project 2100 starts

            $res2100 = $row['ece_2100_score'];

            //echo '<br>';

            // echo $res2100;

            //echo '<br>';

            if($res2100>=0 && $res2100<=39){
                $gp2100 = 0.00;
            }
            else if($res2100>=40 && $res2100<=44){
                $gp2100 = 2.00;
            }
            else if($res2100>=45 && $res2100<=49){
                $gp2100 = 2.25;
            }
            else if($res2100>=50 && $res2100<=54){
                $gp2100 = 2.50;
            }
            else if($res2100>=55 && $res2100<=59){
                $gp2100 = 2.75;
            }
            else if($res2100>=60 && $res2100<=64){
                $gp2100 = 3.00;
            }
            else if($res2100>=65 && $res2100<=69){
                $gp2100 = 3.25;
            }
            else if($res2100>=70 && $res2100<=74){
                $gp2100 = 3.50;
            }
            else if($res2100>=75 && $res2100<=79){
                $gp2100 = 3.75;
            }
            else if($res2100>=80){
                $gp2100 = 4.00;
            }

            // echo '<br>';

            // echo $gp2100;

            // echo '<br>';
            // echo '<br>';
            // echo '<br>';


            // project 2100 ends

            echo '<br>';

            $gp21 =  ($gp2103+ $gp2107+ $gp2111+ $gpchem2117+ $gpmath2117)*3 + ($gp2104*1.5) + ($gp2108*0.75 + $gp2118*0.75 + $gp2112*0.75) + ($gp2100*0.75);

            $format_gp21 = number_format($gp21, 2);


            $gpa21 =  (($gp2103+ $gp2107+ $gp2111+ $gpchem2117+ $gpmath2117)*3 + ($gp2104*1.5) + ($gp2108*0.75 + $gp2118*0.75 + $gp2112*0.75) + ($gp2100*0.75))/19.5;

            $format_gpa21 = number_format($gpa21, 2);

            
        



            ?>  
           
           <div class="resflex">
                <div>Roll: <?php echo $row['roll21']; ?></div> 
                <div>GP: <?php echo $format_gp21?></div>
                <div>GPA: <?php echo $format_gpa21?></div>
                <div>CGPA: <?php

                // echo $format_gpa11;

                // echo '<br>';

                // echo $format_gpa21;

                // echo '<br>';

                $cgpa21 = ($format_gpa11 + $format_gpa12 + $format_gpa21)/3;

                $format_cgpa21 = number_format($cgpa21, 2);
                
                echo $format_cgpa21; 
                
                
                
                ?></div>
            </div>
          
            <br>
            <br>
          
            

<?php
	} 
?>

 <!-- Result 2-1 Ends -->



<!-- Result 2-2 Starts -->


<div class="segment-area">
    <h3>2nd Year Even Semester Result</h3>
</div>




<?php

		    $db_22 = mysqli_query($link, "SELECT * FROM `semester_22` WHERE `roll22` = ".$_SESSION['student_login']);
			while($row = mysqli_fetch_assoc($db_22)){
?>


            <?php


            // theory ece 2205 starts

            $ct1_2205 = $row['ece_2205_ct1'];
            $ct2_2205 = $row['ece_2205_ct2'];
            $ct3_2205 = $row['ece_2205_ct3'];
            $ct4_2205 = $row['ece_2205_ct4'];
            $att2205 = $row['ece_2205_att'];
            $exam2205 = $row['ece_2205_exam'];


            if($ct1_2205==0){
                $avg_2205 = ($ct2_2205+$ct3_2205+$ct4_2205)/3;
            }
            else if($ct2_2205==0){
                $avg_2205 = ($ct1_2205+$ct3_2205+$ct4_2205)/3;
            }
            else if($ct3_2205==0){
                $avg_2205 = ($ct2_2205+$ct1_2205+$ct4_2205)/3;
            }
            else if($ct4_2205==0){
                $avg_2205 = ($ct2_2205+$ct3_2205+$ct1_2205)/3;
            }
            else if($ct1_2205==0 && $ct2_2205==0){
                $avg_2205 = ($ct3_2205+$ct4_2205)/3;
            }
            else if($ct1_2205==0 && $ct3_2205==0){
                $avg_2205 = ($ct2_2205+$ct4_2205)/3;
            }
            else if($ct1_2205==0 && $ct4_2205==0){
                $avg_2205 = ($ct2_2205+$ct3_2205)/3;
            }
            else if($ct2_2205==0 && $ct3_2205==0){
                $avg_2205 = ($ct1_2205+$ct4_2205)/3;
            }
            else if($ct2_2205==0 && $ct4_2205==0){
                $avg_2205 = ($ct1_2205+$ct3_2205)/3;
            }
            else if($ct3_2205==0 && $ct4_2205==0){
                $avg_2205 = ($ct1_2205+$ct2_2205)/3;
            }
            else if($ct1_2205==0 && $ct2_2205==0 && $ct3_2205==0){
                $avg_2205 = $ct4_2205/3;
            }
            else if($ct1_2205==0 && $ct2_2205==0 && $ct4_2205==0){
                $avg_2205 = $ct3_2205/3;
            }
            else if($ct1_2205==0 && $ct3_2205==0 && $ct4_2205==0){
                $avg_2205 = $ct2_2205/3;
            }
            else if($ct2_2205==0 && $ct3_2205==0 && $ct4_2205==0){
                $avg_2205 = $ct1_2205/3;
            }
            else if($ct1_2205==0 && $ct2_2205==0 && $ct3_2205==0 && $ct4_2205==0){
                $avg_2205 = 0;
            }
            else if(($ct1_2205 > $ct3_2205) && ($ct1_2205 > $ct4_2205) && ($ct2_2205 > $ct3_2205) && ($ct2_2205 > $ct4_2205) && ($ct3_2205 == $ct4_2205)){
                $avg_2205 = ($ct1_2205+$ct2_2205+$ct3_2205)/3;
            }
            else if(($ct1_2205 > $ct2_2205) && ($ct1_2205 > $ct4_2205) && ($ct3_2205 > $ct2_2205) && ($ct3_2205 > $ct4_2205) && ($ct2_2205 == $ct4_2205)){
                $avg_2205 = ($ct1_2205+$ct2_2205+$ct3_2205)/3;
            }
            else if(($ct1_2205 > $ct2_2205) && ($ct1_2205 > $ct3_2205) && ($ct4_2205 > $ct2_2205) && ($ct4_2205 > $ct3_2205) && ($ct2_2205 == $ct3_2205)){
                $avg_2205 = ($ct1_2205+$ct2_2205+$ct4_2205)/3;
            }
            else if(($ct2_2205 > $ct1_2205) && ($ct2_2205 > $ct4_2205) && ($ct3_2205 > $ct1_2205) && ($ct3_2205 > $ct4_2205) && ($ct1_2205 == $ct4_2205)){
                $avg_2205 = ($ct1_2205+$ct2_2205+$ct3_2205)/3;
            }
            else if(($ct2_2205 > $ct1_2205) && ($ct2_2205 > $ct3_2205) && ($ct4_2205 > $ct1_2205) && ($ct4_2205 > $ct3_2205) && ($ct1_2205 == $ct3_2205)){
                $avg_2205 = ($ct1_2205+$ct2_2205+$ct4_2205)/3;
            }
            else if(($ct3_2205 > $ct1_2205) && ($ct3_2205 > $ct2_2205) && ($ct4_2205 > $ct1_2205) && ($ct4_2205 > $ct2_2205) && ($ct1_2205 == $ct2_2205)){
                $avg_2205 = ($ct1_2205+$ct3_2205+$ct4_2205)/3;
            }
            else if(($ct1_2205 > $ct4_2205) && ($ct2_2205 > $ct4_2205) && ($ct3_2205 > $ct4_2205 )){
                $avg_2205 = ($ct1_2205+$ct2_2205+$ct3_2205)/3;
            }
            else if(($ct1_2205 > $ct3_2205) && ($ct2_2205 > $ct3_2205) && ($ct4_2205 > $ct3_2205 )){
                $avg_2205 = ($ct1_2205+$ct2_2205+$ct4_2205)/3;
            }
            else if(($ct1_2205 > $ct2_2205) && ($ct3_2205 > $ct2_2205) && ($ct4_2205 > $ct2_2205 )){
                $avg_2205 = ($ct1_2205+$ct3_2205+$ct4_2205)/3;
            }
            else if(($ct2_2205 > $ct1_2205) && ($ct3_2205 > $ct1_2205) && ($ct4_2205 > $ct1_2205 )){
                $avg_2205 = ($ct2_2205+$ct3_2205+$ct4_2205)/3;
            }
            else if($ct1_2205==$ct2_2205 && $ct2_2205==$ct3_2205 && $ct3_2205==$ct4_2205){
                $avg_2205 = ($ct1_2205+$ct2_2205+$ct3_2205)/3;
            }
            else if(($ct1_2205 > $ct2_2205) && ($ct2_2205 > $ct3_2205) && ($ct3_2205 > $ct4_2205)){
                $avg_2205 = ($ct1_2205+$ct2_2205+$ct3_2205)/3;
            }
            else if(($ct2_2205 > $ct3_2205) && ($ct3_2205 > $ct4_2205) && ($ct4_2205 > $ct1_2205)){
                $avg_2205 = ($ct2_2205+$ct3_2205+$ct4_2205)/3;
            }
            else if(($ct3_2205 > $ct4_2205) && ($ct4_2205 > $ct1_2205) && ($ct1_2205 > $ct2_2205)){
                $avg_2205 = ($ct1_2205+$ct3_2205+$ct4_2205)/3;
            }
            else if(($ct4_2205 > $ct1_2205) && ($ct1_2205 > $ct2_2205) && ($ct2_2205 > $ct3_2205)){
                $avg_2205 = ($ct1_2205+$ct2_2205+$ct4_2205)/3;
            }
            else if(($ct1_2205 > $ct2_2205) && ($ct1_2205 > $ct3_2205) && ($ct1_2205 > $ct4_2205) && ($ct2_2205==$ct3_2205) && ($ct3_2205==$ct4_2205)){
                $avg_2205 = ($ct1_2205+$ct2_2205+$ct3_2205)/3;
            }
            else if(($ct2_2205 > $ct3_2205) && ($ct2_2205 > $ct4_2205) && ($ct2_2205 > $ct1_2205) && ($ct3_2205==$ct4_2205) && ($ct4_2205==$ct1_2205)){
                $avg_2205 = ($ct2_2205+$ct3_2205+$ct4_2205)/3;
            }
            else if(($ct3_2205 > $ct1_2205) && ($ct3_2205 > $ct2_2205) && ($ct3_2205 > $ct4_2205) && ($ct1_2205==$ct2_2205) && ($ct2_2205==$ct4_2205)){
                $avg_2205 = ($ct3_2205+$ct2_2205+$ct4_2205)/3;
            }
            else if(($ct4_2205 > $ct1_2205) && ($ct4_2205 > $ct2_2205) && ($ct4_2205 > $ct3_2205) && ($ct1_2205==$ct2_2205) && ($ct2_2205==$ct3_2205)){
                $avg_2205 = ($ct1_2205+$ct2_2205+$ct4_2205)/3;
            }



            $res2205 = $avg_2205+$att2205+$exam2205;

            //echo '<br>';

            // echo $res2205;

            //echo '<br>';

            if($res2205>=0 && $res2205<=39){
                $gp2205 = 0.00;
            }
            else if($res2205>39 && $res2205<=44){
                $gp2205 = 2.00;
            }
            else if($res2205>44 && $res2205<=49){
                $gp2205 = 2.25;
            }
            else if($res2205>49 && $res2205<=54){
                $gp2205 = 2.50;
            }
            else if($res2205>54 && $res2205<=59){
                $gp2205 = 2.75;
            }
            else if($res2205>59 && $res2205<=64){
                $gp2205 = 3.00;
            }
            else if($res2205>64 && $res2205<=69){
                $gp2205 = 3.25;
            }
            else if($res2205>69 && $res2205<=74){
                $gp2205 = 3.50;
            }
            else if($res2205>74 && $res2205<=79){
                $gp2205 = 3.75;
            }
            else if($res2205>79){
                $gp2205 = 4.00;
            }

            //echo '<br>';

            // echo $gp2205;


            //theory ece 2205 ends


             //echo '<br>';


            // theory ece 2213 starts

            $ct1_2213 = $row['ece_2213_ct1'];
            $ct2_2213 = $row['ece_2213_ct2'];
            $ct3_2213 = $row['ece_2213_ct3'];
            $ct4_2213 = $row['ece_2213_ct4'];
            $att2213 = $row['ece_2213_att'];
            $exam2213 = $row['ece_2213_exam'];


            if($ct1_2213==0){
                $avg_2213 = ($ct2_2213+$ct3_2213+$ct4_2213)/3;
            }
            else if($ct2_2213==0){
                $avg_2213 = ($ct1_2213+$ct3_2213+$ct4_2213)/3;
            }
            else if($ct3_2213==0){
                $avg_2213 = ($ct2_2213+$ct1_2213+$ct4_2213)/3;
            }
            else if($ct4_2213==0){
                $avg_2213 = ($ct2_2213+$ct3_2213+$ct1_2213)/3;
            }
            else if($ct1_2213==0 && $ct2_2213==0){
                $avg_2213 = ($ct3_2213+$ct4_2213)/3;
            }
            else if($ct1_2213==0 && $ct3_2213==0){
                $avg_2213 = ($ct2_2213+$ct4_2213)/3;
            }
            else if($ct1_2213==0 && $ct4_2213==0){
                $avg_2213 = ($ct2_2213+$ct3_2213)/3;
            }
            else if($ct2_2213==0 && $ct3_2213==0){
                $avg_2213 = ($ct1_2213+$ct4_2213)/3;
            }
            else if($ct2_2213==0 && $ct4_2213==0){
                $avg_2213 = ($ct1_2213+$ct3_2213)/3;
            }
            else if($ct3_2213==0 && $ct4_2213==0){
                $avg_2213 = ($ct1_2213+$ct2_2213)/3;
            }
            else if($ct1_2213==0 && $ct2_2213==0 && $ct3_2213==0){
                $avg_2213 = $ct4_2213/3;
            }
            else if($ct1_2213==0 && $ct2_2213==0 && $ct4_2213==0){
                $avg_2213 = $ct3_2213/3;
            }
            else if($ct1_2213==0 && $ct3_2213==0 && $ct4_2213==0){
                $avg_2213 = $ct2_2213/3;
            }
            else if($ct2_2213==0 && $ct3_2213==0 && $ct4_2213==0){
                $avg_2213 = $ct1_2213/3;
            }
            else if($ct1_2213==0 && $ct2_2213==0 && $ct3_2213==0 && $ct4_2213==0){
                $avg_2213 = 0;
            }
            else if(($ct1_2213 > $ct3_2213) && ($ct1_2213 > $ct4_2213) && ($ct2_2213 > $ct3_2213) && ($ct2_2213 > $ct4_2213) && ($ct3_2213 == $ct4_2213)){
                $avg_2213 = ($ct1_2213+$ct2_2213+$ct3_2213)/3;
            }
            else if(($ct1_2213 > $ct2_2213) && ($ct1_2213 > $ct4_2213) && ($ct3_2213 > $ct2_2213) && ($ct3_2213 > $ct4_2213) && ($ct2_2213 == $ct4_2213)){
                $avg_2213 = ($ct1_2213+$ct2_2213+$ct3_2213)/3;
            }
            else if(($ct1_2213 > $ct2_2213) && ($ct1_2213 > $ct3_2213) && ($ct4_2213 > $ct2_2213) && ($ct4_2213 > $ct3_2213) && ($ct2_2213 == $ct3_2213)){
                $avg_2213 = ($ct1_2213+$ct2_2213+$ct4_2213)/3;
            }
            else if(($ct2_2213 > $ct1_2213) && ($ct2_2213 > $ct4_2213) && ($ct3_2213 > $ct1_2213) && ($ct3_2213 > $ct4_2213) && ($ct1_2213 == $ct4_2213)){
                $avg_2213 = ($ct1_2213+$ct2_2213+$ct3_2213)/3;
            }
            else if(($ct2_2213 > $ct1_2213) && ($ct2_2213 > $ct3_2213) && ($ct4_2213 > $ct1_2213) && ($ct4_2213 > $ct3_2213) && ($ct1_2213 == $ct3_2213)){
                $avg_2213 = ($ct1_2213+$ct2_2213+$ct4_2213)/3;
            }
            else if(($ct3_2213 > $ct1_2213) && ($ct3_2213 > $ct2_2213) && ($ct4_2213 > $ct1_2213) && ($ct4_2213 > $ct2_2213) && ($ct1_2213 == $ct2_2213)){
                $avg_2213 = ($ct1_2213+$ct3_2213+$ct4_2213)/3;
            }
            else if(($ct1_2213 > $ct4_2213) && ($ct2_2213 > $ct4_2213) && ($ct3_2213 > $ct4_2213)){
                $avg_2213 = ($ct1_2213+$ct2_2213+$ct3_2213)/3;
            }
            else if(($ct1_2213 > $ct3_2213) && ($ct2_2213 > $ct3_2213) && ($ct4_2213 > $ct3_2213 )){
                $avg_2213 = ($ct1_2213+$ct2_2213+$ct4_2213)/3;
            }
            else if(($ct1_2213 > $ct2_2213) && ($ct3_2213 > $ct2_2213) && ($ct4_2213 > $ct2_2213) ){
                $avg_2213 = ($ct1_2213+$ct3_2213+$ct4_2213)/3;
            }
            else if(($ct2_2213 > $ct1_2213) && ($ct3_2213 > $ct1_2213) && ($ct4_2213 > $ct1_2213)){
                $avg_2213 = ($ct2_2213+$ct3_2213+$ct4_2213)/3;
            }
            else if($ct1_2213==$ct2_2213 && $ct2_2213==$ct3_2213 && $ct3_2213==$ct4_2213){
                $avg_2213 = ($ct1_2213+$ct2_2213+$ct3_2213)/3;
            }
            else if(($ct1_2213 > $ct2_2213) && ($ct2_2213 > $ct3_2213) && ($ct3_2213 > $ct4_2213)){
                $avg_2213 = ($ct1_2213+$ct2_2213+$ct3_2213)/3;
            }
            else if(($ct2_2213 > $ct3_2213) && ($ct3_2213 > $ct4_2213) && ($ct4_2213 > $ct1_2213)){
                $avg_2213 = ($ct2_2213+$ct3_2213+$ct4_2213)/3;
            }
            else if(($ct3_2213 > $ct4_2213) && ($ct4_2213 > $ct1_2213) && ($ct1_2213 > $ct2_2213)){
                $avg_2213 = ($ct1_2213+$ct3_2213+$ct4_2213)/3;
            }
            else if(($ct4_2213 > $ct1_2213) && ($ct1_2213 > $ct2_2213) && ($ct2_2213 > $ct3_2213)){
                $avg_2213 = ($ct1_2213+$ct2_2213+$ct4_2213)/3;
            }
            else if(($ct1_2213 > $ct2_2213) && ($ct1_2213 > $ct3_2213) && ($ct1_2213 > $ct4_2213) && ($ct2_2213==$ct3_2213) && ($ct3_2213==$ct4_2213)){
                $avg_2213 = ($ct1_2213+$ct2_2213+$ct3_2213)/3;
            }
            else if(($ct2_2213 > $ct3_2213) && ($ct2_2213 > $ct4_2213) && ($ct2_2213 > $ct1_2213) && ($ct3_2213==$ct4_2213) && ($ct4_2213==$ct1_2213)){
                $avg_2213 = ($ct1_2213+$ct2_2213+$ct3_2213)/3;
            }
            else if(($ct3_2213 > $ct1_2213) && ($ct3_2213 > $ct2_2213) && ($ct3_2213 > $ct4_2213) && ($ct1_2213==$ct2_2213) && ($ct2_2213==$ct4_2213)){
                $avg_2213 = ($ct3_2213+$ct2_2213+$ct4_2213)/3;
            }
            else if(($ct4_2213 > $ct1_2213) && ($ct4_2213 > $ct2_2213) && ($ct4_2213 > $ct3_2213) && ($ct1_2213==$ct2_2213) && ($ct2_2213==$ct3_2213)){
                $avg_2213 = ($ct1_2213+$ct2_2213+$ct4_2213)/3;
            }



            $res2213 = $avg_2213+$att2213+$exam2213;

            //echo '<br>';

            // echo $res2213;

            //echo '<br>';

            if($res2213>=0 && $res2213<=39){
                $gp2213 = 0.00;
            }
            else if($res2213>39 && $res2213<=44){
                $gp2213 = 2.00;
            }
            else if($res2213>44 && $res2213<=49){
                $gp2213 = 2.25;
            }
            else if($res2213>49 && $res2213<=54){
                $gp2213 = 2.50;
            }
            else if($res2213>54 && $res2213<=59){
                $gp2213 = 2.75;
            }
            else if($res2213>59 && $res2213<=64){
                $gp2213 = 3.00;
            }
            else if($res2213>64 && $res2213<=69){
                $gp2213 = 3.25;
            }
            else if($res2213>69 && $res2213<=74){
                $gp2213 = 3.50;
            }
            else if($res2213>74 && $res2213<=79){
                $gp2213 = 3.75;
            }
            else if($res2213>79){
                $gp2213 = 4.00;
            }

            //echo '<br>';

            // echo $gp2213;


            //theory ece 2213 ends




            //echo "<br>";



            // theory ece 2215 starts


            $ct1_2215 = $row['ece_2215_ct1'];
            $ct2_2215 = $row['ece_2215_ct2'];
            $ct3_2215 = $row['ece_2215_ct3'];
            $ct4_2215 = $row['ece_2215_ct4'];
            $att2215 = $row['ece_2215_att'];
            $exam2215 = $row['ece_2215_exam'];





            if($ct1_2215==0){
                $avg_2215 = ($ct2_2215+$ct3_2215+$ct4_2215)/3;
            }
            else if($ct2_2215==0){
                $avg_2215 = ($ct1_2215+$ct3_2215+$ct4_2215)/3;
            }
            else if($ct3_2215==0){
                $avg_2215 = ($ct2_2215+$ct1_2215+$ct4_2215)/3;
            }
            else if($ct4_2215==0){
                $avg_2215 = ($ct2_2215+$ct3_2215+$ct1_2215)/3;
            }
            else if($ct1_2215==0 && $ct2_2215==0){
                $avg_2215 = ($ct3_2215+$ct4_2215)/3;
            }
            else if($ct1_2215==0 && $ct3_2215==0){
                $avg_2215 = ($ct2_2215+$ct4_2215)/3;
            }
            else if($ct1_2215==0 && $ct4_2215==0){
                $avg_2215 = ($ct2_2215+$ct3_2215)/3;
            }
            else if($ct2_2215==0 && $ct3_2215==0){
                $avg_2215 = ($ct1_2215+$ct4_2215)/3;
            }
            else if($ct2_2215==0 && $ct4_2215==0){
                $avg_2215 = ($ct1_2215+$ct3_2215)/3;
            }
            else if($ct3_2215==0 && $ct4_2215==0){
                $avg_2215 = ($ct1_2215+$ct2_2215)/3;
            }
            else if($ct1_2215==0 && $ct2_2215==0 && $ct3_2215==0){
                $avg_2215 = $ct4_2215/3;
            }
            else if($ct1_2215==0 && $ct2_2215==0 && $ct4_2215==0){
                $avg_2215 = $ct3_2215/3;
            }
            else if($ct1_2215==0 && $ct3_2215==0 && $ct4_2215==0){
                $avg_2215 = $ct2_2215/3;
            }
            else if($ct2_2215==0 && $ct3_2215==0 && $ct4_2215==0){
                $avg_2215 = $ct1_2215/3;
            }
            else if($ct1_2215==0 && $ct2_2215==0 && $ct3_2215==0 && $ct4_2215==0){
                $avg_2215 = 0;
            }
            else if(($ct1_2215 > $ct3_2215) && ($ct1_2215 > $ct4_2215) && ($ct2_2215 > $ct3_2215) && ($ct2_2215 > $ct4_2215) && ($ct3_2215 == $ct4_2215)){
                $avg_2215 = ($ct1_2215+$ct2_2215+$ct3_2215)/3;
            }
            else if(($ct1_2215 > $ct2_2215) && ($ct1_2215 > $ct4_2215) && ($ct3_2215 > $ct2_2215) && ($ct3_2215 > $ct4_2215) && ($ct2_2215 == $ct4_2215)){
                $avg_2215 = ($ct1_2215+$ct2_2215+$ct3_2215)/3;
            }
            else if(($ct1_2215 > $ct2_2215) && ($ct1_2215 > $ct3_2215) && ($ct4_2215 > $ct2_2215) && ($ct4_2215 > $ct3_2215) && ($ct2_2215 == $ct3_2215)){
                $avg_2215 = ($ct1_2215+$ct2_2215+$ct4_2215)/3;
            }
            else if(($ct2_2215 > $ct1_2215) && ($ct2_2215 > $ct4_2215) && ($ct3_2215 > $ct1_2215) && ($ct3_2215 > $ct4_2215) && ($ct1_2215 == $ct4_2215)){
                $avg_2215 = ($ct1_2215+$ct2_2215+$ct3_2215)/3;
            }
            else if(($ct2_2215 > $ct1_2215) && ($ct2_2215 > $ct3_2215) && ($ct4_2215 > $ct1_2215) && ($ct4_2215 > $ct3_2215) && ($ct1_2215 == $ct3_2215)){
                $avg_2215 = ($ct1_2215+$ct2_2215+$ct4_2215)/3;
            }
            else if(($ct3_2215 > $ct1_2215) && ($ct3_2215 > $ct2_2215) && ($ct4_2215 > $ct1_2215) && ($ct4_2215 > $ct2_2215) && ($ct1_2215 == $ct2_2215)){
                $avg_2215 = ($ct1_2215+$ct3_2215+$ct4_2215)/3;
            }
            else if(($ct1_2215 > $ct4_2215) && ($ct2_2215 > $ct4_2215) && ($ct3_2215 > $ct4_2215)){
                $avg_2215 = ($ct1_2215+$ct2_2215+$ct3_2215)/3;
            }
            else if(($ct1_2215 > $ct3_2215) && ($ct2_2215 > $ct3_2215) && ($ct4_2215 > $ct3_2215 )){
                $avg_2215 = ($ct1_2215+$ct2_2215+$ct4_2215)/3;
            }
            else if(($ct1_2215 > $ct2_2215) && ($ct3_2215 > $ct2_2215) && ($ct4_2215 > $ct2_2215) ){
                $avg_2215 = ($ct1_2215+$ct3_2215+$ct4_2215)/3;
            }
            else if(($ct2_2215 > $ct1_2215) && ($ct3_2215 > $ct1_2215) && ($ct4_2215 > $ct1_2215)){
                $avg_2215 = ($ct2_2215+$ct3_2215+$ct4_2215)/3;
            }
            else if($ct1_2215==$ct2_2215 && $ct2_2215==$ct3_2215 && $ct3_2215==$ct4_2215){
                $avg_2215 = ($ct1_2215+$ct2_2215+$ct3_2215)/3;
            }
            else if(($ct1_2215 > $ct2_2215) && ($ct2_2215 > $ct3_2215) && ($ct3_2215 > $ct4_2215)){
                $avg_2215 = ($ct1_2215+$ct2_2215+$ct3_2215)/3;
            }
            else if(($ct2_2215 > $ct3_2215) && ($ct3_2215 > $ct4_2215) && ($ct4_2215 > $ct1_2215)){
                $avg_2215 = ($ct2_2215+$ct3_2215+$ct4_2215)/3;
            }
            else if(($ct3_2215 > $ct4_2215) && ($ct4_2215 > $ct1_2215) && ($ct1_2215 > $ct2_2215)){
                $avg_2215 = ($ct1_2215+$ct3_2215+$ct4_2215)/3;
            }
            else if(($ct4_2215 > $ct1_2215) && ($ct1_2215 > $ct2_2215) && ($ct2_2215 > $ct3_2215)){
                $avg_2215 = ($ct1_2215+$ct2_2215+$ct4_2215)/3;
            }
            else if(($ct1_2215 > $ct2_2215) && ($ct1_2215 > $ct3_2215) && ($ct1_2215 > $ct4_2215) && ($ct2_2215==$ct3_2215) && ($ct3_2215==$ct4_2215)){
                $avg_2215 = ($ct1_2215+$ct2_2215+$ct3_2215)/3;
            }
            else if(($ct2_2215 > $ct3_2215) && ($ct2_2215 > $ct4_2215) && ($ct2_2215 > $ct1_2215) && ($ct3_2215==$ct4_2215) && ($ct4_2215==$ct1_2215)){
                $avg_2215 = ($ct1_2215+$ct2_2215+$ct3_2215)/3;
            }
            else if(($ct3_2215 > $ct1_2215) && ($ct3_2215 > $ct2_2215) && ($ct3_2215 > $ct4_2215) && ($ct1_2215==$ct2_2215) && ($ct2_2215==$ct4_2215)){
                $avg_2215 = ($ct3_2215+$ct2_2215+$ct4_2215)/3;
            }
            else if(($ct4_2215 > $ct1_2215) && ($ct4_2215 > $ct2_2215) && ($ct4_2215 > $ct3_2215) && ($ct1_2215==$ct2_2215) && ($ct2_2215==$ct3_2215)){
                $avg_2215 = ($ct1_2215+$ct2_2215+$ct4_2215)/3;
            }



            $res2215 = $avg_2215+$att2215+$exam2215;

            //echo '<br>';

            // echo $res2215;

            //echo '<br>';

            if($res2215>=0 && $res2215<=39){
                $gp2215 = 0.00;
            }
            else if($res2215>39 && $res2215<=44){
                $gp2215 = 2.00;
            }
            else if($res2215>44 && $res2215<=49){
                $gp2215 = 2.25;
            }
            else if($res2215>49 && $res2215<=54){
                $gp2215 = 2.50;
            }
            else if($res2215>54 && $res2215<=59){
                $gp2215 = 2.75;
            }
            else if($res2215>59 && $res2215<=64){
                $gp2215 = 3.00;
            }
            else if($res2215>64 && $res2215<=69){
                $gp2215 = 3.25;
            }
            else if($res2215>69 && $res2215<=74){
                $gp2215 = 3.50;
            }
            else if($res2215>74 && $res2215<=79){
                $gp2215 = 3.75;
            }
            else if($res2215>79){
                $gp2215 = 4.00;
            }

            //echo '<br>';

            // echo $gp2215;




            //theory ece 2215 ends




            //echo '<br>';




            // theory math 2217 starts


            $ct1math_2217 = $row['math_2217_ct1'];
            $ct2math_2217 = $row['math_2217_ct2'];
            $ct3math_2217 = $row['math_2217_ct3'];
            $ct4math_2217 = $row['math_2217_ct4'];
            $att_math_2217 = $row['math_2217_att'];
            $exam_math_2217 = $row['math_2217_exam'];



            if($ct1math_2217==0){
                $avg_math2217 = ($ct2math_2217+$ct3math_2217+$ct4math_2217)/3;
            }
            else if($ct2math_2217==0){
                $avg_math2217 = ($ct1math_2217+$ct3math_2217+$ct4math_2217)/3;
            }
            else if($ct3math_2217==0){
                $avg_math2217 = ($ct2math_2217+$ct1math_2217+$ct4math_2217)/3;
            }
            else if($ct4math_2217==0){
                $avg_math2217 = ($ct2math_2217+$ct3math_2217+$ct1math_2217)/3;
            }
            else if($ct1math_2217==0 && $ct2math_2217==0){
                $avg_math2217 = ($ct3math_2217+$ct4math_2217)/3;
            }
            else if($ct1math_2217==0 && $ct3math_2217==0){
                $avg_math2217 = ($ct2math_2217+$ct4math_2217)/3;
            }
            else if($ct1math_2217==0 && $ct4math_2217==0){
                $avg_math2217 = ($ct2math_2217+$ct3math_2217)/3;
            }
            else if($ct2math_2217==0 && $ct3math_2217==0){
                $avg_math2217 = ($ct1math_2217+$ct4math_2217)/3;
            }
            else if($ct2math_2217==0 && $ct4math_2217==0){
                $avg_math2217 = ($ct1math_2217+$ct3math_2217)/3;
            }
            else if($ct3math_2217==0 && $ct4math_2217==0){
                $avg_math2217 = ($ct1math_2217+$ct2math_2217)/3;
            }
            else if($ct1math_2217==0 && $ct2math_2217==0 && $ct3math_2217==0){
                $avg_math2217 = $ct4math_2217/3;
            }
            else if($ct1math_2217==0 && $ct2math_2217==0 && $ct4math_2217==0){
                $avg_math2217 = $ct3math_2217/3;
            }
            else if($ct1math_2217==0 && $ct3math_2217==0 && $ct4math_2217==0){
                $avg_math2217 = $ct2math_2217/3;
            }
            else if($ct2math_2217==0 && $ct3math_2217==0 && $ct4math_2217==0){
                $avg_math2217 = $ct1math_2217/3;
            }
            else if($ct1math_2217==0 && $ct2math_2217==0 && $ct3math_2217==0 && $ct4math_2217==0){
                $avg_math2217 = 0;
            }
            else if(($ct1math_2217 > $ct3math_2217) && ($ct1math_2217 > $ct4math_2217) && ($ct2math_2217 > $ct3math_2217) && ($ct2math_2217 > $ct4math_2217) && ($ct3math_2217 == $ct4math_2217)){
                $avg_math2217 = ($ct1math_2217+$ct2math_2217+$ct3math_2217)/3;
            }
            else if(($ct1math_2217 > $ct2math_2217) && ($ct1math_2217 > $ct4math_2217) && ($ct3math_2217 > $ct2math_2217) && ($ct3math_2217 > $ct4math_2217) && ($ct2math_2217 == $ct4math_2217)){
                $avg_math2217 = ($ct1math_2217+$ct2math_2217+$ct3math_2217)/3;
            }
            else if(($ct1math_2217 > $ct2math_2217) && ($ct1math_2217 > $ct3math_2217) && ($ct4math_2217 > $ct2math_2217) && ($ct4math_2217 > $ct3math_2217) && ($ct2math_2217 == $ct3math_2217)){
                $avg_math2217 = ($ct1math_2217+$ct2math_2217+$ct4math_2217)/3;
            }
            else if(($ct2math_2217 > $ct1math_2217) && ($ct2math_2217 > $ct4math_2217) && ($ct3math_2217 > $ct1math_2217) && ($ct3math_2217 > $ct4math_2217) && ($ct1math_2217 == $ct4math_2217)){
                $avg_math2217 = ($ct1math_2217+$ct2math_2217+$ct3math_2217)/3;
            }
            else if(($ct2math_2217 > $ct1math_2217) && ($ct2math_2217 > $ct3math_2217) && ($ct4math_2217 > $ct1math_2217) && ($ct4math_2217 > $ct3math_2217) && ($ct1math_2217 == $ct3math_2217)){
                $avg_math2217 = ($ct1math_2217+$ct2math_2217+$ct4math_2217)/3;
            }
            else if(($ct3math_2217 > $ct1math_2217) && ($ct3math_2217 > $ct2math_2217) && ($ct4math_2217 > $ct1math_2217) && ($ct4math_2217 > $ct2math_2217) && ($ct1math_2217 == $ct2math_2217)){
                $avg_math2217 = ($ct1math_2217+$ct3math_2217+$ct4math_2217)/3;
            }
            else if(($ct1math_2217 > $ct4math_2217) && ($ct2math_2217 > $ct4math_2217) && ($ct3math_2217 > $ct4math_2217)){
                $avg_math2217 = ($ct1math_2217+$ct2math_2217+$ct3math_2217)/3;
            }
            else if(($ct1math_2217 > $ct3math_2217) && ($ct2math_2217 > $ct3math_2217) && ($ct4math_2217 > $ct3math_2217 )){
                $avg_math2217 = ($ct1math_2217+$ct2math_2217+$ct4math_2217)/3;
            }
            else if(($ct1math_2217 > $ct2math_2217) && ($ct3math_2217 > $ct2math_2217) && ($ct4math_2217 > $ct2math_2217) ){
                $avg_math2217 = ($ct1math_2217+$ct3math_2217+$ct4math_2217)/3;
            }
            else if(($ct2math_2217 > $ct1math_2217) && ($ct3math_2217 > $ct1math_2217) && ($ct4math_2217 > $ct1math_2217)){
                $avg_math2217 = ($ct2math_2217+$ct3math_2217+$ct4math_2217)/3;
            }
            else if($ct1math_2217==$ct2math_2217 && $ct2math_2217==$ct3math_2217 && $ct3math_2217==$ct4math_2217){
                $avg_math2217 = ($ct1math_2217+$ct2math_2217+$ct3math_2217)/3;
            }
            else if(($ct1math_2217 > $ct2math_2217) && ($ct2math_2217 > $ct3math_2217) && ($ct3math_2217 > $ct4math_2217)){
                $avg_math2217 = ($ct1math_2217+$ct2math_2217+$ct3math_2217)/3;
            }
            else if(($ct2math_2217 > $ct3math_2217) && ($ct3math_2217 > $ct4math_2217) && ($ct4math_2217 > $ct1math_2217)){
                $avg_math2217 = ($ct2math_2217+$ct3math_2217+$ct4math_2217)/3;
            }
            else if(($ct3math_2217 > $ct4math_2217) && ($ct4math_2217 > $ct1math_2217) && ($ct1math_2217 > $ct2math_2217)){
                $avg_math2217 = ($ct1math_2217+$ct3math_2217+$ct4math_2217)/3;
            }
            else if(($ct4math_2217 > $ct1math_2217) && ($ct1math_2217 > $ct2math_2217) && ($ct2math_2217 > $ct3math_2217)){
                $avg_math2217 = ($ct1math_2217+$ct2math_2217+$ct4math_2217)/3;
            }
            else if(($ct1math_2217 > $ct2math_2217) && ($ct1math_2217 > $ct3math_2217) && ($ct1math_2217 > $ct4math_2217) && ($ct2math_2217==$ct3math_2217) && ($ct3math_2217==$ct4math_2217)){
                $avg_math2217 = ($ct1math_2217+$ct2math_2217+$ct3math_2217)/3;
            }
            else if(($ct2math_2217 > $ct3math_2217) && ($ct2math_2217 > $ct4math_2217) && ($ct2math_2217 > $ct1math_2217) && ($ct3math_2217==$ct4math_2217) && ($ct4math_2217==$ct1math_2217)){
                $avg_math2217 = ($ct1math_2217+$ct2math_2217+$ct3math_2217)/3;
            }
            else if(($ct3math_2217 > $ct1math_2217) && ($ct3math_2217 > $ct2math_2217) && ($ct3math_2217 > $ct4math_2217) && ($ct1math_2217==$ct2math_2217) && ($ct2math_2217==$ct4math_2217)){
                $avg_math2217 = ($ct3math_2217+$ct2math_2217+$ct4math_2217)/3;
            }
            else if(($ct4math_2217 > $ct1math_2217) && ($ct4math_2217 > $ct2math_2217) && ($ct4math_2217 > $ct3math_2217) && ($ct1math_2217==$ct2math_2217) && ($ct2math_2217==$ct3math_2217)){
                $avg_math2217 = ($ct1math_2217+$ct2math_2217+$ct4math_2217)/3;
            }



            $resmath2217 = $avg_math2217+$att_math_2217+$exam_math_2217;

            //echo '<br>';

            // echo $resmath2217;

            //echo '<br>';

            if($resmath2217>=0 && $resmath2217<=39){
                $gpmath2217 = 0.00;
            }
            else if($resmath2217>39 && $resmath2217<=44){
                $gpmath2217 = 2.00;
            }
            else if($resmath2217>44 && $resmath2217<=49){
                $gpmath2217 = 2.25;
            }
            else if($resmath2217>49 && $resmath2217<=54){
                $gpmath2217 = 2.50;
            }
            else if($resmath2217>54 && $resmath2217<=59){
                $gpmath2217 = 2.75;
            }
            else if($resmath2217>59 && $resmath2217<=64){
                $gpmath2217 = 3.00;
            }
            else if($resmath2217>64 && $resmath2217<=69){
                $gpmath2217 = 3.25;
            }
            else if($resmath2217>69 && $resmath2217<=74){
                $gpmath2217 = 3.50;
            }
            else if($resmath2217>74 && $resmath2217<=79){
                $gpmath2217 = 3.75;
            }
            else if($resmath2217>79){
                $gpmath2217 = 4.00;
            }

            // echo '<br>';

            // echo $gpmath2217;



            //theory math 2217 ends




            // echo '<br>';




            // theory hum 2217 starts


            $ct1hum_2217 = $row['hum_2217_ct1'];
            $ct2hum_2217 = $row['hum_2217_ct2'];
            $ct3hum_2217 = $row['hum_2217_ct3'];
            $ct4hum_2217 = $row['hum_2217_ct4'];
            $att_hum_2217 = $row['hum_2217_att'];
            $exam_hum_2217 = $row['hum_2217_exam'];



            if($ct1hum_2217==0){
                $avg_hum2217 = ($ct2hum_2217+$ct3hum_2217+$ct4hum_2217)/3;
            }
            else if($ct2hum_2217==0){
                $avg_hum2217 = ($ct1hum_2217+$ct3hum_2217+$ct4hum_2217)/3;
            }
            else if($ct3hum_2217==0){
                $avg_hum2217 = ($ct2hum_2217+$ct1hum_2217+$ct4hum_2217)/3;
            }
            else if($ct4hum_2217==0){
                $avg_hum2217 = ($ct2hum_2217+$ct3hum_2217+$ct1hum_2217)/3;
            }
            else if($ct1hum_2217==0 && $ct2hum_2217==0){
                $avg_hum2217 = ($ct3hum_2217+$ct4hum_2217)/3;
            }
            else if($ct1hum_2217==0 && $ct3hum_2217==0){
                $avg_hum2217 = ($ct2hum_2217+$ct4hum_2217)/3;
            }
            else if($ct1hum_2217==0 && $ct4hum_2217==0){
                $avg_hum2217 = ($ct2hum_2217+$ct3hum_2217)/3;
            }
            else if($ct2hum_2217==0 && $ct3hum_2217==0){
                $avg_hum2217 = ($ct1hum_2217+$ct4hum_2217)/3;
            }
            else if($ct2hum_2217==0 && $ct4hum_2217==0){
                $avg_hum2217 = ($ct1hum_2217+$ct3hum_2217)/3;
            }
            else if($ct3hum_2217==0 && $ct4hum_2217==0){
                $avg_hum2217 = ($ct1hum_2217+$ct2hum_2217)/3;
            }
            else if($ct1hum_2217==0 && $ct2hum_2217==0 && $ct3hum_2217==0){
                $avg_hum2217 = $ct4hum_2217/3;
            }
            else if($ct1hum_2217==0 && $ct2hum_2217==0 && $ct4hum_2217==0){
                $avg_hum2217 = $ct3hum_2217/3;
            }
            else if($ct1hum_2217==0 && $ct3hum_2217==0 && $ct4hum_2217==0){
                $avg_hum2217 = $ct2hum_2217/3;
            }
            else if($ct2hum_2217==0 && $ct3hum_2217==0 && $ct4hum_2217==0){
                $avg_hum2217 = $ct1hum_2217/3;
            }
            else if($ct1hum_2217==0 && $ct2hum_2217==0 && $ct3hum_2217==0 && $ct4hum_2217==0){
                $avg_hum2217 = 0;
            }
            else if(($ct1hum_2217 > $ct3hum_2217) && ($ct1hum_2217 > $ct4hum_2217) && ($ct2hum_2217 > $ct3hum_2217) && ($ct2hum_2217 > $ct4hum_2217) && ($ct3hum_2217 == $ct4hum_2217)){
                $avg_hum2217 = ($ct1hum_2217+$ct2hum_2217+$ct3hum_2217)/3;
            }
            else if(($ct1hum_2217 > $ct2hum_2217) && ($ct1hum_2217 > $ct4hum_2217) && ($ct3hum_2217 > $ct2hum_2217) && ($ct3hum_2217 > $ct4hum_2217) && ($ct2hum_2217 == $ct4hum_2217)){
                $avg_hum2217 = ($ct1hum_2217+$ct2hum_2217+$ct3hum_2217)/3;
            }
            else if(($ct1hum_2217 > $ct2hum_2217) && ($ct1hum_2217 > $ct3hum_2217) && ($ct4hum_2217 > $ct2hum_2217) && ($ct4hum_2217 > $ct3hum_2217) && ($ct2hum_2217 == $ct3hum_2217)){
                $avg_hum2217 = ($ct1hum_2217+$ct2hum_2217+$ct4hum_2217)/3;
            }
            else if(($ct2hum_2217 > $ct1hum_2217) && ($ct2hum_2217 > $ct4hum_2217) && ($ct3hum_2217 > $ct1hum_2217) && ($ct3hum_2217 > $ct4hum_2217) && ($ct1hum_2217 == $ct4hum_2217)){
                $avg_hum2217 = ($ct1hum_2217+$ct2hum_2217+$ct3hum_2217)/3;
            }
            else if(($ct2hum_2217 > $ct1hum_2217) && ($ct2hum_2217 > $ct3hum_2217) && ($ct4hum_2217 > $ct1hum_2217) && ($ct4hum_2217 > $ct3hum_2217) && ($ct1hum_2217 == $ct3hum_2217)){
                $avg_hum2217 = ($ct1hum_2217+$ct2hum_2217+$ct4hum_2217)/3;
            }
            else if(($ct3hum_2217 > $ct1hum_2217) && ($ct3hum_2217 > $ct2hum_2217) && ($ct4hum_2217 > $ct1hum_2217) && ($ct4hum_2217 > $ct2hum_2217) && ($ct1hum_2217 == $ct2hum_2217)){
                $avg_hum2217 = ($ct1hum_2217+$ct3hum_2217+$ct4hum_2217)/3;
            }
            else if(($ct1hum_2217 > $ct4hum_2217) && ($ct2hum_2217 > $ct4hum_2217) && ($ct3hum_2217 > $ct4hum_2217)){
                $avg_hum2217 = ($ct1hum_2217+$ct2hum_2217+$ct3hum_2217)/3;
            }
            else if(($ct1hum_2217 > $ct3hum_2217) && ($ct2hum_2217 > $ct3hum_2217) && ($ct4hum_2217 > $ct3hum_2217 )){
                $avg_hum2217 = ($ct1hum_2217+$ct2hum_2217+$ct4hum_2217)/3;
            }
            else if(($ct1hum_2217 > $ct2hum_2217) && ($ct3hum_2217 > $ct2hum_2217) && ($ct4hum_2217 > $ct2hum_2217) ){
                $avg_hum2217 = ($ct1hum_2217+$ct3hum_2217+$ct4hum_2217)/3;
            }
            else if(($ct2hum_2217 > $ct1hum_2217) && ($ct3hum_2217 > $ct1hum_2217) && ($ct4hum_2217 > $ct1hum_2217)){
                $avg_hum2217 = ($ct2hum_2217+$ct3hum_2217+$ct4hum_2217)/3;
            }
            else if($ct1hum_2217==$ct2hum_2217 && $ct2hum_2217==$ct3hum_2217 && $ct3hum_2217==$ct4hum_2217){
                $avg_hum2217 = ($ct1hum_2217+$ct2hum_2217+$ct3hum_2217)/3;
            }
            else if(($ct1hum_2217 > $ct2hum_2217) && ($ct2hum_2217 > $ct3hum_2217) && ($ct3hum_2217 > $ct4hum_2217)){
                $avg_hum2217 = ($ct1hum_2217+$ct2hum_2217+$ct3hum_2217)/3;
            }
            else if(($ct2hum_2217 > $ct3hum_2217) && ($ct3hum_2217 > $ct4hum_2217) && ($ct4hum_2217 > $ct1hum_2217)){
                $avg_hum2217 = ($ct2hum_2217+$ct3hum_2217+$ct4hum_2217)/3;
            }
            else if(($ct3hum_2217 > $ct4hum_2217) && ($ct4hum_2217 > $ct1hum_2217) && ($ct1hum_2217 > $ct2hum_2217)){
                $avg_hum2217 = ($ct1hum_2217+$ct3hum_2217+$ct4hum_2217)/3;
            }
            else if(($ct4hum_2217 > $ct1hum_2217) && ($ct1hum_2217 > $ct2hum_2217) && ($ct2hum_2217 > $ct3hum_2217)){
                $avg_hum2217 = ($ct1hum_2217+$ct2hum_2217+$ct4hum_2217)/3;
            }
            else if(($ct1hum_2217 > $ct2hum_2217) && ($ct1hum_2217 > $ct3hum_2217) && ($ct1hum_2217 > $ct4hum_2217) && ($ct2hum_2217==$ct3hum_2217) && ($ct3hum_2217==$ct4hum_2217)){
                $avg_hum2217 = ($ct1hum_2217+$ct2hum_2217+$ct3hum_2217)/3;
            }
            else if(($ct2hum_2217 > $ct3hum_2217) && ($ct2hum_2217 > $ct4hum_2217) && ($ct2hum_2217 > $ct1hum_2217) && ($ct3hum_2217==$ct4hum_2217) && ($ct4hum_2217==$ct1hum_2217)){
                $avg_hum2217 = ($ct1hum_2217+$ct2hum_2217+$ct3hum_2217)/3;
            }
            else if(($ct3hum_2217 > $ct1hum_2217) && ($ct3hum_2217 > $ct2hum_2217) && ($ct3hum_2217 > $ct4hum_2217) && ($ct1hum_2217==$ct2hum_2217) && ($ct2hum_2217==$ct4hum_2217)){
                $avg_hum2217 = ($ct3hum_2217+$ct2hum_2217+$ct4hum_2217)/3;
            }
            else if(($ct4hum_2217 > $ct1hum_2217) && ($ct4hum_2217 > $ct2hum_2217) && ($ct4hum_2217 > $ct3hum_2217) && ($ct1hum_2217==$ct2hum_2217) && ($ct2hum_2217==$ct3hum_2217)){
                $avg_hum2217 = ($ct1hum_2217+$ct2hum_2217+$ct4hum_2217)/3;
            }



            $reshum2217 = $avg_hum2217+$att_hum_2217+$exam_hum_2217;

            //echo '<br>';

            // echo $reshum2217;

            //echo '<br>';

            if($reshum2217>=0 && $reshum2217<=39){
                $gphum2217 = 0.00;
            }
            else if($reshum2217>39 && $reshum2217<=44){
                $gphum2217 = 2.00;
            }
            else if($reshum2217>44 && $reshum2217<=49){
                $gphum2217 = 2.25;
            }
            else if($reshum2217>49 && $reshum2217<=54){
                $gphum2217 = 2.50;
            }
            else if($reshum2217>54 && $reshum2217<=59){
                $gphum2217 = 2.75;
            }
            else if($reshum2217>59 && $reshum2217<=64){
                $gphum2217 = 3.00;
            }
            else if($reshum2217>64 && $reshum2217<=69){
                $gphum2217 = 3.25;
            }
            else if($reshum2217>69 && $reshum2217<=74){
                $gphum2217 = 3.50;
            }
            else if($reshum2217>74 && $reshum2217<=79){
                $gphum2217 = 3.75;
            }
            else if($reshum2217>79){
                $gphum2217 = 4.00;
            }

            //echo '<br>';

            // echo $gphum2217;



            //theory hum 2217 ends




            //  echo '<br>';
            //  echo '<br>';
            //  echo '<br>';
            //  echo '<br>';
            //  echo '<br>';



            // sessional ece 2206 starts


            $att2206 = $row['ece_2206_att'];
            $report2206 = $row['ece_2206_re'];
            $quiz2206 = $row['ece_2206_quiz'];
            $bv2206 = $row['ece_2206_bv'];

            $res2206 = $att2206+$report2206+$quiz2206+$bv2206;

            //echo '<br>';

            // echo $res2206;

            //echo '<br>';

            if($res2206>=0 && $res2206<=39){
                $gp2206 = 0.00;
            }
            else if($res2206>=40 && $res2206<=44){
                $gp2206 = 2.00;
            }
            else if($res2206>=45 && $res2206<=49){
                $gp2206 = 2.25;
            }
            else if($res2206>=50 && $res2206<=54){
                $gp2206 = 2.50;
            }
            else if($res2206>=55 && $res2206<=59){
                $gp2206 = 2.75;
            }
            else if($res2206>=60 && $res2206<=64){
                $gp2206 = 3.00;
            }
            else if($res2206>=65 && $res2206<=69){
                $gp2206 = 3.25;
            }
            else if($res2206>=70 && $res2206<=74){
                $gp2206 = 3.50;
            }
            else if($res2206>=75 && $res2206<=79){
                $gp2206 = 3.75;
            }
            else if($res2206>=80){
                $gp2206 = 4.00;
            }

            //echo '<br>';

            // echo $gp2206;


            // sessional ece 2206 ends



            //echo '<br>';



            // sessional ece 2214 starts


            $att2214 = $row['ece_2214_att'];
            $report2214 = $row['ece_2214_re'];
            $quiz2214 = $row['ece_2214_quiz'];
            $bv2214 = $row['ece_2214_bv'];

            $res2214 = $att2214+$report2214+$quiz2214+$bv2214;

            //echo '<br>';

            // echo $res2214;

            //echo '<br>';

            if($res2214>=0 && $res2214<=39){
                $gp2214 = 0.00;
            }
            else if($res2214>=40 && $res2214<=44){
                $gp2214 = 2.00;
            }
            else if($res2214>=45 && $res2214<=49){
                $gp2214 = 2.25;
            }
            else if($res2214>=50 && $res2214<=54){
                $gp2214 = 2.50;
            }
            else if($res2214>=55 && $res2214<=59){
                $gp2214 = 2.75;
            }
            else if($res2214>=60 && $res2214<=64){
                $gp2214 = 3.00;
            }
            else if($res2214>=65 && $res2214<=69){
                $gp2214 = 3.25;
            }
            else if($res2214>=70 && $res2214<=74){
                $gp2214 = 3.50;
            }
            else if($res2214>=75 && $res2214<=79){
                $gp2214 = 3.75;
            }
            else if($res2214>=80){
                $gp2214 = 4.00;
            }

            //echo '<br>';

            // echo $gp2214;


            // sessional ece 2214 ends

            //echo '<br>';


            // sessional ece 2216starts


            $att2216 = $row['ece_2216_att'];
            $report2216 = $row['ece_2216_re'];
            $quiz2216 = $row['ece_2216_quiz'];
            $bv2216 = $row['ece_2216_bv'];

            $res2216 = $att2216+$report2216+$quiz2216+$bv2216;

            //echo '<br>';

            // echo $res2216;

            //echo '<br>';

            if($res2216>=0 && $res2216<=39){
                $gp2216 = 0.00;
            }
            else if($res2216>=40 && $res2216<=44){
                $gp2216 = 2.00;
            }
            else if($res2216>=45 && $res2216<=49){
                $gp2216 = 2.25;
            }
            else if($res2216>=50 && $res2216<=54){
                $gp2216 = 2.50;
            }
            else if($res2216>=55 && $res2216<=59){
                $gp2216 = 2.75;
            }
            else if($res2216>=60 && $res2216<=64){
                $gp2216 = 3.00;
            }
            else if($res2216>=65 && $res2216<=69){
                $gp2216 = 3.25;
            }
            else if($res2216>=70 && $res2216<=74){
                $gp2216 = 3.50;
            }
            else if($res2216>=75 && $res2216<=79){
                $gp2216 = 3.75;
            }
            else if($res2216>=80){
                $gp2216 = 4.00;
            }

            //echo '<br>';

            // echo $gp2216;


            // sessional ece 2216 ends





            // echo '<br>';
            // echo '<br>';
            // echo '<br>';
            // echo '<br>';
            // echo '<br>';



            // project 2200 starts

            $res2200 = $row['ece_2200_score'];

            //echo '<br>';

            // echo $res2200;

            //echo '<br>';

            if($res2200>=0 && $res2200<=39){
                $gp2200 = 0.00;
            }
            else if($res2200>=40 && $res2200<=44){
                $gp2200 = 2.00;
            }
            else if($res2200>=45 && $res2200<=49){
                $gp2200 = 2.25;
            }
            else if($res2200>=50 && $res2200<=54){
                $gp2200 = 2.50;
            }
            else if($res2200>=55 && $res2200<=59){
                $gp2200 = 2.75;
            }
            else if($res2200>=60 && $res2200<=64){
                $gp2200 = 3.00;
            }
            else if($res2200>=65 && $res2200<=69){
                $gp2200 = 3.25;
            }
            else if($res2200>=70 && $res2200<=74){
                $gp2200 = 3.50;
            }
            else if($res2200>=75 && $res2200<=79){
                $gp2200 = 3.75;
            }
            else if($res2200>=80){
                $gp2200 = 4.00;
            }

            // echo '<br>';

            // echo $gp2200;

            // echo '<br>';
            // echo '<br>';
            // echo '<br>';


            // project 2200 ends

            echo '<br>';

            $gp22 =  ($gp2205+ $gp2213+ $gp2215+ $gphum2217+ $gpmath2217)*3 + ($gp2206*0.75) + ($gp2214*1.50 + $gp2216*1.50) + ($gp2200*0.75);

            $format_gp22 = number_format($gp22, 2);


            $gpa22 =  (($gp2205+ $gp2213+ $gp2215+ $gphum2217+ $gpmath2217)*3 + ($gp2206*0.75) + ($gp2214*1.50 + $gp2216*1.50) + ($gp2200*0.75))/19.50;

            $format_gpa22 = number_format($gpa22, 2);



            ?>


           <div class="resflex">
                <div>Roll: <?php echo $row['roll22']; ?></div>
                <div>GP: <?php echo $format_gp12 ?></div>
                <div>GPA: <?php echo $format_gpa12 ?></div>
                <div>CGPA: <?php

                // echo $format_gpa11;

                // echo '<br>';

                // echo $format_gpa21;

                // echo '<br>';

                $cgpa22 = ($format_gpa11 + $format_gpa12 + $format_gpa21 + $format_gpa22)/4;

                $format_cgpa22 = number_format($cgpa22, 2);

                echo $format_cgpa22;



                ?></div>
            </div>

            <br>
            <br>



<?php
	}
?>

 <!-- Result 2-2 Ends -->





 

<!-- Result 3-1 Starts -->


<div class="segment-area">
    <h3>3rd Year Odd Semester Result</h3>
</div>




<?php

		    $db_31 = mysqli_query($link, "SELECT * FROM `semester_31` WHERE `roll31` = ".$_SESSION['student_login']);
			while($row = mysqli_fetch_assoc($db_31)){
?>


            <?php


            // theory ece 3107 starts

            $ct1_3107 = $row['ece_3107_ct1'];
            $ct2_3107 = $row['ece_3107_ct2'];
            $ct3_3107 = $row['ece_3107_ct3'];
            $ct4_3107 = $row['ece_3107_ct4'];
            $att3107 = $row['ece_3107_att'];
            $exam3107 = $row['ece_3107_exam'];


            if($ct1_3107==0){
                $avg_3107 = ($ct2_3107+$ct3_3107+$ct4_3107)/3;
            }
            else if($ct2_3107==0){
                $avg_3107 = ($ct1_3107+$ct3_3107+$ct4_3107)/3;
            }
            else if($ct3_3107==0){
                $avg_3107 = ($ct2_3107+$ct1_3107+$ct4_3107)/3;
            }
            else if($ct4_3107==0){
                $avg_3107 = ($ct2_3107+$ct3_3107+$ct1_3107)/3;
            }
            else if($ct1_3107==0 && $ct2_3107==0){
                $avg_3107 = ($ct3_3107+$ct4_3107)/3;
            }
            else if($ct1_3107==0 && $ct3_3107==0){
                $avg_3107 = ($ct2_3107+$ct4_3107)/3;
            }
            else if($ct1_3107==0 && $ct4_3107==0){
                $avg_3107 = ($ct2_3107+$ct3_3107)/3;
            }
            else if($ct2_3107==0 && $ct3_3107==0){
                $avg_3107 = ($ct1_3107+$ct4_3107)/3;
            }
            else if($ct2_3107==0 && $ct4_3107==0){
                $avg_3107 = ($ct1_3107+$ct3_3107)/3;
            }
            else if($ct3_3107==0 && $ct4_3107==0){
                $avg_3107 = ($ct1_3107+$ct2_3107)/3;
            }
            else if($ct1_3107==0 && $ct2_3107==0 && $ct3_3107==0){
                $avg_3107 = $ct4_3107/3;
            }
            else if($ct1_3107==0 && $ct2_3107==0 && $ct4_3107==0){
                $avg_3107 = $ct3_3107/3;
            }
            else if($ct1_3107==0 && $ct3_3107==0 && $ct4_3107==0){
                $avg_3107 = $ct2_3107/3;
            }
            else if($ct2_3107==0 && $ct3_3107==0 && $ct4_3107==0){
                $avg_3107 = $ct1_3107/3;
            }
            else if($ct1_3107==0 && $ct2_3107==0 && $ct3_3107==0 && $ct4_3107==0){
                $avg_3107 = 0;
            }
            else if(($ct1_3107 > $ct3_3107) && ($ct1_3107 > $ct4_3107) && ($ct2_3107 > $ct3_3107) && ($ct2_3107 > $ct4_3107) && ($ct3_3107 == $ct4_3107)){
                $avg_3107 = ($ct1_3107+$ct2_3107+$ct3_3107)/3;
            }
            else if(($ct1_3107 > $ct2_3107) && ($ct1_3107 > $ct4_3107) && ($ct3_3107 > $ct2_3107) && ($ct3_3107 > $ct4_3107) && ($ct2_3107 == $ct4_3107)){
                $avg_3107 = ($ct1_3107+$ct2_3107+$ct3_3107)/3;
            }
            else if(($ct1_3107 > $ct2_3107) && ($ct1_3107 > $ct3_3107) && ($ct4_3107 > $ct2_3107) && ($ct4_3107 > $ct3_3107) && ($ct2_3107 == $ct3_3107)){
                $avg_3107 = ($ct1_3107+$ct2_3107+$ct4_3107)/3;
            }
            else if(($ct2_3107 > $ct1_3107) && ($ct2_3107 > $ct4_3107) && ($ct3_3107 > $ct1_3107) && ($ct3_3107 > $ct4_3107) && ($ct1_3107 == $ct4_3107)){
                $avg_3107 = ($ct1_3107+$ct2_3107+$ct3_3107)/3;
            }
            else if(($ct2_3107 > $ct1_3107) && ($ct2_3107 > $ct3_3107) && ($ct4_3107 > $ct1_3107) && ($ct4_3107 > $ct3_3107) && ($ct1_3107 == $ct3_3107)){
                $avg_3107 = ($ct1_3107+$ct2_3107+$ct4_3107)/3;
            }
            else if(($ct3_3107 > $ct1_3107) && ($ct3_3107 > $ct2_3107) && ($ct4_3107 > $ct1_3107) && ($ct4_3107 > $ct2_3107) && ($ct1_3107 == $ct2_3107)){
                $avg_3107 = ($ct1_3107+$ct3_3107+$ct4_3107)/3;
            }
            else if(($ct1_3107 > $ct4_3107) && ($ct2_3107 > $ct4_3107) && ($ct3_3107 > $ct4_3107 )){
                $avg_3107 = ($ct1_3107+$ct2_3107+$ct3_3107)/3;
            }
            else if(($ct1_3107 > $ct3_3107) && ($ct2_3107 > $ct3_3107) && ($ct4_3107 > $ct3_3107 )){
                $avg_3107 = ($ct1_3107+$ct2_3107+$ct4_3107)/3;
            }
            else if(($ct1_3107 > $ct2_3107) && ($ct3_3107 > $ct2_3107) && ($ct4_3107 > $ct2_3107 )){
                $avg_3107 = ($ct1_3107+$ct3_3107+$ct4_3107)/3;
            }
            else if(($ct2_3107 > $ct1_3107) && ($ct3_3107 > $ct1_3107) && ($ct4_3107 > $ct1_3107 )){
                $avg_3107 = ($ct2_3107+$ct3_3107+$ct4_3107)/3;
            }
            else if($ct1_3107==$ct2_3107 && $ct2_3107==$ct3_3107 && $ct3_3107==$ct4_3107){
                $avg_3107 = ($ct1_3107+$ct2_3107+$ct3_3107)/3;
            }
            else if(($ct1_3107 > $ct2_3107) && ($ct2_3107 > $ct3_3107) && ($ct3_3107 > $ct4_3107)){
                $avg_3107 = ($ct1_3107+$ct2_3107+$ct3_3107)/3;
            }
            else if(($ct2_3107 > $ct3_3107) && ($ct3_3107 > $ct4_3107) && ($ct4_3107 > $ct1_3107)){
                $avg_3107 = ($ct2_3107+$ct3_3107+$ct4_3107)/3;
            }
            else if(($ct3_3107 > $ct4_3107) && ($ct4_3107 > $ct1_3107) && ($ct1_3107 > $ct2_3107)){
                $avg_3107 = ($ct1_3107+$ct3_3107+$ct4_3107)/3;
            }
            else if(($ct4_3107 > $ct1_3107) && ($ct1_3107 > $ct2_3107) && ($ct2_3107 > $ct3_3107)){
                $avg_3107 = ($ct1_3107+$ct2_3107+$ct4_3107)/3;
            }
            else if(($ct1_3107 > $ct2_3107) && ($ct1_3107 > $ct3_3107) && ($ct1_3107 > $ct4_3107) && ($ct2_3107==$ct3_3107) && ($ct3_3107==$ct4_3107)){
                $avg_3107 = ($ct1_3107+$ct2_3107+$ct3_3107)/3;
            }
            else if(($ct2_3107 > $ct3_3107) && ($ct2_3107 > $ct4_3107) && ($ct2_3107 > $ct1_3107) && ($ct3_3107==$ct4_3107) && ($ct4_3107==$ct1_3107)){
                $avg_3107 = ($ct2_3107+$ct3_3107+$ct4_3107)/3;
            }
            else if(($ct3_3107 > $ct1_3107) && ($ct3_3107 > $ct2_3107) && ($ct3_3107 > $ct4_3107) && ($ct1_3107==$ct2_3107) && ($ct2_3107==$ct4_3107)){
                $avg_3107 = ($ct3_3107+$ct2_3107+$ct4_3107)/3;
            }
            else if(($ct4_3107 > $ct1_3107) && ($ct4_3107 > $ct2_3107) && ($ct4_3107 > $ct3_3107) && ($ct1_3107==$ct2_3107) && ($ct2_3107==$ct3_3107)){
                $avg_3107 = ($ct1_3107+$ct2_3107+$ct4_3107)/3;
            }



            $res3107 = $avg_3107+$att3107+$exam3107;

            //echo '<br>';

            // echo $res3107;

            //echo '<br>';

            if($res3107>=0 && $res3107<=39){
                $gp3107 = 0.00;
            }
            else if($res3107>39 && $res3107<=44){
                $gp3107 = 2.00;
            }
            else if($res3107>44 && $res3107<=49){
                $gp3107 = 2.25;
            }
            else if($res3107>49 && $res3107<=54){
                $gp3107 = 2.50;
            }
            else if($res3107>54 && $res3107<=59){
                $gp3107 = 2.75;
            }
            else if($res3107>59 && $res3107<=64){
                $gp3107 = 3.00;
            }
            else if($res3107>64 && $res3107<=69){
                $gp3107 = 3.25;
            }
            else if($res3107>69 && $res3107<=74){
                $gp3107 = 3.50;
            }
            else if($res3107>74 && $res3107<=79){
                $gp3107 = 3.75;
            }
            else if($res3107>79){
                $gp3107 = 4.00;
            }

            //echo '<br>';

            // echo $gp3107;


            //theory ece 3107 ends


             //echo '<br>';


            // theory ece 3109 starts

            $ct1_3109 = $row['ece_3109_ct1'];
            $ct2_3109 = $row['ece_3109_ct2'];
            $ct3_3109 = $row['ece_3109_ct3'];
            $ct4_3109 = $row['ece_3109_ct4'];
            $att3109 = $row['ece_3109_att'];
            $exam3109 = $row['ece_3109_exam'];


            if($ct1_3109==0){
                $avg_3109 = ($ct2_3109+$ct3_3109+$ct4_3109)/3;
            }
            else if($ct2_3109==0){
                $avg_3109 = ($ct1_3109+$ct3_3109+$ct4_3109)/3;
            }
            else if($ct3_3109==0){
                $avg_3109 = ($ct2_3109+$ct1_3109+$ct4_3109)/3;
            }
            else if($ct4_3109==0){
                $avg_3109 = ($ct2_3109+$ct3_3109+$ct1_3109)/3;
            }
            else if($ct1_3109==0 && $ct2_3109==0){
                $avg_3109 = ($ct3_3109+$ct4_3109)/3;
            }
            else if($ct1_3109==0 && $ct3_3109==0){
                $avg_3109 = ($ct2_3109+$ct4_3109)/3;
            }
            else if($ct1_3109==0 && $ct4_3109==0){
                $avg_3109 = ($ct2_3109+$ct3_3109)/3;
            }
            else if($ct2_3109==0 && $ct3_3109==0){
                $avg_3109 = ($ct1_3109+$ct4_3109)/3;
            }
            else if($ct2_3109==0 && $ct4_3109==0){
                $avg_3109 = ($ct1_3109+$ct3_3109)/3;
            }
            else if($ct3_3109==0 && $ct4_3109==0){
                $avg_3109 = ($ct1_3109+$ct2_3109)/3;
            }
            else if($ct1_3109==0 && $ct2_3109==0 && $ct3_3109==0){
                $avg_3109 = $ct4_3109/3;
            }
            else if($ct1_3109==0 && $ct2_3109==0 && $ct4_3109==0){
                $avg_3109 = $ct3_3109/3;
            }
            else if($ct1_3109==0 && $ct3_3109==0 && $ct4_3109==0){
                $avg_3109 = $ct2_3109/3;
            }
            else if($ct2_3109==0 && $ct3_3109==0 && $ct4_3109==0){
                $avg_3109 = $ct1_3109/3;
            }
            else if($ct1_3109==0 && $ct2_3109==0 && $ct3_3109==0 && $ct4_3109==0){
                $avg_3109 = 0;
            }
            else if(($ct1_3109 > $ct3_3109) && ($ct1_3109 > $ct4_3109) && ($ct2_3109 > $ct3_3109) && ($ct2_3109 > $ct4_3109) && ($ct3_3109 == $ct4_3109)){
                $avg_3109 = ($ct1_3109+$ct2_3109+$ct3_3109)/3;
            }
            else if(($ct1_3109 > $ct2_3109) && ($ct1_3109 > $ct4_3109) && ($ct3_3109 > $ct2_3109) && ($ct3_3109 > $ct4_3109) && ($ct2_3109 == $ct4_3109)){
                $avg_3109 = ($ct1_3109+$ct2_3109+$ct3_3109)/3;
            }
            else if(($ct1_3109 > $ct2_3109) && ($ct1_3109 > $ct3_3109) && ($ct4_3109 > $ct2_3109) && ($ct4_3109 > $ct3_3109) && ($ct2_3109 == $ct3_3109)){
                $avg_3109 = ($ct1_3109+$ct2_3109+$ct4_3109)/3;
            }
            else if(($ct2_3109 > $ct1_3109) && ($ct2_3109 > $ct4_3109) && ($ct3_3109 > $ct1_3109) && ($ct3_3109 > $ct4_3109) && ($ct1_3109 == $ct4_3109)){
                $avg_3109 = ($ct1_3109+$ct2_3109+$ct3_3109)/3;
            }
            else if(($ct2_3109 > $ct1_3109) && ($ct2_3109 > $ct3_3109) && ($ct4_3109 > $ct1_3109) && ($ct4_3109 > $ct3_3109) && ($ct1_3109 == $ct3_3109)){
                $avg_3109 = ($ct1_3109+$ct2_3109+$ct4_3109)/3;
            }
            else if(($ct3_3109 > $ct1_3109) && ($ct3_3109 > $ct2_3109) && ($ct4_3109 > $ct1_3109) && ($ct4_3109 > $ct2_3109) && ($ct1_3109 == $ct2_3109)){
                $avg_3109 = ($ct1_3109+$ct3_3109+$ct4_3109)/3;
            }
            else if(($ct1_3109 > $ct4_3109) && ($ct2_3109 > $ct4_3109) && ($ct3_3109 > $ct4_3109)){
                $avg_3109 = ($ct1_3109+$ct2_3109+$ct3_3109)/3;
            }
            else if(($ct1_3109 > $ct3_3109) && ($ct2_3109 > $ct3_3109) && ($ct4_3109 > $ct3_3109 )){
                $avg_3109 = ($ct1_3109+$ct2_3109+$ct4_3109)/3;
            }
            else if(($ct1_3109 > $ct2_3109) && ($ct3_3109 > $ct2_3109) && ($ct4_3109 > $ct2_3109) ){
                $avg_3109 = ($ct1_3109+$ct3_3109+$ct4_3109)/3;
            }
            else if(($ct2_3109 > $ct1_3109) && ($ct3_3109 > $ct1_3109) && ($ct4_3109 > $ct1_3109)){
                $avg_3109 = ($ct2_3109+$ct3_3109+$ct4_3109)/3;
            }
            else if($ct1_3109==$ct2_3109 && $ct2_3109==$ct3_3109 && $ct3_3109==$ct4_3109){
                $avg_3109 = ($ct1_3109+$ct2_3109+$ct3_3109)/3;
            }
            else if(($ct1_3109 > $ct2_3109) && ($ct2_3109 > $ct3_3109) && ($ct3_3109 > $ct4_3109)){
                $avg_3109 = ($ct1_3109+$ct2_3109+$ct3_3109)/3;
            }
            else if(($ct2_3109 > $ct3_3109) && ($ct3_3109 > $ct4_3109) && ($ct4_3109 > $ct1_3109)){
                $avg_3109 = ($ct2_3109+$ct3_3109+$ct4_3109)/3;
            }
            else if(($ct3_3109 > $ct4_3109) && ($ct4_3109 > $ct1_3109) && ($ct1_3109 > $ct2_3109)){
                $avg_3109 = ($ct1_3109+$ct3_3109+$ct4_3109)/3;
            }
            else if(($ct4_3109 > $ct1_3109) && ($ct1_3109 > $ct2_3109) && ($ct2_3109 > $ct3_3109)){
                $avg_3109 = ($ct1_3109+$ct2_3109+$ct4_3109)/3;
            }
            else if(($ct1_3109 > $ct2_3109) && ($ct1_3109 > $ct3_3109) && ($ct1_3109 > $ct4_3109) && ($ct2_3109==$ct3_3109) && ($ct3_3109==$ct4_3109)){
                $avg_3109 = ($ct1_3109+$ct2_3109+$ct3_3109)/3;
            }
            else if(($ct2_3109 > $ct3_3109) && ($ct2_3109 > $ct4_3109) && ($ct2_3109 > $ct1_3109) && ($ct3_3109==$ct4_3109) && ($ct4_3109==$ct1_3109)){
                $avg_3109 = ($ct1_3109+$ct2_3109+$ct3_3109)/3;
            }
            else if(($ct3_3109 > $ct1_3109) && ($ct3_3109 > $ct2_3109) && ($ct3_3109 > $ct4_3109) && ($ct1_3109==$ct2_3109) && ($ct2_3109==$ct4_3109)){
                $avg_3109 = ($ct3_3109+$ct2_3109+$ct4_3109)/3;
            }
            else if(($ct4_3109 > $ct1_3109) && ($ct4_3109 > $ct2_3109) && ($ct4_3109 > $ct3_3109) && ($ct1_3109==$ct2_3109) && ($ct2_3109==$ct3_3109)){
                $avg_3109 = ($ct1_3109+$ct2_3109+$ct4_3109)/3;
            }



            $res3109 = $avg_3109+$att3109+$exam3109;

            //echo '<br>';

            // echo $res3109;

            //echo '<br>';

            if($res3109>=0 && $res3109<=39){
                $gp3109 = 0.00;
            }
            else if($res3109>39 && $res3109<=44){
                $gp3109 = 2.00;
            }
            else if($res3109>44 && $res3109<=49){
                $gp3109 = 2.25;
            }
            else if($res3109>49 && $res3109<=54){
                $gp3109 = 2.50;
            }
            else if($res3109>54 && $res3109<=59){
                $gp3109 = 2.75;
            }
            else if($res3109>59 && $res3109<=64){
                $gp3109 = 3.00;
            }
            else if($res3109>64 && $res3109<=69){
                $gp3109 = 3.25;
            }
            else if($res3109>69 && $res3109<=74){
                $gp3109 = 3.50;
            }
            else if($res3109>74 && $res3109<=79){
                $gp3109 = 3.75;
            }
            else if($res3109>79){
                $gp3109 = 4.00;
            }

            //echo '<br>';

            // echo $gp3109;


            //theory ece 3109 ends




            //echo "<br>";



            // theory ece 3111 starts


            $ct1_3111 = $row['ece_3111_ct1'];
            $ct2_3111 = $row['ece_3111_ct2'];
            $ct3_3111 = $row['ece_3111_ct3'];
            $ct4_3111 = $row['ece_3111_ct4'];
            $att3111 = $row['ece_3111_att'];
            $exam3111 = $row['ece_3111_exam'];





            if($ct1_3111==0){
                $avg_3111 = ($ct2_3111+$ct3_3111+$ct4_3111)/3;
            }
            else if($ct2_3111==0){
                $avg_3111 = ($ct1_3111+$ct3_3111+$ct4_3111)/3;
            }
            else if($ct3_3111==0){
                $avg_3111 = ($ct2_3111+$ct1_3111+$ct4_3111)/3;
            }
            else if($ct4_3111==0){
                $avg_3111 = ($ct2_3111+$ct3_3111+$ct1_3111)/3;
            }
            else if($ct1_3111==0 && $ct2_3111==0){
                $avg_3111 = ($ct3_3111+$ct4_3111)/3;
            }
            else if($ct1_3111==0 && $ct3_3111==0){
                $avg_3111 = ($ct2_3111+$ct4_3111)/3;
            }
            else if($ct1_3111==0 && $ct4_3111==0){
                $avg_3111 = ($ct2_3111+$ct3_3111)/3;
            }
            else if($ct2_3111==0 && $ct3_3111==0){
                $avg_3111 = ($ct1_3111+$ct4_3111)/3;
            }
            else if($ct2_3111==0 && $ct4_3111==0){
                $avg_3111 = ($ct1_3111+$ct3_3111)/3;
            }
            else if($ct3_3111==0 && $ct4_3111==0){
                $avg_3111 = ($ct1_3111+$ct2_3111)/3;
            }
            else if($ct1_3111==0 && $ct2_3111==0 && $ct3_3111==0){
                $avg_3111 = $ct4_3111/3;
            }
            else if($ct1_3111==0 && $ct2_3111==0 && $ct4_3111==0){
                $avg_3111 = $ct3_3111/3;
            }
            else if($ct1_3111==0 && $ct3_3111==0 && $ct4_3111==0){
                $avg_3111 = $ct2_3111/3;
            }
            else if($ct2_3111==0 && $ct3_3111==0 && $ct4_3111==0){
                $avg_3111 = $ct1_3111/3;
            }
            else if($ct1_3111==0 && $ct2_3111==0 && $ct3_3111==0 && $ct4_3111==0){
                $avg_3111 = 0;
            }
            else if(($ct1_3111 > $ct3_3111) && ($ct1_3111 > $ct4_3111) && ($ct2_3111 > $ct3_3111) && ($ct2_3111 > $ct4_3111) && ($ct3_3111 == $ct4_3111)){
                $avg_3111 = ($ct1_3111+$ct2_3111+$ct3_3111)/3;
            }
            else if(($ct1_3111 > $ct2_3111) && ($ct1_3111 > $ct4_3111) && ($ct3_3111 > $ct2_3111) && ($ct3_3111 > $ct4_3111) && ($ct2_3111 == $ct4_3111)){
                $avg_3111 = ($ct1_3111+$ct2_3111+$ct3_3111)/3;
            }
            else if(($ct1_3111 > $ct2_3111) && ($ct1_3111 > $ct3_3111) && ($ct4_3111 > $ct2_3111) && ($ct4_3111 > $ct3_3111) && ($ct2_3111 == $ct3_3111)){
                $avg_3111 = ($ct1_3111+$ct2_3111+$ct4_3111)/3;
            }
            else if(($ct2_3111 > $ct1_3111) && ($ct2_3111 > $ct4_3111) && ($ct3_3111 > $ct1_3111) && ($ct3_3111 > $ct4_3111) && ($ct1_3111 == $ct4_3111)){
                $avg_3111 = ($ct1_3111+$ct2_3111+$ct3_3111)/3;
            }
            else if(($ct2_3111 > $ct1_3111) && ($ct2_3111 > $ct3_3111) && ($ct4_3111 > $ct1_3111) && ($ct4_3111 > $ct3_3111) && ($ct1_3111 == $ct3_3111)){
                $avg_3111 = ($ct1_3111+$ct2_3111+$ct4_3111)/3;
            }
            else if(($ct3_3111 > $ct1_3111) && ($ct3_3111 > $ct2_3111) && ($ct4_3111 > $ct1_3111) && ($ct4_3111 > $ct2_3111) && ($ct1_3111 == $ct2_3111)){
                $avg_3111 = ($ct1_3111+$ct3_3111+$ct4_3111)/3;
            }
            else if(($ct1_3111 > $ct4_3111) && ($ct2_3111 > $ct4_3111) && ($ct3_3111 > $ct4_3111)){
                $avg_3111 = ($ct1_3111+$ct2_3111+$ct3_3111)/3;
            }
            else if(($ct1_3111 > $ct3_3111) && ($ct2_3111 > $ct3_3111) && ($ct4_3111 > $ct3_3111 )){
                $avg_3111 = ($ct1_3111+$ct2_3111+$ct4_3111)/3;
            }
            else if(($ct1_3111 > $ct2_3111) && ($ct3_3111 > $ct2_3111) && ($ct4_3111 > $ct2_3111) ){
                $avg_3111 = ($ct1_3111+$ct3_3111+$ct4_3111)/3;
            }
            else if(($ct2_3111 > $ct1_3111) && ($ct3_3111 > $ct1_3111) && ($ct4_3111 > $ct1_3111)){
                $avg_3111 = ($ct2_3111+$ct3_3111+$ct4_3111)/3;
            }
            else if($ct1_3111==$ct2_3111 && $ct2_3111==$ct3_3111 && $ct3_3111==$ct4_3111){
                $avg_3111 = ($ct1_3111+$ct2_3111+$ct3_3111)/3;
            }
            else if(($ct1_3111 > $ct2_3111) && ($ct2_3111 > $ct3_3111) && ($ct3_3111 > $ct4_3111)){
                $avg_3111 = ($ct1_3111+$ct2_3111+$ct3_3111)/3;
            }
            else if(($ct2_3111 > $ct3_3111) && ($ct3_3111 > $ct4_3111) && ($ct4_3111 > $ct1_3111)){
                $avg_3111 = ($ct2_3111+$ct3_3111+$ct4_3111)/3;
            }
            else if(($ct3_3111 > $ct4_3111) && ($ct4_3111 > $ct1_3111) && ($ct1_3111 > $ct2_3111)){
                $avg_3111 = ($ct1_3111+$ct3_3111+$ct4_3111)/3;
            }
            else if(($ct4_3111 > $ct1_3111) && ($ct1_3111 > $ct2_3111) && ($ct2_3111 > $ct3_3111)){
                $avg_3111 = ($ct1_3111+$ct2_3111+$ct4_3111)/3;
            }
            else if(($ct1_3111 > $ct2_3111) && ($ct1_3111 > $ct3_3111) && ($ct1_3111 > $ct4_3111) && ($ct2_3111==$ct3_3111) && ($ct3_3111==$ct4_3111)){
                $avg_3111 = ($ct1_3111+$ct2_3111+$ct3_3111)/3;
            }
            else if(($ct2_3111 > $ct3_3111) && ($ct2_3111 > $ct4_3111) && ($ct2_3111 > $ct1_3111) && ($ct3_3111==$ct4_3111) && ($ct4_3111==$ct1_3111)){
                $avg_3111 = ($ct1_3111+$ct2_3111+$ct3_3111)/3;
            }
            else if(($ct3_3111 > $ct1_3111) && ($ct3_3111 > $ct2_3111) && ($ct3_3111 > $ct4_3111) && ($ct1_3111==$ct2_3111) && ($ct2_3111==$ct4_3111)){
                $avg_3111 = ($ct3_3111+$ct2_3111+$ct4_3111)/3;
            }
            else if(($ct4_3111 > $ct1_3111) && ($ct4_3111 > $ct2_3111) && ($ct4_3111 > $ct3_3111) && ($ct1_3111==$ct2_3111) && ($ct2_3111==$ct3_3111)){
                $avg_3111 = ($ct1_3111+$ct2_3111+$ct4_3111)/3;
            }



            $res3111 = $avg_3111+$att3111+$exam3111;

            //echo '<br>';

            // echo $res3111;

            //echo '<br>';

            if($res3111>=0 && $res3111<=39){
                $gp3111 = 0.00;
            }
            else if($res3111>39 && $res3111<=44){
                $gp3111 = 2.00;
            }
            else if($res3111>44 && $res3111<=49){
                $gp3111 = 2.25;
            }
            else if($res3111>49 && $res3111<=54){
                $gp3111 = 2.50;
            }
            else if($res3111>54 && $res3111<=59){
                $gp3111 = 2.75;
            }
            else if($res3111>59 && $res3111<=64){
                $gp3111 = 3.00;
            }
            else if($res3111>64 && $res3111<=69){
                $gp3111 = 3.25;
            }
            else if($res3111>69 && $res3111<=74){
                $gp3111 = 3.50;
            }
            else if($res3111>74 && $res3111<=79){
                $gp3111 = 3.75;
            }
            else if($res3111>79){
                $gp3111 = 4.00;
            }

            //echo '<br>';

            // echo $gp3111;




            //theory ece 3111 ends




            //echo '<br>';




            // theory ece 3117 starts


            $ct1_3117 = $row['ece_3117_ct1'];
            $ct2_3117 = $row['ece_3117_ct2'];
            $ct3_3117 = $row['ece_3117_ct3'];
            $ct4_3117 = $row['ece_3117_ct4'];
            $att3117 = $row['ece_3117_att'];
            $exam_3117 = $row['ece_3117_exam'];



            if($ct1_3117==0){
                $avg_3117 = ($ct2_3117+$ct3_3117+$ct4_3117)/3;
            }
            else if($ct2_3117==0){
                $avg_3117 = ($ct1_3117+$ct3_3117+$ct4_3117)/3;
            }
            else if($ct3_3117==0){
                $avg_3117 = ($ct2_3117+$ct1_3117+$ct4_3117)/3;
            }
            else if($ct4_3117==0){
                $avg_3117 = ($ct2_3117+$ct3_3117+$ct1_3117)/3;
            }
            else if($ct1_3117==0 && $ct2_3117==0){
                $avg_3117 = ($ct3_3117+$ct4_3117)/3;
            }
            else if($ct1_3117==0 && $ct3_3117==0){
                $avg_3117 = ($ct2_3117+$ct4_3117)/3;
            }
            else if($ct1_3117==0 && $ct4_3117==0){
                $avg_3117 = ($ct2_3117+$ct3_3117)/3;
            }
            else if($ct2_3117==0 && $ct3_3117==0){
                $avg_3117 = ($ct1_3117+$ct4_3117)/3;
            }
            else if($ct2_3117==0 && $ct4_3117==0){
                $avg_3117 = ($ct1_3117+$ct3_3117)/3;
            }
            else if($ct3_3117==0 && $ct4_3117==0){
                $avg_3117 = ($ct1_3117+$ct2_3117)/3;
            }
            else if($ct1_3117==0 && $ct2_3117==0 && $ct3_3117==0){
                $avg_3117 = $ct4_3117/3;
            }
            else if($ct1_3117==0 && $ct2_3117==0 && $ct4_3117==0){
                $avg_3117 = $ct3_3117/3;
            }
            else if($ct1_3117==0 && $ct3_3117==0 && $ct4_3117==0){
                $avg_3117 = $ct2_3117/3;
            }
            else if($ct2_3117==0 && $ct3_3117==0 && $ct4_3117==0){
                $avg_3117 = $ct1_3117/3;
            }
            else if($ct1_3117==0 && $ct2_3117==0 && $ct3_3117==0 && $ct4_3117==0){
                $avg_3117 = 0;
            }
            else if(($ct1_3117 > $ct3_3117) && ($ct1_3117 > $ct4_3117) && ($ct2_3117 > $ct3_3117) && ($ct2_3117 > $ct4_3117) && ($ct3_3117 == $ct4_3117)){
                $avg_3117 = ($ct1_3117+$ct2_3117+$ct3_3117)/3;
            }
            else if(($ct1_3117 > $ct2_3117) && ($ct1_3117 > $ct4_3117) && ($ct3_3117 > $ct2_3117) && ($ct3_3117 > $ct4_3117) && ($ct2_3117 == $ct4_3117)){
                $avg_3117 = ($ct1_3117+$ct2_3117+$ct3_3117)/3;
            }
            else if(($ct1_3117 > $ct2_3117) && ($ct1_3117 > $ct3_3117) && ($ct4_3117 > $ct2_3117) && ($ct4_3117 > $ct3_3117) && ($ct2_3117 == $ct3_3117)){
                $avg_3117 = ($ct1_3117+$ct2_3117+$ct4_3117)/3;
            }
            else if(($ct2_3117 > $ct1_3117) && ($ct2_3117 > $ct4_3117) && ($ct3_3117 > $ct1_3117) && ($ct3_3117 > $ct4_3117) && ($ct1_3117 == $ct4_3117)){
                $avg_3117 = ($ct1_3117+$ct2_3117+$ct3_3117)/3;
            }
            else if(($ct2_3117 > $ct1_3117) && ($ct2_3117 > $ct3_3117) && ($ct4_3117 > $ct1_3117) && ($ct4_3117 > $ct3_3117) && ($ct1_3117 == $ct3_3117)){
                $avg_3117 = ($ct1_3117+$ct2_3117+$ct4_3117)/3;
            }
            else if(($ct3_3117 > $ct1_3117) && ($ct3_3117 > $ct2_3117) && ($ct4_3117 > $ct1_3117) && ($ct4_3117 > $ct2_3117) && ($ct1_3117 == $ct2_3117)){
                $avg_3117 = ($ct1_3117+$ct3_3117+$ct4_3117)/3;
            }
            else if(($ct1_3117 > $ct4_3117) && ($ct2_3117 > $ct4_3117) && ($ct3_3117 > $ct4_3117)){
                $avg_3117 = ($ct1_3117+$ct2_3117+$ct3_3117)/3;
            }
            else if(($ct1_3117 > $ct3_3117) && ($ct2_3117 > $ct3_3117) && ($ct4_3117 > $ct3_3117 )){
                $avg_3117 = ($ct1_3117+$ct2_3117+$ct4_3117)/3;
            }
            else if(($ct1_3117 > $ct2_3117) && ($ct3_3117 > $ct2_3117) && ($ct4_3117 > $ct2_3117) ){
                $avg_3117 = ($ct1_3117+$ct3_3117+$ct4_3117)/3;
            }
            else if(($ct2_3117 > $ct1_3117) && ($ct3_3117 > $ct1_3117) && ($ct4_3117 > $ct1_3117)){
                $avg_3117 = ($ct2_3117+$ct3_3117+$ct4_3117)/3;
            }
            else if($ct1_3117==$ct2_3117 && $ct2_3117==$ct3_3117 && $ct3_3117==$ct4_3117){
                $avg_3117 = ($ct1_3117+$ct2_3117+$ct3_3117)/3;
            }
            else if(($ct1_3117 > $ct2_3117) && ($ct2_3117 > $ct3_3117) && ($ct3_3117 > $ct4_3117)){
                $avg_3117 = ($ct1_3117+$ct2_3117+$ct3_3117)/3;
            }
            else if(($ct2_3117 > $ct3_3117) && ($ct3_3117 > $ct4_3117) && ($ct4_3117 > $ct1_3117)){
                $avg_3117 = ($ct2_3117+$ct3_3117+$ct4_3117)/3;
            }
            else if(($ct3_3117 > $ct4_3117) && ($ct4_3117 > $ct1_3117) && ($ct1_3117 > $ct2_3117)){
                $avg_3117 = ($ct1_3117+$ct3_3117+$ct4_3117)/3;
            }
            else if(($ct4_3117 > $ct1_3117) && ($ct1_3117 > $ct2_3117) && ($ct2_3117 > $ct3_3117)){
                $avg_3117 = ($ct1_3117+$ct2_3117+$ct4_3117)/3;
            }
            else if(($ct1_3117 > $ct2_3117) && ($ct1_3117 > $ct3_3117) && ($ct1_3117 > $ct4_3117) && ($ct2_3117==$ct3_3117) && ($ct3_3117==$ct4_3117)){
                $avg_3117 = ($ct1_3117+$ct2_3117+$ct3_3117)/3;
            }
            else if(($ct2_3117 > $ct3_3117) && ($ct2_3117 > $ct4_3117) && ($ct2_3117 > $ct1_3117) && ($ct3_3117==$ct4_3117) && ($ct4_3117==$ct1_3117)){
                $avg_3117 = ($ct1_3117+$ct2_3117+$ct3_3117)/3;
            }
            else if(($ct3_3117 > $ct1_3117) && ($ct3_3117 > $ct2_3117) && ($ct3_3117 > $ct4_3117) && ($ct1_3117==$ct2_3117) && ($ct2_3117==$ct4_3117)){
                $avg_3117 = ($ct3_3117+$ct2_3117+$ct4_3117)/3;
            }
            else if(($ct4_3117 > $ct1_3117) && ($ct4_3117 > $ct2_3117) && ($ct4_3117 > $ct3_3117) && ($ct1_3117==$ct2_3117) && ($ct2_3117==$ct3_3117)){
                $avg_3117 = ($ct1_3117+$ct2_3117+$ct4_3117)/3;
            }



            $res3117 = $avg_3117+$att3117+$exam_3117;

            //echo '<br>';

            // echo $res3117;

            //echo '<br>';

            if($res3117>=0 && $res3117<=39){
                $gp3117 = 0.00;
            }
            else if($res3117>39 && $res3117<=44){
                $gp3117 = 2.00;
            }
            else if($res3117>44 && $res3117<=49){
                $gp3117 = 2.25;
            }
            else if($res3117>49 && $res3117<=54){
                $gp3117 = 2.50;
            }
            else if($res3117>54 && $res3117<=59){
                $gp3117 = 2.75;
            }
            else if($res3117>59 && $res3117<=64){
                $gp3117 = 3.00;
            }
            else if($res3117>64 && $res3117<=69){
                $gp3117 = 3.25;
            }
            else if($res3117>69 && $res3117<=74){
                $gp3117 = 3.50;
            }
            else if($res3117>74 && $res3117<=79){
                $gp3117 = 3.75;
            }
            else if($res3117>79){
                $gp3117 = 4.00;
            }

            // echo '<br>';

            // echo $gp3117;



            //theory ece 3117 ends




            // echo '<br>';




            // theory ece 3119 starts


            $ct1_3119 = $row['ece_3119_ct1'];
            $ct2_3119 = $row['ece_3119_ct2'];
            $ct3_3119 = $row['ece_3119_ct3'];
            $ct4_3119 = $row['ece_3119_ct4'];
            $att3119 = $row['ece_3119_att'];
            $exam_3119 = $row['ece_3119_exam'];



            if($ct1_3119==0){
                $avg_3119 = ($ct2_3119+$ct3_3119+$ct4_3119)/3;
            }
            else if($ct2_3119==0){
                $avg_3119 = ($ct1_3119+$ct3_3119+$ct4_3119)/3;
            }
            else if($ct3_3119==0){
                $avg_3119 = ($ct2_3119+$ct1_3119+$ct4_3119)/3;
            }
            else if($ct4_3119==0){
                $avg_3119 = ($ct2_3119+$ct3_3119+$ct1_3119)/3;
            }
            else if($ct1_3119==0 && $ct2_3119==0){
                $avg_3119 = ($ct3_3119+$ct4_3119)/3;
            }
            else if($ct1_3119==0 && $ct3_3119==0){
                $avg_3119 = ($ct2_3119+$ct4_3119)/3;
            }
            else if($ct1_3119==0 && $ct4_3119==0){
                $avg_3119 = ($ct2_3119+$ct3_3119)/3;
            }
            else if($ct2_3119==0 && $ct3_3119==0){
                $avg_3119 = ($ct1_3119+$ct4_3119)/3;
            }
            else if($ct2_3119==0 && $ct4_3119==0){
                $avg_3119 = ($ct1_3119+$ct3_3119)/3;
            }
            else if($ct3_3119==0 && $ct4_3119==0){
                $avg_3119 = ($ct1_3119+$ct2_3119)/3;
            }
            else if($ct1_3119==0 && $ct2_3119==0 && $ct3_3119==0){
                $avg_3119 = $ct4_3119/3;
            }
            else if($ct1_3119==0 && $ct2_3119==0 && $ct4_3119==0){
                $avg_3119 = $ct3_3119/3;
            }
            else if($ct1_3119==0 && $ct3_3119==0 && $ct4_3119==0){
                $avg_3119 = $ct2_3119/3;
            }
            else if($ct2_3119==0 && $ct3_3119==0 && $ct4_3119==0){
                $avg_3119 = $ct1_3119/3;
            }
            else if($ct1_3119==0 && $ct2_3119==0 && $ct3_3119==0 && $ct4_3119==0){
                $avg_3119 = 0;
            }
            else if(($ct1_3119 > $ct3_3119) && ($ct1_3119 > $ct4_3119) && ($ct2_3119 > $ct3_3119) && ($ct2_3119 > $ct4_3119) && ($ct3_3119 == $ct4_3119)){
                $avg_3119 = ($ct1_3119+$ct2_3119+$ct3_3119)/3;
            }
            else if(($ct1_3119 > $ct2_3119) && ($ct1_3119 > $ct4_3119) && ($ct3_3119 > $ct2_3119) && ($ct3_3119 > $ct4_3119) && ($ct2_3119 == $ct4_3119)){
                $avg_3119 = ($ct1_3119+$ct2_3119+$ct3_3119)/3;
            }
            else if(($ct1_3119 > $ct2_3119) && ($ct1_3119 > $ct3_3119) && ($ct4_3119 > $ct2_3119) && ($ct4_3119 > $ct3_3119) && ($ct2_3119 == $ct3_3119)){
                $avg_3119 = ($ct1_3119+$ct2_3119+$ct4_3119)/3;
            }
            else if(($ct2_3119 > $ct1_3119) && ($ct2_3119 > $ct4_3119) && ($ct3_3119 > $ct1_3119) && ($ct3_3119 > $ct4_3119) && ($ct1_3119 == $ct4_3119)){
                $avg_3119 = ($ct1_3119+$ct2_3119+$ct3_3119)/3;
            }
            else if(($ct2_3119 > $ct1_3119) && ($ct2_3119 > $ct3_3119) && ($ct4_3119 > $ct1_3119) && ($ct4_3119 > $ct3_3119) && ($ct1_3119 == $ct3_3119)){
                $avg_3119 = ($ct1_3119+$ct2_3119+$ct4_3119)/3;
            }
            else if(($ct3_3119 > $ct1_3119) && ($ct3_3119 > $ct2_3119) && ($ct4_3119 > $ct1_3119) && ($ct4_3119 > $ct2_3119) && ($ct1_3119 == $ct2_3119)){
                $avg_3119 = ($ct1_3119+$ct3_3119+$ct4_3119)/3;
            }
            else if(($ct1_3119 > $ct4_3119) && ($ct2_3119 > $ct4_3119) && ($ct3_3119 > $ct4_3119)){
                $avg_3119 = ($ct1_3119+$ct2_3119+$ct3_3119)/3;
            }
            else if(($ct1_3119 > $ct3_3119) && ($ct2_3119 > $ct3_3119) && ($ct4_3119 > $ct3_3119 )){
                $avg_3119 = ($ct1_3119+$ct2_3119+$ct4_3119)/3;
            }
            else if(($ct1_3119 > $ct2_3119) && ($ct3_3119 > $ct2_3119) && ($ct4_3119 > $ct2_3119) ){
                $avg_3119 = ($ct1_3119+$ct3_3119+$ct4_3119)/3;
            }
            else if(($ct2_3119 > $ct1_3119) && ($ct3_3119 > $ct1_3119) && ($ct4_3119 > $ct1_3119)){
                $avg_3119 = ($ct2_3119+$ct3_3119+$ct4_3119)/3;
            }
            else if($ct1_3119==$ct2_3119 && $ct2_3119==$ct3_3119 && $ct3_3119==$ct4_3119){
                $avg_3119 = ($ct1_3119+$ct2_3119+$ct3_3119)/3;
            }
            else if(($ct1_3119 > $ct2_3119) && ($ct2_3119 > $ct3_3119) && ($ct3_3119 > $ct4_3119)){
                $avg_3119 = ($ct1_3119+$ct2_3119+$ct3_3119)/3;
            }
            else if(($ct2_3119 > $ct3_3119) && ($ct3_3119 > $ct4_3119) && ($ct4_3119 > $ct1_3119)){
                $avg_3119 = ($ct2_3119+$ct3_3119+$ct4_3119)/3;
            }
            else if(($ct3_3119 > $ct4_3119) && ($ct4_3119 > $ct1_3119) && ($ct1_3119 > $ct2_3119)){
                $avg_3119 = ($ct1_3119+$ct3_3119+$ct4_3119)/3;
            }
            else if(($ct4_3119 > $ct1_3119) && ($ct1_3119 > $ct2_3119) && ($ct2_3119 > $ct3_3119)){
                $avg_3119 = ($ct1_3119+$ct2_3119+$ct4_3119)/3;
            }
            else if(($ct1_3119 > $ct2_3119) && ($ct1_3119 > $ct3_3119) && ($ct1_3119 > $ct4_3119) && ($ct2_3119==$ct3_3119) && ($ct3_3119==$ct4_3119)){
                $avg_3119 = ($ct1_3119+$ct2_3119+$ct3_3119)/3;
            }
            else if(($ct2_3119 > $ct3_3119) && ($ct2_3119 > $ct4_3119) && ($ct2_3119 > $ct1_3119) && ($ct3_3119==$ct4_3119) && ($ct4_3119==$ct1_3119)){
                $avg_3119 = ($ct1_3119+$ct2_3119+$ct3_3119)/3;
            }
            else if(($ct3_3119 > $ct1_3119) && ($ct3_3119 > $ct2_3119) && ($ct3_3119 > $ct4_3119) && ($ct1_3119==$ct2_3119) && ($ct2_3119==$ct4_3119)){
                $avg_3119 = ($ct3_3119+$ct2_3119+$ct4_3119)/3;
            }
            else if(($ct4_3119 > $ct1_3119) && ($ct4_3119 > $ct2_3119) && ($ct4_3119 > $ct3_3119) && ($ct1_3119==$ct2_3119) && ($ct2_3119==$ct3_3119)){
                $avg_3119 = ($ct1_3119+$ct2_3119+$ct4_3119)/3;
            }



            $res3119 = $avg_3119+$att3119+$exam_3119;

            //echo '<br>';

            // echo $res3119;

            //echo '<br>';

            if($res3119>=0 && $res3119<=39){
                $gp3119 = 0.00;
            }
            else if($res3119>39 && $res3119<=44){
                $gp3119 = 2.00;
            }
            else if($res3119>44 && $res3119<=49){
                $gp3119 = 2.25;
            }
            else if($res3119>49 && $res3119<=54){
                $gp3119 = 2.50;
            }
            else if($res3119>54 && $res3119<=59){
                $gp3119 = 2.75;
            }
            else if($res3119>59 && $res3119<=64){
                $gp3119 = 3.00;
            }
            else if($res3119>64 && $res3119<=69){
                $gp3119 = 3.25;
            }
            else if($res3119>69 && $res3119<=74){
                $gp3119 = 3.50;
            }
            else if($res3119>74 && $res3119<=79){
                $gp3119 = 3.75;
            }
            else if($res3119>79){
                $gp3119 = 4.00;
            }

            //echo '<br>';

            // echo $gp3119;



            //theory ece 3119 ends




            //  echo '<br>';
            //  echo '<br>';
            //  echo '<br>';
            //  echo '<br>';
            //  echo '<br>';



            // sessional ece 3108 starts


            $att3108 = $row['ece_3108_att'];
            $report3108 = $row['ece_3108_re'];
            $quiz3112 = $row['ece_3108_quiz'];
            $bv3108 = $row['ece_3108_bv'];

            $res3108 = $att3108+$report3108+$quiz3112+$bv3108;

            //echo '<br>';

            // echo $res3108;

            //echo '<br>';

            if($res3108>=0 && $res3108<=39){
                $gp3108 = 0.00;
            }
            else if($res3108>=40 && $res3108<=44){
                $gp3108 = 2.00;
            }
            else if($res3108>=45 && $res3108<=49){
                $gp3108 = 2.25;
            }
            else if($res3108>=50 && $res3108<=54){
                $gp3108 = 2.50;
            }
            else if($res3108>=55 && $res3108<=59){
                $gp3108 = 2.75;
            }
            else if($res3108>=60 && $res3108<=64){
                $gp3108 = 3.00;
            }
            else if($res3108>=65 && $res3108<=69){
                $gp3108 = 3.25;
            }
            else if($res3108>=70 && $res3108<=74){
                $gp3108 = 3.50;
            }
            else if($res3108>=75 && $res3108<=79){
                $gp3108 = 3.75;
            }
            else if($res3108>=80){
                $gp3108 = 4.00;
            }

            //echo '<br>';

            // echo $gp3108;


            // sessional ece 3108 ends



            //echo '<br>';



            // sessional ece 3112 starts


            $att3112 = $row['ece_3112_att'];
            $report3112 = $row['ece_3112_re'];
            $quiz3112 = $row['ece_3112_quiz'];
            $bv3112 = $row['ece_3112_bv'];

            $res3112 = $att3112+$report3112+$quiz3112+$bv3112;

            //echo '<br>';

            // echo $res3112;

            //echo '<br>';

            if($res3112>=0 && $res3112<=39){
                $gp3112 = 0.00;
            }
            else if($res3112>=40 && $res3112<=44){
                $gp3112 = 2.00;
            }
            else if($res3112>=45 && $res3112<=49){
                $gp3112 = 2.25;
            }
            else if($res3112>=50 && $res3112<=54){
                $gp3112 = 2.50;
            }
            else if($res3112>=55 && $res3112<=59){
                $gp3112 = 2.75;
            }
            else if($res3112>=60 && $res3112<=64){
                $gp3112 = 3.00;
            }
            else if($res3112>=65 && $res3112<=69){
                $gp3112 = 3.25;
            }
            else if($res3112>=70 && $res3112<=74){
                $gp3112 = 3.50;
            }
            else if($res3112>=75 && $res3112<=79){
                $gp3112 = 3.75;
            }
            else if($res3112>=80){
                $gp3112 = 4.00;
            }

            //echo '<br>';

            // echo $gp3112;


            // sessional ece 3112 ends

            //echo '<br>';


            // sessional ece 3118 starts


            $att3118 = $row['ece_3118_att'];
            $report3118 = $row['ece_3118_re'];
            $quiz3118 = $row['ece_3118_quiz'];
            $bv3118 = $row['ece_3118_bv'];

            $res3118 = $att3118+$report3118+$quiz3118+$bv3118;

            //echo '<br>';

            // echo $res3118;

            //echo '<br>';

            if($res3118>=0 && $res3118<=39){
                $gp3118 = 0.00;
            }
            else if($res3118>=40 && $res3118<=44){
                $gp3118 = 2.00;
            }
            else if($res3118>=45 && $res3118<=49){
                $gp3118 = 2.25;
            }
            else if($res3118>=50 && $res3118<=54){
                $gp3118 = 2.50;
            }
            else if($res3118>=55 && $res3118<=59){
                $gp3118 = 2.75;
            }
            else if($res3118>=60 && $res3118<=64){
                $gp3118 = 3.00;
            }
            else if($res3118>=65 && $res3118<=69){
                $gp3118 = 3.25;
            }
            else if($res3118>=70 && $res3118<=74){
                $gp3118 = 3.50;
            }
            else if($res3118>=75 && $res3118<=79){
                $gp3118 = 3.75;
            }
            else if($res3118>=80){
                $gp3118 = 4.00;
            }

            //echo '<br>';

            // echo $gp3118;


            // sessional ece 3118 ends





            // echo '<br>';
            // echo '<br>';
            // echo '<br>';
            // echo '<br>';
            // echo '<br>';



            // electronic shop practice 3100 starts

            $res3100 = $row['ece_3100_score'];

            //echo '<br>';

            // echo $res3100;

            //echo '<br>';

            if($res3100>=0 && $res3100<=39){
                $gp3100 = 0.00;
            }
            else if($res3100>=40 && $res3100<=44){
                $gp3100 = 2.00;
            }
            else if($res3100>=45 && $res3100<=49){
                $gp3100 = 2.25;
            }
            else if($res3100>=50 && $res3100<=54){
                $gp3100 = 2.50;
            }
            else if($res3100>=55 && $res3100<=59){
                $gp3100 = 2.75;
            }
            else if($res3100>=60 && $res3100<=64){
                $gp3100 = 3.00;
            }
            else if($res3100>=65 && $res3100<=69){
                $gp3100 = 3.25;
            }
            else if($res3100>=70 && $res3100<=74){
                $gp3100 = 3.50;
            }
            else if($res3100>=75 && $res3100<=79){
                $gp3100 = 3.75;
            }
            else if($res3100>=80){
                $gp3100 = 4.00;
            }

            // echo '<br>';

            // echo $gp3100;

            // echo '<br>';
            // echo '<br>';
            // echo '<br>';


            // electronic shop practice 3100 ends



            echo '<br>';

            $gp31 =  ($gp3107+ $gp3109+ $gp3111+ $gp3119+ $gp3117)*3 + ($gp3108*0.75) + ($gp3112*1.50 + $gp3118*0.75) + ($gp3100*1.50);

            $format_gp31 = number_format($gp31, 2);


            $gpa31 =  (($gp3107+ $gp3109+ $gp3111+ $gp3119+ $gp3117)*3 + ($gp3108*0.75) + ($gp3112*1.50 + $gp3118*0.75) + ($gp3100*1.50))/19.5;

            $format_gpa31 = number_format($gpa31, 2);






            ?>

           <div class="resflex">
                <div>Roll: <?php echo $row['roll31']; ?></div>
                <div>GP: <?php echo $format_gp31?></div>
                <div>GPA: <?php echo $format_gpa31?></div>
                <div>CGPA: <?php

                // echo $format_gpa11;

                // echo '<br>';

                // echo $format_gpa21;

                // echo '<br>';

                $cgpa31 = ($format_gpa11 + $format_gpa12 + $format_gpa21 + $format_gpa22 + $format_gpa31)/5;

                $format_cgpa31 = number_format($cgpa31, 2);

                echo $format_cgpa31;



                ?></div>
            </div>

            <br>
            <br>



<?php
	}
?>

 <!-- Result 3-1 Ends -->

 

<!-- Result 3-2 Starts -->


<div class="segment-area">
    <h3>3rd Year Even Semester Result</h3>
</div>




<?php

		    $db_32 = mysqli_query($link, "SELECT * FROM `semester_32` WHERE `roll32` = ".$_SESSION['student_login']);
			while($row = mysqli_fetch_assoc($db_32)){
?>


            <?php


            // theory ece 3205 starts

            $ct1_3205 = $row['ece_3205_ct1'];
            $ct2_3205 = $row['ece_3205_ct2'];
            $ct3_3205 = $row['ece_3205_ct3'];
            $ct4_3205 = $row['ece_3205_ct4'];
            $att3205 = $row['ece_3205_att'];
            $exam3205 = $row['ece_3205_exam'];


            if($ct1_3205==0){
                $avg_3205 = ($ct2_3205+$ct3_3205+$ct4_3205)/3;
            }
            else if($ct2_3205==0){
                $avg_3205 = ($ct1_3205+$ct3_3205+$ct4_3205)/3;
            }
            else if($ct3_3205==0){
                $avg_3205 = ($ct2_3205+$ct1_3205+$ct4_3205)/3;
            }
            else if($ct4_3205==0){
                $avg_3205 = ($ct2_3205+$ct3_3205+$ct1_3205)/3;
            }
            else if($ct1_3205==0 && $ct2_3205==0){
                $avg_3205 = ($ct3_3205+$ct4_3205)/3;
            }
            else if($ct1_3205==0 && $ct3_3205==0){
                $avg_3205 = ($ct2_3205+$ct4_3205)/3;
            }
            else if($ct1_3205==0 && $ct4_3205==0){
                $avg_3205 = ($ct2_3205+$ct3_3205)/3;
            }
            else if($ct2_3205==0 && $ct3_3205==0){
                $avg_3205 = ($ct1_3205+$ct4_3205)/3;
            }
            else if($ct2_3205==0 && $ct4_3205==0){
                $avg_3205 = ($ct1_3205+$ct3_3205)/3;
            }
            else if($ct3_3205==0 && $ct4_3205==0){
                $avg_3205 = ($ct1_3205+$ct2_3205)/3;
            }
            else if($ct1_3205==0 && $ct2_3205==0 && $ct3_3205==0){
                $avg_3205 = $ct4_3205/3;
            }
            else if($ct1_3205==0 && $ct2_3205==0 && $ct4_3205==0){
                $avg_3205 = $ct3_3205/3;
            }
            else if($ct1_3205==0 && $ct3_3205==0 && $ct4_3205==0){
                $avg_3205 = $ct2_3205/3;
            }
            else if($ct2_3205==0 && $ct3_3205==0 && $ct4_3205==0){
                $avg_3205 = $ct1_3205/3;
            }
            else if($ct1_3205==0 && $ct2_3205==0 && $ct3_3205==0 && $ct4_3205==0){
                $avg_3205 = 0;
            }
            else if(($ct1_3205 > $ct3_3205) && ($ct1_3205 > $ct4_3205) && ($ct2_3205 > $ct3_3205) && ($ct2_3205 > $ct4_3205) && ($ct3_3205 == $ct4_3205)){
                $avg_3205 = ($ct1_3205+$ct2_3205+$ct3_3205)/3;
            }
            else if(($ct1_3205 > $ct2_3205) && ($ct1_3205 > $ct4_3205) && ($ct3_3205 > $ct2_3205) && ($ct3_3205 > $ct4_3205) && ($ct2_3205 == $ct4_3205)){
                $avg_3205 = ($ct1_3205+$ct2_3205+$ct3_3205)/3;
            }
            else if(($ct1_3205 > $ct2_3205) && ($ct1_3205 > $ct3_3205) && ($ct4_3205 > $ct2_3205) && ($ct4_3205 > $ct3_3205) && ($ct2_3205 == $ct3_3205)){
                $avg_3205 = ($ct1_3205+$ct2_3205+$ct4_3205)/3;
            }
            else if(($ct2_3205 > $ct1_3205) && ($ct2_3205 > $ct4_3205) && ($ct3_3205 > $ct1_3205) && ($ct3_3205 > $ct4_3205) && ($ct1_3205 == $ct4_3205)){
                $avg_3205 = ($ct1_3205+$ct2_3205+$ct3_3205)/3;
            }
            else if(($ct2_3205 > $ct1_3205) && ($ct2_3205 > $ct3_3205) && ($ct4_3205 > $ct1_3205) && ($ct4_3205 > $ct3_3205) && ($ct1_3205 == $ct3_3205)){
                $avg_3205 = ($ct1_3205+$ct2_3205+$ct4_3205)/3;
            }
            else if(($ct3_3205 > $ct1_3205) && ($ct3_3205 > $ct2_3205) && ($ct4_3205 > $ct1_3205) && ($ct4_3205 > $ct2_3205) && ($ct1_3205 == $ct2_3205)){
                $avg_3205 = ($ct1_3205+$ct3_3205+$ct4_3205)/3;
            }
            else if(($ct1_3205 > $ct4_3205) && ($ct2_3205 > $ct4_3205) && ($ct3_3205 > $ct4_3205 )){
                $avg_3205 = ($ct1_3205+$ct2_3205+$ct3_3205)/3;
            }
            else if(($ct1_3205 > $ct3_3205) && ($ct2_3205 > $ct3_3205) && ($ct4_3205 > $ct3_3205 )){
                $avg_3205 = ($ct1_3205+$ct2_3205+$ct4_3205)/3;
            }
            else if(($ct1_3205 > $ct2_3205) && ($ct3_3205 > $ct2_3205) && ($ct4_3205 > $ct2_3205 )){
                $avg_3205 = ($ct1_3205+$ct3_3205+$ct4_3205)/3;
            }
            else if(($ct2_3205 > $ct1_3205) && ($ct3_3205 > $ct1_3205) && ($ct4_3205 > $ct1_3205 )){
                $avg_3205 = ($ct2_3205+$ct3_3205+$ct4_3205)/3;
            }
            else if($ct1_3205==$ct2_3205 && $ct2_3205==$ct3_3205 && $ct3_3205==$ct4_3205){
                $avg_3205 = ($ct1_3205+$ct2_3205+$ct3_3205)/3;
            }
            else if(($ct1_3205 > $ct2_3205) && ($ct2_3205 > $ct3_3205) && ($ct3_3205 > $ct4_3205)){
                $avg_3205 = ($ct1_3205+$ct2_3205+$ct3_3205)/3;
            }
            else if(($ct2_3205 > $ct3_3205) && ($ct3_3205 > $ct4_3205) && ($ct4_3205 > $ct1_3205)){
                $avg_3205 = ($ct2_3205+$ct3_3205+$ct4_3205)/3;
            }
            else if(($ct3_3205 > $ct4_3205) && ($ct4_3205 > $ct1_3205) && ($ct1_3205 > $ct2_3205)){
                $avg_3205 = ($ct1_3205+$ct3_3205+$ct4_3205)/3;
            }
            else if(($ct4_3205 > $ct1_3205) && ($ct1_3205 > $ct2_3205) && ($ct2_3205 > $ct3_3205)){
                $avg_3205 = ($ct1_3205+$ct2_3205+$ct4_3205)/3;
            }
            else if(($ct1_3205 > $ct2_3205) && ($ct1_3205 > $ct3_3205) && ($ct1_3205 > $ct4_3205) && ($ct2_3205==$ct3_3205) && ($ct3_3205==$ct4_3205)){
                $avg_3205 = ($ct1_3205+$ct2_3205+$ct3_3205)/3;
            }
            else if(($ct2_3205 > $ct3_3205) && ($ct2_3205 > $ct4_3205) && ($ct2_3205 > $ct1_3205) && ($ct3_3205==$ct4_3205) && ($ct4_3205==$ct1_3205)){
                $avg_3205 = ($ct2_3205+$ct3_3205+$ct4_3205)/3;
            }
            else if(($ct3_3205 > $ct1_3205) && ($ct3_3205 > $ct2_3205) && ($ct3_3205 > $ct4_3205) && ($ct1_3205==$ct2_3205) && ($ct2_3205==$ct4_3205)){
                $avg_3205 = ($ct3_3205+$ct2_3205+$ct4_3205)/3;
            }
            else if(($ct4_3205 > $ct1_3205) && ($ct4_3205 > $ct2_3205) && ($ct4_3205 > $ct3_3205) && ($ct1_3205==$ct2_3205) && ($ct2_3205==$ct3_3205)){
                $avg_3205 = ($ct1_3205+$ct2_3205+$ct4_3205)/3;
            }



            $res3205 = $avg_3205+$att3205+$exam3205;

            //echo '<br>';

            // echo $res3205;

            //echo '<br>';

            if($res3205>=0 && $res3205<=39){
                $gp3205 = 0.00;
            }
            else if($res3205>39 && $res3205<=44){
                $gp3205 = 2.00;
            }
            else if($res3205>44 && $res3205<=49){
                $gp3205 = 2.25;
            }
            else if($res3205>49 && $res3205<=54){
                $gp3205 = 2.50;
            }
            else if($res3205>54 && $res3205<=59){
                $gp3205 = 2.75;
            }
            else if($res3205>59 && $res3205<=64){
                $gp3205 = 3.00;
            }
            else if($res3205>64 && $res3205<=69){
                $gp3205 = 3.25;
            }
            else if($res3205>69 && $res3205<=74){
                $gp3205 = 3.50;
            }
            else if($res3205>74 && $res3205<=79){
                $gp3205 = 3.75;
            }
            else if($res3205>79){
                $gp3205 = 4.00;
            }

            //echo '<br>';

            // echo $gp3205;


            //theory ece 3205 ends


             //echo '<br>';


            // theory ece 3211 starts

            $ct1_3211 = $row['ece_3211_ct1'];
            $ct2_3211 = $row['ece_3211_ct2'];
            $ct3_3211 = $row['ece_3211_ct3'];
            $ct4_3211 = $row['ece_3211_ct4'];
            $att3211 = $row['ece_3211_att'];
            $exam3211 = $row['ece_3211_exam'];


            if($ct1_3211==0){
                $avg_3211 = ($ct2_3211+$ct3_3211+$ct4_3211)/3;
            }
            else if($ct2_3211==0){
                $avg_3211 = ($ct1_3211+$ct3_3211+$ct4_3211)/3;
            }
            else if($ct3_3211==0){
                $avg_3211 = ($ct2_3211+$ct1_3211+$ct4_3211)/3;
            }
            else if($ct4_3211==0){
                $avg_3211 = ($ct2_3211+$ct3_3211+$ct1_3211)/3;
            }
            else if($ct1_3211==0 && $ct2_3211==0){
                $avg_3211 = ($ct3_3211+$ct4_3211)/3;
            }
            else if($ct1_3211==0 && $ct3_3211==0){
                $avg_3211 = ($ct2_3211+$ct4_3211)/3;
            }
            else if($ct1_3211==0 && $ct4_3211==0){
                $avg_3211 = ($ct2_3211+$ct3_3211)/3;
            }
            else if($ct2_3211==0 && $ct3_3211==0){
                $avg_3211 = ($ct1_3211+$ct4_3211)/3;
            }
            else if($ct2_3211==0 && $ct4_3211==0){
                $avg_3211 = ($ct1_3211+$ct3_3211)/3;
            }
            else if($ct3_3211==0 && $ct4_3211==0){
                $avg_3211 = ($ct1_3211+$ct2_3211)/3;
            }
            else if($ct1_3211==0 && $ct2_3211==0 && $ct3_3211==0){
                $avg_3211 = $ct4_3211/3;
            }
            else if($ct1_3211==0 && $ct2_3211==0 && $ct4_3211==0){
                $avg_3211 = $ct3_3211/3;
            }
            else if($ct1_3211==0 && $ct3_3211==0 && $ct4_3211==0){
                $avg_3211 = $ct2_3211/3;
            }
            else if($ct2_3211==0 && $ct3_3211==0 && $ct4_3211==0){
                $avg_3211 = $ct1_3211/3;
            }
            else if($ct1_3211==0 && $ct2_3211==0 && $ct3_3211==0 && $ct4_3211==0){
                $avg_3211 = 0;
            }
            else if(($ct1_3211 > $ct3_3211) && ($ct1_3211 > $ct4_3211) && ($ct2_3211 > $ct3_3211) && ($ct2_3211 > $ct4_3211) && ($ct3_3211 == $ct4_3211)){
                $avg_3211 = ($ct1_3211+$ct2_3211+$ct3_3211)/3;
            }
            else if(($ct1_3211 > $ct2_3211) && ($ct1_3211 > $ct4_3211) && ($ct3_3211 > $ct2_3211) && ($ct3_3211 > $ct4_3211) && ($ct2_3211 == $ct4_3211)){
                $avg_3211 = ($ct1_3211+$ct2_3211+$ct3_3211)/3;
            }
            else if(($ct1_3211 > $ct2_3211) && ($ct1_3211 > $ct3_3211) && ($ct4_3211 > $ct2_3211) && ($ct4_3211 > $ct3_3211) && ($ct2_3211 == $ct3_3211)){
                $avg_3211 = ($ct1_3211+$ct2_3211+$ct4_3211)/3;
            }
            else if(($ct2_3211 > $ct1_3211) && ($ct2_3211 > $ct4_3211) && ($ct3_3211 > $ct1_3211) && ($ct3_3211 > $ct4_3211) && ($ct1_3211 == $ct4_3211)){
                $avg_3211 = ($ct1_3211+$ct2_3211+$ct3_3211)/3;
            }
            else if(($ct2_3211 > $ct1_3211) && ($ct2_3211 > $ct3_3211) && ($ct4_3211 > $ct1_3211) && ($ct4_3211 > $ct3_3211) && ($ct1_3211 == $ct3_3211)){
                $avg_3211 = ($ct1_3211+$ct2_3211+$ct4_3211)/3;
            }
            else if(($ct3_3211 > $ct1_3211) && ($ct3_3211 > $ct2_3211) && ($ct4_3211 > $ct1_3211) && ($ct4_3211 > $ct2_3211) && ($ct1_3211 == $ct2_3211)){
                $avg_3211 = ($ct1_3211+$ct3_3211+$ct4_3211)/3;
            }
            else if(($ct1_3211 > $ct4_3211) && ($ct2_3211 > $ct4_3211) && ($ct3_3211 > $ct4_3211)){
                $avg_3211 = ($ct1_3211+$ct2_3211+$ct3_3211)/3;
            }
            else if(($ct1_3211 > $ct3_3211) && ($ct2_3211 > $ct3_3211) && ($ct4_3211 > $ct3_3211 )){
                $avg_3211 = ($ct1_3211+$ct2_3211+$ct4_3211)/3;
            }
            else if(($ct1_3211 > $ct2_3211) && ($ct3_3211 > $ct2_3211) && ($ct4_3211 > $ct2_3211) ){
                $avg_3211 = ($ct1_3211+$ct3_3211+$ct4_3211)/3;
            }
            else if(($ct2_3211 > $ct1_3211) && ($ct3_3211 > $ct1_3211) && ($ct4_3211 > $ct1_3211)){
                $avg_3211 = ($ct2_3211+$ct3_3211+$ct4_3211)/3;
            }
            else if($ct1_3211==$ct2_3211 && $ct2_3211==$ct3_3211 && $ct3_3211==$ct4_3211){
                $avg_3211 = ($ct1_3211+$ct2_3211+$ct3_3211)/3;
            }
            else if(($ct1_3211 > $ct2_3211) && ($ct2_3211 > $ct3_3211) && ($ct3_3211 > $ct4_3211)){
                $avg_3211 = ($ct1_3211+$ct2_3211+$ct3_3211)/3;
            }
            else if(($ct2_3211 > $ct3_3211) && ($ct3_3211 > $ct4_3211) && ($ct4_3211 > $ct1_3211)){
                $avg_3211 = ($ct2_3211+$ct3_3211+$ct4_3211)/3;
            }
            else if(($ct3_3211 > $ct4_3211) && ($ct4_3211 > $ct1_3211) && ($ct1_3211 > $ct2_3211)){
                $avg_3211 = ($ct1_3211+$ct3_3211+$ct4_3211)/3;
            }
            else if(($ct4_3211 > $ct1_3211) && ($ct1_3211 > $ct2_3211) && ($ct2_3211 > $ct3_3211)){
                $avg_3211 = ($ct1_3211+$ct2_3211+$ct4_3211)/3;
            }
            else if(($ct1_3211 > $ct2_3211) && ($ct1_3211 > $ct3_3211) && ($ct1_3211 > $ct4_3211) && ($ct2_3211==$ct3_3211) && ($ct3_3211==$ct4_3211)){
                $avg_3211 = ($ct1_3211+$ct2_3211+$ct3_3211)/3;
            }
            else if(($ct2_3211 > $ct3_3211) && ($ct2_3211 > $ct4_3211) && ($ct2_3211 > $ct1_3211) && ($ct3_3211==$ct4_3211) && ($ct4_3211==$ct1_3211)){
                $avg_3211 = ($ct1_3211+$ct2_3211+$ct3_3211)/3;
            }
            else if(($ct3_3211 > $ct1_3211) && ($ct3_3211 > $ct2_3211) && ($ct3_3211 > $ct4_3211) && ($ct1_3211==$ct2_3211) && ($ct2_3211==$ct4_3211)){
                $avg_3211 = ($ct3_3211+$ct2_3211+$ct4_3211)/3;
            }
            else if(($ct4_3211 > $ct1_3211) && ($ct4_3211 > $ct2_3211) && ($ct4_3211 > $ct3_3211) && ($ct1_3211==$ct2_3211) && ($ct2_3211==$ct3_3211)){
                $avg_3211 = ($ct1_3211+$ct2_3211+$ct4_3211)/3;
            }



            $res3211 = $avg_3211+$att3211+$exam3211;

            //echo '<br>';

            // echo $res3211;

            //echo '<br>';

            if($res3211>=0 && $res3211<=39){
                $gp3211 = 0.00;
            }
            else if($res3211>39 && $res3211<=44){
                $gp3211 = 2.00;
            }
            else if($res3211>44 && $res3211<=49){
                $gp3211 = 2.25;
            }
            else if($res3211>49 && $res3211<=54){
                $gp3211 = 2.50;
            }
            else if($res3211>54 && $res3211<=59){
                $gp3211 = 2.75;
            }
            else if($res3211>59 && $res3211<=64){
                $gp3211 = 3.00;
            }
            else if($res3211>64 && $res3211<=69){
                $gp3211 = 3.25;
            }
            else if($res3211>69 && $res3211<=74){
                $gp3211 = 3.50;
            }
            else if($res3211>74 && $res3211<=79){
                $gp3211 = 3.75;
            }
            else if($res3211>79){
                $gp3211 = 4.00;
            }

            //echo '<br>';

            // echo $gp3211;


            //theory ece 3211 ends




            //echo "<br>";



            // theory ece 3221 starts


            $ct1_3221 = $row['ece_3221_ct1'];
            $ct2_3221 = $row['ece_3221_ct2'];
            $ct3_3221 = $row['ece_3221_ct3'];
            $ct4_3221 = $row['ece_3221_ct4'];
            $att3221 = $row['ece_3221_att'];
            $exam3221 = $row['ece_3221_exam'];





            if($ct1_3221==0){
                $avg_3221 = ($ct2_3221+$ct3_3221+$ct4_3221)/3;
            }
            else if($ct2_3221==0){
                $avg_3221 = ($ct1_3221+$ct3_3221+$ct4_3221)/3;
            }
            else if($ct3_3221==0){
                $avg_3221 = ($ct2_3221+$ct1_3221+$ct4_3221)/3;
            }
            else if($ct4_3221==0){
                $avg_3221 = ($ct2_3221+$ct3_3221+$ct1_3221)/3;
            }
            else if($ct1_3221==0 && $ct2_3221==0){
                $avg_3221 = ($ct3_3221+$ct4_3221)/3;
            }
            else if($ct1_3221==0 && $ct3_3221==0){
                $avg_3221 = ($ct2_3221+$ct4_3221)/3;
            }
            else if($ct1_3221==0 && $ct4_3221==0){
                $avg_3221 = ($ct2_3221+$ct3_3221)/3;
            }
            else if($ct2_3221==0 && $ct3_3221==0){
                $avg_3221 = ($ct1_3221+$ct4_3221)/3;
            }
            else if($ct2_3221==0 && $ct4_3221==0){
                $avg_3221 = ($ct1_3221+$ct3_3221)/3;
            }
            else if($ct3_3221==0 && $ct4_3221==0){
                $avg_3221 = ($ct1_3221+$ct2_3221)/3;
            }
            else if($ct1_3221==0 && $ct2_3221==0 && $ct3_3221==0){
                $avg_3221 = $ct4_3221/3;
            }
            else if($ct1_3221==0 && $ct2_3221==0 && $ct4_3221==0){
                $avg_3221 = $ct3_3221/3;
            }
            else if($ct1_3221==0 && $ct3_3221==0 && $ct4_3221==0){
                $avg_3221 = $ct2_3221/3;
            }
            else if($ct2_3221==0 && $ct3_3221==0 && $ct4_3221==0){
                $avg_3221 = $ct1_3221/3;
            }
            else if($ct1_3221==0 && $ct2_3221==0 && $ct3_3221==0 && $ct4_3221==0){
                $avg_3221 = 0;
            }
            else if(($ct1_3221 > $ct3_3221) && ($ct1_3221 > $ct4_3221) && ($ct2_3221 > $ct3_3221) && ($ct2_3221 > $ct4_3221) && ($ct3_3221 == $ct4_3221)){
                $avg_3221 = ($ct1_3221+$ct2_3221+$ct3_3221)/3;
            }
            else if(($ct1_3221 > $ct2_3221) && ($ct1_3221 > $ct4_3221) && ($ct3_3221 > $ct2_3221) && ($ct3_3221 > $ct4_3221) && ($ct2_3221 == $ct4_3221)){
                $avg_3221 = ($ct1_3221+$ct2_3221+$ct3_3221)/3;
            }
            else if(($ct1_3221 > $ct2_3221) && ($ct1_3221 > $ct3_3221) && ($ct4_3221 > $ct2_3221) && ($ct4_3221 > $ct3_3221) && ($ct2_3221 == $ct3_3221)){
                $avg_3221 = ($ct1_3221+$ct2_3221+$ct4_3221)/3;
            }
            else if(($ct2_3221 > $ct1_3221) && ($ct2_3221 > $ct4_3221) && ($ct3_3221 > $ct1_3221) && ($ct3_3221 > $ct4_3221) && ($ct1_3221 == $ct4_3221)){
                $avg_3221 = ($ct1_3221+$ct2_3221+$ct3_3221)/3;
            }
            else if(($ct2_3221 > $ct1_3221) && ($ct2_3221 > $ct3_3221) && ($ct4_3221 > $ct1_3221) && ($ct4_3221 > $ct3_3221) && ($ct1_3221 == $ct3_3221)){
                $avg_3221 = ($ct1_3221+$ct2_3221+$ct4_3221)/3;
            }
            else if(($ct3_3221 > $ct1_3221) && ($ct3_3221 > $ct2_3221) && ($ct4_3221 > $ct1_3221) && ($ct4_3221 > $ct2_3221) && ($ct1_3221 == $ct2_3221)){
                $avg_3221 = ($ct1_3221+$ct3_3221+$ct4_3221)/3;
            }
            else if(($ct1_3221 > $ct4_3221) && ($ct2_3221 > $ct4_3221) && ($ct3_3221 > $ct4_3221)){
                $avg_3221 = ($ct1_3221+$ct2_3221+$ct3_3221)/3;
            }
            else if(($ct1_3221 > $ct3_3221) && ($ct2_3221 > $ct3_3221) && ($ct4_3221 > $ct3_3221 )){
                $avg_3221 = ($ct1_3221+$ct2_3221+$ct4_3221)/3;
            }
            else if(($ct1_3221 > $ct2_3221) && ($ct3_3221 > $ct2_3221) && ($ct4_3221 > $ct2_3221) ){
                $avg_3221 = ($ct1_3221+$ct3_3221+$ct4_3221)/3;
            }
            else if(($ct2_3221 > $ct1_3221) && ($ct3_3221 > $ct1_3221) && ($ct4_3221 > $ct1_3221)){
                $avg_3221 = ($ct2_3221+$ct3_3221+$ct4_3221)/3;
            }
            else if($ct1_3221==$ct2_3221 && $ct2_3221==$ct3_3221 && $ct3_3221==$ct4_3221){
                $avg_3221 = ($ct1_3221+$ct2_3221+$ct3_3221)/3;
            }
            else if(($ct1_3221 > $ct2_3221) && ($ct2_3221 > $ct3_3221) && ($ct3_3221 > $ct4_3221)){
                $avg_3221 = ($ct1_3221+$ct2_3221+$ct3_3221)/3;
            }
            else if(($ct2_3221 > $ct3_3221) && ($ct3_3221 > $ct4_3221) && ($ct4_3221 > $ct1_3221)){
                $avg_3221 = ($ct2_3221+$ct3_3221+$ct4_3221)/3;
            }
            else if(($ct3_3221 > $ct4_3221) && ($ct4_3221 > $ct1_3221) && ($ct1_3221 > $ct2_3221)){
                $avg_3221 = ($ct1_3221+$ct3_3221+$ct4_3221)/3;
            }
            else if(($ct4_3221 > $ct1_3221) && ($ct1_3221 > $ct2_3221) && ($ct2_3221 > $ct3_3221)){
                $avg_3221 = ($ct1_3221+$ct2_3221+$ct4_3221)/3;
            }
            else if(($ct1_3221 > $ct2_3221) && ($ct1_3221 > $ct3_3221) && ($ct1_3221 > $ct4_3221) && ($ct2_3221==$ct3_3221) && ($ct3_3221==$ct4_3221)){
                $avg_3221 = ($ct1_3221+$ct2_3221+$ct3_3221)/3;
            }
            else if(($ct2_3221 > $ct3_3221) && ($ct2_3221 > $ct4_3221) && ($ct2_3221 > $ct1_3221) && ($ct3_3221==$ct4_3221) && ($ct4_3221==$ct1_3221)){
                $avg_3221 = ($ct1_3221+$ct2_3221+$ct3_3221)/3;
            }
            else if(($ct3_3221 > $ct1_3221) && ($ct3_3221 > $ct2_3221) && ($ct3_3221 > $ct4_3221) && ($ct1_3221==$ct2_3221) && ($ct2_3221==$ct4_3221)){
                $avg_3221 = ($ct3_3221+$ct2_3221+$ct4_3221)/3;
            }
            else if(($ct4_3221 > $ct1_3221) && ($ct4_3221 > $ct2_3221) && ($ct4_3221 > $ct3_3221) && ($ct1_3221==$ct2_3221) && ($ct2_3221==$ct3_3221)){
                $avg_3221 = ($ct1_3221+$ct2_3221+$ct4_3221)/3;
            }



            $res3221 = $avg_3221+$att3221+$exam3221;

            //echo '<br>';

            // echo $res3221;

            //echo '<br>';

            if($res3221>=0 && $res3221<=39){
                $gp3221 = 0.00;
            }
            else if($res3221>39 && $res3221<=44){
                $gp3221 = 2.00;
            }
            else if($res3221>44 && $res3221<=49){
                $gp3221 = 2.25;
            }
            else if($res3221>49 && $res3221<=54){
                $gp3221 = 2.50;
            }
            else if($res3221>54 && $res3221<=59){
                $gp3221 = 2.75;
            }
            else if($res3221>59 && $res3221<=64){
                $gp3221 = 3.00;
            }
            else if($res3221>64 && $res3221<=69){
                $gp3221 = 3.25;
            }
            else if($res3221>69 && $res3221<=74){
                $gp3221 = 3.50;
            }
            else if($res3221>74 && $res3221<=79){
                $gp3221 = 3.75;
            }
            else if($res3221>79){
                $gp3221 = 4.00;
            }

            //echo '<br>';

            // echo $gp3221;




            //theory ece 3221 ends




            //echo '<br>';




            // theory ece 3207 starts


            $ct1_3207 = $row['ece_3207_ct1'];
            $ct2_3207 = $row['ece_3207_ct2'];
            $ct3_3207 = $row['ece_3207_ct3'];
            $ct4_3207 = $row['ece_3207_ct4'];
            $att3207 = $row['ece_3207_att'];
            $exam_3207 = $row['ece_3207_exam'];



            if($ct1_3207==0){
                $avg_3207 = ($ct2_3207+$ct3_3207+$ct4_3207)/3;
            }
            else if($ct2_3207==0){
                $avg_3207 = ($ct1_3207+$ct3_3207+$ct4_3207)/3;
            }
            else if($ct3_3207==0){
                $avg_3207 = ($ct2_3207+$ct1_3207+$ct4_3207)/3;
            }
            else if($ct4_3207==0){
                $avg_3207 = ($ct2_3207+$ct3_3207+$ct1_3207)/3;
            }
            else if($ct1_3207==0 && $ct2_3207==0){
                $avg_3207 = ($ct3_3207+$ct4_3207)/3;
            }
            else if($ct1_3207==0 && $ct3_3207==0){
                $avg_3207 = ($ct2_3207+$ct4_3207)/3;
            }
            else if($ct1_3207==0 && $ct4_3207==0){
                $avg_3207 = ($ct2_3207+$ct3_3207)/3;
            }
            else if($ct2_3207==0 && $ct3_3207==0){
                $avg_3207 = ($ct1_3207+$ct4_3207)/3;
            }
            else if($ct2_3207==0 && $ct4_3207==0){
                $avg_3207 = ($ct1_3207+$ct3_3207)/3;
            }
            else if($ct3_3207==0 && $ct4_3207==0){
                $avg_3207 = ($ct1_3207+$ct2_3207)/3;
            }
            else if($ct1_3207==0 && $ct2_3207==0 && $ct3_3207==0){
                $avg_3207 = $ct4_3207/3;
            }
            else if($ct1_3207==0 && $ct2_3207==0 && $ct4_3207==0){
                $avg_3207 = $ct3_3207/3;
            }
            else if($ct1_3207==0 && $ct3_3207==0 && $ct4_3207==0){
                $avg_3207 = $ct2_3207/3;
            }
            else if($ct2_3207==0 && $ct3_3207==0 && $ct4_3207==0){
                $avg_3207 = $ct1_3207/3;
            }
            else if($ct1_3207==0 && $ct2_3207==0 && $ct3_3207==0 && $ct4_3207==0){
                $avg_3207 = 0;
            }
            else if(($ct1_3207 > $ct3_3207) && ($ct1_3207 > $ct4_3207) && ($ct2_3207 > $ct3_3207) && ($ct2_3207 > $ct4_3207) && ($ct3_3207 == $ct4_3207)){
                $avg_3207 = ($ct1_3207+$ct2_3207+$ct3_3207)/3;
            }
            else if(($ct1_3207 > $ct2_3207) && ($ct1_3207 > $ct4_3207) && ($ct3_3207 > $ct2_3207) && ($ct3_3207 > $ct4_3207) && ($ct2_3207 == $ct4_3207)){
                $avg_3207 = ($ct1_3207+$ct2_3207+$ct3_3207)/3;
            }
            else if(($ct1_3207 > $ct2_3207) && ($ct1_3207 > $ct3_3207) && ($ct4_3207 > $ct2_3207) && ($ct4_3207 > $ct3_3207) && ($ct2_3207 == $ct3_3207)){
                $avg_3207 = ($ct1_3207+$ct2_3207+$ct4_3207)/3;
            }
            else if(($ct2_3207 > $ct1_3207) && ($ct2_3207 > $ct4_3207) && ($ct3_3207 > $ct1_3207) && ($ct3_3207 > $ct4_3207) && ($ct1_3207 == $ct4_3207)){
                $avg_3207 = ($ct1_3207+$ct2_3207+$ct3_3207)/3;
            }
            else if(($ct2_3207 > $ct1_3207) && ($ct2_3207 > $ct3_3207) && ($ct4_3207 > $ct1_3207) && ($ct4_3207 > $ct3_3207) && ($ct1_3207 == $ct3_3207)){
                $avg_3207 = ($ct1_3207+$ct2_3207+$ct4_3207)/3;
            }
            else if(($ct3_3207 > $ct1_3207) && ($ct3_3207 > $ct2_3207) && ($ct4_3207 > $ct1_3207) && ($ct4_3207 > $ct2_3207) && ($ct1_3207 == $ct2_3207)){
                $avg_3207 = ($ct1_3207+$ct3_3207+$ct4_3207)/3;
            }
            else if(($ct1_3207 > $ct4_3207) && ($ct2_3207 > $ct4_3207) && ($ct3_3207 > $ct4_3207)){
                $avg_3207 = ($ct1_3207+$ct2_3207+$ct3_3207)/3;
            }
            else if(($ct1_3207 > $ct3_3207) && ($ct2_3207 > $ct3_3207) && ($ct4_3207 > $ct3_3207 )){
                $avg_3207 = ($ct1_3207+$ct2_3207+$ct4_3207)/3;
            }
            else if(($ct1_3207 > $ct2_3207) && ($ct3_3207 > $ct2_3207) && ($ct4_3207 > $ct2_3207) ){
                $avg_3207 = ($ct1_3207+$ct3_3207+$ct4_3207)/3;
            }
            else if(($ct2_3207 > $ct1_3207) && ($ct3_3207 > $ct1_3207) && ($ct4_3207 > $ct1_3207)){
                $avg_3207 = ($ct2_3207+$ct3_3207+$ct4_3207)/3;
            }
            else if($ct1_3207==$ct2_3207 && $ct2_3207==$ct3_3207 && $ct3_3207==$ct4_3207){
                $avg_3207 = ($ct1_3207+$ct2_3207+$ct3_3207)/3;
            }
            else if(($ct1_3207 > $ct2_3207) && ($ct2_3207 > $ct3_3207) && ($ct3_3207 > $ct4_3207)){
                $avg_3207 = ($ct1_3207+$ct2_3207+$ct3_3207)/3;
            }
            else if(($ct2_3207 > $ct3_3207) && ($ct3_3207 > $ct4_3207) && ($ct4_3207 > $ct1_3207)){
                $avg_3207 = ($ct2_3207+$ct3_3207+$ct4_3207)/3;
            }
            else if(($ct3_3207 > $ct4_3207) && ($ct4_3207 > $ct1_3207) && ($ct1_3207 > $ct2_3207)){
                $avg_3207 = ($ct1_3207+$ct3_3207+$ct4_3207)/3;
            }
            else if(($ct4_3207 > $ct1_3207) && ($ct1_3207 > $ct2_3207) && ($ct2_3207 > $ct3_3207)){
                $avg_3207 = ($ct1_3207+$ct2_3207+$ct4_3207)/3;
            }
            else if(($ct1_3207 > $ct2_3207) && ($ct1_3207 > $ct3_3207) && ($ct1_3207 > $ct4_3207) && ($ct2_3207==$ct3_3207) && ($ct3_3207==$ct4_3207)){
                $avg_3207 = ($ct1_3207+$ct2_3207+$ct3_3207)/3;
            }
            else if(($ct2_3207 > $ct3_3207) && ($ct2_3207 > $ct4_3207) && ($ct2_3207 > $ct1_3207) && ($ct3_3207==$ct4_3207) && ($ct4_3207==$ct1_3207)){
                $avg_3207 = ($ct1_3207+$ct2_3207+$ct3_3207)/3;
            }
            else if(($ct3_3207 > $ct1_3207) && ($ct3_3207 > $ct2_3207) && ($ct3_3207 > $ct4_3207) && ($ct1_3207==$ct2_3207) && ($ct2_3207==$ct4_3207)){
                $avg_3207 = ($ct3_3207+$ct2_3207+$ct4_3207)/3;
            }
            else if(($ct4_3207 > $ct1_3207) && ($ct4_3207 > $ct2_3207) && ($ct4_3207 > $ct3_3207) && ($ct1_3207==$ct2_3207) && ($ct2_3207==$ct3_3207)){
                $avg_3207 = ($ct1_3207+$ct2_3207+$ct4_3207)/3;
            }



            $res3207 = $avg_3207+$att3207+$exam_3207;

            //echo '<br>';

            // echo $res3207;

            //echo '<br>';

            if($res3207>=0 && $res3207<=39){
                $gp3207 = 0.00;
            }
            else if($res3207>39 && $res3207<=44){
                $gp3207 = 2.00;
            }
            else if($res3207>44 && $res3207<=49){
                $gp3207 = 2.25;
            }
            else if($res3207>49 && $res3207<=54){
                $gp3207 = 2.50;
            }
            else if($res3207>54 && $res3207<=59){
                $gp3207 = 2.75;
            }
            else if($res3207>59 && $res3207<=64){
                $gp3207 = 3.00;
            }
            else if($res3207>64 && $res3207<=69){
                $gp3207 = 3.25;
            }
            else if($res3207>69 && $res3207<=74){
                $gp3207 = 3.50;
            }
            else if($res3207>74 && $res3207<=79){
                $gp3207 = 3.75;
            }
            else if($res3207>79){
                $gp3207 = 4.00;
            }

            // echo '<br>';

            // echo $gp3207;



            //theory ece 3207 ends




            // echo '<br>';




            // theory ece 3219 starts


            $ct1_3219 = $row['ece_3219_ct1'];
            $ct2_3219 = $row['ece_3219_ct2'];
            $ct3_3219 = $row['ece_3219_ct3'];
            $ct4_3219 = $row['ece_3219_ct4'];
            $att3219 = $row['ece_3219_att'];
            $exam_3219 = $row['ece_3219_exam'];



            if($ct1_3219==0){
                $avg_3219 = ($ct2_3219+$ct3_3219+$ct4_3219)/3;
            }
            else if($ct2_3219==0){
                $avg_3219 = ($ct1_3219+$ct3_3219+$ct4_3219)/3;
            }
            else if($ct3_3219==0){
                $avg_3219 = ($ct2_3219+$ct1_3219+$ct4_3219)/3;
            }
            else if($ct4_3219==0){
                $avg_3219 = ($ct2_3219+$ct3_3219+$ct1_3219)/3;
            }
            else if($ct1_3219==0 && $ct2_3219==0){
                $avg_3219 = ($ct3_3219+$ct4_3219)/3;
            }
            else if($ct1_3219==0 && $ct3_3219==0){
                $avg_3219 = ($ct2_3219+$ct4_3219)/3;
            }
            else if($ct1_3219==0 && $ct4_3219==0){
                $avg_3219 = ($ct2_3219+$ct3_3219)/3;
            }
            else if($ct2_3219==0 && $ct3_3219==0){
                $avg_3219 = ($ct1_3219+$ct4_3219)/3;
            }
            else if($ct2_3219==0 && $ct4_3219==0){
                $avg_3219 = ($ct1_3219+$ct3_3219)/3;
            }
            else if($ct3_3219==0 && $ct4_3219==0){
                $avg_3219 = ($ct1_3219+$ct2_3219)/3;
            }
            else if($ct1_3219==0 && $ct2_3219==0 && $ct3_3219==0){
                $avg_3219 = $ct4_3219/3;
            }
            else if($ct1_3219==0 && $ct2_3219==0 && $ct4_3219==0){
                $avg_3219 = $ct3_3219/3;
            }
            else if($ct1_3219==0 && $ct3_3219==0 && $ct4_3219==0){
                $avg_3219 = $ct2_3219/3;
            }
            else if($ct2_3219==0 && $ct3_3219==0 && $ct4_3219==0){
                $avg_3219 = $ct1_3219/3;
            }
            else if($ct1_3219==0 && $ct2_3219==0 && $ct3_3219==0 && $ct4_3219==0){
                $avg_3219 = 0;
            }
            else if(($ct1_3219 > $ct3_3219) && ($ct1_3219 > $ct4_3219) && ($ct2_3219 > $ct3_3219) && ($ct2_3219 > $ct4_3219) && ($ct3_3219 == $ct4_3219)){
                $avg_3219 = ($ct1_3219+$ct2_3219+$ct3_3219)/3;
            }
            else if(($ct1_3219 > $ct2_3219) && ($ct1_3219 > $ct4_3219) && ($ct3_3219 > $ct2_3219) && ($ct3_3219 > $ct4_3219) && ($ct2_3219 == $ct4_3219)){
                $avg_3219 = ($ct1_3219+$ct2_3219+$ct3_3219)/3;
            }
            else if(($ct1_3219 > $ct2_3219) && ($ct1_3219 > $ct3_3219) && ($ct4_3219 > $ct2_3219) && ($ct4_3219 > $ct3_3219) && ($ct2_3219 == $ct3_3219)){
                $avg_3219 = ($ct1_3219+$ct2_3219+$ct4_3219)/3;
            }
            else if(($ct2_3219 > $ct1_3219) && ($ct2_3219 > $ct4_3219) && ($ct3_3219 > $ct1_3219) && ($ct3_3219 > $ct4_3219) && ($ct1_3219 == $ct4_3219)){
                $avg_3219 = ($ct1_3219+$ct2_3219+$ct3_3219)/3;
            }
            else if(($ct2_3219 > $ct1_3219) && ($ct2_3219 > $ct3_3219) && ($ct4_3219 > $ct1_3219) && ($ct4_3219 > $ct3_3219) && ($ct1_3219 == $ct3_3219)){
                $avg_3219 = ($ct1_3219+$ct2_3219+$ct4_3219)/3;
            }
            else if(($ct3_3219 > $ct1_3219) && ($ct3_3219 > $ct2_3219) && ($ct4_3219 > $ct1_3219) && ($ct4_3219 > $ct2_3219) && ($ct1_3219 == $ct2_3219)){
                $avg_3219 = ($ct1_3219+$ct3_3219+$ct4_3219)/3;
            }
            else if(($ct1_3219 > $ct4_3219) && ($ct2_3219 > $ct4_3219) && ($ct3_3219 > $ct4_3219)){
                $avg_3219 = ($ct1_3219+$ct2_3219+$ct3_3219)/3;
            }
            else if(($ct1_3219 > $ct3_3219) && ($ct2_3219 > $ct3_3219) && ($ct4_3219 > $ct3_3219 )){
                $avg_3219 = ($ct1_3219+$ct2_3219+$ct4_3219)/3;
            }
            else if(($ct1_3219 > $ct2_3219) && ($ct3_3219 > $ct2_3219) && ($ct4_3219 > $ct2_3219) ){
                $avg_3219 = ($ct1_3219+$ct3_3219+$ct4_3219)/3;
            }
            else if(($ct2_3219 > $ct1_3219) && ($ct3_3219 > $ct1_3219) && ($ct4_3219 > $ct1_3219)){
                $avg_3219 = ($ct2_3219+$ct3_3219+$ct4_3219)/3;
            }
            else if($ct1_3219==$ct2_3219 && $ct2_3219==$ct3_3219 && $ct3_3219==$ct4_3219){
                $avg_3219 = ($ct1_3219+$ct2_3219+$ct3_3219)/3;
            }
            else if(($ct1_3219 > $ct2_3219) && ($ct2_3219 > $ct3_3219) && ($ct3_3219 > $ct4_3219)){
                $avg_3219 = ($ct1_3219+$ct2_3219+$ct3_3219)/3;
            }
            else if(($ct2_3219 > $ct3_3219) && ($ct3_3219 > $ct4_3219) && ($ct4_3219 > $ct1_3219)){
                $avg_3219 = ($ct2_3219+$ct3_3219+$ct4_3219)/3;
            }
            else if(($ct3_3219 > $ct4_3219) && ($ct4_3219 > $ct1_3219) && ($ct1_3219 > $ct2_3219)){
                $avg_3219 = ($ct1_3219+$ct3_3219+$ct4_3219)/3;
            }
            else if(($ct4_3219 > $ct1_3219) && ($ct1_3219 > $ct2_3219) && ($ct2_3219 > $ct3_3219)){
                $avg_3219 = ($ct1_3219+$ct2_3219+$ct4_3219)/3;
            }
            else if(($ct1_3219 > $ct2_3219) && ($ct1_3219 > $ct3_3219) && ($ct1_3219 > $ct4_3219) && ($ct2_3219==$ct3_3219) && ($ct3_3219==$ct4_3219)){
                $avg_3219 = ($ct1_3219+$ct2_3219+$ct3_3219)/3;
            }
            else if(($ct2_3219 > $ct3_3219) && ($ct2_3219 > $ct4_3219) && ($ct2_3219 > $ct1_3219) && ($ct3_3219==$ct4_3219) && ($ct4_3219==$ct1_3219)){
                $avg_3219 = ($ct1_3219+$ct2_3219+$ct3_3219)/3;
            }
            else if(($ct3_3219 > $ct1_3219) && ($ct3_3219 > $ct2_3219) && ($ct3_3219 > $ct4_3219) && ($ct1_3219==$ct2_3219) && ($ct2_3219==$ct4_3219)){
                $avg_3219 = ($ct3_3219+$ct2_3219+$ct4_3219)/3;
            }
            else if(($ct4_3219 > $ct1_3219) && ($ct4_3219 > $ct2_3219) && ($ct4_3219 > $ct3_3219) && ($ct1_3219==$ct2_3219) && ($ct2_3219==$ct3_3219)){
                $avg_3219 = ($ct1_3219+$ct2_3219+$ct4_3219)/3;
            }



            $res3219 = $avg_3219+$att3219+$exam_3219;

            //echo '<br>';

            // echo $res3219;

            //echo '<br>';

            if($res3219>=0 && $res3219<=39){
                $gp3219 = 0.00;
            }
            else if($res3219>39 && $res3219<=44){
                $gp3219 = 2.00;
            }
            else if($res3219>44 && $res3219<=49){
                $gp3219 = 2.25;
            }
            else if($res3219>49 && $res3219<=54){
                $gp3219 = 2.50;
            }
            else if($res3219>54 && $res3219<=59){
                $gp3219 = 2.75;
            }
            else if($res3219>59 && $res3219<=64){
                $gp3219 = 3.00;
            }
            else if($res3219>64 && $res3219<=69){
                $gp3219 = 3.25;
            }
            else if($res3219>69 && $res3219<=74){
                $gp3219 = 3.50;
            }
            else if($res3219>74 && $res3219<=79){
                $gp3219 = 3.75;
            }
            else if($res3219>79){
                $gp3219 = 4.00;
            }

            //echo '<br>';

            // echo $gp3219;



            //theory ece 3219 ends




            //  echo '<br>';
            //  echo '<br>';
            //  echo '<br>';
            //  echo '<br>';
            //  echo '<br>';



            // sessional ece 3206 starts


            $att3206 = $row['ece_3206_att'];
            $report3206 = $row['ece_3206_re'];
            $quiz3212 = $row['ece_3206_quiz'];
            $bv3206 = $row['ece_3206_bv'];

            $res3206 = $att3206+$report3206+$quiz3212+$bv3206;

            //echo '<br>';

            // echo $res3206;

            //echo '<br>';

            if($res3206>=0 && $res3206<=39){
                $gp3206 = 0.00;
            }
            else if($res3206>=40 && $res3206<=44){
                $gp3206 = 2.00;
            }
            else if($res3206>=45 && $res3206<=49){
                $gp3206 = 2.25;
            }
            else if($res3206>=50 && $res3206<=54){
                $gp3206 = 2.50;
            }
            else if($res3206>=55 && $res3206<=59){
                $gp3206 = 2.75;
            }
            else if($res3206>=60 && $res3206<=64){
                $gp3206 = 3.00;
            }
            else if($res3206>=65 && $res3206<=69){
                $gp3206 = 3.25;
            }
            else if($res3206>=70 && $res3206<=74){
                $gp3206 = 3.50;
            }
            else if($res3206>=75 && $res3206<=79){
                $gp3206 = 3.75;
            }
            else if($res3206>=80){
                $gp3206 = 4.00;
            }

            //echo '<br>';

            // echo $gp3206;


            // sessional ece 3206 ends



            //echo '<br>';



            // sessional ece 3212 starts


            $att3212 = $row['ece_3212_att'];
            $report3212 = $row['ece_3212_re'];
            $quiz3212 = $row['ece_3212_quiz'];
            $bv3212 = $row['ece_3212_bv'];

            $res3212 = $att3212+$report3212+$quiz3212+$bv3212;

            //echo '<br>';

            // echo $res3212;

            //echo '<br>';

            if($res3212>=0 && $res3212<=39){
                $gp3212 = 0.00;
            }
            else if($res3212>=40 && $res3212<=44){
                $gp3212 = 2.00;
            }
            else if($res3212>=45 && $res3212<=49){
                $gp3212 = 2.25;
            }
            else if($res3212>=50 && $res3212<=54){
                $gp3212 = 2.50;
            }
            else if($res3212>=55 && $res3212<=59){
                $gp3212 = 2.75;
            }
            else if($res3212>=60 && $res3212<=64){
                $gp3212 = 3.00;
            }
            else if($res3212>=65 && $res3212<=69){
                $gp3212 = 3.25;
            }
            else if($res3212>=70 && $res3212<=74){
                $gp3212 = 3.50;
            }
            else if($res3212>=75 && $res3212<=79){
                $gp3212 = 3.75;
            }
            else if($res3212>=80){
                $gp3212 = 4.00;
            }

            //echo '<br>';

            // echo $gp3212;


            // sessional ece 3212 ends

            //echo '<br>';


            // sessional ece 3222 starts


            $att3222 = $row['ece_3222_att'];
            $report3222 = $row['ece_3222_re'];
            $quiz3222 = $row['ece_3222_quiz'];
            $bv3222 = $row['ece_3222_bv'];

            $res3222 = $att3222+$report3222+$quiz3222+$bv3222;

            //echo '<br>';

            // echo $res3222;

            //echo '<br>';

            if($res3222>=0 && $res3222<=39){
                $gp3222 = 0.00;
            }
            else if($res3222>=40 && $res3222<=44){
                $gp3222 = 2.00;
            }
            else if($res3222>=45 && $res3222<=49){
                $gp3222 = 2.25;
            }
            else if($res3222>=50 && $res3222<=54){
                $gp3222 = 2.50;
            }
            else if($res3222>=55 && $res3222<=59){
                $gp3222 = 2.75;
            }
            else if($res3222>=60 && $res3222<=64){
                $gp3222 = 3.00;
            }
            else if($res3222>=65 && $res3222<=69){
                $gp3222 = 3.25;
            }
            else if($res3222>=70 && $res3222<=74){
                $gp3222 = 3.50;
            }
            else if($res3222>=75 && $res3222<=79){
                $gp3222 = 3.75;
            }
            else if($res3222>=80){
                $gp3222 = 4.00;
            }

            //echo '<br>';

            // echo $gp3222;


            // sessional ece 3222 ends








                      // sessional ece 3208 starts


                        $att3208 = $row['ece_3208_att'];
                        $report3208 = $row['ece_3208_re'];
                        $quiz3208 = $row['ece_3208_quiz'];
                        $bv3208 = $row['ece_3208_bv'];

                        $res3208 = $att3208+$report3208+$quiz3208+$bv3208;

                        //echo '<br>';

                        // echo $res3208;

                        //echo '<br>';

                        if($res3208>=0 && $res3208<=39){
                            $gp3208 = 0.00;
                        }
                        else if($res3208>=40 && $res3208<=44){
                            $gp3208 = 2.00;
                        }
                        else if($res3208>=45 && $res3208<=49){
                            $gp3208 = 2.25;
                        }
                        else if($res3208>=50 && $res3208<=54){
                            $gp3208 = 2.50;
                        }
                        else if($res3208>=55 && $res3208<=59){
                            $gp3208 = 2.75;
                        }
                        else if($res3208>=60 && $res3208<=64){
                            $gp3208 = 3.00;
                        }
                        else if($res3208>=65 && $res3208<=69){
                            $gp3208 = 3.25;
                        }
                        else if($res3208>=70 && $res3208<=74){
                            $gp3208 = 3.50;
                        }
                        else if($res3208>=75 && $res3208<=79){
                            $gp3208 = 3.75;
                        }
                        else if($res3208>=80){
                            $gp3208 = 4.00;
                        }

                        //echo '<br>';

                        // echo $gp3208;


                        // sessional ece 3208 ends



                        //echo '<br>';






                        // sessional ece 3220 starts


                        $att3220 = $row['ece_3220_att'];
                        $report3220 = $row['ece_3220_re'];
                        $quiz3220 = $row['ece_3220_quiz'];
                        $bv3220 = $row['ece_3220_bv'];

                        $res3220 = $att3220+$report3220+$quiz3220+$bv3220;

                        //echo '<br>';

                        // echo $res3220;

                        //echo '<br>';

                        if($res3220>=0 && $res3220<=39){
                            $gp3220 = 0.00;
                        }
                        else if($res3220>=40 && $res3220<=44){
                            $gp3220 = 2.00;
                        }
                        else if($res3220>=45 && $res3220<=49){
                            $gp3220 = 2.25;
                        }
                        else if($res3220>=50 && $res3220<=54){
                            $gp3220 = 2.50;
                        }
                        else if($res3220>=55 && $res3220<=59){
                            $gp3220 = 2.75;
                        }
                        else if($res3220>=60 && $res3220<=64){
                            $gp3220 = 3.00;
                        }
                        else if($res3220>=65 && $res3220<=69){
                            $gp3220 = 3.25;
                        }
                        else if($res3220>=70 && $res3220<=74){
                            $gp3220 = 3.50;
                        }
                        else if($res3220>=75 && $res3220<=79){
                            $gp3220 = 3.75;
                        }
                        else if($res3220>=80){
                            $gp3220 = 4.00;
                        }

                        //echo '<br>';

                        // echo $gp3220;


                        // sessional ece 3220 ends







            echo '<br>';

            $gp32 =  ($gp3205+ $gp3211+ $gp3221+ $gp3219+ $gp3207)*3 + ($gp3206*0.75) + ($gp3212*0.75 + $gp3222*0.75 + $gp3220*0.75) + ($gp3208*1.50);

            $format_gp32 = number_format($gp32, 2);


            $gpa32 =  (($gp3205+ $gp3211+ $gp3221+ $gp3219+ $gp3207)*3 + ($gp3206*0.75) + ($gp3212*0.75 + $gp3222*0.75 + $gp3220*0.75) + ($gp3208*1.50))/19.5;

            $format_gpa32 = number_format($gpa32, 2);



            ?>



           <div class="resflex">
                <div>Roll: <?php echo $row['roll32']; ?></div>
                <div>GP: <?php echo $format_gp32?></div>
                <div>GPA: <?php echo $format_gpa32?></div>
                <div>CGPA: <?php

                // echo $format_gpa11;

                // echo '<br>';

                // echo $format_gpa21;

                // echo '<br>';

                $cgpa32 = ($format_gpa11 + $format_gpa12 + $format_gpa21 + $format_gpa22 + $format_gpa31 + $format_gpa32)/6;

                $format_cgpa32 = number_format($cgpa32, 2);

                echo $format_cgpa32;



                ?></div>
            </div>

            <br>
            <br>



<?php
	}
?>

 <!-- Result 3-2 Ends -->

 

<!-- Result 4-1 Starts -->


<div class="segment-area">
   <h3>4th Year Odd Semester Result</h3>
</div>




<?php

       $db_41 = mysqli_query($link, "SELECT * FROM `semester_41` WHERE `roll41` = ".$_SESSION['student_login']);
     while($row = mysqli_fetch_assoc($db_41)){
?>


           <?php


           // theory ece 4109 starts

           $ct1_4109 = $row['ece_4109_ct1'];
           $ct2_4109 = $row['ece_4109_ct2'];
           $ct3_4109 = $row['ece_4109_ct3'];
           $ct4_4109 = $row['ece_4109_ct4'];
           $att4109 = $row['ece_4109_att'];
           $exam4109 = $row['ece_4109_exam'];


           if($ct1_4109==0){
               $avg_4109 = ($ct2_4109+$ct3_4109+$ct4_4109)/3;
           }
           else if($ct2_4109==0){
               $avg_4109 = ($ct1_4109+$ct3_4109+$ct4_4109)/3;
           }
           else if($ct3_4109==0){
               $avg_4109 = ($ct2_4109+$ct1_4109+$ct4_4109)/3;
           }
           else if($ct4_4109==0){
               $avg_4109 = ($ct2_4109+$ct3_4109+$ct1_4109)/3;
           }
           else if($ct1_4109==0 && $ct2_4109==0){
               $avg_4109 = ($ct3_4109+$ct4_4109)/3;
           }
           else if($ct1_4109==0 && $ct3_4109==0){
               $avg_4109 = ($ct2_4109+$ct4_4109)/3;
           }
           else if($ct1_4109==0 && $ct4_4109==0){
               $avg_4109 = ($ct2_4109+$ct3_4109)/3;
           }
           else if($ct2_4109==0 && $ct3_4109==0){
               $avg_4109 = ($ct1_4109+$ct4_4109)/3;
           }
           else if($ct2_4109==0 && $ct4_4109==0){
               $avg_4109 = ($ct1_4109+$ct3_4109)/3;
           }
           else if($ct3_4109==0 && $ct4_4109==0){
               $avg_4109 = ($ct1_4109+$ct2_4109)/3;
           }
           else if($ct1_4109==0 && $ct2_4109==0 && $ct3_4109==0){
               $avg_4109 = $ct4_4109/3;
           }
           else if($ct1_4109==0 && $ct2_4109==0 && $ct4_4109==0){
               $avg_4109 = $ct3_4109/3;
           }
           else if($ct1_4109==0 && $ct3_4109==0 && $ct4_4109==0){
               $avg_4109 = $ct2_4109/3;
           }
           else if($ct2_4109==0 && $ct3_4109==0 && $ct4_4109==0){
               $avg_4109 = $ct1_4109/3;
           }
           else if($ct1_4109==0 && $ct2_4109==0 && $ct3_4109==0 && $ct4_4109==0){
               $avg_4109 = 0;
           }
           else if(($ct1_4109 > $ct3_4109) && ($ct1_4109 > $ct4_4109) && ($ct2_4109 > $ct3_4109) && ($ct2_4109 > $ct4_4109) && ($ct3_4109 == $ct4_4109)){
               $avg_4109 = ($ct1_4109+$ct2_4109+$ct3_4109)/3;
           }
           else if(($ct1_4109 > $ct2_4109) && ($ct1_4109 > $ct4_4109) && ($ct3_4109 > $ct2_4109) && ($ct3_4109 > $ct4_4109) && ($ct2_4109 == $ct4_4109)){
               $avg_4109 = ($ct1_4109+$ct2_4109+$ct3_4109)/3;
           }
           else if(($ct1_4109 > $ct2_4109) && ($ct1_4109 > $ct3_4109) && ($ct4_4109 > $ct2_4109) && ($ct4_4109 > $ct3_4109) && ($ct2_4109 == $ct3_4109)){
               $avg_4109 = ($ct1_4109+$ct2_4109+$ct4_4109)/3;
           }
           else if(($ct2_4109 > $ct1_4109) && ($ct2_4109 > $ct4_4109) && ($ct3_4109 > $ct1_4109) && ($ct3_4109 > $ct4_4109) && ($ct1_4109 == $ct4_4109)){
               $avg_4109 = ($ct1_4109+$ct2_4109+$ct3_4109)/3;
           }
           else if(($ct2_4109 > $ct1_4109) && ($ct2_4109 > $ct3_4109) && ($ct4_4109 > $ct1_4109) && ($ct4_4109 > $ct3_4109) && ($ct1_4109 == $ct3_4109)){
               $avg_4109 = ($ct1_4109+$ct2_4109+$ct4_4109)/3;
           }
           else if(($ct3_4109 > $ct1_4109) && ($ct3_4109 > $ct2_4109) && ($ct4_4109 > $ct1_4109) && ($ct4_4109 > $ct2_4109) && ($ct1_4109 == $ct2_4109)){
               $avg_4109 = ($ct1_4109+$ct3_4109+$ct4_4109)/3;
           }
           else if(($ct1_4109 > $ct4_4109) && ($ct2_4109 > $ct4_4109) && ($ct3_4109 > $ct4_4109 )){
               $avg_4109 = ($ct1_4109+$ct2_4109+$ct3_4109)/3;
           }
           else if(($ct1_4109 > $ct3_4109) && ($ct2_4109 > $ct3_4109) && ($ct4_4109 > $ct3_4109 )){
               $avg_4109 = ($ct1_4109+$ct2_4109+$ct4_4109)/3;
           }
           else if(($ct1_4109 > $ct2_4109) && ($ct3_4109 > $ct2_4109) && ($ct4_4109 > $ct2_4109 )){
               $avg_4109 = ($ct1_4109+$ct3_4109+$ct4_4109)/3;
           }
           else if(($ct2_4109 > $ct1_4109) && ($ct3_4109 > $ct1_4109) && ($ct4_4109 > $ct1_4109 )){
               $avg_4109 = ($ct2_4109+$ct3_4109+$ct4_4109)/3;
           }
           else if($ct1_4109==$ct2_4109 && $ct2_4109==$ct3_4109 && $ct3_4109==$ct4_4109){
               $avg_4109 = ($ct1_4109+$ct2_4109+$ct3_4109)/3;
           }
           else if(($ct1_4109 > $ct2_4109) && ($ct2_4109 > $ct3_4109) && ($ct3_4109 > $ct4_4109)){
               $avg_4109 = ($ct1_4109+$ct2_4109+$ct3_4109)/3;
           }
           else if(($ct2_4109 > $ct3_4109) && ($ct3_4109 > $ct4_4109) && ($ct4_4109 > $ct1_4109)){
               $avg_4109 = ($ct2_4109+$ct3_4109+$ct4_4109)/3;
           }
           else if(($ct3_4109 > $ct4_4109) && ($ct4_4109 > $ct1_4109) && ($ct1_4109 > $ct2_4109)){
               $avg_4109 = ($ct1_4109+$ct3_4109+$ct4_4109)/3;
           }
           else if(($ct4_4109 > $ct1_4109) && ($ct1_4109 > $ct2_4109) && ($ct2_4109 > $ct3_4109)){
               $avg_4109 = ($ct1_4109+$ct2_4109+$ct4_4109)/3;
           }
           else if(($ct1_4109 > $ct2_4109) && ($ct1_4109 > $ct3_4109) && ($ct1_4109 > $ct4_4109) && ($ct2_4109==$ct3_4109) && ($ct3_4109==$ct4_4109)){
               $avg_4109 = ($ct1_4109+$ct2_4109+$ct3_4109)/3;
           }
           else if(($ct2_4109 > $ct3_4109) && ($ct2_4109 > $ct4_4109) && ($ct2_4109 > $ct1_4109) && ($ct3_4109==$ct4_4109) && ($ct4_4109==$ct1_4109)){
               $avg_4109 = ($ct2_4109+$ct3_4109+$ct4_4109)/3;
           }
           else if(($ct3_4109 > $ct1_4109) && ($ct3_4109 > $ct2_4109) && ($ct3_4109 > $ct4_4109) && ($ct1_4109==$ct2_4109) && ($ct2_4109==$ct4_4109)){
               $avg_4109 = ($ct3_4109+$ct2_4109+$ct4_4109)/3;
           }
           else if(($ct4_4109 > $ct1_4109) && ($ct4_4109 > $ct2_4109) && ($ct4_4109 > $ct3_4109) && ($ct1_4109==$ct2_4109) && ($ct2_4109==$ct3_4109)){
               $avg_4109 = ($ct1_4109+$ct2_4109+$ct4_4109)/3;
           }



           $res4109 = $avg_4109+$att4109+$exam4109;

           //echo '<br>';

           // echo $res4109;

           //echo '<br>';

           if($res4109>=0 && $res4109<=39){
               $gp4109 = 0.00;
           }
           else if($res4109>39 && $res4109<=44){
               $gp4109 = 2.00;
           }
           else if($res4109>44 && $res4109<=49){
               $gp4109 = 2.25;
           }
           else if($res4109>49 && $res4109<=54){
               $gp4109 = 2.50;
           }
           else if($res4109>54 && $res4109<=59){
               $gp4109 = 2.75;
           }
           else if($res4109>59 && $res4109<=64){
               $gp4109 = 3.00;
           }
           else if($res4109>64 && $res4109<=69){
               $gp4109 = 3.25;
           }
           else if($res4109>69 && $res4109<=74){
               $gp4109 = 3.50;
           }
           else if($res4109>74 && $res4109<=79){
               $gp4109 = 3.75;
           }
           else if($res4109>79){
               $gp4109 = 4.00;
           }

           //echo '<br>';

           // echo $gp4109;


           //theory ece 4109 ends


            //echo '<br>';


           // theory ece 4123 starts

           $ct1_4123 = $row['ece_4123_ct1'];
           $ct2_4123 = $row['ece_4123_ct2'];
           $ct3_4123 = $row['ece_4123_ct3'];
           $ct4_4123 = $row['ece_4123_ct4'];
           $att4123 = $row['ece_4123_att'];
           $exam4123 = $row['ece_4123_exam'];


           if($ct1_4123==0){
               $avg_4123 = ($ct2_4123+$ct3_4123+$ct4_4123)/3;
           }
           else if($ct2_4123==0){
               $avg_4123 = ($ct1_4123+$ct3_4123+$ct4_4123)/3;
           }
           else if($ct3_4123==0){
               $avg_4123 = ($ct2_4123+$ct1_4123+$ct4_4123)/3;
           }
           else if($ct4_4123==0){
               $avg_4123 = ($ct2_4123+$ct3_4123+$ct1_4123)/3;
           }
           else if($ct1_4123==0 && $ct2_4123==0){
               $avg_4123 = ($ct3_4123+$ct4_4123)/3;
           }
           else if($ct1_4123==0 && $ct3_4123==0){
               $avg_4123 = ($ct2_4123+$ct4_4123)/3;
           }
           else if($ct1_4123==0 && $ct4_4123==0){
               $avg_4123 = ($ct2_4123+$ct3_4123)/3;
           }
           else if($ct2_4123==0 && $ct3_4123==0){
               $avg_4123 = ($ct1_4123+$ct4_4123)/3;
           }
           else if($ct2_4123==0 && $ct4_4123==0){
               $avg_4123 = ($ct1_4123+$ct3_4123)/3;
           }
           else if($ct3_4123==0 && $ct4_4123==0){
               $avg_4123 = ($ct1_4123+$ct2_4123)/3;
           }
           else if($ct1_4123==0 && $ct2_4123==0 && $ct3_4123==0){
               $avg_4123 = $ct4_4123/3;
           }
           else if($ct1_4123==0 && $ct2_4123==0 && $ct4_4123==0){
               $avg_4123 = $ct3_4123/3;
           }
           else if($ct1_4123==0 && $ct3_4123==0 && $ct4_4123==0){
               $avg_4123 = $ct2_4123/3;
           }
           else if($ct2_4123==0 && $ct3_4123==0 && $ct4_4123==0){
               $avg_4123 = $ct1_4123/3;
           }
           else if($ct1_4123==0 && $ct2_4123==0 && $ct3_4123==0 && $ct4_4123==0){
               $avg_4123 = 0;
           }
           else if(($ct1_4123 > $ct3_4123) && ($ct1_4123 > $ct4_4123) && ($ct2_4123 > $ct3_4123) && ($ct2_4123 > $ct4_4123) && ($ct3_4123 == $ct4_4123)){
               $avg_4123 = ($ct1_4123+$ct2_4123+$ct3_4123)/3;
           }
           else if(($ct1_4123 > $ct2_4123) && ($ct1_4123 > $ct4_4123) && ($ct3_4123 > $ct2_4123) && ($ct3_4123 > $ct4_4123) && ($ct2_4123 == $ct4_4123)){
               $avg_4123 = ($ct1_4123+$ct2_4123+$ct3_4123)/3;
           }
           else if(($ct1_4123 > $ct2_4123) && ($ct1_4123 > $ct3_4123) && ($ct4_4123 > $ct2_4123) && ($ct4_4123 > $ct3_4123) && ($ct2_4123 == $ct3_4123)){
               $avg_4123 = ($ct1_4123+$ct2_4123+$ct4_4123)/3;
           }
           else if(($ct2_4123 > $ct1_4123) && ($ct2_4123 > $ct4_4123) && ($ct3_4123 > $ct1_4123) && ($ct3_4123 > $ct4_4123) && ($ct1_4123 == $ct4_4123)){
               $avg_4123 = ($ct1_4123+$ct2_4123+$ct3_4123)/3;
           }
           else if(($ct2_4123 > $ct1_4123) && ($ct2_4123 > $ct3_4123) && ($ct4_4123 > $ct1_4123) && ($ct4_4123 > $ct3_4123) && ($ct1_4123 == $ct3_4123)){
               $avg_4123 = ($ct1_4123+$ct2_4123+$ct4_4123)/3;
           }
           else if(($ct3_4123 > $ct1_4123) && ($ct3_4123 > $ct2_4123) && ($ct4_4123 > $ct1_4123) && ($ct4_4123 > $ct2_4123) && ($ct1_4123 == $ct2_4123)){
               $avg_4123 = ($ct1_4123+$ct3_4123+$ct4_4123)/3;
           }
           else if(($ct1_4123 > $ct4_4123) && ($ct2_4123 > $ct4_4123) && ($ct3_4123 > $ct4_4123)){
               $avg_4123 = ($ct1_4123+$ct2_4123+$ct3_4123)/3;
           }
           else if(($ct1_4123 > $ct3_4123) && ($ct2_4123 > $ct3_4123) && ($ct4_4123 > $ct3_4123 )){
               $avg_4123 = ($ct1_4123+$ct2_4123+$ct4_4123)/3;
           }
           else if(($ct1_4123 > $ct2_4123) && ($ct3_4123 > $ct2_4123) && ($ct4_4123 > $ct2_4123) ){
               $avg_4123 = ($ct1_4123+$ct3_4123+$ct4_4123)/3;
           }
           else if(($ct2_4123 > $ct1_4123) && ($ct3_4123 > $ct1_4123) && ($ct4_4123 > $ct1_4123)){
               $avg_4123 = ($ct2_4123+$ct3_4123+$ct4_4123)/3;
           }
           else if($ct1_4123==$ct2_4123 && $ct2_4123==$ct3_4123 && $ct3_4123==$ct4_4123){
               $avg_4123 = ($ct1_4123+$ct2_4123+$ct3_4123)/3;
           }
           else if(($ct1_4123 > $ct2_4123) && ($ct2_4123 > $ct3_4123) && ($ct3_4123 > $ct4_4123)){
               $avg_4123 = ($ct1_4123+$ct2_4123+$ct3_4123)/3;
           }
           else if(($ct2_4123 > $ct3_4123) && ($ct3_4123 > $ct4_4123) && ($ct4_4123 > $ct1_4123)){
               $avg_4123 = ($ct2_4123+$ct3_4123+$ct4_4123)/3;
           }
           else if(($ct3_4123 > $ct4_4123) && ($ct4_4123 > $ct1_4123) && ($ct1_4123 > $ct2_4123)){
               $avg_4123 = ($ct1_4123+$ct3_4123+$ct4_4123)/3;
           }
           else if(($ct4_4123 > $ct1_4123) && ($ct1_4123 > $ct2_4123) && ($ct2_4123 > $ct3_4123)){
               $avg_4123 = ($ct1_4123+$ct2_4123+$ct4_4123)/3;
           }
           else if(($ct1_4123 > $ct2_4123) && ($ct1_4123 > $ct3_4123) && ($ct1_4123 > $ct4_4123) && ($ct2_4123==$ct3_4123) && ($ct3_4123==$ct4_4123)){
               $avg_4123 = ($ct1_4123+$ct2_4123+$ct3_4123)/3;
           }
           else if(($ct2_4123 > $ct3_4123) && ($ct2_4123 > $ct4_4123) && ($ct2_4123 > $ct1_4123) && ($ct3_4123==$ct4_4123) && ($ct4_4123==$ct1_4123)){
               $avg_4123 = ($ct1_4123+$ct2_4123+$ct3_4123)/3;
           }
           else if(($ct3_4123 > $ct1_4123) && ($ct3_4123 > $ct2_4123) && ($ct3_4123 > $ct4_4123) && ($ct1_4123==$ct2_4123) && ($ct2_4123==$ct4_4123)){
               $avg_4123 = ($ct3_4123+$ct2_4123+$ct4_4123)/3;
           }
           else if(($ct4_4123 > $ct1_4123) && ($ct4_4123 > $ct2_4123) && ($ct4_4123 > $ct3_4123) && ($ct1_4123==$ct2_4123) && ($ct2_4123==$ct3_4123)){
               $avg_4123 = ($ct1_4123+$ct2_4123+$ct4_4123)/3;
           }



           $res4123 = $avg_4123+$att4123+$exam4123;

           //echo '<br>';

           // echo $res4123;

           //echo '<br>';

           if($res4123>=0 && $res4123<=39){
               $gp4123 = 0.00;
           }
           else if($res4123>39 && $res4123<=44){
               $gp4123 = 2.00;
           }
           else if($res4123>44 && $res4123<=49){
               $gp4123 = 2.25;
           }
           else if($res4123>49 && $res4123<=54){
               $gp4123 = 2.50;
           }
           else if($res4123>54 && $res4123<=59){
               $gp4123 = 2.75;
           }
           else if($res4123>59 && $res4123<=64){
               $gp4123 = 3.00;
           }
           else if($res4123>64 && $res4123<=69){
               $gp4123 = 3.25;
           }
           else if($res4123>69 && $res4123<=74){
               $gp4123 = 3.50;
           }
           else if($res4123>74 && $res4123<=79){
               $gp4123 = 3.75;
           }
           else if($res4123>79){
               $gp4123 = 4.00;
           }

           //echo '<br>';

           // echo $gp4123;


           //theory ece 4123 ends




           //echo "<br>";



           // theory ece 4121 starts


           $ct1_4121 = $row['ece_4121_ct1'];
           $ct2_4121 = $row['ece_4121_ct2'];
           $ct3_4121 = $row['ece_4121_ct3'];
           $ct4_4121 = $row['ece_4121_ct4'];
           $att4121 = $row['ece_4121_att'];
           $exam4121 = $row['ece_4121_exam'];





           if($ct1_4121==0){
               $avg_4121 = ($ct2_4121+$ct3_4121+$ct4_4121)/3;
           }
           else if($ct2_4121==0){
               $avg_4121 = ($ct1_4121+$ct3_4121+$ct4_4121)/3;
           }
           else if($ct3_4121==0){
               $avg_4121 = ($ct2_4121+$ct1_4121+$ct4_4121)/3;
           }
           else if($ct4_4121==0){
               $avg_4121 = ($ct2_4121+$ct3_4121+$ct1_4121)/3;
           }
           else if($ct1_4121==0 && $ct2_4121==0){
               $avg_4121 = ($ct3_4121+$ct4_4121)/3;
           }
           else if($ct1_4121==0 && $ct3_4121==0){
               $avg_4121 = ($ct2_4121+$ct4_4121)/3;
           }
           else if($ct1_4121==0 && $ct4_4121==0){
               $avg_4121 = ($ct2_4121+$ct3_4121)/3;
           }
           else if($ct2_4121==0 && $ct3_4121==0){
               $avg_4121 = ($ct1_4121+$ct4_4121)/3;
           }
           else if($ct2_4121==0 && $ct4_4121==0){
               $avg_4121 = ($ct1_4121+$ct3_4121)/3;
           }
           else if($ct3_4121==0 && $ct4_4121==0){
               $avg_4121 = ($ct1_4121+$ct2_4121)/3;
           }
           else if($ct1_4121==0 && $ct2_4121==0 && $ct3_4121==0){
               $avg_4121 = $ct4_4121/3;
           }
           else if($ct1_4121==0 && $ct2_4121==0 && $ct4_4121==0){
               $avg_4121 = $ct3_4121/3;
           }
           else if($ct1_4121==0 && $ct3_4121==0 && $ct4_4121==0){
               $avg_4121 = $ct2_4121/3;
           }
           else if($ct2_4121==0 && $ct3_4121==0 && $ct4_4121==0){
               $avg_4121 = $ct1_4121/3;
           }
           else if($ct1_4121==0 && $ct2_4121==0 && $ct3_4121==0 && $ct4_4121==0){
               $avg_4121 = 0;
           }
           else if(($ct1_4121 > $ct3_4121) && ($ct1_4121 > $ct4_4121) && ($ct2_4121 > $ct3_4121) && ($ct2_4121 > $ct4_4121) && ($ct3_4121 == $ct4_4121)){
               $avg_4121 = ($ct1_4121+$ct2_4121+$ct3_4121)/3;
           }
           else if(($ct1_4121 > $ct2_4121) && ($ct1_4121 > $ct4_4121) && ($ct3_4121 > $ct2_4121) && ($ct3_4121 > $ct4_4121) && ($ct2_4121 == $ct4_4121)){
               $avg_4121 = ($ct1_4121+$ct2_4121+$ct3_4121)/3;
           }
           else if(($ct1_4121 > $ct2_4121) && ($ct1_4121 > $ct3_4121) && ($ct4_4121 > $ct2_4121) && ($ct4_4121 > $ct3_4121) && ($ct2_4121 == $ct3_4121)){
               $avg_4121 = ($ct1_4121+$ct2_4121+$ct4_4121)/3;
           }
           else if(($ct2_4121 > $ct1_4121) && ($ct2_4121 > $ct4_4121) && ($ct3_4121 > $ct1_4121) && ($ct3_4121 > $ct4_4121) && ($ct1_4121 == $ct4_4121)){
               $avg_4121 = ($ct1_4121+$ct2_4121+$ct3_4121)/3;
           }
           else if(($ct2_4121 > $ct1_4121) && ($ct2_4121 > $ct3_4121) && ($ct4_4121 > $ct1_4121) && ($ct4_4121 > $ct3_4121) && ($ct1_4121 == $ct3_4121)){
               $avg_4121 = ($ct1_4121+$ct2_4121+$ct4_4121)/3;
           }
           else if(($ct3_4121 > $ct1_4121) && ($ct3_4121 > $ct2_4121) && ($ct4_4121 > $ct1_4121) && ($ct4_4121 > $ct2_4121) && ($ct1_4121 == $ct2_4121)){
               $avg_4121 = ($ct1_4121+$ct3_4121+$ct4_4121)/3;
           }
           else if(($ct1_4121 > $ct4_4121) && ($ct2_4121 > $ct4_4121) && ($ct3_4121 > $ct4_4121)){
               $avg_4121 = ($ct1_4121+$ct2_4121+$ct3_4121)/3;
           }
           else if(($ct1_4121 > $ct3_4121) && ($ct2_4121 > $ct3_4121) && ($ct4_4121 > $ct3_4121 )){
               $avg_4121 = ($ct1_4121+$ct2_4121+$ct4_4121)/3;
           }
           else if(($ct1_4121 > $ct2_4121) && ($ct3_4121 > $ct2_4121) && ($ct4_4121 > $ct2_4121) ){
               $avg_4121 = ($ct1_4121+$ct3_4121+$ct4_4121)/3;
           }
           else if(($ct2_4121 > $ct1_4121) && ($ct3_4121 > $ct1_4121) && ($ct4_4121 > $ct1_4121)){
               $avg_4121 = ($ct2_4121+$ct3_4121+$ct4_4121)/3;
           }
           else if($ct1_4121==$ct2_4121 && $ct2_4121==$ct3_4121 && $ct3_4121==$ct4_4121){
               $avg_4121 = ($ct1_4121+$ct2_4121+$ct3_4121)/3;
           }
           else if(($ct1_4121 > $ct2_4121) && ($ct2_4121 > $ct3_4121) && ($ct3_4121 > $ct4_4121)){
               $avg_4121 = ($ct1_4121+$ct2_4121+$ct3_4121)/3;
           }
           else if(($ct2_4121 > $ct3_4121) && ($ct3_4121 > $ct4_4121) && ($ct4_4121 > $ct1_4121)){
               $avg_4121 = ($ct2_4121+$ct3_4121+$ct4_4121)/3;
           }
           else if(($ct3_4121 > $ct4_4121) && ($ct4_4121 > $ct1_4121) && ($ct1_4121 > $ct2_4121)){
               $avg_4121 = ($ct1_4121+$ct3_4121+$ct4_4121)/3;
           }
           else if(($ct4_4121 > $ct1_4121) && ($ct1_4121 > $ct2_4121) && ($ct2_4121 > $ct3_4121)){
               $avg_4121 = ($ct1_4121+$ct2_4121+$ct4_4121)/3;
           }
           else if(($ct1_4121 > $ct2_4121) && ($ct1_4121 > $ct3_4121) && ($ct1_4121 > $ct4_4121) && ($ct2_4121==$ct3_4121) && ($ct3_4121==$ct4_4121)){
               $avg_4121 = ($ct1_4121+$ct2_4121+$ct3_4121)/3;
           }
           else if(($ct2_4121 > $ct3_4121) && ($ct2_4121 > $ct4_4121) && ($ct2_4121 > $ct1_4121) && ($ct3_4121==$ct4_4121) && ($ct4_4121==$ct1_4121)){
               $avg_4121 = ($ct1_4121+$ct2_4121+$ct3_4121)/3;
           }
           else if(($ct3_4121 > $ct1_4121) && ($ct3_4121 > $ct2_4121) && ($ct3_4121 > $ct4_4121) && ($ct1_4121==$ct2_4121) && ($ct2_4121==$ct4_4121)){
               $avg_4121 = ($ct3_4121+$ct2_4121+$ct4_4121)/3;
           }
           else if(($ct4_4121 > $ct1_4121) && ($ct4_4121 > $ct2_4121) && ($ct4_4121 > $ct3_4121) && ($ct1_4121==$ct2_4121) && ($ct2_4121==$ct3_4121)){
               $avg_4121 = ($ct1_4121+$ct2_4121+$ct4_4121)/3;
           }



           $res4121 = $avg_4121+$att4121+$exam4121;

           //echo '<br>';

           // echo $res4121;

           //echo '<br>';

           if($res4121>=0 && $res4121<=39){
               $gp4121 = 0.00;
           }
           else if($res4121>39 && $res4121<=44){
               $gp4121 = 2.00;
           }
           else if($res4121>44 && $res4121<=49){
               $gp4121 = 2.25;
           }
           else if($res4121>49 && $res4121<=54){
               $gp4121 = 2.50;
           }
           else if($res4121>54 && $res4121<=59){
               $gp4121 = 2.75;
           }
           else if($res4121>59 && $res4121<=64){
               $gp4121 = 3.00;
           }
           else if($res4121>64 && $res4121<=69){
               $gp4121 = 3.25;
           }
           else if($res4121>69 && $res4121<=74){
               $gp4121 = 3.50;
           }
           else if($res4121>74 && $res4121<=79){
               $gp4121 = 3.75;
           }
           else if($res4121>79){
               $gp4121 = 4.00;
           }

           //echo '<br>';

           // echo $gp4121;




           //theory ece 4121 ends




           //echo '<br>';




           // theory ece 41opt1 starts


           $ct1_41opt1 = $row['ece_41opt1_ct1'];
           $ct2_41opt1 = $row['ece_41opt1_ct2'];
           $ct3_41opt1 = $row['ece_41opt1_ct3'];
           $ct4_41opt1 = $row['ece_41opt1_ct4'];
           $att41opt1 = $row['ece_41opt1_att'];
           $exam_41opt1 = $row['ece_41opt1_exam'];



           if($ct1_41opt1==0){
               $avg_41opt1 = ($ct2_41opt1+$ct3_41opt1+$ct4_41opt1)/3;
           }
           else if($ct2_41opt1==0){
               $avg_41opt1 = ($ct1_41opt1+$ct3_41opt1+$ct4_41opt1)/3;
           }
           else if($ct3_41opt1==0){
               $avg_41opt1 = ($ct2_41opt1+$ct1_41opt1+$ct4_41opt1)/3;
           }
           else if($ct4_41opt1==0){
               $avg_41opt1 = ($ct2_41opt1+$ct3_41opt1+$ct1_41opt1)/3;
           }
           else if($ct1_41opt1==0 && $ct2_41opt1==0){
               $avg_41opt1 = ($ct3_41opt1+$ct4_41opt1)/3;
           }
           else if($ct1_41opt1==0 && $ct3_41opt1==0){
               $avg_41opt1 = ($ct2_41opt1+$ct4_41opt1)/3;
           }
           else if($ct1_41opt1==0 && $ct4_41opt1==0){
               $avg_41opt1 = ($ct2_41opt1+$ct3_41opt1)/3;
           }
           else if($ct2_41opt1==0 && $ct3_41opt1==0){
               $avg_41opt1 = ($ct1_41opt1+$ct4_41opt1)/3;
           }
           else if($ct2_41opt1==0 && $ct4_41opt1==0){
               $avg_41opt1 = ($ct1_41opt1+$ct3_41opt1)/3;
           }
           else if($ct3_41opt1==0 && $ct4_41opt1==0){
               $avg_41opt1 = ($ct1_41opt1+$ct2_41opt1)/3;
           }
           else if($ct1_41opt1==0 && $ct2_41opt1==0 && $ct3_41opt1==0){
               $avg_41opt1 = $ct4_41opt1/3;
           }
           else if($ct1_41opt1==0 && $ct2_41opt1==0 && $ct4_41opt1==0){
               $avg_41opt1 = $ct3_41opt1/3;
           }
           else if($ct1_41opt1==0 && $ct3_41opt1==0 && $ct4_41opt1==0){
               $avg_41opt1 = $ct2_41opt1/3;
           }
           else if($ct2_41opt1==0 && $ct3_41opt1==0 && $ct4_41opt1==0){
               $avg_41opt1 = $ct1_41opt1/3;
           }
           else if($ct1_41opt1==0 && $ct2_41opt1==0 && $ct3_41opt1==0 && $ct4_41opt1==0){
               $avg_41opt1 = 0;
           }
           else if(($ct1_41opt1 > $ct3_41opt1) && ($ct1_41opt1 > $ct4_41opt1) && ($ct2_41opt1 > $ct3_41opt1) && ($ct2_41opt1 > $ct4_41opt1) && ($ct3_41opt1 == $ct4_41opt1)){
               $avg_41opt1 = ($ct1_41opt1+$ct2_41opt1+$ct3_41opt1)/3;
           }
           else if(($ct1_41opt1 > $ct2_41opt1) && ($ct1_41opt1 > $ct4_41opt1) && ($ct3_41opt1 > $ct2_41opt1) && ($ct3_41opt1 > $ct4_41opt1) && ($ct2_41opt1 == $ct4_41opt1)){
               $avg_41opt1 = ($ct1_41opt1+$ct2_41opt1+$ct3_41opt1)/3;
           }
           else if(($ct1_41opt1 > $ct2_41opt1) && ($ct1_41opt1 > $ct3_41opt1) && ($ct4_41opt1 > $ct2_41opt1) && ($ct4_41opt1 > $ct3_41opt1) && ($ct2_41opt1 == $ct3_41opt1)){
               $avg_41opt1 = ($ct1_41opt1+$ct2_41opt1+$ct4_41opt1)/3;
           }
           else if(($ct2_41opt1 > $ct1_41opt1) && ($ct2_41opt1 > $ct4_41opt1) && ($ct3_41opt1 > $ct1_41opt1) && ($ct3_41opt1 > $ct4_41opt1) && ($ct1_41opt1 == $ct4_41opt1)){
               $avg_41opt1 = ($ct1_41opt1+$ct2_41opt1+$ct3_41opt1)/3;
           }
           else if(($ct2_41opt1 > $ct1_41opt1) && ($ct2_41opt1 > $ct3_41opt1) && ($ct4_41opt1 > $ct1_41opt1) && ($ct4_41opt1 > $ct3_41opt1) && ($ct1_41opt1 == $ct3_41opt1)){
               $avg_41opt1 = ($ct1_41opt1+$ct2_41opt1+$ct4_41opt1)/3;
           }
           else if(($ct3_41opt1 > $ct1_41opt1) && ($ct3_41opt1 > $ct2_41opt1) && ($ct4_41opt1 > $ct1_41opt1) && ($ct4_41opt1 > $ct2_41opt1) && ($ct1_41opt1 == $ct2_41opt1)){
               $avg_41opt1 = ($ct1_41opt1+$ct3_41opt1+$ct4_41opt1)/3;
           }
           else if(($ct1_41opt1 > $ct4_41opt1) && ($ct2_41opt1 > $ct4_41opt1) && ($ct3_41opt1 > $ct4_41opt1)){
               $avg_41opt1 = ($ct1_41opt1+$ct2_41opt1+$ct3_41opt1)/3;
           }
           else if(($ct1_41opt1 > $ct3_41opt1) && ($ct2_41opt1 > $ct3_41opt1) && ($ct4_41opt1 > $ct3_41opt1 )){
               $avg_41opt1 = ($ct1_41opt1+$ct2_41opt1+$ct4_41opt1)/3;
           }
           else if(($ct1_41opt1 > $ct2_41opt1) && ($ct3_41opt1 > $ct2_41opt1) && ($ct4_41opt1 > $ct2_41opt1) ){
               $avg_41opt1 = ($ct1_41opt1+$ct3_41opt1+$ct4_41opt1)/3;
           }
           else if(($ct2_41opt1 > $ct1_41opt1) && ($ct3_41opt1 > $ct1_41opt1) && ($ct4_41opt1 > $ct1_41opt1)){
               $avg_41opt1 = ($ct2_41opt1+$ct3_41opt1+$ct4_41opt1)/3;
           }
           else if($ct1_41opt1==$ct2_41opt1 && $ct2_41opt1==$ct3_41opt1 && $ct3_41opt1==$ct4_41opt1){
               $avg_41opt1 = ($ct1_41opt1+$ct2_41opt1+$ct3_41opt1)/3;
           }
           else if(($ct1_41opt1 > $ct2_41opt1) && ($ct2_41opt1 > $ct3_41opt1) && ($ct3_41opt1 > $ct4_41opt1)){
               $avg_41opt1 = ($ct1_41opt1+$ct2_41opt1+$ct3_41opt1)/3;
           }
           else if(($ct2_41opt1 > $ct3_41opt1) && ($ct3_41opt1 > $ct4_41opt1) && ($ct4_41opt1 > $ct1_41opt1)){
               $avg_41opt1 = ($ct2_41opt1+$ct3_41opt1+$ct4_41opt1)/3;
           }
           else if(($ct3_41opt1 > $ct4_41opt1) && ($ct4_41opt1 > $ct1_41opt1) && ($ct1_41opt1 > $ct2_41opt1)){
               $avg_41opt1 = ($ct1_41opt1+$ct3_41opt1+$ct4_41opt1)/3;
           }
           else if(($ct4_41opt1 > $ct1_41opt1) && ($ct1_41opt1 > $ct2_41opt1) && ($ct2_41opt1 > $ct3_41opt1)){
               $avg_41opt1 = ($ct1_41opt1+$ct2_41opt1+$ct4_41opt1)/3;
           }
           else if(($ct1_41opt1 > $ct2_41opt1) && ($ct1_41opt1 > $ct3_41opt1) && ($ct1_41opt1 > $ct4_41opt1) && ($ct2_41opt1==$ct3_41opt1) && ($ct3_41opt1==$ct4_41opt1)){
               $avg_41opt1 = ($ct1_41opt1+$ct2_41opt1+$ct3_41opt1)/3;
           }
           else if(($ct2_41opt1 > $ct3_41opt1) && ($ct2_41opt1 > $ct4_41opt1) && ($ct2_41opt1 > $ct1_41opt1) && ($ct3_41opt1==$ct4_41opt1) && ($ct4_41opt1==$ct1_41opt1)){
               $avg_41opt1 = ($ct1_41opt1+$ct2_41opt1+$ct3_41opt1)/3;
           }
           else if(($ct3_41opt1 > $ct1_41opt1) && ($ct3_41opt1 > $ct2_41opt1) && ($ct3_41opt1 > $ct4_41opt1) && ($ct1_41opt1==$ct2_41opt1) && ($ct2_41opt1==$ct4_41opt1)){
               $avg_41opt1 = ($ct3_41opt1+$ct2_41opt1+$ct4_41opt1)/3;
           }
           else if(($ct4_41opt1 > $ct1_41opt1) && ($ct4_41opt1 > $ct2_41opt1) && ($ct4_41opt1 > $ct3_41opt1) && ($ct1_41opt1==$ct2_41opt1) && ($ct2_41opt1==$ct3_41opt1)){
               $avg_41opt1 = ($ct1_41opt1+$ct2_41opt1+$ct4_41opt1)/3;
           }



           $res41opt1 = $avg_41opt1+$att41opt1+$exam_41opt1;

           //echo '<br>';

           // echo $res41opt1;

           //echo '<br>';

           if($res41opt1>=0 && $res41opt1<=39){
               $gp41opt1 = 0.00;
           }
           else if($res41opt1>39 && $res41opt1<=44){
               $gp41opt1 = 2.00;
           }
           else if($res41opt1>44 && $res41opt1<=49){
               $gp41opt1 = 2.25;
           }
           else if($res41opt1>49 && $res41opt1<=54){
               $gp41opt1 = 2.50;
           }
           else if($res41opt1>54 && $res41opt1<=59){
               $gp41opt1 = 2.75;
           }
           else if($res41opt1>59 && $res41opt1<=64){
               $gp41opt1 = 3.00;
           }
           else if($res41opt1>64 && $res41opt1<=69){
               $gp41opt1 = 3.25;
           }
           else if($res41opt1>69 && $res41opt1<=74){
               $gp41opt1 = 3.50;
           }
           else if($res41opt1>74 && $res41opt1<=79){
               $gp41opt1 = 3.75;
           }
           else if($res41opt1>79){
               $gp41opt1 = 4.00;
           }

           // echo '<br>';

           // echo $gp41opt1;



           //theory ece 41opt1 ends




           // echo '<br>';




           // theory ece 41opt2 starts


           $ct1_41opt2 = $row['ece_41opt2_ct1'];
           $ct2_41opt2 = $row['ece_41opt2_ct2'];
           $ct3_41opt2 = $row['ece_41opt2_ct3'];
           $ct4_41opt2 = $row['ece_41opt2_ct4'];
           $att41opt2 = $row['ece_41opt2_att'];
           $exam_41opt2 = $row['ece_41opt2_exam'];



           if($ct1_41opt2==0){
               $avg_41opt2 = ($ct2_41opt2+$ct3_41opt2+$ct4_41opt2)/3;
           }
           else if($ct2_41opt2==0){
               $avg_41opt2 = ($ct1_41opt2+$ct3_41opt2+$ct4_41opt2)/3;
           }
           else if($ct3_41opt2==0){
               $avg_41opt2 = ($ct2_41opt2+$ct1_41opt2+$ct4_41opt2)/3;
           }
           else if($ct4_41opt2==0){
               $avg_41opt2 = ($ct2_41opt2+$ct3_41opt2+$ct1_41opt2)/3;
           }
           else if($ct1_41opt2==0 && $ct2_41opt2==0){
               $avg_41opt2 = ($ct3_41opt2+$ct4_41opt2)/3;
           }
           else if($ct1_41opt2==0 && $ct3_41opt2==0){
               $avg_41opt2 = ($ct2_41opt2+$ct4_41opt2)/3;
           }
           else if($ct1_41opt2==0 && $ct4_41opt2==0){
               $avg_41opt2 = ($ct2_41opt2+$ct3_41opt2)/3;
           }
           else if($ct2_41opt2==0 && $ct3_41opt2==0){
               $avg_41opt2 = ($ct1_41opt2+$ct4_41opt2)/3;
           }
           else if($ct2_41opt2==0 && $ct4_41opt2==0){
               $avg_41opt2 = ($ct1_41opt2+$ct3_41opt2)/3;
           }
           else if($ct3_41opt2==0 && $ct4_41opt2==0){
               $avg_41opt2 = ($ct1_41opt2+$ct2_41opt2)/3;
           }
           else if($ct1_41opt2==0 && $ct2_41opt2==0 && $ct3_41opt2==0){
               $avg_41opt2 = $ct4_41opt2/3;
           }
           else if($ct1_41opt2==0 && $ct2_41opt2==0 && $ct4_41opt2==0){
               $avg_41opt2 = $ct3_41opt2/3;
           }
           else if($ct1_41opt2==0 && $ct3_41opt2==0 && $ct4_41opt2==0){
               $avg_41opt2 = $ct2_41opt2/3;
           }
           else if($ct2_41opt2==0 && $ct3_41opt2==0 && $ct4_41opt2==0){
               $avg_41opt2 = $ct1_41opt2/3;
           }
           else if($ct1_41opt2==0 && $ct2_41opt2==0 && $ct3_41opt2==0 && $ct4_41opt2==0){
               $avg_41opt2 = 0;
           }
           else if(($ct1_41opt2 > $ct3_41opt2) && ($ct1_41opt2 > $ct4_41opt2) && ($ct2_41opt2 > $ct3_41opt2) && ($ct2_41opt2 > $ct4_41opt2) && ($ct3_41opt2 == $ct4_41opt2)){
               $avg_41opt2 = ($ct1_41opt2+$ct2_41opt2+$ct3_41opt2)/3;
           }
           else if(($ct1_41opt2 > $ct2_41opt2) && ($ct1_41opt2 > $ct4_41opt2) && ($ct3_41opt2 > $ct2_41opt2) && ($ct3_41opt2 > $ct4_41opt2) && ($ct2_41opt2 == $ct4_41opt2)){
               $avg_41opt2 = ($ct1_41opt2+$ct2_41opt2+$ct3_41opt2)/3;
           }
           else if(($ct1_41opt2 > $ct2_41opt2) && ($ct1_41opt2 > $ct3_41opt2) && ($ct4_41opt2 > $ct2_41opt2) && ($ct4_41opt2 > $ct3_41opt2) && ($ct2_41opt2 == $ct3_41opt2)){
               $avg_41opt2 = ($ct1_41opt2+$ct2_41opt2+$ct4_41opt2)/3;
           }
           else if(($ct2_41opt2 > $ct1_41opt2) && ($ct2_41opt2 > $ct4_41opt2) && ($ct3_41opt2 > $ct1_41opt2) && ($ct3_41opt2 > $ct4_41opt2) && ($ct1_41opt2 == $ct4_41opt2)){
               $avg_41opt2 = ($ct1_41opt2+$ct2_41opt2+$ct3_41opt2)/3;
           }
           else if(($ct2_41opt2 > $ct1_41opt2) && ($ct2_41opt2 > $ct3_41opt2) && ($ct4_41opt2 > $ct1_41opt2) && ($ct4_41opt2 > $ct3_41opt2) && ($ct1_41opt2 == $ct3_41opt2)){
               $avg_41opt2 = ($ct1_41opt2+$ct2_41opt2+$ct4_41opt2)/3;
           }
           else if(($ct3_41opt2 > $ct1_41opt2) && ($ct3_41opt2 > $ct2_41opt2) && ($ct4_41opt2 > $ct1_41opt2) && ($ct4_41opt2 > $ct2_41opt2) && ($ct1_41opt2 == $ct2_41opt2)){
               $avg_41opt2 = ($ct1_41opt2+$ct3_41opt2+$ct4_41opt2)/3;
           }
           else if(($ct1_41opt2 > $ct4_41opt2) && ($ct2_41opt2 > $ct4_41opt2) && ($ct3_41opt2 > $ct4_41opt2)){
               $avg_41opt2 = ($ct1_41opt2+$ct2_41opt2+$ct3_41opt2)/3;
           }
           else if(($ct1_41opt2 > $ct3_41opt2) && ($ct2_41opt2 > $ct3_41opt2) && ($ct4_41opt2 > $ct3_41opt2 )){
               $avg_41opt2 = ($ct1_41opt2+$ct2_41opt2+$ct4_41opt2)/3;
           }
           else if(($ct1_41opt2 > $ct2_41opt2) && ($ct3_41opt2 > $ct2_41opt2) && ($ct4_41opt2 > $ct2_41opt2) ){
               $avg_41opt2 = ($ct1_41opt2+$ct3_41opt2+$ct4_41opt2)/3;
           }
           else if(($ct2_41opt2 > $ct1_41opt2) && ($ct3_41opt2 > $ct1_41opt2) && ($ct4_41opt2 > $ct1_41opt2)){
               $avg_41opt2 = ($ct2_41opt2+$ct3_41opt2+$ct4_41opt2)/3;
           }
           else if($ct1_41opt2==$ct2_41opt2 && $ct2_41opt2==$ct3_41opt2 && $ct3_41opt2==$ct4_41opt2){
               $avg_41opt2 = ($ct1_41opt2+$ct2_41opt2+$ct3_41opt2)/3;
           }
           else if(($ct1_41opt2 > $ct2_41opt2) && ($ct2_41opt2 > $ct3_41opt2) && ($ct3_41opt2 > $ct4_41opt2)){
               $avg_41opt2 = ($ct1_41opt2+$ct2_41opt2+$ct3_41opt2)/3;
           }
           else if(($ct2_41opt2 > $ct3_41opt2) && ($ct3_41opt2 > $ct4_41opt2) && ($ct4_41opt2 > $ct1_41opt2)){
               $avg_41opt2 = ($ct2_41opt2+$ct3_41opt2+$ct4_41opt2)/3;
           }
           else if(($ct3_41opt2 > $ct4_41opt2) && ($ct4_41opt2 > $ct1_41opt2) && ($ct1_41opt2 > $ct2_41opt2)){
               $avg_41opt2 = ($ct1_41opt2+$ct3_41opt2+$ct4_41opt2)/3;
           }
           else if(($ct4_41opt2 > $ct1_41opt2) && ($ct1_41opt2 > $ct2_41opt2) && ($ct2_41opt2 > $ct3_41opt2)){
               $avg_41opt2 = ($ct1_41opt2+$ct2_41opt2+$ct4_41opt2)/3;
           }
           else if(($ct1_41opt2 > $ct2_41opt2) && ($ct1_41opt2 > $ct3_41opt2) && ($ct1_41opt2 > $ct4_41opt2) && ($ct2_41opt2==$ct3_41opt2) && ($ct3_41opt2==$ct4_41opt2)){
               $avg_41opt2 = ($ct1_41opt2+$ct2_41opt2+$ct3_41opt2)/3;
           }
           else if(($ct2_41opt2 > $ct3_41opt2) && ($ct2_41opt2 > $ct4_41opt2) && ($ct2_41opt2 > $ct1_41opt2) && ($ct3_41opt2==$ct4_41opt2) && ($ct4_41opt2==$ct1_41opt2)){
               $avg_41opt2 = ($ct1_41opt2+$ct2_41opt2+$ct3_41opt2)/3;
           }
           else if(($ct3_41opt2 > $ct1_41opt2) && ($ct3_41opt2 > $ct2_41opt2) && ($ct3_41opt2 > $ct4_41opt2) && ($ct1_41opt2==$ct2_41opt2) && ($ct2_41opt2==$ct4_41opt2)){
               $avg_41opt2 = ($ct3_41opt2+$ct2_41opt2+$ct4_41opt2)/3;
           }
           else if(($ct4_41opt2 > $ct1_41opt2) && ($ct4_41opt2 > $ct2_41opt2) && ($ct4_41opt2 > $ct3_41opt2) && ($ct1_41opt2==$ct2_41opt2) && ($ct2_41opt2==$ct3_41opt2)){
               $avg_41opt2 = ($ct1_41opt2+$ct2_41opt2+$ct4_41opt2)/3;
           }



           $res41opt2 = $avg_41opt2+$att41opt2+$exam_41opt2;

           //echo '<br>';

           // echo $res41opt2;

           //echo '<br>';

           if($res41opt2>=0 && $res41opt2<=39){
               $gp41opt2 = 0.00;
           }
           else if($res41opt2>39 && $res41opt2<=44){
               $gp41opt2 = 2.00;
           }
           else if($res41opt2>44 && $res41opt2<=49){
               $gp41opt2 = 2.25;
           }
           else if($res41opt2>49 && $res41opt2<=54){
               $gp41opt2 = 2.50;
           }
           else if($res41opt2>54 && $res41opt2<=59){
               $gp41opt2 = 2.75;
           }
           else if($res41opt2>59 && $res41opt2<=64){
               $gp41opt2 = 3.00;
           }
           else if($res41opt2>64 && $res41opt2<=69){
               $gp41opt2 = 3.25;
           }
           else if($res41opt2>69 && $res41opt2<=74){
               $gp41opt2 = 3.50;
           }
           else if($res41opt2>74 && $res41opt2<=79){
               $gp41opt2 = 3.75;
           }
           else if($res41opt2>79){
               $gp41opt2 = 4.00;
           }

           //echo '<br>';

           // echo $gp41opt2;



           //theory ece 41opt2 ends




           //  echo '<br>';
           //  echo '<br>';
           //  echo '<br>';
           //  echo '<br>';
           //  echo '<br>';



           // sessional ece 4124 starts


           $att4124 = $row['ece_4124_att'];
           $report4124 = $row['ece_4124_re'];
           $quiz4124 = $row['ece_4124_quiz'];
           $bv4124 = $row['ece_4124_bv'];

           $res4124 = $att4124+$report4124+$quiz4124+$bv4124;

           //echo '<br>';

           // echo $res4124;

           //echo '<br>';

           if($res4124>=0 && $res4124<=39){
               $gp4124 = 0.00;
           }
           else if($res4124>=40 && $res4124<=44){
               $gp4124 = 2.00;
           }
           else if($res4124>=45 && $res4124<=49){
               $gp4124 = 2.25;
           }
           else if($res4124>=50 && $res4124<=54){
               $gp4124 = 2.50;
           }
           else if($res4124>=55 && $res4124<=59){
               $gp4124 = 2.75;
           }
           else if($res4124>=60 && $res4124<=64){
               $gp4124 = 3.00;
           }
           else if($res4124>=65 && $res4124<=69){
               $gp4124 = 3.25;
           }
           else if($res4124>=70 && $res4124<=74){
               $gp4124 = 3.50;
           }
           else if($res4124>=75 && $res4124<=79){
               $gp4124 = 3.75;
           }
           else if($res4124>=80){
               $gp4124 = 4.00;
           }

           //echo '<br>';

           // echo $gp4124;


           // sessional ece 4124 ends



           //echo '<br>';



           // sessional ece 41opt1 starts


           $att41opt1lab = $row['ece_41opt1_attlab'];
           $report41opt1 = $row['ece_41opt1_re'];
           $quiz41opt1 = $row['ece_41opt1_quiz'];
           $bv41opt1 = $row['ece_41opt1_bv'];

           $res41opt1lab = $att41opt1lab+$report41opt1+$quiz41opt1+$bv41opt1;

           //echo '<br>';

           // echo $res41opt1;

           //echo '<br>';

           if($res41opt1lab>=0 && $res41opt1lab<=39){
               $gp41opt1lab = 0.00;
           }
           else if($res41opt1lab>=40 && $res41opt1lab<=44){
               $gp41opt1lab = 2.00;
           }
           else if($res41opt1lab>=45 && $res41opt1lab<=49){
               $gp41opt1lab = 2.25;
           }
           else if($res41opt1lab>=50 && $res41opt1lab<=54){
               $gp41opt1lab = 2.50;
           }
           else if($res41opt1lab>=55 && $res41opt1lab<=59){
               $gp41opt1lab = 2.75;
           }
           else if($res41opt1lab>=60 && $res41opt1lab<=64){
               $gp41opt1lab = 3.00;
           }
           else if($res41opt1lab>=65 && $res41opt1lab<=69){
               $gp41opt1lab = 3.25;
           }
           else if($res41opt1lab>=70 && $res41opt1lab<=74){
               $gp41opt1lab = 3.50;
           }
           else if($res41opt1lab>=75 && $res41opt1lab<=79){
               $gp41opt1lab = 3.75;
           }
           else if($res41opt1lab>=80){
               $gp41opt1lab = 4.00;
           }

           //echo '<br>';

           // echo $gp41opt1lab;


           // sessional ece 41opt1 ends

           //echo '<br>';


           // sessional ece 41opt2 starts


           $att41opt2lab = $row['ece_41opt2_attlab'];
           $report41opt2 = $row['ece_41opt2_re'];
           $quiz41opt2 = $row['ece_41opt2_quiz'];
           $bv41opt2 = $row['ece_41opt2_bv'];

           $res41opt2lab = $att41opt2lab+$report41opt2+$quiz41opt2+$bv41opt2;

           //echo '<br>';

           // echo $res41opt2lab;

           //echo '<br>';

           if($res41opt2lab>=0 && $res41opt2lab<=39){
               $gp41opt2lab = 0.00;
           }
           else if($res41opt2lab>=40 && $res41opt2lab<=44){
               $gp41opt2lab = 2.00;
           }
           else if($res41opt2lab>=45 && $res41opt2lab<=49){
               $gp41opt2lab = 2.25;
           }
           else if($res41opt2lab>=50 && $res41opt2lab<=54){
               $gp41opt2lab = 2.50;
           }
           else if($res41opt2lab>=55 && $res41opt2lab<=59){
               $gp41opt2lab = 2.75;
           }
           else if($res41opt2lab>=60 && $res41opt2lab<=64){
               $gp41opt2lab = 3.00;
           }
           else if($res41opt2lab>=65 && $res41opt2lab<=69){
               $gp41opt2lab = 3.25;
           }
           else if($res41opt2lab>=70 && $res41opt2lab<=74){
               $gp41opt2lab = 3.50;
           }
           else if($res41opt2lab>=75 && $res41opt2lab<=79){
               $gp41opt2lab = 3.75;
           }
           else if($res41opt2lab>=80){
               $gp41opt2lab = 4.00;
           }

           //echo '<br>';

           // echo $gp41opt2lab;


           // sessional ece 41opt2 ends



                      // Industrial training 4100 starts

                      $res4100 = $row['ece_4100_ind'];

                      //echo '<br>';

                      // echo $res4100;

                      //echo '<br>';

                      if($res4100>=0 && $res4100<=39){
                          $gp4100 = 0.00;
                      }
                      else if($res4100>=40 && $res4100<=44){
                          $gp4100 = 2.00;
                      }
                      else if($res4100>=45 && $res4100<=49){
                          $gp4100 = 2.25;
                      }
                      else if($res4100>=50 && $res4100<=54){
                          $gp4100 = 2.50;
                      }
                      else if($res4100>=55 && $res4100<=59){
                          $gp4100 = 2.75;
                      }
                      else if($res4100>=60 && $res4100<=64){
                          $gp4100 = 3.00;
                      }
                      else if($res4100>=65 && $res4100<=69){
                          $gp4100 = 3.25;
                      }
                      else if($res4100>=70 && $res4100<=74){
                          $gp4100 = 3.50;
                      }
                      else if($res4100>=75 && $res4100<=79){
                          $gp4100 = 3.75;
                      }
                      else if($res4100>=80){
                          $gp4100 = 4.00;
                      }

                      // echo '<br>';

                      // echo $gp4100;

                      // echo '<br>';
                      // echo '<br>';
                      // echo '<br>';


                      // Industrial training 4100 ends




           // seminar 4122 starts

        $res4122 = $row['ece_4122_sem'];

        //echo '<br>';

        // echo $res4122;

        //echo '<br>';

        if($res4122>=0 && $res4122<=39){
            $gp4122 = 0.00;
        }
        else if($res4122>=40 && $res4122<=44){
            $gp4122 = 2.00;
        }
        else if($res4122>=45 && $res4122<=49){
            $gp4122 = 2.25;
        }
        else if($res4122>=50 && $res4122<=54){
            $gp4122 = 2.50;
        }
        else if($res4122>=55 && $res4122<=59){
            $gp4122 = 2.75;
        }
        else if($res4122>=60 && $res4122<=64){
            $gp4122 = 3.00;
        }
        else if($res4122>=65 && $res4122<=69){
            $gp4122 = 3.25;
        }
        else if($res4122>=70 && $res4122<=74){
            $gp4122 = 3.50;
        }
        else if($res4122>=75 && $res4122<=79){
            $gp4122 = 3.75;
        }
        else if($res4122>=80){
            $gp4122 = 4.00;
        }

        // echo '<br>';

        // echo $gp4122;

        // echo '<br>';
        // echo '<br>';
        // echo '<br>';


        // seminar 4122 ends





           // echo '<br>';
           // echo '<br>';
           // echo '<br>';
           // echo '<br>';
           // echo '<br>';






           // project-I 4000 starts

         $res4000pro1 = $row['ece_4000_pro1'];

         //echo '<br>';

         // echo $res4000pro1;

         //echo '<br>';

         if($res4000pro1>=0 && $res4000pro1<=39){
             $gp4000pro1 = 0.00;
         }
         else if($res4000pro1>=40 && $res4000pro1<=44){
             $gp4000pro1 = 2.00;
         }
         else if($res4000pro1>=45 && $res4000pro1<=49){
             $gp4000pro1 = 2.25;
         }
         else if($res4000pro1>=50 && $res4000pro1<=54){
             $gp4000pro1 = 2.50;
         }
         else if($res4000pro1>=55 && $res4000pro1<=59){
             $gp4000pro1 = 2.75;
         }
         else if($res4000pro1>=60 && $res4000pro1<=64){
             $gp4000pro1 = 3.00;
         }
         else if($res4000pro1>=65 && $res4000pro1<=69){
             $gp4000pro1 = 3.25;
         }
         else if($res4000pro1>=70 && $res4000pro1<=74){
             $gp4000pro1 = 3.50;
         }
         else if($res4000pro1>=75 && $res4000pro1<=79){
             $gp4000pro1 = 3.75;
         }
         else if($res4000pro1>=80){
             $gp4000pro1 = 4.00;
         }

         // echo '<br>';

         // echo $gp4000pro1;

         // echo '<br>';
         // echo '<br>';
         // echo '<br>';


         // project-I 4000 ends



           echo '<br>';

           $gp41 =  ($gp4109+ $gp4123+ $gp4121+ $gp41opt2+ $gp41opt1)*3 + ($gp4124*1.5) + ($gp41opt1lab*0.75 + $gp41opt2lab*0.75) + ($gp4100*1.00) + ($gp4122*0.75) + ($gp4000pro1*1.50);

           $format_gp41 = number_format($gp41, 2);


           $gpa41 =  (($gp4109+ $gp4123+ $gp4121+ $gp41opt2+ $gp41opt1)*3 + ($gp4124*1.5) + ($gp41opt1lab*0.75 + $gp41opt2lab*0.75) + ($gp4100*1.00) + ($gp4122*0.75) + ($gp4000pro1*1.50))/21.25;

           $format_gpa41 = number_format($gpa41, 2);






           ?>

          <div class="resflex">
               <div>Roll: <?php echo $row['roll41']; ?></div>
               <div>GP: <?php echo $format_gp41?></div>
               <div>GPA: <?php echo $format_gpa41?></div>
               <div>CGPA: <?php

               // echo $format_gpa11;

               // echo '<br>';

               // echo $format_gpa21;

               // echo '<br>';

               $cgpa41 = ($format_gpa11 + $format_gpa12 + $format_gpa21 + $format_gpa22 + $format_gpa31 + $format_gpa32 + $format_gpa41)/7;

               $format_cgpa41 = number_format($cgpa41, 2);

               echo $format_cgpa41;



               ?></div>
           </div>

           <br>
           <br>



<?php
 }
?>

<!-- Result 4-1 Ends -->




<!-- Result 4-2 Starts -->


<div class="segment-area">
   <h3>4th Year Even Semester Result</h3>
</div>




<?php

       $db_42 = mysqli_query($link, "SELECT * FROM `semester_42` WHERE `roll42` = ".$_SESSION['student_login']);
     while($row = mysqli_fetch_assoc($db_42)){
?>


           <?php


           // theory ece 4211 starts

           $ct1_4211 = $row['ece_4211_ct1'];
           $ct2_4211 = $row['ece_4211_ct2'];
           $ct3_4211 = $row['ece_4211_ct3'];
           $ct4_4211 = $row['ece_4211_ct4'];
           $att4211 = $row['ece_4211_att'];
           $exam4211 = $row['ece_4211_exam'];


           if($ct1_4211==0){
               $avg_4211 = ($ct2_4211+$ct3_4211+$ct4_4211)/3;
           }
           else if($ct2_4211==0){
               $avg_4211 = ($ct1_4211+$ct3_4211+$ct4_4211)/3;
           }
           else if($ct3_4211==0){
               $avg_4211 = ($ct2_4211+$ct1_4211+$ct4_4211)/3;
           }
           else if($ct4_4211==0){
               $avg_4211 = ($ct2_4211+$ct3_4211+$ct1_4211)/3;
           }
           else if($ct1_4211==0 && $ct2_4211==0){
               $avg_4211 = ($ct3_4211+$ct4_4211)/3;
           }
           else if($ct1_4211==0 && $ct3_4211==0){
               $avg_4211 = ($ct2_4211+$ct4_4211)/3;
           }
           else if($ct1_4211==0 && $ct4_4211==0){
               $avg_4211 = ($ct2_4211+$ct3_4211)/3;
           }
           else if($ct2_4211==0 && $ct3_4211==0){
               $avg_4211 = ($ct1_4211+$ct4_4211)/3;
           }
           else if($ct2_4211==0 && $ct4_4211==0){
               $avg_4211 = ($ct1_4211+$ct3_4211)/3;
           }
           else if($ct3_4211==0 && $ct4_4211==0){
               $avg_4211 = ($ct1_4211+$ct2_4211)/3;
           }
           else if($ct1_4211==0 && $ct2_4211==0 && $ct3_4211==0){
               $avg_4211 = $ct4_4211/3;
           }
           else if($ct1_4211==0 && $ct2_4211==0 && $ct4_4211==0){
               $avg_4211 = $ct3_4211/3;
           }
           else if($ct1_4211==0 && $ct3_4211==0 && $ct4_4211==0){
               $avg_4211 = $ct2_4211/3;
           }
           else if($ct2_4211==0 && $ct3_4211==0 && $ct4_4211==0){
               $avg_4211 = $ct1_4211/3;
           }
           else if($ct1_4211==0 && $ct2_4211==0 && $ct3_4211==0 && $ct4_4211==0){
               $avg_4211 = 0;
           }
           else if(($ct1_4211 > $ct3_4211) && ($ct1_4211 > $ct4_4211) && ($ct2_4211 > $ct3_4211) && ($ct2_4211 > $ct4_4211) && ($ct3_4211 == $ct4_4211)){
               $avg_4211 = ($ct1_4211+$ct2_4211+$ct3_4211)/3;
           }
           else if(($ct1_4211 > $ct2_4211) && ($ct1_4211 > $ct4_4211) && ($ct3_4211 > $ct2_4211) && ($ct3_4211 > $ct4_4211) && ($ct2_4211 == $ct4_4211)){
               $avg_4211 = ($ct1_4211+$ct2_4211+$ct3_4211)/3;
           }
           else if(($ct1_4211 > $ct2_4211) && ($ct1_4211 > $ct3_4211) && ($ct4_4211 > $ct2_4211) && ($ct4_4211 > $ct3_4211) && ($ct2_4211 == $ct3_4211)){
               $avg_4211 = ($ct1_4211+$ct2_4211+$ct4_4211)/3;
           }
           else if(($ct2_4211 > $ct1_4211) && ($ct2_4211 > $ct4_4211) && ($ct3_4211 > $ct1_4211) && ($ct3_4211 > $ct4_4211) && ($ct1_4211 == $ct4_4211)){
               $avg_4211 = ($ct1_4211+$ct2_4211+$ct3_4211)/3;
           }
           else if(($ct2_4211 > $ct1_4211) && ($ct2_4211 > $ct3_4211) && ($ct4_4211 > $ct1_4211) && ($ct4_4211 > $ct3_4211) && ($ct1_4211 == $ct3_4211)){
               $avg_4211 = ($ct1_4211+$ct2_4211+$ct4_4211)/3;
           }
           else if(($ct3_4211 > $ct1_4211) && ($ct3_4211 > $ct2_4211) && ($ct4_4211 > $ct1_4211) && ($ct4_4211 > $ct2_4211) && ($ct1_4211 == $ct2_4211)){
               $avg_4211 = ($ct1_4211+$ct3_4211+$ct4_4211)/3;
           }
           else if(($ct1_4211 > $ct4_4211) && ($ct2_4211 > $ct4_4211) && ($ct3_4211 > $ct4_4211 )){
               $avg_4211 = ($ct1_4211+$ct2_4211+$ct3_4211)/3;
           }
           else if(($ct1_4211 > $ct3_4211) && ($ct2_4211 > $ct3_4211) && ($ct4_4211 > $ct3_4211 )){
               $avg_4211 = ($ct1_4211+$ct2_4211+$ct4_4211)/3;
           }
           else if(($ct1_4211 > $ct2_4211) && ($ct3_4211 > $ct2_4211) && ($ct4_4211 > $ct2_4211 )){
               $avg_4211 = ($ct1_4211+$ct3_4211+$ct4_4211)/3;
           }
           else if(($ct2_4211 > $ct1_4211) && ($ct3_4211 > $ct1_4211) && ($ct4_4211 > $ct1_4211 )){
               $avg_4211 = ($ct2_4211+$ct3_4211+$ct4_4211)/3;
           }
           else if($ct1_4211==$ct2_4211 && $ct2_4211==$ct3_4211 && $ct3_4211==$ct4_4211){
               $avg_4211 = ($ct1_4211+$ct2_4211+$ct3_4211)/3;
           }
           else if(($ct1_4211 > $ct2_4211) && ($ct2_4211 > $ct3_4211) && ($ct3_4211 > $ct4_4211)){
               $avg_4211 = ($ct1_4211+$ct2_4211+$ct3_4211)/3;
           }
           else if(($ct2_4211 > $ct3_4211) && ($ct3_4211 > $ct4_4211) && ($ct4_4211 > $ct1_4211)){
               $avg_4211 = ($ct2_4211+$ct3_4211+$ct4_4211)/3;
           }
           else if(($ct3_4211 > $ct4_4211) && ($ct4_4211 > $ct1_4211) && ($ct1_4211 > $ct2_4211)){
               $avg_4211 = ($ct1_4211+$ct3_4211+$ct4_4211)/3;
           }
           else if(($ct4_4211 > $ct1_4211) && ($ct1_4211 > $ct2_4211) && ($ct2_4211 > $ct3_4211)){
               $avg_4211 = ($ct1_4211+$ct2_4211+$ct4_4211)/3;
           }
           else if(($ct1_4211 > $ct2_4211) && ($ct1_4211 > $ct3_4211) && ($ct1_4211 > $ct4_4211) && ($ct2_4211==$ct3_4211) && ($ct3_4211==$ct4_4211)){
               $avg_4211 = ($ct1_4211+$ct2_4211+$ct3_4211)/3;
           }
           else if(($ct2_4211 > $ct3_4211) && ($ct2_4211 > $ct4_4211) && ($ct2_4211 > $ct1_4211) && ($ct3_4211==$ct4_4211) && ($ct4_4211==$ct1_4211)){
               $avg_4211 = ($ct2_4211+$ct3_4211+$ct4_4211)/3;
           }
           else if(($ct3_4211 > $ct1_4211) && ($ct3_4211 > $ct2_4211) && ($ct3_4211 > $ct4_4211) && ($ct1_4211==$ct2_4211) && ($ct2_4211==$ct4_4211)){
               $avg_4211 = ($ct3_4211+$ct2_4211+$ct4_4211)/3;
           }
           else if(($ct4_4211 > $ct1_4211) && ($ct4_4211 > $ct2_4211) && ($ct4_4211 > $ct3_4211) && ($ct1_4211==$ct2_4211) && ($ct2_4211==$ct3_4211)){
               $avg_4211 = ($ct1_4211+$ct2_4211+$ct4_4211)/3;
           }



           $res4211 = $avg_4211+$att4211+$exam4211;

           //echo '<br>';

           // echo $res4211;

           //echo '<br>';

           if($res4211>=0 && $res4211<=39){
               $gp4211 = 0.00;
           }
           else if($res4211>39 && $res4211<=44){
               $gp4211 = 2.00;
           }
           else if($res4211>44 && $res4211<=49){
               $gp4211 = 2.25;
           }
           else if($res4211>49 && $res4211<=54){
               $gp4211 = 2.50;
           }
           else if($res4211>54 && $res4211<=59){
               $gp4211 = 2.75;
           }
           else if($res4211>59 && $res4211<=64){
               $gp4211 = 3.00;
           }
           else if($res4211>64 && $res4211<=69){
               $gp4211 = 3.25;
           }
           else if($res4211>69 && $res4211<=74){
               $gp4211 = 3.50;
           }
           else if($res4211>74 && $res4211<=79){
               $gp4211 = 3.75;
           }
           else if($res4211>79){
               $gp4211 = 4.00;
           }

           //echo '<br>';

           // echo $gp4211;


           //theory ece 4211 ends


            //echo '<br>';


           // theory ece 4223 starts

           $ct1_4223 = $row['ece_4223_ct1'];
           $ct2_4223 = $row['ece_4223_ct2'];
           $ct3_4223 = $row['ece_4223_ct3'];
           $ct4_4223 = $row['ece_4223_ct4'];
           $att4223 = $row['ece_4223_att'];
           $exam4223 = $row['ece_4223_exam'];


           if($ct1_4223==0){
               $avg_4223 = ($ct2_4223+$ct3_4223+$ct4_4223)/3;
           }
           else if($ct2_4223==0){
               $avg_4223 = ($ct1_4223+$ct3_4223+$ct4_4223)/3;
           }
           else if($ct3_4223==0){
               $avg_4223 = ($ct2_4223+$ct1_4223+$ct4_4223)/3;
           }
           else if($ct4_4223==0){
               $avg_4223 = ($ct2_4223+$ct3_4223+$ct1_4223)/3;
           }
           else if($ct1_4223==0 && $ct2_4223==0){
               $avg_4223 = ($ct3_4223+$ct4_4223)/3;
           }
           else if($ct1_4223==0 && $ct3_4223==0){
               $avg_4223 = ($ct2_4223+$ct4_4223)/3;
           }
           else if($ct1_4223==0 && $ct4_4223==0){
               $avg_4223 = ($ct2_4223+$ct3_4223)/3;
           }
           else if($ct2_4223==0 && $ct3_4223==0){
               $avg_4223 = ($ct1_4223+$ct4_4223)/3;
           }
           else if($ct2_4223==0 && $ct4_4223==0){
               $avg_4223 = ($ct1_4223+$ct3_4223)/3;
           }
           else if($ct3_4223==0 && $ct4_4223==0){
               $avg_4223 = ($ct1_4223+$ct2_4223)/3;
           }
           else if($ct1_4223==0 && $ct2_4223==0 && $ct3_4223==0){
               $avg_4223 = $ct4_4223/3;
           }
           else if($ct1_4223==0 && $ct2_4223==0 && $ct4_4223==0){
               $avg_4223 = $ct3_4223/3;
           }
           else if($ct1_4223==0 && $ct3_4223==0 && $ct4_4223==0){
               $avg_4223 = $ct2_4223/3;
           }
           else if($ct2_4223==0 && $ct3_4223==0 && $ct4_4223==0){
               $avg_4223 = $ct1_4223/3;
           }
           else if($ct1_4223==0 && $ct2_4223==0 && $ct3_4223==0 && $ct4_4223==0){
               $avg_4223 = 0;
           }
           else if(($ct1_4223 > $ct3_4223) && ($ct1_4223 > $ct4_4223) && ($ct2_4223 > $ct3_4223) && ($ct2_4223 > $ct4_4223) && ($ct3_4223 == $ct4_4223)){
               $avg_4223 = ($ct1_4223+$ct2_4223+$ct3_4223)/3;
           }
           else if(($ct1_4223 > $ct2_4223) && ($ct1_4223 > $ct4_4223) && ($ct3_4223 > $ct2_4223) && ($ct3_4223 > $ct4_4223) && ($ct2_4223 == $ct4_4223)){
               $avg_4223 = ($ct1_4223+$ct2_4223+$ct3_4223)/3;
           }
           else if(($ct1_4223 > $ct2_4223) && ($ct1_4223 > $ct3_4223) && ($ct4_4223 > $ct2_4223) && ($ct4_4223 > $ct3_4223) && ($ct2_4223 == $ct3_4223)){
               $avg_4223 = ($ct1_4223+$ct2_4223+$ct4_4223)/3;
           }
           else if(($ct2_4223 > $ct1_4223) && ($ct2_4223 > $ct4_4223) && ($ct3_4223 > $ct1_4223) && ($ct3_4223 > $ct4_4223) && ($ct1_4223 == $ct4_4223)){
               $avg_4223 = ($ct1_4223+$ct2_4223+$ct3_4223)/3;
           }
           else if(($ct2_4223 > $ct1_4223) && ($ct2_4223 > $ct3_4223) && ($ct4_4223 > $ct1_4223) && ($ct4_4223 > $ct3_4223) && ($ct1_4223 == $ct3_4223)){
               $avg_4223 = ($ct1_4223+$ct2_4223+$ct4_4223)/3;
           }
           else if(($ct3_4223 > $ct1_4223) && ($ct3_4223 > $ct2_4223) && ($ct4_4223 > $ct1_4223) && ($ct4_4223 > $ct2_4223) && ($ct1_4223 == $ct2_4223)){
               $avg_4223 = ($ct1_4223+$ct3_4223+$ct4_4223)/3;
           }
           else if(($ct1_4223 > $ct4_4223) && ($ct2_4223 > $ct4_4223) && ($ct3_4223 > $ct4_4223)){
               $avg_4223 = ($ct1_4223+$ct2_4223+$ct3_4223)/3;
           }
           else if(($ct1_4223 > $ct3_4223) && ($ct2_4223 > $ct3_4223) && ($ct4_4223 > $ct3_4223 )){
               $avg_4223 = ($ct1_4223+$ct2_4223+$ct4_4223)/3;
           }
           else if(($ct1_4223 > $ct2_4223) && ($ct3_4223 > $ct2_4223) && ($ct4_4223 > $ct2_4223) ){
               $avg_4223 = ($ct1_4223+$ct3_4223+$ct4_4223)/3;
           }
           else if(($ct2_4223 > $ct1_4223) && ($ct3_4223 > $ct1_4223) && ($ct4_4223 > $ct1_4223)){
               $avg_4223 = ($ct2_4223+$ct3_4223+$ct4_4223)/3;
           }
           else if($ct1_4223==$ct2_4223 && $ct2_4223==$ct3_4223 && $ct3_4223==$ct4_4223){
               $avg_4223 = ($ct1_4223+$ct2_4223+$ct3_4223)/3;
           }
           else if(($ct1_4223 > $ct2_4223) && ($ct2_4223 > $ct3_4223) && ($ct3_4223 > $ct4_4223)){
               $avg_4223 = ($ct1_4223+$ct2_4223+$ct3_4223)/3;
           }
           else if(($ct2_4223 > $ct3_4223) && ($ct3_4223 > $ct4_4223) && ($ct4_4223 > $ct1_4223)){
               $avg_4223 = ($ct2_4223+$ct3_4223+$ct4_4223)/3;
           }
           else if(($ct3_4223 > $ct4_4223) && ($ct4_4223 > $ct1_4223) && ($ct1_4223 > $ct2_4223)){
               $avg_4223 = ($ct1_4223+$ct3_4223+$ct4_4223)/3;
           }
           else if(($ct4_4223 > $ct1_4223) && ($ct1_4223 > $ct2_4223) && ($ct2_4223 > $ct3_4223)){
               $avg_4223 = ($ct1_4223+$ct2_4223+$ct4_4223)/3;
           }
           else if(($ct1_4223 > $ct2_4223) && ($ct1_4223 > $ct3_4223) && ($ct1_4223 > $ct4_4223) && ($ct2_4223==$ct3_4223) && ($ct3_4223==$ct4_4223)){
               $avg_4223 = ($ct1_4223+$ct2_4223+$ct3_4223)/3;
           }
           else if(($ct2_4223 > $ct3_4223) && ($ct2_4223 > $ct4_4223) && ($ct2_4223 > $ct1_4223) && ($ct3_4223==$ct4_4223) && ($ct4_4223==$ct1_4223)){
               $avg_4223 = ($ct1_4223+$ct2_4223+$ct3_4223)/3;
           }
           else if(($ct3_4223 > $ct1_4223) && ($ct3_4223 > $ct2_4223) && ($ct3_4223 > $ct4_4223) && ($ct1_4223==$ct2_4223) && ($ct2_4223==$ct4_4223)){
               $avg_4223 = ($ct3_4223+$ct2_4223+$ct4_4223)/3;
           }
           else if(($ct4_4223 > $ct1_4223) && ($ct4_4223 > $ct2_4223) && ($ct4_4223 > $ct3_4223) && ($ct1_4223==$ct2_4223) && ($ct2_4223==$ct3_4223)){
               $avg_4223 = ($ct1_4223+$ct2_4223+$ct4_4223)/3;
           }



           $res4223 = $avg_4223+$att4223+$exam4223;

           //echo '<br>';

           // echo $res4223;

           //echo '<br>';

           if($res4223>=0 && $res4223<=39){
               $gp4223 = 0.00;
           }
           else if($res4223>39 && $res4223<=44){
               $gp4223 = 2.00;
           }
           else if($res4223>44 && $res4223<=49){
               $gp4223 = 2.25;
           }
           else if($res4223>49 && $res4223<=54){
               $gp4223 = 2.50;
           }
           else if($res4223>54 && $res4223<=59){
               $gp4223 = 2.75;
           }
           else if($res4223>59 && $res4223<=64){
               $gp4223 = 3.00;
           }
           else if($res4223>64 && $res4223<=69){
               $gp4223 = 3.25;
           }
           else if($res4223>69 && $res4223<=74){
               $gp4223 = 3.50;
           }
           else if($res4223>74 && $res4223<=79){
               $gp4223 = 3.75;
           }
           else if($res4223>79){
               $gp4223 = 4.00;
           }

           //echo '<br>';

           // echo $gp4223;


           //theory ece 4223 ends




           //echo "<br>";



           // theory ece 4217 starts


           $ct1_4217 = $row['ece_4217_ct1'];
           $ct2_4217 = $row['ece_4217_ct2'];
           $ct3_4217 = $row['ece_4217_ct3'];
           $ct4_4217 = $row['ece_4217_ct4'];
           $att4217 = $row['ece_4217_att'];
           $exam4217 = $row['ece_4217_exam'];





           if($ct1_4217==0){
               $avg_4217 = ($ct2_4217+$ct3_4217+$ct4_4217)/3;
           }
           else if($ct2_4217==0){
               $avg_4217 = ($ct1_4217+$ct3_4217+$ct4_4217)/3;
           }
           else if($ct3_4217==0){
               $avg_4217 = ($ct2_4217+$ct1_4217+$ct4_4217)/3;
           }
           else if($ct4_4217==0){
               $avg_4217 = ($ct2_4217+$ct3_4217+$ct1_4217)/3;
           }
           else if($ct1_4217==0 && $ct2_4217==0){
               $avg_4217 = ($ct3_4217+$ct4_4217)/3;
           }
           else if($ct1_4217==0 && $ct3_4217==0){
               $avg_4217 = ($ct2_4217+$ct4_4217)/3;
           }
           else if($ct1_4217==0 && $ct4_4217==0){
               $avg_4217 = ($ct2_4217+$ct3_4217)/3;
           }
           else if($ct2_4217==0 && $ct3_4217==0){
               $avg_4217 = ($ct1_4217+$ct4_4217)/3;
           }
           else if($ct2_4217==0 && $ct4_4217==0){
               $avg_4217 = ($ct1_4217+$ct3_4217)/3;
           }
           else if($ct3_4217==0 && $ct4_4217==0){
               $avg_4217 = ($ct1_4217+$ct2_4217)/3;
           }
           else if($ct1_4217==0 && $ct2_4217==0 && $ct3_4217==0){
               $avg_4217 = $ct4_4217/3;
           }
           else if($ct1_4217==0 && $ct2_4217==0 && $ct4_4217==0){
               $avg_4217 = $ct3_4217/3;
           }
           else if($ct1_4217==0 && $ct3_4217==0 && $ct4_4217==0){
               $avg_4217 = $ct2_4217/3;
           }
           else if($ct2_4217==0 && $ct3_4217==0 && $ct4_4217==0){
               $avg_4217 = $ct1_4217/3;
           }
           else if($ct1_4217==0 && $ct2_4217==0 && $ct3_4217==0 && $ct4_4217==0){
               $avg_4217 = 0;
           }
           else if(($ct1_4217 > $ct3_4217) && ($ct1_4217 > $ct4_4217) && ($ct2_4217 > $ct3_4217) && ($ct2_4217 > $ct4_4217) && ($ct3_4217 == $ct4_4217)){
               $avg_4217 = ($ct1_4217+$ct2_4217+$ct3_4217)/3;
           }
           else if(($ct1_4217 > $ct2_4217) && ($ct1_4217 > $ct4_4217) && ($ct3_4217 > $ct2_4217) && ($ct3_4217 > $ct4_4217) && ($ct2_4217 == $ct4_4217)){
               $avg_4217 = ($ct1_4217+$ct2_4217+$ct3_4217)/3;
           }
           else if(($ct1_4217 > $ct2_4217) && ($ct1_4217 > $ct3_4217) && ($ct4_4217 > $ct2_4217) && ($ct4_4217 > $ct3_4217) && ($ct2_4217 == $ct3_4217)){
               $avg_4217 = ($ct1_4217+$ct2_4217+$ct4_4217)/3;
           }
           else if(($ct2_4217 > $ct1_4217) && ($ct2_4217 > $ct4_4217) && ($ct3_4217 > $ct1_4217) && ($ct3_4217 > $ct4_4217) && ($ct1_4217 == $ct4_4217)){
               $avg_4217 = ($ct1_4217+$ct2_4217+$ct3_4217)/3;
           }
           else if(($ct2_4217 > $ct1_4217) && ($ct2_4217 > $ct3_4217) && ($ct4_4217 > $ct1_4217) && ($ct4_4217 > $ct3_4217) && ($ct1_4217 == $ct3_4217)){
               $avg_4217 = ($ct1_4217+$ct2_4217+$ct4_4217)/3;
           }
           else if(($ct3_4217 > $ct1_4217) && ($ct3_4217 > $ct2_4217) && ($ct4_4217 > $ct1_4217) && ($ct4_4217 > $ct2_4217) && ($ct1_4217 == $ct2_4217)){
               $avg_4217 = ($ct1_4217+$ct3_4217+$ct4_4217)/3;
           }
           else if(($ct1_4217 > $ct4_4217) && ($ct2_4217 > $ct4_4217) && ($ct3_4217 > $ct4_4217)){
               $avg_4217 = ($ct1_4217+$ct2_4217+$ct3_4217)/3;
           }
           else if(($ct1_4217 > $ct3_4217) && ($ct2_4217 > $ct3_4217) && ($ct4_4217 > $ct3_4217 )){
               $avg_4217 = ($ct1_4217+$ct2_4217+$ct4_4217)/3;
           }
           else if(($ct1_4217 > $ct2_4217) && ($ct3_4217 > $ct2_4217) && ($ct4_4217 > $ct2_4217) ){
               $avg_4217 = ($ct1_4217+$ct3_4217+$ct4_4217)/3;
           }
           else if(($ct2_4217 > $ct1_4217) && ($ct3_4217 > $ct1_4217) && ($ct4_4217 > $ct1_4217)){
               $avg_4217 = ($ct2_4217+$ct3_4217+$ct4_4217)/3;
           }
           else if($ct1_4217==$ct2_4217 && $ct2_4217==$ct3_4217 && $ct3_4217==$ct4_4217){
               $avg_4217 = ($ct1_4217+$ct2_4217+$ct3_4217)/3;
           }
           else if(($ct1_4217 > $ct2_4217) && ($ct2_4217 > $ct3_4217) && ($ct3_4217 > $ct4_4217)){
               $avg_4217 = ($ct1_4217+$ct2_4217+$ct3_4217)/3;
           }
           else if(($ct2_4217 > $ct3_4217) && ($ct3_4217 > $ct4_4217) && ($ct4_4217 > $ct1_4217)){
               $avg_4217 = ($ct2_4217+$ct3_4217+$ct4_4217)/3;
           }
           else if(($ct3_4217 > $ct4_4217) && ($ct4_4217 > $ct1_4217) && ($ct1_4217 > $ct2_4217)){
               $avg_4217 = ($ct1_4217+$ct3_4217+$ct4_4217)/3;
           }
           else if(($ct4_4217 > $ct1_4217) && ($ct1_4217 > $ct2_4217) && ($ct2_4217 > $ct3_4217)){
               $avg_4217 = ($ct1_4217+$ct2_4217+$ct4_4217)/3;
           }
           else if(($ct1_4217 > $ct2_4217) && ($ct1_4217 > $ct3_4217) && ($ct1_4217 > $ct4_4217) && ($ct2_4217==$ct3_4217) && ($ct3_4217==$ct4_4217)){
               $avg_4217 = ($ct1_4217+$ct2_4217+$ct3_4217)/3;
           }
           else if(($ct2_4217 > $ct3_4217) && ($ct2_4217 > $ct4_4217) && ($ct2_4217 > $ct1_4217) && ($ct3_4217==$ct4_4217) && ($ct4_4217==$ct1_4217)){
               $avg_4217 = ($ct1_4217+$ct2_4217+$ct3_4217)/3;
           }
           else if(($ct3_4217 > $ct1_4217) && ($ct3_4217 > $ct2_4217) && ($ct3_4217 > $ct4_4217) && ($ct1_4217==$ct2_4217) && ($ct2_4217==$ct4_4217)){
               $avg_4217 = ($ct3_4217+$ct2_4217+$ct4_4217)/3;
           }
           else if(($ct4_4217 > $ct1_4217) && ($ct4_4217 > $ct2_4217) && ($ct4_4217 > $ct3_4217) && ($ct1_4217==$ct2_4217) && ($ct2_4217==$ct3_4217)){
               $avg_4217 = ($ct1_4217+$ct2_4217+$ct4_4217)/3;
           }



           $res4217 = $avg_4217+$att4217+$exam4217;

           //echo '<br>';

           // echo $res4217;

           //echo '<br>';

           if($res4217>=0 && $res4217<=39){
               $gp4217 = 0.00;
           }
           else if($res4217>39 && $res4217<=44){
               $gp4217 = 2.00;
           }
           else if($res4217>44 && $res4217<=49){
               $gp4217 = 2.25;
           }
           else if($res4217>49 && $res4217<=54){
               $gp4217 = 2.50;
           }
           else if($res4217>54 && $res4217<=59){
               $gp4217 = 2.75;
           }
           else if($res4217>59 && $res4217<=64){
               $gp4217 = 3.00;
           }
           else if($res4217>64 && $res4217<=69){
               $gp4217 = 3.25;
           }
           else if($res4217>69 && $res4217<=74){
               $gp4217 = 3.50;
           }
           else if($res4217>74 && $res4217<=79){
               $gp4217 = 3.75;
           }
           else if($res4217>79){
               $gp4217 = 4.00;
           }

           //echo '<br>';

           // echo $gp4217;




           //theory ece 4217 ends




           //echo '<br>';




           // theory ece 42opt3 starts


           $ct1_42opt3 = $row['ece_42opt3_ct1'];
           $ct2_42opt3 = $row['ece_42opt3_ct2'];
           $ct3_42opt3 = $row['ece_42opt3_ct3'];
           $ct4_42opt3 = $row['ece_42opt3_ct4'];
           $att42opt3 = $row['ece_42opt3_att'];
           $exam_42opt3 = $row['ece_42opt3_exam'];



           if($ct1_42opt3==0){
               $avg_42opt3 = ($ct2_42opt3+$ct3_42opt3+$ct4_42opt3)/3;
           }
           else if($ct2_42opt3==0){
               $avg_42opt3 = ($ct1_42opt3+$ct3_42opt3+$ct4_42opt3)/3;
           }
           else if($ct3_42opt3==0){
               $avg_42opt3 = ($ct2_42opt3+$ct1_42opt3+$ct4_42opt3)/3;
           }
           else if($ct4_42opt3==0){
               $avg_42opt3 = ($ct2_42opt3+$ct3_42opt3+$ct1_42opt3)/3;
           }
           else if($ct1_42opt3==0 && $ct2_42opt3==0){
               $avg_42opt3 = ($ct3_42opt3+$ct4_42opt3)/3;
           }
           else if($ct1_42opt3==0 && $ct3_42opt3==0){
               $avg_42opt3 = ($ct2_42opt3+$ct4_42opt3)/3;
           }
           else if($ct1_42opt3==0 && $ct4_42opt3==0){
               $avg_42opt3 = ($ct2_42opt3+$ct3_42opt3)/3;
           }
           else if($ct2_42opt3==0 && $ct3_42opt3==0){
               $avg_42opt3 = ($ct1_42opt3+$ct4_42opt3)/3;
           }
           else if($ct2_42opt3==0 && $ct4_42opt3==0){
               $avg_42opt3 = ($ct1_42opt3+$ct3_42opt3)/3;
           }
           else if($ct3_42opt3==0 && $ct4_42opt3==0){
               $avg_42opt3 = ($ct1_42opt3+$ct2_42opt3)/3;
           }
           else if($ct1_42opt3==0 && $ct2_42opt3==0 && $ct3_42opt3==0){
               $avg_42opt3 = $ct4_42opt3/3;
           }
           else if($ct1_42opt3==0 && $ct2_42opt3==0 && $ct4_42opt3==0){
               $avg_42opt3 = $ct3_42opt3/3;
           }
           else if($ct1_42opt3==0 && $ct3_42opt3==0 && $ct4_42opt3==0){
               $avg_42opt3 = $ct2_42opt3/3;
           }
           else if($ct2_42opt3==0 && $ct3_42opt3==0 && $ct4_42opt3==0){
               $avg_42opt3 = $ct1_42opt3/3;
           }
           else if($ct1_42opt3==0 && $ct2_42opt3==0 && $ct3_42opt3==0 && $ct4_42opt3==0){
               $avg_42opt3 = 0;
           }
           else if(($ct1_42opt3 > $ct3_42opt3) && ($ct1_42opt3 > $ct4_42opt3) && ($ct2_42opt3 > $ct3_42opt3) && ($ct2_42opt3 > $ct4_42opt3) && ($ct3_42opt3 == $ct4_42opt3)){
               $avg_42opt3 = ($ct1_42opt3+$ct2_42opt3+$ct3_42opt3)/3;
           }
           else if(($ct1_42opt3 > $ct2_42opt3) && ($ct1_42opt3 > $ct4_42opt3) && ($ct3_42opt3 > $ct2_42opt3) && ($ct3_42opt3 > $ct4_42opt3) && ($ct2_42opt3 == $ct4_42opt3)){
               $avg_42opt3 = ($ct1_42opt3+$ct2_42opt3+$ct3_42opt3)/3;
           }
           else if(($ct1_42opt3 > $ct2_42opt3) && ($ct1_42opt3 > $ct3_42opt3) && ($ct4_42opt3 > $ct2_42opt3) && ($ct4_42opt3 > $ct3_42opt3) && ($ct2_42opt3 == $ct3_42opt3)){
               $avg_42opt3 = ($ct1_42opt3+$ct2_42opt3+$ct4_42opt3)/3;
           }
           else if(($ct2_42opt3 > $ct1_42opt3) && ($ct2_42opt3 > $ct4_42opt3) && ($ct3_42opt3 > $ct1_42opt3) && ($ct3_42opt3 > $ct4_42opt3) && ($ct1_42opt3 == $ct4_42opt3)){
               $avg_42opt3 = ($ct1_42opt3+$ct2_42opt3+$ct3_42opt3)/3;
           }
           else if(($ct2_42opt3 > $ct1_42opt3) && ($ct2_42opt3 > $ct3_42opt3) && ($ct4_42opt3 > $ct1_42opt3) && ($ct4_42opt3 > $ct3_42opt3) && ($ct1_42opt3 == $ct3_42opt3)){
               $avg_42opt3 = ($ct1_42opt3+$ct2_42opt3+$ct4_42opt3)/3;
           }
           else if(($ct3_42opt3 > $ct1_42opt3) && ($ct3_42opt3 > $ct2_42opt3) && ($ct4_42opt3 > $ct1_42opt3) && ($ct4_42opt3 > $ct2_42opt3) && ($ct1_42opt3 == $ct2_42opt3)){
               $avg_42opt3 = ($ct1_42opt3+$ct3_42opt3+$ct4_42opt3)/3;
           }
           else if(($ct1_42opt3 > $ct4_42opt3) && ($ct2_42opt3 > $ct4_42opt3) && ($ct3_42opt3 > $ct4_42opt3)){
               $avg_42opt3 = ($ct1_42opt3+$ct2_42opt3+$ct3_42opt3)/3;
           }
           else if(($ct1_42opt3 > $ct3_42opt3) && ($ct2_42opt3 > $ct3_42opt3) && ($ct4_42opt3 > $ct3_42opt3 )){
               $avg_42opt3 = ($ct1_42opt3+$ct2_42opt3+$ct4_42opt3)/3;
           }
           else if(($ct1_42opt3 > $ct2_42opt3) && ($ct3_42opt3 > $ct2_42opt3) && ($ct4_42opt3 > $ct2_42opt3) ){
               $avg_42opt3 = ($ct1_42opt3+$ct3_42opt3+$ct4_42opt3)/3;
           }
           else if(($ct2_42opt3 > $ct1_42opt3) && ($ct3_42opt3 > $ct1_42opt3) && ($ct4_42opt3 > $ct1_42opt3)){
               $avg_42opt3 = ($ct2_42opt3+$ct3_42opt3+$ct4_42opt3)/3;
           }
           else if($ct1_42opt3==$ct2_42opt3 && $ct2_42opt3==$ct3_42opt3 && $ct3_42opt3==$ct4_42opt3){
               $avg_42opt3 = ($ct1_42opt3+$ct2_42opt3+$ct3_42opt3)/3;
           }
           else if(($ct1_42opt3 > $ct2_42opt3) && ($ct2_42opt3 > $ct3_42opt3) && ($ct3_42opt3 > $ct4_42opt3)){
               $avg_42opt3 = ($ct1_42opt3+$ct2_42opt3+$ct3_42opt3)/3;
           }
           else if(($ct2_42opt3 > $ct3_42opt3) && ($ct3_42opt3 > $ct4_42opt3) && ($ct4_42opt3 > $ct1_42opt3)){
               $avg_42opt3 = ($ct2_42opt3+$ct3_42opt3+$ct4_42opt3)/3;
           }
           else if(($ct3_42opt3 > $ct4_42opt3) && ($ct4_42opt3 > $ct1_42opt3) && ($ct1_42opt3 > $ct2_42opt3)){
               $avg_42opt3 = ($ct1_42opt3+$ct3_42opt3+$ct4_42opt3)/3;
           }
           else if(($ct4_42opt3 > $ct1_42opt3) && ($ct1_42opt3 > $ct2_42opt3) && ($ct2_42opt3 > $ct3_42opt3)){
               $avg_42opt3 = ($ct1_42opt3+$ct2_42opt3+$ct4_42opt3)/3;
           }
           else if(($ct1_42opt3 > $ct2_42opt3) && ($ct1_42opt3 > $ct3_42opt3) && ($ct1_42opt3 > $ct4_42opt3) && ($ct2_42opt3==$ct3_42opt3) && ($ct3_42opt3==$ct4_42opt3)){
               $avg_42opt3 = ($ct1_42opt3+$ct2_42opt3+$ct3_42opt3)/3;
           }
           else if(($ct2_42opt3 > $ct3_42opt3) && ($ct2_42opt3 > $ct4_42opt3) && ($ct2_42opt3 > $ct1_42opt3) && ($ct3_42opt3==$ct4_42opt3) && ($ct4_42opt3==$ct1_42opt3)){
               $avg_42opt3 = ($ct1_42opt3+$ct2_42opt3+$ct3_42opt3)/3;
           }
           else if(($ct3_42opt3 > $ct1_42opt3) && ($ct3_42opt3 > $ct2_42opt3) && ($ct3_42opt3 > $ct4_42opt3) && ($ct1_42opt3==$ct2_42opt3) && ($ct2_42opt3==$ct4_42opt3)){
               $avg_42opt3 = ($ct3_42opt3+$ct2_42opt3+$ct4_42opt3)/3;
           }
           else if(($ct4_42opt3 > $ct1_42opt3) && ($ct4_42opt3 > $ct2_42opt3) && ($ct4_42opt3 > $ct3_42opt3) && ($ct1_42opt3==$ct2_42opt3) && ($ct2_42opt3==$ct3_42opt3)){
               $avg_42opt3 = ($ct1_42opt3+$ct2_42opt3+$ct4_42opt3)/3;
           }



           $res42opt3 = $avg_42opt3+$att42opt3+$exam_42opt3;

           //echo '<br>';

           // echo $res42opt3;

           //echo '<br>';

           if($res42opt3>=0 && $res42opt3<=39){
               $gp42opt3 = 0.00;
           }
           else if($res42opt3>39 && $res42opt3<=44){
               $gp42opt3 = 2.00;
           }
           else if($res42opt3>44 && $res42opt3<=49){
               $gp42opt3 = 2.25;
           }
           else if($res42opt3>49 && $res42opt3<=54){
               $gp42opt3 = 2.50;
           }
           else if($res42opt3>54 && $res42opt3<=59){
               $gp42opt3 = 2.75;
           }
           else if($res42opt3>59 && $res42opt3<=64){
               $gp42opt3 = 3.00;
           }
           else if($res42opt3>64 && $res42opt3<=69){
               $gp42opt3 = 3.25;
           }
           else if($res42opt3>69 && $res42opt3<=74){
               $gp42opt3 = 3.50;
           }
           else if($res42opt3>74 && $res42opt3<=79){
               $gp42opt3 = 3.75;
           }
           else if($res42opt3>79){
               $gp42opt3 = 4.00;
           }

           // echo '<br>';

           // echo $gp42opt3;



           //theory ece 42opt3 ends




           // echo '<br>';




           // theory ece 42opt4 starts


           $ct1_42opt4 = $row['ece_42opt4_ct1'];
           $ct2_42opt4 = $row['ece_42opt4_ct2'];
           $ct3_42opt4 = $row['ece_42opt4_ct3'];
           $ct4_42opt4 = $row['ece_42opt4_ct4'];
           $att42opt4 = $row['ece_42opt4_att'];
           $exam_42opt4 = $row['ece_42opt4_exam'];



           if($ct1_42opt4==0){
               $avg_42opt4 = ($ct2_42opt4+$ct3_42opt4+$ct4_42opt4)/3;
           }
           else if($ct2_42opt4==0){
               $avg_42opt4 = ($ct1_42opt4+$ct3_42opt4+$ct4_42opt4)/3;
           }
           else if($ct3_42opt4==0){
               $avg_42opt4 = ($ct2_42opt4+$ct1_42opt4+$ct4_42opt4)/3;
           }
           else if($ct4_42opt4==0){
               $avg_42opt4 = ($ct2_42opt4+$ct3_42opt4+$ct1_42opt4)/3;
           }
           else if($ct1_42opt4==0 && $ct2_42opt4==0){
               $avg_42opt4 = ($ct3_42opt4+$ct4_42opt4)/3;
           }
           else if($ct1_42opt4==0 && $ct3_42opt4==0){
               $avg_42opt4 = ($ct2_42opt4+$ct4_42opt4)/3;
           }
           else if($ct1_42opt4==0 && $ct4_42opt4==0){
               $avg_42opt4 = ($ct2_42opt4+$ct3_42opt4)/3;
           }
           else if($ct2_42opt4==0 && $ct3_42opt4==0){
               $avg_42opt4 = ($ct1_42opt4+$ct4_42opt4)/3;
           }
           else if($ct2_42opt4==0 && $ct4_42opt4==0){
               $avg_42opt4 = ($ct1_42opt4+$ct3_42opt4)/3;
           }
           else if($ct3_42opt4==0 && $ct4_42opt4==0){
               $avg_42opt4 = ($ct1_42opt4+$ct2_42opt4)/3;
           }
           else if($ct1_42opt4==0 && $ct2_42opt4==0 && $ct3_42opt4==0){
               $avg_42opt4 = $ct4_42opt4/3;
           }
           else if($ct1_42opt4==0 && $ct2_42opt4==0 && $ct4_42opt4==0){
               $avg_42opt4 = $ct3_42opt4/3;
           }
           else if($ct1_42opt4==0 && $ct3_42opt4==0 && $ct4_42opt4==0){
               $avg_42opt4 = $ct2_42opt4/3;
           }
           else if($ct2_42opt4==0 && $ct3_42opt4==0 && $ct4_42opt4==0){
               $avg_42opt4 = $ct1_42opt4/3;
           }
           else if($ct1_42opt4==0 && $ct2_42opt4==0 && $ct3_42opt4==0 && $ct4_42opt4==0){
               $avg_42opt4 = 0;
           }
           else if(($ct1_42opt4 > $ct3_42opt4) && ($ct1_42opt4 > $ct4_42opt4) && ($ct2_42opt4 > $ct3_42opt4) && ($ct2_42opt4 > $ct4_42opt4) && ($ct3_42opt4 == $ct4_42opt4)){
               $avg_42opt4 = ($ct1_42opt4+$ct2_42opt4+$ct3_42opt4)/3;
           }
           else if(($ct1_42opt4 > $ct2_42opt4) && ($ct1_42opt4 > $ct4_42opt4) && ($ct3_42opt4 > $ct2_42opt4) && ($ct3_42opt4 > $ct4_42opt4) && ($ct2_42opt4 == $ct4_42opt4)){
               $avg_42opt4 = ($ct1_42opt4+$ct2_42opt4+$ct3_42opt4)/3;
           }
           else if(($ct1_42opt4 > $ct2_42opt4) && ($ct1_42opt4 > $ct3_42opt4) && ($ct4_42opt4 > $ct2_42opt4) && ($ct4_42opt4 > $ct3_42opt4) && ($ct2_42opt4 == $ct3_42opt4)){
               $avg_42opt4 = ($ct1_42opt4+$ct2_42opt4+$ct4_42opt4)/3;
           }
           else if(($ct2_42opt4 > $ct1_42opt4) && ($ct2_42opt4 > $ct4_42opt4) && ($ct3_42opt4 > $ct1_42opt4) && ($ct3_42opt4 > $ct4_42opt4) && ($ct1_42opt4 == $ct4_42opt4)){
               $avg_42opt4 = ($ct1_42opt4+$ct2_42opt4+$ct3_42opt4)/3;
           }
           else if(($ct2_42opt4 > $ct1_42opt4) && ($ct2_42opt4 > $ct3_42opt4) && ($ct4_42opt4 > $ct1_42opt4) && ($ct4_42opt4 > $ct3_42opt4) && ($ct1_42opt4 == $ct3_42opt4)){
               $avg_42opt4 = ($ct1_42opt4+$ct2_42opt4+$ct4_42opt4)/3;
           }
           else if(($ct3_42opt4 > $ct1_42opt4) && ($ct3_42opt4 > $ct2_42opt4) && ($ct4_42opt4 > $ct1_42opt4) && ($ct4_42opt4 > $ct2_42opt4) && ($ct1_42opt4 == $ct2_42opt4)){
               $avg_42opt4 = ($ct1_42opt4+$ct3_42opt4+$ct4_42opt4)/3;
           }
           else if(($ct1_42opt4 > $ct4_42opt4) && ($ct2_42opt4 > $ct4_42opt4) && ($ct3_42opt4 > $ct4_42opt4)){
               $avg_42opt4 = ($ct1_42opt4+$ct2_42opt4+$ct3_42opt4)/3;
           }
           else if(($ct1_42opt4 > $ct3_42opt4) && ($ct2_42opt4 > $ct3_42opt4) && ($ct4_42opt4 > $ct3_42opt4 )){
               $avg_42opt4 = ($ct1_42opt4+$ct2_42opt4+$ct4_42opt4)/3;
           }
           else if(($ct1_42opt4 > $ct2_42opt4) && ($ct3_42opt4 > $ct2_42opt4) && ($ct4_42opt4 > $ct2_42opt4) ){
               $avg_42opt4 = ($ct1_42opt4+$ct3_42opt4+$ct4_42opt4)/3;
           }
           else if(($ct2_42opt4 > $ct1_42opt4) && ($ct3_42opt4 > $ct1_42opt4) && ($ct4_42opt4 > $ct1_42opt4)){
               $avg_42opt4 = ($ct2_42opt4+$ct3_42opt4+$ct4_42opt4)/3;
           }
           else if($ct1_42opt4==$ct2_42opt4 && $ct2_42opt4==$ct3_42opt4 && $ct3_42opt4==$ct4_42opt4){
               $avg_42opt4 = ($ct1_42opt4+$ct2_42opt4+$ct3_42opt4)/3;
           }
           else if(($ct1_42opt4 > $ct2_42opt4) && ($ct2_42opt4 > $ct3_42opt4) && ($ct3_42opt4 > $ct4_42opt4)){
               $avg_42opt4 = ($ct1_42opt4+$ct2_42opt4+$ct3_42opt4)/3;
           }
           else if(($ct2_42opt4 > $ct3_42opt4) && ($ct3_42opt4 > $ct4_42opt4) && ($ct4_42opt4 > $ct1_42opt4)){
               $avg_42opt4 = ($ct2_42opt4+$ct3_42opt4+$ct4_42opt4)/3;
           }
           else if(($ct3_42opt4 > $ct4_42opt4) && ($ct4_42opt4 > $ct1_42opt4) && ($ct1_42opt4 > $ct2_42opt4)){
               $avg_42opt4 = ($ct1_42opt4+$ct3_42opt4+$ct4_42opt4)/3;
           }
           else if(($ct4_42opt4 > $ct1_42opt4) && ($ct1_42opt4 > $ct2_42opt4) && ($ct2_42opt4 > $ct3_42opt4)){
               $avg_42opt4 = ($ct1_42opt4+$ct2_42opt4+$ct4_42opt4)/3;
           }
           else if(($ct1_42opt4 > $ct2_42opt4) && ($ct1_42opt4 > $ct3_42opt4) && ($ct1_42opt4 > $ct4_42opt4) && ($ct2_42opt4==$ct3_42opt4) && ($ct3_42opt4==$ct4_42opt4)){
               $avg_42opt4 = ($ct1_42opt4+$ct2_42opt4+$ct3_42opt4)/3;
           }
           else if(($ct2_42opt4 > $ct3_42opt4) && ($ct2_42opt4 > $ct4_42opt4) && ($ct2_42opt4 > $ct1_42opt4) && ($ct3_42opt4==$ct4_42opt4) && ($ct4_42opt4==$ct1_42opt4)){
               $avg_42opt4 = ($ct1_42opt4+$ct2_42opt4+$ct3_42opt4)/3;
           }
           else if(($ct3_42opt4 > $ct1_42opt4) && ($ct3_42opt4 > $ct2_42opt4) && ($ct3_42opt4 > $ct4_42opt4) && ($ct1_42opt4==$ct2_42opt4) && ($ct2_42opt4==$ct4_42opt4)){
               $avg_42opt4 = ($ct3_42opt4+$ct2_42opt4+$ct4_42opt4)/3;
           }
           else if(($ct4_42opt4 > $ct1_42opt4) && ($ct4_42opt4 > $ct2_42opt4) && ($ct4_42opt4 > $ct3_42opt4) && ($ct1_42opt4==$ct2_42opt4) && ($ct2_42opt4==$ct3_42opt4)){
               $avg_42opt4 = ($ct1_42opt4+$ct2_42opt4+$ct4_42opt4)/3;
           }



           $res42opt4 = $avg_42opt4+$att42opt4+$exam_42opt4;

           //echo '<br>';

           // echo $res42opt4;

           //echo '<br>';

           if($res42opt4>=0 && $res42opt4<=39){
               $gp42opt4 = 0.00;
           }
           else if($res42opt4>39 && $res42opt4<=44){
               $gp42opt4 = 2.00;
           }
           else if($res42opt4>44 && $res42opt4<=49){
               $gp42opt4 = 2.25;
           }
           else if($res42opt4>49 && $res42opt4<=54){
               $gp42opt4 = 2.50;
           }
           else if($res42opt4>54 && $res42opt4<=59){
               $gp42opt4 = 2.75;
           }
           else if($res42opt4>59 && $res42opt4<=64){
               $gp42opt4 = 3.00;
           }
           else if($res42opt4>64 && $res42opt4<=69){
               $gp42opt4 = 3.25;
           }
           else if($res42opt4>69 && $res42opt4<=74){
               $gp42opt4 = 3.50;
           }
           else if($res42opt4>74 && $res42opt4<=79){
               $gp42opt4 = 3.75;
           }
           else if($res42opt4>79){
               $gp42opt4 = 4.00;
           }

           //echo '<br>';

           // echo $gp42opt4;



           //theory ece 42opt4 ends




           //  echo '<br>';
           //  echo '<br>';
           //  echo '<br>';
           //  echo '<br>';
           //  echo '<br>';



           // sessional ece 4224 starts


           $att4224 = $row['ece_4224_att'];
           $report4224 = $row['ece_4224_re'];
           $quiz4224 = $row['ece_4224_quiz'];
           $bv4224 = $row['ece_4224_bv'];

           $res4224 = $att4224+$report4224+$quiz4224+$bv4224;

           //echo '<br>';

           // echo $res4224;

           //echo '<br>';

           if($res4224>=0 && $res4224<=39){
               $gp4224 = 0.00;
           }
           else if($res4224>=40 && $res4224<=44){
               $gp4224 = 2.00;
           }
           else if($res4224>=45 && $res4224<=49){
               $gp4224 = 2.25;
           }
           else if($res4224>=50 && $res4224<=54){
               $gp4224 = 2.50;
           }
           else if($res4224>=55 && $res4224<=59){
               $gp4224 = 2.75;
           }
           else if($res4224>=60 && $res4224<=64){
               $gp4224 = 3.00;
           }
           else if($res4224>=65 && $res4224<=69){
               $gp4224 = 3.25;
           }
           else if($res4224>=70 && $res4224<=74){
               $gp4224 = 3.50;
           }
           else if($res4224>=75 && $res4224<=79){
               $gp4224 = 3.75;
           }
           else if($res4224>=80){
               $gp4224 = 4.00;
           }

           //echo '<br>';

           // echo $gp4224;


           // sessional ece 4224 ends



           //echo '<br>';



           // sessional ece 4218 starts


           $att4218 = $row['ece_4218_att'];
           $report4218 = $row['ece_4218_re'];
           $quiz4218 = $row['ece_4218_quiz'];
           $bv4218 = $row['ece_4218_bv'];

           $res4218 = $att4218+$report4218+$quiz4218+$bv4218;

           //echo '<br>';

           // echo $res42opt3;

           //echo '<br>';

           if($res4218>=0 && $res4218<=39){
               $gp4218 = 0.00;
           }
           else if($res4218>=40 && $res4218<=44){
               $gp4218 = 2.00;
           }
           else if($res4218>=45 && $res4218<=49){
               $gp4218 = 2.25;
           }
           else if($res4218>=50 && $res4218<=54){
               $gp4218 = 2.50;
           }
           else if($res4218>=55 && $res4218<=59){
               $gp4218 = 2.75;
           }
           else if($res4218>=60 && $res4218<=64){
               $gp4218 = 3.00;
           }
           else if($res4218>=65 && $res4218<=69){
               $gp4218 = 3.25;
           }
           else if($res4218>=70 && $res4218<=74){
               $gp4218 = 3.50;
           }
           else if($res4218>=75 && $res4218<=79){
               $gp4218 = 3.75;
           }
           else if($res4218>=80){
               $gp4218 = 4.00;
           }

           //echo '<br>';

           // echo $gp42opt3lab;


           // sessional ece 4218 ends

           //echo '<br>';


           // sessional ece 42opt3 starts


           $att42opt3lab = $row['ece_42opt3_attlab'];
           $report42opt3 = $row['ece_42opt3_re'];
           $quiz42opt3 = $row['ece_42opt3_quiz'];
           $bv42opt3 = $row['ece_42opt4_bv'];

           $res42opt3lab = $att42opt3lab + $report42opt3 + $quiz42opt3 + $bv42opt3;

           //echo '<br>';

           // echo $res42opt4lab;

           //echo '<br>';

           if($res42opt3lab>=0 && $res42opt3lab<=39){
               $gp42opt3lab = 0.00;
           }
           else if($res42opt3lab>=40 && $res42opt3lab<=44){
               $gp42opt3lab = 2.00;
           }
           else if($res42opt3lab>=45 && $res42opt3lab<=49){
               $gp42opt3lab = 2.25;
           }
           else if($res42opt3lab>=50 && $res42opt3lab<=54){
               $gp42opt3lab = 2.50;
           }
           else if($res42opt3lab>=55 && $res42opt3lab<=59){
               $gp42opt3lab = 2.75;
           }
           else if($res42opt3lab>=60 && $res42opt3lab<=64){
               $gp42opt3lab = 3.00;
           }
           else if($res42opt3lab>=65 && $res42opt3lab<=69){
               $gp42opt3lab = 3.25;
           }
           else if($res42opt3lab>=70 && $res42opt3lab<=74){
               $gp42opt3lab = 3.50;
           }
           else if($res42opt3lab>=75 && $res42opt3lab<=79){
               $gp42opt3lab = 3.75;
           }
           else if($res42opt3lab>=80){
               $gp42opt3lab = 4.00;
           }

           //echo '<br>';

           // echo $gp42opt4lab;


           // sessional ece 42opt3 ends




           // sessional ece 42opt4 starts


           $att42opt4lab = $row['ece_42opt4_attlab'];
           $report42opt4 = $row['ece_42opt4_re'];
           $quiz42opt4 = $row['ece_42opt4_quiz'];
           $bv42opt4 = $row['ece_42opt4_bv'];

           $res42opt4lab = $att42opt4lab + $report42opt4 + $quiz42opt4 + $bv42opt4;

           //echo '<br>';

           // echo $res42opt4lab;

           //echo '<br>';

           if($res42opt4lab>=0 && $res42opt4lab<=39){
               $gp42opt4lab = 0.00;
           }
           else if($res42opt4lab>=40 && $res42opt4lab<=44){
               $gp42opt4lab = 2.00;
           }
           else if($res42opt4lab>=45 && $res42opt4lab<=49){
               $gp42opt4lab = 2.25;
           }
           else if($res42opt4lab>=50 && $res42opt4lab<=54){
               $gp42opt4lab = 2.50;
           }
           else if($res42opt4lab>=55 && $res42opt4lab<=59){
               $gp42opt4lab = 2.75;
           }
           else if($res42opt4lab>=60 && $res42opt4lab<=64){
               $gp42opt4lab = 3.00;
           }
           else if($res42opt4lab>=65 && $res42opt4lab<=69){
               $gp42opt4lab = 3.25;
           }
           else if($res42opt4lab>=70 && $res42opt4lab<=74){
               $gp42opt4lab = 3.50;
           }
           else if($res42opt4lab>=75 && $res42opt4lab<=79){
               $gp42opt4lab = 3.75;
           }
           else if($res42opt4lab>=80){
               $gp42opt4lab = 4.00;
           }

           //echo '<br>';

           // echo $gp42opt4lab;


           // sessional ece 42opt4 ends








           // echo '<br>';
           // echo '<br>';
           // echo '<br>';
           // echo '<br>';
           // echo '<br>';






           // project-II 4000 starts

         $res4000pro2 = $row['ece_4000_pro2'];

         //echo '<br>';

         // echo $res4000pro2;

         //echo '<br>';

         if($res4000pro2>=0 && $res4000pro2<=39){
             $gp4000pro2 = 0.00;
         }
         else if($res4000pro2>=40 && $res4000pro2<=44){
             $gp4000pro2 = 2.00;
         }
         else if($res4000pro2>=45 && $res4000pro2<=49){
             $gp4000pro2 = 2.25;
         }
         else if($res4000pro2>=50 && $res4000pro2<=54){
             $gp4000pro2 = 2.50;
         }
         else if($res4000pro2>=55 && $res4000pro2<=59){
             $gp4000pro2 = 2.75;
         }
         else if($res4000pro2>=60 && $res4000pro2<=64){
             $gp4000pro2 = 3.00;
         }
         else if($res4000pro2>=65 && $res4000pro2<=69){
             $gp4000pro2 = 3.25;
         }
         else if($res4000pro2>=70 && $res4000pro2<=74){
             $gp4000pro2 = 3.50;
         }
         else if($res4000pro2>=75 && $res4000pro2<=79){
             $gp4000pro2 = 3.75;
         }
         else if($res4000pro2>=80){
             $gp4000pro2 = 4.00;
         }

         // echo '<br>';

         // echo $gp4000pro2;

         // echo '<br>';
         // echo '<br>';
         // echo '<br>';


         // project-II 4000 ends



           echo '<br>';

           $gp42 =  ($gp4211+ $gp4223+ $gp4217+ $gp42opt4+ $gp42opt3)*3 + ($gp4224*0.75) + ($gp42opt3lab*0.75 + $gp42opt4lab*0.75) + ($gp4218*0.75) + ($gp4000pro2*3);

           $format_gp42 = number_format($gp42, 2);


           $gpa42 =  (($gp4211+ $gp4223+ $gp4217+ $gp42opt4+ $gp42opt3)*3 + ($gp4224*0.75) + ($gp42opt3lab*0.75 + $gp42opt4lab*0.75) + ($gp4218*0.75) + ($gp4000pro2*3))/21.75;

           $format_gpa42 = number_format($gpa42, 2);






           ?>

          <div class="resflex">
               <div>Roll: <?php echo $row['roll42']; ?></div>
               <div>GP: <?php echo $format_gp42?></div>
               <div>GPA: <?php echo $format_gpa42?></div>
               <div>CGPA: <?php

               // echo $format_gpa11;

               // echo '<br>';

               // echo $format_gpa21;

               // echo '<br>';

               $cgpa42 = ($format_gpa11 + $format_gpa12 + $format_gpa21 + $format_gpa22 + $format_gpa31 + $format_gpa32 + $format_gpa41 + $format_gpa42)/8;

               $format_cgpa42 = number_format($cgpa42, 2);

               echo $format_cgpa42;



               ?></div>
           </div>

           <br>
           <br>



<?php
 }
?>

<!-- Result 4-2 Ends -->












</body>

</html>