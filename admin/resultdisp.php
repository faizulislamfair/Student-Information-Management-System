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

            echo $ct1;
            echo '<br>'; 
            echo $ct2;
            echo '<br>';
            echo $ct3;
            echo '<br>';
            echo $ct4;
            echo '<br>';

            ?> <br> <br> <br> <br> <br>
            

<?php
	} 
?>
			