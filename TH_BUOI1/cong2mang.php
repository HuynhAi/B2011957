<?php
  $a = array(344,224,223,7737,9922,-828);
  $b = array(-344,-324,123,773,-9922,828,9);
   
  $clength = count($a);
  
  $rlength = count($b);
    if($clength==$rlength){
        for($i=0;$i < $clength; $i++){
            $a[$i]=$a[$i] + $b[$i];
            echo  $a[$i] .' ';
        }
    }
    else echo'loi';
?>