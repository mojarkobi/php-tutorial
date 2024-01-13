<?php

$string = "the PHP tutorial is awesome Web Tutorial PHP language";

echo preg_match("/php/", $string) ? "found\n" : "not found\n"; // not found becase exact not match

echo preg_match("/PHP/", $string) ? "found\n" : "not found\n"; // match found becase exact match

echo preg_match("/php/i", $string) ? "found\n" : "not found\n"; // match found becase case insensative modifier on

echo (preg_match_all("/php/i", $string, $matches_list)); // it show 2 because 'php' found two times and it make array 
//for matched element name $matched_list

echo PHP_EOL;

// print_r($matches_list);


preg_match_all("/php|web/i", $string, $matches_list); // it show `php web php` because i we use | pipe sign

print_r($matches_list);




preg_match_all("/a|w/i", $string, $matches_list); //it show aawWaaa  
print_r($matches_list);


preg_match_all("/[aw]/i", $string, $matches_list); // it show aawWaaa becase this character class work on indivigual 
//character of mention inside [] bracket
print_r($matches_list);


// here shown character class with caret sign
preg_match_all("/[^aw]/i", $string, $matches_list); // it show "the PHP tutoril is esome Web Tutoril PHP lnguge" 
//becase this ^ caret sign indicate that it print only unmatched character
print_r($matches_list);


$pattern = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
if(preg_match($pattern, $text)){
    echo "Match found!";
} else{
    echo "Match not found.";
}


preg_match_all("/[?:php]/i", $string, $matches_list); // it show `php web php` because i we use | pipe sign

print_r($matches_list);