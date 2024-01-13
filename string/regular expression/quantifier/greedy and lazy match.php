<?php

$string = '<div> the name <br> of our national team <div>  and our main <h>';

$pattern = '/<.*>/'; // greedy match example

preg_match($pattern, $string, $matches); // output matched <div> the name <br> of our national team <div>  and our main <h>

print_r($matches);

$pattern2 = '/<.*?>/'; // lazy match example

preg_match_all($pattern2, $string, $matches2);  // output only these  [0] => <div> [1] => <br> [2] => <div> [3] => <h>

print_r($matches2);
?>