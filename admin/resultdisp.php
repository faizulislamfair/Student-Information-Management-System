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

            echo $avg;

            ?> <br> <br> <br> <br> <br>
            

<?php
	} 
?>
			