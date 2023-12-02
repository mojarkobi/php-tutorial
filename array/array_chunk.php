<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$chunks = array_chunk($array, 3);  //  array_chunk asole array ke part part kore fele and two dimenstional array banay
// $chunks = [[1, 2, 3], [4, 5, 6], [7, 8, 9]]

print_r($chunks);

$de_chunked = array_merge(...$chunks);
// $de_chunked = [1, 2, 3, 4, 5, 6, 7, 8, 9]

print_r($de_chunked);
?>