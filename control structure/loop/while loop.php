<?php


$str = "hello ashik how are you";
$str2 = strtok($str," ");

while( $str2 !== false ){
    
    echo $str2;
    $str2 = strtok(" ");

}

?>

