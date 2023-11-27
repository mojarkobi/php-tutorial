<?php

// Declare a regular expression
$regex = "([0-9]+)";

// Declare a string
$original = "Completed graduation in 2004";
$replaceWith = "2002";

// Use ereg_replace() function to search a
// string pattern in an other string
$original = preg_replace($regex, $replaceWith, $original); 
	
// Display result
echo $original;

?>


<?php


// Declare a string
$ip = "134.645.478.670"; 

// Declare a regular expression
$regex = "/\./";

// Use preg_split() function to
// convert a given string into
// an array
$output = preg_split ($regex, $ip); 

echo "$output[0] <br>";
echo "$output[1] <br>";
echo "$output[2] <br>";
echo "$output[3] <br>";

echo preg_match($regex,$ip);

echo "\n \n";

$ip_array = explode('.',$ip);

echo $ip_array[0] ."<br>";
echo $ip_array[1]. "<br>";
echo $ip_array[2]. "<br>";

?>
