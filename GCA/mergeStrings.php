<?php
function mergeStrings($s1, $s2) {

    $str_arr1 = str_split($s1);
    $str_arr2 = str_split($s2);

    for($i=0;$i<count($str_arr1);$i++){


        if($str_arr1[$i] > $str_arr2[$i]){

            print $str_arr1[$i]." - ".$str_arr2[$i]." | ";
        }

    }

}
$s1="dce";
$s2="cccbd";

mergeStrings($s1, $s2);