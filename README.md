<?php
    $digits = [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6];
    $a=implode($digits);
    print ($a);
    $c=bcadd($a, 1);
    print_r(str_split($c));
?>
