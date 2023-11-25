<?php

// Define an associative array using the array function
// You can use single or double quotes for key-value pairs
$person = array("name" => 'ashik', 'age' => 25);
$person['roll'] = "2";

// Echo the values from the $person array
echo "Name: " . $person['name'] . " and age is " . $person['age'] . " and Roll No: " . $person['roll'];

echo "\n \n";
// Define an empty associative array for dynamically assigning key-value pairs
$employees = [];

// Dynamically assign a key-value pair to the $employees array
$employees["" . $person['name']] = 'age is ' . $person['age'];




// Echo the value associated with the key "ashik" in the $employees array
// $employess['ashik'] show result `age is 25` because 
// this code $employees["" . $person['name']]  dynamicaly assign $employees['ashik'] = 'age is ' . $person['age'];

echo $employees['ashik'];

?>
