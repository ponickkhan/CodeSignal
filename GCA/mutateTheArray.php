<?php
function mutateTheArray($n, $a) {
    $b =[];

    for($i=0; $i<count($a);$i++){
        if($b[$i]==0){
            $b[$i]=0;
        }
        $b[$i] = $a[$i - 1] + $a[$i] + $a[$i + 1];


    }
    return $b;
}