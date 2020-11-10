<?php
function alternatingSort($a){

    $r=array_reverse($a);
    for($i=0;$i<intval((count($a))/2);$i++) {

        print $a[$i];

        print $r[$i];

    }
}

$arr=[1,3,5,6,4,2];

print_r(alternatingSort($arr));