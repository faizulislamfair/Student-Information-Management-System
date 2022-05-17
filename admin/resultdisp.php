<?php

require './dbcon.php';

?>




<div class="segment-area">
    <h2>1st Year Odd Semester Result</h2>
</div>

 
 <!-- Result 1-1 Starts -->


 <?php     

$db_11 = mysqli_query($link, "SELECT * FROM `semester_11` ");
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




           // theory math 2117 starts


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



           // sessional ece 2104 starts


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

           $gpa11 =  (($gp1101+ $gp1103+ $gpmath1117+ $gphum1117+ $gpphy1117)*3 + ($gp1102*1.5) + ($gp1104*1.5 + $gphum1118*0.75 + $gpphy1118*0.75) + ($gp1100*0.75))/20.25;

           $format_gpa11 = number_format($gpa11, 2);



           ?>

        




            <div>
                <h2>Roll: <?php echo $row['roll11']; ?></h2> 
                <h2>CGPA: <?php echo $format_gpa11  ?></h2>
            </div>
          
            <br>
            <br>
           



<?php
	} 
?>

 <!-- Result 1-1 Ends -->




 
<div class="segment-area">
    <h2>2nd Year Odd Semester Result</h2>
</div>






 <!-- Result 2-1 Starts -->


<?php     

		    $db_21 = mysqli_query($link, "SELECT * FROM `semester_21` ");
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

            $gpa21 =  (($gp2103+ $gp2107+ $gp2111+ $gpchem2117+ $gpmath2117)*3 + ($gp2104*1.5) + ($gp2108*0.75 + $gp2118*0.75 + $gp2112*0.75) + ($gp2100*0.75))/19.5;

            $format_gpa21 = number_format($gpa21, 2);

            
        



            ?>  
           
           <div>
                <h2>Roll: <?php echo $row['roll21']; ?></h2> 
                <h2>CGPA: <?php

                // echo $format_gpa11;

                // echo '<br>';

                // echo $format_gpa21;

                // echo '<br>';

                $cgpa21 = ($format_gpa11 + $format_gpa21)/2;

                $format_cgpa21 = number_format($cgpa21, 2);
                
                echo $format_cgpa21; 
                
                
                
                ?></h2>
            </div>
          
            <br>
            <br>
          
            

<?php
	} 
?>

 <!-- Result 2-1 Ends -->

			
