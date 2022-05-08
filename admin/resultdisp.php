<?php
		    $db_sinfo = mysqli_query($link, "SELECT * FROM `semester_21` ");
			while($row = mysqli_fetch_assoc($db_sinfo)){ 
?>
			
            <?php echo $row['roll']; ?> <br>

            <?php 
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


            ?> <br> <br> <br> <br> <br>
            

<?php
	} 
?>
			