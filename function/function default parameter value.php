<?php 

function factorial($n = 4){

    $result = 1;
    for($i = $n; $i>1 ;$i--){

        $result *= $i;
    }


    return $result;

}


echo factorial();