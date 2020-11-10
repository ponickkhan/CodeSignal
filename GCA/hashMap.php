<?php
function hashMap($queryType, $query) {

    $hashMap=[];
    for($i=0;$i<sizeof($queryType);$i++){


        if($queryType[$i]=="insert"){
            //insert
            $key = $query[$i][0];
            $val = $query[$i][1];
            $hashMap[$key]=$val;
            // print $query[$i][1]."|";
        }elseif($queryType[$i]=="addToValue"){
            //addToValue

            foreach($hashMap as $key=>$value){

                print $hashMap[0];
            }

        }elseif($queryType[$i]=="addToKey"){
            //addTokey

        }elseif($queryType[$i]=="get"){

            return $hashMap[$query[$i][0]];
        }
    }



    print_r($hashMap);

return ("hello");

}

$queryType = ["insert",
    "insert",
    "addToValue",
    "addToKey",
    "get"];
$query=
[[1,2],
    [2,3],
    [2],
    [1],
    [3]];

echo hashMap($queryType,$query);