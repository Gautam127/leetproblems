<?php
$nums = array(1,2,1);
$len=count($nums);
    for ($i=0;$i<$len;$i++){
        $nums[$len+$i]=$nums[$i]; 
        }
         print_r($nums);
?>