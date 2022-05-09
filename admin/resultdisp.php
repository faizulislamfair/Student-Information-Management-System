<?php

require './dbcon.php';

?>

<?php
		    $db_sinfo = mysqli_query($link, "SELECT * FROM `semester_21` ");
			while($row = mysqli_fetch_assoc($db_sinfo)){ 
?>
			
            <?php echo $row['roll']; ?> <br>

            <?php 


            // theory 2103 starts

            $ct1 = $row['ece_2103_ct1'];
            $ct2 = $row['ece_2103_ct2'];
            $ct3 = $row['ece_2103_ct3'];
            $ct4 = $row['ece_2103_ct4'];
            $att2103 = $row['ece_2103_att'];
            $exam2103 = $row['ece_2103_exam'];


            if($ct1==0){
                $avg = ($ct2+$ct3+$ct4)/3;
            }
            else if($ct2==0){
                $avg = ($ct1+$ct3+$ct4)/3;
            }
            else if($ct3==0){
                $avg = ($ct2+$ct1+$ct4)/3;
            }
            else if($ct4==0){
                $avg = ($ct2+$ct3+$ct1)/3;
            }
            else if($ct1==0 && $ct2==0){
                $avg = ($ct3+$ct4)/3;
            }
            else if($ct1==0 && $ct3==0){
                $avg = ($ct2+$ct4)/3;
            }
            else if($ct1==0 && $ct4==0){
                $avg = ($ct2+$ct3)/3;
            }
            else if($ct2==0 && $ct3==0){
                $avg = ($ct1+$ct4)/3;
            }
            else if($ct2==0 && $ct4==0){
                $avg = ($ct1+$ct3)/3;
            }
            else if($ct3==0 && $ct4==0){
                $avg = ($ct1+$ct2)/3;
            }
            else if($ct1==0 && $ct2==0 && $ct3==0){
                $avg = $ct4/3;
            }
            else if($ct1==0 && $ct2==0 && $ct4==0){
                $avg = $ct3/3;
            }
            else if($ct1==0 && $ct3==0 && $ct4==0){
                $avg = $ct2/3;
            }
            else if($ct2==0 && $ct3==0 && $ct4==0){
                $avg = $ct1/3;
            }
            else if($ct1==0 && $ct2==0 && $ct3==0 && $ct4==0){
                $avg = 0;
            }
            else if(($ct1 && $ct2 && $ct3) > $ct4 ){
                $avg = ($ct1+$ct2+$ct3)/3;
            }
            else if(($ct1 && $ct2 && $ct4) > $ct3 ){
                $avg = ($ct1+$ct2+$ct4)/3;
            }
            else if(($ct1 && $ct3 && $ct4) > $ct2 ){
                $avg = ($ct1+$ct3+$ct4)/3;
            }
            else if(($ct2 && $ct3 && $ct4) > $ct1 ){
                $avg = ($ct2+$ct3+$ct4)/3;
            }
            else if($ct1==$ct2 && $ct2==$ct3 && $ct3==$ct4){
                $avg = ($ct1+$ct2+$ct3)/3;
            }

            $res2103 = $avg+$att2103+$exam2103;

            echo '<br>';

            echo $res2103;

            echo '<br>';

            if($res2103>=0 && $res2103<=39){
                $gp2103 = 0.00;
            }
            else if($res2103>=40 && $res2103<=44){
                $gp2103 = 2.00;
            }
            else if($res2103>=45 && $res2103<=49){
                $gp2103 = 2.25;
            }
            else if($res2103>=50 && $res2103<=54){
                $gp2103 = 2.50;
            }
            else if($res2103>=55 && $res2103<=59){
                $gp2103 = 2.75;
            }
            else if($res2103>=60 && $res2103<=64){
                $gp2103 = 3.00;
            }
            else if($res2103>=65 && $res2103<=69){
                $gp2103 = 3.25;
            }
            else if($res2103>=70 && $res2103<=74){
                $gp2103 = 3.50;
            }
            else if($res2103>=75 && $res2103<=79){
                $gp2103 = 3.75;
            }
            else if($res2103>=80){
                $gp2103 = 4.00;
            }

            echo '<br>';

            echo $gp2103;


            //theory 2103 ends


             echo '<br>';


            // sessional 2104 starts

            
            $att2104 = $row['ece_2104_att'];
            $report2104 = $row['ece_2104_re'];
            $quiz2104 = $row['ece_2104_quiz'];
            $bv2104 = $row['ece_2104_bv'];

            $res2104 = $att2104+$report2104+$quiz2104+$bv2104;

            echo '<br>';

            echo $res2104;

            echo '<br>';

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

            echo '<br>';

            echo $gp2104;


            // sessional 2104 starts


            echo '<br>';


            // project 2100 starts

            $res2100 = $row['ece_2100_score'];

            echo '<br>';

            echo $res2100;

            echo '<br>';

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

            echo '<br>';

            echo $gp2100;


            // project 2100 ends








            ?> <br> <br> <br> <br> <br>
            

<?php
	} 
?>
			