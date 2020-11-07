<?php
function countTinyPairs($a, $b, $k) {

    $rb= array_reverse($b);
    $counter = 0;
    for($i=0; $i<count($a);$i++){

        if(intval($a[$i].$rb[$i])<$k){
            $counter= $counter+1;

        }


    }

    return $counter;
}