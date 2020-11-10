<?php
function mergeStrings($s1, $s2) {

    $str_arr1 = str_split($s1);
    $str_arr2 = str_split($s2);

    $output=[];
    for($i=0,$j=0;$i<count($str_arr1) && $j<count($str_arr2);){


        if($str_arr1[$i] <= $str_arr2[$j]){

            array_push($output,$str_arr1[$i]);
            ++$i;
        }else{
            array_push($output,$str_arr2[$j]);
            ++$j;


        }


    }

    while($i<count($str_arr1)){
        array_push($output,$str_arr1[$i]);
        ++$i;


    }

    while($j<count($str_arr2)){
        array_push($output,$str_arr2[$j]);
        ++$j;


    }




    return implode($output);



}
$s1= "super";
$s2= "tower";

$ss1= "dce";
$ss2= "cccbd";

$sss1="uchlmfelno";
$sss2="gr";

$ssss1= "ougtaleegvrabhugzyx";
$ssss2= "wvieaqgaegbxg";

echo mergeStrings($s1, $s2);
echo "<br/><br/>";
echo mergeStrings($ss1, $ss2);
echo "<br/><br/>";
echo mergeStrings($sss1, $sss2);
echo "<br/><br/>";
echo mergeStrings($ssss1, $ssss2);

//$l=str_split("abcdefghijklmnopqrstuvwxyz");
//echo "<br/><br/><br/><br/><br/><br/>";
//
//for($i=0; $i<count($l);$i++){
//    echo $i." - ". $l[$i]."<br/>";
//
//}