<?php
$main_strings = ['Do you apples?', 'Can we mangoes?'];
$index = 7;
foreach($main_strings as $string) {
    $text = substr($string, 0, $index).'eat '.substr($string, $index); 
    echo $text."\n";
}

// upore substr($string, 0, $index) mane holo substr($string,from,to)  mane substr() ti $string variable theke
//  0 theke 7 index porjonto string extract korbe
// abar substr($string, $index)  mane holo akhane string shudu first starting parameter diche tai ati
// string theke  7 index theke suru hobe r shesh obdi string ta ber korbe


// uporer code er result hobe nicher moto

// Do you eat apples? 
// Can we eat mangoes? 
?>
