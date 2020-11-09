<?php
function mergeStrings($s1, $s2) {

    $str_arr1 = str_split($s1);
    $str_arr2 = str_split($s2);
    $i=0;
    $j=0;
    $k=0;
    $output=[];
    for(;$i<count($str_arr1) && $j<count($str_arr2);){


        if($str_arr1[$i] <= $str_arr2[$j]){

            array_push($output,$str_arr1[$i]);
            ++$i;
        }else{
            array_push($output,$str_arr2[$j]);
            ++$j;


        }
        ++$k;

    }

    while($i<count($str_arr1)){
        array_push($output,$str_arr1[$i]);
        ++$i;
        ++$k;

    }

    while($j<count($str_arr2)){
        array_push($output,$str_arr2[$j]);
        ++$j;
        ++$k;

    }

    return implode($output);



}
$s1= "dce";
$s2= "cccbd";
//$s1="uchlmfelno";
//$s2="gr";
//$s1= "ougtaleegvrabhugzyx";
//$s2= "wvieaqgaegbxg";

echo mergeStrings($s1, $s2);