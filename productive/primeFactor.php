<?php
$temp = $_GET['num'];
       $factors = "";
       echo "  The factors of   </br> " . $temp . "   are:</br>";
       while($temp != 1){
       for($ii = 2; $ii <= (ceil(sqrt($temp))); $ii++){
            if($temp%$ii == 0){
                $factors = $factors . "  " . $ii;
                $temp = $temp/$ii;
                $ii = $temp + 1;       
      }else{
       if($ii == ceil(sqrt($temp))){
       $factors = $factors . " " . $temp;
                echo $factors;
                $temp = 1;
                $ii = $temp + 1;   
       }}
            }
       }
?>